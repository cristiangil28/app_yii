<?php 

namespace app\models;

use yii;

use yii\base\model;

class ValidarFormulario extends model{
    public $nombre;
    public $email;

    public function rules(){
        return [
            ["email","validarNombre"],
          
            ["email","required","message"=>"campo requerido"],
            ["email","match",'pattern'=>"/^.{5,80}$/","message"=>"minimo 3 maximo 80 caracteres"],
            ["email","email","message"=>"formato no valido"],
            
        ];
    }
    public function validarNombre($attribute,$params){
        if (empty($this->attributes['nombre'])) {
            $this->addError($attribute,'el nombre es muy corto');
        }
        $this->attributes['nombre'];
    }
    public function attributeLabels(){
        return [
            "nombre"=>"Nombre: ",
            "email"=>"Email:"
        ];
    }
}