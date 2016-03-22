<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'head.php';
    ?>
</head>
<body>
    <div data-role="page" id="detail">
        <div data-role="header" data-position="fixed" data-tap-toggle="false" class="header-bar"> 
            <a href="#" class="ui-btn-left ui-btn ui-btn-up-b ui-btn-icon-left ui-btn-corner-all ui-shadow" data-rel="back" data-icon="arrow-l" data-corners="true" data-shadow="true" data-iconshadow="true" data-inline="false" data-wrapperels="span">
                <span class="ui-btn-inner ui-btn-corner-all">
                    <i class="fa fa-chevron-left"></i>
                </span>
            </a>
            <h1 id="#schueler-name">Schüler</h1>
        </div>
        <div data-role="content" id="detail-content-wrapper">
            <div id="portrait-wrapper">
                <div id="portrait-img-bg"></div>
                <div id="portrait-border"></div>
                <div id="portrait-img"></div>
            </div>
            <ul id="detail-content-nav">
                <li id="detail-description" class="active">
                    <i class="fa fa-list-ul"></i>
                </li>
                <li id="detail-phone">
                    <i class="fa fa-phone"></i>
                </li>
                <li id="detail-maps">
                    <i class="fa fa-map-marker"></i>
                </li>
                <li id="detail-contact">
                    <i class="fa fa-envelope"></i>
                </li>
            </ul>
            <div id="detail-description-content">
                <div id="schueler-data"></div>
                <h4>Fächer:</h4>
                <ul id="schueler-faecher"></ul>
            </div>
            <div id="detail-phone-content">
                <h4>Erreichbar unter</h4>
                <div id="schueler-phone"></div>
            </div>
            <div id="detail-maps-content">
                <h4>Wohnort</h4>
                <div id="schueler-maps">
                    <div id="map"></div>
                </div>
            </div>
            <div id="detail-contact-content">
                <h4>E-Mail-Adresse</h4>
                <div id="schueler-contact"></div>
            </div>
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
        <script type="text/javascript" src="_resources/js/detail.min.js"></script>
    </div>
</body>
</html>