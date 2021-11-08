<?php
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NominatifPegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nominatif Pegawais';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<br>
    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus">  Tambah Data</i>', ['create'],
                    ['role'=>'modal-remote','title'=> 'Tambah Data','class'=>'btn btn-default']) ?>
    </p>
</br>
<div class="nominatif-pegawai-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),
            'toolbar'=> [
               ['content'=>
                    '{toggleData}'.
                    '{export}'
                ],
            ],          
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => 'primary', 
                'heading' => '<i class="glyphicon glyphicon-list"></i> Nominatif Pegawai',
                     
                        '<div class="clearfix"></div>',
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
//    "size"=>"modal-lg",
    "footer"=>"",// always need it for jquery plugin
    "options" => [
        "tabindex" => true, // important for Select2 to work properly
    ], 
])?>
<?php Modal::end(); ?>
