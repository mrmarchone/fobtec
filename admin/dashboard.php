<?php
session_start();
include"connect.php";
include"header.php";
?>
<?php
if (isset($_SESSION['username'])) {?>

<div class="header col-xs-12">
    <h2 class="pull-right"><a href="logout.php">Logout</a></h2>
    <div class="logo col-sm-3 pull-left">
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
                <a href="posts.php">
                    <div class="feat red">
                        <ul class="list-inline">
                            <li><i class="fa fa-comment-o fa-4x" aria-hidden="true"></i></li>
                            <?php
                            $stmt = $con->prepare("SELECT * FROM blogpage");
                            $stmt->execute();
                            $row = $stmt->fetchAll();
                            echo '<li class="pull-right"><h2>' . sizeof($row) . '</h2></li>';
                            ?>
                            <div class="clearfix"></div>
                        </ul>
                        <h3>Posts</h3>
                    </div>
                </a>
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
            <div class="box1 col-md-3 col-xs-12">
                <div class="feat red">
                    <i class="fa fa-plus fa-4x pull-right" aria-hidden="true"></i>
                    <h3>Add users</h3>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="box1 col-md-3 col-xs-12">
                <div class="feat blue">
                    <i class="fa fa-edit fa-4x pull-right"></i>
                    <h3>Edit users</h3>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="box1 col-md-3 col-xs-12">
                <a href="addarticle.php">
                    <div class="feat green">
                        <i class="fa fa-plus fa-4x pull-right"></i>
                        <h3>Add article</h3>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
            <div class="box1 col-md-3 col-xs-12">
                <a href="editarticle.php">
                    <div class="feat yellow">
                        <i class="fa fa-edit fa-4x pull-right"></i>
                        <h3>Edit article</h3>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
            <div class="box1 col-md-3 col-xs-12">
                <div class="feat red">
                    <i class="fa fa-edit fa-4x pull-right"></i>
                    <h3>Edit About</h3>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="box1 col-md-3 col-xs-12">
                <div class="feat blue">
                    <i class="fa fa-edit fa-4x pull-right"></i>
                    <h3>Edit Contact</h3>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="box1 col-md-3 col-xs-12">
                <div class="feat green">
                    <i class="fa fa-edit fa-4x pull-right"></i>
                    <h3>Edit Customer</h3>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="box1 col-md-3 col-xs-12">
                <div class="feat yellow">
                    <i class="fa fa-edit fa-4x pull-right"></i>
                    <h3>Edit Service</h3>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="box1 col-md-6 col-xs-12">
                <div class="feat green">
                    <i class="fa fa-edit fa-4x pull-right"></i>
                    <h3>Edit Solutions</h3>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="box1 col-md-6 col-xs-12">
                <div class="feat green">
                    <i class="fa fa-edit fa-4x pull-right"></i>
                    <h3>Edit Home</h3>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
} else {
    header('Location: login.php');
    exit();
}
?>
<?php
include"footer.php";
?>