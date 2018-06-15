jQuery(document).ready(function($) {
	//function for nav-tabs
	function callNavUlLiActive(){
		$('.nav li').click(function(){
			$('.nav li').removeClass('active');
			$(this).addClass("active");
		});
	}
	//----------------------------------------------------------------
	getListHDTour();
	//get list petition and show in index
	function getListHDTour(){
		$.ajax({
			url: 'inc/action.php',
			type: 'POST',
			data: {getListHDTourRequire:1},
			success:function(data){
				$("#getListHDTour").html(data);
      //alert(data);
			}
		});
	}

});
