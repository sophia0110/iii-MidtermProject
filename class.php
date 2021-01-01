<?php
require_once ("db_connect.php");
session_start();

$sql = "SELECT * FROM class WHERE class_valid=1 ";
$result = $conn->query($sql);

//$total_item=$result->num_rows;

//$page=$_GET["page"];
//
//$item_per_page=5;
//$start=($page-1)*$item_per_page;
//
//$total_page=floor($total_item/$item_per_page)+1;
//if($total_item%$item_per_page==0)$total_page=$total_page-1;
//
//$first_page=1;
//
//$last_page=$total_page;
//
//$sql="SELECT * FROM `class`  WHERE class_valid=1
//LIMIT $start ,$item_per_page
//         ";
//$result=$conn->query($sql);





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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!--    data table-->
    <link href ="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href ="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>

        .box {
            width: 100%;
            height: 30px;
        }

        .bg-gradient-primary{
            background-color: #2C2C30;
            background-image: linear-gradient(180deg, #2C2B31  10%, #070608 100%);
            background-size: cover;
        }
        #icon{
            color: white;
        }
        td{
            color: #858796;
        }
        .table .thead-light th{
            color: #6e707e;
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
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
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>


                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION["headdd"]?></span>
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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">課程管理</h1>

<!--                    <form class="form-inline my-2 my-lg-0">-->
<!--                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--                    </form>-->
<!--                    <div class="mt-3">-->
<!--                        篩選條件-->
<!--                    </div>-->
                    <!-- <div class="ml-2 mt-1 d-flex justify-content-start"> -->
<!--                    <form>-->
<!--                        <div class="form-check form-check-inline mb-4">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="class_id">-->
<!--                            <label class="form-check-label" for="">課程編號</label>-->
<!--                        </div>-->
<!--                        <div class="form-check form-check-inline">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="class_name">-->
<!--                            <label class="form-check-label" for="">課程名稱 </label>-->
<!--                        </div>-->
<!--                        <div class="form-check form-check-inline">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="class_teacher">-->
<!--                            <label class="form-check-label" for="">授課老師</label>-->
<!--                        </div>-->
<!--                        <div class="form-check form-check-inline">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="class_type">-->
<!--                            <label class="form-check-label" for="">類型 </label>-->
<!--                        </div>-->
<!--                        <div class="form-check form-check-inline">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"-->
<!--                                   value="class_content">-->
<!--                            <label class="form-check-label" for="">課程內容</label>-->
<!--                        </div>-->
<!--                        <div class="form-check form-check-inline">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="class_open_num">-->
<!--                            <label class="form-check-label" for="">開課人數</label>-->
<!--                        </div>-->
<!--                        <div class="form-check form-check-inline">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"-->
<!--                                   value="class_price">-->
<!--                            <label class="form-check-label" for="">價格</label>-->
<!--                        </div>-->
<!--                        <div class="form-check form-check-inline">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="class_date">-->
<!--                            <label class="form-check-label" for="">課程時間</label>-->
<!--                        </div>-->
<!--                        <div class="form-check form-check-inline">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="class_times">-->
<!--                            <label class="form-check-label" for="">課堂次數 </label>-->
<!--                        </div>-->
<!--                        <div class="form-check form-check-inline">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"-->
<!--                                   value="class_place">-->
<!--                            <label class="form-check-label" for="">課程地點</label>-->
<!--                        </div>-->
<!--                        <div class="form-check form-check-inline">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"-->
<!--                                   value="class_item">-->
<!--                            <label class="form-check-label" for="">自備器材</label>-->
<!--                        </div>-->
<!--                        <div class="form-check form-check-inline">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"-->
<!--                                   value="class_start_data">-->
<!--                            <label class="form-check-label" for="">課程起始時間</label>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-check form-check-inline">-->
<!--                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="class_valid">-->
<!--                            <label class="form-check-label" for="">valid</label>-->
<!--                        </div>-->
<!--                        <button class="btn btn-primary my-2 my-sm-0 py-0 mr-1 align-top" type="submit">確認</button>-->
<!--                    </form>-->


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-content-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">課程列表</h6>

                            <button class="btn btn-outline-primary my-2 my-sm-0 py-0" type="button" data-toggle="modal"
                                    data-target="#create_member">+ 新增課程</button>
                        </div>

                        <div class="modal fade" id="create_member" tabindex="-1" role="dialog"
                             aria-labelledby="create_memberTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">新增課程</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid" style="padding-bottom: 3rem">



                                            <!-- Page Heading -->
                                            <form action="insert_class_data.php" method="post">



                                                <div class="form-group col-9">
                                                        <label for="class_name">課程名稱</label>
                                                        <input type="text" class="form-control"  name="class_name"
                                                               placeholder="課程名稱" required>
                                                    </div>



                                                <div class="form-group col-6">
                                                    <label for="class_teacher">課程老師</label>
                                                    <input type="text" class="form-control"  name="class_teacher"
                                                           placeholder="課程老師" required>
                                                </div>

                                                <div class="form-group col-16">
                                                    <label for="class_type "required>類型</label>
                                                    <br>
                                                    <label><input type="checkbox"    name="class_type[]" value="人像" >人像</label>
                                                    <label><input type="checkbox"   name="class_type[]" value="風景">風景</label>
                                                    <label><input type="checkbox"   name="class_type[]" value="影像編輯">影像編輯</label>
                                                    <label><input type="checkbox"   name="class_type[]"  value="物品">物品</label>
                                                    <label><input type="checkbox"   name="class_type[]"  value="手機">手機</label>
                                                    <label><input type="checkbox"   name="class_type[]" value="底片沖洗">底片沖洗</label>
                                                    <label><input type="checkbox"  name="class_type[]" value="居家">居家</label>
                                                    <label><input type="checkbox"  name="class_type[]" value="空拍">空拍</label>
                                                    <label><input type="checkbox"  name="class_type[]" value="雨天">雨天</label>
                                                    <label><input type="checkbox"  name="class_type[]"  value="室內">室內</label>
                                                    <label><input type="checkbox"   name="class_type[]" value="商品">商品</label>
                                                    <label><input type="checkbox"  name="class_type[]" value="商業攝影">商業攝影</label>
                                                    <label><input type="checkbox"   name="class_type[]" value="vlog">vlog</label>
                                                    <label><input type="checkbox"   name="class_type[]" value="其他">其他</label>

                                                </div>

                                                <div class="form-group col-16">
                                                    <label for="class_content">課程內容</label>
                                                    <textarea type="textarea" class="form-control" name="class_content"
                                                              placeholder="課程內容" required> </textarea>

                                                </div>
                                                <div class="form-group row">
                                                    <div class="form-group col-6">
                                                        <label for="class_open_num">開課人數</label>
                                                        <input type="number" class="form-control" name="class_open_num"
                                                               placeholder=""  min="1" required>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="class_price">價格</label>
                                                        <input type="number" class="form-control"  name="class_price"
                                                               placeholder="$$$"   min="0" required>
                                                    </div>

                                                </div>
                                                <div class="form-group ">
                                                    <label for="class_date">課程時間</label>
                                                    <div class="form-group row d-flex justify-content-around">
                                                        <div class="form-group  ">
                                                            <select class="custom-select mr-sm-2  " name="class_week" required>
                                                                <option selected >選擇</option>
                                                                <option value="每周一"  name="class_week">每周一</option>
                                                                <option value="每周二" name="class_week">每周二</option>
                                                                <option value="每周三"  name="class_week">每周三</option>
                                                                <option value="每周四"  name="class_week">每周四</option>
                                                                <option value="每周五"  name="class_week">每周五</option>
                                                                <option value="每周六"  name="class_week">每周六</option>
                                                                <option value="每周日" name="class_week">每周日</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-6 ">
                                                            <input type="time" class="form-control"  name="class_time_s" required>
                                                            <div class="text-center">
                                                                到
                                                            </div>
                                                            <input type="time" class="form-control "   name="class_time_e" required>

                                                        </div>


                                                    </div>



                                                </div>
                                                <div class="form-group row">
                                                    <div class="form-group col-3">
                                                        <label for="class_times">課堂次數</label>
                                                        <input type="number" class="form-control"   name="class_times"
                                                               placeholder=""  min="1" required>
                                                    </div>
                                                    <div class="form-group col-9">
                                                        <label for="class_place">課程地點</label>
                                                        <input type="text" class="form-control"  name="class_place"
                                                               placeholder="課程地點"  required>
                                                    </div>

                                                </div>
                                                <div class="form-group col-16">
                                                    <label for="class_item">自備器材</label>
                                                    <br>
                                                    <div class=" form-group row col-12" required>
                                                        <label><input type="checkbox"   name="class_item[]" value="單眼相機" >單眼相機</label>
                                                        <label><input type="checkbox"   name="class_item[]" value="數位相機">數位相機</label>
                                                        <label><input type="checkbox"  name="class_item[]" value="手機">手機</label>
                                                        <label><input type="checkbox"  name="class_item[]" value="類單眼相機">類單眼相機</label>
                                                        <label><input type="checkbox"  name="class_item[]" value="空拍機">空拍機</label>
                                                        <label><input type="checkbox"   name="class_item[]" value="腳架">腳架</label>
                                                        <label><input type="checkbox"   name="class_item[]" value="底片相機">底片相機</label>


                                                        <label><input type="checkbox"  " name="class_item[]" value="其他:"></label>其他:


                                                        <input type="text" class="form-control form-control-sm  col-4"
                                                               placeholder="" name="class_item[]">

                                                    </div>



                                                </div>
                                                <div class="form-group col-6  row">
                                                    <label for="class_deadline_data">課程報名截止時間</label>
                                                    <input type="date" class="form-control"  name="class_deadline_date"
                                                           placeholder="" required>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="form-group col-6">
                                                        <label for="class_start_data">課程起始時間</label>
                                                        <input type="date" class="form-control"  name="class_start_date"
                                                               required>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="class_end_data">課程起迄時間</label>
                                                        <input type="date" class="form-control" name="class_end_date"
                                                               required>
                                                    </div>
<!--                                                    <div class="form-group col-6">-->
<!--                                                        <label for="class_valid">valid</label>-->
<!--                                                        <input type="date" class="form-control" name="class_valid"-->
<!--                                                               required>-->
<!--                                                    </div>-->

                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" >取消</button>
                                                    <input   class="btn btn-primary" type="submit" value="新增">
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>




                        <div class="card-body">
                            <div class="table-responsive">
                                <from action="batch_deletion_class.php"  method="POST" ">
                                    <table class="table table-bordered table-striped" width="100%" cellspacing="0" id="table1" >
                                        <div>
                                            <input name="submitdel" class="btn btn-danger mb-sm-4 py-0"
                                                   type="submit" data-toggle="modal"
                                                   data-target="#deleteAll" value="刪除所選項目">


                                            </div>





                                        <thead class="text-center thead-light">

                                        <th scope="col" class="text-nowrap">
                                            <input type="checkbox" id="selected_all" class="text-nowrap" onclick="select_all(this,'selectClass')"> 全選

<!--                                            <input type="checkbox" id="selected_no"   onclick="reverse(this,'classes_class')" >反選-->
                                        </th>
                                        <th scope="col" class="text-nowrap">課程編號</th>
                                        <th scope="col" class="text-nowrap">課程名稱</th>
                                        <th scope="col" class="text-nowrap">授課老師 </th>
                                        <!-- <th scope="col" class="text-nowrap">類型 </th> -->

                                        <!-- <th scope="col-" class="text-nowrap">課程內容</th> -->


                                        <th scope="col" class="text-nowrap">開課人數</th>
                                        <th scope="col" class="text-nowrap">價格</th>
                                        <!-- <th scope="col" class="text-nowrap">課程時間</th> -->
                                        <!-- <th scope="col" class="text-nowrap">課程次數</th> -->
                                        <!-- <th scope="col" class="text-nowrap">課程地點</th> -->
                                        <!-- <th scope="col" class="text-nowrap">自備器材 </th> -->
                                        <th scope="col" class="text-nowrap">課程截止報名時間</th>
                                        <th scope="col" class="text-nowrap">課程起始時間</th>
                                        <!-- <th scope="col" class="text-nowrap">課程起訖時間</th>
                                        <th scope="col" class="text-nowrap">新增時間</th>
                                        <th scope="col" class="text-nowrap">修改時間</th>
                                        <th scope="col" class="text-nowrap">valid</th> -->
                                        <th scope="col" class="text-nowrap"></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        if($result->num_rows>0){
                                        while($row=$result->fetch_assoc()) {
                                        $id=$row["class_id"]?>


                                        <tr>
                                            <td scope="row" class="text-center">
                                                <div class="form-check" onclick="select(<?php echo $id ?>)">
                                                    <input type="checkbox" name="selectClass"  class="form-check-input position-static"  id="<?=$row["class_id"]?>" >
                                                </div>
                                               </td>
                                            <td  scope="row" class="text-center"  name="class_id" ><?=$row["class_id"]?></td>
                                            <td class="text-nowrap text-center"><?=$row["class_name"]?></td>
                                            <td scope="col" class="text-nowrap text-center"><?=$row["class_teacher"]?></td>
                                            <!-- <td scope="col" class="text-nowrap text-center"><?//=$row["class_type"]?></td> -->
                                            <!-- <td scope="col " class="text-left  text-wrap" title="" >
                                                <div class=" text-truncate " style="width:200px;"><?=$row["class_content"]?>
                                                </div>
                                            </td> -->
                                            <td scope="col" class="text-nowrap text-center"><?=$row["class_open_num"]?>人</td>
                                            <td scope="col" class="text-nowrap text-center">$<?=$row["class_price"]?></td>
                                            <!-- <td scope="col" class="text-nowrap text-center"><?=$row["class_week"].$row["class_time_s"]?>到<?=$row["class_time_e"]?> </td> -->
                                            <!-- <td scope="col" class="text-nowrap text-center"><?//=$row["class_times"]?>堂</td> -->
                                            <!-- <td scope="col" class="text-nowrap text-center"><?//=$row["class_place"]?></td> -->
                                            <!-- <td scope="col" class="text-nowrap text-center"><?//=$row["class_item"]?></td> -->
                                            <td scope="col" class="text-nowrap text-center"><?=$row["class_deadline_date"]?></td>
                                            <td scope="col" class="text-nowrap text-center"><?=$row["class_start_date"]?></td>
                                            <!-- <td scope="col" class="text-nowrap text-center"><?//=$row["class_end_date"]?></td>
                                            <td scope="col" class="text-center text-nowrap"><?//=$row["class_add_date"]?></td>
                                            <td scope="col" class="text-center text-nowrap"><?//=$row["class_change_date"]?></td>
                                            <th scope="col" class="text-center"><?=$row["class_valid"]?></th> -->
                                            <td scope="col d-flex edit" class="text-nowrap text-center">
                                                <button class="btn btn-success  my-2 my-sm-0 py-1 mr-1"
                                                        type="button" data-toggle="modal"
                                                        data-target="#inspect_class" onclick="inspect(<?php echo $id?>)"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-info my-2 my-sm-0 py-1 mr-1"
                                                        type="button" data-toggle="modal"
                                                        data-target="#edit_member" onclick="do_login(<?php echo $id?>)"><i class="far fa-edit"></i></button>
                                                <button class="btn btn-warning my-2 my-sm-0 py-1 mr-1"
                                                        type="submit" data-toggle="modal"
                                                        data-target="#delete" onclick="askDelete(<?php echo $id ?>)"><i id="icon" class="fas fa-user-minus"></i></button>
                                                        
                
                                            </td>
                                        </tr>


                                        </from>




                                            <?php
                                        }
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.container-fluid -->

                        </div>
                        <!-- End of Main Content -->

<!--                        <div class="d-flex justify-content-center ml-4">-->
<!--                            <nav aria-label="Page navigation example">-->
<!--                                <ul class="pagination">-->
<!--                                    <li class="page-item">-->
<!---->
<!--                                        <a class="page-link" href="class.php?page=--><?//=$first_page?><!--" aria-label="Previous">-->
<!--                                            <span aria-hidden="true">&laquo;</span>-->
<!--                                            <span class="sr-only">Previous</span>-->
<!--                                        </a>-->
<!---->
<!--                                    --><?php //for($i=1; $i<=$total_page; $i++){?>
<!--                                        <li class="page-item --><?php
//                                        if($i==$page)echo "active";
//                                        ?><!--"><a class="page-link" href="class.php?page=--><?//=$i?><!--">--><?//=$i?><!-- </a></li>-->
<!--                                    --><?php //}?>
<!---->
<!--                                        <a class="page-link" href="class.php?page=--><?//=$last_page?><!--" aria-label="Next">-->
<!--                                            <span aria-hidden="true">&raquo;</span>-->
<!--                                            <span class="sr-only">Next</span>-->
<!---->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </nav>-->
<!--                        </div>-->

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
                <!--    data table-->
                <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>





                <!-- 修改 -->
                <div class="modal fade" id="edit_member" tabindex="-1" role="dialog"
                     aria-labelledby="edit_memberTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="container-fluid" style="padding-bottom: 3rem">

                                <!-- Page Heading -->

                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">修改課程</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>



                                <form action="update_edit_class.php" method="post">

                                    <div class="form-group col-9">
                                        <label for="class_id">課程編號</label>
                                        <input type="text" class="form-control" id="class_id"  value=" " name="class_id"
                                               placeholder="課程名稱" readonly >
                                    </div>


                                    <div class="form-group col-9">
                                        <label for="class_name">課程名稱</label>
                                        <input type="text" class="form-control" id="class_name"  value=" " name="class_name"
                                               placeholder="課程名稱" required>
                                    </div>



                                    <div class="form-group col-6">
                                        <label for="class_teacher">課程老師</label>
                                        <input type="text" class="form-control" id="class_teacher" name="class_teacher" value=" "
                                               placeholder="課程老師" required>
                                    </div>

                                    <div class="form-group col-16 class_type">
                                        <label for="class_type "  required>類型</label>
                                        <br>

                                        <label><input type="checkbox"  id="class_type"  name="class_type[]"  value="人像"  >人像</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]"  value="風景" >風景</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]"   value="影像編輯" >影像編輯</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]"    value="物品" >物品</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]"    value="手機" >手機</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]" value="底片沖洗" >底片沖洗</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]"    value="居家" >居家</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]"  value="空拍" >空拍</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]"   value="雨天" >雨天</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]"    value="室內" >室內</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]"  value="商品" >商品</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]"   value="商業攝影" >商業攝影</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]"   value="vlog" >vlog</label>
                                        <label><input type="checkbox"  id="class_type" name="class_type[]"  value="其他" >其他</label>

                                    </div>

                                    <div class="form-group col-16">
                                        <label for="class_content">課程內容</label>
                                        <textarea type="textarea"  class="form-control " id="class_content"  name="class_content" value=" "
                                                  placeholder="課程內容"  required></textarea>

                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-6">
                                            <label for="class_open_num">開課人數</label>
                                            <input type="number" class="form-control" id="class_open_num" name="class_open_num" value=" "
                                                   placeholder="1"  min="1" required>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="class_price">價格</label>
                                            <input type="number" class="form-control" id="class_price" name="class_price" value=" "
                                                   placeholder="$$$"   min="0" required>
                                        </div>

                                    </div>
                                    <div class="form-group ">
                                        <label for="class_date">課程時間</label>
                                        <div class="form-group row d-flex justify-content-around">
                                            <div class="form-group  ">
                                                <select class="custom-select mr-sm-2  " id="class_week" name="class_week" required>
                                                    <option selected >選擇</option>
                                                    <option value="每周一"  name="class_week" id="class_week">每周一</option>
                                                    <option value="每周二" name="class_week" id="class_week">每周二</option>
                                                    <option value="每周三"  name="class_week" id="class_week">每周三</option>
                                                    <option value="每周四"  name="class_week" id="class_week">每周四</option>
                                                    <option value="每周五"  name="class_week" id="class_week">每周五</option>
                                                    <option value="每周六"  name="class_week" id="class_week">每周六</option>
                                                    <option value="每周日" name="class_week" id="class_week">每周日</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-6 ">
                                                <input type="time" class="form-control" id="class_time_s" name="class_time_s"  value=" " required>
                                                <div class="text-center">
                                                    到
                                                </div>
                                                <input type="time" class="form-control " id="class_time_e"  name="class_time_e"  value=" " required>

                                            </div>


                                        </div>



                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-3">
                                            <label for="class_times">課堂次數</label>
                                            <input type="number" class="form-control" id="class_times"  name="class_times"
                                                   placeholder=""  min="1"  required>
                                        </div>
                                        <div class="form-group col-9">
                                            <label for="class_place">課程地點</label>
                                            <input type="text" class="form-control" id="class_place" name="class_place"
                                                   placeholder="課程地點"   required>
                                        </div>

                                    </div>
                                    <div class="form-group col-16 class_item">
                                        <label for="class_item">自備器材</label>
                                        <br>
                                        <div class=" form-group row col-12" required>
                                            <label><input type="checkbox"  id="class_item"  name="class_item[]" value="單眼相機" >單眼相機</label>
                                            <label><input type="checkbox"  id="class_item" name="class_item[]" value="數位相機">數位相機</label>
                                            <label><input type="checkbox"  id="class_item" name="class_item[]" value="手機">手機</label>
                                            <label><input type="checkbox"  id="class_item" name="class_item[]" value="類單眼相機">類單眼相機</label>
                                            <label><input type="checkbox"  id="class_item" name="class_item[]" value="空拍機">空拍機</label>
                                            <label><input type="checkbox"  id="class_item" name="class_item[]" value="腳架">腳架</label>
                                            <label><input type="checkbox"  id="class_item" name="class_item[]" value="底片相機">底片相機</label>
                                            <!--                                                        <label><input type="checkbox"   name="class_item[]" value="相機">相機</label>-->

                                            <label><input type="checkbox"  id="class_item8" name="class_item[]" value="其他:"></label>其他:


                                            <input type="text" class="form-control form-control-sm  col-4" id="class_item"
                                                   placeholder="" name="class_item[]">

                                        </div>



                                    </div>
                                    <div class="form-group col-6  row">
                                        <label for="class_deadline_date">課程報名截止時間</label>
                                        <input type="date" class="form-control" id="class_deadline_date" name="class_deadline_date"
                                               placeholder="" required>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-6">
                                            <label for="class_start_date">課程起始時間</label>
                                            <input type="date" class="form-control" id="class_start_date" name="class_start_date"
                                                   required>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="class_end_date">課程起迄時間</label>
                                            <input type="date" class="form-control" id="class_end_date" name="class_end_date"
                                                   required>
                                        </div>
                                        <!--                                                    <div class="form-group col-6">-->
                                        <!--                                                        <label for="class_change_date">修改時間</label>-->
                                        <!--                                                        <input type="date" class="form-control" id="class_change_date" name="class_change_date"-->
                                        <!--                                                               required>-->
                                        <!--                                                    </div>-->
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-success mr-2" value="確認">
                                            <input type="reset" class="btn btn-secondary" value="取消">
                                        </div>
                                </form>



                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>
            <!--刪除-->
                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">確定要刪除嗎?</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <!-- <div class="modal-body">
                                  
                                </div> -->
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                                  <button type="button" class="btn btn-warning" onclick="deleteclass()">刪除</button>
                                </div>
                              </div>
                            </div>
                          </div>

            <!--刪除全部-->
            <div class="modal fade" id="deleteAll" tabindex="-1" role="dialog" aria-labelledby="deleteAll" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="">確定要刪除嗎?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="m-4 justify-content-end d-flex">
                            <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">取消</button>
                            <button type="submit" class="btn btn-danger" data-dismiss="modal" onclick="deleteAll()">刪除</button>
                        </div>
                    </div>
                </div>
            </div>


            <!--檢視課程資訊-->
            <div class="modal fade" id="inspect_class" tabindex="-1" role="dialog" aria-labelledby="inspect_class" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="">檢視課程資訊</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid" style="padding-bottom: 3rem">
                                <div id="inspect_id"></div>
                                <div id="inspect_name"></div>
                                <div id="inspect_teacher"></div>
                                <div id="inspect_type"></div>
                                <div id="inspect_content"></div>
                                <div id="inspect_open_num"></div>
                                <div id="inspect_price"></div>
                                <div id="inspect_classtime"></div>
                                <div id="inspect_times"></div>
                                <div id="inspect_place"></div>
                                <div id="inspect_item"></div>
                                <div id="inspect_deadline_date"></div>
                                <div id="inspect_start_date"></div>
                                <div id="inspect_end_date"></div>
                                <div id="inspect_add_date"></div>
                                <div id="inspect_change_date"></div>
                            </div>
                        </div>
