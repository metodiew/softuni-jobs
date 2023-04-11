jQuery( document ).ready( function( $ ) {
	$('#toolbar-color').wpColorPicker();
	$('#notice-color').wpColorPicker();
	$('#toolbar-text-color').wpColorPicker();
	$('#notice-text-color').wpColorPicker();
	$('#adminbar-color').wpColorPicker();
	$('#adminbar-text-color').wpColorPicker();

	$('#dx-localhost-settings-reset').click(function(){
		var con = confirm('are you sure to reset it to default');
		if(con)
		{
			$('#dx-env-name-id').val('Localhost');
			$('#notice-checkbox').prop('checked',false);
			$('#toolbar-checkbox').prop('checked',false);
			$('#toolbar-font-weight').prop('checked',false);
			$('#toolbar-color').wpColorPicker('color','#0a0a0a');
			$('#notice-color').wpColorPicker('color','#efef8d');
			$('#toolbar-text-color').wpColorPicker('color','#ffffff');
			$('#notice-text-color').wpColorPicker('color','#606060');
			$('#adminbar-color').wpColorPicker('color','#23282D');
			$('#adminbar-text-color').wpColorPicker('color','#eeeeee');
			$('#dx-notice-position').val('top');
		}
	});
});