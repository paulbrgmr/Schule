<?php 
    include 'content.php';
?>

<div class="content-index">
    <div class="intro">
        <div class="intro-wrapper">
            <h1 class="text-center headline">PHP</h1>
            <div class="row">
                <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                    <p class="text-center text-large subheadline">
                        PHP ist eine serverseitige Sprache und ein starkes Tool um dynamische und interaktive Websites zu erstellen.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="info-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <p>PHP Beispiel:</p>
            </div>
            <div class="col-lg-6">
                <div class="code-wrapper">
                    <?php 
                        highlight_string('<?php echo "Ich bin ein Beispieltext."; ?>');
                    ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="desc-wrapper">
                    <p>
                        In diesem Beispiel wird mit echo ein Wert, in diesem Fall ein string, ausgegeben.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-lg-2">
                <div class="btn btn-primary btn-block">
                    Probier es aus!
                </div>
            </div>
            <div class="col-xs-12"></div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>