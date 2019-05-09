<?php 
header( 'content-type: text/html; charset=utf-8' );

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date=$_POST['date_nais'];
$addmail=$_POST['addmail'];
$add=$_POST['add'];
$tel=$_POST['tel'];


$ph=$_FILES['photo']['name'];


        move_uploaded_file($_FILES['photo']['tmp_name'], basename($ph));
      
	?>


<!DOCTYPE html>
<html>
<head>
      <title>cv</title>
      <link rel="stylesheet" type="text/css" href="css/ccc.css">
      <link rel="stylesheet" href="fontawesome-free-5.4.2-web/css/all.css" >
      <meta charset="utf-8">

</head>
<body>
<header><img src=<?php echo $ph; ?> width="100px" height="150px"><h1><?php echo $nom."   ".$prenom ?></h1><br><small>Né le <?php echo $date ?></small></header>
<div id="apropos">
      <h2>A PROPOS DE MOI </h2>
      <SPAN><?php echo $_POST['apropos']?></SPAN>

</div>
<div id="contact">
<table cellpadding="5PX">
      <tr>
           <td colspan="2"><h4>contact</h4><hr width="300px" style="padding-left: 0px;"></td>
      </tr>
      
       <tr>
            <td class="gras">Adresse E-mail </td>
            <td><?php echo $addmail ?> </td>
      </tr>
       <tr>
            <td class="gras">Adresse </td>
            <td><?php echo $add ?> </td>
      </tr>
       <tr>
           <td class="gras">Téléphone </td>
            <td><?php echo $tel ?> </td>
      </tr>
      
</table>
</div>
<div class="vl" ></div>
<div id="formation">

<table cellpadding="5PX">
      <tr>
           <td colspan="2"><h4>Formation</h4><hr width="200px" style="padding-left: 0px;"></td>
      </tr>
      
       <tr>
           <td class="gras"><?php echo $_POST['ann1']?></td>
            <td><?php echo $_POST['et1']?></td>
      </tr>
       <tr>
            <td class="gras"><?php echo $_POST['ann2']?></td>
            <td><?php echo $_POST['et2']?></td>
      </tr>
       <tr>
            <td class="gras"><?php echo $_POST['ann3']?></td>
            <td><?php echo $_POST['et3']?></td>
      </tr>
      
</table>
</div>
<div id="experience">
<table cellpadding="5PX">
      <tr>
           <td colspan="2"><h4>Experience</h4><hr width="700px"></td>
      </tr>
      
       <tr>
            <td class="gras"><?php echo $_POST['aan1']?></td>
            <td><?php echo $_POST['en1']?></td>
      </tr>
       <tr>
            <td class="gras"><?php echo $_POST['aan2']?> </td>
            <td><?php echo $_POST['en2']?></td>
      </tr>
       <tr>
          <td class="gras"><?php echo $_POST['aan3']?></td>
            <td><?php echo $_POST['en3']?></td>
      </tr>
       
</table>
</div>

