<?php
session_start();
?>
<html>
<body>

<?php
echo "Your nick is " . $_SESSION["nick"] . ".<br>";
?>
<?php
print_r($_SESSION);
?>
</body>
</html>