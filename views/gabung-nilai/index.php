<?php
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NominatifPegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nilai SIMPEL dan Presensi';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<?=
'Export Data',
Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid']).
ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => require(__DIR__.'/_columns.php'),
    'contentBefore' => [
            [
            'value' => $this->title,
            ]
            ],
    'filename' => $this->title,
    'exportConfig' => [
                ExportMenu::FORMAT_HTML => false,
                ExportMenu::FORMAT_PDF => false,
                ExportMenu::FORMAT_EXCEL => false,
                ExportMenu::FORMAT_TEXT => false,
                ExportMenu::FORMAT_CSV =>false,
                ExportMenu::FORMAT_EXCEL_X  => [
                 'label' => 'File Excel',
            ],
             ],
])
?>
<div class="nominatif-pegawai-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columns.php'),
            'toolbar'=> [
           /*      ['content'=>
                    '{toggleData}'.
                    '{export}'
                ], */
            ],            
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => 'primary', 
                'heading' => '<i class="glyphicon glyphicon-list"></i> Nilai SIMPEL dan Presensi',
                     
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
