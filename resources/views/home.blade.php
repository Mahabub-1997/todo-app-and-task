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

                   <b>{{ __('You are logged in!') }}</b>
                        <br>
                        <a class="btn btn-sm btn-info mt-5" href="{{route('todos.create')}}"> Add Todo</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
