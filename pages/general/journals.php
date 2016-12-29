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
    <?php
         session_start(); 
         if(!$_SESSION['auth']) { 
          header('location:../general/logout.php'); 
         }
    ?>
    <?php
        if($_SESSION['role']=='user') {
            echo "<nav class='page-sidebar' data-pages='sidebar'>
              <div class='sidebar-header'>
                  <span class='sidebar-title-header'><b>eLIBRARY</b></span>
                  <button type='button' class='btn btn-link visible-lg-inline' data-toggle-pin='sidebar'><i class='fa fs-12'></i>
                  </button>
              </div>
              <div class='sidebar-menu'>
                <ul class='menu-items'>
                  <li class='m-t-30'>
                    <a href='../user/book.php'>
                        <span class='title'>Book List</span>
                    </a>
                    <span class='icon-thumbnail'><i class='pg-social'></i></span>
                  </li>
                    <li class=''>
                    <a href='../user/borrow.php'>
                        <span class='title'>Borrowing History</span>
                    </a>
                    <span class='icon-thumbnail'><i class='pg-form'></i></span>
                  </li>
                  <li class=''>
                    <a href='journals.php'><span class='title'>Download Journals</span></a>
                    <span class='icon-thumbnail'><i class='pg-bag'></i></span>
                  </li>
                </ul>
                <div class='clearfix'</div>
              </div>
            </nav>";
        }
        else {
            echo "<nav class='page-sidebar' data-pages='sidebar'>
              <div class='sidebar-header'>
                  <span class='sidebar-title-header'><b>eLIBRARY</b></span>
                  <button type='button' class='btn btn-link visible-lg-inline' data-toggle-pin='sidebar'><i class='fa fs-12'></i>
                  </button>
              </div>
              <div class='sidebar-menu'>
                <ul class='menu-items'>
                  <li class='m-t-30'>
                    <a href='../admin/books.php'>
                        <span class='title'>Book List</span>
                    </a>
                    <span class='icon-thumbnail'><i class='pg-social'></i></span>
                  </li>
                  <li class=''>
                    <a href='../admin/member.php'>
                        <span class='title'>Member List</span>
                    </a>
                    <span class='icon-thumbnail'><i class='fa fa-list-ul'></i></span>
                  </li>
                  <li class=''>
                    <a href='../admin/admList.php'>
                        <span class='title'>Administrator List</span>
                    </a>
                    <span class='icon-thumbnail'><i class='fa fa-list-ul'></i></span>
                  </li>
                  <li class=''>
                    <a href='journals.php'><span class='title'>Download Journals</span></a>
                    <span class='icon-thumbnail'><i class='pg-bag'></i></span>
                  </li>
                </ul>
                <div class='clearfix'></div>
              </div>
            </nav>";   
        }
    ?>
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
                <?php
                    if($_SESSION['role']=='user') {
                        echo "<span class='thumbnail-wrapper d32 inline m-t-5'>
                        <a href='../user/usr.php'><i class='pg-home size-header'></i></a>
                        </span>";
                    }
                    else {
                        echo "<span class='thumbnail-wrapper d32 inline m-t-5'>
                        <a href='../admin/adm.php'><i class='pg-home size-header'></i></a>
                        </span>";
                    }
                ?>
                <span class="thumbnail-wrapper d32 inline m-t-5">
                    <a href="../general/news.php"><i class="fa fa-newspaper-o size-header"></i></a>
                </span>
                <?php
                    if($_SESSION['role']=='user') {
                        echo "<span class='thumbnail-wrapper d32 inline m-t-5'>
                        <a href='../user/usr.php'><i class='pg-mail size-header'></i></a>
                        </span>";   
                    }
                    else {
                        echo "<span class='thumbnail-wrapper d32 inline m-t-5'>
                        <a href='../admin/adm.php'><i class=' fa fa-bell size-header'></i></a>
                        </span>";  
                    }
                    ?>
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
              <h1 class="text-center header-of-page">Free Journals</h1>
              <a target="_blank" href="../../files/JOURNAL1.pdf">
                <div class="content-item">
                  <h4><b>Journal 1</b></h4>
                  <h5>Writer 1</h5>
                  <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                        mollit anim id est laborum.  
                  </p>
                </div>
              </a>
              <a target="_blank" href="../../files/JOURNAL2.pdf">
                <div class="content-item">
                  <h4><b>Journal 2</b></h4>
                  <h5>Writer 2</h5>
                  <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam 
                        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur 
                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia 
                        dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
                        dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
                        suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in 
                        ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                    </p>	
                </div>
              </a>
              <a target="_blank" href="../../files/JOURNAL3.pdf">
                <div class="content-item">
                  <h4><b>Journal 3</b></h4>
                  <h5>Writer 3</h5>
                  <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                        quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt 
                        in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem 
                        rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio 
                        cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas 
                        assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut 
                        rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. 
                        Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias 
                        consequatur aut perferendis doloribus asperiores repellat.
                    </p>
                </div>
              </a>
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