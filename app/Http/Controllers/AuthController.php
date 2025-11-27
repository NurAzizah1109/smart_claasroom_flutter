<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Register a new user (skeleton).
     *
     * Note: This method is a placeholder. Add validation and JWT logic yourself.
     */
    public function register(Request $r)
    {
        // Example response only — no real implementation here.
        $exampleUser = [
            'id' => 1,
            'name' => 'Example User',
            'email' => 'user@example.com',
        ];

        return response()->json([
            'success' => true,
            'message' => 'User registered (example response).',
            'data' => [
                'user' => $exampleUser,
                'token' => 'your-jwt-token-here',
            ],
        ], 201);
    }
}
