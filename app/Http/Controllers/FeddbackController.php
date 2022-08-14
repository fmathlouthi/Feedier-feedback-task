<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use Illuminate\Support\Facades\Http;

class FeddbackController extends Controller
{
        /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        return view('feedbacks');
    }
    public function store(StoreFeedbackRequest $request)
    {
        $response = Http::withToken(env('FEEDIER_API_KEY'))
        ->get(env('FEEDIER_BASE_UEL').'/feedbacks', [
            'answers' => [
                'value' => $request->input('feedback'),
                'question_id' => '123',
                'question_title' =>  'Do you have any improvement for our team?',
                'question_type' =>  'nps'
            ]
        ]);
if($response->successful()){
    $message = 'IT WORKS!';
}
else{
    $message = 'not WORKS!';
}
        return back()->with('message', $message);
    }
}
