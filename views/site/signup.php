<?php

/** @var app\models\SignupForm $model */

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;


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