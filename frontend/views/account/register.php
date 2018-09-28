<?php
/* @var $this yii\web\View
 * @var $model
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>account/register</h1>

<?php $form = ActiveForm::begin([
        'id' => 'reg-form',
])?>
    <?= $form->field($model, 'email')?>
    <?= $form->field($model, 'password')->passwordInput()?>
    <?= Html::submitButton('Send')?>
<?php ActiveForm::end()?>


