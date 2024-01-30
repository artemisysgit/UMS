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

<div class="row mb-3 sl" id="<?php echo e($sl); ?>">
    <div class="col-md-2">
        <input type="hidden" name="item_id[]" value="<?php echo e($id); ?>">
        <select name="course[]" id="" class="form-select course" required>
            <option value="">--select--</option>

            <?php if(!empty($courseData)): ?>

                <?php $__currentLoopData = $courseData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($t->id); ?>" <?php echo $t->id == $courseID?'selected':''?>><?php echo e($t->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>
        </select>
    </div>
    <div class="col-md-2">
        <select name="dept[]" id="" class="form-select dept">
            <option value="">--select--</option>
            <?php if(!empty($deptData)): ?>

                <?php $__currentLoopData = $deptData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($d->id); ?>" <?php echo $d->id == $deptID?'selected':''?>><?php echo e($d->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>
        </select>
    </div>
    <div class="col-md-2">
        <select name="subject[]" id="" class="form-select subject">
            <option value="">--select--</option>
            <?php if(!empty($subjectData)): ?>

                <?php $__currentLoopData = $subjectData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($sub->id); ?>" <?php echo $sub->id == $subjectID?'selected':''?>><?php echo e($sub->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>
        </select>
    </div>
    <div class="col-md-2">
        <select name="sem[]" id="" class="form-select sem">
            <option value="">--select--</option>
            <?php if(!empty($semData)): ?>

                <?php $__currentLoopData = $semData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($sem->id); ?>" <?php echo $sem->id == $semID?'selected':''?>><?php echo e($sem->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>
        </select>
    </div>
    <div class="col-md-2">
        <a href="javascript:void(0);" onclick="delData('<?php echo $id;?>','<?php echo $sl;?>');"><i class="fa-solid fa-trash"></i></a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/admin/assignment/teachers/add_line_item.blade.php ENDPATH**/ ?>