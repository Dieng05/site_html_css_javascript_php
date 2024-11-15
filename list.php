<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/res.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>NFS</title>
    <link rel="stylesheet" href="css/list.css"> 
</head>
<body>

    <div class="header">
        <div class="top-head">
            <div class="logo"> <a href="index.php"><img src="image/Logo1.gif" alt=""></a></div>
           <div class="panier">
            <div class="pa1"><a href="#"> Mon espace </a><i class="fa-solid fa-user"></i></div>
             <div class="pa2"><a href="#"> Panier </a><i class='fas fa-cart-plus'></i></div>
           </div> 
        </div>
        
        <div class="navebar" id="Topnav">

        <?php  $idA=1; 
               $idB=2;
               $idC=3;
               $idD=4;
               ?>
            
            <a href="list.php?idCategorie=<?php echo $idA; ?>">ABAYA</a>
            <a href="list.php?idCategorie=<?php echo $idB; ?>">sacoche</a>
            <a href="list.php?idCategorie=<?php echo $idC; ?>">chaussure</a>
            <a href="list.php?idCategorie=<?php echo $idD; ?>">voile</a>
            <div class="dropdown">
              <button class="dropbtn">Marques 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="list.php">local</a>
                <a href="list.php">turquie</a>
                <a href="list.php">dubai</a>
                <a href="list.php">chine</a>
              </div>
            </div> 
            <a href="list.html">Contact</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon"  onclick="myFunction()"><i class="fa fa-align-justify" ></i></a>
            <a href="#" class="icon"> <i class="fa-solid fa-user" ></i></a>
            <a href="#" class="icon"> <i class='fas fa-cart-plus' ></i></a>
          </div>
    </div>

    <div class="content">
    <div class="cont1">
    <?php   
         include("connexion.php");
         $con=OuvrirBD();
         $id= $_GET['idCategorie'];
         
         $requete="select idProduit,nomProduit,prix,imageProduit from produits where idCategorie='$id'";


                $resultat = $con->query($requete);
                
                if(!$resultat){

                    echo("impossible d'executer la requete");
                    exit;
                }
                else{
                  //afficher les taris dans un tableau
                      while($ligne = $resultat->fetch()){
                          $idp=$ligne['idProduit'];
                          $nom=$ligne['nomProduit'];
                          $prix=$ligne['prix'];
                          $im=explode(" ",$ligne['imageProduit']);?>
           <div class="card">
            <div class="texte">
                <i class='fas fa-cart-plus' ></i>
                <p ><?php echo $nom;?></p>
                <span><?php echo $prix;?> CFA</span> <br> <br>
            </div>
            <div class="image">
              <a href="detail.php?idProduit=<?php echo $idp;?>"><img src="image/<?php echo $im[0]; ?>" alt=""></a>
            </div>
        </div>
        <?php
            }
      }?>
      </div>
    </div>
      
   
<div class="footer">
    <div class="foot-top">
      <div class="footer-box ">
          <h3>Contact</h3> 
          <span> <i class='fas fa-burn'></i>UGB Saint-Louis MIAGE</span> <br>
          <span > <i class='fas fa-phone-alt'></i>+221 33 846 36 48</span> <br> 
          <span ><i class="fa fa-envelope"></i>miage@shop.com</span>
          
      </div>
      <div class="footer-box">
          <h3>Liens</h3>
          <li><a href="#">Services</a></li> 
          <li><a href="#">Liens légaux</a></li> 
      </div>        
      <div class="footer_box log"> <br>
          <p class="logofooter"> <span>NF</span>store</p>
          <p>Pour voir nos articles vous pouvez aussi <br>  nous retrouver sur ces sites</p>
        <br>  <div class="social">
              <a href="#"> <i class='fab fa-facebook'></i></a>
              <a href="#"> <i class='fab fa-twitter'></i></a>
              <a href="#"> <i class='fab fa-instagram'></i></a>
            </div>
      </div>
   </div>
      <h2>Copyrigth 2022 Master 1 MIAGE</h2> 
     
  
  </div>
</body>
</html>