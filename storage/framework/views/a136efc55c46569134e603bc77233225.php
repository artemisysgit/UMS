<?php $__env->startSection('content'); ?>


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="<?php echo e(route('student-courses')); ?>">Courses</a> /</span> <?php echo e($title); ?></h4>
    <div class="row mb-4">

        <!-- Bootstrap Validation -->
        <div class="col-md">
            <div class="card">

            <div class="card-body">

                <div class="mb-3">
                    <h3>Title</h3>
                    <p><?php echo e($data->title); ?></p>
                </div>
                <div class="mb-3">
                    <h3>Description</h3>
                    <p><?php echo e($data->descr); ?></p>
                </div>

                </div>
            </div>

        </div>
        <!-- /Bootstrap Validation -->
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/student/course/editCourse.blade.php ENDPATH**/ ?>