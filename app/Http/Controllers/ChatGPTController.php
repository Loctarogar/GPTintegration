<?php

namespace App\Http\Controllers;

use App\Models\Question;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;

class ChatGPTController extends Controller
{
    protected $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
            'headers' => [
                'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY'),
                'Content-Type' => 'application/json',
            ],
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::all();

        return $questions;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ChatGPT $chatGPT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChatGPT $chatGPT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChatGPT $chatGPT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChatGPT $chatGPT)
    {
        //
    }
}
