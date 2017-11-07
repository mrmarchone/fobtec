<?php
session_start();
include"connect.php";
include"header.php";
?>
<?php
if (isset($_SESSION['username'])) {?>
<?php include"navbar.php";?>
<div class="dash col-xs-12 text-center">
    <?php
    $stmt = $con->prepare("SELECT * FROM admins WHERE ID=?");
    $stmt->execute(array($_SESSION['ID']));
    $row = $stmt->fetchAll();
    foreach ($row as $key => $value) {
        echo '<img src="images/users/'. $value['img'] .'" class="img-circle" width="100px">';
    }
    ?>
    <h2>Welcome <span><?php echo $_SESSION['username']?></span></h2>
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
                <a href="users.php">
                    <div class="feat yellow">
                        <ul class="list-inline">
                            <li><i class="fa fa-users fa-4x" aria-hidden="true"></i></li>
                                <?php
                                $stmt = $con->prepare("SELECT ID FROM admins");
                                $stmt->execute();
                                $row = $stmt->fetchAll();
                                echo '<li class="pull-right"><h2>' . sizeof($row) . '</h2></li>';
                                ?>
                            <div class="clearfix"></div>
                        </ul>
                        <h3>Users</h3>
                    </div>
                </a>
            </div>
            <div class="box1 col-md-3 col-xs-12">
                <a href="adduser.php">
                    <div class="feat red">
                        <i class="fa fa-plus fa-4x pull-right" aria-hidden="true"></i>
                        <h3>Add users</h3>
                        <div class="clearfix"></div>
                    </div>
                </a>
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