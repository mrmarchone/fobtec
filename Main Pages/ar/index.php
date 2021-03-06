<?php include"header.php";?>
<?php include"nav.php";?>
<?php include"../../admin/connect.php";?>
        <!--start Header-->
        <div class="header col-xs-12 padding40">
            <div class="container">
                <div class="row">
                    <div class="paragraph col-xs-12 text-center">
                        <img src="images/white.png" class="img-responsive">
                        <button>READ MORE</button>
                        <br>
                        <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                        <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                        <i class="fa fa-pinterest fa-3x" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <!--end Header-->
  <!--start news slider-->
        <div class="newsslider col-xs-12">
            <div class="container">
                <div class="row">
                    <h2 class="h1 text-center">News</h2>
                    <div class="owl-carousel owl-theme">
                        <?php
                        $stmt = $con->prepare("SELECT * FROM blogpage ORDER BY ID DESC LIMIT 10");
                        $stmt->execute();
                        $row = $stmt->fetchAll();
                        foreach ($row as $key => $value) {
                            echo '<div class="item">';
                            echo '<div>';
                            if (!file_exists('../../admin/images/' . $value['img'])) {
                                echo '<img class="img-responsive img-thumbnail" src="../../admin/images/white2.png">';
                            } else {
                                echo '<img class="img-responsive img-thumbnail" src="../../images/' . $value['img'] . '">';   
                            }
                            echo '<h3 class="text-center">' . $value['title'] . '</h3>';
                            echo '<p class="lead text-center">' . $value['details'] . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!--end news slider-->
        <!--start box-->
        <div class="box col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="boxes col-xs-12">
                        <div class="box1 col-xs-12" id="box1">
                            <h3 class="pull-left">Consultation</h3>
                            <i class="fa fa-plus fa-3x pull-right" aria-hidden="true"></i>
                        </div>
                        <br>
                        <div class="paragraph col-xs-12" id="paragraph1">
                            <h2 class="h1">Banking Consulting : </h2>
                            <p class="lead">
                                Future Business &amp; Technology has banking experts in all banking operations enabling it to develop banking mechanisms
                            </p>
                            <h2 class="h1">Financial consulting : </h2>
                            <p class="lead">
                                Future Business Company has good experience in developing companies and providing financial consultancy
                            </p>
                            <h2 class="h1">Accounting Consultancy : </h2>
                            <p class="lead">
                                Our partners provide all financial accounting services
                            </p>
                            <h2 class="h1">Management Consulting : </h2>
                            <p class="lead">
                                Specialized in structuring companies and improving operations
                            </p>
                        </div>
                    </div>
                    <div class="boxes col-xs-12">
                        <div class="box1 col-xs-12" id="box2">
                            <h3 class="pull-left">Development</h3>
                            <i class="fa fa-plus fa-3x pull-right" aria-hidden="true"></i>
                        </div>
                        <br>
                        <div class="paragraph col-xs-12" id="paragraph2">
                                 <p class="lead">
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                 </p>
                        </div>
                    </div>
                    <div class="boxes col-xs-12">
                        <div class="box1 col-xs-12" id="box3">
                            <h3 class="pull-left">Implementation</h3>
                            <i class="fa fa-plus fa-3x pull-right" aria-hidden="true"></i>
                        </div>
                        <br>
                        <div class="paragraph col-xs-12" id="paragraph3">
                                 <p class="lead">
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                 </p>
                        </div>
                    </div>
                    <div class="boxes col-xs-12">
                        <div class="box1 col-xs-12" id="box4">
                            <h3 class="pull-left">Training</h3>
                            <i class="fa fa-plus fa-3x pull-right" aria-hidden="true"></i>
                        </div>
                        <br>
                        <div class="paragraph col-xs-12" id="paragraph4">
                            <ol>
                                <h2 class="h1"><li>Training courses</li></h2>
                                <h2 class="h1"><li>Organize events</li></h2>
                                <h2 class="h1"><li>Banking Training</li></h2>
                                <h2 class="h1"><li>Technology training</li></h2>
                                <h2 class="h1"><li>Financial Training</li></h2>
                                <h2 class="h1"><li>Management training</li></h2>
                            </ol>
                        </div>
                    </div>
                    <div class="boxes col-xs-12">
                        <div class="box1 col-xs-12" id="box5">
                            <h3 class="pull-left">Resources</h3>
                            <i class="fa fa-plus fa-3x pull-right" aria-hidden="true"></i>
                        </div>
                        <br>
                        <div class="paragraph col-xs-12" id="paragraph5">
                                 <p class="lead">
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                 </p>
                        </div>
                    </div>
                    <div class="boxes col-xs-12">
                        <div class="box1 col-xs-12" id="box6">
                            <h3 class="pull-left">Partners</h3>
                            <i class="fa fa-plus fa-3x pull-right" aria-hidden="true"></i>
                        </div>
                        <br>
                        <div class="paragraph col-xs-12" id="paragraph6">
                                 <p class="lead">
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                 </p>
                        </div>
                    </div>
                    <div class="boxes col-xs-12">
                        <div class="box1 col-xs-12" id="box7">
                            <h3 class="pull-left">Finance</h3>
                            <i class="fa fa-plus fa-3x pull-right" aria-hidden="true"></i>
                        </div>
                        <br>
                        <div class="paragraph col-xs-12" id="paragraph7">
                                 <p class="lead">
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end box-->
        <!--start Home-->
        <div class="home col-xs-12">
            <div class="row">
                <div class="boxes col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="contain">
                        <h2 class="h1"><i class="fa fa-briefcase fa-3x" aria-hidden="true"></i></h2>
                        <h4 class="h3">Home</h4>
                        <br>
                        <p class="lead">In this section You Will Know All What we do</p>
                        <br>
                        <button>Learn More</button>
                    </div>
                </div>
                <div class="boxes col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="contain">
                        <h2 class="h1"><i class="fa fa-exclamation-triangle fa-3x" aria-hidden="true"></i></h2>
                        <h4 class="h3">About Us</h4>
                        <br>
                        <p class="lead">A Wide range of industry areas</p>
                        <br>
                        <button>Learn More</button>
                    </div>
                </div>
                <div class="boxes col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="contain">
                        <h2 class="h1"><i class="fa fa-pie-chart fa-3x" aria-hidden="true"></i></h2>
                        <h4 class="h3">About Us</h4>
                        <p class="lead">A Wide range of industry areas</p>
                        <br>
                        <button>Learn More</button>
                    </div>
                </div>
                <div class="boxes col-md-3 col-sm-6 col-xs-12 text-center" id="none">
                    <div class="contain">
                        <h2 class="h1"><i class="fa fa-pie-chart fa-3x" aria-hidden="true"></i></h2>
                        <h4 class="h3">About Us</h4>
                        <br>
                        <p class="lead">A Wide range of industry areas</p>
                        <br>
                        <button>Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end Home-->
        <!--start About-->
        <div class="about col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="paragraph text-center">
                        <h2 class="h1">ABOUT US</h2>
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--end About-->
        <!--start Important Section-->
        <div class="vip col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="sections col-md-4 col-xs-12">
                        <div class="paragraph text-center">
                            <h2 class="h1">IT CONSULTING</h2>
                            <h4>A NEW DEVISION</h4>
                            <br>
                            <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <h3><a href="#">Learn More &gt;</a></h3>
                        </div>
                    </div>
                    <div class="sections col-md-4 col-xs-12">
                        <div class="paragraph text-center">
                            <h2 class="h1">BENEFIT</h2>
                            <h4>A NEW DEVISION</h4>
                            <br>
                            <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <h3><a href="#">Learn More &gt;</a></h3>
                        </div>
                    </div>
                    <div class="sections col-md-4 col-xs-12">
                        <div class="paragraph text-center">
                            <h2 class="h1">SUCCESS</h2>
                            <h4>A NEW DEVISION</h4>
                            <br>
                            <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <h3><a href="#">Learn More &gt;</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end Important Section-->
        <!--Choose Us-->
        <div class="choose col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="choose1 col-md-6 col-xs-12">
                        <h2 class="h1">CLIENTS CHOOSE US!</h2>
                        <br>
                        <div class="paragraph">
                            <h3 class="h2">Balancing risk and opportunity</h3>
                            <br>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercilaborum.
                            </p>
                            <h3 class="h2">Balancing risk and opportunity</h3>
                            <br>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrest laborum.
                            </p>
                            <h4><a href="#">Learn More &gt;</a></h4>
                        </div>
                    </div>
                    <div class="choose1 col-md-6 col-xs-12">
                        <h2 class="h1">LATEST NEW!</h2>
                        <br>
                        <div class="paragraph">
                            <img src="images/Screenshot%20(65).png" class="img-responsive col-md-6 col-xs-12">
                            <p class="lead">
                                 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercilaborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercilaborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                            </p>
                            <h4><a href="#">Learn More &gt;</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end Choose us-->
        <div class="clearfix"></div>
<?php include"sitemap.php";?>
<?php include"footer.php";?>