

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
        <h2 id="title">Make Transaction</h2>
	<div class="table-responsive" style="margin: 30px; padding: 10px;">

  <table class="table table-dark table-hover">
    
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Balance</th>
      <th scope="col" >Operation</th>
      
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
            <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-primary">Transact</button></a></td>
            
                
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>