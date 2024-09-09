<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Import the HTTP client

class PostApiController extends Controller
{
    public function index()
    {
        // Fetch data from JSONPlaceholder
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        
        // Return the data
        return response()->json($response->json());
    }

    public function show($id)
    {
        // Fetch data for a specific post from JSONPlaceholder
        $response = Http::get("https://jsonplaceholder.typicode.com/posts/{$id}");
        
        // Return the data
        return response()->json($response->json());
    }
}

