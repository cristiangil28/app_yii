<?php 

namespace app\models;

use yii;

use yii\base\model;

class ValidarFormulario extends model{
    public $nombre;
    public $email;

    public function rules(){
        return [
            ["nombre","required","message"=>"campo requerido"],
            ["nombre","match",'pattern'=>"/^.{3,50}$/","message"=>"minimo 3 maximo 50 caracteres"],
            ["email","required","message"=>"campo requerido"],
            ["email","match",'pattern'=>"/^.{5,80}$/","message"=>"minimo 3 maximo 80 caracteres"],
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