@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ auth()->user()->name }} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="http://127.0.0.1:8000/tutorpanel"class="btn btn-outline-primary btn-lg">Enter Tutor Panel </a>
                    <a href="http://127.0.0.1:8000/studentpanel"class="btn btn-outline-primary btn-lg">Enter Student Panel </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
