<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Basic_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<?php
    include_once('sidebar.php')
    ?>



<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liste des joueurs
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">              
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" id="table_id" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light" id="table_id1" class="display">
        <thead>
          <tr>
            <th>N</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Telephone</th>
            <th>Genre</th>
            <th>Âge</th>

          </tr>
        </thead>
        <?php
            $server="localhost";
            $login="root";
            $pass="1lovem@ty";
            $connexion = new PDO("mysql:host=$server;dbname=grow",$login,$pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            try {
              echo "
              <tbody>";
              $req="SELECT * FROM `personne`";
              $select=$connexion->query($req);
              $result=$select->fetchAll();
              for ($i=0; $i <count($result) ; $i++) { 
              echo"<tr>";
              for ($j=0; $j <4 ; $j++) { 
                echo'<td>'.$result[$i][$j].'</td>';
              }
              echo"</tr>";
            }
           echo "</tbody>
          </table>
        </div>
      </div>
    </div>
              ";
             
            } catch (PDOException $e) {
              echo"Erreur".$e->getMessage();
          }
          ?>

</section>
 <!-- footer -->
 <?php
    include_once('footer.php')
    ?>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
