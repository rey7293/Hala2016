<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
		<head>
				<meta charset="utf-8"/>
				<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
				<meta name="viewport" content="width=device-width, initial-scale=1"/>
				<title>Hala2016</title>
				<meta name="keywords" content="Jeager Learning Bootstrap"/> <!--Define keywords for search engines -->
				<meta name="description" content="Prototype on my Bootstrap"/> <!--Define a description of your web page -->
				<meta name="author" content="Rhean Manalo"/> <!--Define the author of a page -->
				<link href="css/bootstrap.min.css" rel="stylesheet"/>
				<link href="css/bootstrap-social.css" rel="stylesheet"/>
				<link href="css/font-awesome.min.css" rel="stylesheet"/>
				
<style>
body{
   background:#00cbff !important;
   overflow:hidden; 
   }

</style>
		</head>

	<body>

  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
 
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-ruble"></span>inoy Halalan<small>2k16</small></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  <ul class="nav navbar-nav">
	  <center>
		<li class="hidden-lg hidden-sm"><img class="img-rounded" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
		<li class="hidden-lg hidden-sm"><label class="text text-info">Welcome! <?php echo $_SESSION['FULLNAME']; ?></label></li>
		<li class="hidden-lg hidden-sm"><a class="btn btn-xs btn-primary" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
	 </center>
	  </ul>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="profile.php">Candidates</a></li>
        <li><a href="vote.php">Vote</a></li>
        <li><a href="#">Statistic</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br/>
<br/>

<div class="container">
	<div class="hero-unit">
		<h2>News Feeds</h2>
    </div>
	
	<div class="row">
	<div class="col-xs-1">
	</div>
	<div class="col-xs-10">
<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/hashtag/Halalan2016" data-widget-id="644268649700704257">#Halalan2016 Tweets</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
	<div class="col-xs-1">
	</div>	
	</div>
</div>

    <?php else: ?>     <!-- Before login --> 
		
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-ruble"></span>inoy Halalan<small>2k16</small></a>
    </div>
  </div>
</nav>

<br/>			
<br/>			
<br/>		
<br/>		


			<div class="row"> <!--logo:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
				<div class="col-xs-2">
				</div>
				<div class="col-xs-8">
				<center>
			<img src="img/vote.png" class="responsive" style="width:98px;">
					<br/>
					<p class="small">VOTE OF THE NATION</p>
				</center>
				</div>
				<div class="col-xs-2">
				</div>
			</div> <!--logo:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
<br/>		
		
	<div class="row">	
		<div class="col-xs-2">
		</div>
		<div class="col-xs-8">
		<label>Welcome...</label>
			<div> <a href="fbconfig.php" class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Sign in with Facebook </a></div>
		</div>
		<div class="col-xs-2">
		</div>	
	</div>
	
	<footer class="footer">
<nav class="navbar navbar-fixed-bottom">
  <div class="container-fluid">
    <div class="navbar-header">
	<center>
       <p class="text-muted">Develop by: Jeager & Jemuel</p>
	</center>   
    </div>
  </div>
</nav>	
	</footer>
 
    <?php endif ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.1.4.min.js"></script>
	</body>
</html>