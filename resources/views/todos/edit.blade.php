@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Form') }}</div>


                    <div class="card-body ">
                        <form action="{{route('todos.update')}}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="todo_id" value="{{$todo->id}}">
                            <div class="mb-3">
                                <label  class="form-label">Title</label>
                                <input type="text" class="form-control"  name="title" value="{{$todo->title}}" >

                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Description</label>
                                <textarea type="text" cols="5" rows="5" class="form-control"  name="description" >{{$todo->description}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>Status</label>
                                <select name="is_completed" class="form-control">
                                    <option disabled selected>Select Option</option>
                                    <option value="1">Completed</option>
                                    <option value="0"> In Completed</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
