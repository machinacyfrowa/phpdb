<?php
if(!isset($_REQUEST['imie'])) die('Nie podano danych');
$db = new mysqli('localhost','root','','ligakreglarskaprzyklad');

$imie = $_REQUEST['imie'];
$nazwisko = $_REQUEST['nazwisko'];

$sql = "INSERT INTO `kreglarze` (NazwiskoKreglarza, ImieKreglarza) VALUES ('$nazwisko', '$imie')";
//$sql = "INSERT INTO kreglarze (NazwiskoKreglarza, ImieKreglarza) VALUES (\'Kowalski\', \'Janusz\')";
echo $sql;
$result = $db->query($sql);
if($result) {
    echo "Rekord o id: $db->insert_id dodano prawidłowo";
} else {
    echo "Rekord nie został dodany. ".$db->error;
}

?>
<a href="lista.php">Powrót</a>