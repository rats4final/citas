<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Persona;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nombre_per' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'username' => ['required', 'string', 'max:20'],
            'password' => $this->passwordRules(),
        ])->validate();

        $persona = Persona::create([
            'nombre_per' => $input['nombre_per'],
        ]);
        
        return User::create([
            'email' => $input['email'],
            'username' => $input['username'],
            'password' => Hash::make($input['password']),
            'rol' => 2,
            'id_persona' => $persona->id_persona
        ]);

    }
}
