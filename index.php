<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
     crossorigin="anonymous">     
    <title>Sparks Banking System</title>
    <style>
        html, body {
    height: 100%;
}
.conteneur{
    height: 100% ;

}
.ligne{
    height: 100% ;
}

.ligne1{
    height: 50% ;
}
.title{
    height: 50%;
    
}
a,h1{
    font-family: cursive;
    color: white;
}
        .btn{
            background-color: #5957f9;
            color: white;
            border-color: white;
        }
        .btn:hover{
           background-color: white;
           color: #5957f9;
        }
        .colorfull{
    background-color: #5957f9;
}
.pic{
    margin-top: 40%;
}

@keyframes transitionIn{
    from{
        opacity: 0;
        transform: rotateX(-10deg);

    }
    to{
        opacity: 1;
        transform: rotateX(0);

    }
}
body{
    animation: transitionIn 0.55s;
}
    </style>
</head>
<body>
    <div class="container-fluid conteneur">
        
        <div class="row ligne">
            <div class="col-6 colorfull">
                <div class="row title ">
                    <div class="col-2"></div>
                    <div class="col-8 text-center align-self-center"><h1>Basic Banking System</h1></div>
                    <div class="col-2"></div>
                    </div>
                <div class="row ligne1">
                    
                    <div class="col-6 text-center "><a class="btn  "  href="customers.php" role="button">View Customers</a></div>
                    <div class="col-6 text-center "><a class="btn " href="transactions.php" role="button">View Transactions</a></div>
                </div>
            </div>
            <div class="col-6 ">
                
                <div class="row pic">
                    <div class="col-4"></div>
                    <div class="col-4"><img src="pic/sparks.jpg" alt="The Sparks Foundation"></div>
                    <div class="col-4"></div>
                </div>
                 
            </div>
            
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
     crossorigin="anonymous"></script>
</body>
</html>