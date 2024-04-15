@extends('layouts.master')

@section('content')
    <div class="signup-container">
        <form class="signup-form" action="{{route('store-shop')}}" method="post">
            @csrf
            <h2>Add Shop</h2>
            <input type="text" placeholder="Name" name="shopname" >
            @error('shopname')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <textarea name="shoplocation"></textarea>
            @error('shoplocation')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <select name="shoptype">
                @foreach($types as $ty)
                    <option value="{{$ty->id}}">{{$ty->name}}</option>
                @endforeach
            </select>

            @error('shoptype')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit">Save</button>


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif



        </form>
    </div>
@endsection
