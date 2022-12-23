@extends('layouts.app')
@section('snow')
<div id="particles-js"></div>
@endsection

@section('content')
<section class="section-main outer-container-cards flex-column">
   
    <div class="bg-black h-50 w-50 d-flex">
        {{-- img --}}
        <div class="col-4 bg-white">
            <img src={{$gift->image}} alt="">
        </div>
        {{-- testo --}}
        <div class="col-8 single-card-text">
            {{-- dettagli --}}
            <div class="flex-grow-1">
                <p class="text-white">{{$gift->gift}}</p>
                <p class="text-white">{{$gift->name}}</p>
                <p class="text-white">{{$gift->surname}}</p>
                <p class="text-white">{{$gift->age}}</p>
                <p class="text-white">{{$gift->country}}</p>
                <p class="text-white">{{$gift->city}}</p>
                <p class="text-white">{{$gift->address}}</p>
            </div>
            {{-- btns --}}
            <div class=" d-flex gap-2 pb-3">
                <a href={{route('gifts.edit', $gift->id)}}>
                <button>modifica</button>
                </a>
                <form action={{route('gifts.destroy', $gift->id)}} method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-danger"><i class="fa-solid fa-trash"></i></button>
                </form>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <a href={{route('gifts.index')}} class="btn btn-success">back to gifts</a>
    </div>
    

</section>   
@endsection