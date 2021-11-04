<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\Unitkerja;
use app\models\NominatifPegawai;
/* @var $this yii\web\View */
/* @var $model app\models\NominatifPegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nominatif-pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?=  $form->field($model, 'unit_kerja')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(UnitKerja::find()->all(),'id','nama_unit'),
    'options' => ['placeholder' => 'Pilih Unit Kerja ...'],
    'pluginOptions' => [
        'allowClear' => true
   ],
    ]);
    ?>
    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'jenis')->dropDownList([ 'L' => 'LAKI-LAKI', 'P' => 'PEREMPUAN',]) ?>
    <?= $form->field($model, 'pangkat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'golongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?=  $form->field($model, 'pendidikan')->widget(Select2::classname(), [
    'data' =>ArrayHelper::map(NominatifPegawai::find()->all(),'pendidikan','pendidikan'),
    'options' => ['placeholder' => 'Pilih Pendidikan...'],
    'pluginOptions' => [
        'allowClear' => true
    ],]); ?>
    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
