jQuery( document ).ready( function( $ ) {
	var notice = dxlocalhost.notice_msg;
	
	$('body').append( '<div id="dx-localhost-notice">' + notice + '</div>' );
	if ( $('#wpadminbar').length && parseInt( noticeline.disable_notice, 10) == 0 ) {
		$('#dx-localhost-notice').css('top', '32px');
	}

});