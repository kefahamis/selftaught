<?php
session_start();
require("config/connection.php");

?>
<!DOCTYPE html>  
<html>  
<head>  
	<title>Webslesson Tutorial | Autocomplete textbox using jQuery, PHP and MySQL</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./css/sidebar-menu.css">
	<link rel="stylesheet" href="css/main.css" /> 
</head>  
<body>  

	<p id="pushRight" class="btn btn-primary custom_btn">Menu</p>
	<section class="animate-menu animate-menu-left">
		<ul class="sidebar-menu">
			<li class="sidebar-header">MAIN NAVIGATION</li>
			<li>
				<a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="sidebar-submenu">
					<li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
					<li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><i class="fa fa-files-o"></i>
					<span>Layout Options</span>
					<span class="label label-primary pull-right">4</span>
				</a>
				<ul class="sidebar-submenu" style="display: none;">
					<li><a href="top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
					<li><a href="boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
					<li><a href="fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
					<li class=""><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
				</ul>
			</li>
			<li>
				<a href="../widgets.html"><i class="fa fa-th"></i> <span>Widgets</span>
					<small class="label pull-right label-info">new</small>
				</a>
			</li>


			<li>
				<a href="#">
					<i class="fa fa-pie-chart"></i>
					<span>Charts</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="sidebar-submenu">
					<li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
					<li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
					<li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
					<li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-laptop"></i>
					<span>UI Elements</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="sidebar-submenu">
					<li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
					<li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
					<li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
					<li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
					<li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
					<li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-edit"></i> <span>Forms</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="sidebar-submenu">
					<li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
					<li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
					<li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-table"></i> <span>Tables</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="sidebar-submenu">
					<li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
					<li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
				</ul>
			</li>
			<li>
				<a href="../calendar.html">
					<i class="fa fa-calendar"></i> <span>Calendar</span>
					<small class="label pull-right label-danger">3</small>
				</a>
			</li>
			<li>
				<a href="../mailbox/mailbox.html">
					<i class="fa fa-envelope"></i> <span>Mailbox</span>
					<small class="label pull-right label-warning">12</small>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-folder"></i> <span>Examples</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="sidebar-submenu">
					<li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
					<li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
					<li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
					<li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
					<li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
					<li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
					<li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
					<li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
					<li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
				</ul>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-share"></i> <span>Multilevel</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="sidebar-submenu">
					<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
					<li>
						<a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="sidebar-submenu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
								<ul class="sidebar-submenu">
									<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
				</ul>
			</li>
			<li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
			<li class="sidebar-header">LABELS</li>
			<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
			<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
			<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
		</ul>
	</section>
	<section class="left_content">
		<div class="row no-pad">
			<div class="col-md-3 col">
				<figure>
					<img src="img/block-chain.jpg " class="img-responsive" />
					<figcaption>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat viverra odio eu congue. Nulla quam est, suscipit pulvinar lectus eget, egestas sodales erat. Praesent sit amet lacus ipsum. In fermentum nec velit in tristique.
					</figcaption>
				</figure>
			</div>
						<div class="col-md-3 col">
							<figure>
								<img src="img/block-chain.jpg " class="img-responsive" />
								<figcaption>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat viverra odio eu congue. Nulla quam est, suscipit pulvinar lectus eget, egestas sodales erat. Praesent sit amet lacus ipsum. In fermentum nec velit in tristique.
								</figcaption>
							</figure>
						</div>
									<div class="col-md-3 col">
										<figure>
											<img src="img/block-chain.jpg " class="img-responsive" />
											<figcaption>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat viverra odio eu congue. Nulla quam est, suscipit pulvinar lectus eget, egestas sodales erat. Praesent sit amet lacus ipsum. In fermentum nec velit in tristique.
											</figcaption>
										</figure>
									</div>
												<div class="col-md-3 col">
													<figure>
														<img src="img/block-chain.jpg " class="img-responsive" />
														<figcaption>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas placerat viverra odio eu congue. Nulla quam est, suscipit pulvinar lectus eget, egestas sodales erat. Praesent sit amet lacus ipsum. In fermentum nec velit in tristique.
														</figcaption>
													</figure>
												</div>
		</div>
	</section>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

<script type="text/javascript">
	$(document).ready(function(){
		$.sidebarMenu($('.sidebar-menu'));
		$.sidebarMenu($('.sidebar-menu-rtl'));
		$('#pushRight').click(function () {
			$('body').addClass('animate-menu-push');
			$('body').toggleClass('animate-menu-push-right')
			$('.animate-menu-left').toggleClass('animate-menu-open')
		});
	});

</script> 

<script src="js/sidebar-menu.js"></script>  
</html>  
