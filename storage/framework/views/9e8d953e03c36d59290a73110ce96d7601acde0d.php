<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title><?php echo $__env->yieldContent('title-block'); ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo e(url('css/bootstrap.min.css')); ?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo e(url('css/style.css')); ?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?php echo e(url('css/responsive.css')); ?>">
    <!-- fevicon -->
    <link rel="icon" href="<?php echo e(url('images/fevicon.png')); ?>" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(url('css/jquery.mCustomScrollbar.min.css')); ?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="<?php echo e(url('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')); ?>" media="screen">
    <!--[if lt IE 9]> 
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <nav class="main-menu">
                        <ul class="menu-area-main">
                            <li class="<?php echo e(Request::routeIs('welcome.index') ? 'active' : ''); ?>"> <a href="<?php echo e(route('welcome.index')); ?>">Home</a> </li>
                            <li class="<?php echo e(Request::routeIs('playlist.index') ? 'active' : ''); ?>"> <a href="<?php echo e(route('playlist.index')); ?>">playlists</a> </li>
                            <li class="<?php echo e(Request::routeIs('blog.index') ? 'active' : ''); ?>"> <a href="<?php echo e(route('blog.index')); ?>">Blog</a> </li>
                            <li class="<?php echo e(Request::routeIs('contact.index') ? 'active' : ''); ?>"> <a href="<?php echo e(route('contact.index')); ?>">Contact</a> </li>
                            <li class="<?php echo e(Request::routeIs('about') ? 'active' : ''); ?>"> <a href="<?php echo e(route('about' )); ?>">About</a> </li>
                            <?php if(auth()->guard()->guest()): ?>
                            <li class="<?php echo e(Request::routeIs('login.index') ? 'active' : ''); ?>"> <a href="<?php echo e(route('login')); ?>">Login</a> </li>
                            <li class="<?php echo e(Request::routeIs('login.index') ? 'active' : ''); ?>"> <a href="<?php echo e(route('register')); ?>">register</a> </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <form class="search">
                            <input class="form-control" type="text" placeholder="Search">
                            <button><img src="images/search_icon.png"></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>
   
<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>
<footr id="footer_with_contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Contact Us</h3>
                            <ul class="locarion_icon">
                                <li><img src="<?php echo e(url('icon/1.png')); ?>" alt="icon" />104 New York , USA</li>
                                <li><img src="<?php echo e(url('icon/2.png')); ?>" alt="icon" />Phone : ( +71 5896547 )</li>
                                <li><img src="<?php echo e(url('icon/3.png')); ?>" alt="icon" />Email : demo@email.com</li>

                            </ul>

                            <ul class="contant_icon">
                                <li><img src="icon/fb.png" alt="icon" /></li>
                                <li><img src="icon/tw.png" alt="icon" /></li>
                                <li><img src="icon/lin(2).png" alt="icon" /></li>
                                <li><img src="icon/instagram.png" alt="icon" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Get In Touch</h3>
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Phone" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>New Music </h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="<?php echo e(url('images/')); ?>" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="<?php echo e(url('images/music2.jpg')); ?>" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="<?php echo e(url('images/music3.jpg')); ?>" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="<?php echo e(url('images/music4.jpg')); ?>" /></figure>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footr>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="<?php echo e(url('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(url('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('js/jquery-3.0.0.min.js')); ?>"></script>
    <script src="<?php echo e(url('js/plugin.js')); ?>"></script>
    <!-- sidebar -->
    <script src="<?php echo e(url('js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
    <script src="<?php echo e(url('js/custom.js')); ?>"></script>
    <script src="<?php echo e(url('https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\example-app\resources\views/layout.blade.php ENDPATH**/ ?>