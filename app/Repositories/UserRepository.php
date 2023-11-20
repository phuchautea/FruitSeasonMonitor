<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function createUser($userData)
    {
        return User::create($userData);
    }

    public function findUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }
}
