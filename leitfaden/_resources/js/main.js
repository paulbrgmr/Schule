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
    }

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
    }

    lightbox.option();

    $.bigfoot();

    // $('form#form-get').on('submit', function (e) {
    //     e.preventDefault(); //prevent to reload the page

    //     $.ajax({
    //         type: 'GET', //hide url
    //         url: '../../form/post-get.php', //your form validation url
    //         data: $('form#form-get').serialize(),
    //         success: function () {
    //             alert('The form was submitted successfully'); //display an alert whether the form is submitted okay
    //         }
    //     });

    // });

});