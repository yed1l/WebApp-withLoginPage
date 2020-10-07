
@extends('layouts.app')
@section('title-block')
    Reviews
@endsection
@section('content')
    @guest()
    <div class="alert-danger"><h1 class="ml-3">Вы можете оставить отзыв после авторизации!</h1>
    </div>
    @endguest
    @auth()
    <h1>Reviews</h1>


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
            <input  name="name" id="name" class="form-control" placeholder="Your Name"></input>
        </div>
{{--        <div class="form-group">--}}
{{--            <label for="email">Email:</label>--}}
{{--            <input  name="email" value="{{old('email')}}" required autocomplete="email" id="email" class="form-control" placeholder="Your Email"></input>--}}
{{--        </div>--}}
        <div class="form-group">
            <label for="email">Subject:</label>
            <input  name="subject" id="subject" class="form-control" placeholder="Subject"></input>
        </div>
        <div class="forum-group">

            <textarea  name="message" id="message" class="form-control" placeholder="Your message"></textarea>

        </div>

        <button type="submit" class="btn btn-success mt-2">Submit</button>
        @endauth



    </form>
    <a href="{{route('AllReviews')}}"><button  class="mt-2 btn btn-success">All Reviews</button></a>


@endsection

