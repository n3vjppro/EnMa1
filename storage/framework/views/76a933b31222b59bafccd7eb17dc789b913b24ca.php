<!DOCTYPE html>
<html lang="en">
<head>

    <title>Engineers Management</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
    <link rel="stylesheet" href="<?php echo e(asset('css/colorpicker.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/uniform.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('css/select2.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-responsive.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/fullcalendar.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/matrix-style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/datepicker.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/matrix-media.css')); ?>" />
    <link href="<?php echo e(asset('font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('css/mycss.css')); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>  
    <script src="<?php echo e(asset('js/jquery.ui.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.tables.js')); ?>" sycn></script>
    <script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>" sycn></script> 
    <script src="<?php echo e(asset('js/mainJS.js')); ?>"></script>
    <script src="<?php echo e(asset('js/ajax.js')); ?>" charset="UTF-8" sycn></script> 
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.uniform.js')); ?>"></script>
    <script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.js')); ?>"></script>
    <!-- <script src="js/matrix.form_common.js"></script> -->

    <script src="<?php echo e(asset('js/bootstrap-colorpicker.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap-datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.toggle.buttons.js')); ?>"></script> 
    <script src="<?php echo e(asset('js/masked.js')); ?>"></script>
    <script src="<?php echo e(asset('js/wysihtml5-0.3.0.js')); ?>"></script>
    <!-- <script src="js/jquery.peity.min.js"></script> -->

    <script>
      $('.textarea_editor').wysihtml5();
    </script>
    <script>
      function transferAddEngineer(){
          window.location.href="/AddEngineer";    
      }
    </script>
</head>
<body>

<!--Header-part-->
<div id="header">
    <img src="../img/Image_from_Skype.png" alt=""> 
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <?php if(Session::has('login') && Session::get('login') == true): ?>
            <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <?php echo e(Session::get('name')); ?></span><b class="caret"></b></a>
                <ul class="dropdown-menu">


                    <li class="divider"></li>
                    <li><a href="/password/reset"><i class="icon-check"></i> Change password</a></li>
                    <li class="divider"></li>
                    <li><a href="/logout"><i class="icon-key"></i> Log Out</a></li>
                    <?php endif; ?>
                </ul>
            </li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<!-- <div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div> -->
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="/" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class=""><a href="/"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    
    <li class=""> <a href="/TeamManagement"><i class="icon icon-th-list"></i> <span>Teams</span> <span class="label label-important"><?php echo e($totalTeam); ?></span></a>
    </li>
    
    <li class=""> <a href="/ProjectManagement"><i class="icon icon-file"></i> <span>Projects</span> <span class="label label-important"><?php echo e($totalProject); ?></span></a>
    </li>
    
    <li class=""> <a href="/EngineerManagement"><i class="icon icon-user"></i> <span>Engineers</span> <span class="label label-important"><?php echo e($totalEngineer); ?></span></a>
    </li>
    
    <li><a href="/logout"><i class="icon icon-fullscreen"></i> <span>Log out</span></a></li>

<!--     <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li> -->
  
  </ul>
</div>
<!--sidebar-menu-->
  <?php echo $__env->yieldContent('content'); ?>

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Enclave - TeamB</div>
</div>
<!--end-Footer-part-->

</body>
</html>
