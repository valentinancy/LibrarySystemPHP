<!DOCTYPE html>
<html>
  <head>
    <title>eLibrary</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="../../style/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../style/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../style/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../style/pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="../../style/favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="../../style/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
      <link href="../../style/style.css" rel="stylesheet" type="text/css" />
    <link href="../../style/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../lib/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../../style/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../../style/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../style/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../style/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../style/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="../../style/pages/css/pages.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="fixed-header ">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <?php
             session_start(); 
             if(!$_SESSION['role']=='admin') { 
              header('location:../general/logout.php'); 
             }
        ?>
      <div class="sidebar-header">
          <span class="sidebar-title-header"><b>eLIBRARY</b></span>
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30">
            <a href="books.php">
                <span class="title">Book List</span>
            </a>
            <span class="icon-thumbnail"><i class="pg-social"></i></span>
          </li>
          <li class="">
            <a href="member.php">
                <span class="title">Member List</span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-list-ul"></i></span>
          </li>
          <li class="">
            <a href="admList.php">
                <span class="title">Administrator List</span>
            </a>
            <span class="icon-thumbnail"><i class="fa fa-list-ul"></i></span>
          </li>
          <li class="">
            <a href="../general/journals.php"><span class="title">Download Journals</span></a>
            <span class="icon-thumbnail"><i class="pg-bag"></i></span>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <div class="container-fluid relative">
          <!-- LEFT SIDE -->
          <div class="pull-left full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
                <span class="icon-set menu-hambuger"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
          <div class="pull-center hidden-md hidden-lg">
            <div class="header-inner">
              <div class="brand inline">
                <h3>eLIBRARY</h3>
              </div>
            </div>
          </div>
          <!-- RIGHT SIDE -->
          <div class="pull-right full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                <span class="icon-set menu-hambuger-plus"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table hidden-xs hidden-sm">
          <div class="header-inner">
            <div class="brand inline">
              <h4><b>eLibrary</b></h4>
            </div>
            <?php
                // Create connection
                $conn = mysqli_connect("localhost","root","","elibrary");
                $query = "select nama from anggota where username = '".$_SESSION['uname']."'";
                $result = mysqli_query($conn,$query);
                if (! $result){
                   throw new My_Db_Exception('Database error: ' . mysql_error());
                }

                while($row = $result->fetch_assoc()){
                  echo "<span  class='semi-bold'>You are logged in as " . $row['nama'] . "</span>";
                }  
            ?>
          </div>
        </div>
        <div class=" pull-right">
          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">
            <div class="dropdown pull-right">
                <span class="thumbnail-wrapper d32 inline m-t-5">
                    <a href="adm.php"><i class="pg-home size-header"></i></a>
                </span>
                <span class="thumbnail-wrapper d32 inline m-t-5">
                    <a href="../general/news.php"><i class="fa fa-newspaper-o size-header"></i></a>
                </span>
                <span class="thumbnail-wrapper d32 inline m-t-5">
                    <a href="adm.php"><i class="fa fa-bell size-header"></i></a>
                </span>
                <span class="thumbnail-wrapper d32 inline m-t-5">
                    <a href="../general/profile.php"><i class="fa fa-user size-header"></i></a>
                </span>
                <span class="thumbnail-wrapper d32 inline m-t-5">
                    <a href="../general/logout.php"><i class="fa fa-sign-out size-header"></i></a>
                </span>
            </div>
          </div>
          <!-- END User Info-->
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
              <h1 class="text-center header-of-page">Administrator List</h1>
              <?php  
                        if($_GET) {
                            $username=$_GET['username'];
                            $nama=$_GET['name'];
                            $alamat=$_GET['address'];
                            $notelp=$_GET['phone'];
                            $conn=mysqli_connect("localhost","root","","elibrary");
                            function generateCode($length=6){
                                    $characters = '0a1q2E3p4hbK56F7ec8L9idUMoxyNgzXAnBCwrfDYTGsvkHItJOhPQujmRlVWSZ';
                                    $charactersLength = strlen($characters);
                                    $randomString='';
                                    for($i=0;$i<$length;$i++){
                                        $randomString .= $characters[rand(0,$charactersLength-1)];
                                    }

                                    return $randomString;
                            }
                            $kode = generateCode();
                            $query="INSERT INTO `anggota` (Username, Password, Nama, No_telp, Alamat,Is_admin) VALUES ('$username', '$kode', '$nama', '$notelp', '$alamat','1')";

                            if (mysqli_query($conn, $query)) {
                                echo "<span><b>Administrator added, temporary password: " . $kode . ". Please change it immdiately</b></span>";
                            } else {
                                echo "Error: " . $query . "<br>" . mysqli_error($conn);
                            }
                                }
                            ?>
              <div class="panel panel-transparent">
                <form method="POST">
                  <div class="panel-heading">
                    <div class="form-group m-b-10 col-md-3">
                        <input type="text" name="search" placeholder="Search admin..." class="form-control">
                    </div>
                    <div class="col-md-1">
                        <span class="panel-title by-search text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;by</span>
                    </div>
                    <div class="col-md-3">
                          <div class="cs-wrapper">
                              <div class="cs-select cs-skin-slide" tabindex="0">
                                  <div class="cs-options" style="width: auto; overflow-y: hidden;">
                                      <ul>
                                          <li data-option="" data-value="sightseeing" class="cs-selected">
                                              <span>ID</span>
                                          </li>
                                          <li data-option="" data-value="business" class="">
                                              <span>Name</span>
                                          </li>
                                          <li data-option="" data-value="honeymoon" class="">
                                              <span>Phone</span>
                                          </li>
                                      </ul>
                                  </div>
                                  <select name="searchby" class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                    <option value="Id_anggota">ID</option>
                                    <option value="Nama">Name</option>
                                  </select>
                                  <div class="cs-backdrop" style="transform: scale3d(1, 1, 1);">
                                  </div>
                              </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <button class="btn btn-default btn-cons" type="submit">Search</button>
                        </div>
                    </div>
                  </div>
                </form>
                <button class="btn btn-success btn-cons" data-target="#myModal" data-toggle="modal">Add Administrator</button>     
                <div class="modal fade stick-up" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header clearfix text-left">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                          </button>
                          <h4 class="text-center">New Administrator</h4>
                        </div>
                        <div class="modal-body">
                          <form role="form" method="get">
                            <div class="form-group-attached">
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group form-group-default">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group form-group-default">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group form-group-default">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group form-group-default">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12 m-t-10 sm-m-t-10">
                                  <button type="submit" class="btn btn-primary btn-block m-t-5">Add Administrator</button>
                              </div>
                            </div>
                          </form>
                          
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
              </div>
              <div class="panel-body">
                <table class="table table-hover demo-table-dynamic" id="tableWithDynamicRows">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        
                     $user_name = "root"; 
                     $password = ""; 
                     $database = "elibrary"; 
                     $server = "localhost"; 

                     $db_handle = mysql_connect($server, $user_name, $password); 
                     $db_found = mysql_select_db($database, $db_handle); 
                        if($_POST) {
                            $search = $_POST['search'];
                            $searchby = $_POST['searchby'];
                            $db_handle = mysql_connect("localhost", "root", "");
                            $db_found = mysql_select_db("elibrary", $db_handle);

                            if ($db_found) {
                                $SQL = "SELECT Id_anggota, Nama, Alamat, No_telp FROM anggota WHERE ".$_POST['searchby']." LIKE '%".$_POST['search']."%'";
                                $result = mysql_query($SQL);
                                if (! $result){
                                   throw new My_Db_Exception('Database error: ' . mysql_error());
                                }
                                while ( $row = mysql_fetch_assoc($result) ) {
                                    echo "<tr>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Id_anggota'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Nama'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['No_telp'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Alamat'] . "</p>
                                                </td>
                                            </tr>";
                                }
                                mysql_close($db_handle);
                                }
                        }
                        else {
                            if ($db_found) { 
                              $SQL = "SELECT Id_anggota, Nama, No_telp, Alamat FROM anggota WHERE Is_admin = '1'";
                              $result = mysql_query($SQL); 

                              while ( $row = mysql_fetch_assoc($result) ) { 
                                    echo "<tr>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Id_anggota'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Nama'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['No_telp'] . "</p>
                                                </td>
                                                <td class='v-align-middle'>
                                                    <p>" . $row['Alamat'] . "</p>
                                                </td>
                                            </tr>";

                              } 

                              mysql_close($db_handle); 

                              } 
                            else {
                                echo "tidak ada";   
                            }
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END PLACE PAGE CONTENT HERE -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; 2016 </span>
              <span class="font-montserrat">Valentinancy & Vinieta</span>.
              <span class="hint-text">All rights reserved. </span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    
   
    <!-- BEGIN VENDOR JS -->
    <script src="../../style/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="../../style/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="../../style/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="../../style/assets/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="../../style/assets/plugins/classie/classie.js"></script>
    <script src="../../style/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="../../style/pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="../../style/assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>