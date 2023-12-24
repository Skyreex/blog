<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStagiaireModuleRequest extends FormRequest
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
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'stagiaire_id' => ['required', 'integer'],
      'module_id' => ['required', 'integer'],
      'note' => ['required', 'numeric', 'between:0,20'],
      'date_exam' => ['required', 'date'],
    ];
  }
}
