<?php

namespace App\Services;

use App\Factories\UserFactory;
use App\Models\User;

class UserService
{
    protected UserFactory $userFactory;

    public function __construct(UserFactory $userFactory)
    {
        $this->userFactory = $userFactory;
    }

    /**
     * Create and save a user
     *
     * @param array $data
     * @return User
     */
    public function createAndSaveUser(array $data): User
    {
        $user = $this->userFactory->createUser($data);
        $user->save();

        return $user;
    }
}
