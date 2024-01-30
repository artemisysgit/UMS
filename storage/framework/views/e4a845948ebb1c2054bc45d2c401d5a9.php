<?php $__env->startSection('content'); ?>


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="<?php echo e(route('college.admin.courses')); ?>">Course</a> /</span> <?php echo e($title); ?></h4>
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
                    <form action=" <?php echo e(route('college.admin.updateCourse',$data->id)); ?>" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>

                        <?php echo csrf_field(); ?>

                        <?php echo method_field('PUT'); ?>

                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-name">Course Title</label>
                            <input type="text" class="form-control" id="bs-validation-name" name="title" placeholder="Course Title" value="<?php echo e($data->title); ?>"
                                required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-descr">Description</label>
                            <textarea class="form-control" id="bs-validation-descr" name="descr" rows="3"
                                required><?php echo e($data->descr); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-dob">Start Date</label>
                            <input type="text" class="form-control flatpickr-validation" name="startDate" value="<?php echo e($data->startDate); ?>" id="bs-validation-dob" autocomplete="off"
                                required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please Enter Start Date</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file">Course Image</label>
                            <input type="hidden" name="txt_file" id="txt_file" value="<?php echo e($data->image); ?>">
                            <input type="file" name="file" class="form-control" id="bs-validation-upload-file"/>
                            <?php if($data->image): ?>
                                <img src="/images/college/course/<?php echo e($data->image); ?>" style="height: 50px;width:100px;">
                            <?php else: ?>
                                <span>No image found!</span>
                            <?php endif; ?>

                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="bs-validation-country">Type</label>
                          <select class="form-select" name="course_type" id="bs-validation-country" required>

                            <?php if(!empty($course_type)): ?>
                            <?php $__currentLoopData = $course_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($k); ?>" <?php echo e($data->course_type == $k ?'selected':''); ?>><?php echo e($v); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                          </select>
                        <div class="mb-3">
                          <label class="form-label" for="bs-validation-country">Status</label>
                          <select class="form-select" name="status" id="bs-validation-country" required>
                            <option value="">Select Status</option>
                            <option value="1" <?php echo e($data->status == 1 ?'selected':''); ?> >Active</option>
                            <option value="0" <?php echo e($data->status == 0 ?'selected':''); ?>>Inactive</option>
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

<?php echo $__env->make('layouts.collegeadmin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/college/admin/course/editCourse.blade.php ENDPATH**/ ?>