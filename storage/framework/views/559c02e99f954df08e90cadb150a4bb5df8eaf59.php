
<?php $__env->startSection('content'); ?>
    <!-- end header -->
    <div class="blogbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blogtitlepage">
                        <h2>blog</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Lastestnews -->
    <!-- blog -->
    <div id="screenshot" class="Lastestnews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2> Blog</h2>
                        <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box"> 
                        <a href="<?php echo e(route('single-blog-post.show')); ?>" target="_blank">
                            <figure><img src="<?php echo e(url ('icon/images/music-wallpaper.jpg')); ?>" alt="img" /></figure>
                            <h3>Live With Music</h3>
                            <span> March 20</span><span>Comment</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box"> 
                        <a href="<?php echo e(url('single.blog.html')); ?>" target="_blank">
                            <figure><img src="<?php echo e(url ('icon/images/music-wallpaper.jpg')); ?>" alt="img" ></figure>
                            <h3>Live With Music</h3>
                            <span> March 20</span><span>Comment</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box"> 
                        <a href="<?php echo e(url('single.blog.html')); ?>" target="_blank">
                            <figure><img src="<?php echo e(url ('icon/images/music-wallpaper.jpg')); ?>" alt="img" /></figure>
                            <h3>Live With Music</h3>
                            <span> March 20</span><span>Comment</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/blog.blade.php ENDPATH**/ ?>