// JavaScript file
// console.log( 'hi, the file loads' );

jQuery(document).ready(function($) {
    $('.like-button').on('click', function(e){
        e.preventDefault();
        // console.log( 'clicked' ); // just to be sure

        let job_id = jQuery(this).attr('id') // we'll need this later

        // AJAX Magic
        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url,
            data: {
                action:'softuni_job_like', // PHP function
                job_id: job_id // we need to make this dynamic
            },
            success: function(msg){
                console.log(msg);
            }
        });
    });
});
