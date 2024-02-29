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


<hr class="my-2">

    <div class="card-datatable table-responsive pt-0">
        <table class="datatables-basic table" id="tbl">
            <thead>
                <tr>
                    <th></th>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Message</th>
                    <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tbody>
                @if(!empty($data))

                @foreach($data as $r)

                <tr>
                    <td></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $r->name }}</td>
                    <td>{{ $r->email }}</td>
                    <td>{{ $r->phone }}</td>
                    <td>{{ $r->course }}</td>
                    <td>{{ html_entity_decode($r->message) }}</td>
                    <!-- <td><a href="{{  url('admin/cms/edit/'.$r->id) }}" class="btn btn-primary btn-sm">edit</a></td> -->
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
