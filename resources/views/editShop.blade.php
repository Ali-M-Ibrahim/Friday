@extends('layouts.master')

@section('content')
    <div class="signup-container">
        <form class="signup-form" action="{{route('update-shop',['id'=>$object->id])}}" method="post">
            @csrf
            <h2>Add Shop</h2>
            <input type="text" placeholder="Name" value="{{$object->name}}" name="shopname" required>
            <textarea name="shoplocation">{{$object->location}}</textarea>
            <select name="shoptype">
                @foreach($types as $ty)
                    <option @if($ty->id==$object->type_id) selected @endif value="{{$ty->id}}">{{$ty->name}}</option>
                @endforeach
            </select>

            <button type="submit">Save</button>
        </form>
    </div>
@endsection
