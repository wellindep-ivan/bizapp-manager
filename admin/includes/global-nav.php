    <!-- ***************** GLOBAL NAVIGATION MENU ***************** -->
    <div class="bm-nav-wrapper">
        <nav id="sidebar">
            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <a href="dashboard.php"><img src="../img/nav-top-logo.png"></a>
                <div id="content">
                    <button type="button" id="dismiss" class="btn bm-nav-dismiss-btn">
                        <i class="fa fa-window-close-o" title="Close Menu"></i>
                    </button>
                </div>
            </div>
            <!-- User Currently Logged In -->
    <!-- NEED TO ADD PHP TO CALL CURRENT USERNAME -->
            <div id="current-user">Signed in as <?php echo $_SESSION["username"]; ?></div>

            <!-- Sidebar Links -->
            <ul id="sidebar-navigation" class="list-unstyled components">
                <li><a href="#usersSubmenu" data-toggle="collapse" data-parent="#sidebar-navigation" aria-expanded="false"><img class="nav-item-icon" src="../img/icon/users.png">Users</a>
                <ul class="collapse list-unstyled" id="usersSubmenu">
                    <li><a href="displayUsers.php">Users</a><div class="menu__subitem"></div></li>
                    <li><a href="displayUserGroups.php">User Groups</a></li>
                </ul></li>
                <li><a href="#appContentSubmenu" data-toggle="collapse" data-parent="#sidebar-navigation" aria-expanded="false"><img class="nav-item-icon" src="../img/icon/content.png">App Content</a>
                <ul class="collapse list-unstyled" id="appContentSubmenu">
                    <li><a href="displayContentBundles.php">Content Bundles</a><div class="menu__subitem"></div></li>
                    <li><a href="displayContentLibraries.php">Content Libraries</a><div class="menu__subitem"></div></li>
                    <li><a href="displayMediaItems.php">Media Items</a><div class="menu__subitem"></div></li>
                    <li><a href="displayPresentations.php">Presentations</a><div class="menu__subitem"></div></li>
                    <li><a href="displayTickerCopy.php">Ticker Copy</a></li>
                </ul></li>
                <li><a href="displayNotifications.php"><img class="nav-item-icon" src="../img/icon/notifications.png">User Notifications</a></li>
                <li><a href="displayDripMarketing.php"><img class="nav-item-icon" src="../img/icon/drip.png">Drip Marketing</a></li>
                <li><a href="#customSettingsSubmenu" data-toggle="collapse" data-target="#customSettingsSubmenu" data-parent="#sidebar-navigation" aria-expanded="false"><img class="nav-item-icon" src="../img/icon/settings.png">Custom Settings</a>
                <ul class="collapse list-unstyled" id="customSettingsSubmenu">
                    <li><a href="displayCustomURLs.php">Custom URLs</a><div class="menu__subitem"></div></li>
                    <li><a href="displayHomePages.php">Home Page Configurations</a><div class="menu__subitem"></div></li>
                    <li><a href="displaySideMenus.php">Side Menu Configurations</a><div class="menu__subitem"></div></li>
                    <li><a href="displaySocialMediaLinks.php">Social Media Links</a><div class="menu__subitem"></div></li>
                    <li><a href="displayGoals.php">Goals</a></li>
                </ul></li>
                <div id="restrictedSettings">
                    <li><a href="#restrictedSettingsSubmenu" data-toggle="collapse" aria-expanded="false"><img class="nav-item-icon" src="../img/icon/warning.png">Red Mat Only</a>
                    <ul class="collapse list-unstyled" id="restrictedSettingsSubmenu">
                        <li><a href="usageStatistics.php">Usage Statistics</a><div class="menu__subitem"></div></li>
                        <li><a href="displayPresets.php">Presets</a><div class="menu__subitem"></div></li>
                        <li><a href="displayButtonConfigurations.php">Button Configurations</a></li>
                    </ul></li>
                </div>
            </ul>
        </nav>
        <div class="overlay"></div>
    </div>