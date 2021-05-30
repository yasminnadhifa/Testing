<?php
  include '../model/database.php';
  $db= new database();
?>
<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Manage your booking</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">


<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Table_Responsive_v1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Responsive_v1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Responsive_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Responsive_v1/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Responsive_v1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Responsive_v1/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Responsive_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="Table_Responsive_v1/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Welcome, <?php
         echo $_SESSION['passenger_FirstName'].'<br>';
		?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
	<li class="nav-item">
        <a class="nav-link" href="tampil.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="input.php">Regist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout/logout.php">Logout</a>
      </li>    
    </ul>
  </div>  
</nav>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap');

	h2{
		font-family: 'Poppins', sans-serif;
		text-align: center;
		color: #fff;

	}
	thead{
		font-family: 'Poppins', sans-serif;
	}
	tbody{
		font-family: 'Poppins', sans-serif;
	}
	.halo{
		font-family: 'Poppins', sans-serif;
		color: #fff;
	}
	</style>

	  <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<center>
				<img src="b.png" style="width:190px;"/>
				</center>
					<h2>Data E-Ticket Treasure Airlines</h2>
		<div class="halo">			
		<?php
         echo '<b>Nama: </b> '.$_SESSION['passenger_FirstName'].' '.'<br>'. '<b>Email: </b>'.$_SESSION['passenger_email'].'<br>';
		?>
		<div class="halo">
					<table>						
						  <thead>
						    <tr>
						      <th style="color:white">No</th>
						      <th style="color:white">Nama</th>
						      <th style="color:white">Usia</th>
							  <th style="color:white">Jenis Tiket</th>
							  <th style="color:white">gender</th>
							  <th style="color:white">Tujuan Keberangkatan</th>
							  <th style="color:white">Tanggal Keberangkatan</th>
						      <th style="color:white">Opsi</th>
							  </tr>
						</thead>
						<tbody>
              <?php
    $no=1;
    foreach($db->tampil_data() as $x){
?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $x['nama']; ?></td>
      <td><?php echo $x['usia']; ?></td>
	  <td><?php echo $x['jenis']; ?></td>
	  <td><?php echo $x['gender']; ?></td>
	  <td><?php echo $x['tujuan']; ?></td>
	  <td><?php echo $x['tanggal']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $x['id'];?>&aksi=edit" style="color:#8B008B"> Edit</a> <a>||</a>
        <a href="../controller/proses.php?id=<?php echo $x['id'];?>&aksi=hapus" style="color:red"> Hapus</a>
      </td>
    </tr>
    <?php
    }
    ?>
 							</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
<script src="Table_Responsive_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Responsive_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="Table_Responsive_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Responsive_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Responsive_v1/js/main.js"></script>

	</body>
</html>

