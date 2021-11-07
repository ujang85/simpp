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
        'value'=>'penilai.nip',
        'header'=>'NIP Penilai',
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
        'format'=>'raw',
        'header'=>'EDIT',
        'value' => function($data){                        
        return                        
        Html::a('<span class="fa  fa-edit"></span> Update', ['updatesetting','id'=>$data->id], ['title' => 'Edit','role'=>'modal-remote','class'=>'btn btn-success']).' '.                            
        Html::a('<span class="fa  fa-eraser"></span> Hapus', ['delete','id'=>$data->id], ['title' => 'Hapus','role'=>'modal-remote','data-request-method'=>'post','data-confirm-title'=>'Are you sure?','data-confirm-message'=>'Are you sure want to delete this item','class'=>'btn btn-info']);                            
                                }
    ],   

];   