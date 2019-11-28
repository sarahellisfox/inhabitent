(function($) {

    $(function () {

        const searchSubmit = $("#searchSubmit"); 
        const searchField = $("#searchField"); 

        $(searchSubmit).one('click', function(event) {
            event.preventDefault();

            $(searchField).addClass( "show" );
        });
       
    });

})(jQuery);