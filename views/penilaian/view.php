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
            [
                'attribute' => 'penilai.nama',
                'label' => 'Nama Penilai',
                ],
            [
            'attribute' => 'dinilai.nama',
            'label' => 'Nama Pegawai',
            ],
            'nilai_disiplin',
            'nilai_dedikasi',
            'nilai_tanggungjawab',
            'usulan',
            'tgl_input',
        ],
    ]) ?>

</div>
