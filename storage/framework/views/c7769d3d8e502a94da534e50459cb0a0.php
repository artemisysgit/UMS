<?php $__env->startSection('content'); ?>


<!-- Content -->


    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Academy/</span> My Courses</h4>

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
                <?php if(!empty($data)): ?>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td></td>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td>
                        <?php if(!empty($r->image)): ?>
                        <img src="/images/course/<?php echo e($r->image); ?>" alt="" style="height: 50px;width:50px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($r->title); ?></td>
                    <td><?php echo e(date('d-m-Y',strtotime($r->startDate))); ?></td>
                    <td>
                        <?php $__currentLoopData = $course_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($r->course_type == $k ? $v :''); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td><?php echo e($r->status == 1 ?'Active':''); ?></td>
                    <td><?php echo e($r->name); ?></td>
                    <td><a href="<?php echo e(url('student/courses/details/'.$r->id)); ?>" class="btn btn-primary btn-sm">edit</a></td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>


<!-- / Content -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/student/course/courseList.blade.php ENDPATH**/ ?>