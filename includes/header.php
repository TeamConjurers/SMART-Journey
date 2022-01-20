<?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
	
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			
				<li class="hm"><a href="admin/index.php">Admin Login</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
						
			
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
<!--- /top-header ---->

<style>
.logo{
	height: 55px;
	width: 55px;
}
</style>
<!--- header ---->
<div class="header">
	<div class="container">
	<div class="nav-left flex-div">
		<img src="images/Transparent_logo.png" class="logo">
                </div>
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
		
			<a href="index1.php">SMART<span>Journey</span></a>
		</div>
		
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
		<?php if($_SESSION['login'])
{?>
		<li class="hm"><a href="index1.php"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php"><b>My Profile<b></a></li>
			<li class="prnt"><a href="mycart01.php"><b>My Cart<b></a></li>
			<li class="prnt"><a href="change-password.php"><b>Settings<b></a></li>
			<li class="sigi"><a href="logout.php" ><b>Logout<b></a></li>
			<?php } else { ?>
				<li class="hm"><a href="index.html"><i class="fa fa-sign-in"></i></a></li>
				<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" ><b><p></p>Sign In<b> / </a></li>
				
				<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" ><b>Register for free<b></a></li> 
			
			<div class="clearfix"></div>
			<?php } ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
								<li><a href="index1.php"><b>Home<b></a></li>
								<li><a href="pack01.php"><b>Market Place<b></a></li>
								<li><a href="forumdisplay.php"><b>Forum<b> </a>  </li>
									
								<?php if($_SESSION['login'])
								
{?>								<li><a href="infocentre.php"><b>Info Centre<b></a></li>
								<li><a href="travelpackages.php"><b>Travel Planner<b></a></li>
								<li><a href="user-blog.php"><b>User's Blog<b></a></li>
								<li><a href="tour-history.php"><b>Travel Diary<b></a></li>
								<?php } else { ?>
									<li><a href="infocentrewithoutmap.php"><b>Info Centre<b></a></li>
									<li><a href="user-blogview.php"><b>User's Blog<b></a></li>
								<li><a href="pricing.php"><b>Pricing<b> </a></li>
								

								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
