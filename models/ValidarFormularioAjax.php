<?php 

namespace app\models;

use yii;

use yii\base\model;

class ValidarFormularioAjax extends model{
    public $nombre;
    public $email;


    public function rules(){
        return [
            ["nombre","required","message"=>"campo requerido"],
            ["nombre","match",'pattern'=>"/^.{3,50}$/","message"=>"minimo 3 maximo 50 caracteres"],
            ["email","required","message"=>"campo requerido"],
            ["email","match",'pattern'=>"/^.{5,80}$/","message"=>"minimo 3 maximo 80 caracteres"],
            ["email","email","message"=>"formato no valido"],   
            ["email","email_exist"]
        ];
    }

    public function attributeLabels(){
        return [
            "nombre"=>"Nombre: ",
            "email"=>"Email:"
        ];
    }

    public function email_exist($attribute, $params){
        $email = ["cristian@gmail.com", "david@gmail.com"];
        foreach ($email as $value) {
            if ($this->email == $value) {
                $this->addError($attribute,"el email seleccionado ya existe");
                return true;
            }else{
                return false;
            }
        }
    }
}