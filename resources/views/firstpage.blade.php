@extends('layouts.master')

@section('title')
    <title>this is my title</title>
@endsection

@section('content')
    <div class="signup-container">
        <form class="signup-form">

            {{$object3}}

            @isset($object)
            <h2>Sign Up {{$object->id}}</h2>
            @endisset
            @if($object2=="hello1")
                <h2>Sign Up {{$object2}}</h2>
            @else
                <h2>not found</h2>
            @endif

            @for($i=0; $i < 10; $i++)

                @if($i==3)
                    @continue
                    @endif

                {{$i}}
                @endfor

            <input type="text" placeholder="Full Name" required>

            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>
@endsection

@section('customcss')
    <style>
        h2{
            color:red;
        }
    </style>
@endsection


