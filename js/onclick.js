
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
