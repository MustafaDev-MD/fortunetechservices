<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AssessmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => [
                'id' => $this->user->id,
                'name' => $this->user->name,
                'email' => $this->user->email,
                'dob' => $this->user->dob,
                'phone' => $this->user->phone,
                // agar aur fields chahiye
            ],
            'stage' => $this->stage,
            'friction' => $this->friction,
            'status' => $this->status,
            'message' => $this->message,
            'answers' => json_decode($this->answers, true),
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}
