<?php 
    include 'content.php';
?>

</div>
<div class="bg-wrapper">
    <div class="sql-bg-img bg-img">
        <h1 class="text-center bg-headline">SQL</h1>
    </div>
</div>
<div class="container">
    <div class="content-sql">
        <p>Um SQl zu verstehen reicht es nicht sich ausschließlich mit dieser Abfragesprache auseinanderzusetzen.</p>
        <p>Das Netz um SQL ist weitaus größer als man denkt, daher erst einmal die Theorie:</p>
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <hr class="primary">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p class="headline">Was ist eine <strong>Datenbank</strong>?</p>
                <p>Der Speicherort sämtlicher Daten auf einem physikalischen Datenträger. Die Art und Weise, wie diese Daten verwaltet werden, hängt vom Dateisystem und dem jeweiligen Datenbankmodell ab. </p>
            </div>
            <div class="col-md-4 col-md-offset-2">
                <p class="headline">Was ist ein <strong>Datenbankmanagement-System</strong>?</p>
                <p>Die Schnittstelle zwischen der Datenbank und der Kommunikationsschnittstelle zum Benutzer. <br> z.B MySQL</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p class="headline">Was ist eine <strong>Datenbank-Kommunikationsstelle</strong>?</p>
                <p>Sie erweitert das Datenbankmanagement-System, indem es Hilfen für Anfragen oder Einträge an die Datenbank sendet. <br> z.B. phpMyAdmin</p>
            </div>
            <div class="col-md-4 col-md-offset-2">
                <p class="headline">Was ist eine <strong>Datenbankmodellierung</strong>?</p>
                <p>Die Struktur einer Datenbank muss zunächst aufgestellt werden, indem Objekte mit ihren Eigenschaften und Beziehungen (Relationen) konzipiert werden. Daraus wird eine logische Datenstruktur abgeleitet. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <hr>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h3>Primärschlüssel</h3>
                <p>Dieser ist für die <strong>eindeutige Identifikation</strong> eines Datensatzes zuständig. 
Der Primärschlüssel besteht meist aus einem oder mehreren Attributen z.B. ID</p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h3>Fremdschlüssel</h3>
                <p>Dieser ist dafür zuständig <strong>Beziehungen zwischen Tabellen</strong> herzustellen. Zum Beispiel kann der Primäschlüssel ID in einer Tabelle aufgenommen werden um eine Verknüpfung beider herzustellen..</p>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
            <div class="col-xs-12">
                <h3>Beziehungen und Normalformen</h3>
                <p>Wir bewegen uns immer weiter hin zur praktischen Anwendung. 
