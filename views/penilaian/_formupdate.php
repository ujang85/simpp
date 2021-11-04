<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\NominatifPegawai;
/* @var $this yii\web\View */
/* @var $model app\models\Penilaian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penilaian-form">

    <?php $form = ActiveForm::begin(); ?>

   <?=  $form->field($model, 'id_penilai')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(NominatifPegawai::find()->all(),'id','nama'),
    'options' => ['placeholder' => 'Pilih Penilai ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);
    ?>
    <?=  $form->field($model, 'id_peg_dinilai')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(NominatifPegawai::find()->all(),'id','nama'),
    'options' => ['placeholder' => 'Pilih Pegawai Yg Dinilai ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);
    ?> 
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
