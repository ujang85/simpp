<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\NominatifPegawai */
?>
<div class="nominatif-pegawai-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'unit_kerja',
            'status',
            'nip',
            'jenis',
            'pangkat',
            'golongan',
            'jabatan',
            'pendidikan',
            'alamat',
        ],
    ]) ?>

</div>
