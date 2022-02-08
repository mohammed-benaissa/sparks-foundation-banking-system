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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <title>Profile</title>
    <style>
         *{
        font-family: cursive;
      }
        body {
    background-color: #eee
}

.card {
    background-color: #fff;
    width: 280px;
    border-radius: 33px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    padding: 2rem !important
}

.top-container {
    display: flex;
    align-items: center
}

.profile-image {
    border-radius: 10px;
    border: 2px solid #5957f9
}

.name {
    font-size: 15px;
    font-weight: bold;
    color: #272727;
    position: relative;
    top: 8px
}

.mail {
    font-size: 14px;
    color: grey;
    position: relative;
    top: 2px
}

.middle-container {
    background-color: #eee;
    border-radius: 12px
}

.middle-container:hover {
    border: 1px solid #5957f9
}

.dollar-div {
    background-color: #5957f9;
    padding: 12px;
    border-radius: 10px
}

.round-div {
    border-radius: 50%;
    width: 35px;
    height: 35px;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center
}

.dollar {
    font-size: 16px !important;
    color: #5957f9 !important;
    font-weight: bold !important
}

.current-balance {
    font-size: 15px;
    color: #272727;
    font-weight: bold
}

.amount {
    color: #5957f9;
    font-size: 16px;
    font-weight: bold
}

.dollar-sign {
    font-size: 16px;
    color: #272727;
    font-weight: bold
}

.recent-border {
    border-left: 2px solid #5957f9;
    display: flex;
    align-items: center
}

.recent-border:hover {
    border-bottom: 1px solid #dee2e6 !important
}

.recent-orders {
    font-size: 16px;
    font-weight: 700;
    color: #5957f9;
    margin-left: 2px
}

.wishlist {
    font-size: 16px;
    font-weight: 700;
    color: #272727
}

.wishlist-border:hover {
    border-bottom: 1px solid #dee2e6 !important
}

.fashion-studio {
    font-size: 16px;
    font-weight: 700;
    color: #272727
}

.fashion-studio-border:hover {
    border-bottom: 1px solid #dee2e6 !important
}
.cor{
    margin-left: 15px;
}
.light{
    background-color: #5957f9 !important;
    color: #eee;
    
    margin-left: 28px;
}
.light:hover{
    background-color: #eee !important;
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
          <div class="col-2 text-center"><a class="btn  btnh"  href="index.php" role="button">Home Page</a></div>
          <div class="col-8"></div>
          <div class="col-2"><a class="btn  btnh"  href="customers.php" role="button">Customers Page</a></div>
        </div>
<div class="container d-flex justify-content-center mt-5">
    
  <div class="row">
    <div class="card">
        <div class="top-container"> <img src="pic/Placeholder.jpg" class="img-fluid profile-image" width="70">
            <div class="ml-3 cor">
                <h5 class="name"><?php echo $_GET['nom']?></h5>
                <p class="mail"><?php echo $_GET['email']?></p>
            </div>
        </div>
        <div class="middle-container d-flex justify-content-between align-items-center mt-3 p-2">
            <div class="dollar-div px-3">
                <div class="round-div"><i class="fa fa-dollar dollar"></i></div>
            </div>
            <div class="d-flex flex-column text-right mr-2"> <span class="current-balance">Current Balance</span> <span class="amount"><span class="dollar-sign">$</span><?php echo $_GET['current']?></span> </div>
        </div>
        <div class="recent-border mt-4"> <span class="recent-orders">Send Money to : </span> </div>
        <div class="wishlist-border pt-2">
            <form action="db/transaction.php" method="post">
            <select class="form-select" aria-label="Default select example" name="receiver">
                   <?php 
			  	        $i = 0;
			  	        while(($rows = mysqli_fetch_assoc($result))){
                            if($rows['nom']!=$_GET['nom']){
			  	        $i++;
                        ?>
                        <option value="<?php echo $rows['nom'];?>"><?php echo $rows['nom'];?></option>
			  	        <?php }} ?>
            </select>
            <div><label for="customRange2" class="form-label">Example range</label>
                <input type="range" class="form-range" min="0" max="<?php echo $_GET['current'];?>" id="customRange2" onchange="updateTextInput(this.value);" > 
                <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="textInput" name="transValue">
                <span class="input-group-text">.00</span>

                </div>
            </div>
            <input type="hidden" name="senderId" value="<?php echo $_GET['id']?>">
            <input type="hidden" name="senderName" value="<?php echo $_GET['nom']?>">
            <input type="hidden" name="senderCurrent" value="<?php echo $_GET['current']?>">
            <input type="submit" value="Submit Transaction" class="btn light">

            </form>
        </div>
    </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
<script>
    function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }
</script>   
</body>
</html>