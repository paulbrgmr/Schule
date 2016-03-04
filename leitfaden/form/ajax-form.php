<?php
    include '../subpage/header.php';
?>

<div class="container">
    <h1 class="text-center">AJAX</h1>
    <div class="row">
        <div class="col-sm-6">
            <h4 class="text-center">Formular ohne AJAX</h4>
            <form method="post" action="ajax-form-action.php" target="_blank">  
                <div class="row">
                    <div class="col-xs-offset-2 col-xs-8">
                        <div class="row">
                            <div class="col-xs-4">
                                <label for="vorname">Vorname</label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="vorname" id="vorname">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-offset-2 col-xs-8 mts">
                        <div class="row">
                            <div class="col-xs-4">
                                <label for="nachname">Nachname</label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="nachname" id="nachname">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-offset-2 col-xs-8 mts">
                        <div class="row">
                            <div class="col-xs-4">
                                <label for="hobby">Hobby</label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="hobby" id="hobby">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-offset-2 col-xs-8">
                        <div class="row mtm">
                            <div class="col-xs-6">
                                <button class="btn btn-primary btn-block" type="submit">Abschicken</button>
                            </div>
                            <div class="col-xs-6">
                                <button class="btn btn-primary btn-block" type="reset">
                                    Zurücksetzen
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <h4 class="text-center">Formular mit AJAX</h4>
            <form id="ajax-form" class="ajax-form" action="ajax-form-action-code.php">
                <div class="row">
                    <div class="col-xs-offset-2 col-xs-8">
                        <div class="row">
                            <div class="col-xs-4">
                                <label for="vorname">Vorname</label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="vorname" id="vorname">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-offset-2 col-xs-8 mts">
                        <div class="row">
                            <div class="col-xs-4">
                                <label for="nachname">Nachname</label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="nachname" id="nachname">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-offset-2 col-xs-8 mts">
                        <div class="row">
                            <div class="col-xs-4">
                                <label for="hobby">Hobby</label>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="hobby" id="hobby">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-offset-2 col-xs-8">
                        <div class="row mtm">
                            <div class="col-xs-6">
                                <button class="btn btn-primary btn-block" type="submit">Abschicken</button>
                            </div>
                            <div class="col-xs-6">
                                <button class="btn btn-primary btn-block" type="reset">
                                    Zurücksetzen
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div id="ajax-form-result"></div>
        </div>
        <div class="col-xs-12 col-sm-4 col-sm-offset-1">
            <hr>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#php">
                Behind the scenes
            </button>

            <!-- Modal -->
            <div class="modal fade" id="php" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Validierung</h4>
                        </div>
                        <div class="modal-body">
                            <?php 
                                highlight_string(
    '<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Schule";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $input_vorname  = $_POST["vorname"];
    $input_nachname = $_POST["nachname"];
    $input_hobby    = $_POST["hobby"];

    $sql = "INSERT INTO AJAX_Form(Vorname, Nachname, Hobby)
                VALUES ("$input_vorname", "$input_nachname", "$input_hobby")";

    if (!$conn->query($sql)) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    else {
        echo "Datenbankeintrag erfolgreich! <br>
        Folgende Werte wurden übermittelt: <br>
        Vorname: " . $input_vorname . "<br>" . "Nachname: " . $input_nachname . "<br>" . "Hobby: " . $input_hobby . "<br>";
    }

    $conn->close();
    ?>');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-sm-offset-2">
            <hr>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajax">
                Behind the scenes
            </button>

            <!-- Modal -->
            <div class="modal fade" id="ajax" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Validierung</h4>
                        </div>
                        <div class="modal-body">
                            <?php 
                                highlight_string(
'function loadAjaxForm(selectForm, selectOutput) {
    $(selectForm).submit(function(e){
        e.preventDefault();
        var $form = $(this);
        $.ajax({
            url:     $form.attr("action"),
            type:    "POST",
            data:    $form.serialize(),
            success: function(response){
                $(selectOutput).html(response);
                $form.find("input").val("");
            }
        });
    });
}

loadAjaxForm("form.ajax-form", "#ajax-form-result");');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include '../subpage/footer.php';
?>