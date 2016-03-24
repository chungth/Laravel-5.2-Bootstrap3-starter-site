@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ Gravatar::get(Auth::user()->email) }}" title="user avatar"/>
        </div>
        <div class="col-md-8">
            //TODO: Add more information here
        </div>
    </div>
</div>

@endsection