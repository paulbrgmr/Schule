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
    </div>
</div>

<?php
    include '../subpage/footer.php';
?>