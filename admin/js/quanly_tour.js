jQuery(document).ready(function($) {
	//function for nav-tabs
	function callNavUlLiActive(){
		$('.nav li').click(function(){
			$('.nav li').removeClass('active');
			$(this).addClass("active");
		});
	}
	//----------------------------------------------------------------
	getListAllTour();
	//get list petition and show in index
	function getListAllTour(){
		$.ajax({
			url: 'inc/action.php',
			type: 'POST',
			data: {getListAllTourRequire:1},
			success:function(data){
				$("#lst_all_tour").html(data);
				callTrackModalAfterAjax();
			}
		});
	}

	function callTrackModalAfterAjax(){
		//button edit tour
		$('a#btn_edit_tour').on('click', function(event) {
			event.preventDefault();
			$('#title_create').hide();
			$('#title_edit').show();
			$('#title_del').hide();
			$('div#create_tour').hide();
			$('div#edit_tour').show();
			$('div#del_tour').hide();
			$('button#btn_confirm_create_tour').hide();
			$('button#btn_confirm_edit_tour').show();
			$('button#btn_confirm_del_tour').hide();

			var tour_id = $(this).attr('tourID');
			$('button#btn_confirm_edit_tour').attr('tourId', tour_id);

			$.ajax({
				url: 'inc/action.php',
				type: 'POST',
				data: {getDetailTourRequire:1, tourId:tour_id},
				success:function(data){
					$('div#edit_tour').html(data);
				}
			});
		});

		//button del tour
		$('a#btn_del_tour').on('click', function(event) {
			event.preventDefault();
			$('#title_create').hide();
			$('#title_edit').hide();
			$('#title_del').show();
			$('div#create_tour').hide();
			$('div#edit_tour').hide();
			$('div#del_tour').show();
			$('button#btn_confirm_create_tour').hide();
			$('button#btn_confirm_edit_tour').hide();
			$('button#btn_confirm_del_tour').show();
			$('button#btn_confirm_del_tour').attr('tourId', $(this).attr('tourID'));
		});

		//button create tour
		$('button#btn_create_tour').on('click', function(event) {
			event.preventDefault();
			$('#title_create').show();
			$('#title_edit').hide();
			$('#title_del').hide();
			$('div#create_tour').show();
			$('div#edit_tour').hide();
			$('div#del_tour').hide();
			$('button#btn_confirm_create_tour').show();
			$('button#btn_confirm_edit_tour').hide();
			$('button#btn_confirm_del_tour').hide();
			$('button#btn_confirm_create_tour').attr('tourId', $(this).attr('tourID'));
		});

		//button confirm edit tour
		$('#btn_confirm_edit_tour').on('click', function(event) {
			event.preventDefault();
			var tour_id = $(this).attr('tourID');
			var diadiemtour = $('input#input_diadiemtour').val();
			var soluongnguoi = $('input#input_soluongnguoi').val();
			var ngaydi = $('input#input_ngaydi').val();
			var ngayve = $('input#input_ngayve').val();
			var dongia = $('input#input_dongia').val();
			if(checkInput(diadiemtour, soluongnguoi, ngaydi, ngayve, dongia)){
				$('#btn_confirm_edit_tour').attr('data-dismiss', 'modal');
				$.ajax({
					url: 'inc/action.php',
					type: 'POST',
					data: {updateTourRequire:1, diadiemtour:diadiemtour, soluongnguoi:soluongnguoi, 
						ngaydi:ngaydi, ngayve:ngayve, dongia:dongia, tourId:tour_id},
					success:function(data){
						if(data!=null && data!="")
							alert(data);
						else{
							alert('Đã sửa thành công!!!');
							$.ajax({
								url: 'inc/action.php',
								type: 'POST',
								data: {getUpdatedTour:1, tourId:tour_id},
								success:function(data){
									var a = $('a[tourId="'+tour_id+'"]').parent().parent().parent().find('td:first-child');
									a.nextAll().remove();
									a.after(data);
								}
							});
						}
					}
				});
			}else $('#btn_confirm_edit_tour').attr('data-dismiss', 'modal');
		});

		//button confirm del tour
		$('#btn_confirm_del_tour').on('click', function(event) {
			event.preventDefault();
			var tour_id = $(this).attr('tourID');
			$.ajax({
				url: 'inc/action.php',
				type: 'POST',
				data: {delTourRequire:1, tourId:tour_id},
				success:function(data){
					if(data!=null && data!="")
						alert(data);
					else{
						alert('Đã xóa thành công!!!');
						location.reload();
					}
				}
			});
		});

		//button close modal handle
	    $('body').delegate('button.close_modal', 'click', function(){
	    	$('input#input_diadiemtour').val(null);
			$('input#input_soluongnguoi').val(null);
			$('input#input_ngaydi').val(null);
			$('input#input_ngayve').val(null);
			$('input#input_dongia').val(null);
	    });

	}

	//button confirm create tour
	$('#btn_confirm_create_tour').on('click', function(event) {
		event.preventDefault();
		var diadiemtour = $('input#input_diadiemtour').val();
		var soluongnguoi = $('input#input_soluongnguoi').val();
		var ngaydi = $('input#input_ngaydi').val();
		var ngayve = $('input#input_ngayve').val();
		var dongia = $('input#input_dongia').val();

		if(checkInput(diadiemtour, soluongnguoi, ngaydi, ngayve, dongia)){
			$('#btn_confirm_create_tour').attr('data-dismiss', 'modal');
			$.ajax({
				url: 'inc/action.php',
				type: 'POST',
				data: {createTourRequire:1, diadiemtour:diadiemtour, soluongnguoi:soluongnguoi, 
						ngaydi:ngaydi, ngayve:ngayve, dongia:dongia},
				success:function(data){
					if(data!=null && data!="")
						alert(data);
					else {
						alert('Đã tạo thành công!!!');
						location.reload();
					}
				}
			});
		}else $('#btn_confirm_create_tour').attr('data-dismiss', 'modal');
	});

	//function check input to edit
	function checkInput(diadiemtour, slnguoi, ngaydi, ngayve, dongia){
		if(diadiemtour == null && diadiemtour == ""){
    		alert('Không được để trống địa điểm tour');
    		return 0;
    	}
    	if(slnguoi == null && slnguoi == ""){
    		alert('Không được để trống số lượng người');
    		return 0;
    	}else $('div#error_soluongnguoi').css('display', 'none');
    	var check_date = moment(ngaydi).isValid();//use check valid function of moment.js
    	if(!check_date){
    		alert('Vui lòng chọn ngày đi');
    		return 0;
    	}
    	var check_date = moment(ngayve).isValid();//use check valid function of moment.js
    	if(!check_date){
    		alert('Vui lòng chọn ngày về');
    		return 0;
    	}
    	if(dongia == null && dongia == ""){
    		alert('Vui lòng nhập đơn giá tour');
    		return 0;
    	}
    	return 1;
	}

});