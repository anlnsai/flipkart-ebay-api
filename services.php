<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="img/place.png">
<title>online shopping</title> 
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<style>
#one {

	 height:800;
	width: 1080;
  float:left;
//background-color:red;
	 border:normal;
}
#two {
		 width:1080;
	 height:800;
	 float:left;
 //background-color:green;
	
}
</style>

</head>
<body>
<div id="wrapper">

	<!-- start header -->
		<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" width="170" height="90" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li> 
						<li><a href="about.html">About Us</a></li>
						<li class="active"><a href="services.php">Application</a></li>
                     
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline" class="bg-img">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Application</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<div class="container content">		
        <!-- Service Blcoks -->
		<div class="row mar-b-50">
        
        <div class="col-lg-12 about wow fadeInRight animated" data-wow-animation-name="none" >
          <h3>
           Search Here
          </h3>
          <p>



<div id="one">

<?php
error_reporting(0);

require_once('ebay.php');
$ebay = new ebay('<your id>', 'EBAY-IN');
$sort_orders = $ebay->sortOrders();
?>

<form action="services.php"  method="post">
	<input type="text" name="search" id="search"  style="color:blue " placeholder="what you r wishing today"><br>

	</select>
	<br><pre>PRICE: <br><input type="text" name="from" style="color:blue;width: 60px" placeholder="from"> - <input type="text" name="to" style="color:blue;width: 60px" placeholder="to"></pre>
	<input type="submit" value="Search"  style="color:blue">
	
</form>

<?php
$val=$_POST['from'];
$val1=$_POST['to'];

if(!empty($_POST['search'])){
	$results = $ebay->findItemsAdvanced($_POST['search'], BestMatch);
	$item_count = $results['findItemsAdvancedResponse'][0]['searchResult'][0]['@count'];
	
	if($item_count > 0){
		$items = $results['findItemsAdvancedResponse'][0]['searchResult'][0]['item'];
		?>
		<h1><img src="img/ebay.png" width="100" height="70"/> Results</h1>
		<table border="1" align="center" style="color:grey" target="one">
		<?php
		$count=0;
	$end = 1;
	
		foreach($items as $i){
			$count++;
        	

$end = 0;
			if($count%3==1)
				echo '<tr><td align="center">';
			else if($count%3==2)
				echo '</td><td align="center">';
			else{
				echo '</td><td align="center">';
				$end =1;
			}
	
	
              
			     if($i['sellingStatus'][0]['currentPrice'][0]['__value__']>=$val&&$i['sellingStatus'][0]['currentPrice'][0]['__value__']<=$val1||$val==NULL&&$val1==NULL)
				 {
?>			 
	
			<div class="item_title">
				<a target="_blank" href="<?php echo $i['viewItemURL'][0]; ?>"><?php echo $i['title'][0]; ?></a>
			</div>
			<div class="item_img">
				<img src="<?php echo $i['galleryURL'][0]; ?>" alt="<?php echo $i['title']; ?>">
			</div>
			<div class="item_price">
				<?php echo $i['sellingStatus'][0]['currentPrice'][0]['@currencyId']; ?>
				<?php echo $i['sellingStatus'][0]['currentPrice'][0]['__value__']; ?>
			</div>
			<?php
				 }
?>			
<?php
		}
		?>
		</table>
		<?php
	}
if($item_count ==0)
{
?>
<h1 style="color:red" align="center">NO RESULT FOUND</h1>	
</div>
<?php
}

?><br>
<div id="two">

<?php
require_once('demo.php');
}
?>

	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy;vvit 2015 All right reserved. By FUTURE RULERS</span>
						</p>
					</div>
				</div>
				<div class="col-lg-5">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>