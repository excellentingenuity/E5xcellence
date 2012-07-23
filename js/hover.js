/**
 * @author James Johnson
 */

//$(".side-menu-li").hover(
//function(){$(".main-content").hide();
//$(".logo-overlay").show();},
//function(){$(".logo-overlay").hide();
//$(".main-content").show();
//
//});
        
$(".side-menu-li").mouseover(
		function(){$(".main-content").hide();
		$(".logo-overlay").show();},
		function(){$(".logo-overlay").hide();
		$(".main-content").show();	
);
	