@extends('layouts.frontend.app')

@section('content')


<!-- Content -->


    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Academy/</span>Faculties</h4>

    <div class="card-datatable table-responsive pt-0">
        <table class="datatables-basic table" id="tbl">
            <thead>
                <tr>
                    <th></th>
                    <th>SL</th>
                    <th>Image</th>
                    <th>Teacher</th>
                    <th>Department</th>
                    <th>Subject</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($data))

                @foreach($data as $r)

                <tr>
                    <td></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if(!empty($r->image))
                        <img src="/images/users/faculty/{{ $r->image }}" alt="" style="height: 50px;width:50px;">
                        @endif
                    </td>
                    <td>{{ $r->teacher }}</td>
                    <td>{{ $r->deptName }}</td>
                    <td>{{ $r->subject }}</td>
                    <td><a href="{{  url('student/faculties/details/'.$r->id) }}" class="btn btn-primary btn-sm">edit</a></td>
                </tr>

                @endforeach
                @endif
            </tbody>
        </table>
    </div>


<!-- / Content -->


@endsection
