


@extends('layouts.app')

@section('content')

<h1>Feedback Form</h1>

<form action = "/feedback/send" method = "post">
    @csrf
     
    @if ($errors ->any())
        <div class ="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
</div>
@endif

    <label for = "full_name"> Full Name (Required)</label>
    <input type = "text" id = "full_name" name = "full_name" required>

    <label for = "email">Email (Required)</label>
    <input type = "email" id = "email" name = "email" required>

    <label for = "comments">Comments (Required)</label>
    <input type = "comments" id = "comments" name = "comments" required>

    <label for = "thoughts">Let us know what you think of our website (Required)</label>

    <button type = "submit">Submit</button>

</form>
@endsection

