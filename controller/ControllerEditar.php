<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $id_correspondence;
    private $company_name;
    private $ac;
    private $address;
    private $person;
    private $type;
    private $ar;
    private $send_date;
    private $code;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaCorrespondence($id);
        $this->id_correspondence = $row['id_correspondence'];
        $this->company_name         =$row['company_name'];
        $this->ac        =$row['ac'];
        $this->address   =$row['address'];
        $this->person        =$row['person'];
        $this->type         =$row['type'];
        $this->ar         =$row['ar'];
        $this->send_date         =$row['send_date'];
        $this->code         =$row['code'];

    }
    public function editarFormulario($company_name,$ac,$address,$person,$type,$ar,$send_date,$code,$id){
        
        if($this->editar->updateCorrespondence($company_name,$ac,$address,$person,$type,$ar,date('Y-m-d',strtotime($send_date)),$code,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function get_company_name(){
        return $this->company_name;
    }
    public function get_ac(){
        return $this->ac;
    }
    public function get_address(){
        return $this->address;
    }
    public function get_person(){
        return $this->person;
    }
    public function get_type(){
        return $this->type;
    }
    public function get_ar(){
        return $this->ar;
    }
    public function get_send_date(){
        return $this->send_date;
    }
    public function get_code(){
        return $this->code;
    }
    public function get_id(){
        return $this->id_correspondence;
    }


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['company_name'],
    $_POST['ac'],
    $_POST['address'],
    $_POST['person'],
    $_POST['type'],
    $_POST['ar'],
    $_POST['send_date'],
    $_POST['code'],
    $_POST['id']);
}
?>
