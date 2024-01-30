<section class="categories mb">
        <div class="container">
            <div class="heading">
                <h5>Our Course Categories <div class="sub-heading-bg"><img src="<?php echo e(url('assets/website/assets/images/heading/heading-bg.png')); ?>"
                            alt=""></div>
                </h5>
                <h2>We have best experience in education & teaching</h2>
                <p>Experience seamless functionality with a range of cross-platform features and an intuitive yet
                    powerful interface in our comprehensive campus management solutions for educational institutions.
                </p>
            </div>
            <div class="categories-main">
                <div class="row">

                <?php if(!empty($benefit_data)): ?>
                    <?php $__currentLoopData = $benefit_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-lg-4 benefit_div">
                        <div class="categories-box">
                            <a href="#">
                                <div class="categories-icon">
                                    <div class="categories-icon-normal">
                                        <?php if($b->image): ?>
                                        <img src="/images/benefit/<?php echo e($b->image); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <!-- <div class="categories-icon-hover"><img
                                            src="<?php echo e(url('assets/website/assets/images/categories/categories1-hov.png')); ?>" alt="">
                                    </div> -->
                                </div>
                                <div class="categories-text">
                                    <h3><?php echo e($b->title); ?></h3>
                                    <p><?php echo html_entity_decode(Str::limit($b->descr,150,' ....')); ?></p>
                                    <!-- <h6 class="d-flex align-items-center ">Get Started Now
                                        <svg class="btn-right" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="move-right">
                                                <path id="Vector" d="M12.75 5.66675L15.5833 8.50008L12.75 11.3334"
                                                    stroke="#4E2895" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path id="Vector_2" d="M1.4165 8.5H15.5832" stroke="#4E2895"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </h6> -->
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                </div>

            </div>
        </div>
        <div class="categories4"><img src="<?php echo e(url('assets/website/assets/images/categories/categories4.png')); ?>" alt=""></div>
        <div class="categories5"><img src="<?php echo e(url('assets/website/assets/images/categories/categories5.png')); ?>" alt=""></div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(function(){

            resize_div_same_size('benefit_div');

        });
    </script>
<?php /**PATH C:\xampp\htdocs\atsums_multi_auth\resources\views/website/benifits/list.blade.php ENDPATH**/ ?>