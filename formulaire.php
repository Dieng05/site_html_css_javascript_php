<?php
    include("connexion.php");
    $con=OuvrirBD();
    $regexpassword="/[0-9]/";
    $regexmail="/.+@.+\..+/";
     
     
    if (isset($_POST['clic'])) {
        if (empty($_POST['sante'])) 
        {
            $erreurnom = "Le nom est obligatoire";
        } 
        else if (empty($_POST['tour'])) 
        {
            $erreurprenom=" Le prenom est obligatoire";
        } 
        elseif (empty($_POST['pass'])) 
        {
            $erreurpass=" Le mot de passe est obligatoire";
        }
        else if (!preg_match($regexpassword, $_POST['pass'])) 
        {
            $erreurpass=" Le mot de passe n est pas valide";
        } 
        else if (empty($_POST['confirpass'])) 
        {
            $erreurconfpass="La confirmation de mot de passe est obligatoire";
        }
        else if (strcmp($_POST['pass'], $_POST['confirpass']) != 0)
        {
            $erreurconfpass="Les deux mot de passe ne sont pas conformes";
        } 
        else if (empty($_POST['mail'])) 
        {
            $erreurmail=" L'email est obligatoire";
        }
        else if (!preg_match($regexmail, $_POST['mail'])) 
        {
            $erreurmail="L'email est incorrect";
        }
        else if (empty($_POST['confemail']))
        {
            $erreurconfmail="La confirmation email est obligatoire";
        } 
        else if (strcmp($_POST['mail'], $_POST['confemail']) != 0) 
        {
            $erreurconfmail="Les deux mails ne sont pas conformes";
        } 
        else if (empty($_POST['civilite'])) 
        {
            $erreurcivilte=" Veuillez selectionner un titre";
        }
    
        else{

        
        $new_mail=$_POST['mail'];
        $new_confmail=$_POST['confemail'];
        $new_pass=$_POST['pass'];
        $new_confpass=$_POST['confirpass'];
        $new_sutuation=$_POST['civilite'];
        $new_nom=$_POST['sante'];
        $new_prenom=$_POST['tour'];
        $new_date=$_POST['djoudou'];
        //echo($new_nom);
        

        $requete2="INSERT INTO utilisateur values ('' ,'$new_mail','$new_pass','$new_nom','$new_prenom','$new_date')";

        $resultat_update=$con->query($requete2);



        if($resultat_update){

           
            exit;

        }

    }
}
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/res.css">
    <title>Document</title>
    <link rel="stylesheet" href="css/essai.css"> 
   
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

    <section>
    <form id="inscription" method="POST" action="">

   <div class="part1">
    <p class="titrediv">Vos identifiant</p>
         
    <div class="interne">
       
        <div class="in">
        <label>Email<span>*</span>:</label>
        <input type="email" id="adresse" name="mail" placeholder="email">
        <p id="erreurmail" class="bon"><?php if (isset($erreurmail)) {echo $erreurmail; }?></p><br>
        </div>

        <div class="in">
            <label>Confirmation email<span>*</span>:</label>
            <input type="email" id="confadresse" name="confemail" placeholder="confiradresse">
            <p id="erreurconfmail"><?php if (isset($erreurconfmail)) {echo $erreurconfmail; }?></p><br>
        </div>
        
        <div class="in">
        <label>Mot de pass<span>*</span>:</label>
        <input type="password" id="pass" name="pass"  placeholder="mot de passe">
        <p id="erreurpassword"><?php if (isset($erreurpass)) {echo $erreurpass; }?></p><br>
        </div>
        
        <div class="in">
        <label>confirmation mot de pass<span>*</span>:</label>
        <input type="password" id="confpass" name="confirpass" placeholder="confirmation mot de pass">
        <p id="erreurconfpassword"><?php if (isset($erreurconfpass)) {echo $erreurconfpass; }?></p><br>
        </div>

       </div>
    </div>
    <div class="part2">
        <p class="titrediv">Votre identite</p>

        <div class="interne">

        <div class="in">
        <label id="civil">civilite<span>*</span>:</label>
        <select name="civilite" id="celi" value="civilite">
            <option  value="">civilite</option>
            <option  value="homme">Monsieur</option>
            <option  value="femme">Madame</option>
        </select><p id="erreurcivil"><?php if (isset($erreurcivilte)) {echo $erreurcivilte; }?></p><br>
        </div>

        <div class="in">
        <label>nom<span>*</span>:</label>
        <input type="text" name="sante" id="nom" placeholder="votre nom">
        <p id="erreurnom"><?php if (isset($erreurnom)) {echo $erreurnom; }?></p><br>
        </div>

        <div class="in">
        <label>prenom<span>*</span>:</label>
        <input type="text" name="tour" id="prenom" placeholder="votre prenom">
        <p id="erreurprenom"><?php if (isset($erreurprenom)) {echo $erreurprenom; }?></p><br>
        </div>
        
        <div class="in">
        <label id="daten">Date de naissance<span>*</span>:</label>
        <input type="date" name="djoudou" id="datenaiss" placeholder="Date de naissance">
        <p id="erreurdate"></p><br>
        </div>

        </div>

    </div>  

        <input type="submit" id="btn" name="clic"value="VALIDER">
    </form>


   </section>
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
    <script src="js/essai.js"></script>
</body>
</html>