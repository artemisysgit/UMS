<?php $__env->startSection('content'); ?>


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="<?php echo e(route('admins')); ?>">Admin List</a> /</span> <?php echo e($title); ?></h4>
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
                    <form action=" <?php echo e(route('updateAdmin',$data->id)); ?>" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>

                        <?php echo csrf_field(); ?>

                        <?php echo method_field('PUT'); ?>

                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-name">Full Name</label>
                            <input type="text" class="form-control" id="bs-validation-name" name="name" value="<?php echo e($data->name); ?>" placeholder="Full Name" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-email">Email</label>
                            <input type="text" class="form-control" id="bs-validation-email" name="email" value="<?php echo e($data->email); ?>" placeholder="Email" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your email.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-pwd">Password</label>
                            <input type="text" class="form-control" id="" name="pwd" value="" placeholder="Password" />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your password.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-mobile">Mobile No</label>
                            <input type="text" class="form-control" id="bs-validation-mobile" name="mobile" value="<?php echo e($data->mobile); ?>" placeholder="Mobile No" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your mobile no.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-dob">DOB</label>
                            <input type="text" class="form-control flatpickr-validation" name="dob" value="<?php echo e($data->dob); ?>" id="bs-validation-dob" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your DOB.</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="roles">Roles</label>
                          <select class="form-select" name="roles[]" id="roles" multiple required>
                            <!-- <option value="">Select Roles</option> -->

                            <?php if(!empty($roleData)): ?>

                            <?php $__currentLoopData = $roleData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($role->id); ?>" <?php echo in_array($role->id,$user_role_data) ?'selected':'' ?>><?php echo e($role->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php endif; ?>
                          </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please selecct Role.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file">Image</label>
                            <input type="hidden" name="txt_file" id="txt_file" value="<?php echo e($data->image); ?>">
                            <input type="file" name="file" class="form-control" id="bs-validation-upload-file" />
                            <?php if($data->image): ?>
                                <img src="/images/users/admins/<?php echo e($data->image); ?>" style="height: 50px;width:100px;">
                            <?php else: ?>
                                <span>No image found!</span>
                            <?php endif; ?>
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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/admin/users/admin/edit.blade.php ENDPATH**/ ?>