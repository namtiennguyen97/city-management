@extends('home')
@section('title','Customers')
@section('content')
    <h1>Customer List</h1>
    <table border="1">
        <thead>
        <tr>
            <th>STT</th>
            <th>Customer Name</th>
            <th>Customer DOB</th>
            <th>Customer Email</th>
            <th>Customer City</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($customers as $key => $value)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->dob}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->city->name}}</td>
                <td><a href="{{route('customers.edit', $value->id)}}">Edit</a></td>
                <td><a href="{{route('customers.destroy', $value->id)}}" onclick="return confirm('Do you want o delete this customer infor?')">Delete</a></td>
            </tr>
        </thead>
        @endforeach
    </table>
    <a href="{{route('customers.create')}}">Add new Customer</a>
    <a style="background-color: deepskyblue" href="{{route('cities.index')}}">Switch to Cinty Database(testing)</a>
    @endsection
