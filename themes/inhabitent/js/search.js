(function($) {

    $(function () {

        const searchForm = $("#searchForm"); 
        const searchField = $("#searchField"); 

        $(searchForm).on('click', function(event) {
            event.preventDefault();

            $(searchField).addClass( "show" );
        });
       
    });

})(jQuery);