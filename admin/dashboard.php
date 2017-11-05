<?php
session_start();
include"connect.php";
include"header.php";
?>
<div class="header col-xs-12">
    <div class="logo col-sm-3 col-xs-12 pull-right">
        <img src="images/white.png" class="img-responsive" width="100">
    </div>
    <div class="clearfix"></div>
</div>
<div class="dash col-xs-12 text-center">
    <img src="images/profile.png" class="img-circle">
    <h2>Welcome Dr <span><?php echo $_SESSION['username']?></span></h2>
</div>
<div class="dashcontent col-sm-6 col-xs-12">
    <div class="container">
        <div class="h1 col-xs-12">
            <ul class="list-inline">
                <li><i class="fa fa-dashboard"></i></li>
                <li><h2>My Dashboard</h2></li>
            </ul>
        </div>
        <div class="boxes col-xs-12">
            <div class="box1 col-md-3 col-xs-12">
                <div class="feat red">
                    <ul class="list-inline">
                        <li><i class="fa fa-comment-o fa-4x" aria-hidden="true"></i></li>
                        <li class="pull-right"><h2>555</h2></li>
                        <div class="clearfix"></div>
                    </ul>
                    <h3>Comments</h3>
                </div>
            </div>
            <div class="box1 col-md-3 col-xs-12">
                <div class="feat blue">
                    <ul class="list-inline">
                        <li><i class="fa fa-eye fa-4x" aria-hidden="true"></i></li>
                        <li class="pull-right"><h2>555</h2></li>
                        <div class="clearfix"></div>
                    </ul>
                    <h3>Views</h3>
                </div>
            </div>
            <div class="box1 col-md-3 col-xs-12">
                <div class="feat green">
                    <ul class="list-inline">
                        <li><i class="fa fa-share-alt fa-4x" aria-hidden="true"></i></li>
                        <li class="pull-right"><h2>555</h2></li>
                        <div class="clearfix"></div>
                    </ul>
                    <h3>Shares</h3>
                </div>
            </div>
            <div class="box1 col-md-3 col-xs-12">
                <div class="feat yellow">
                    <ul class="list-inline">
                        <li><i class="fa fa-users fa-4x" aria-hidden="true"></i></li>
                        <li class="pull-right"><h2>555</h2></li>
                        <div class="clearfix"></div>
                    </ul>
                    <h3>Users</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include"footer.php";
?>