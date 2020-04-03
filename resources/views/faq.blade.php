@extends('layouts.master')


@section('content')
<br>

<h3 class="text-uppercase text-strong">FAQ</h3>
<br>
<div class="list-group">

@foreach($data as $d)

  <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h4 class="mb-1 text-strong text-danger">{{$d['question']}}</h5>
      <!-- <small>3 days ago</small> -->
    </div>
    <p class="mb-1">{{$d['answer']}}</p>
    <!-- <small>Donec id elit non mi porta.</small> -->
  </a>

@endforeach
 
</div>

@stop
