@extends('layouts.frontend.app')

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="{{ route('student-departments') }}">Departments</a> /</span> {{ $title }}</h4>
    <div class="row mb-4">

        <!-- Bootstrap Validation -->
        <div class="col-md">
            <div class="card">


            <div class="card-body">

                <div class="mb-3">
                    <h3>Department Title</h3>
                    <p>{{ $data->title }}</p>
                </div>
                <div class="mb-3">
                    <h3>Description</h3>
                    <p>{{ $data->descr }}</p>
                </div>

                </div>
            </div>
        </div>
        <!-- /Bootstrap Validation -->
    </div>

</div>

@endsection
