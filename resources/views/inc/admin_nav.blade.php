						<header id="nav-header" class="clearfix">
							<div class="col-md-5">
								<ul class="pull-right">

									<li id="welcome" class="hidden-xs"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Welcome {!! ucwords(Auth::user()->name) !!}</li>
									<li>
										<a href="{{url('/')}}" class="logout">
											<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
											Home <!-- logout icon -->
										</a>
									</li>
									<li>
										<a href="{{url('signup')}}" class="logout">
											<span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span>
											Create Member <!-- logout icon -->
										</a>
									</li>
									<li>
										<a href="{{route('admin.create')}}" class="logout">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
											Create Users <!-- logout icon -->
										</a>
									</li>
								</ul>
							</div>

							<div class="col-md-7">
								<ul class="pull-right">
																	<li>
                                										<a href="{{url('home')}}" class="logout">
                                											<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                                											Public Site <!-- logout icon -->
                                										</a>
                                									</li>

									<li class="fixed-width">
										<a href="#">
											<span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
											<span class="label label-warning">0</span> <!-- alert to autenticate new members -->
										</a>
									</li>
									<li class="fixed-width">
										<a href="#">
											<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
											<span class="label label-message">0</span> <!-- alert to check recieved messages -->
										</a>
									</li>
									<li>
										<a href="{{url('auth/logout')}}" class="logout">
											<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
											Log out <!-- logout icon -->
										</a>
									</li>
								</ul>
							</div>
						</header>
