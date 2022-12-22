@extends('layouts.app')

@section('snow')
<div id="particles-js"></div>
@endsection

@section('countdown')
<div id="timer" class="countdown-xmass"></div> 
@endsection


@section('content')
<section class="prova">
    <h1>Hello Santa</h1>
</section>
@endsection

<script>
    function updateTimer() {
    future  = Date.parse("December 25, 2022 00:00:01");
    now     = new Date();
    diff    = future - now;
  
    days  = Math.floor( diff / (1000*60*60*24) );
    hours = Math.floor( diff / (1000*60*60) );
    mins  = Math.floor( diff / (1000*60) );
    secs  = Math.floor( diff / 1000 );
  
    d = days;
    h = hours - days  * 24;
    m = mins  - hours * 60;
    s = secs  - mins  * 60;
  
    document.getElementById("timer")
      .innerHTML =
        '<div>' + d + '<span>days</span></div>' +
        '<div>' + h + '<span>hours</span></div>' +
        '<div>' + m + '<span>minutes</span></div>' +
        '<div>' + s + '<span>seconds</span></div>' ;
  }
  setInterval('updateTimer()', 1000 );
</script>