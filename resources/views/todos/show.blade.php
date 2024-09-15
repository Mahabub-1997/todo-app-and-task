@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header"><b>Your Todo Id is: </b> {{$todo->id}}</div>


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                           <table class="table text-center table-striped tab-content table-hover mt-2 ">
                               <a href="{{url()->previous()}}" class="btn btn-info btn-sm">Go back</a>
                               <tr class="">
                                   <th>Id</th>
                                   <th>Title</th>
                                   <th>Description</th>
                               </tr>
                               <tr>


                                   <td> {{$todo->id}} </td>
                                   <td> {{$todo->title}} </td>
                                   <th>{{$todo->description}}</th>
                               </tr>
                           </table>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
