<?php
class Kreglarz
{
    private $id;
    private $imie;
    private $nazwisko;

    public function __construct($_row)
    {
        $this->id = $_row['IDKreglarza'];
        $this->imie = $_row['ImieKreglarza'];
        $this->nazwisko = $_row['NazwiskoKreglarza'];
    }
    public function tableRow() : string
    {
        return "<tr><td>".$this->id."</td>"."<td>".$this->imie."</td>"."<td>".$this->nazwisko."</td></tr>";
    }
    public function listItem() : string
    {
        return "<li>".$this->imie." ".$this->nazwisko."</li>";
    }
}


?>