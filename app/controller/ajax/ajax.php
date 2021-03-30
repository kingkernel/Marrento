<?php
class ajax
{
    public function __construct()
    {

    }
    public function cidades()
    {
        $part = explode("/", $_GET["url"]);
        $estado = $part[2];
        $sql = 'select * from cidades where sigla="'.$estado.'"';
        $query = queryDb($sql);
        $cidades = '';
        while ($dados =$query->fetch(PDO::FETCH_ASSOC))
        {
            $cidades .= '<option values="'.$dados["id"].'">'.$dados["cidade"]."</option>";
        }
        print_r($cidades);
    }
}
?>