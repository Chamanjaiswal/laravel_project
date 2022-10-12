@extends('layouts/main')

@section('main-content')
    <div>
        <h1>Home Page</h1>
        @foreach ($student as $key => $item)
            <p>{{$key}} : {{$item}}</p>
        @endforeach
    </div>
@endsection