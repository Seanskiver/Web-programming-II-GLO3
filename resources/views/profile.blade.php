@extends('layouts.app')

@section('left')

    <div class="row">
        <div class="card">
            <div class="card-content">
                <span class="card-title"><h4>{{ $user->name }}</h4></span>
                <p>{{ $user->email }}</p>
                <p> Joined: {{ $user->created_at }}</p>
            </div>
        </div>
    </div>
@endsection


@section('middle')
    <h4>{{ $user->name }}'s Posts</h4>
    @foreach($user->posts as $p)
        @include('partials.auth-post', array('post' => $p, 'user' => $user))
    @endforeach
@endsection