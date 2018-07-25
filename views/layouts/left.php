<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= \Yii::$app->user->identity->username; ?></p>

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

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    [
                        'label' => 'Dashboard', 
                        'icon' => 'fas fa-home', 
                        'url' => '/',
                    ],
                    [
                        'label' => 'Merchant list', 
                        'icon' => 'fas fa-cutlery', 
                        'url' => ['/admin/merchants']
                    ],
                    [
                        'label' => 'Services',
                        'icon'  => 'fas fa-signal',
                        'url' => '#',
                        'items'=> 
                        [
                            ['label' => 'Service List','icon' => 'fas fa-list-alt', 'url' => ['/admin/services/']],
                            ['label' => 'Assign Service', 'icon' => 'fas fa-map-signs', 'url' =>['/admin/merchant-services']]
                        ],
                    ],
                    [
                        'label' => 'System settings',
                        'icon' => 'fas fa-gear',
                        'url' => '#',
                        'items' => 
                        [
                            ['label' => 'devices', 'icon' => 'fas fa-laptop', 'url' =>'/admin/devices'],
                            ['label' => 'logs', 'icon' => 'fas  fa-refresh', 'url' =>'/'],
                        ],
                    ],
                    [
                        'label' => 'Reports',
                        'icon'  => 'far fa-database',
                        'url' => '#',
                        'items' => 
                        [
                            ['label' => 'Merchant Registration', 'icon' => 'fas  fa-university', 'url' => '#'],
                            ['label' => 'Merchant Payment', 'icon' => 'fas fa-suitcase', 'url' => '#'],
                            ['label' => 'Merchant Sales', 'icon' => 'fas  fa-money', 'url'=> '#' ], 
                        ],
                    ],
                    [
                        'label' => 'User Management', 
                        'icon' => 'fas fa-user', 
                        'url' => '#',
                        'items' => [
                            [
                                 'label' => 'Users List', 
                                'icon' => 'fas fa-users', 
                                'url' => ['/user/admin'],
                            ],
                            [
                                 'label' => 'Register User', 
                                'icon' => 'fas fa-user-plus', 
                                'url' => ['/user/admin/create'],
                            ],
                        ],
                    ],
                    [
                        'label' => 'Logout', 
                        'icon' => 'fas fa-sign-out', 
                        'url' => ['/user/logout']
                    ],
                ]
            ]
        ) ?>

    </section>

</aside>
