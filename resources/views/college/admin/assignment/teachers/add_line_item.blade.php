<?php

    if(!empty($cnt))
    {
        $sl = $cnt;
    }
    else
    {
        $sl = 1;
    }

    if(!empty($d))
    {
        $id = (int)$d->id;
        $courseID = (int)$d->courseID;
        $deptID = (int)$d->deptID;
        $subjectID = (int)$d->subjectID;
        $semID = (int)$d->semID;
    }
    else
    {
        $id = 0;
        $courseID = 0;
        $deptID = 0;
        $subjectID = 0;
        $semID = 0;
    }

?>

<div class="row mb-3 sl" id="{{ $sl }}">
    <div class="col-md-2">
        <input type="hidden" name="item_id[]" value="{{ $id }}">
        <select name="course[]" id="" class="form-select course" required>
            <option value="">--select--</option>

            @if(!empty($courseData))

                @foreach($courseData as $t)
                <option value="{{ $t->id }}" <?php echo $t->id == $courseID?'selected':''?>>{{ $t->title }}</option>
                @endforeach

            @endif
        </select>
    </div>
    <div class="col-md-2">
        <select name="dept[]" id="" class="form-select dept">
            <option value="">--select--</option>
            @if(!empty($deptData))

                @foreach($deptData as $d)
                <option value="{{ $d->id }}" <?php echo $d->id == $deptID?'selected':''?>>{{ $d->title }}</option>
                @endforeach

            @endif
        </select>
    </div>
    <div class="col-md-2">
        <select name="subject[]" id="" class="form-select subject">
            <option value="">--select--</option>
            @if(!empty($subjectData))

                @foreach($subjectData as $sub)
                <option value="{{ $sub->id }}" <?php echo $sub->id == $subjectID?'selected':''?>>{{ $sub->title }}</option>
                @endforeach

            @endif
        </select>
    </div>
    <div class="col-md-2">
        <select name="sem[]" id="" class="form-select sem">
            <option value="">--select--</option>
            @if(!empty($semData))

                @foreach($semData as $sem)
                <option value="{{ $sem->id }}" <?php echo $sem->id == $semID?'selected':''?>>{{ $sem->title }}</option>
                @endforeach

            @endif
        </select>
    </div>
    <div class="col-md-2">
        <a href="javascript:void(0);" onclick="delData('<?php echo $id;?>','<?php echo $sl;?>');"><i class="fa-solid fa-trash"></i></a>
    </div>
</div>
