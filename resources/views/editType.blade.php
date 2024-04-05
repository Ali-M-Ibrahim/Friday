@extends('layouts.master')

@section('content')
    <div class="signup-container">
        <form class="signup-form" action="{{route('type.update',['type'=>$object->id])}}" method="post">
            @csrf
            @method('put')
            <h2>Add Type</h2>
            <input type="text" placeholder="Name"  value="{{$object->name}}" name="typename" required>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
