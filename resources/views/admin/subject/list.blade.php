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
    <a href="{{ route('addSubject') }}" class="btn btn-primary">Add New</a>
</div>

<hr class="my-2">

    <div class="card-datatable table-responsive pt-0">
        <table class="datatables-basic table" id="tbl">
            <thead>
                <tr>
                    <th></th>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Subject Code</th>
                    <th>Descr</th>
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
                    <td>{{ $r->title }}</td>
                    <td>{{ $r->subCode }}</td>
                    <td>{{ $r->descr }}</td>
                    <td>{{ $r->status == 1 ?'Active':'Inactive' }}</td>
                    <td>{{ $r->name }}</td>
                    <td>
                        <a href="{{  url('admin/subjects/edit/'.$r->id) }}" class="btn btn-primary btn-sm">edit</a>
                        <a href="{{  url('admin/subjects/combinations/list/'.$r->id) }}" class="btn btn-primary btn-sm">Combinations</a>
                    </td>
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
