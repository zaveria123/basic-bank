<!DOCTYPE html>
<html>
<head>
	<title>Hisrtory</title>
	<link rel="stylesheet" href="history.css">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	 <nav class="navbar navbar-expand-sm navbar-dark bg-primary ">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mymenu">
                <h3 class="navbar-brand" style="margin-left: 10px">The Sparks Bank</h3>
              <ul class="navbar-nav mr-auto my ">
                  <li class="nav-item my" style="margin-left: 10px"><a href="index.php" class="nav-link" >HOME</a></li>
                  <li class="nav-item my" style="margin-left: 10px"><a href="user.php" class="nav-link">View User</a></li>
                  <li class="nav-item my" style="margin-left: 10px"><a href="transaction.php" class="nav-link">Transfer Money</a></li>
                  <li class="nav-item my" style="margin-left: 10px"><a href="history.php" class="nav-link">History</a></li>
                  <li class="nav-item my" style="margin-left: 10px"><a href="about.html" class="nav-link">About</a></li>
              </ul>

            </div> 
        </nav>
        <h2 id="title">User Details</h2>
	<div class="table-responsive" style="margin: 30px; padding: 10px;">
  <table class="table table-dark table-hover">
    
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Balance</th>
      
    </tr>
  </thead>
  <tbody>
  	 <?php

            include 'config.php';

            $sql ="select * from user";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['id']; ?></td>
            <td class="py-2"><?php echo $rows['name']; ?></td>
            <td class="py-2"><?php echo $rows['email']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            
                
        <?php
            }

        ?>
  </tbody>
  </table>
</div>





<footer class="footer">
            <div class="outer-footer">
              Contact: sparksbank@gmail.com<br>Copyright &copy; All Rights Reserved Created by Zaveria Mutwalli 
            
          </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>