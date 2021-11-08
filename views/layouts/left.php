<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel user2-160x160.jpg-->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>
                    <?php 
                    if (Yii::$app->user->isGuest) {
                      echo "tamu";
                    } 
                    else {
                    echo Yii::$app->user->identity->username;
                }
                    ?>
                </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

       

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Logout', 'url' => ['site/logout'],'template' => '<a href="{url}" data-method="post"><i class="fa fa-sign-out"></i>{label}</a>'],
                    

                    [
                        'label' => 'Administrator',
                        'icon' => 'dashboard',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Data User', 'icon' => 'user', 'url' =>'#'],
                             ['label' => 'Setting Hak Akses User', 'icon' => 'key', 'url' => ['/mimin/user/index']],
                             ['label' => 'Ubah Password User', 'icon' => 'key', 'url' => ['/mimin/user/ubahpassword']],
                             ['label' => 'Buat Akun User', 'icon' => 'certificate', 'url' => ['/site/signup']],
                        ],],
                    ['label' => 'DATA PEGAWAI','icon' => 'user-plus', 'url' =>['/nominatif-pegawai/index']],
                    ['label' => 'SETTING PENILAIAN','icon' => 'user-plus', 'url' =>['/penilaian/indexsetting']],
                   
                    ['label' => 'PENILAIAN PEGAWAI','icon' => 'user-plus', 'url' =>['/penilaian/index']],
                    ['label' => 'CETAK ALL PENILAIAN','icon' => 'file-excel-o', 'url' =>['/penilaian/index-all']],
                        
                    
                    ],
                        
            ]
        ) 
        ?>

    </section>

</aside>
