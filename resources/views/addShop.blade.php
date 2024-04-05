@extends('layouts.master')

@section('content')
    <div class="signup-container">
        <form class="signup-form" action="{{route('store-shop')}}" method="post">
            @csrf
            <h2>Add Shop</h2>
            <input type="text" placeholder="Name" name="shopname" required>
            <textarea name="shoplocation"></textarea>
            <select name="shoptype">
                @foreach($types as $ty)
                    <option value="{{$ty->id}}">{{$ty->name}}</option>
                @endforeach
            </select>

            <button type="submit">Save</button>
        </form>
    </div>
@endsection
