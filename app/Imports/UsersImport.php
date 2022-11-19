<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
class UsersImport implements ToModel,WithHeadingRow,WithValidation
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new User([
           'name'     => $row['name'],
           'email'    => $row['email'],
           'password' => Hash::make($row['password']),
        ]);
    }
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required','email','unique:users'],
            'password' => ['required'],
        ];
    }
    public function customValidationMessages()
{
    return [
        'name.required' => 'In your excel file you have an error in the field :attribute.',
        'email.unique' => 'In your excel file you have an error in the field :attribute.(The email has already been taken)',
        'email.required' => 'In your excel file you have an error in the field :attribute.',
        'email.email' => 'In your excel file you have an error in the field :attribute.',
        'password.required' => 'In your excel file you have an error in the field :attribute.',
    ];
}
}
