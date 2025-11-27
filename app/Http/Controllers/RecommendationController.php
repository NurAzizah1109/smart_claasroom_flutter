<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    /**
     * Return recommendations for a user.
     *
     * Accepts query param `user_id` and returns a list of recommendations:
     * [{ lesson_id, score, reason }]
     *
     * TODO: implement recommendation logic.
     */
    public function index(Request $request)
    {
        $userId = $request->query('user_id');

        // TODO: implement recommendation logic based on $userId
        // Placeholder/example response below.
        $recommendations = [
            [
                'lesson_id' => 1,
                'score' => 0.92,
                'reason' => 'Popular among learners similar to you',
            ],
            [
                'lesson_id' => 4,
                'score' => 0.85,
                'reason' => 'Complements recently completed lessons',
            ],
        ];

        return response()->json($recommendations, 200);
    }
}
