<?php
$db = new mysqli('localhost','root','','ligakreglarskaprzyklad');
$sql = "SELECT IDKreglarza, ImieKreglarza, NazwiskoKreglarza FROM `kreglarze`";
$result = $db->query($sql);

echo '<table>';
while($row = $result->fetch_assoc()) {
    echo '<tr>';
        echo '<td>'.$row['IDKreglarza'].'</td>';
        echo '<td>'.$row['ImieKreglarza'].'</td>';
        echo '<td>'.$row['NazwiskoKreglarza'].'</td>';
        echo '<td><a href="edycja.php?id='.$row['IDKreglarza'].'">Edytuj</a></td>';
    echo '</tr>';
}
echo '</table>';
?>