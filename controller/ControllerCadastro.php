<?php
require_once("../model/cadastroCorrespondence.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->set_company_name($_POST['company_name']);
        $this->cadastro->set_ac($_POST['ac']);
        $this->cadastro->set_address($_POST['address']);
        $this->cadastro->set_person($_POST['person']);
        // $this->cadastro->setData(date('Y-m-d',strtotime($_POST['type'])));
        $this->cadastro->set_type($_POST['type']);
        $this->cadastro->set_ar($_POST['ar']);
        $this->cadastro->set_send_date(date('Y-m-d',strtotime($_POST['send_date'])));
        $this->cadastro->set_code($_POST['code']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();
