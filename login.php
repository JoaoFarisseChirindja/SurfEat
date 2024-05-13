<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">

	  <style type="text/css">
	  #buttn{
		  color:#fff;
		  background-color: #5c4ac7;
	  }
	  </style>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  
</head>

<body>
<header id="header" class="header-scroll top-header headrom">
<nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
                    data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="index.php"> <h1 class="brand"><i class="fa fa-utensils me-3"></i> SurfEat</h1>  </a>
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php"> Home<span
                                    class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Sucursal <span
                                    class="sr-only"></span></a> </li>


                        <?php
                        if (empty($_SESSION["user_id"])) // if user is not login
                        {
                            echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="btn btn-primary" style="background-color: #FEA116;
                              border-color: #FEA116;">Registrar</a> </li>';
                        } else {


                            echo '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Meus pedidos</a> </li>';
                            echo '<li class="nav-item"><a href="logout.php" class="nav-link active">Sair</a> </li>';
                        }

                        ?>

                    </ul>

                </div>
            </div>
        </nav>

        </header>
<div style=" background-image: url('images/img/pimg.jpg');">

<?php
include("connection/connect.php"); 
error_reporting(0); 
session_start(); 
if(isset($_POST['submit']))  
{
	$username = $_POST['username'];  
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecionando
	$result=mysqli_query($db, $loginquery); //executando
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row)) 
								{
                                    	$_SESSION["user_id"] = $row['u_id']; 
										 header("refresh:1;url=index.php"); 
	                            } 
							else
							    {
                                      	$message = "CodeNome invalido ou palavra-passe!"; 
                                }
	 }
	
	
}
?>
  

<div class="pen-title">
  <
</div>

<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form">
    <h2>Login na sua conta!</h2>
	  <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" placeholder="Digite o seu CodeNome"  name="username"/>
      <input type="password" placeholder="Digite a sua senha" name="password"/>
      <input type="submit" id="buttn" name="submit" value="Login" />
      <?php
                            if(isset($message)){
                                foreach($message as $message){
                                    echo '
                                        <p style="text-align:center;"> <span style="color:red;">'.$message.'</span></p>
                                    ';
                                }
                            }
                        ?>
    </form>
  </div>
  
  <div class="cta">Não esta registrado?<a href="registration.php" style="color:#5c4ac7;"> Crie uma conta!</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   
  <div class="container-fluid pt-3">
	<p></p>
  </div>


   
        <footer class="footer">
            <div class="container">

             
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5>Opções de pagamento</h5>
                            <ul>
                                <li>
                                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5>Endereço</h5>
                                    <p>1086 AV. 24 de Julho, Maputo</p>
                                    <h5>Telefone: +258 85 017 3428 </a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5>Informações adicionais</h5>
                                   <p>Junte-se a milhares de outros restaurantes que se beneficiam da parceria conosco.</p>
                                </div>
                    </div>
                </div>
          
            </div>
        </footer>
       


</body>

</html>