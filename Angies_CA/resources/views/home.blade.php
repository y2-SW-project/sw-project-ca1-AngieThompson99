@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/home" style="color: purple"> Home</a>
    <a href="/profile" style="color: blue"> Profile</a>
    <a href="/login" style="color: blue"> Login</a> 
         <a href="/register" style="color: blue"> Register</a>
         <a href="/about" style="color: blue"> About</a>
                    <h1>heya youre logged in :)</h1><!--- as an ordinary user -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
