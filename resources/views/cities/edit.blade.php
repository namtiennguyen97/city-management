@extends('home')
@section('title','Edit')
@section('content')
<h1>Edit information</h1>
<form method="post">
    @csrf
<label>City Name<input type="text" value="{{$city->name}}" name="name"></label>
    <button type="submit">Edit</button>
    <button onclick="window.history.go(-1); return false;">Cancel</button>
    @endsection
</form>
