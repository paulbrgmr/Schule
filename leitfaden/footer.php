        </div>
        </main>
        <footer>
            <?php
                $path_parts = pathinfo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                if ($path_parts['basename'] == 'index.php') {
                    echo '
                    <div class="row footer-index">
                        <div class="col-xs-12 col-sm-offset-4 col-sm-4">
                            <p class="text-center">Mit <i class="fa fa-heart"></i> von Paul und Lara</p>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <p class="footer-github">
                                <a href="https://github.com/paulbrgmr/schule_php/tree/master/leitfaden" title="Paul auf Github" target="_blank">Diese Seite auf Github</a>
                            </p>
                        </div>
                    </div>
                    ';
                }
            ?>
            <script src="_resources/js/jquery.min.js"></script>
            <script src="_resources/js/bootstrap.min.js"></script>
            <script src="_resources/js/bigfoot.min.js"></script>
            <script src="_resources/js/lightbox.min.js"></script>
            <script src="_resources/js/main.min.js"></script>
        </footer>
    </body>
</html>