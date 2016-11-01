
(function(){
    $("#institucion").select2({
        theme: "bootstrap",
        multiple: true,
        minimumResultsForSearch: 2
    });

    $("#right").select2({
        theme: "bootstrap",
        multiple: true,
        minimumResultsForSearch: 1
    });

    $("#roles_list").select2({
        theme: "bootstrap",
        multiple: true,
        minimumResultsForSearch: 1
    });

    $("#country").select2({
        theme: "bootstrap"
    });

    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
}());