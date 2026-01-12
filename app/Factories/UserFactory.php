<?php

namespace App\Factories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserFactory
{
    /**
     * Create a new User instance from data array
     *
     * @param array $data
     * @return User
     */
    public function createUser(array $data): User
    {
        return new User([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'phone'    => $data['phone'] ?? null, // اضافه شد
        ]);
    }
}
