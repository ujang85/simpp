<?php
use yii\helpers\Url;
//use yii\helpers\Html;
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
        'attribute'=>'id_penilai',
        'value'=>'penilai.nama',
    ],

   [
        'class'=>'\kartik\grid\DataColumn',
      //  'attribute'=>'id_peg_dinilai',
       'attribute'=>'nama2',
        'value'=>'dinilai.nama2',
        'header'=>'Pegawai Yg Dinilai',
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
        'format'=>'decimal',
        'header'=>'Rata-rata Nilai',
        'value' => function($model){                        
        return ($model->nilai_disiplin + $model->nilai_dedikasi + $model->nilai_tanggungjawab)/3;                            
                                }
    ],   
    [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'usulan',
     ],
    
   [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'id_unitkerja',      
        'filterType' => GridView::FILTER_SELECT2,                
        'filter' => ArrayHelper::map(Unitkerja::find()->all(), 'id', 'nama_unit'),
        'filterInputOptions' => [ 'placeholder' => '*All*' ],
        'value'=>'divisi.nama_unit',
         'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
    ],
];   