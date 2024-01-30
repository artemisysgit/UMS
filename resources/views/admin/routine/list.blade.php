@extends('layouts.admin.app')

@section('content')


<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="py-3 mb-4"><span class="text-muted fw-light">UMS /</span> {{ $title }}</h4>



<!-- DataTable with Buttons -->
<div class="card">

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="breadcrumb d-flex justify-content-end me-3 mt-3">
    <a href="{{ route('addRoutine') }}" class="btn btn-primary">Add New</a>
</div>

<div class="card-body">
    <div class="row align-items-end">
        <div class="col-md-3 mb-3">
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

        <div class="col-md-3 mb-3">
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

        <div class="col-md-2 mb-3">
            <label for="">&nbsp;&nbsp;</label>
            <button type="button" id="view_routine" class="btn btn-primary">View Routine</button>
        </div>
    </div>

    <div id="routine"></div>

</div>


<hr class="my-2">

    <div class="card-datatable table-responsive pt-0">
        <table class="datatables-basic table" id="tbl">
            <thead>
                <tr>
                    <th></th>
                    <th>SL</th>
                    <th>Teacher</th>
                    <th>Department</th>
                    <th>Semester</th>
                    <th>Status</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($data))

                @foreach($data as $r)

                <tr>
                    <td></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $r->name }}</td>
                    <td>{{ $r->dept }}</td>
                    <td>{{ $r->sem }}</td>
                    <td>{{ $r->status == 1 ?'Active':'Inactive' }}</td>
                    <td></td>
                    <td><a href="{{  url('admin/routine/edit/'.$r->id) }}" class="btn btn-primary btn-sm">edit</a></td>
                </tr>

                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>


</div>
<!-- / Content -->


@endsection
