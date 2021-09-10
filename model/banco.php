<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setCorrespondence($company_name, $ac, $address, $person, $type, $ar, $send_date, $code)
    {
        $created_date = date("Y-m-d");
        $update_date = date("Y-m-d");
        $user = 1;

        $stmt = $this->mysqli->prepare("INSERT INTO tbl_correspondence 
        (`company_name`, `ac`, `address`, `person`, `type`, `ar`, `send_date`, `code`, `user`, `created_date`, `update_date`) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param('ssssssssiss', $company_name, $ac, $address, $person, $type, $ar, $send_date, $code, $user, $created_date, $update_date);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getCorrespondence(){
        $array = [];

        $result = $this->mysqli->query("SELECT * FROM tbl_correspondence");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteCorrespondence($id){
        if($this->mysqli->query("DELETE FROM `tbl_correspondence` WHERE `id_correspondence` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaCorrespondence($id){
        $result = $this->mysqli->query("SELECT * FROM tbl_correspondence WHERE id_correspondence='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateCorrespondence($company_name,$ac,$address,$person,$type,$ar,$send_date,$code,$id){
        $update_date = date("Y-m-d");

        $stmt = $this->mysqli->prepare("UPDATE `tbl_correspondence`
         SET `company_name` = ?,
          `ac`=?,
           `address`=?,
            `person`=?,
             `type`=?,
             `ar` = ?,
             `send_date` = ?,
              `code` = ?,
               `update_date` = ? WHERE `id_correspondence` = ?");
        $stmt->bind_param("sssssssssi",$company_name,$ac,$address,$person,$type,$ar,$send_date,$code,$update_date,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
