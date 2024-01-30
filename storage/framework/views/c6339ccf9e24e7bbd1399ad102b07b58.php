<?php $__env->startSection('content'); ?>


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="<?php echo e(route('student-faculties')); ?>">Faculties</a> /</span> <?php echo e($title); ?></h4>
    <div class="row mb-4">

        <!-- Bootstrap Validation -->
        <div class="col-md">
            <div class="card">


            <div class="card-body">

                <div class="mb-3">
                    <h3>Image</h3>
                    <?php if(!empty($data->image)): ?>
                        <img src="/images/users/faculty/<?php echo e($data->image); ?>" alt="" style="height: 50px;width:50px;">
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <h3>Teacher</h3>
                    <p><?php echo e($data->teacher); ?></p>
                </div>
                <div class="mb-3">
                    <h3>Department</h3>
                    <p><?php echo e($data->deptName); ?></p>
                </div>
                <div class="mb-3">
                    <h3>Subject</h3>
                    <p><?php echo e($data->subject); ?></p>
                </div>

                </div>
            </div>
        </div>
        <!-- /Bootstrap Validation -->
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/student/faculties/edit.blade.php ENDPATH**/ ?>