Dafür sind die Beziehungen (Verbindungsarten zwischen Tabellen) und Normalformen (Vermeidung von Redundanzen) bei der Erstellung von Datenbanken sehr wichtig. 
Hier ein kleiner Überblick:</p>
            </div>
        </div>
        <div class="row erm">
            <div class="col-md-6">
                <img src="_resources/img/sql/1-1_beziehungen.jpg" class="img-responsive">
            </div>
            <div class="col-md-6 erm-text">
                <strong>1:1 Beziehung:</strong>
                <p>monogame Beziehungen, Datenfelder beziehen sich nur auf ein anderes.</p>
            </div>
        </div>
        <div class="row erm">
            <div class="col-md-6">
                <img src="_resources/img/sql/1-n_beziehungen.jpg" class="img-responsive">
            </div>
            <div class="col-md-6 erm-text">
                <strong>1:n Beziehung:</strong>
                <p>Ein Dtatenfeld bezieht sich auf mehrere andere. </p>
            </div>
        </div>
        <div class="row erm">
            <div class="col-md-6">
                <img src="_resources/img/sql/n-m_beziehungen.jpg" class="img-responsive">
            </div>
            <div class="col-md-6 erm-text">
                <strong>n:m Beziehung:</strong>
                <p>Mehrere Datenfelder beziehen sich auf mehrere andere.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <hr>
            </div>
            <div class="col-md-6">
                <img src="_resources/img/sql/normalform.png" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h4>1. Normalform</h4>
                <p>Atomisieren, das Datenfeld darf nur gleichartigen Inhalt enthalten, z.B. Name wird zu Vor und Nachname</p>
                <h4>2. Normalform</h4>
                <p>Die Erste muss erfüllt sein.</p> 
                <p>Die 2. Normalform besagt die Trennung der Tabelle in mehrere thematisch angepasste Datensätze.</p>
                <p>z.B. aufgeteilt in Kundendaten/Artikeldaten etc.</p>
                <h4>3. Normalform</h4>
                <p>transitive Abhängigkeiten, erst wenn 1. und 2. Normalform erfüllt sind.</p>
                <p>Hier geht es um die indirekten Abhängigkeiten, in Tabellen sollen nur direkte Abhängigkeiten vorhanden sein. </p>
                <p>z.B. eine Tabelle mit name-plz-ort hat eine direkte Abhängigkeit von name zu zu plz, plz hat eine direkte zu ort, name somit eine indirekte zu ort.</p>
                <p>Nach der Anwendung würde name mit plz und plz mit ort in einer eigenständigen Tabelle zu finden sein.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h3>Entity Relationship Modell</h3>
                <p>Das ERM ist im Prinzip nichts anderes als ein Modell das die Beziehungen zwischen Objekten darstellt, siehe Beziehungen und Normalformen.</p>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
            <div class="row">
                <div class="col-xs-12">
                    <h3>Die Praxis-Datenbank anlegen</h3>
                    <p>Die Praxis gibt uns die Möglichkeit die Theorie in praktischer Anwendung verstehen zu können. Dort werden auch schnell die Vorteile ersichtlich die MySQL bietet.</p>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="_resources/img/sql/database/db-overview.png" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            <strong>1. Schritt:</strong>
                            <p>Wie XAMPP gestartet wird hast du bei den Servern schon gelernt.</p>
                            <p>Über localhost hast du Zugriff auf phpMyAdmin, der Webanwendung mit der die Administration von MySQL Datenbanken gesteuert wird.</p>
                            <p>Erstelle eine neue Datenbank, indem du den Namen eingibst und deine gewünschte Kollation (utf general).</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="_resources/img/sql/database/db-create.png" class="img-responsive">
                            <!-- <img src="_resources/img/sql/database/db-content.png" class="img-responsive"> -->
                        </div>
                        <div class="col-sm-6">
                            <strong>2. Schritt:</strong>
                            <p>Klicke nun auf den Reiter Datenbank um eine Tabelle anzulegen.</p>
                            <p>Daraufhin wird ein Fenster erscheinen, indem der Name der Tabelle mit den gewünschten Feldern eingegeben werden muss.
                                Du siehst wie einfach du schon deine erste Tabelle anlegen kannst, MySQL bietet dir viele Vorteile:</p>
                            <ul class="list-unstyled">
                                <li>- Einfache Handhabung</li>
                                <li>- flexible Datenspeicherung</li>
                                <li>- strukturierte Tabellen</li>
                                <li>- große Datenbestände möglich</li>
                            </ul>
                        </div>
                        <div class="col-xs-12">
                            <p>Nun sollte dein Tabellenfeld angezeigt werden. In der ersten Spalte gibst du deine Tabelleninhalte an, die du weiter spezifizieren musst:</p>
                            <img src="_resources/img/sql/database/db-content-all.png" class="img-responsive">
                            <dl>
                                <dt>Feldname:</dt>
                                <dd>ID ist oft sinvoll (Primärschlüssel)</dd>
                                <dt>Typ:</dt>
                                <dd>
                                    <ul class="list-unstyled">
                                        <li>
                                            int= Zahl
                                        </li>
                                        <li>
                                            Var= Text/Zahl
                                        </li>
                                        <li>
                                            Date= Datum
                                        </li>
                                    </ul>
                                </dd>
                                <dt>Länge:</dt>
                                <dd>max. Länge</dd>
                                <dt>Kollation:</dt>
                                <dd>Die Kollation hast du am Anfang angegeben</dd>
                                <dt>Festlegung:</dt>
                                <dd>Primärschlüssel</dd>
                            </dl>
                        </div>
                        <div class="col-xs-12">
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <h3>Auf die Datenbank zugreifen</h3>
                    <p>Wie du per PHP auf deine Datenbank zugreifen kannst, zeigt dir der folgende Screen:</p>
                    <!-- Screen SQL -->
                    <p>Mit diesem Leitfaden solltest du nun die Grundlagen der Porgrammierung mit PHP verstehen und eigenständig Tabellen und Datenbanken erstellen können.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>