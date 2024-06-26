@extends('layouts.admin.app')

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="{{ route('hodList') }}">Hod List</a> /</span> {{ $title }}</h4>
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
                    <form action=" {{ route('updateTime',$data->id) }}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>

                        @csrf

                        @method('PUT')

                        <div class="mb-3">
                        <label class="form-label" for="bs-validation-name">Start Time</label>
                            <input type="text" class="form-control" placeholder="HH:MM" name="start_time" id="start_time" value="{{ $data->start_time }}" required/>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter start time.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-name">End Time</label>
                            <input type="text" class="form-control" placeholder="HH:MM" name="end_time" id="end_time" value="{{ $data->end_time }}" required/>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter end time.</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="bs-validation-country">Status</label>
                          <select class="form-select" name="status" id="bs-validation-country" required>
                            <option value="">Select Status</option>
                            <option value="1" {{ $data->status == 1 ?'selected':'' }}>Active</option>
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
