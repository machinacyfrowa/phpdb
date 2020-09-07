<?php
if(!isset($_REQUEST['id'])) die('Nie podano id');
$db = new mysqli('localhost','root','','ligakreglarskaprzyklad');

$id = $_REQUEST['id'];
$imie = $_REQUEST['imie'];
$nazwisko = $_REQUEST['nazwisko'];

$sql = "UPDATE `kreglarze` SET `ImieKreglarza` = '$imie', `NazwiskoKreglarza` = '$nazwisko' WHERE `IDKreglarza` = $id";
$db->query($sql);
echo 'Zapisano pomyślnie<br>';

?>
<a href="lista.php">Powrót</a>