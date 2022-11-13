<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
?>
 <?php $form = ActiveForm::begin() ?>
<?= $form->field($model,'username')?>
<?= $form->field($model,'password')?>


<div class="form-group">
            <div >
                <?= Html::submitButton('Регистраия', ['class' => 'btn btn-success']) ?>
            </div>
        </div>


<?php ActiveForm::end() ?>