
@extends('layouts.app')
@section('title-block')
    Contacts
@endsection
@section('content')
    <h1>Contacts</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                 @endforeach
            </ul>

        </div>
     @endif

    <form action="/contact/submit" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" placeholder="Input your name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" placeholder="Input your Email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" placeholder="Subject" id="subject" class="form-control">
        </div>
        <div class="forum-group">

            <textarea  name="message" id="message" class="form-control" placeholder="Input your message"></textarea>

        </div>

        <button type="submit" class="btn btn-success mt-2">Submit</button>



    </form>

@endsection

