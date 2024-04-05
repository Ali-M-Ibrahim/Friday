@extends('layouts.master')

@section('content')

    <div>

        <a href="{{route('type.create')}}">Click here to create a new type</a>

        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>action</th>
            </tr>

            @foreach($data as $obj)
                <tr>
                    <td>{{$obj->id}}</td>
                    <td>{{$obj->name}}</td>
                    <td>
                        <a href="{{route('type.edit',['type'=>$obj->id])}}">Edit</a>
                        <a href="{{route('deleteType',['id'=>$obj->id])}}">delete</a>

                        <form action="{{route('type.destroy',['type'=>$obj->id])}}" method="post" >
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach


        </table>


    </div>

@endsection
