@extends('home')
@section('title','Add new')
@section('content')
    <h1>Add new City</h1>
<form action="" method="post">
    @csrf
    <label>City Name</label><input type="text" name="name" placeholder="EnterName" required>
    <button type="submit">Add new</button>
    <button onclick="window.history.go(-1);return false;">Cancel</button>

</form>
    @endsection
