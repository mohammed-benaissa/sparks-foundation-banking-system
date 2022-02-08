<?php include "db/show_transactions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
     crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>Transactions</title>
    <style>
       *{
        font-family: cursive;
      }
      th{
        color: #5957f9 !important;
      }
      h2{
        margin-top: 20%;
        margin-bottom: 80px;
        color: #5957f9;
      }
      .btn{
        color: #5957f9;
        margin-top: 10%;
      }
      .btn:hover{
        border-color: #5957f9;
        color: #5957f9;
      }
    </style>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
          <div class="col-2 text-center"><a class="btn  "  href="index.php" role="button">Home Page</a></div>
          <div class="col-5"></div>
          <div class="col-5"></div>
        </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 text-center"><h2>Transactions Table</h2></div>
        <div class="col-4"></div>

      </div>
        <div class="row">
          <div class="col-2"></div>
            <div class="col-8 text-center">
            <table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Sender</th>
			      <th scope="col">Receiver</th>
			      <th scope="col">Value</th>
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
			      <td><?=$rows['sender']?></td>
            <td><?php echo $rows['receiver']; ?></td>
			      <td><?php echo $rows['value']; ?> <span>$</span></td>
            
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