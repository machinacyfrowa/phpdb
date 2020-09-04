<?php
$db = mysqli_connect('localhost','root','','ligakreglarskaprzyklad');
//lub obiektowo
//$db = new mysqli('localhost','root','','ligakreglarskaprzyklad') 

$sql = "SELECT IDKreglarza, ImieKreglarza, NazwiskoKreglarza FROM `kreglarze`";
$result = mysqli_query($db, $sql);
//lub obiektowo
//$result = $db->query($sql);

//debug
//echo '<pre>';
//print_r($result);
//print_r(mysqli_fetch_all($result));

//dopóki jesteś w stanie wyciągnąć wiersz i zapisac do $row
echo '<table border="1">';
while( $row = mysqli_fetch_assoc($result) ) {
    //echo $row['IDKreglarza']." ".$row['ImieKreglarza']." ".$row['NazwiskoKreglarza'].'<br>';

    //echo '<tr>';
    //    echo '<td>'.$row['IDKreglarza'].'</td>';
    //    echo '<td>'.$row['ImieKreglarza'].'</td>';
    //    echo '<td>'.$row['NazwiskoKreglarza'].'</td>';
    //echo '</tr>';

    $id = $row['IDKreglarza'];
    $imie = $row['ImieKreglarza'];
    $nazwisko = $row['NazwiskoKreglarza'];
    echo '<tr>';
        echo "<td>$id</td>";
        echo "<td>$imie</td>";
        echo "<td>$nazwisko</td>";
    echo '</tr>';
}
echo '</table>';
?>