@extends('layouts.app')

@section('content')
<div class="container-header">
    <a class="btn rounded-pill" href="{{ route('create-pin') }}" role="button"  style="position: fixed; left: 50%; bottom: 20px; transform: translateX(-50%); background-color: #d2691e; color:white;">
        Create New Post
    </a>
    
</div>

@endsection