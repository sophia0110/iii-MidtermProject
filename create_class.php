<?php
require_once("db_connect.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>揪影後台</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        .box {
            width: 100%;
            height: 30px;
        }

        .bg-gradient-primary {
            background-color: #2C2C30;
            background-image: linear-gradient(180deg, #2C2B31 10%, #070608 100%);
            background-size: cover;
        }
        #iconn{
            width: 32px;
            height: 32px;;
        }  
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->


            <a class="sidebar-brand d-flex align-items-center justify-content-center" href='member2.php'>
                <img id="iconn" src="img/logo.svg" alt="">
                <div class="sidebar-brand-text mx-3">揪影</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-user col-1"></i>
                    <span class="col-11">會員管理</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingone" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="member2.php">會員管理</a>
                        <a class="collapse-item" href="create_member.php">新增會員</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-camera col-1"></i>
                    <span class="col-11">活動管理</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="event_list.php">活動列表管理</a>
                        <a class="collapse-item" href="add_event_page.php">新增活動</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-chalkboard-teacher col-1"></i>
                    <span class="col-11">課程管理</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="class.php">課程管理</a>
                        <a class="collapse-item" href="create_class.php">新增課程</a>
                    </div>
                </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-receipt col-1"></i>
                    <span class="col-11">訂單管理</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="order/temp_event.php">活動訂單管理</a>
                        <a class="collapse-item" href="order/temp_class.php">課程訂單會員</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-fw fa-cog col-1"></i>
                    <span class="col-11">權限管理</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="make/tempauth.php">權限管理列表</a>
                        <a class="collapse-item" href="make/tempauthadd.php">新增權限管理</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>


                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION["headdd"] ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    最高權限管理者
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid " style="padding-bottom: 3rem">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">新增課程</h1>


                    <form class=" float-left" action="insert_create_class.php" method="post">


                        <div class="form-group col-9">
                            <label for="class_name">課程名稱</label>
                            <input type="text" class="form-control" id="class_name" name="class_name" placeholder="課程名稱" required>
                        </div>



                        <div class="form-group col-6">
                            <label for="class_teacher">課程老師</label>
                            <input type="text" class="form-control" id="class_teacher" name="class_teacher" placeholder="課程老師" required>
                        </div>

                        <div class="form-group col-16">
                            <label for="class_type" required>類型</label>
                            <br>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="人像">人像</label>
                            <label><input type="checkbox" id="class_type " name="class_type[]" value="風景">風景</label>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="影像編輯">影像編輯</label>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="物品">物品</label>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="手機">手機</label>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="底片沖洗">底片沖洗</label>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="居家">居家</label>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="空拍">空拍</label>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="雨天">雨天</label>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="室內">室內</label>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="商品">商品</label>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="商業攝影">商業攝影</label>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="vlog">vlog</label>
                            <label><input type="checkbox" id="class_type" name="class_type[]" value="其他">其他</label>

                        </div>

                        <div class="form-group col-16">
                            <label for="class_content">課程內容</label>
                            <textarea type="textarea" class="form-control " id="class_content" name="class_content" value=" " placeholder="課程內容" required></textarea>

                        </div>
                        <div class="form-group row">
                            <div class="form-group col-6">
                                <label for="class_open_num">開課人數</label>
                                <input type="number" class="form-control" id="class_open_num" name="class_open_num" placeholder="" min="1" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="class_price">價格</label>
                                <input type="number" class="form-control" id="class_price" name="class_price" placeholder="$$$" min="0" required>
                            </div>

                        </div>
                        <div class="form-group ">
                            <label for="class_date">課程時間</label>
                            <div class="form-group row d-flex justify-content-around">
                                <div class="form-group  ">
                                    <select class="custom-select mr-sm-2  " id="class_week" name="class_week" required>
                                        <option selected>選擇</option>
                                        <option value="每周一" name="class_week">每周一</option>
                                        <option value="每周二" name="class_week">每周二</option>
                                        <option value="每周三" name="class_week">每周三</option>
                                        <option value="每周四" name="class_week">每周四</option>
                                        <option value="每周五" name="class_week">每周五</option>
                                        <option value="每周六" name="class_week">每周六</option>
                                        <option value="每周日" name="class_week">每周日</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 ">
                                    <input type="time" class="form-control" id="class_time_s" name="class_time_s" required>
                                    <div class="text-center">
                                        到
                                    </div>
                                    <input type="time" class="form-control " id="class_time_e" name="class_time_e" required>

                                </div>


                            </div>



                        </div>
                        <div class="form-group row">
                            <div class="form-group col-3">
                                <label for="class_times">課堂次數</label>
                                <input type="number" class="form-control" id="class_times" name="class_times" placeholder="" min="1" required>
                            </div>
                            <div class="form-group col-9">
                                <label for="class_place">課程地點</label>
                                <input type="text" class="form-control" id="class_place" name="class_place" placeholder="課程地點" required>
                            </div>

                        </div>
                        <div class="form-group col-18">
                            <label for="class_item">自備器材</label>
                            <br>

                            <div class=" form-group row col-12" name="class_item" required>
                                <label><input type="checkbox" id="class_item" name="class_item[]" value="單眼相機">單眼相機</label>
                                <label><input type="checkbox" id="class_item" name="class_item[]" value="數位相機">數位相機</label>
                                <label><input type="checkbox" id="class_item" name="class_item[]" value="手機">手機</label>
                                <label><input type="checkbox" id="class_item" name="class_item[]" value="類單眼相機">類單眼相機</label>
                                <label><input type="checkbox" id="class_item" name="class_item[]" value="空拍機">空拍機</label>
                                <label><input type="checkbox" id="class_item" name="class_item[]" value="腳架"> 腳架</label>
                                <label><input type="checkbox" id="class_item" name="class_item[]" value="底片相機">底片相機</label>



                                <label><input type="checkbox" id="class_item" name="class_item[]" value="其他:">其他:</label>


                                <input type="text" class="form-control form-control-sm  col-2 " id="class_item" placeholder="" name="class_item[]">
                            </div>





                        </div>
                        <div class="form-group col-6  row">
                            <label for="class_deadline_data">課程報名截止時間</label>
                            <input type="date" class="form-control" id="class_deadline_date" name="class_deadline_date" placeholder="" required>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-6">
                                <label for="class_start_data">課程起始時間</label>
                                <input type="date" class="form-control" id="class_start_date" name="class_start_date" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="class_end_data">課程起迄時間</label>
                                <input type="date" class="form-control" id="class_end_date" name="class_end_date" required>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="取消">
                            <input class="btn btn-primary" type="submit" value="新增">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>

    </form>




    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Join In 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">確定要登出嗎?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">取消</button>
                    <a class="btn btn-primary" href="logout.php">登出</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>


</body>

</html>


<?php      $conn->close();
?>