$(function() {

    // $('#main-content').load('content/webapp.php')
    // $('#webapp').parent().addClass('active');

    // var navbarList = $('.navbar-nav li');
    // navbarList.each(function(index){
    //     $(this).addClass('navitem-'+ index);
    //     console.log($(this).addClass('navitem-'+ index));
    // });

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


    // $.(document).('click','input[name="mySubmitButton"]',function(e){
    //     e.preventDefault();

    //     var $form = $(this).parents('form');

    //     $.ajax({
    //         url: $form.attr('action'),
    //         data: $form.serialize(),
    //         success: function(response){
    //             $('.ajax-success-msg').removeClass('hidden');
    //         }
    //     });
    // });

    function formLoad(id, content, url) {
        $(id).on('click','input[type="submit"]',function(e){
            e.preventDefault();

            var $form = $(this).parents('form');

            $.ajax({
                url: $form.attr('action'),
                data: $form.serialize(),
                success: function(response){
                    $(content).load(url);
                }
            });
        });
    }

    formLoad('#ajax-form', '#ajax-form-result', '../form/ajax-form-action.php');
    // formLoad('#create-username', '#create-username-result', '../form/database-action.php');

    // $('#ajax-form').on('click','input[type="submit"]',function(e){
    //     e.preventDefault();

    //     var $form = $(this).parents('form');

    //     $.ajax({
    //         url: $form.attr('action'),
    //         data: $form.serialize(),
    //         success: function(response){
    //             $('#ajax-form-result').load('../form/ajax-form-action.php');
    //         }
    //     });
    // });

});