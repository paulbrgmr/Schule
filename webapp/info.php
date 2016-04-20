<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'head.php';
    ?>
</head>
<body>
    <div data-role="page" id="info">
        <div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-bar"> 
            <h1>Info</h1>
        </div>
        <div data-role="content" id="info-content">
            <h2>Fächer</h2>
            <div id="faecher-list"></div>
            <h2>Module</h2>
            <div id="module-list"></div>
        </div>
        <nav id="navbar">
            <ul>
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="list.php">
                        <i class="fa fa-users"></i>
                    </a>
                </li>
                <li class="active">
                    <a href="info.php">
                        <i class="fa fa-info"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <script type="text/javascript" src="_resources/js/info.min.js"></script>
    </div>
</body>
</html>