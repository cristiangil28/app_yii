<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Validar Formulario Ajax</h1>
<h3><?php  echo $msg; ?></h3>
<?php 


$form = ActiveForm::begin([
    "method"=>"post",
    "id"=>"formulario",
    "enableClientValidation"=> true,
    "enableAjaxValidation"=>true
]);
?>
<div class="form-group">
    <?= $form->field($model,"nombre")->input("text") ?>
</div>
<div class="form-group">
    <?= $form->field($model,"email")->input("email") ?>
</div>

<?php echo Html::submitButton("Enviar",["class"=> "btn btn-primry"]); ?>
<?php $form->end() ?>