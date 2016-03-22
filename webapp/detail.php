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
                <!-- <span class="ui-btn-text">Zurück</span> -->
                <!-- <span class="ui-icon ui-icon-arrow-l ui-icon-shadow"></span> -->
            </span>
        </a>
        <!-- <a href="index.html" data-role="button" data-icon="home" data-iconpos="notext">Dieser Text wird nicht angezeigt</a> -->
        <!-- <h1 id="#schueler-name"></h1> -->
        <h1>Schüler</h1>
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
                <!-- AIzaSyBFa7B8yjd8stBbcGF5Ir3_wfjRL2nHoZM -->
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
    <!--
    <script type="text/javascript">
        function initMap() {
            var myLatLng = {lat: 48.135125, lng: 11.581981};

            var map = new google.maps.Map($('#map'), {
                zoom: 4,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFa7B8yjd8stBbcGF5Ir3_wfjRL2nHoZM&callback=initMap"></script>
    -->
</div>
</body>
</html>