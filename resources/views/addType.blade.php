@extends('layouts.master')

@section('content')
    <div class="signup-container">
        <form class="signup-form" action="{{route('type.store')}}" method="post">
            @csrf
            <h2>Add Type</h2>
            <input type="text" placeholder="Name" name="typename" required>
            <button type="submit">Save</button>
        </form>
    </div>
@endsection
