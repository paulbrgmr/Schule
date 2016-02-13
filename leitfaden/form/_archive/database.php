<?php 
    include '../subpage/content.php';
?>

<form method="POST" action="database_create_php.php">
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <label for="Vorname">Vorname</label>
                </div>
                <div class="col-lg-6">
                   <input type="text" name="Vorname" placeholder="Vorname" id="Vorname">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <label for="Nachname">Nachname</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" name="Nachname" placeholder="Nachname" id="Nachname">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <label for="Alter">Alter</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" name="Alter" placeholder="Alter" id="Alter">
                </div>
            </div>
        </div>
    </div>
    <input type="submit">
    <input type="reset">
</form>

<?php
    include '../subpage/footer.php';
?>