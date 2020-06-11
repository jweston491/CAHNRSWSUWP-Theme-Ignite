(function(){
    wp.customize.bind('ready', function () {

        function num_slides_note( value ){
            if ( 'wide-static-slides'=== value ){
                jQuery('#customize-control-_cahnrswp_ignite_fronpage_feature_slide_count_control').append('<span id="num-slides-note"><em>Note: The College Slideshow will only display a maximum of 4 slides.</em></span>')
            } else {
                jQuery('#num-slides-note').remove()
            }
        }
        
        var frontpage_feature = this('_cahnrswp_ignite_fronpage_feature');

        var value = frontpage_feature.get()

        num_slides_note( value );

        frontpage_feature.bind('change', function( setting ){
            value = frontpage_feature.get()
            num_slides_note( value );
        })
    })
})();
