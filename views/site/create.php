<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Crear Usuario</h1>
<h3><?php echo $msg; ?></h3>
<?php 


$form = ActiveForm::begin([
    "method"=>"post",
    "id"=>"formulario",
    "enableClientValidation"=> true,
    "enableAjaxValidation"=>false
]);
?>
<div class="form-group">
    <?= $form->field($model,"nombre")->input("text") ?>
</div>
<div class="form-group">
    <?= $form->field($model,"apellidos")->input("text") ?>
</div>
<div class="form-group">
    <?= $form->field($model,"cedula")->input("text") ?>
</div>

<?php echo Html::submitButton("Enviar",["class"=> "btn btn-primry"]); ?>
<?php $form->end() ?>