@extends('layouts.app')

@section('content')

<div class="container m-5">
    <div class="row">
    @foreach($profs as $prof) 
        <div class="col-3">
            <div class="card ">
                <div class="card-header text-center bg-primary text-light">
                    <a href="{{route('profs.show',['prof' => $prof->id])}}" class="text-light">{{$prof->name}}</a>
                </div>
                <div class="card-body">
                    <p class="card-text"><b>Name: {{$prof->name}} </b> </p>
                    <a href="{{route('questions.create')}}" class="btn btn-primary btn-sm">ask</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>    

@endsection