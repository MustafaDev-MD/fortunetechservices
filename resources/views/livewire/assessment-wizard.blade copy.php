<div class="relative max-w-3xl mx-auto p-8 bg-white shadow-lg rounded-xl">

    <!-- STEP 1 -->
    @if($step == 1)
    <h2 class="text-2xl font-bold mb-6 text-center">Step 1: Register</h2>
    <form wire:submit.prevent="nextStep" class="space-y-4">
        <input type="text" wire:model.defer="name" placeholder="Full Name" class="w-full border rounded-lg p-3">
        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror

        <input type="email" wire:model.defer="email" placeholder="Email" class="w-full border rounded-lg p-3">
        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror

        <input type="date" wire:model.defer="dob" class="w-full border rounded-lg p-3">
        @error('dob') <span class="text-red-500">{{ $message }}</span> @enderror

        <input type="text" wire:model.defer="phone" placeholder="Phone" class="w-full border rounded-lg p-3">
        @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror

        <input type="password" wire:model.defer="password" placeholder="Password" class="w-full border rounded-lg p-3">
        <input type="password" wire:model.defer="password_confirmation" placeholder="Repeat Password" class="w-full border rounded-lg p-3">
        @error('password') <span class="text-red-500">{{ $message }}</span> @enderror

        <textarea wire:model.defer="mind" placeholder="What's on your mind?" class="w-full border rounded-lg p-3"></textarea>

        <button type="submit" class="w-full bg-black text-white py-3 rounded-lg hover:bg-gray-800 transition">Next</button>
    </form>
    @endif

    <!-- STEP 2 -->
    @if($step == 2)
    <h2 class="text-2xl font-bold mb-6 text-center">Step 2: Select Your Stage</h2>
    <select wire:model.defer="stage" class="w-full border rounded-lg p-3">
        <option value="">Select Stage</option>
        <option value="Scaling">Scaling</option>
        <option value="Founding">Founding</option>
    </select>
    @error('stage') <span class="text-red-500">{{ $message }}</span> @enderror
    <div class="flex justify-between mt-4">
        <button type="button" wire:click="previousStep" class="px-4 py-2 border rounded-lg hover:bg-gray-100 transition">Back</button>
        <button type="button" wire:click="nextStep" class="px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">Next</button>
    </div>
    @endif

    <!-- STEP 3 + Loader -->
    @if($step == 3)
    <div x-data="loader()">
        <h2 class="text-2xl font-bold mb-6 text-center">Step 3: Questionnaire</h2>

        @foreach($questions[$stage] as $q => $opts)
        <div class="mb-4">
            <label class="font-bold">{{ $q }}</label>
            <select wire:model.defer="answers.{{ $loop->index }}" class="w-full border rounded-lg p-2">
                <option value="">Select answer</option>
                @foreach($opts as $opt => $pts)
                <option value="{{ $pts }}">{{ $opt }}</option>
                @endforeach
            </select>
            @error('answers.'.$loop->index)
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        @endforeach

        <div class="flex justify-between mt-4 items-center">
            <button type="button" wire:click="previousStep" class="px-4 py-2 border rounded-lg hover:bg-gray-100 transition">Back</button>
            <button type="button" @click="validateAndStart($wire)" class="px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">Submit</button>
        </div>

        <!-- Fullscreen loader -->
        <div x-show="loading" class="fixed inset-0 z-50 flex flex-col items-center justify-center backdrop-blur-sm bg-black/50">
            <div class="relative w-32 h-32 mb-4">
                <svg class="w-32 h-32 animate-spin" viewBox="0 0 50 50">
                    <circle class="opacity-25" cx="25" cy="25" r="20" stroke="white" stroke-width="5" fill="none" />
                    <circle class="opacity-75" cx="25" cy="25" r="20" stroke="limegreen" stroke-width="5" fill="none"
                        stroke-dasharray="100" stroke-dashoffset="75" />
                </svg>
                <div class="absolute inset-0 flex items-center justify-center text-white font-bold text-lg" x-text="`${percent}%`"></div>
            </div>
            <p class="text-white text-lg font-semibold">Calculating your assessment...</p>
        </div>
    </div>
    @endif

    <!-- STEP 4 -->
    @if($step == 4)
    <h2 class="text-2xl font-bold mb-6 text-center">Step 4: Results</h2>
    <div class="text-center">
        <p class="text-xl">Friction Score: {{ $friction }}%</p>
        <p class="font-bold text-lg mt-2">{{ $status }}</p>
        <p class="mt-2">{{ $message }}</p>
    </div>
    @endif

</div>

<script>
function loader() {
    return {
        loading: false,
        percent: 0,

        async validateAndStart(livewire) {
            try {
                // Step 1: validate answers via Livewire
                const valid = await livewire.call('submitStep3');

                if(valid) {
                    // Step 2: start loader
                    this.start(livewire);
                }
            } catch (e) {
                // validation failed, errors shown automatically
            }
        },

        start(livewire) {
            this.loading = true;
            this.percent = 0;

            let interval = setInterval(() => {
                this.percent += Math.floor(Math.random() * 5) + 1;
                if(this.percent > 100) this.percent = 100;

                if(this.percent >= 100){
                    clearInterval(interval);
                    setTimeout(async () => {
                        // Step 3: finalize after loader
                        await livewire.call('finalizeStep3');
                        this.loading = false;
                        this.percent = 0;
                    }, 500);
                }
            },100);
        },

        init() {}
    }
}
</script>