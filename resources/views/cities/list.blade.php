@extends('home')
@section('title','Danh sach cac thanh pho')
@section('content')
    <h1>Danh sach khach hang</h1>
    <table border="1">
        <thead>
        <tr>
            <th>STT</th>
            <th>Cities name</th>
            <th>Customers number</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($cities)==0)
            <tr>
                <td>No data has been found yet</td>
            </tr>
            @else
        @foreach($cities as $key=> $value)
            <tr>
                <th>{{++$key}}</th>
                <td>{{$value->name}}</td>
                <td>{{count($value->customers)}}</td>
                <td><a href="{{route('cities.edit', $value->id)}}">Edit</a></td>
                <td><a href="{{route('cities.destroy', $value->id)}}" onclick="return confirm('Do you want to delete?')">Delete</a></td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
<a href="{{route('cities.create')}}">Add new data</a>
    <a style="background-color: deepskyblue" href="{{route('customers.index')}}">Switch to customer information (tesing)</a>

    @endsection
