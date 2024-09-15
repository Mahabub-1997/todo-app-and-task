@extends('layouts.app')

@section('styles')
   <style>
       #outer
       {
           width:auto;
           text-align: center;
       }
       .inner
       {
           display: inline-block;
       }
   </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Todos Table') }}</div>
                    <div class="card-body">

                        @if(Session::has('alert-success'))
                            <div class="alert alert-success" role="alert">
                                  {{Session::get('alert-success')}}
                            </div>
                        @endif

                            @if(Session::has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{Session::get('error')}}
                                </div>
                            @endif

                            @if(Session::has('alert-info'))
                                <div class="alert alert-info" role="alert">
                                    {{Session::get('alert-info')}}
                                </div>
                            @endif
                            <a class="btn btn-sm btn-info " href="{{route('todos.create')}}"> Create Todo</a>

                        @if(count($todos) > 0)
                                <table class="table text-center table-striped tab-content table-hover table-bordered mt-2">
                                    <thead>
                                    <tr>
                                        <th >ID</th>
                                        <th >Title</th>
                                        <th>Description</th>
                                        <th >Completed</th>
                                        <th >Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($todos as $key=>$todo)
                                           <tr>
                                               <td>{{++$key}}</td>
                                                <td>{{$todo->title}}</td>
                                                <td>{{$todo->description}}</td>
                                                <td>
                                                    @if($todo->is_completed==1)
                                                        <a class="btn btn-success btn-sm" href="">Completed</a>
                                                    @else
                                                        <a class="btn btn-danger btn-sm" href=""> In Completed</a>
                                                    @endif

                                                </td>
                                                <td id="outer">
                                                    <a class="inner btn btn-success btn-sm" href="{{route('todos.edit',[$todo->id])}}">Edit</a>
                                                    <a class=" inner btn btn-warning btn-sm" href="{{route('todos.show',[$todo->id])}}">View</a>
                                                    <form action="{{route('todos.delete',[$todo->id])}}" method="post" class="inner">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input  type="hidden" name="todo_id" value="{{++$key}}">
                                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete"
                                                               onclick="return confirm('Are you sure you want to delete this Todo Information?');">
                                                    </form>
                                                </td>
                                           </tr>
                                       @endforeach

                                    </tbody>
                                </table>
                            @else
                            <h4> No Todos are creating yet</h4>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
