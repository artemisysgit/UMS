@extends('layouts.collegeadmin.main')

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="{{ route('college.admin.subject_combination_list',$subID) }}">Combination List</a> /</span> {{ $title }}</h4>
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
                    <form action="{{ route('college.admin.saveSubjectCombination') }}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>

                        @csrf
                        <input type="hidden" name="subID" value="{{ $subID }}">
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-name">Subject Combination</label>
                            <select name="combination[]" id="combination" class="form-control" onchange="maxAllowedMultiselect(this, 2)" multiple>
                                <option value="">--Select--</option>
                                @if(!empty($subject_data))
                                @foreach($subject_data as $sub)
                                <option value="{{ $sub->id }}">{{ $sub->title }}</option>
                                @endforeach
                                @endif
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
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