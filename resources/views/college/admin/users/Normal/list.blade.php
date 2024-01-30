@extends('layouts.collegeadmin.main')

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
    <a href="{{ route('college.admin.addFaculty') }}" class="btn btn-primary">Add New</a>
</div>

<hr class="my-2">

    <div class="card-datatable table-responsive pt-0">
        <table class="datatables-basic table" id="tbl">
            <thead>
                <tr>
                    <th></th>
                    <th>SL</th>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>EmailID</th>
                    <th>Mobile No</th>
                    <th>Status</th>
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
                    <td>{{ $r->userName }}</td>
                    <td>{{ $r->email }}</td>
                    <td>{{ $r->mobile }}</td>
                    <td>{{ $r->status == 1 ?'Active':'Inactive' }}</td>
                    <td><a href="{{  url('college/admin/faculties/edit/'.$r->id) }}" class="btn btn-primary btn-sm">edit</a></td>
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
