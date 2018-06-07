
// Switch div nodes onclick
function switch_nodes(className, parentDiv, displayType){
	$("#"+parentDiv+" > div").hide();
	$("."+className).attr('style','display:'+displayType+' !important');
}


function resources_switch_nodes(displaySelector, hideSelector, displayType, element){
	$(hideSelector).hide();
	$(displaySelector).attr('style','display:'+displayType+' !important');

	var x = element;
	$(x).addClass('boxed-darkblue-bg font-weight-bold');
	$(x).parent().siblings().children().removeClass('boxed-darkblue-bg font-weight-bold');
}


//Slider requirements
$( function() {
	$( "#slider-range-growth" ).slider({
		range: "max",
		min: 0,
		max: 10,
		value: 0,
		slide: function( event, ui ) {
			$( "#growth" ).val( ui.value );
		}
	});
	$( "#growth" ).val( $( "#slider-range-growth" ).slider( "value" ) );
} );


$( function() {
	$( "#slider-range-age" ).slider({
		range: "max",
		min: 0,
		max: 10,
		value: 0,
		slide: function( event, ui ) {
			$( "#age" ).val( ui.value );
		}
	});
	$( "#age" ).val( $( "#slider-range-age" ).slider( "value" ) );
} );


$( function() {
	$( "#slider-range-loi" ).slider({
		range: "max",
		min: 0,
		max: 10,
		value: 0,
		slide: function( event, ui ) {
			$( "#loi" ).val( ui.value );
		}
	});
	$( "#loi" ).val( $( "#slider-range-loi" ).slider( "value" ) );
} );


$( function() {
	$( "#slider-range-stability" ).slider({
		range: "max",
		min: 0,
		max: 10,
		value: 0,
		slide: function( event, ui ) {
			$( "#stability" ).val( ui.value );
		}
	});
	$( "#stability" ).val( $( "#slider-range-stability" ).slider( "value" ) );
} );

$( function() {
	$( "#slider-range-hm" ).slider({
		range: "max",
		min: 0,
		max: 10,
		value: 0,
		slide: function( event, ui ) {
			$( "#high_margin" ).val( ui.value );
		}
	});
	$( "#high_margin" ).val( $( "#slider-range-hm" ).slider( "value" ) );
} );

