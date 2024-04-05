@extends('layouts.master')

@section('content')

    <div>

        <a href="{{route('create-shop')}}">Click here to create a new shop</a>

        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>location</th>
                <th>Type</th>
                <th>action</th>
            </tr>

            @foreach($data as $obj)
                <tr>
                    <td>{{$obj->id}}</td>
                    <td>{{$obj->name}}</td>
                    <td>{{$obj->location}}</td>
                    <td>{{$obj->getType->name}}</td>
                    <td>
                        <a href="{{route('delete-shop',['id'=>$obj->id])}}" >delete</a>
                        <a href="{{route('edit-shop',['id'=>$obj->id])}}" >edit</a>
                    </td>
                </tr>
            @endforeach


        </table>


    </div>

@endsection
