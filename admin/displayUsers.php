<?php
    session_start();
    include_once('../connect.php');
    include_once('../functions.php');
    include_once('../dbconn.class.php');

    //--------------------------------------------------

    require('./includes/header.php');



$orderBy=(!empty($_GET['orderBy']))?$_GET['orderBy']:"subscriptionStartDate";
$dir = "DESC";
$nextDir = 'ASC';

if(!empty($_GET['dir'])) {
	$dir = $_GET['dir'];
	$nextDir = ($dir=='ASC')?'DESC':'ASC';
}

/* $db = '$connection()'; */
$sql = 'SELECT userID, firstName, lastName, username FROM bm_users';
$users = mysqli_query($connection, $sql) or die(mysqli_error($connection));

?>


<body>
    <!-- ***************** TITLE BAR ***************** -->
    <div class="bm-breadcrumb">
        <div class="row bm-row-fixed">
            <button type="button" id="sidebarCollapse" class="btn bm-nav-toggle-btn">
                <i class="fa fa-align-left" title="Open Menu"></i>
            </button>
            <h3>Users</h3>
            <div id="signout-widget">
                <button id="signOut" title="Sign Out">
                    <div class="signout__tile">
                        <img class="signout__icon" src="../img/sign-out.png">
                        <p class="signout__label">Sign Out</p>
                    </div>
                </button>
              </div>
        </div>
    </div>
    
    <div class="bm-page-container" id="displayUsers-page">
        <div class="bm-datatable row">
                
                <?php
                    while($row = mysqli_fetch_array($users, MYSQLI_ASSOC)) {
                        echo '<div class="bm-datatable__row col-lg-12">';
                            echo '<div class="bm-databit col-lg-3">';
                                echo '<h6>ID</h6><a href=""><h4>';
                                    echo $row['userID'];
                                echo '</h4></a>';
                            echo '</div>';
                            echo '<div class="bm-databit col-lg-3">';
                                echo '<h6>First Name</h6><a href=""><h4>';
                                    echo $row['firstName'];
                                echo '</h4></a>';
                            echo '</div>';
                            echo '<div class="bm-databit col-lg-3">';
                                echo '<h6>Last Name</h6><a href=""><h4>';
                                    echo $row['lastName'];
                                echo '</h4></a>';
                            echo '</div>';
                            echo '<div class="bm-databit col-lg-3">';
                                echo '<h6>Username</h6><a href=""><h4>';
                                    echo $row['username'];
                                echo '</h4></a>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>

            <div class="datatable__filter-options row">
                    <div class="col-lg-6 offset-lg-3">
                        <div id="bm-pagination">
                            <nav aria-label="page navigation">
                              <ul class="pagination justify-content-center btn-group">
                                <!-- <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li> -->
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item "><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link bm-pagination-right" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <span class="">
                        <label for="status" class="switch">
                            <input type="checkbox" name="status" id="status" value="1">
                            <span class="slider round"></span>
                            <div class="bm-input__label" style="cursor: pointer;">Include Inactive Users</div>
                        </label>
                        </span>
                    </div>
            </div>

        </div>
    
    </div>

        <div class="">
            <div class="bm-action-sidebar">
            <div class="row">
                <div class="col-lg-10">
                    <button class="bm-btn" id="" name="submit">Add New User</button>
                    <div class="input-group">
                        <input type="text" class="form-control bm-input__text" placeholder="Search" aria-describedby="basic-addon1">
                        <span class="input-group-addon" id="basic-addon1"><img src="../img/icon/search-dark.png"></span>
                    </div>
                </div>
            </div>
            </div>
        </div>

<?php
    require('./includes/global-nav.php');
    require('../includes/copyright-footer.php');
    require('./includes/footer-scripts.php');
?>
    
</body>
</html>
