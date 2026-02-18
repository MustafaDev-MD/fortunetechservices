<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\UserAssessment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;

#[On('set-dob')]
#[Layout('layouts.app-livewire')]
class AssessmentWizard extends Component
{
    public function setDob($payload)
{
    $this->dob = $payload['date'];
    $this->validateOnly('dob');
}
// AssessmentWizard.php mein ye ensure karein
public function updatedDob($value)
{
    // Debug karne ke liye aap yahan dd($value) kar sakte hain
    $this->validateOnly('dob');
}
    public $step = 1;

    // Step 1
    public $name, $email, $dob, $phone, $password, $password_confirmation, $mind;

    // Step 2
    public $stage;

    // Step 3
    public $answers = [];
    public $structuredAnswers = []; // <-- add this

    // Step 4
    public $friction = 0;
    public $status = '';
    public $message = '';

    public $questions = [];

    public function mount()
    {
        $this->questions = [
            'Scaling' => [
                'Data Integrity' => ['Unified' => 20, 'Fragmented' => 10, 'Blind' => 0],
                'Workflow Autonomy' => ['Autonomous' => 20, 'Strained' => 10, 'Collapsed' => 0],
                'Revenue Engine' => ['Engineered' => 20, 'Volatile' => 10, 'Passive' => 0],
                'Technical Debt' => ['Optimized' => 20, 'Drag' => 10, 'Gridlock' => 0],
                'Talent Density' => ['High Density' => 20, 'Mixed Bag' => 10, 'Low Density' => 0],
            ],
            'Founding' => [
                'Market Validation' => ['Empirical' => 20, 'Anecdotal' => 10, 'Hypothetical' => 0],
                'Runway Strategy' => ['Secure' => 20, 'Tight' => 10, 'Critical' => 0],
                'Structure' => ['Fortified' => 20, 'Standard' => 10, 'Informal' => 0],
                'Tech Stack' => ['Scalable' => 20, 'No-Code/Speed' => 10, 'Messy' => 0],
                'Go-To-Market' => ['Sniper' => 20, 'Shotgun' => 10, 'Unknown' => 0],
            ],
        ];

        $this->answers = array_fill(0, count($this->questions['Scaling']), null);
    }

    protected function rules()
    {
        if ($this->step == 1) {
            return [
                'name' => 'required|string|min:3|max:50',
                'email' => 'required|email|unique:users,email',
                'dob' => 'required|date_format:Y-m-d|before:today',
                'phone' => ['required', 'regex:/^\+?[0-9]{10,15}$/'], // optional: country code allowed
                'password' => 'required|min:6|confirmed', // password_confirmation field required
                'mind' => 'nullable|string|max:500',
            ];
        } elseif ($this->step == 2) {
            return [
                'stage' => 'required|in:Scaling,Founding',
            ];
        } elseif ($this->step == 3) {
            return [
                'answers' => 'required|array|size:' . count($this->questions[$this->stage]),
                'answers.*' => 'required|numeric|min:0',
            ];
        }

        return [];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    // public function nextStep()
    // {
    //     $this->validate();
    //     $this->step++;
    // }

    public function nextStep()
    {
        try {
            $this->validate();
            $this->step++;
        } catch (\Illuminate\Validation\ValidationException $e) {

            // Get first error only
            $firstError = collect($e->validator->errors()->all())->first();

            // Dispatch only first error to Toastify
            $this->dispatch('toast-error', message: $firstError);

            return;
        }
    }


    public function previousStep()
    {
        $this->step--;
    }

    // Step 3 – Validate and prepare structured answers
    public function submitStep3()
    {
        $this->validate([
            'answers' => 'required|array|size:5',
            'answers.*' => 'required|numeric',
        ]);

        // Prepare structured answers with question text, selected option, points
        $structuredAnswers = [];
        foreach ($this->questions[$this->stage] as $index => $opts) {
            $points = $this->answers[array_search($index, array_keys($this->questions[$this->stage]))];
            $selectedOption = array_search($points, $opts);
            $structuredAnswers[$index] = [
                'selected' => $selectedOption,
                'points' => $points,
            ];
        }

        $this->structuredAnswers = $structuredAnswers;

        return true; // for JS loader to proceed
    }

    public function finalizeStep3()
    {
        // Called after loader finishes
        $this->calculateFriction();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'dob' => $this->dob,
            'phone' => $this->phone,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);

        UserAssessment::create([
            'user_id' => $user->id,
            'stage' => $this->stage,
            'answers' => json_encode($this->structuredAnswers), // Save question+option+points
            'friction' => $this->friction,
            'status' => $this->status,
            'message' => $this->message,
        ]);

        $this->step = 4;
    }

    private function calculateFriction()
    {
        $score = array_sum(array_map('intval', $this->answers));
        $this->friction = 100 - $score;

        if ($this->friction <= 30) {
            $this->status = 'OPTIMIZED';
            $this->message = 'Your structural integrity is sound. Ready for Phase 4 (Scale Deployment).';
        } elseif ($this->friction <= 60) {
            $this->status = 'DRAG DETECTED';
            $this->message = 'Losing velocity to inefficiencies. Phase 2 Forensic Audit recommended.';
        } else {
            $this->status = 'CRITICAL FAILURE';
            $this->message = 'Engine overheating. Immediate intervention required.';
        }
    }

    public function render()
    {
        return view('livewire.assessment-wizard');
    }
}
