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
    /*     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'id',
     ], */
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nama',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'unit_kerja',
        'value'=>'unit.nama_unit',
    ],
  /*   
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'unit_kerja',
       // 'value'=>'unit.nama_unit',
    ], */
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
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'unit_kerja',      
        'filterType' => GridView::FILTER_SELECT2,                
        'filter' => ArrayHelper::map(Unitkerja::find()->all(), 'id', 'nama_unit'),
        'filterInputOptions' => [ 'placeholder' => '*All*' ],
        'value'=>'unit.nama_unit',
         'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
    ],
   
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