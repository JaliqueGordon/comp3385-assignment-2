<?php

namespace App\Http\Controllers;


use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class FeedbackController extends Controller

{
    public function create()
{
    return view('feedback.feedback-form');
}

public function send(Request $request)

{

    $request -> validate([
        'full_name' => 'required|string|max:200',
        'email' => 'required|email|max:200',
        'comments' => 'required|string',
        'website_feedback' => 'required|string',

    ]);

    $fullname = $request->input('full_name');
    $email = $request->input('email');
    $comments = $request -> input('comments');
    $websiteFeedback = $request->input('website_feedback');


    Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')
          ->send(new Feedback($full_name, $email, $comment));


}

}