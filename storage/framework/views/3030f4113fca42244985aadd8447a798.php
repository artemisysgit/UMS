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
    <a href="<?php echo e(route('add')); ?>" class="btn btn-primary">Add New</a>
</div>

<hr class="my-2">

    <div class="card-datatable table-responsive pt-0">
        <table class="datatables-basic table" id="tbl">
            <thead>
                <tr>
                    <th></th>
                    <th>SL</th>
                    <th>Title</th>
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
                    <td><?php echo e($r->createdBy); ?></td>
                    <td><a href="<?php echo e(url('admin/assign-teachers/edit/'.$r->id)); ?>" class="btn btn-primary btn-sm">edit</a></td>
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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/admin/assignment/teachers/list.blade.php ENDPATH**/ ?>