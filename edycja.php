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

<form>
    Imię: <input type="text" name="imie" value="<?php echo $row['ImieKreglarza']; ?>"><br>
</form>