<div id="langue">
<table cellpadding="5PX">
      <tr>
           <td colspan="2"><h4>LANGUES</h4><hr width="700px"></td>
      </tr>
      
      
    <td class="gras"><?php echo $_POST['lg1']?></td>
            <td class="lg"><?php if ($_POST['c1']<10)
            {
              echo ' <input type="button" name="" disabled style="background:red" disabled>
            <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
           else  if ($_POST['c1']<25)
            {
              echo ' <input type="button" name="" disabled style="background:#B37D09" disabled>
            <input type="button" name="" disabled style="background:#B37D09">
            <input type="button" name="" disabled style="background:white">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
 else if ($_POST['c1']<50)
            {
              echo ' <input type="button" name="" disabled style="background:#B37D09" disabled>
            <input type="button" name="" disabled style="background:#B37D09">
            <input type="button" name="" disabled style="background:#B37D09">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
            else if ($_POST['c1']<80)
            {
              echo ' <input type="button" name="" disabled style="background:green" disabled>
            <input type="button" name="" disabled style="background:green">
            <input type="button" name="" disabled style="background:green">
      <input type="button" name="" disabled style="background:green">
            <input type="button" name="" disabled style="background:white">';
            } 
            else 
            {
              echo ' <input type="button" name="" disabled style="background:green" disabled>
            <input type="button" name="" disabled style="background:green">
            <input type="button" name="" disabled style="background:green">
      <input type="button" name="" disabled style="background:green">
            <input type="button" name="" disabled style="background:green">';
            } 



            ?></td>
      </tr>
     <td class="gras"><?php echo $_POST['lg2']?></td>
            <td class="lg"><?php if ($_POST['c2']<10)
            {
              echo ' <input type="button" name="" disabled style="background:red" disabled>
            <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
            if ($_POST['c2']<25)
            {
              echo ' <input type="button" name="" disabled style="background:#B37D09" disabled>
            <input type="button" name="" disabled style="background:#B37D09">
            <input type="button" name="" disabled style="background:white">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
 if ($_POST['c2']<50)
            {
              echo ' <input type="button" name="" disabled style="background:#B37D09" disabled>
            <input type="button" name="" disabled style="background:#B37D09">
            <input type="button" name="" disabled style="background:#B37D09">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
            else  if ($_POST['c2']<80)
            {
              echo ' <input type="button" name="" disabled style="background:green" disabled>
            <input type="button" name="" disabled style="background:green">
            <input type="button" name="" disabled style="background:green">
      <input type="button" name="" disabled style="background:green">
            <input type="button" name="" disabled style="background:white">';
            } 
            else 
            {
              echo ' <input type="button" name="" disabled style="background:green" disabled>
            <input type="button" name="" disabled style="background:green">
            <input type="button" name="" disabled style="background:green">
      <input type="button" name="" disabled style="background:green">
            <input type="button" name="" disabled style="background:green">';
            } 



            ?></td>
      </tr>
      <td class="gras"><?php echo $_POST['lg3']?></td>
            <td class="lg"><?php if ($_POST['c3']<10)
            {
              echo ' <input type="button" name="" disabled style="background:red" disabled>
            <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
           else if ($_POST['c3']<25)
            {
              echo ' <input type="button" name="" disabled style="background:#B37D09" disabled>
            <input type="button" name="" disabled style="background:#B37D09">
            <input type="button" name="" disabled style="background:white">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
else if ($_POST['c3']<50)
            {
              echo ' <input type="button" name="" disabled style="background:#B37D09" disabled>
            <input type="button" name="" disabled style="background:#B37D09">
            <input type="button" name="" disabled style="background:#B37D09">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
             else if ($_POST['c3']<80)
            {
              echo ' <input type="button" name="" disabled style="background:green" disabled>
            <input type="button" name="" disabled style="background:green">
            <input type="button" name="" disabled style="background:green">
      <input type="button" name="" disabled style="background:green">
            <input type="button" name="" disabled style="background:white">';
            } 
            else 
            {
              echo ' <input type="button" name="" disabled style="background:green" disabled>
            <input type="button" name="" disabled style="background:green">
            <input type="button" name="" disabled style="background:green">
      <input type="button" name="" disabled style="background:green">
            <input type="button" name="" disabled style="background:green">';
            } 



            ?></td>
      </tr>
</table>
</div>
<div id="competence">
<table cellpadding="5PX">
      <tr>
           <td colspan="2"><h4>Competence</h4><hr width="320px"></td>
      </tr>
      
       <tr>
            <td><?php foreach ($_POST['cp'] as $chekbox ) {
                  echo $chekbox." " ;

            }
            echo $_POST['autre'] ?></td>
      
      </tr>
       
</table>
</div>
<div class="vl" style="height: 70px;"></div>
<div id="centre">
<table cellpadding="5PX">
      <tr>
           <td colspan="2"><h4>centre d'intéret et loisirs</h4><hr width="250px"></td>
      </tr>
      
       <tr>
            <td><?php echo $_POST['centre']?></td>
           
      </tr>
      
</table>
</div>

<footer><span id="cp">CV crée par Mahdi Saghroun<span> 
      <p id="ad"><i class="fas fa-map-marker-alt" id="ia"></i>Adresse: Kairouan Tunisie</p>
      <p id="tel"> <i class="fas fa-mobile-alt" id="tt"></i> Tel: 26 594 568</p>
      <p id="e">  <i class="fas fa-at" id="mm"></i>Email: mahdisaghroun6@gmail.com</p><br>
<a href="http://www.facebook.com/saghrounmahdi/"target="_blank"><img src="icone/fb.png" class="fb" title="Facebook"></a>
      <a href="http://www.Instagram.com/"target="_blank"><img src="icone/ins.png" class="fb" title="Instagram"></a>
      <a href="https://www.youtube.com/channel/UCF4XnIpv9NGFW_z4FkMk3dg?view_as=subscriber/"target="_blank"><img src="icone/yt.png" class="fb" title="YouTube"></a>
      <a href="https://plus.google.com/u/0/106545568188487249845?tab=wX/"target="_blank"><img src="icone/g+.png" class="fb" title="Google Plus"></a>

</footer>

</body>
</html>