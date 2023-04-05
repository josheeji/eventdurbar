<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParticipationStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'affilated_institute' => 'nullable|string|max:255',
            'post' => 'required|string|max:255',
            'event_id' => 'required|exists:events,id',
            'participantType_id' => 'nullable|exists:participant_types,id',
        ];
    }
}
