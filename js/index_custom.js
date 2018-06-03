jQuery(document).ready(function($) {
	getListRoom();
	function getListRoom(){
		$.ajax({
			url:'../include/action.php',
			type:'POST',
			data:{getListOfRoom:1},
			success:function(data){
				$('div.offers_grid').html(data);
			}
		});
	}
});