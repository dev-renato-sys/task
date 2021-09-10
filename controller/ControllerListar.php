<?php
require_once("../model/banco.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getCorrespondence();
        foreach ($row as $value){
            // echo "<thead class='thead-light'>";
            echo "<tr>";
            echo "<th>".$value['company_name'] ."</th>";
            echo "<td>".$value['ac'] ."</td>";
            echo "<td>".$value['address'] ."</td>";
            echo "<td>".$value['person'] ."</td>";
            echo "<td>".$value['type'] ."</td>";
            echo "<td>".$value['ar'] ."</td>";
            echo "<td>".$value['send_date'] ."</td>";
            echo "<td>".$value['code'] ."</td>";
            // echo "<td>".$value['flag'] = ($value['flag'] == "0") ? "Desativado":"Ativado" ."</td>";
            echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['id_correspondence']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['id_correspondence']."'>Excluir</a></td>";
            echo "</tr>";
            // echo "</thead>";
        }
    }
}

