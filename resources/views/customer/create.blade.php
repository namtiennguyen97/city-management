@extends('home')
@section('title','Create Customer')
@section('content')
    <h1>Add new Customer</h1>
    <form method="post">
        @csrf
        <table border="1">
            <tr>
                <th>Customer Name:<input type="text" name="name"></th>
            </tr>
            <tr>
                <th>Customer Dob:<input type="text" name="dob"></th>
            </tr>
            <tr>
                <th>Customer Email:<input type="text" name="email"></th>
            </tr>
            <tr>
                <th>Customer City:<input type="text" name="city_id"></th>
            </tr>
            <tr>
                <th><input type="submit" value="Add new"></th>
            </tr>
        </table>
    </form>
    <button onclick="window.history.go(-1); return false;">Cancel</button>
    @endsection
