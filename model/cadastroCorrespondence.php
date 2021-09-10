<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $company_name;
    private $ac;
    private $address;
    private $person;
    private $type;
    private $ar;
    private $send_date;
    private $code;

    //Metodos Set
    public function set_company_name($string){
        $this->company_name = $string;
    }
    public function set_ac($string){
        $this->ac = $string;
    }
    public function set_address($string){
        $this->address = $string;
    }
    public function set_person($string){
        $this->person = $string;
    }
    public function set_type($string){
        $this->type = $string;
    }
    public function set_ar($string){
        $this->ar = $string;
    }
    public function set_send_date($string){
        $this->send_date = $string;
    }
    public function set_code($string){
        $this->code = $string;
    }
    
    //Metodos Get
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



    public function incluir(){
        return $this->setCorrespondence(
            $this->get_company_name(),
            $this->get_ac(),
            $this->get_address(),
            $this->get_person(),
            $this->get_type(),
            $this->get_ar(),
            $this->get_send_date(),
            $this->get_code()
        );
    }
}
?>
