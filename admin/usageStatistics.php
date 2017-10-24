<?php
    session_start();
    require_once('../connect.php');

    //--------------------------------------------------

    require('./includes/header.php');
?>


<body>

    <!-- ***************** TITLE BAR ***************** -->
    <div class="container-fluid" id="dashboard-page">
        <div class="bm-breadcrumb">
            <div class="row bm-row-fixed">
                <button type="button" id="sidebarCollapse" class="btn bm-nav-toggle-btn">
                    <i class="fa fa-align-left" title="Open Menu"></i>
                </button>
                <h3>Usage Statistics</h3>
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
    </div>

<?php
    require('./includes/global-nav.php');
    require('../includes/copyright-footer.php');
    require('./includes/footer-scripts.php');
?>
    
</body>
</html>
