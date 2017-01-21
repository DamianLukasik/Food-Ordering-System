<?php 
// zmienna potrzebna do prawidlowego wczytania includowanych plikow 
$add_site = true;
/* 
plik z funkcjami z porady 
http://www.kess.com.pl/index.php?sid=10&pid=54
*/
include "include/function.php";
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html> 
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-2" /> 
<meta http-equiv="Reply-to" content="kess@snug.pl" /> 
<meta name="Author" content="Krzysztof Szypulski" /> 
<head> 
  <title><?php echo Title($_GET['go']); ?></title>
  <style type="text/css"> 
    <!-- 
     
    body { 
    font-family: Verdana, Arial; 
    font-size: 12px; 
    } 
     
    --> 
  </style> 
</head> 
<body> 
  <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
  <tr> 
    <td width="100%" colspan="3"><?php include "include/naglowek.php"; ?></td> 
  </tr> 
  <tr> 
    <td width="15%" valign="top"><?php include "include/menu_lewe.php"; ?></td> 
    <td width="70%" valign="top"> 
    <?php 
      // zmienna $go przekazana metoda GET 
      $go = $_GET['go']; 
       
      // sprawdzamy czy zmienna $go nie jest pusta 
      if(!empty($go)) { 
          // sprawdzamy czy plik o danej nazwie istnieje 
          if(is_file("page/$go.html")) include "page/$go.html"; 
          // jezeli plik nie istnieje wyswietla się komunikat 
          else echo "<br />Nie ma takiej strony :-("; 
      } 
      // jezeli zmienna $go jest pusta wyswietla się strona glowna 
      else include "page/start.html"; 
       
    ?> 
    </td> 
    <td width="15%" valign="top"><?php include "include/menu_prawe.php"; ?></td> 
  </tr> 
  <tr> 
    <td width="100%" colspan="3"><?php include "include/stopka.php"; ?></td> 
  </tr> 
  </table> 
</body> 
</html>