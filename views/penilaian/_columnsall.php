<?php
use yii\helpers\Url;
use yii\helpers\Html;
return [
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
        'header' => 'No.',
    ],

    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'id_penilai',
        'value'=>'penilai.nama',
    ],

    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'id_peg_dinilai',
        'value'=>'dinilai.nama',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nilai_disiplin',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nilai_dedikasi',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nilai_tanggungjawab',
    ],
     
     [
        'format'=>'raw',
        'header'=>'subtotal',
        'value' => function($model){                        
        return  $model->nilai_disiplin + $model->nilai_dedikasi + $model->nilai_tanggungjawab;                            
                                }
    ],   
    [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'usulan',
     ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'id_penilai',
        'value'=>'divisi.nama_unit',
        'header' => 'Unit Kerja',
    ],

];   