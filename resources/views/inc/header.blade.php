<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width-device-width initial-scale=1" >

		<meta name="description" content="The Balance Official Website">
		<meta name="authors" content="Musa Touray <mkadsamba86@gmail.com>, mamadou jallow <sulsiralumo@gmail.com">
		<title>The Balance - @yield('title')</title>

				<!-- bootstrap -->
				{!! Html::style('css/bootstrap.min.css') !!}
                {{-- {!! Html::style('css/bootstrap-theme.min.css') !!} --}}
                {!! Html::style('css/carousel.css') !!}
        	    {!! Html::style('css/style.css') !!}
        	    {!! Html::style('css/admin.css') !!}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
{!! Html::style('css/lightbox.css') !!}


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>


			<!-- NAVBAR
    		======================================================= -->
    		<div class="navbar-wrapper">
    			<div class="container">
    				<nav class="navbar navbar-inverse navbar-static-top">
    					<div class="container">
    						<div class="navbar-header">
    							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
    								<span class="sr-only">Toggle Navigation</span>
    								<span class="icon-bar"></span>
    								<span class="icon-bar"></span>
    								<span class="icon-bar"></span>
    							</button>
    							<a class="navbar-brand {{set_active('/')}}" href="/">The Balance</a>
    						</div>
    						<div id="navbar" class="navbar-collapse collapse">
    							<ul class="nav navbar-nav">
    								<li class="{{set_active('home')}}"><a href="{{url('home')}}">Home</a></li>
    								<li class="{{set_active('about')}}"><a href="{{url('about')}}">About</a></li>
    								<li class="dropdown"  class="{{set_active('projects')}}">
    									<a href="{{url('projects')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects<span class="caret"></span></a>
    									<ul class="dropdown-menu">
    									    @if(Auth::check())
    									    <li><a href="{{route('admin.index')}}" >Admin Dashboard</a></li>

    									    @else
    									    <li><a href="#admin-dashboard" data-toggle="modal">Admin Dashboard</a></li>
    									    @endif

    										<li role="separator" class="divider"></li>
    										<li><a href="#">Start a Project</a></li>
    										<li><a href="#">Finished Projects</a></li>
    										<li><a href="#">Our Partners</a></li>
    										<li role="separator" class="divider"></li>
    										<li><a href="#">Terms &amp; Conditions</a></li>
    									</ul>
    								</li>
								<li class="{{set_active('contact-us')}}"><a href="{{url('contact-us')}}">Contact Us</a></li>
								<li><a href="#videos" data-toggle="modal" data-target="#videoModal" data-theVideo="http://youtube.com/embed/0zrIMJfZAAw?list=PLj89c1y-Pmlp4EikIX4wfioV3p7Vf70LT">
								<button type="button" class="vid-transparent">Watch Videos</button></a></li>
    							</ul>

    								<ul class="nav navbar-nav navbar-right">

                                		    							    @if(Auth::check())
                                                                                <li><a href="{{url('auth/logout')}}"><button type="button" class="btn btn-success pull-right">Log out</button></a></li>
                                            							    @else
                                            							    <li><a href="#admin-dashboard" data-toggle="modal"><button type="button" class="btn btn-success pull-right">Admin Login</button></a></li>
                                            							    @endif
                                        <li><a href="signup"><button type="button" class="btn btn-primary pull-right">Sign Up</button></a></li>
                                	</ul>
    						</div>
    					</div>
    				</nav>

    			</div>
    		</div>
