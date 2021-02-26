
<?php 

$objListe = $_POST['listeObjets'];            //J'applique la méthode POST pour récupérer ce qui est écrit dans l'input
$file = fopen("listText.txt", "r+" );         //J'ouvre le ficher avec fopen() de maniere a pouvoir le lire et écrire dessus (r+)
// $content = fgets($file);
readfile("listText.txt");                     // ca affiche le fichier (ici: listText;txt)
file_put_contents('listText.txt',"<p style='color:purple;font-family:Sans-Serif;font-size:22px'>$objListe \n</p>", FILE_APPEND);    //permets d'ajouter du contenu dans le fichier souhaité
// print($content);
fclose($file);                                  





        