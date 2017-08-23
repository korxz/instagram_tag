@extends('layouts.single')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Welcome {{ Auth::user()->name  }}, to instagram game.</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3 style="text-align: center">Let's play a new game</h3>
            <div class="container-fluid">
                <a href="#" class="btn btn-primary" >Play with Friend</a>
                <a href="#" class="btn btn-primary">Play with random</a>
            </div>
        </div>
    </div>
</div>
@endsection
