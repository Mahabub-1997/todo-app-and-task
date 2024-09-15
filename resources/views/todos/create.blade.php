@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Information') }}</div>


                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{route('todos.store')}}">
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">Title</label>
                                <input type="text" class="form-control"  name="title" >

                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Description</label>
                                <textarea type="text" cols="5" rows="5" class="form-control"  name="description" ></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
