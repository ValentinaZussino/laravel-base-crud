@extends('layouts.app')
@section('content')
    {{-- <h1>{{$gift->image}}</h1> --}}
    @foreach ($gifts as $item)
        <img src="{{$item->image}}">
        <br>
        <span>{{$item->name}}</span>
        <br>
        <p>{{$item->address}}</p>
        <p>{{$item->country}}</p>
    @endforeach
@endsection