<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];	
$peoplenum=$_POST['peoplenum'];
$travelcost=$_POST['travelcost'];
$placename=$_POST['placename'];	
$feedback=$_POST['feedback'];

$sql="INSERT INTO  tblenquiry(FullName,EmailId,PeopleNum,TravelCost,PlaceName,FeedBack) VALUES(:fname,:email,:peoplenum,:travelcost,:placename,:feedback)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':peoplenum',$peoplenum,PDO::PARAM_STR);
$query->bindParam(':travelcost',$travelcost,PDO::PARAM_STR);
$query->bindParam(':placename',$placename,PDO::PARAM_STR);
$query->bindParam(':feedback',$feedback,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Add to Forum</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>
<!-- top-header -->
<!--- /banner-1 ---->
<!--- privacy ---->

<div class="privacy">
	<div class="container">
		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Add to Forum</h3>
		<form name="enquiry" method="post">
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
	<p style="width: 350px;">
		
			<b>Name</b>  <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your name" required="">
	</p> 
	<p style="width: 350px;">
<b>Place</b>  <input type="text" name="placename" class="form-control" id="placename"  placeholder="Enter the place" required="">
	</p> 
	<p style="width: 350px;">
<b>No.of People</b>  <input type="text" name="peoplenum" class="form-control" id="peoplenum"  placeholder="No.of people travelled" required="">
	</p>
	<p style="width: 350px;">
<b>Travel Cost</b>  <input type="text" name="travelcost" class="form-control" id="travelcost" maxlength="10" placeholder="Enter the Travel Cost" required="">
	</p> 

	<p style="width: 350px;">
<b>Description</b>  <textarea name="feedback" class="form-control" rows="6" cols="50" id="feedback"  placeholder="Describe your experience" required=""></textarea> 
	</p> 

			<p style="width: 350px;">
<button type="submit" name="submit1" class="btn-primary btn">Submit</button>

			</p>
			
			</form>
			<button><a href="forumdisplay.php"><b>Back<b></a></button>


	</div>
</div>
<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>