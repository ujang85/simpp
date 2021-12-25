<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PresensiTotal */
?>
<div class="presensi-total-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_pegawai',
            'tl',
            'psw',
            'tk',
        ],
    ]) ?>

</div>
