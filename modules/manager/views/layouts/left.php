<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

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
                        'label' => 'Nyumbani', 
                        'icon' => 'fas fa-home', 
                        'url' => '/manager',
                    ],
                    [
                        'label' => 'Mauzo', 
                        'icon' => 'fas fa-shopping-cart',
                        'url' => '/manager',
                    ],
                    [
                        'label' => 'Vinywaji',
                        'icon' => 'fas fa-glass',
                        'url' => '#',
                        'items' => 
                            [
                                [
                                    'label' => 'Orodha ya Vinywaji','icon' => 'fas fa-beer','url' => ['/'],
                                ],
                                [
                                    'label' => 'Zilizoharibika','icon' => 'fas fa-circle','url' => ['/'],
                                ],
                            ],
                    ],
                    [
                        'label' => 'Wahudumu', 
                        'icon' => 'fas fa-users',
                        'url' => '/manager',
                    ],
                    [
                        'label' => 'Taarifa za Manunuzi', 
                        'icon' => 'fas fa-truck',
                        'url' => '/manager',
                    ],
                    [
                        'label' => 'Devices', 
                        'icon' => 'fas fa-cogs',
                        'url' => '/manager',
                    ],                    
                    [
                        'label' => 'Mpangilio', 
                        'icon' => 'far fa-wrench',
                        'url' => '/',
                    ],
                    
                ],
            ]
        ) ?>

    </section>

</aside>
