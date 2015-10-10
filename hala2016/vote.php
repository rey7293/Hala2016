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
   }
   
.cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}
.binay{background-image:url(img/binay.jpg);}
.poe{background-image:url(img/poe.jpg);}
.mar{background-image:url(img/mar.jpg);}
.bong{background-image:url(img/bong.jpg);}
.leni{background-image:url(img/leni.jpg);}
.vilma{background-image:url(img/vilma.jpg);}
.peter{background-image:url(img/peter.jpg);}
.ferd{background-image:url(img/ferd.jpg);}
.ping{background-image:url(img/ping.jpg);}

.cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:100px;height:70px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}

/* Extras */
a:visited{color:#888}
a{color:#444;text-decoration:none;}
p{margin-bottom:.3em;}   

</style>
		</head>

	<body onload="viewdata()">

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
        <li><a href="index.php">Home</a></li>
        <li><a href="profile.php">Candidates</a></li>
        <li class="active"><a href="vote.php">Vote<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Statistic</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br/>
<br/>

<div class="container">
	<div class="hero-unit">
		<h2>Vote</h2>
    </div>
	
	<div id="info"></div>
	
	<div class="row">
	<div class="col-xs-1">
	</div>
	<div class="col-xs-10">
 <form>	
		
		<div class="form-group">
		  <label for="voter">Voter Name:</label>
		  <input type="text" class="form-control" id="nm" value="<?php echo $_SESSION['FULLNAME']; ?>" readonly>
		</div> 

		<div class="form-group">
		  <label for="province">Choose your Province:</label>
		  <select class="form-control" id="gd" required>
			<option></option>
			<option value="Abra">Abra</option>
			<option value="Agusan del Norte">Agusan del Norte</option>
			<option value="Agusan del Sur">Agusan del Sur</option>
			<option value="Aklan">Aklan</option>
			<option value="Albay">Albay</option>
			<option value="Antique">Antique</option>
			<option value="Apayao">Apayao</option>
			<option value="Aurora">Aurora</option>
			<option value="Basilan">Basilan</option>
			<option value="Bataan">Bataan</option>
			<option value="Batanes">Batanes</option>
			<option value="Batangas">Batangas</option>
			<option value="Benguet">Benguet</option>
			<option value="Biliran">Biliran</option>
			<option value="Bohol">Bohol</option>
			<option value="Bukidnon">Bukidnon</option>
			<option value="Bulacan">Bulacan</option>
			<option value="Cagayan">Cagayan</option>
			<option value="Camarines Norte">Camarines Norte</option>
			<option value="Camarines Sur">Camarines Sur</option>
			<option value="Camiguin">Camiguin</option>
			<option value="Capiz">Capiz</option>
			<option value="Catanduanes">Catanduanes</option>
			<option value="Cavite">Cavite</option>
			<option value="Cebu">Cebu</option>
			<option value="Compostela Valley">Compostela Valley</option>
			<option value="Cotabato">Cotabato</option>
			<option value="Davao del Norte">Davao del Norte</option>
			<option value="Davao del Sur">Davao del Sur</option>
			<option value="Davao Occidental">Davao Occidental</option>
			<option value="Davao Oriental">Davao Oriental</option>
			<option value="Dinagat Islands">Dinagat Islands</option>
			<option value="Eastern Samar">Eastern Samar</option>
			<option value="Guimaras">Guimaras</option>
			<option value="Ifugao">Ifugao</option>
			<option value="Ilocos Norte">Ilocos Norte</option>
			<option value="Ilocos Sur">Ilocos Sur</option>
			<option value="Iloilo">Iloilo</option>
			<option value="Isabela">Isabela</option>
			<option value="Kalinga">Kalinga</option>
			<option value="La Union">La Union</option>
			<option value="Laguna">Laguna</option>
			<option value="Lanao del Norte">Lanao del Norte</option>
			<option value="Lanao del Sur">Lanao del Sur</option>
			<option value="Leyte">Leyte</option>
			<option value="Maguindanao">Maguindanao</option>
			<option value="Marinduque">Marinduque</option>
			<option value="Masbate">Masbate</option>
			<option value="Metro Manila">Metro Manila</option>
			<option value="Misamis Occidental">Misamis Occidental</option>
			<option value="Misamis Oriental">Misamis Oriental</option>
			<option value="Mountain Province">Mountain Province</option>
			<option value="Negros Occidental">Negros Occidental</option>
			<option value="Negros Oriental">Negros Oriental</option>
			<option value="Northern Samar">Northern Samar</option>
			<option value="Nueva Ecija">Nueva Ecija</option>
			<option value="Nueva Vizcaya">Nueva Vizcaya</option>
			<option value="Occidental Mindoro">Occidental Mindoro</option>
			<option value="Oriental Mindoro	">Oriental Mindoro	</option>
			<option value="Palawan">Palawan</option>
			<option value="Pampanga">Pampanga</option>
			<option value="Pangasinan">Pangasinan</option>
			<option value="Quezon">Quezon</option>
			<option value="Quirino">Quirino</option>
			<option value="Rizal">Rizal</option>
			<option value="Romblon">Romblon</option>
			<option value="Samar">Samar</option>
			<option value="Sarangani">Sarangani</option>
			<option value="Siquijor">Siquijor</option>
			<option value="Sorsogon">Sorsogon</option>
			<option value="South Cotabato">South Cotabato</option>
			<option value="Southern Leyte">Southern Leyte</option>
			<option value="Sultan Kudarat">Sultan Kudarat</option>
			<option value="Sulu">Sulu</option>
			<option value="Surigao del Norte">Surigao del Norte</option>
			<option value="Surigao del Sur">Surigao del Sur</option>
			<option value="Tarlac">Tarlac</option>
			<option value="Tawi-Tawi">Tawi-Tawi</option>
			<option value="Zambales">Zambales</option>
			<option value="Zamboanga del Norte">Zamboanga del Norte</option>
			<option value="Zamboanga del Sur">Zamboanga del Sur</option>
			<option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
		  </select>
		</div>
		
	<div class="cc-selector">
		 <label for="president">Choose your President:</label>
		
			<div class="row">
				<div class="col-xs-4">
					<input id="binay" type="radio" name="credit-card" value="binay" />
					<label class="drinkcard-cc binay" for="binay"></label>
				</div>
				<div class="col-xs-4">
				    <input id="poe" type="radio" name="credit-card" value="poe" />
					<label class="drinkcard-cc poe"for="poe"></label>
				</div>
				<div class="col-xs-4">
					<input id="mar" type="radio" name="credit-card" value="mar" />
					<label class="drinkcard-cc mar"for="mar"></label>				
				</div>
			
			</div>
			
			<div class="row">
				<div class="col-xs-4">
					<input id="bong" type="radio" name="credit-card" value="bong" />
					<label class="drinkcard-cc bong"for="bong"></label>
				</div>
				<div class="col-xs-4">
				    <input id="leni" type="radio" name="credit-card" value="leni" />
					<label class="drinkcard-cc leni"for="leni"></label>
				</div>
				<div class="col-xs-4">
					<input id="vilma" type="radio" name="credit-card" value="vilma" />
					<label class="drinkcard-cc vilma"for="vilma"></label>	
				</div>
			
			</div>
			
			<div class="row">
				<div class="col-xs-4">
					<input id="peter" type="radio" name="credit-card" value="peter" />
					<label class="drinkcard-cc peter"for="peter"></label>
				</div>
				<div class="col-xs-4">
				    <input id="ferd" type="radio" name="credit-card" value="ferd" />
					<label class="drinkcard-cc ferd"for="ferd"></label>
				</div>
				<div class="col-xs-4">
					<input id="ping" type="radio" name="credit-card" value="ping" />
					<label class="drinkcard-cc ping"for="ping"></label>
				</div>
			
			</div>			
    </div>
</form>	
			<div class="row">
				<button type="button" id="save" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-hand-up"></span> Vote</button>
			</div>
	<br/>
	<br/>
	<div id="viewdata"></div>
	
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
		
      <script>
    function viewdata(){
       $.ajax({
	   type: "GET",
	   url: "php/getdata.php"
      }).done(function( data ) {
	  $('#viewdata').html(data);
      });
    }
    $('#save').click(function(){
	
	var nm = $('#nm').val();
	var gd = $('#gd').val();
	
	var datas="nm="+nm+"&gd="+gd;
      
	$.ajax({
	   type: "POST",
	   url: "php/newdata.php",
	   data: datas
	}).done(function( data ) {
	  $('#info').html(data);
	  viewdata();
	  $('#nm').val('');
	  $('#gd').val('');
	});
    });
    function updatedata(str){
	
	var id = str;
	var nm = $('#nm'+str).val();
	var gd = $('#gd'+str).val();
	
	var datas="nm="+nm+"&gd="+gd;
      
	$.ajax({
	   type: "POST",
	   url: "php/updatedata.php?id="+id,
	   data: datas
	}).done(function( data ) {
	  $('#info').html(data);
	  $.myModal.close();
	  viewdata();
	});
    }
    function deletedata(str){
	
	var id = str;
      
	$.ajax({
	   type: "GET",
	   url: "php/deletedata.php?id="+id
	}).done(function( data ) {
	  $('#info').html(data);
	  viewdata();
	});
    }
    </script>
	</body>
</html>