<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\Unitkerja;
use app\models\NominatifPegawai;
use kartik\grid\GridView;
return [
   [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
        'header' => 'No.',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nip_penilai',
        'value'=>'penilai.nip',
        'header'=>'NIP Penilai',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'id_penilai',      
        'value'=>'penilai.nama',
         'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
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
        'attribute'=>'id_unitkerja',      
        'filterType' => GridView::FILTER_SELECT2,                
        'filter' => ArrayHelper::map(Unitkerja::find()->all(), 'id', 'nama_unit'),
        'filterInputOptions' => [ 'placeholder' => '*All*' ],
        'value'=>'divisi.nama_unit',
         'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
    ],
   [
        'format'=>'raw',
        'header'=>'EDIT',
        'value' => function($data){                        
        return                        
        Html::a('<span class="fa  fa-edit"></span> Update', ['updatesetting','id'=>$data->id], ['title' => 'Edit','role'=>'modal-remote','class'=>'btn btn-success']).' '.                            
        Html::a('<span class="fa  fa-eraser"></span> Hapus', ['delete','id'=>$data->id], ['title' => 'Hapus','role'=>'modal-remote','data-request-method'=>'post','data-confirm-title'=>'Are you sure?','data-confirm-message'=>'Are you sure want to delete this item','class'=>'btn btn-info']);                            
                                }
    ],   

];   