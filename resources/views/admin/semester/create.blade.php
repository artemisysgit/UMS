@extends('layouts.admin.app')

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="{{ route('semesters') }}">Semesters</a> /</span> {{ $title }}</h4>
    <div class="row mb-4">

        <!-- Bootstrap Validation -->
        <div class="col-md">
            <div class="card">
                <h5 class="card-header">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->has('error_message'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{ session()->get('error_message') }}</li>
                        </ul>
                    </div>
                @endif
                </h5>
                <div class="card-body">
                    <form action="{{ route('saveSemester') }}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>

                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-name">Title</label>
                            <input type="text" class="form-control" id="bs-validation-name" name="title" placeholder="Title" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-name">Description</label>
                            <textarea name="descr" id="descr" cols="30" rows="10" class="form-control"></textarea>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="bs-validation-country">Status</label>
                          <select class="form-select" name="status" id="bs-validation-country" required>
                            <option value="">Select Status</option>
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                          </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please select status</div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Bootstrap Validation -->
    </div>

</div>

@endsection
