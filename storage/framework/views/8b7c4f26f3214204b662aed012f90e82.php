<?php $__env->startSection('content'); ?>


<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light"><a href="<?php echo e(route('faculties')); ?>">Faculty Users</a> /</span> <?php echo e($title); ?></h4>
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
                    <form action="<?php echo e(route('saveFaculty')); ?>" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>

                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-name">Full Name</label>
                            <input type="text" class="form-control" id="bs-validation-name" name="name" placeholder="Full Name" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-email">Email</label>
                            <input type="text" class="form-control" id="bs-validation-email" name="email" placeholder="Email" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your email.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-pwd">Password</label>
                            <input type="password" class="form-control" id="bs-validation-pwd" name="pwd" placeholder="Password" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your password.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-mobile">Mobile No</label>
                            <input type="text" class="form-control" id="bs-validation-mobile" name="mobile" placeholder="Mobile No" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your mobile no.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-dob">DOB</label>
                            <input type="text" class="form-control flatpickr-validation" name="dob"
                                id="bs-validation-dob" autocomplete="off" readonly required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter your DOB.</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="roles">Roles</label>
                          <select class="form-select" name="roles[]" id="roles" multiple required>
                            <!-- <option value="">Select Roles</option> -->

                            <?php if(!empty($roleData)): ?>

                            <?php $__currentLoopData = $roleData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($role->id); ?>"><?php echo e($role->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php endif; ?>
                          </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please selecct Role.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bs-validation-upload-file">Image</label>
                            <input type="file" name="file" class="form-control" id="bs-validation-upload-file" />
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
    <div class="row" style="display:none">
        <!-- FormValidation -->
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">FormValidation</h5>
                <div class="card-body">
                    <form id="formValidationExamples" class="row g-3">
                        <!-- Account Details -->

                        <div class="col-12">
                            <h6>1. Account Details</h6>
                            <hr class="mt-0" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="formValidationName">Full Name</label>
                            <input type="text" id="formValidationName" class="form-control" placeholder="Course Name"
                                name="formValidationName" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationEmail">Email</label>
                            <input class="form-control" type="email" id="formValidationEmail" name="formValidationEmail"
                                placeholder="john.doe" />
                        </div>

                        <div class="col-md-6">
                            <div class="form-password-toggle">
                                <label class="form-label" for="formValidationPass">Password</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" id="formValidationPass"
                                        name="formValidationPass"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="multicol-password2" />
                                    <span class="input-group-text cursor-pointer" id="multicol-password2"><i
                                            class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-password-toggle">
                                <label class="form-label" for="formValidationConfirmPass">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" id="formValidationConfirmPass"
                                        name="formValidationConfirmPass"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="multicol-confirm-password2" />
                                    <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"><i
                                            class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- Personal Info -->

                        <div class="col-12">
                            <h6 class="mt-2">2. Personal Info</h6>
                            <hr class="mt-0" />
                        </div>

                        <div class="col-md-6">
                            <label for="formValidationFile" class="form-label">Profile Pic</label>
                            <input class="form-control" type="file" id="formValidationFile" name="formValidationFile" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationDob">DOB</label>
                            <input type="text" class="form-control flatpickr-validation" name="formValidationDob"
                                id="formValidationDob" required />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="formValidationSelect2">Country</label>
                            <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2"
                                data-allow-clear="true">
                                <option value="">Select</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationLang">Languages</label>
                            <input type="text" value="" class="form-control" name="formValidationLang"
                                id="formValidationLang" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="formValidationTech">Tech</label>
                            <input class="form-control typeahead" type="text" id="formValidationTech"
                                name="formValidationTech" autocomplete="off" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="formValidationHobbies">Hobbies</label>
                            <select class="selectpicker hobbies-select w-100" id="formValidationHobbies"
                                data-style="btn-default" data-icon-base="ti" data-tick-icon="ti-check text-white"
                                name="formValidationHobbies" multiple>
                                <option>Sports</option>
                                <option>Movies</option>
                                <option>Books</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="formValidationBio">Bio</label>
                            <textarea class="form-control" id="formValidationBio" name="formValidationBio"
                                rows="3"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Gender</label>
                            <div class="form-check custom mb-2">
                                <input type="radio" id="formValidationGender" name="formValidationGender"
                                    class="form-check-input" checked />
                                <label class="form-check-label" for="formValidationGender">Male</label>
                            </div>

                            <div class="form-check custom">
                                <input type="radio" id="formValidationGender2" name="formValidationGender"
                                    class="form-check-input" />
                                <label class="form-check-label" for="formValidationGender2">Female</label>
                            </div>
                        </div>

                        <!-- Choose Your Plan -->

                        <div class="col-12">
                            <h6 class="mt-2">3. Choose Your Plan</h6>
                            <hr class="mt-0" />
                        </div>
                        <div class="row gy-3 mt-0">
                            <div class="col-xl-3 col-md-5 col-sm-6 col-12">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="basicPlanMain1">
                                        <span class="custom-option-body">
                                            <i class="ti ti-brand-telegram"></i>
                                            <span class="custom-option-title"> Starter </span>
                                            <small> Get 5gb of space and 1 team member. </small>
                                        </span>
                                        <input name="formValidationPlan" class="form-check-input" type="radio" value=""
                                            id="basicPlanMain1" checked />
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-5 col-sm-6 col-12">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="basicPlanMain2">
                                        <span class="custom-option-body">
                                            <i class="ti ti-users"></i>
                                            <span class="custom-option-title"> Personal </span>
                                            <small> Get 15gb of space and 5 team member. </small>
                                        </span>
                                        <input name="formValidationPlan" class="form-check-input" type="radio" value=""
                                            id="basicPlanMain2" />
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-5 col-sm-6 col-12">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="basicPlanMain3">
                                        <span class="custom-option-body">
                                            <i class="ti ti-crown"></i>
                                            <span class="custom-option-title"> Premium </span>
                                            <small> Get 25gb of space and 15 members. </small>
                                        </span>
                                        <input name="formValidationPlan" class="form-check-input" type="radio" value=""
                                            id="basicPlanMain3" />
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="switch switch-primary">
                                <input type="checkbox" class="switch-input" name="formValidationSwitch" />
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                </span>
                                <span class="switch-label">Send me related emails</span>
                            </label>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formValidationCheckbox"
                                    name="formValidationCheckbox" />
                                <label class="form-check-label" for="formValidationCheckbox">Agree to our terms and
                                    conditions</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /FormValidation -->
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/admin/users/normal/create.blade.php ENDPATH**/ ?>