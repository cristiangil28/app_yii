<?php 

namespace app\models;

use yii;

use yii\base\model;

class FormUsers extends model{
    public $nombre;
    public $apellidos;
    public $cedula;

    public function rules(){
        return [
            ["nombre","required","message"=>"campo requerido"],
            ["nombre","match",'pattern'=>"/^.{3,50}$/","message"=>"minimo 3 maximo 50 caracteres"],
            ["apellidos","required","message"=>"campo requerido"],
            ["apellidos","match",'pattern'=>"/^.{3,50}$/","message"=>"minimo 3 maximo 50 caracteres"],
            ["cedula","required","message"=>"campo requerido"],  
        ];
    }

    public function attributeLabels(){
        return [
            "nombre"=>"Nombre: ",
            "apellidos"=>"Apellidos:",
            "cedula"=>"Cédula:",
        ];
    }

}