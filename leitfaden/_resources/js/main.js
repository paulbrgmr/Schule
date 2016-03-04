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
    var pathsrc = pathname.split('/');
    var pathsrcPart = pathsrc[3];
    // var url      = window.location.href;     // Returns full URL

    if (pathsrcPart == navURL[0]) {
        selectNavItem(navID[0]);
    }
    else if (pathsrcPart == navURL[1]) {
        selectNavItem(navID[1]);
    }
    else if (pathsrcPart == navURL[2]) {
        selectNavItem(navID[2]);
    }
    else if (pathsrcPart == navURL[3]) {
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
                    // console.log(response);
                    console.log($(selectOutput).html(response));
                    console.log(selectOutput);
                    console.log(selectForm);
                }
            });
        });
    }

    loadAjaxForm('form.ajax-form', '#ajax-form-result');
    loadAjaxForm('form.ajax-login-create', '#login-ajax');
    loadAjaxForm('form.ajax-login-update', '#update-ajax');

});