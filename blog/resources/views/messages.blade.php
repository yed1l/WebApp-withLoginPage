@extends('layouts.app')
@section('content')
    <h1>Отзывы</h1>
    <div class="col-md-4 ">
        <form action="/search" method="get">
            <div class="input-group">

                <input type="search" name="search" class="form-control ">

                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Search</button>
                </span>
            </div>
        </form>

    </div>
    @foreach($data as $e)
        <div class="alert-info mt-3">

            <h3 class="ml-2">{{$e->subject}}</h3>
            <p class="ml-2">{{$e->name}}</p>
            <p class="ml-2"><small>{{$e->created_at}}</small></p>
            <a href="{{route('MoreDetails', $e->id)}}"><button  class="mb-2 ml-2 btn btn-warning">Details</button></a>
        </div>

    @endforeach


@endsection
@section('title-block')
    Отзывы
@endsection

