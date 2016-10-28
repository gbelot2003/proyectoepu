
(function(){
    $("#institucion").select2({
        multiple: true,
        minimumResultsForSearch: 2
    });

    $("#right").select2({
        multiple: true,
        minimumResultsForSearch: 1
    });

    $("#country").select2();

}());