@extends('layouts.app')
@section('content')
    <h1>Отзывы</h1>
    @foreach($data as $e)
        <div class="alert-info">

            <h3 class="ml-2">{{$e->subject}}</h3>
            <p class="ml-2">{{$e->email}}</p>
            <p class="ml-2"><small>{{$e->created_at}}</small></p>
            <a href="{{route('MoreDetails', $e->id)}}"><button  class="mb-2 ml-2 btn btn-warning">Details</button></a>
        </div>

    @endforeach


@endsection
@section('title-block')
    Отзывы
@endsection

