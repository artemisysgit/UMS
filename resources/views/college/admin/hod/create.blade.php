@extends('layouts.collegeadmin.main')

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="{{ route('college.admin.hodList') }}">Hod List</a> /</span> {{ $title }}</h4>
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
                    <form action="{{ route('college.admin.saveHod') }}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>

                        @csrf

                        <div class="mb-3">
                          <label class="form-label" for="bs-validation-country">Teaqcher</label>
                            <select class="form-select" name="teacher" id="teacher" required>
                                <option value="">--Select--</option>

                                @if(!empty($teacherData))

                                @foreach($teacherData as $t)
                                <option value="{{ $t->id }}">{{ $t->name }}</option>
                                @endforeach

                                @endif
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-country">Department</label>
                            <select name="dept" id="dept" class="form-select">
                                <option value="">--select--</option>
                                @if(!empty($deptData))

                                    @foreach($deptData as $d)
                                    <option value="{{ $d->id }}" <?php //echo $d->id == $deptID?'selected':''?>>{{ $d->title }}</option>
                                    @endforeach

                                @endif
                            </select>
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
