<?php 

namespace app\model;

use yii;

use yii\base\models;

class ValidarFormulario extends models{
    public $nombre;
    public $email;

    public function rules(){
        return [
            ["nombre","required","message"=>"campo requerido"],
            ["nombre","match",'pattern'=>"/^.{3,50}$/","message"=>"minimo 3 maximo 50 caracteres"],
            ["nombre","match",'pattern'=>"/^[0-9a-z]$/i","message"=>"solo se aceptan letras y números"],
            ["email","required","message"=>"campo requerido"],
            ["email","match",'pattern'=>"/^.{5,80}$/","message"=>"solo se aceptan letras y números"],
            ["email","email","message"=>"formato no valido"]

        ];
    }

    public function attributeLabels(){
        return [
            "nombre"=>"Nombre: ",
            "email"=>"Email:"
        ];
    }
}