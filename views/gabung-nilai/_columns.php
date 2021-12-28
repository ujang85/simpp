<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\Unitkerja;
use kartik\grid\GridView;

return [
   [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
        'header' => 'No.',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nama_unit',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nip_penilai',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'penilai',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'jabatan',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'pegawai_dinilai',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'header'=>'Status Pegawai',
        'value'=>'pegawai.status',
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
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'subtotal',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'format'=>'decimal',
        'value' =>'rerata',
        'attribute'=>'rerata',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'tl',
    ],

    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'psw',
    ],
    
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'tk',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'akumulasi1',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'akumulasi2',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'usulan',
    ],

];   