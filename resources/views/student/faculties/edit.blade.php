@extends('layouts.frontend.app')

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="{{ route('student-faculties') }}">Faculties</a> /</span> {{ $title }}</h4>
    <div class="row mb-4">

        <!-- Bootstrap Validation -->
        <div class="col-md">
            <div class="card">


            <div class="card-body">

                <div class="mb-3">
                    <h3>Image</h3>
                    @if(!empty($data->image))
                        <img src="/images/users/faculty/{{ $data->image }}" alt="" style="height: 50px;width:50px;">
                    @endif
                </div>
                <div class="mb-3">
                    <h3>Teacher</h3>
                    <p>{{ $data->teacher }}</p>
                </div>
                <div class="mb-3">
                    <h3>Department</h3>
                    <p>{{ $data->deptName }}</p>
                </div>
                <div class="mb-3">
                    <h3>Subject</h3>
                    <p>{{ $data->subject }}</p>
                </div>

                </div>
            </div>
        </div>
        <!-- /Bootstrap Validation -->
    </div>

</div>

@endsection
