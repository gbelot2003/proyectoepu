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

        $(".select2").select2();

        $("#institucion").select2({
                multiple: true,
                minimumResultsForSearch: 2
        });

        $("#right").select2({
                multiple: true,
                minimumResultsForSearch: 1
        });

        $("#roles_list").select2({
                multiple: true,
                minimumResultsForSearch: 1
        });

        $("#country").select2();

        $('#flash-overlay-modal').modal();
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);

        $('.chips').material_chip();

        $('.button-collapse').sideNav({
                    menuWidth: 300, // Default is 240
                    edge: 'right', // Choose the horizontal origin
                    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                    draggable: true // Choose whether you can drag to open on touch screens
            }
        );

        $('.carousel.carousel-slider').carousel({full_width: true});
}());