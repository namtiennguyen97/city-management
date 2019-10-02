@extends('home')
@section('title','Edit Customer')

@section('content')
    <form method="post">
        @csrf
        <h1>Editing Customer Information</h1>
        <label>Name: <input type="text" value="{{$customers->name}}" name="name"></label>
        <label>Bod<input type="date" value="{{$customers->dob}}" name="dob"></label>
        <label>Email<input type="email" value="{{$customers->email}}" name="email"></label>
        <label>City<input type="text" value="{{$customers->city_id}}" name="city_id"> </label>
        <input type="submit" value="Edit">
        <input type="button" onclick="window.history.go(-1);return false;" value="Back">
    </form>
    @endsection
