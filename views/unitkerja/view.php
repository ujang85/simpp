<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Unitkerja */
?>
<div class="unitkerja-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_unit',
        ],
    ]) ?>

</div>
