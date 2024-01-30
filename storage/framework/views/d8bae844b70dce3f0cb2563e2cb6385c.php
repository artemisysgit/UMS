<?php $__env->startSection('content'); ?>


<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="py-3 mb-4"><span class="text-muted fw-light">UMS /</span> <?php echo e($title); ?></h4>



<!-- DataTable with Buttons -->
<div class="card">

<?php if(session()->has('message')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('message')); ?>

    </div>
<?php endif; ?>

<div class="breadcrumb d-flex justify-content-end me-3 mt-3">
    <a href="<?php echo e(route('addRoutine')); ?>" class="btn btn-primary">Add New</a>
</div>

<div class="card-body">
    <div class="row align-items-end">
        <div class="col-md-3 mb-3">
            <label class="form-label" for="bs-validation-country">Teaqcher</label>
            <select class="form-select" name="teacher" id="teacher" required>
                <option value="">--Select--</option>

                <?php if(!empty($teacherData)): ?>

                <?php $__currentLoopData = $teacherData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($t->id); ?>"><?php echo e($t->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>
            </select>
        </div>

        <div class="col-md-3 mb-3">
            <label class="form-label" for="bs-validation-country">Department</label>
            <select name="dept" id="dept" class="form-select">
                <option value="">--select--</option>
                <?php if(!empty($deptData)): ?>

                    <?php $__currentLoopData = $deptData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($d->id); ?>" <?php //echo $d->id == $deptID?'selected':''?>><?php echo e($d->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endif; ?>
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
                <?php if(!empty($data)): ?>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td></td>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($r->name); ?></td>
                    <td><?php echo e($r->dept); ?></td>
                    <td><?php echo e($r->sem); ?></td>
                    <td><?php echo e($r->status == 1 ?'Active':'Inactive'); ?></td>
                    <td></td>
                    <td><a href="<?php echo e(url('admin/routine/edit/'.$r->id)); ?>" class="btn btn-primary btn-sm">edit</a></td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>


</div>
<!-- / Content -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/admin/routine/list.blade.php ENDPATH**/ ?>