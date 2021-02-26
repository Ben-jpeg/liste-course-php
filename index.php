
<html lang="fr">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>


  <body style=background:url(cat.jpg);width:50%; height:auto>

      <form  method="POST" >
  

          <label for="listeObjets" style=color:yellow;font-size:35px;font-family:Sans-Serif>Ajouter quelque chose à la liste ?</label>
          <input type="text" id=listeObjets name="listeObjets">
          <button>AJOUTER</button> <button name='supp' id="supp" >SUPPRIMER LISTE</button>
      </form>


  </body>

</html>


<?php
require 'list.php';

if(isset($_POST['supp'])){
  fopen('listText.txt',"w+");
  }
?>



