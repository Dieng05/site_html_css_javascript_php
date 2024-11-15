<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/res.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>NFS</title>
    <script src="js/res.js"></script>
    
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
            <a href="#" class="icone"> <i class="fa-solid fa-user" ></i></a>
            <a href="#" class="icone"> <i class='fas fa-cart-plus' ></i></a>
          </div>
          <div class="slider">
            
            <a href="detail.php?idProduit=18"><img src="image/chb2.jpg" alt="" class="img_slider active"></a>
            <a href="detail.?idProduit=34"><img src="image/s12.jpg" alt=""  class="img_slider"></a>
            <a href="detail.php?idProduit=45"> <img src="image/c11.jpg" alt=""  class="img_slider"></a>
            <div class="suivant">
                <i class="fa-solid fa-circle-chevron-right"></i></div>
            <div class="precedent">
                <i class="fa-solid fa-circle-chevron-left"></i></div>
         </div>
    </div>
    <div class="slideshow">
        <div class="pub1">
            <a href="list.php?idCategorie=2"><img src="image/PUB1.jpg" alt=""></a>
        </div>
        <div class="pub2">
           <a href="list.php?idCategorie=3"> <img src="image/PUB2.jpg" alt=""></a>
        </div>
    </div>
    <div class="content">
        <div class="produit">
           <h2>NOUVEAUX PRODUITS</h2> 
        </div>
        <div class="cont1">
        <?php   
         include("connexion.php");
         $con=OuvrirBD();
         $requete="select nomProduit,prix,imageProduit  from produits where idProduit=1";
         $requete1="select nomProduit,prix,imageProduit  from produits where idProduit=26";
         $requete2="select nomProduit,prix,imageProduit  from produits where idProduit=45";
         $requete3="select nomProduit,prix,imageProduit  from produits where idProduit=30";
         $resultat = $con->query($requete);
         $resultat1 = $con->query($requete1);
         $resultat2 = $con->query($requete2);
         $resultat3 = $con->query($requete3);
         if(!$resultat&&!$resultat1){
            echo("impossible d'executer la requete");
            exit;
        }
        else{
                    
                        $ligne=$resultat->fetch();
                        $ligne1=$resultat1->fetch();
                        $ligne2=$resultat2->fetch();
                        $ligne3=$resultat3->fetch();


                        $nom=$ligne['nomProduit']; 
                        $prix_im=$ligne['prix'];
                        $im=explode(" ",$ligne['imageProduit']);

                        $nom1=$ligne1['nomProduit']; 
                        $prix_im1=$ligne1['prix'];
                        $im1=explode(" ",$ligne1['imageProduit']);

                        $nom2=$ligne2['nomProduit']; 
                        $prix_im2=$ligne2['prix'];
                        $im2=explode(" ",$ligne2['imageProduit']);

                        $nom3=$ligne3['nomProduit']; 
                        $prix_im3=$ligne3['prix'];
                        $im3=explode(" ",$ligne3['imageProduit']);

                         
                        
                }
                ?> 
            <div class="card">
                <div class="texte">
                    <i class='fas fa-cart-plus' ></i>
                    <p > <?php echo $nom;?></p>
                    <span><?php echo $prix_im;?> CFA </span>
                </div>
                <div class="image"> <img src="image/<?php echo $im[0]; ?>" alt=""></div>
            </div>

            <div class="card card1">
                <div class="texte">
                    <i class='fas fa-cart-plus' id="panier"></i>
                    <p ><?php echo $nom ; ?></p>
                    <span><?php echo $prix_im ; ?> CFA</span> 
                 </div>
                <div class="image"> <img src="image/<?php echo $im[1];?>" alt=""></div>
            </div>

            <div class="card  card2">
                <div class="texte">
                    <i class='fas fa-cart-plus'></i>
                    <p ><?php echo $nom ; ?></p>
                    <span ><?php echo $prix_im ; ?>CFA</span> 
                </div>
                <div class="image"> <img src="image/<?php echo $im[2] ; ?>" alt=""></div>
            </div>

            <div class="card ">
                <div class="texte">
                    <i class='fas fa-cart-plus' ></i>
                    <p ><?php echo $nom1 ; ?></p>
                    <span><?php echo $prix_im1 ; ?> CFA</span> 
                </div>
                <div class="image"> <img src="image/<?php echo $im1[0] ; ?>" alt=""></div>
            </div>
        <!--/div>
        <div class="cont1"-->
            
            <div class="card">
                <div class="texte">
                    <i class='fas fa-cart-plus' ></i>
                    <p ><?php echo $nom1 ; ?></p>
                    <span><?php echo $prix_im1 ; ?> CFA</span> 
                </div>
                <div class="image"> <img src="image/<?php echo $im1[1] ; ?>" alt=""></div>
               
            </div>

            <div class="card card1">
                <div class="texte">
                    <i class='fas fa-cart-plus'></i>
                    <p ><?php echo $nom1 ; ?></p>
                    <span><?php echo $prix_im1 ; ?></span>  
                 </div>
                <div class="image"> <img src="image/<?php echo $im1[2] ; ?>" alt=""></div>
            </div>

            <div class="card  card2">
                <div class="texte">
                    <i class='fas fa-cart-plus'></i>
                    <p ><?php echo $nom2 ; ?></p>
                    <span><?php echo $prix_im2 ; ?> CFA</span> 
                </div>
                <div class="image"> <img src="image/<?php echo $im2[0] ; ?>" alt=""></div>
            </div>

            <div class="card ">
                <div class="texte">
                    <i class='fas fa-cart-plus' ></i>
                    <p ><?php echo $nom2 ; ?></p>
                    <span><?php echo $prix_im2 ; ?> CFA</span> 
                </div>
                <div class="image"> <img src="image/<?php echo $im2[1] ; ?>" alt=""></div>
            </div>
             
        <!--/div> 
        <div class="cont1"-->
            
            <div class="card">
                <div class="texte">
                    <i class='fas fa-cart-plus' ></i>
                    <p > <?php echo $nom2 ; ?></p>
                    <span><?php echo $prix_im2 ; ?> CFA</span> <br> <br>
                    <img src="image/new.png" alt="" class="new">
                </div>
                <div class="image"> <img src="image/<?php echo $im2[2] ; ?>" alt=""></div>
               
            </div>

            <div class="card card1">
                <div class="texte">
                    <i class='fas fa-cart-plus'></i>
                    <p > <?php echo $nom3 ; ?></p>
                    <span><?php echo $prix_im3 ; ?> CFA</span>   
                 </div>
                <div class="image"> <img src="image/<?php echo $im3[0] ; ?>" alt=""></div>
            </div>
            <div class="card  card2">
                <div class="texte">
                    <i class='fas fa-cart-plus'></i>
                    <p > <?php echo $nom3 ; ?></p>
                    <span><?php echo $prix_im3 ; ?> CFA</span> 
                </div>
                <div class="image"> <img src="image/<?php echo $im3[1] ; ?>" alt=""></div>
            </div>
            <div class="card ">
                <div class="texte">
                    <i class='fas fa-cart-plus' ></i>
                    <p ><?php echo $nom3 ; ?></p>
                    <span><?php echo $prix_im3 ; ?> CFA</span> 
                </div>
                <div class="image"> <img src="image/<?php echo $im3[4] ; ?>" alt=""></div>
            </div>
             
        <!--/div--> 
      
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
    <script src="js/slide.js"></script>
</body>
</html>