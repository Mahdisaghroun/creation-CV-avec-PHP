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
      <link rel="shortcut icon" href="icone/cv.png" type="image/x-icon"/>
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
           <td colspan="2"><h4>contact</h4><hr  width="300px" style="padding-left: 0px;"></td>
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

<div id="formation">

<table cellpadding="5PX">
      <tr>
           <td colspan="2"><h4>Formation</h4><hr width="300px" style="padding-left: 0px;"></td>
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
      <tr>
            <td class="gras"><?php echo $_POST['ann4']?></td>
            <td><?php echo $_POST['et3']?></td>
      </tr>
      <tr>
            <td class="gras"><?php echo $_POST['ann5']?></td>
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
      <tr>
          <td class="gras"><?php echo $_POST['aan4']?></td>
            <td><?php echo $_POST['en4']?></td>
      </tr>
      <tr>
          <td class="gras"><?php echo $_POST['aan5']?></td>
            <td><?php echo $_POST['en5']?></td>
      </tr>
       
</table>
</div>

<div id="langue">
<table cellpadding="5PX">
      <tr>
           <td colspan="2"><h4>LANGUES</h4><hr width="700px"></td>
      </tr>
      
      
    <td class="gras"><?php 



    echo $_POST['lg1']?></td>
            <td class="lg"><?php 

             if (!empty($_POST['lg1'])){
             if ($_POST['c1']<10 )
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
            } }



            ?></td>
      </tr>
     <td class="gras"><?php echo $_POST['lg2']?></td>
            <td class="lg"><?php 
                  if (!empty($_POST['lg2'])){
            if ($_POST['c2']<10)
            {
               
              
              echo ' <input type="button" name="" disabled style="background:red" disabled>
            <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">
      <input type="button" name="" disabled style="background:white">

            <input type="button" name="" disabled style="background:white">';
            } 
           else if ($_POST['c2']<25)
            {
              echo ' <input type="button" name="" disabled style="background:#B37D09" disabled>
            <input type="button" name="" disabled style="background:#B37D09">
            <input type="button" name="" disabled style="background:white">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
else if ($_POST['c2']<50)
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
}


            ?></td>
      </tr>
      <td class="gras"><?php echo $_POST['lg3']?></td>
            <td class="lg"><?php 

              if (!empty($_POST['lg3'])){
            if ($_POST['c3']<10)
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
            } }



            ?></td>
      </tr>


      <td class="gras"><?php echo $_POST['lg4']?></td>
            <td class="lg"><?php 
                  if (!empty($_POST['lg4'])){
            if ($_POST['c4']<10)
            {
               
              
              echo ' <input type="button" name="" disabled style="background:red" disabled>
            <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">
      <input type="button" name="" disabled style="background:white">

            <input type="button" name="" disabled style="background:white">';
            } 
           else if ($_POST['c4']<25)
            {
              echo ' <input type="button" name="" disabled style="background:#B37D09" disabled>
            <input type="button" name="" disabled style="background:#B37D09">
            <input type="button" name="" disabled style="background:white">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
else if ($_POST['c4']<50)
            {
              echo ' <input type="button" name="" disabled style="background:#B37D09" disabled>
            <input type="button" name="" disabled style="background:#B37D09">
            <input type="button" name="" disabled style="background:#B37D09">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
            else  if ($_POST['c4']<80)
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
}


            ?></td>
      </tr>

      <td class="gras"><?php echo $_POST['lg5']?></td>
            <td class="lg"><?php 
                  if (!empty($_POST['lg5'])){
            if ($_POST['c5']<10)
            {
               
              
              echo ' <input type="button" name="" disabled style="background:red" disabled>
            <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">
      <input type="button" name="" disabled style="background:white">

            <input type="button" name="" disabled style="background:white">';
            } 
           else if ($_POST['c5']<25)
            {
              echo ' <input type="button" name="" disabled style="background:#B37D09" disabled>
            <input type="button" name="" disabled style="background:#B37D09">
            <input type="button" name="" disabled style="background:white">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
else if ($_POST['c5']<50)
            {
              echo ' <input type="button" name="" disabled style="background:#B37D09" disabled>
            <input type="button" name="" disabled style="background:#B37D09">
            <input type="button" name="" disabled style="background:#B37D09">
      <input type="button" name="" disabled style="background:white">
            <input type="button" name="" disabled style="background:white">';
            } 
            else  if ($_POST['c5']<80)
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
            <td><?php 
             if (isset($_POST['cp']))
              {

            foreach ($_POST['cp'] as $chekbox ) {
                  echo $chekbox." " ;

            }
          }
            echo $_POST['autre'] ?></td>
      
      </tr>
       
</table>
</div>

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



</body>
</html>