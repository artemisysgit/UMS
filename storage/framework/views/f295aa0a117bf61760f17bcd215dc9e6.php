<?php $__env->startSection('content'); ?>


<!-- Content -->


    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Academy/</span>Faculties</h4>

    <div class="card-datatable table-responsive pt-0">
        <table class="datatables-basic table" id="tbl">
            <thead>
                <tr>
                    <th></th>
                    <th>SL</th>
                    <th>Image</th>
                    <th>Teacher</th>
                    <th>Department</th>
                    <th>Subject</th>
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
                        <img src="/images/users/faculty/<?php echo e($r->image); ?>" alt="" style="height: 50px;width:50px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($r->teacher); ?></td>
                    <td><?php echo e($r->deptName); ?></td>
                    <td><?php echo e($r->subject); ?></td>
                    <td><a href="<?php echo e(url('student/faculties/details/'.$r->id)); ?>" class="btn btn-primary btn-sm">edit</a></td>
                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>


<!-- / Content -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/student/faculties/list.blade.php ENDPATH**/ ?>