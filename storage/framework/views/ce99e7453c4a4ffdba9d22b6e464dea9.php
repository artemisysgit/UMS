<?php $__env->startSection('content'); ?>


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="<?php echo e(route('assignList')); ?>">Assignments</a> /</span> <?php echo e($title); ?></h4>
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
                    <form action="<?php echo e(route('update',$assign_data->id)); ?>" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>

                        <?php echo csrf_field(); ?>

                        <?php echo method_field('PUT'); ?>

                        <div class="mb-3">
                          <label class="form-label" for="bs-validation-country">Teaqcher</label>
                          <input type="hidden" name="id" value="<?php echo e($assign_data->id); ?>">
                          <select class="form-select" name="teacher" id="teacher" required>
                            <option value="">--Select--</option>

                            <?php if(!empty($teacherData)): ?>

                            <?php $__currentLoopData = $teacherData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($t->id); ?>" <?php echo $t->id == $assign_data->teacherID?'selected':''?>><?php echo e($t->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php endif; ?>
                          </select>
                        </div>

                        <div class="mb-3 float-end">
                            <button type="button" id="btn_add" class="btn btn-primary">Add</button>
                        </div>

                       <br>
                       <br>

                        <div class="row mb-3">
                            <div class="col-md-2"><label for="">Course</label></div>
                            <div class="col-md-2"><label for="">Dept</label></div>
                            <div class="col-md-2"><label for="">Subject</label></div>
                            <div class="col-md-2"><label for="">Sem</label></div>
                        </div>
                        <div id="assign_div">

                            <?php $cnt =1  ?>
                            <?php if(!empty($line_item_data)): ?>

                                <?php $__currentLoopData = $line_item_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo $__env->make("admin.assignment.teachers.add_line_item", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php $cnt++  ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php else: ?>
                                <?php echo $__env->make("admin.assignment.teachers.add_line_item", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>

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

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/admin/assignment/teachers/edit.blade.php ENDPATH**/ ?>