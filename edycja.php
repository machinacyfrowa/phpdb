<?php
if(!isset($_REQUEST['id'])) die('Nie podano id');
$db = new mysqli('localhost','root','','ligakreglarskaprzyklad');
$sql = "SELECT * FROM `kreglarze` WHERE IDKreglarza=".$_REQUEST['id'];
//echo $sql;

$result = $db->query($sql);
$row = $result->fetch_assoc();
//echo '<pre>';
//var_dump($row);

?>

<form action="zapis.php" method="POST">
    ID: <input type="text" name="id" value="<?php echo $row['IDKreglarza']; ?>" readonly><br>
    Imię: <input type="text" name="imie" value="<?php echo $row['ImieKreglarza']; ?>"><br>
    Nazwisko: <input type="text" name="nazwisko" value="<?php echo $row['NazwiskoKreglarza']; ?>"><br>
    <input type="submit" value="Zapisz">
</form>