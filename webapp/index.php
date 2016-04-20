<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'head.php';
    ?>
</head>
<body>
    <div data-role="page" id="list">
        <div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-bar"> 
            <h1>Startseite</h1>
        </div>
        <div data-role="content" id="index-content">
            <img src="_resources/img/muenchen-wappen.svg">
            <h1>Druck- und Medientechniker/in</h1>
        </div>
        <nav id="navbar">
            <ul>
                <li class="active">
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
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
    </div>
</body>
</html>