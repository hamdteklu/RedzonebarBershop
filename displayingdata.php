<?php
$db_host = 'localhost'; // Server Name
$db_user = 'hteklu'; // Username
$db_pass = 'Ethiopia92'; // Password
$db_name = 'BarberShop'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
//$name="hamd";
//$email="new";

$sql = 'SELECT * 
		FROM WaitingList';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<meta http-equiv="refresh" content="15" > 
	<title>Live Waiting List</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;

			background-image: url("Cool iphone Wallpaper 2.png");
    		background-repeat: repeat; 
    		height:auto;

		}
		.logo{
			top:0;
			left:0;
			position: static;
		}
		/*Top navigation bar background */
		.topnav {
			overflow: hidden;
			background-color: #CC3300;
			}
		/*Navingation buttons */
		.topnav a {
		    float: left;
		    display: block;
		    color: #f2f2f2;
		    text-align: center;
		    padding: 16px 16px;
		    text-decoration: none;
		    font:menu;
		    font-size: 25px;
		}
				
		/* Change color on hover */
		.topnav a:hover {
		    background-color: #ddd;
		    color: black;
		}		video{
				position: relative;
				width: 100%;
				top: 50px;
				height: auto;
				border: 3px #f1f1f1;
			
		}

		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #7C0000;
			color: #FFFFFF;
			border-color: #3e0000 !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
			background-color:EEEEED;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		.waitingHeader{
			
			color: black;
			
			text-align:center;
			background-color:#EEEEED;
			 float: center;

		}
		.bottom{
			background-image:url("white concrete.jpg");
			color: black;
			display:inline-block;
			text-align:center;
			position:absolute;
   			bottom:0;
   			right: 37%
		}



	</style>
</head>
<body>
	<div class="logo">
		<img src="logo 2.png" alt="HTML5 Icon" style="width:198px;height:80px;"/>
	</div>
	
<!--Navigation bar -->
	<div class="topnav">
		<a href="index.html">Home&nbsp;&nbsp;&nbsp;&nbsp;|</a>
	  	<a href="https://my.setmore.com/bookingpage/2d44b8f5-0255-4124-b87d-c9e138d6a0ac" >Appointment&nbsp;&nbsp;&nbsp;&nbsp;|</a>
	  	<a href="location.html">Location&nbsp;&nbsp;&nbsp;&nbsp;|</a><a href="location.html">Live Wait List&nbsp;&nbsp;&nbsp;&nbsp;</a>
	</div>

	<div class="waitingHeader">
		<h2>Current Walk In List</h2>
	</div>	

	<table class="data-table">
		
		<thead>
			<tr>
				<th>NO</th>
				<th>CLIENT</th>
				<th>BARBER</th>
				<th>TIME IN</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
		$no= 1;
		
		while ($row = mysqli_fetch_array($query))
		{
		
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['clientName'].'</td>
					<td>'.$row['barberName'].'</td>
					<td>'.$row['inTime'].'</td>
					
				</tr>';

		$no++;	
		}?>
		</tbody>
		<tfoot>
			<tr>

			</tr>
		</tfoot>
		
	</table>
	<br/>

</body>
</html>