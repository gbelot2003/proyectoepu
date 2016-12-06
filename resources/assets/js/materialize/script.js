(function(){

        $('.dropdown-button').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrain_width: false, // Does not change width of dropdown to that of the activator
                hover: true, // Activate on hover
                gutter: 0, // Spacing from edge
                belowOrigin: false, // Displays dropdown below the button
                alignment: 'left' // Displays dropdown with edge aligned to the left of button
            }
        );
        $('select.califica').material_select();

       // $('select').material_select();

        $(".select2").select2();
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