<!--                        <div class="m-4 justify-content-end d-flex">-->
<!--                            <button type="submit" class="btn btn-info mx-2" data-dismiss="modal" data-toggle="modal"-->
<!--                                    data-target="#edit_member" onclick="smCheck()">編輯</button>-->
<!--                            <button type="submit" class="btn btn-warning mx-2" data-dismiss="modal" data-toggle="modal"-->
<!--                                    data-target="#delete" onclick="smDelete()">刪除</button>-->
<!--                            <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal" >取消</button>-->
<!---->
<!---->
<!--                        </div>-->


                    </div>
                </div>
            </div>



<!--            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
            <script>
                $(document).ready(function() {
                    $('#table1').DataTable();
                } );



                function do_login(id){
                    let  strid=id.toString();
                    // let  class_id=document.getElementById(strid).innerHTML;
                    console.log(strid);
                    // alert(id)
                    // return;

                    var test;
                    $.ajax(
                        {
                            method:"POST",
                            url:"edit_class.php",
                            dataType:"json",
                            data:{
                                class_id : strid
                            }
                        }
                    )
                    .done(function( response ) {
                        console.log(response);
                        test = response;
                        document.getElementById("class_id").value = test["class_id"];
                        document.getElementById("class_name").value = test["class_name"];
                        document.getElementById("class_teacher").value = test["class_teacher"];


                        let typeArr=test["class_type"].split("、");
                        $(".class_type :checkbox").each(function(){
                            // console.log($(this).val())
                            let valueType=$(this).val();
                            if(typeArr.includes(valueType)){
                                $(this).prop("checked", true)
                            }else{
                                $(this).prop("checked", false)
                            }
                        })

                        document.getElementById("class_content").value=test["class_content"];
                        document.getElementById("class_open_num").value=test["class_open_num"];
                        document.getElementById("class_price").value=test["class_price"];
                        document.getElementById("class_week").value=test["class_week"];
                        document.getElementById("class_time_s").value=test["class_time_s"];
                        document.getElementById("class_time_e").value=test["class_time_e"];
                        document.getElementById("class_times").value=test["class_times"];
                        document.getElementById("class_place").value=test["class_place"];
                        // document.getElementsByName("class_item[]").value=test["class_item"];

                        let itemArr2=test["class_item"].split(",");
                        $(".class_item :checkbox").each(function(){
                            // console.log($(this).val())
                            let valueItem=$(this).val();
                            if(itemArr2.includes(valueItem)){
                                $(this).prop("checked", true)
                            }else{
                                $(this).prop("checked", false)
                            }
                        })

                        document.getElementById("class_deadline_date").value=test["class_deadline_date"];
                        document.getElementById("class_start_date").value=test["class_start_date"];
                        document.getElementById("class_end_date").value=test["class_end_date"];

                        // document.getElementById("class_change_date").value=test["class_change_date"];



                    }).fail(function (jqXHR,textStatus){
                        console.log("Request failed: " + textStatus) ;
                    });
                }
                var delID
                function askDelete(id2){
                    delID = id2.toString();
                    // delID =document.getElementById(strId2).innerHTML;
                    // console.log(delID)
                }
                function deleteclass(){
                    console.log(delID)
                    $.ajax({
                        method: "POST",
                        url: "delete_class.php",
                        // dataType: "json",
                        data: { delID : delID
                        }
                    })
                        .done(function(response) {
                            alert('刪除課程成功');
                            window.location.replace(location.href);

                        }).fail(function( jqXHR, textStatus ) {
                        console.log( "Request failed: " + textStatus );
                    });
                }

                var selected = [];
                var total;
                function select_all(classes,selectClass){
                    // alert("hello")
                    let checkboxs = document.getElementsByName(selectClass);
                    let all = document.getElementById("selected_all");
                    console.log(checkboxs);
                    if (all.checked){
                        for(var i=0;i<checkboxs.length;i++){
                            checkboxs[i].checked = classes.checked;
                            console.log(checkboxs[i].id)
                            if(selected.includes(checkboxs[i].id)){
                                selected = selected.filter(function(item) {
                                    return item != checkboxs[i].id
                                });

                            }else{
                                selected[i] = checkboxs[i].id;

                            }
                        }
                    }else{
                        for(var i=0;i<checkboxs.length;i++){
                            checkboxs[i].checked = classes.checked;
                            console.log(checkboxs[i].id)
                            if(selected.includes(checkboxs[i].id)){
                                selected = selected.filter(function(item) {
                                    return item!=checkboxs[i].id
                                });
                            }}
                        selected = [];
                    }

                    console.log(selected)
                }
                function select(selectedId){
                    console.log(selectedId);
                    let selectedClass= document.getElementById(selectedId);
                    console.log(selectedClass)
                    if (selectedClass.checked){
                        selected.push(selectedId);

                    }else{

                        var index = selected.indexOf(selectedId);
                        selected = selected.filter(function(item) {
                            return item != selectedId
                        });
                    }
                    console.log(selected)


                }



                var inspectId
                function inspect(id){
                    inspectId = id.toString();
                    console.log(inspectId)

                    var ins;
                    $.ajax({
                        method: "POST",
                        url: "View_class.php",
                        dataType: "json",
                        data: { class_id : inspectId }
                    })
                        .done(function(response) {
                            console.log(response);
                            ins = response;
                            console.log(ins["name"]);
                            document.getElementById("inspect_id").innerHTML="課程編號 : "+ins['id'];
                            document.getElementById("inspect_name").innerHTML="課程名稱 : "+ins['name'];
                            document.getElementById("inspect_teacher").innerHTML="課程老師 : "+ins['teacher'];
                            document.getElementById("inspect_type").innerHTML="類型 : "+ins['type'];
                            document.getElementById("inspect_content").innerHTML="課程內容 : "+ins['content'];
                            document.getElementById("inspect_open_num").innerHTML="開課人數 : "+ins['open_num']+'人';
                            document.getElementById("inspect_price").innerHTML="價格 : $ "+ins['price'];
                            document.getElementById("inspect_classtime").innerHTML="課程時間 : "+ins['class_week']+ins['class_time_s']+'到'+ins['class_time_e'];
                            document.getElementById("inspect_times").innerHTML="課堂次數 : "+ins['times']+'堂';
                            document.getElementById("inspect_place").innerHTML="課程地點 : "+ins['place'];
                            document.getElementById("inspect_item").innerHTML="自備器材 : "+ins['item'];
                            document.getElementById("inspect_deadline_date").innerHTML="課程報名截止時間 : "+ins['deadline_date'];
                            document.getElementById("inspect_start_date").innerHTML="課程起始時間 : "+ins['start_date'];
                            document.getElementById("inspect_end_date").innerHTML="課程起訖時間 : "+ins['end_date'];
                            document.getElementById("inspect_add_date").innerHTML="新增時間 : "+ins['add_date'];
                            document.getElementById("inspect_change_date").innerHTML="修改時間 : "+ins['change_date'];




                        }).fail(function( jqXHR, textStatus ) {
                        console.log( "Request failed: " + textStatus );
                    });

                }

                // function checkUser(id){
                //     console.log(id)
                //     let strId = id.toString();
                //     console.log(strId)



                // function smCheck(){
                //     console.log(inspectId);
                //     do_login(inspectId);
                // }
                //
                // function smDelete(){
                //     console.log(inspectId);
                //     delID=inspectId
                //     // console.log(delID);
                // }






                function deleteAll(){
                    console.log(selected)
                    $.ajax({
                        method: "POST",
                        url: "batch_deletion_class.php",
                        // dataType: "json",
                        data: { deleteAllID : selected
                        }
                    })
                        .done(function(response) {
                            console.log(response)
                            window.location.replace(location.href);



                        }).fail(function( jqXHR, textStatus ) {
                        console.log( "Request failed: " + textStatus );
                    });
                }



                </script>

</body>


</html>