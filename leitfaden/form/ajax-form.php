<?php
    include '../subpage/header.php';
?>

<div class="container">
    <h1 class="text-center">AJAX Beispiel</h1>
    <div class="row">
        <div class="col-sm-6">
            <h4>Formular ohne AJAX</h4>
            <form method="post" action="ajax-form-action.php" target="_blank">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="vorname">Vorname</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="text" name="vorname" id="vorname">
                            </div>
                            <div class="col-xs-3">
                                <label for="nachname">Nachname</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="text" name="nachname" id="nachname">
                            </div>
                            <div class="col-xs-3">
                                <label for="hobby">Hobby</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="text" name="hobby" id="hobby">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <button class="btn btn-primary btn-block" type="submit">Abschicken</button>
                            </div>
                        </div>
                        <div class="row">
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
            <h4>Formular mit AJAX</h4>
            <form id="ajax-form" class="ajax-form" action="ajax-form-action-code.php">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="vorname">Vorname</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="text" name="vorname" id="vorname">
                            </div>
                            <div class="col-xs-3">
                                <label for="nachname">Nachname</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="text" name="nachname" id="nachname">
                            </div>
                            <div class="col-xs-3">
                                <label for="hobby">Hobby</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="text" name="hobby" id="hobby" >
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <button class="btn btn-primary btn-block" type="submit">Abschicken</button>
                            </div>
                        </div>
                        <div class="row">
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
    </div>
</div>

<?php
    include '../subpage/footer.php';
?>