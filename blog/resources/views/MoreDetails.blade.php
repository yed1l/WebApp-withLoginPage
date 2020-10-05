@extends('layouts.app')
@section('content')
    <h1>{{$data->subject}}</h1>
        <div class="alert-info">


            <h3 class="ml-2">{{$data->message}}</h3>
            <p class="ml-2">{{$data->name }}</p>
            <p class="ml-2"><small>{{$data->created_at}}</small></p>
            <a href="{{route('UpdateReview', $data->id)}}"><button  class="mb-2 ml-2 btn btn-warning">Update</button></a>
        </div>




@endsection
@section('title-block')
    $data->subject
@endsection

