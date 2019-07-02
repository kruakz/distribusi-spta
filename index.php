<?php 
	$id = $_GET["id"];
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Dsitribusi SPAT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='
			sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
			<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
			<link href="//netdna.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<link rel="stylesheet" type="text/css" href="style.css">
			<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.all.min.js"></script>
			<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
			<script src="//netdna.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
		</head>
		<body>
			<div class="tab">
			  <button class="tablinks active" onclick="openCity(event, 'dashboard')"><i class="material-icons">dashboard</i><br><span>DASHBOARD</span></button>
			  <button class="tablinks" onclick="openCity(event, 'distribusi')"><i class="material-icons">local_shipping</i><br><span>DISTRIBUSI</span></button>
			  <button class="tablinks" onclick="openCity(event, 'histori')"><i class="material-icons">history</i><br><span>HISTORI</span></button>
			  <button class="tablinks" onclick="openCity(event, 'pengaturan')"><i class="material-icons">settings</i><br><span>PENGATURAN</span></button>
			</div>
			<!-- Tab content -->
			<div id="dashboard" class="tabcontent active" style="display: block;">
			</div>
			<div id="distribusi" class="tabcontent">
			</div>
			<div id="histori" class="tabcontent">
			</div>
			<div id="pengaturan" class="tabcontent">
			</div>
			<script type="text/javascript">
				$("#dashboard").load("pages/dashboard.php?id=<?php echo $id ?>");
				function openCity(evt, cityName) {
				  // Declare all variables
				  var i, tabcontent, tablinks;

				  // Get all elements with class="tabcontent" and hide them
				  tabcontent = document.getElementsByClassName("tabcontent");
				  for (i = 0; i < tabcontent.length; i++) {
				    tabcontent[i].style.display = "none";
				  }

				  // Get all elements with class="tablinks" and remove the class "active"
				  tablinks = document.getElementsByClassName("tablinks");
				  for (i = 0; i < tablinks.length; i++) {
				    tablinks[i].className = tablinks[i].className.replace(" active", "");
				  }

				  // Show the current tab, and add an "active" class to the button that opened the tab
				  document.getElementById(cityName).style.display = "block";
				  evt.currentTarget.className += " active";
				  $("#"+cityName).load("pages/"+cityName+".php?id=<?php echo $id ?>");
				}
			</script>
		</body>
	</html>