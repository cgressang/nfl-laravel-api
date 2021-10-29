<?php declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id' => 'required|regex:/^[1-9]+[0-9]*$/',
        ];
    }

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'id.required' => 'Team id is required',
        ];
    }

    /**
     * Get all parameters
     *
     * @param string $keys
     *
     * @return array
     */
    public function all($keys = null): array
    {
        $data = parent::all($keys);
        $data['id'] = $this->route('id');
        return $data;
    }
}
