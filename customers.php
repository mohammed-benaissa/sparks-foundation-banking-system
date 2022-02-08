<?php include "db/show_customers.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
     crossorigin="anonymous">
    <title>Customers</title>
    <style>
      *{
        font-family: cursive;
      }
      h2{
        margin-top: 40px;
        color: #5957f9;
      }
      th{
        color: #5957f9 !important;
      }
      table{
        margin-top: 80px;
      }
      .view{
        background-color:  #5957f9;
        color: white;
      }
      .view:hover{
        background-color: white;
        color: #5957f9;
      }
      .btnh{
        color: #5957f9;
        margin-top: 10%;
      }
      .btnh:hover{
        border-color: #5957f9;
        color: #5957f9;
      }
    </style>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
          <div class="col-2 text-center "><a class="btn btnh "  href="index.php" role="button">Home Page</a></div>
          <div class="col-8"></div>
          <div class="col-2"><a class="btn btnh "  href="index.php" role="button">Transactions Page</a></div>
        </div>
      <div class="row">
        <div class="col-4"></div>
        <div class="col-4 text-center"><h2>Customers Table</h2></div>
        <div class="col-4"></div>

      </div>
        <div class="row">
          <div class="col-2"></div>
            <div class="col-8 text-center">
            <table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Current Balance</th>
			    </tr>
			  </thead>
        <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['nom']?></td>
            <td><?php echo $rows['email']; ?></td>
			      <td><?php echo $rows['current']; ?> <span>$</span></td>
            <td><a href="profile.php?id=<?=$rows['id']?>&nom=<?=$rows['nom']?>&email=<?=$rows['email']?>&current=<?=$rows['current']?>" 
			      	     class="btn view" >View Profile</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
             </table> 
            </div>
            <div class="col-2"></div>
        </div>
       

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
</body>
</html>