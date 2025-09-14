<?php

namespace App\Http\Requests;

use App\Models\Client;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PropertyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
//        if($this->route('floor')->id){
//            $this->merge([
//                'floor_id' => $this->route('floor')->id
//            ]);
//        }

        $this->merge([
            'investment_id' => $this->route('investment')->id
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'investment_id' => [
                'required',
                'integer',
                Rule::exists('investments', 'id'), // Check if investment with the specified id exists
            ],
            'floor_id' => '',
            'status' => 'required',
            'name' => 'required|string|max:255',
            'name_list' => 'string|max:255',
            'number' => 'required|string|max:255',
            'number_order' => 'integer',
            'homepage' => '',
            'rooms' => 'required|integer',
            'area' => '',
            'additional' => '',
            'garden_area' => '',
            'balcony_area' => '',
            'balcony_area_2' => '',
            'terrace_area' => '',
            'terrace_area_2' => '',
            'loggia_area' => '',
            'parking_space' => '',
            'garage' => '',
            'storeroom' => '',
            'deadline' => '',
            'kitchen_type' => 'integer',
            'cords' => '',
            'html' => '',
            'meta_title' => '',
            'meta_description' => '',
            'price' => [
                'nullable',
                'regex:/^\d+(\.\d{1,2})?$/',
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^\d+(\.\d{1,2})?$/', $value)) {
                        $fail('Pole "' . $attribute . '" musi być liczbą dziesiętną z kropką i maksymalnie 2 miejscami po przecinku (np. 123.45).');
                    }
                },
            ],
            'price_brutto' => ['nullable', 'regex:/^\d+(\.\d{1,2})?$/'],
            'price_30' => ['nullable', 'regex:/^\d+(\.\d{1,2})?$/'],
            'vat' => '',
            'promotion_price' => [
                'nullable',
                'regex:/^\d+(\.\d{1,2})?$/',
                function ($attribute, $value, $fail) {
                    if (!empty($value) && !$this->boolean('highlighted')) {
                        $fail('Pole "Promocja" musi być zaznaczone, jeśli ustawiono cenę promocyjną.');
                    }
                },
            ],
            'highlighted' => [
                'boolean',
                function ($attribute, $value, $fail) {
                    if ($this->boolean($attribute) && empty($this->input('promotion_price'))) {
                        $fail('Pole "Cena promocyjna" jest wymagane, jeśli nieruchomość ma być promowana.');
                    }
                },
            ],
            'promotion_end_date' => 'nullable|date|after:now',
            'promotion_price_show' => 'boolean',
            'client_id' => [
                'nullable',
                function ($attribute, $value, $fail) {
                    if ($value !== null && $value != 0) {
                        $exists = Client::where('id', $value)->exists();
                        if (!$exists) {
                            $fail('The selected client does not exist.');
                        }
                    }
                },
            ],
            'saled_at' => 'nullable|date',
            'reservation_until' => 'nullable|date|after_or_equal:saled_at',
            'text' => '',
            'history_info' => '',

            'price-component-type'     => 'array',
            'price-component-type.*'   => 'required|exists:property_price_components,id',

            'price-component-category'   => 'array',
            'price-component-category.*' => 'required|in:1,2,3',

            'price-component-value'     => 'array',
            'price-component-value.*'   => 'nullable|numeric|min:0',

            'price-component-m2-value'     => 'array',
            'price-component-m2-value.*'   => 'nullable|numeric|min:0',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'status.required' => 'Status jest wymagany.',
            'name.required' => 'Nazwa jest wymagana',
            'number.required' => 'Numer jest wymagany.',
            'rooms.required' => 'Ilosć pokoi jest wymagana.',

            'client_id.exists' => 'The selected client does not exist.',
            'saled_at.date' => 'The saled at must be a valid date.',
            'reservation_until.date' => 'The reservation until must be a valid date.',
            'reservation_until.after_or_equal' => 'The reservation until must be a date after or equal to the saled at date.',
            'price_brutto.numeric' => 'Pole "Cena brutto" musi być liczbą.',
            'price_brutto.regex' => 'Pole "Cena brutto" musi być liczbą dziesiętną z kropką i maksymalnie 2 miejscami po przecinku (np. 123.45).',
            'promotion_price.regex' => 'Pole "Promocja" musi być liczbą dziesiętną z kropką i maksymalnie 2 miejscami po przecinku (np. 123.45).',

            // Add these for your visitor_related_ids validation:
            'visitor_related_ids.required' => 'Musisz wybrać dodatkowe powierzchnie.',
            'visitor_related_ids.min' => 'Musisz wybrać przynajmniej jedną dodatkową powierzchnię.',
            'visitor_related_ids.array' => 'Nieprawidłowy format powierzchni dodatkowych.',
            'visitor_related_ids.required_if' => 'Pole "Powierzchnie dodatkowe" jest wymagane, gdy wybrano opcję "Tylko wybrane".',
        ];
    }
}
