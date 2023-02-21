@extends('layouts.app')
@section('content')
<h1 style="text-align: center">Community</h1>
<div class="d-flex justify-content-center">
    <div class="w-75 d-flex flex-wrap justify-content-center align-items-center">
        @foreach ($links as $link)
        <div class="card m-3" style="width: 15rem; height: 12rem">
          <div class="card-body">
            <h5 class="card-title">{{$link->title}}</h5>
            <p class="card-text">Contributed by: {{$link->creator->name}} {{$link->updated_at->diffForHumans()}}</p>
          </div>
        </div>
        @endforeach
    </div>
</div>
<div class="d-flex justify-content-center mt-5">
    {{$links->links()}}
</div>
@stop
