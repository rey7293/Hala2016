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
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="profile.php">Candidates<span class="sr-only">(current)</span></a></li>
        <li><a href="vote.php">Vote</a></li>
		<li><a href="#">Statistic</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br/>
<br/>
<!--MODAL=====================================================================-->
<div class="modal fade" id="binay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Jejomar Binay</h4>
      </div>
      <div class="modal-body">
        <p class="text-justify" style="text-indent: 30px;">Jejomar "Jojo" Cabauatan Binay, Sr. (born Jesús Jose Cabauatan Binay on November 11, 1942) is the fifteenth Vice President of the Republic of the Philippines under President Benigno S. Aquino III. He is also currently serving as the president of the Boy Scouts of the Philippines.</p>

		<p class="text-justify" style="text-indent: 30px;">He was appointed by former President Corazon Aquino as officer-in-charge of Makati City from 1986-1987. After his assignment, he was elected as Makati City mayor from 1988-1998. During this term, he acted as the Metropolitan Manila Development Authority (MMDA) chairman from 1990 to 1991. In 2001, he was reelected as mayor until the end of his term in 2010. He resigned as Chairman of the Housing and Urban Development Coordinating Council and as Presidential Adviser on Overseas Filipino Workers in June 22, 2015.</p>

		<p class="text-justify" style="text-indent: 30px;">Binay is a member of the United Nationalist Alliance (UNA), which is a coalition between the Pwersa ng Masang Pilipino and the Partido Demokratiko Pilipino - Lakas ng Bayan. It was founded as an electoral alliance in 2012, and later became an official political party in 2014.<a class="text text-primaty" href="https://en.wikipedia.org/wiki/Candidates_in_the_Philippine_presidential_election,_2016 " target="_blank"><b> Read more...</b></a></p>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="poe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Grace Poe</h4>
      </div>
      <div class="modal-body">
        <p class="text-justify" style="text-indent: 30px;">Mary Grace Sonora Poe-Llamanzares (born September 3, 1968), also commonly known as Grace Poe, is a Filipino politician. She served as chairperson of the Movie and Television Review and Classification Board (MTRCB) from 2010 to 2012. Born in Iloilo, she was abandoned by her biological mother at birth. Poe was later adopted by Philippine National Artist Fernando Poe, Jr. and his wife Susan Roces.</p>

		<p class="text-justify" style="text-indent: 30px;">Poe studied at the University of the Philippines Manila, where she majored in Development Studies, and at Boston College in the United States, where she graduated in political science. Poe has spent much of her adult life in the United States. She returned to the Philippines after learning that her father, who ran in a disputed presidential election in 2004, died later that year.</p>

		<p class="text-justify" style="text-indent: 30px;">Following her father's death, Poe permanently returned to the Philippines, where she became involved in politics. She began attracting national attention for pursuing her father's fight for closure over the results of the 2004 election, which he believed he had rightfully won, and campaigned against further electoral fraud.<a class="text text-primaty" href="https://en.wikipedia.org/wiki/Candidates_in_the_Philippine_presidential_election,_2016 " target="_blank"><b> Read more...</b></a></p>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="mar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mar Roxas</h4>
      </div>
      <div class="modal-body">
        <p class="text-justify" style="text-indent: 30px;">Manuel "Mar" Araneta Roxas II (born May 13, 1957) is a Filipino politician who served in the Cabinet of the Philippines as Secretary of the Interior and Local Government from 2012 to 2015. Previously, he was the Secretary of Trade and Industry from 2000 to 2003, a Senator from 2004 to 2010, and Secretary of Transportation and Communications from 2011 to 2012. He is the son of former Senator Gerry Roxas, and the grandson of former Philippine President Manuel Roxas and of industrialist J. Amado Araneta.</p>

		<p class="text-justify" style="text-indent: 30px;">On June 7, 2011, President Benigno Aquino III appointed Roxas as the new Secretary of Transportation and Communications to replace outgoing Secretary Jose de Jesus, and he took office on July 4, 2011. Afterwards, on August 31, 2012, President Aquino nominated him as Secretary of Interior and Local Government, replacing Jesse Robredo, who died in a plane crash.</p>

		<p class="text-justify" style="text-indent: 30px;">On August 3, 2015, Roxas officially tendered his resignation as Secretary of the Interior and Local Government in order to focus on his presidential campaign.<a class="text text-primaty" href="https://en.wikipedia.org/wiki/Candidates_in_the_Philippine_presidential_election,_2016 " target="_blank"><b> Read more...</b></a></p>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="bong" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Bong Revilla</h4>
      </div>
      <div class="modal-body">
        <p class="text-justify" style="text-indent: 30px;">Ramón Bong Revilla, Jr. (born José Marie Mortel Bautista on September 25, 1966) is a Filipino actor, television presenter, politician, and Senator of Philippines. In 2009, he legally changed his surname to Bong Revilla.</p>

		<p class="text-justify" style="text-indent: 30px;">He was invited by former NBI director Epimaco Velasco to be his running mate as vice governor of Cavite. In the 1995 local elections, Velasco and Revilla won as governor and vice governor, beating the tandem of Remulla and Lara. In February 1998, Velasco resigned as governor of Cavite when he was appointed as secretary of Interior and Local Government replacing then Senatorial candidate Robert Barbers. Revilla assumed as the chief executive of the province. In the May 1998 local elections, he won a full term for the position of governor. In his May 2001 reelection bid for governor, he was trounced by then Representative Ayong S. Maliksi by a wide margin. He returned to his acting career and became a TV actor in GMA-7's sitcom Idol ko si Kap.</p>

		<p class="text-justify" style="text-indent: 30px;">In February 2004, Ramon "Bong" Bong Revilla, Jr. resigned as Chairman of the VRB and recommended Eduardo "Edu" Manzano as his replacement. His father, Ramon Revilla, ended his term as senator on June 30, 2004. Revilla Sr. was elected senator in 1992, reelected in 1998, and could not run for third term according to the 1987 Philippine Constitution. Ramon "Bong" Bong Revilla, Jr. ran for the position of Senator under the administration K-4 coalition. He won and received the second highest number of votes from the national electorate.<a class="text text-primaty" href="https://en.wikipedia.org/wiki/Candidates_in_the_Philippine_presidential_election,_2016 " target="_blank"><b> Read more...</b></a></p>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="leni" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Leni Robredo</h4>
      </div>
      <div class="modal-body">
        <p class="text-justify" style="text-indent: 30px;">Maria Leonor Gerona Robredo, also known as Leni Robredo, is a political figure in Camarines Sur, Philippines. She is a lawyer and the widow of former Interior Secretary Jesse Robredo.</p>

		<p class="text-justify" style="text-indent: 30px;">She was married to former Mayor of Naga City turned DILG Secretary Jesse Robredo with three children. Currently, she is the chairperson of Liberal Party in Camarines Sur and the standard bearer for congressman in the 3rd congressional district.</p>

		<p class="text-justify" style="text-indent: 30px;">On May 16, 2013 she was proclaimed as the winner for the Congressman of the 3rd District of Camarines Sur by a landslide, beating Nelly Favis-Villafuerte, wife of Luis Villafuerte, newspaper columnist of Manila Bulletin, and former Monetary Board member, of Nationalist People's Coalition/United Nationalist Alliance.<a class="text text-primaty" href="https://en.wikipedia.org/wiki/Candidates_in_the_Philippine_presidential_election,_2016 " target="_blank"><b> Read more...</b></a></p>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="vilma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Vilma Santos</h4>
      </div>
      <div class="modal-body">
        <p class="text-justify" style="text-indent: 30px;">Vilma Santos-Recto (born November 3, 1953) commonly known as Ate Vi is a Filipino actress and politician. She is known as the Star for all Seasons for her various roles in different genres of her movies and holds the titles of Grand Slam Queen and as the longest reigning box office queen of Philippine cinema. Santos is also a politician, currently serving as Governor of Batangas and once as mayor of Lipa City.</p>

		<p class="text-justify" style="text-indent: 30px;">In 1998, she entered politics and ran for mayor of Lipa City, Batangas where she won three consecutive elections, becoming the city's first female mayor.</p>

		<p class="text-justify" style="text-indent: 30px;">Santos-Recto was proclaimed Governor-elect of the province of Batangas on May 21, 2007 after garnering 475,740 votes against Sanchez's 344,969 becoming the first female governor of the province of Batangas. Governor Santos-Recto was reelected Governor of Batangas during the May 2010 elections and again, reelected as Governor of Batangas during the May 2013 elections and this is her last term for being a Governor.<a class="text text-primaty" href="https://en.wikipedia.org/wiki/Candidates_in_the_Philippine_presidential_election,_2016 " target="_blank"><b> Read more...</b></a></p>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="peter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Alan Peter Cayetano</h4>
      </div>
      <div class="modal-body">
        <p class="text-justify" style="text-indent: 30px;">Alan Peter Cayetano (born October 28, 1970), is a Filipino politician and Senator in the Senate of the Philippines who has been elected since 2007.</p>

		<p class="text-justify" style="text-indent: 30px;">Born on the 28th of October 1970, Cayetano resides with his family in Bagumbayan, Taguig City. His wife, Maria Laarni Lopez Cayetano, is currently the Mayor of Taguig City. Cayetano is the second child in a brood of four of the late Senator Renato “Compañero” Cayetano and Sandra Schramm Cayetano. His older sister, Pia, is also a senator of the Republic of the Philippines. His youngest brother, Lino is the incumbent representative of the 2nd District of Taguig while his other brother Ren is a former councilor of Muntinlupa.</p>

		<p class="text-justify" style="text-indent: 30px;">After the 2013 elections, at the start of the 16th Congress, Senator Alan was elected as the new Senate Majority Floor Leader and was likewise appointed to chair the Senate Committee on Rules.<a class="text text-primaty" href="https://en.wikipedia.org/wiki/Candidates_in_the_Philippine_presidential_election,_2016 " target="_blank"><b> Read more...</b></a></p>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="ferd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Bongbong Marcos</h4>
      </div>
      <div class="modal-body">
        <p class="text-justify" style="text-indent: 30px;">Ferdinand "Bongbong" R. Marcos, Jr. (born September 13, 1957), widely known as Bongbong Marcos, is a Filipino politician and senator in the 16th Congress of the Philippines. A member of the Nacionalista Party,[3] Marcos chairs several senate committees, including the Committee on Local Government and the Committee on Public Works, and is a member of several other committees. He is the second child of Ferdinand E. Marcos, the former President of the Philippines (1965–1986), and former First Lady Imelda R. Marcos. He is a former congressman and former governor of Ilocos Norte before his election to the Senate in 2010. Marcos also previously served as Deputy Minority Leader of the House of Representatives.</p>

		<p class="text-justify" style="text-indent: 30px;">On November 20, 2009, the KBL forged an alliance with the Nacionalista Party (NP) between Marcos and NP Chairman Senator Manny Villar at the Laurel House in Mandaluyong City. Marcos became a guest senatorial candidate of the NP through this alliance. Marcos was later removed as a member by the KBL National Executive Committee on November 23, 2012.[8] As such, the NP broke its alliance with the KBL due to internal conflicts within the party, however Bongbong remained part of the NP senatorial line-up. He was proclaimed as one of the winning senatorial candidates of the 2010 senate elections. He took office on June 30, 2010.</p>

		<p class="text-justify" style="text-indent: 30px;">He is married to Louise Cacho Araneta, with 3 sons: Ferdinand Alexander III (born 1994), Joseph Simon (born 1995) and William Vincent (born 1997).<a class="text text-primaty" href="https://en.wikipedia.org/wiki/Candidates_in_the_Philippine_presidential_election,_2016 " target="_blank"><b> Read more...</b></a></p>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="ping" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ping Lacson</h4>
      </div>
      <div class="modal-body">
        <p class="text-justify" style="text-indent: 30px;">Panfilo "Ping" Morena Lacson, Sr. (born June 1, 1948) is a Filipino politician who served in the Senate of the Philippines from 2001 to 2013. He was Director-General of the Philippine National Police from 1999 to 2001 before being elected to the Senate.</p>

		<p class="text-justify" style="text-indent: 30px;">To lead the management and rehabilitation efforts of the central provinces in the Philippines affected by Typhoon Haiyan, Philippines President Benigno Aquino III appointed Panfilo Lacson as Presidential Assistant for Rehabilitation and Recovery in December 2013. Eight months into his job, Lacson secured the approval from President Benigno Aquino III of the phased implementation of the rehabilitation plan of six areas in the Yolanda corridor including that of Tacloban, Leyte, Samar and Cebu.</p>

		<p class="text-justify" style="text-indent: 30px;">Throughout his Senate stint, Lacson proved himself unique by foregoing of his Priority Development Assistance Fund or pork barrel. In 2003, he delivered a privilege speech entitled Living Without Pork, exposing the evils of the pork barrel system, at the same time calling for its total abolition.<a class="text text-primaty" href="https://en.wikipedia.org/wiki/Candidates_in_the_Philippine_presidential_election,_2016 " target="_blank"><b> Read more...</b></a></p>
      </div>

    </div>
  </div>
