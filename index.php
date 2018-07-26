<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>exercice3</title>
  </head>
  <body>
    <p>
      <?php
 $age = 22;
 $gender = 'women';

 if($age >= 18 && $gender == 'men')
 {
   echo 'vous êtes majeur et vous êtes un homme';
 }
 elseif($age <= 18 && $gender == 'men')
 {
   echo 'vous êtes mineur et vous êtes un homme';
 }
 elseif($age >= 18 && $gender == 'women')
 {
   echo 'vous êtes majeur et vous êtes une femme';
 }
 elseif($age <= 18 && $gender == 'women')
 {
   echo 'vous êtes mineur et vous êtes une femme';
 }
 ?>
</p>
</body>
