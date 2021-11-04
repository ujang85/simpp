<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penilaian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penilaian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nilai_disiplin')->textInput() ?>

    <?= $form->field($model, 'nilai_dedikasi')->textInput() ?>

    <?= $form->field($model, 'nilai_tanggungjawab')->textInput() ?>

    <?= $form->field($model, 'usulan')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
