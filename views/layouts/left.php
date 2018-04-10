<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://intranet.pkpu.or.id/dev/photo/<?=Yii::$app->user->id?>.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo !Yii::$app->user->isGuest ? Yii::$app->user->identity->user_name : 'Guest' ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= \app\components\widgets\AppMenu::widget(
        // <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Intranet Home', 'icon' => 'fa fa-home', 'url' => 'http://intranet.c27g.com'],
                    ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 'url' => '#', 'items' => [
                        ['label' => 'Nasional', 'icon' => 'fa fa-dashboard', 'url' => ['/dashboard'],],
                        ['label' => 'Lokal', 'icon' => 'fa fa-dashboard', 'url' => ['/dashboard/current-branch'],],
                    ],],
                    ['label' => 'Form Pengajuan Layanan', 'icon' => 'fa fa-clipboard', 'url' => '#', 'visible' => Yii::$app->user->can('PDG Team'), 'items' => [
                        ['label' => 'Personal', 'icon' => 'fa fa-user-o', 'url' => ['/application/personal/create'],],
                        ['label' => 'Proposal', 'icon' => 'fa fa-institution', 'url' => ['/application/proposal/create'],],
                    ],],
                    ['label' => 'List Pengajuan Layanan', 'icon' => 'fa fa-th-list', 'url' => '/application/default/index',],
                    ['label' => 'Verifikasi 1', 'icon' => 'fa fa-check-square-o', 'url' => '/application/default/verification1', 'visible' => Yii::$app->user->can('Verifikator 1'), 'badge' => ['count'=>\Yii::$app->aggregator->totalVerification1Count, 'label'=>'primary']],
                    ['label' => 'Verifikasi 2', 'icon' => 'fa fa-check', 'url' => '/application/default/verification2','visible' => Yii::$app->user->can('Verifikator 2'), 'badge' => ['count'=>\Yii::$app->aggregator->totalVerification2Count, 'label'=>'warning']],
                    ['label' => 'Review PJ Program', 'icon' => 'fa fa-check-circle', 'url' => '/application/default/review', 'visible' => Yii::$app->user->can('PJ Program'), 'badge' => ['count'=>\Yii::$app->aggregator->totalReviewCount, 'label'=>'info']],
                    ['label' => 'Approval Manager MI', 'icon' => 'fa fa-check-square', 'url' => '/application/default/approval', 'visible' => Yii::$app->user->can('Manager MI'), 'badge' => ['count'=>\Yii::$app->aggregator->totalApprovalCount, 'label'=>'danger']],
                    ['label' => 'List Distribusi Layanan', 'icon' => 'fa fa-gift', 'url' => '/application/default/distribution', 'visible' => Yii::$app->user->can('Distribusi Layanan'), 'badge' => ['count'=>\Yii::$app->aggregator->totalDistributionCount, 'label'=>'success']],
                    ['label' => 'Mustahik', 'icon' => 'fa fa-user-circle-o', 'url' => '/beneficiary/', 'visible' => Yii::$app->user->can('Pengelolaan Data Mustahik'), 'items' => [
                        // ['label' => 'List Mustahik', 'icon' => 'fa fa-id-card', 'url' => ['/beneficiary/beneficiary']],
                        // ['label' => 'Input Mustahik', 'icon' => 'fa fa-user-plus', 'url' => ['/beneficiary/beneficiary/create']],
                    ]],
                    ['label' => 'Mitra', 'icon' => 'fa fa-id-badge', 'url' => '/beneficiary/partner', 'visible' => Yii::$app->user->can('Pengelolaan Data Mitra'), 'items' => [
                        // ['label' => 'List Mitra', 'icon' => 'fa fa-id-card', 'url' => ['/beneficiary/partner']],
                        // ['label' => 'Input Mitra', 'icon' => 'fa fa-user-plus', 'url' => ['/beneficiary/partner/create']],
                    ]],
                    [
                        'label' => 'Setting',
                        'icon' => 'fa fa-gears',
                        'url' => '#',
                        'visible' => Yii::$app->user->can('Administrator'),
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],'visible' => Yii::$app->user->can('SuperUser')],
                            ['label' => 'Tipe Program', 'icon' => 'fa fa-snowflake-o', 'url' => ['/setting/program-type'],],
                            ['label' => 'Kategori Kebutuhan', 'icon' => 'fa fa-tags', 'url' => ['/setting/need-type'],],
                            ['label' => 'Pertanyaan Interview', 'icon' => 'fa fa-question-circle', 'url' => ['/setting/interview-question'],],
                            ['label' => 'Kategori Bantuan', 'icon' => 'fa fa-bullseye', 'url' => ['/setting/aid-category'],],
                            ['label' => 'Tipe Dokumen', 'icon' => 'fa fa-file-text', 'url' => ['/setting/document-type'],],
                            ['label' => 'Tingkat Pendidikan', 'icon' => 'fa fa-graduation-cap', 'url' => ['/setting/education-degree'],],
                            [
                                'label' => 'Otorisasi',
                                'icon' => 'fa fa-key',
                                'url' => '/admin/assignment',
                                'items' => [
                                    ['label' => 'Assignment', 'icon' => 'fa fa-users', 'url' => ['/admin/assignment'], 'visible' => Yii::$app->user->can('SuperUser')],
                                    ['label' => 'Role', 'icon' => 'fa fa-user', 'url' => ['/admin/role'], 'visible' => Yii::$app->user->can('SuperUser')],
                                    ['label' => 'Permission', 'icon' => 'fa fa-tasks', 'url' => ['/admin/permission'], 'visible' => Yii::$app->user->can('SuperUser')],
                                    ['label' => 'Route', 'icon' => 'fa fa-link', 'url' => ['/admin/route'], 'visible' => Yii::$app->user->can('SuperUser')],
                                    ['label' => 'Rule', 'icon' => 'fa fa-map-o', 'url' => ['/admin/rule'], 'visible' => Yii::$app->user->can('SuperUser')],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
