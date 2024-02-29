@extends('layouts.collegeadmin.main')

@section('content')


<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="py-3 mb-4"><span class="text-muted fw-light">UMS /</span><a href="{{ route('college.admin.subjects') }}">Subjects</a> / {{ $title }}</h4>



<!-- DataTable with Buttons -->
<div class="card">

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="breadcrumb d-flex justify-content-end me-3 mt-3">
    <a href="{{ route('college.admin.addSubjectCombination',$subID) }}" class="btn btn-primary">Add New</a>
</div>

<hr class="my-2">

    <div class="card-datatable table-responsive pt-0">
        <table class="datatables-basic table" id="tbl">
            <thead>
                <tr>
                    <th></th>
                    <th>SL</th>
                    <th>Main Subject</th>
                    <th>Subject 1</th>
                    <th>Subject 2</th>
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
                    <td>{{ $r->title }}</td>
                    <td>{{ $r->subject1 }}</td>
                    <td>{{ $r->subject2 }}</td>
                    <td>{{ $r->status == 1 ?'Active':'Inactive' }}</td>
                    <td>
                        <a href="{{  url('college/admin/subjects/combinations/edit/'.$subID.'/'.$r->id) }}" class="btn btn-primary btn-sm">edit</a>
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
