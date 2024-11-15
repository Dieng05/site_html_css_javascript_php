<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/res.css">
    <link rel="stylesheet" href="css/detail.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFS</title>
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
                <a href="#">local</a>
                <a href="#">turquie</a>
                <a href="#">dubai</a>
                <a href="#">chine</a>
              </div>
            </div> 
            <a href="list.html">Contact</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon"  onclick="myFunction()"><i class="fa fa-align-justify" ></i></a>
            <a href="#" class="icon"> <i class="fa-solid fa-user" ></i></a>
            <a href="#" class="icon"> <i class='fas fa-cart-plus' ></i></a>
          </div>
        </div>
    <main>
        
        <?php include("connexion.php");
                $con=OuvrirBD();
                
                $id= $_GET['idProduit'];
                
                
                
                $requete="select nomProduit,descriptionProduit,prix,imageProduit from produits where idProduit='$id'";
                
                
                $resultat = $con->query($requete);
                
                if(!$resultat){
                    
                    echo("impossible d'executer la requete");
                    exit;
                }
                else{
                    while($ligne = $resultat->fetch()){
                        $nom=$ligne['nomProduit']; 
                        $descrip=$ligne['descriptionProduit'];
                        $prix_im=$ligne['prix'];
                        $im=explode(" ",$ligne['imageProduit']);?>

<?php
                        }
                    }?>
    <div class="sidebar" id="side">
        
        <div class="valeur">
            
            <div class="nom">
                <p id="idnom"><?php echo($nom);?></p>
            </div>
            
            
            <div class="prix">
                
                <p> <span id="idprix"><?php echo($prix_im);?></span>FCFA</p>
            </div>
            
        </div>
        
        <div class="description">
            <p id="idescription">
                <?php echo($descrip);?>              
            </p>
        </div>
        
        <div class="env">
            <a href="formulaire.php"><button type="submit" class="btn_detail">AJOUTER</button></a>
        </div>
        
    </div>
    <div class="contente" id="cont">
        
        <div class="img_art">

            <img id="image_g" src="image/<?php echo($im[0]);?>">
            
        </div>
        
        <div class="div_img">
            
             
               <div class="imdiv">
                    <img  id="im1" src="image/<?php echo($im[0]);?>">
                </div>
                
                <div class="imdiv">
                    <img  id="im2" src="image/<?php echo($im[1]);?>">
                </div>
                
                <div class="imdiv">
                    <img id="im3" src="image/<?php echo($im[2]);?>">
                </div>
                
                <div class="imdiv">
                    <img  id="im4" src="image/<?php echo($im[3]);?>">
                </div>
                
                <div class="imdiv">
                    <img  id="im5"  src="image/<?php echo($im[4]);?>">
                </div>
                
                <div class="imdiv">
                    <img  id="im6"  src="image/<?php echo($im[5]);?>">
                </div>
                
                
            </div>
            
        </div>
    </main>
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
    <script type="text/javascript" src="js/detail.js"></script>
    
</body>
</html>