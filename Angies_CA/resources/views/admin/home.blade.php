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

                   <!--- This is what will shop on the html page wether youre loggin in as a admin or a user -->
                    Hello Youre logged in as a Manager!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
