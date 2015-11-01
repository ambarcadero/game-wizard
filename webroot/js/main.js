$(function() {

    $('.dropdown-menu.lang ul.chosen-results').click(function() {
        resetTopNav();
    });

    if ($('form div.input').length > 0) {
        $('form div.input').addClass("form-group");
    }

    if ($('form.form-inline div.input').length > 0) {
        $('form.form-inline div.input').addClass("col-xs-3");
    }

    if ($('form:not(.form-inline) div.input').length > 0) {
        $('form:not(.form-inline) div.input').addClass("col-sm-10");
    }
});

function languageChange() {
    var select_lang = $('select[name="language"] option:selected').val();
    $('#language_form').submit();
}

function resetTopNav() {
    $('ul.top-nav li').removeClass('open');
}

function setMenuActive(controller) {
    $('nav.navbar ul li').removeClass('active');
    var tables = ['AccountCommon', 'Roledata'];
    if (tables.indexOf(controller) != -1) {
        $('nav.navbar ul#tables').addClass('in');
    }

    var equipment = ['Equipment'];
    if (equipment.indexOf(controller) != -1) {
        $('nav.navbar ul#equipment').addClass('in');
    }

    var reports = ['LoginLog'];
    if (reports.indexOf(controller) != -1) {
        $('nav.navbar ul#reports').addClass('in');
    }
    $('nav.navbar ul li[data-controller="'+controller+'"]').addClass('active');
}