<?php $__env->startSection('content'); ?>


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="<?php echo e(route('pages')); ?>">CMS Pages</a> /</span> <?php echo e($title); ?></h4>
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
                    <form action=" <?php echo e(route('updatePage',$data->id)); ?>" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>

                        <?php echo csrf_field(); ?>

                        <?php echo method_field('PUT'); ?>

                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-name">Page Title</label>
                            <input type="text" class="form-control" id="bs-validation-name" name="title" value="<?php echo e($data->title); ?>" placeholder="Page Title" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter title.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-descr">Short Description</label>
                            <textarea class="form-control" id="bs-validation-descr" name="short_descr" rows="3"
                                required><?php echo e($data->short_description); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-descr">Description</label>
                            <textarea class="form-control" id="descr" name="descr" rows="10"
                                required><?php echo e($data->description); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file">Image</label>
                            <input type="hidden" name="txt_file" id="txt_file" value="<?php echo e($data->image); ?>">
                            <input type="file" name="file" class="form-control" id="bs-validation-upload-file" accept="image/*" />
                            <?php if($data->image): ?>
                                <img src="/images/cms/<?php echo e($data->image); ?>" style="height: 50px;width:100px;">
                            <?php else: ?>
                                <span>No image found!</span>
                            <?php endif; ?>
                        </div>
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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/admin/cms/edit.blade.php ENDPATH**/ ?>