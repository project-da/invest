<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, fixed, after scrolling page, navbar, menu CSS examples" />
<meta name="description" content="Bootstrap 5 fixed navbar on scroll page examples, Bootstrap 5" />  

<title>Demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
		
		window.addEventListener('scroll', function() {
	       
			if (window.scrollY > 200) {
				document.getElementById('navbar_top').classList.add('fixed-top');
				// add padding top to show content behind navbar
				navbar_height = document.querySelector('.navbar').offsetHeight;
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
			 	document.getElementById('navbar_top').classList.remove('fixed-top');
				 // remove padding top from body
				document.body.style.paddingTop = '0';
			} 
		});
	}); 
	// DOMContentLoaded  end
</script>

<style type="text/css">
	.fixed-top {
	    top: -40px;
	    transform: translateY(40px);
	    transition: transform .3s;
	}
    nav#navbar_top {
    background-color: whitesmoke;
}
.navbar-dark .navbar-brand {
    color: #141313;
}
.navbar-dark .navbar-nav .nav-link {
    color: rgb(8 8 8 / 97%);
}
.navbar-dark .navbar-brand {
    color: #141313;
    font-size: 181%;
}

.dropdown-menu>li>a {
    display: block;
    padding: 6px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #141313;
    white-space: nowrap;
}
.nav-link,.nav-item,.navbar-nav>li>a:hover{

    color:tomato;

}
</style>
</head>
<body>


<!-- ============= COMPONENT ============== -->
<nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark ">
 <div class="container">
 	 <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="main_nav">
	

	<ul class="navbar-nav ms-auto">
		<li class="nav-item1"><a class="nav-link" href="#"> Menu item </a></li>
		<li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
		<li class="nav-item dropdown">
        <?php if(auth()->guard()->guest()): ?>
						<?php if(Route::has('login')): ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
						</li>
						<?php endif; ?>

						<?php if(Route::has('register')): ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
						</li>
						<?php endif; ?>
						<?php else: ?>
			<a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"><?php echo e(Auth::user()->name); ?> </a>
		    <ul class="dropdown-menu dropdown-menu-right">
			  <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
			  <li><a class="dropdown-item" href="logout"> LOGOUT </a></li>
		    </ul>
            <?php endif; ?>
		</li>
	</ul>

  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>
<!-- ============= COMPONENT END// ============== -->


</body>

</html><?php /**PATH C:\xampp\htdocs\invest\resources\views/curd/header.blade.php ENDPATH**/ ?>