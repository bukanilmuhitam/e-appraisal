<?php 

$uri = $_SERVER['REQUEST_URI'];
$x = explode('/' , $uri);
if(!empty($x[2])){
    $getUri = $x[2];
}else{
    $getUri = '';
}

?>

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>MENU NAVIGATION</h3>
        <ul class="nav side-menu">
            <li class="<?=$getUri == 'home' ? 'active' : '';?>"><a href="<?=base_url()?>"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a><i class="fa fa-money"></i> Data Master <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?=base_url()?>taksasi">Taksasi</a></li>
                    <li><a href="<?=base_url()?>retaksasi">Retaksasi</a></li>
                    <li><a href="<?=base_url()?>retaksasi">Review KJJP</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>