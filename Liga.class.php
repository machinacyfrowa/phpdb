<?php
require 'Kreglarz.class.php';
class Liga
{
    private $kreglarze; //lista kreglarzy

    public function __construct() 
    {
        
        $this->getPlayers();
    }
    public function getPlayers()
    {
        $this->kreglarze = Array();
        global $db;
        $q = "SELECT * FROM `kreglarze`";
        $result = $db->query($q);
        while ($row = $result->fetch_assoc())
        {
            $kreglarz = new Kreglarz($row);
            array_push($this->kreglarze, $kreglarz);
        }
    }
    public function playersTable() 
    {
        $buffer = "";
        $buffer .= "<table border=1>";
        foreach ($this->kreglarze as $kreglarz) {
            $buffer .= $kreglarz->tableRow();
        }
        $buffer .= "</table>";
        return $buffer;
    }
    public function playersList() 
    {
        $buffer = "";
        $buffer .= "<ul>";
        foreach ($this->kreglarze as $kreglarz) {
            $buffer .= $kreglarz->listItem();
        }
        $buffer .= "</ul>";
        return $buffer;
    }
}

?>