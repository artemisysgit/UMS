@extends('layouts.collegeadmin.main')

@section('content')


<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="py-3 mb-4"><span class="text-muted fw-light">UMS /</span> Courses</h4>



<!-- DataTable with Buttons -->
<div class="card">

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="breadcrumb d-flex justify-content-end me-3 mt-3">
    <a href="{{ route('college.admin.addCourse') }}" class="btn btn-primary">Add New</a>
</div>

<hr class="my-2">

    <div class="card-datatable table-responsive pt-0">
        <table class="datatables-basic table" id="tbl">
            <thead>
                <tr>
                    <th></th>
                    <th>SL</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Course Type</th>
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
                    <td>
                        @if(!empty($r->image))
                        <img src="/images/college/course/{{ $r->id }}/{{ $r->image }}" alt="" style="height: 50px;width:50px;">
                        @endif
                    </td>
                    <td>{{ $r->title }}</td>
                    <td>{{ date('d-m-Y',strtotime($r->startDate)) }}</td>
                    <td>
                        @foreach($course_type as $k=>$v)
                        {{ $r->course_type == $k ? $v :'' }}
                        @endforeach
                    </td>
                    <td>{{ $r->status == 1 ?'Active':'' }}</td>
                    <td>{{ $r->name }}</td>
                    <td><a href="{{  url('college/admin/courses/edit/'.$r->id) }}" class="btn btn-primary btn-sm">edit</a></td>
                </tr>

                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
<!-- Modal to add new record -->
<!-- <div class="offcanvas offcanvas-end" id="add-new-record">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="exampleModalLabel">New Record</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body flex-grow-1">
        <form class="add-new-record pt-0 row g-2" id="form-add-new-record" onsubmit="return false">
            <div class="col-sm-12">
                <label class="form-label" for="basicFullname">Full Name</label>
                <div class="input-group input-group-merge">
                    <span id="basicFullname2" class="input-group-text"><i class="ti ti-user"></i></span>
                    <input type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname"
                        placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
                </div>
            </div>
            <div class="col-sm-12">
                <label class="form-label" for="basicPost">Post</label>
                <div class="input-group input-group-merge">
                    <span id="basicPost2" class="input-group-text"><i class="ti ti-briefcase"></i></span>
                    <input type="text" id="basicPost" name="basicPost" class="form-control dt-post"
                        placeholder="Web Developer" aria-label="Web Developer" aria-describedby="basicPost2" />
                </div>
            </div>
            <div class="col-sm-12">
                <label class="form-label" for="basicEmail">Email</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="ti ti-mail"></i></span>
                    <input type="text" id="basicEmail" name="basicEmail" class="form-control dt-email"
                        placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                </div>
                <div class="form-text">You can use letters, numbers & periods</div>
            </div>
            <div class="col-sm-12">
                <label class="form-label" for="basicDate">Joining Date</label>
                <div class="input-group input-group-merge">
                    <span id="basicDate2" class="input-group-text"><i class="ti ti-calendar"></i></span>
                    <input type="text" class="form-control dt-date" id="basicDate" name="basicDate"
                        aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                </div>
            </div>
            <div class="col-sm-12">
                <label class="form-label" for="basicSalary">Salary</label>
                <div class="input-group input-group-merge">
                    <span id="basicSalary2" class="input-group-text"><i class="ti ti-currency-dollar"></i></span>
                    <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary"
                        placeholder="12000" aria-label="12000" aria-describedby="basicSalary2" />
                </div>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            </div>
        </form>
    </div>
</div> -->
<!--/ DataTable with Buttons -->

</div>
<!-- / Content -->


@endsection
