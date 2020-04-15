<?php
session_start();
?>
<?php
$x = 75;
$y = 25;
 
function addition() {
    $temp = 100;
    $GLOBALS['temp2']=100;
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'] + $temp;
}
 
addition();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Zmienne PHP</title>
</head>
<body>
    <div class="middle">
        <br>
        <center><h1>Prezentacja działania zmiennych PHP</h1></center>
    <h3 class='explanation'>PHP $_SERVER to tablica zawierająca informacje takie jak nagłówki, ścieżki i lokalizacje skryptów. Wpisy w tablicy są tworzone przez serwer WWW</h3><BR>
    <h3>Wyświetlanie:</h3>

<table>
  <tr>
    <th><input type="button" class='myButton' id="btAlert" value="PHP_SELF"
onclick="window.alert('<?php echo $_SERVER['PHP_SELF']; ?>');"/></th>
<th><input type="button" class='myButton' id="btAlert" value="HTTP_HOST"
onclick="window.alert('<?php echo $_SERVER['HTTP_HOST']; ?>');"/></th>
<th><input type="button" class='myButton' id="btAlert" value="HTTP_USER_AGENT"
onclick="window.alert('<?php echo $_SERVER['HTTP_USER_AGENT']; ?>');"/></th>
  </tr>
</table> 

<h3 class='explanation child'>PHP $GLOBALS to tablica przetrzymująca globalne zmienne i pozwalająca na dostęp do nich w każdym miejscu skryptu PHP</h3><BR>
    <h3>Wyświetlanie:</h3>
    <table>
  <tr>
  <div class='code'>
  <?php show_source('show.php'); ?>
  </div>
  <table>
<th><input type="button" class='myButton' id="btAlert" value="ECHO $Z"
onclick="window.alert('<?php echo $z; ?>');"/></th>
<th><input type="button" class='myButton' id="btAlert" value="ECHO $TEMP"
onclick="window.alert('<?php echo $temp; ?>');"/></th>
<th><input type="button" class='myButton' id="btAlert" value="ECHO $TEMP2"
onclick="window.alert('<?php echo $temp2; ?>');"/></th>
  </tr>
</table> 
<h3 class='explanation child'>PHP $_POST jest to zmienna wykorzystywana do zbierania danych z formularzy metodą 'POST' lub do przesyłania zmiennych</h3><BR>
    <h3>Wyświetlanie:</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

  Name: <input type="text" name="fname">
  <input type="submit" value='SEND NAME'/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    if (empty($name)) {
        $print='Nie podano imienia';
    } else {
        $print=$name;
    }
}
?>
 <table>
<th><input type="button" class='myButton' id="btAlert" value="ECHO $NAME"
onclick="window.alert('<?php echo $print; ?>');"/></th>
  </tr>
</table> 
<h3 class='explanation child'>PHP $_GET jest to zmienna wykorzystywana do zbierania danych z formularzy metodą 'GET' lub do zbierania danych z URL</h3><BR>
    <h3>Wyświetlanie:</h3>

<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit"  value='SEND'/>
      </form>
   </body>
</html>
<?php
   if( $_GET["name"] || $_GET["age"] ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
      
      exit();
   }
?>
<h3 class='explanation child'>PHP $_SESSION jest to zmienna przetrzymująca informacje takie jak ulubione jedzenie,imię,nick użytkownika poprzez różne podstrony. Domyślnie przetrzymywana jest do zamknięcia przeglądarki</h3><BR>
    <h3>Wyświetlanie:</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 Nick: <input type="text" name="fname2">
  <input type="submit" value='SEND NICK'/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['fname2'];
    if (empty($input)) {
        $$nick2='Nie podano nick';
    } else {
        $nick2=$input;
    }
}
$_SESSION['nick'] = $nick2;
?>

<th><input type="button" class='myButton' id="btAlert" value="ECHO $NICK"
onclick="window.alert('<?php echo 'Your nick is ' . $_SESSION['nick']; ?>');"/></th>
<a href="test.php"><button class='myButton'>Change site</button></a></th>  
</tr>
</table> 


    </div>
    <div class='extend'>
</div>
</body>
</html>