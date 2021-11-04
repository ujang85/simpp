<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penilaian */
?>
<div class="penilaian-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'penilai.nama',
            'dinilai.nama',
            'nilai_disiplin',
            'nilai_dedikasi',
            'nilai_tanggungjawab',
            'usulan',
            'tgl_input',
        ],
    ]) ?>

</div>
