$(function() {
    $( ".date_picker" ).datepicker({
		dateFormat: 'yy-mm-dd',
		showOtherMonths: true,
		selectOtherMonths: true
	});
    $( ".accordion" ).accordion({collapsible: true,
    	 heightStyle: "content",
    	 active: false});
	$( ".actions a" ).addClass( "button-secondary pure-button" );
	$( "input[type=submit]" ).addClass( "pure-button pure-button-primary" );

 });
YUI({
    classNamePrefix: 'pure'
}).use('gallery-sm-menu', function (Y) {

    var horizontalMenu = new Y.Menu({
        container         : '#main_site_menu',
        sourceNode        : '#std-menu-items',
        orientation       : 'horizontal',
        hideOnOutsideClick: false,
        hideOnClick       : false
    });

   horizontalMenu.render();
   horizontalMenu.show();

});