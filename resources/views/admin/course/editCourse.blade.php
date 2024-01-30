@extends('layouts.admin.app')

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="{{ route('courses') }}">Course</a> /</span> {{ $title }}</h4>
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
                </h5>

                <div class="card-body">
                    <form action=" {{ route('updateCourse',$data->id) }}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>

                        @csrf

                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-name">Course Title</label>
                            <input type="text" class="form-control" id="bs-validation-name" name="title" placeholder="Course Title" value="{{ $data->title }}"
                                required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-descr">Description</label>
                            <textarea class="form-control" id="bs-validation-descr" name="descr" rows="3"
                                required>{{ $data->descr }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-dob">Start Date</label>
                            <input type="text" class="form-control flatpickr-validation" name="startDate" value="{{ $data->startDate }}" id="bs-validation-dob" autocomplete="off"
                                required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please Enter Start Date</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file">Course Image</label>
                            <input type="hidden" name="txt_file" id="txt_file" value="{{ $data->image }}">
                            <input type="file" name="file" class="form-control" id="bs-validation-upload-file"/>
                            @if($data->image)
                                <img src="/images/admin/course/{{ $data->image }}" style="height: 50px;width:100px;">
                            @else
                                <span>No image found!</span>
                            @endif

                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="bs-validation-country">Type</label>
                          <select class="form-select" name="course_type" id="bs-validation-country" required>

                            @if(!empty($course_type))
                            @foreach($course_type as $k=>$v)
                                <option value="{{ $k }}" {{ $data->course_type == $k ?'selected':'' }}>{{ $v }}</option>
                            @endforeach
                            @endif

                          </select>
                        <div class="mb-3">
                          <label class="form-label" for="bs-validation-country">Status</label>
                          <select class="form-select" name="status" id="bs-validation-country" required>
                            <option value="">Select Status</option>
                            <option value="1" {{ $data->status == 1 ?'selected':'' }} >Active</option>
                            <option value="0" {{ $data->status == 0 ?'selected':'' }}>Inactive</option>
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
