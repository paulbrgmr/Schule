$(function() {

    var navID = ['#grundlagen', '#server', '#formular', '#sql'];
    var navURL = ['grundlagen.php', 'server.php', 'formular.php', 'sql.php'];

    var ajaxLoad = false;
    if (ajaxLoad) {
        
        var mainContent = $('#main-content');
        var ajaxPath = 'content/';


        function selectNavItemLink(navbarListItemLink) {
            $(navbarListItemLink).click(function() {
                mainContent.load( ajaxPath + navbarListItemLink + '.php');
                selectNavItem($(this));
            });
        };

    }; // End ajaxLoad

    function selectNavItem(navbarListItem) {
        $('.navbar-nav li').removeClass('active');
        $(navbarListItem).parent().addClass('active');
    };

    var pathname = window.location.pathname; // Returns path only
    var pathsrc = '/Schule_PHP/leitfaden/';
    // var url      = window.location.href;     // Returns full URL

    if (pathname == pathsrc + navURL[0]) {
        selectNavItem(navID[0]);
    }
    else if (pathname == pathsrc + navURL[1]) {
        selectNavItem(navID[1]);
    }
    else if (pathname == pathsrc + navURL[2]) {
        selectNavItem(navID[2]);
    }
    else if (pathname == pathsrc + navURL[3]) {
        selectNavItem(navID[3]);
    };

    // console.log(pathname);

    var trigger = $('#hamburger'),
    isClosed = false;

    trigger.click(function () {
        burgerTime();
    });

    function burgerTime() {
        if (isClosed == true) {
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        }
        else {
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    };

    // $.lightbox();

    $.bigfoot();

    function loadAjaxForm(selectForm, selectOutput) {
        $(selectForm).submit(function(e){
            e.preventDefault();
            var $form = $(this);
            $.ajax({
                url:    $form.attr('action'),
                type:   'POST',
                data:   $form.serialize(),
                success: function(response){
                    $(selectOutput).html(response);
                    $form.find("input").val("");
                }
            });
        });
    }

    loadAjaxForm('form.ajax-form', '#ajax-form-result');

    // $('form.ajax-form').submit(function(e){
    //     e.preventDefault();
    //     var $form = $(this);
    //     $.ajax({
    //         url:    $form.attr('action'),
    //         type:   'POST',
    //         data:   $form.serialize(),
    //         success: function(response){
    //             $('#ajax-form-result').html(response);
    //             $form.find("input").val("");
    //         }
    //     });
    // });

});