</div>
<!--MODAL=====================================================================-->
<div class="container">
	<div class="hero-unit">
		<h2>Presidential Candidates</h2>
    </div>
<br/>	
<br/>	
	<div class="row">
	<div class="col-xs-1">
	</div>
	<div class="col-xs-10">
	  <div class="col-xs-12 col-lg-4">
		<a data-toggle="modal" data-target="#binay"><img style="width:100%; height:192px;" class="img-responsive" src="img/binay.jpg"></a>
		<center><caption><p><b>Jejomar Cabauatan Binay Sr.</b></p></caption></center>
	  </div>

	  <div class="col-xs-12 col-lg-4">
		<a data-toggle="modal" data-target="#poe"><img style="width:100%; height:192px;" class="img-responsive" src="img/poe.jpg"></a>
		<center><caption><p><b>Mary Grace Sonora Poe-Llamanzares</b></p></caption></center>
	 </div>
	  
	  <div class="col-xs-12 col-lg-4">
		<a data-toggle="modal" data-target="#mar"><img style="width:100%; height:192px;" class="img-responsive" src="img/mar.jpg"></a>
		<center><caption><p><b>Manuel Araneta Roxas II</b></p></caption></center>
	  </div>
	</div>
	<div class="col-xs-1">
	</div>	
	</div>
	
	<div class="row">
	<div class="col-xs-1">
	</div>
	<div class="col-xs-10">
	  <div class="col-xs-12 col-lg-4">
		<a data-toggle="modal" data-target="#bong"><img style="width:100%; height:192px;" class="img-responsive" src="img/bong.jpg"></a>
		<center><caption><p><b>Ramón Bong Revilla Jr.</b></p></caption></center>
	  </div>

	  <div class="col-xs-12 col-lg-4">
		<a data-toggle="modal" data-target="#leni"><img style="width:100%; height:192px;" class="img-responsive" src="img/leni.jpg"></a>
		<center><caption><p><b>Maria Leonor Gerona Robredo</b></p></caption></center>
	 </div>
	  
	  <div class="col-xs-12 col-lg-4">
		<a data-toggle="modal" data-target="#vilma"><img style="width:100%; height:192px;" class="img-responsive" src="img/vilma.jpg"></a>
		<center><caption><p><b>Vilma Santos-Recto</b></p></caption></center>
	  </div>
	</div>
	<div class="col-xs-1">
	</div>	
	</div>	
	
	<div class="row">
	<div class="col-xs-1">
	</div>
	<div class="col-xs-10">
	  <div class="col-xs-12 col-lg-4">
		<a data-toggle="modal" data-target="#peter"><img style="width:100%; height:192px;" class="img-responsive" src="img/peter.jpg"></a>
		<center><caption><p><b>Alan Peter Cayetano</b></p></caption></center>
	  </div>

	  <div class="col-xs-12 col-lg-4">
		<a data-toggle="modal" data-target="#ferd"><img style="width:100%; height:192px;" class="img-responsive" src="img/ferd.jpg"></a>
		<center><caption><p><b>Ferdinand R. Marcos Jr.</b></p></caption></center>
	 </div>
	  
	  <div class="col-xs-12 col-lg-4">
		<a data-toggle="modal" data-target="#ping"><img style="width:100%; height:192px;" class="img-responsive" src="img/ping.jpg"></a>
		<center><caption><p><b>Panfilo Morena Lacson Sr.</b></p></caption></center>
	  </div>
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