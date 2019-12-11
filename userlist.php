

<!DOCTYPE html>
<html>
<head>

<title>Untitled Document</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
	<div class="container">
		<?php
	session_start();
		if (isset($_SESSION['user'] ) ) {
			include_once('config.php');
			$stmt = $conn->query("select*from users");
			$results =  $stmt-> fetchAll();
			
			?>
			  <h1>Welcome to home page</h1>
		
		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Username</th>
      <th scope="col">Fullname</th>
      <th scope="col">Email Address</th>
		 <th scope="col">Gender</th>
		<th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <tr>
		<?php
			foreach($results as $row){
				
				
			
			?>
      <th scope="row"><?php echo $row['id']    ?></th>
      <td><?php echo $row['username']    ?></td>
      <td><?php echo $row['fullname']    ?></td>
      <td><?php echo $row['email']    ?></td>
	  <td><?php echo $row['gender']    ?></td>
		
		<td><img width="50px" height="50px" style= "border-radius:25px" src="img/<?php echo $row['file'] ?>" class="rounded-circle" alt="no image" ></td>
    </tr>
	  
	  <?php
			}
	   ?>
   
  </tbody>
</table>
			
		
			
	<?php
			
		} else{
			
			
		?>
			<div class="alert alert-danger" role="alert">
  Permission Denied, Unauthorised Access!
</div>
				<?php
		}
		
		?>
      </div>
				    		
			    		
			    		
	
</body>
</html>