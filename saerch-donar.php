<?php
//error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>E-RaktKosh | Blood Donor List </title>

	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	

	
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	
	<link rel="stylesheet" href="css/fontawesome-all.css">

	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	
</head>

<body>
	

	
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		
	</div>
	
	<div class="agileits-contact py-5">
		<div class="py-xl-5 py-lg-3">
			<form name="donar" method="post" style="padding-left: 30px;">
<div class="row">



<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
<div><select name="bloodgroup" class="form-control" required>
<?php $sql = "SELECT * from  tblbloodgroup ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
<option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
<?php }} ?>
</select>
</div>
</div>


<div class="col-lg-4 mb-4">
<div class="font-italic">Location </div>
<div><textarea class="form-control" name="location"></textarea></div>
</div>

</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="sub" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>
</div>
     
</form>

	<div class="agileits-contact py-5">
		<div class="py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Blood Donar List</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2"></p>
			</div>
			<div class="d-flex">
				
				<div class="row package-grids mt-5" style="padding-left: 50px;">
				<?php
				if(isset($_POST['sub']))
{
$status=1;
$bloodgroup=$_POST['bloodgroup'];
$location=$_POST['location']; 

$sql = "SELECT * from tblblooddonars where (status=:status and BloodGroup=:bloodgroup) ||  (Address=:location)";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
$query->bindParam(':location',$location,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
					<div class="col-md-4 pricing">
					
					<div class="price-top">
						<a href="single.html">
							<img src="images/blood-donor.jpg" alt="" class="img-fluid" />
						</a>
						<h3><?php echo htmlentities($result->FullName);?>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Gender: <?php echo htmlentities($result->Gender);?></h4>
						<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>
						<p class="card-text"><b>Mobile No :</b> <?php echo htmlentities($result->MobileNumber);?></p>
						<p class="card-text"><b>Email ID :</b> <?php echo htmlentities($result->EmailId);?></p>
						<p class="card-text"><b>Age :</b> <?php echo htmlentities($result->Age);?></p>
						<p class="card-text"><b>Address :</b> <?php echo htmlentities($result->Address);?></p>
						<p class="card-text"><b>Message :</b> <?php echo htmlentities($result->Message);?></p>
						<a class="w3ls-button-agile"  href="contact-blood.php?cid=<?php echo $result->id;?>">Request</a>
					</div>
				</div> <?php }}
else
{
echo htmlentities("No Record Found");

}


            } ?>
			
			
			</div>
			</div>
		</div>
	</div>
	

	


	<?php include('includes/footer.php');?>																																																																									

	<script src="js/jquery-2.2.3.min.js"></script>
	
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<script src="js/fixed-nav.js"></script>

	<script src="js/SmoothScroll.min.js"></script>

	<script src="js/move-top.js"></script>
	
	<script src="js/easing.js"></script>
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>

</body>

</html>