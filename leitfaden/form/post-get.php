<?php 
    include '../subpage/content.php';
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">Methoden von Formularen</h1>
        </div>
        <div class="col-xs-12 col-md-6">
            <h2 class="text-center">GET</h2>
            <form id="form-get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
                <div class="row">
                    <div class="col-xs-offset-2 col-xs-8">
                        <input type="text" class="form-control" placeholder="Username" name="get-username">
                    </div>
                    <div class="col-xs-offset-2 col-xs-8 mts">
                        <input type="password" class="form-control" placeholder="Password" name="get-password">
                    </div>
                    <div class="col-xs-offset-2 col-xs-8">
                        <div class="row mtm">
                            <div class="col-xs-6">
                                <button class="btn btn-primary btn-block" type="submit">
                                    Senden
                                </button>
                            </div>
                            <div class="col-xs-6">
                                <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="btn btn-primary btn-block">
                                    Reset
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <p>In dieser Beispiel werden die Daten per <code>GET</code> abgeschickt. Die Eingaben, die in die Eingabefelder eingetragen werden, sind nach dem abschicken in der URL sichtbar. Eine genaue Zuordnung ist möglich, sowohl der Feldname als auch der Feldinhalt im Klartext zu lesen sind.</p>
            <p>Aktuelle URL-Endung:
                <?php
                    $path_parts = pathinfo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                    echo '<code>' . $path_parts['basename'] . '</code>';
                ?>
            </p>
            <p>Übergebene Daten:</p>
            <?php
                echo 'Username: ' . $_GET['get-username'] . '<br>';
                echo 'Passwort: ' . $_GET['get-password'];
            ?>
        </div>
        <div class="col-xs-12 col-md-6">
            <h2 class="text-center">POST</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="row">
                    <div class="col-xs-offset-2 col-xs-8">
                        <input type="text" class="form-control" placeholder="Username" name="post-username">
                    </div>
                    <div class="col-xs-offset-2 col-xs-8 mts    ">
                        <input type="password" class="form-control" placeholder="Password" name="post-password">
                    </div>
                    <div class="col-xs-offset-2 col-xs-8">
                        <div class="row mtm">
                            <div class="col-xs-6">
                                <button class="btn btn-primary btn-block" type="submit">
                                    Senden
                                </button>
                            </div>
                            <div class="col-xs-6">
                                <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="btn btn-primary btn-block">
                                    Reset
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <p>In diesem Beispiel werden die Daten per <code>POST</code> abgeschickt. Mit dieser Methode ist es nicht möglich, die Daten einfach auszulesen.</p>
            <div class="row">
                <div class="col-xs-12">
                    <p>Übergebene Daten:
                        <code>
                            <?=$_POST['post-username']?>
                            <?=$_POST['post-password']?>
                        </code>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include '../subpage/footer.php';
?>