<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function registerUser($userData)
    {
        // Hash the password before saving
        $userData['password'] = Hash::make($userData['password']);

        // Create a new user
        return $this->userRepository->createUser($userData);
    }

    public function loginUser($email, $password)
    {
        // Find user by email
        $user = $this->userRepository->findUserByEmail($email);

        // Check if the user exists and the password is correct
        if ($user && Hash::check($password, $user->password)) {
            return $user;
        }

        return null;
    }
}
