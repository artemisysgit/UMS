<?php $__env->startSection('content'); ?>


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="<?php echo e(route('hodList')); ?>">Hod List</a> /</span> <?php echo e($title); ?></h4>
    <div class="row mb-4">

        <!-- Bootstrap Validation -->
        <div class="col-md">
            <div class="card">
                <h5 class="card-header">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                </h5>
                <div class="card-body">
                    <form action="<?php echo e(route('saveHod')); ?>" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>

                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
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
                        <div class="mb-3">
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
                        <div class="mb-3">
                          <label class="form-label" for="bs-validation-country">Status</label>
                          <select class="form-select" name="status" id="bs-validation-country" required>
                            <option value="">Select Status</option>
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                          </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please select status</div>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/admin/hod/create.blade.php ENDPATH**/ ?>