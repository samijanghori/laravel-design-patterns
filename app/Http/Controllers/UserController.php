<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistrationRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected UserService $userservice;

    public function __construct(UserService $userservice)
    {
        $this->userservice = $userservice;
    }

    /**
     * Display a listing of users.
     */
    public function index()
    {
  $users = \App\Models\User::all(); // یا paginate
    return view('user.index', compact('users'));
        }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(UserRegistrationRequest $request)
    {
        $user = $this->userservice->createAndSaveUser(
            $request->validated() // فقط validated array
        );

        return redirect()->route('users.index')
                         ->with('success', 'User created successfully!');
    }

    /**
     * Display the specified user.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
