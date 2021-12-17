<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenilaianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penilaian';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<?=
'Export Data',
Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid']).
ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => require(__DIR__.'/_columnsall.php'),
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
<div class="penilaian-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'columns' => require(__DIR__.'/_columnsall.php'),
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
                'heading' => '<i class="glyphicon glyphicon-list"></i> Penilaian',        
                        '<div class="clearfix"></div>',
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>
