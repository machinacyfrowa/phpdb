<?php
if(!isset($_REQUEST['id'])) die('Nie podano id');
$db = new mysqli('localhost','root','','ligakreglarskaprzyklad');

$id = $_REQUEST['id'];
$sql = "DELETE FROM `kreglarze` WHERE IDKreglarza = $id";

$result = $db->query($sql);
if($result) {
    echo "Rekord o id: $id usunięto prawidłowo";
} else {
    echo "Rekord o id: $id nie został usunięty. ".$db->error;
}

?>
<a href="lista.php">Powrót</a>