<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Wizard</title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap-theme.min.css') ?>
    <?= $this->Html->css('sb-admin.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('chosen.css') ?>
    <?= $this->Html->css('main.css') ?>

    <?= $this->Html->Script('jquery-1.11.3.min.js') ?>
    <?= $this->Html->Script('bootstrap.min.js') ?>
    <?= $this->Html->Script('chosen.jquery.min.js') ?>
    <?= $this->Html->Script('main.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Game Wizard</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="lang_drop"><i class="fa fa-fw fa-globe"></i> <?= __('Language') ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu lang">
                        <li>
                            <?= $this->Form->create('', ['type' => 'post', 'id' => 'language_form']) ?>
                            <?= $this->Form->select('language', ['en' => 'English', 'ru' => 'Русский'], ['default' => $lang, 'size' => 2, 'class' => 'lang_select']) ?>
                            <?= $this->Form->end() ?>
                        </li>
                    </ul>
                </li>
                <?php
                if ($is_authorized) { ?>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user"></i> <?= $username ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-power-off']).__('Logout'),
                                ['controller' => 'Users', 'action' => 'logout'],
                                ['escape' => false]) ?>
                            </li>
                        </ul>
                    </li>
                <?php
                } else { ?>
                    <li>
                        <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-user']).__('SignUp'),
                                 ['controller' => 'Users', 'action' => 'add'],
                                 ['escape' => false]) ?>
                    </li>
                    <li>
                        <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-fw fa-sign-in']).__('SignIn'),
                                 ['controller' => 'Users', 'action' => 'login'],
                                 ['escape' => false]) ?>
                    </li>
                <?php } ?>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li data-controller="Home">
                        <?= $this->Html->link(
                            $this->Html->tag('i', '', ['class' => 'fa fa-fw fa-home']).__('Home'),
                            ['controller' => 'Home', 'action' => 'index', 'lang' => $lang],
                            ['escape' => false]) ?>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#tables"><i class="fa fa-fw fa-table"></i><?= __('Tables') ?><i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="tables" class="collapse">
                            <li data-controller="AccountCommon"><?= $this->Html->link(__('ListAccountCommon'), ['controller' => 'AccountCommon', 'action' => 'index', 'lang' => $lang]); ?></li>
                            <li data-controller="Roledata"><?= $this->Html->link(__('RoledataList'), ['controller' => 'Roledata', 'action' => 'index', 'lang' => $lang]); ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>

    <footer>
        <div>footer</div>
    </footer>

<?= $this->Html->scriptBlock('
        var controller = "'.$controller.'";
        setMenuActive(controller);

        $(".lang_select").chosen({width: "100%", disable_search: true}).change(function(){
            languageChange();
        });

        $("#lang_drop").on("click", function() {
            $(".lang_select").trigger("chosen:open");
        });
    ') ?>

</body>
</html>
