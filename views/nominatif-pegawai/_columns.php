<?php
use yii\helpers\Url;
use yii\helpers\Html;

return [
   [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
        'header' => 'No.',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nama',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'unit_kerja',
        'value'=>'unit.nama_unit',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'status',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nip',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'jenis',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'pangkat',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'golongan',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'jabatan',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'pendidikan',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'alamat',
    // ],
    [
        'format'=>'raw',
        'header'=>'EDIT',
        'value' => function($data){                        
        return                        
        Html::a('<span class="fa  fa-edit"></span> Update', ['updatesetting','id'=>$data->id], ['title' => 'Edit','role'=>'modal-remote','class'=>'btn btn-success']).' '.                            
        Html::a('<span class="fa  fa-eraser"></span> View', ['view','id'=>$data->id], ['title' => 'View','role'=>'modal-remote','class'=>'btn btn-info']);                            
                                }
    ],   

];   