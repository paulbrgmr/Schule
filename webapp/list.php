<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'head.php';
    ?>
</head>
<body>
    <div data-role="page" id="list">
        <div data-role="header" data-position="fixed" data-tap-toggle="false" id="header-bar" class="header-bar"> 
            <h1>Unsere Absolventen</h1>
        </div>
        <div data-role="content" id="list-content">
            <ul id="schuelerList" data-role="listview" data-filter="true" data-filter-placeholder="Absolventen durchsuchen" data-inset="true">
            </ul>
        </div>
        <nav id="navbar" data-role="footer" data-id="footernav" data-tap-toggle="true" data-position="fixed">
            <ul>
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li class="active">
                    <a href="list.php">
                        <i class="fa fa-users"></i>
                    </a>
                </li>
                <li>
                    <a href="info.php">
                        <i class="fa fa-info"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <script type="text/javascript" src="_resources/js/list.min.js"></script>
    </div>
</body>
</html>