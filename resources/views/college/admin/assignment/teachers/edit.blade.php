@extends('layouts.collegeadmin.main')

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="{{ route('college.admin.assignList') }}">Assignments</a> /</span> {{ $title }}</h4>
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
                    <form action="{{ route('college.admin.update',$assign_data->id) }}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>

                        @csrf

                        @method('PUT')

                        <div class="mb-3">
                          <label class="form-label" for="bs-validation-country">Teaqcher</label>
                          <input type="hidden" name="id" value="{{ $assign_data->id }}">
                          <select class="form-select" name="teacher" id="teacher" required>
                            <option value="">--Select--</option>

                            @if(!empty($teacherData))

                            @foreach($teacherData as $t)
                            <option value="{{ $t->id }}" <?php echo $t->id == $assign_data->teacherID?'selected':''?>>{{ $t->name }}</option>
                            @endforeach

                            @endif
                          </select>
                        </div>

                        <div class="mb-3 float-end">
                            <button type="button" id="btn_add" class="btn btn-primary">Add</button>
                        </div>

                       <br>
                       <br>

                        <div class="row mb-3">
                            <div class="col-md-2"><label for="">Course</label></div>
                            <div class="col-md-2"><label for="">Dept</label></div>
                            <div class="col-md-2"><label for="">Subject</label></div>
                            <div class="col-md-2"><label for="">Sem</label></div>
                        </div>
                        <div id="assign_div">

                            @php $cnt =1  @endphp
                            @if(!empty($line_item_data))

                                @foreach($line_item_data as $d)
                                    @include("college.admin.assignment.teachers.add_line_item")
                                    @php $cnt++  @endphp
                                @endforeach

                            @else
                                @include("college.admin.assignment.teachers.add_line_item")
                            @endif

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
