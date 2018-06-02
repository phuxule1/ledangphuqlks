$(document).ready(function () {
    getTourName();
    function getTourName(){
        var tour_id = getUrlParams('tourId', window.location.href);
        $.ajax({
            type: "POST",
            url: "../include/action.php",
            data: {getTourNameRequire:1, tourId:tour_id},
            success: function (data) {
                $('input#tentour').val(data);
            }
        });
    }

    getTourNgaydi();
    function getTourNgaydi(){
        var tour_id = getUrlParams('tourId', window.location.href);
        $.ajax({
            type: "POST",
            url: "../include/action.php",
            data: {getTourNgaydiRequire:1, tourId:tour_id},
            success: function (data) {
                $('input#ngaydi').val(data);
            }
        });
    }

    getTourNgayve();
    function getTourNgayve(){
        var tour_id = getUrlParams('tourId', window.location.href);
        $.ajax({
            type: "POST",
            url: "../include/action.php",
            data: {getTourNgayveRequire:1, tourId:tour_id},
            success: function (data) {
                $('input#ngayve').val(data);
            }
        });
    }

    $('input#soluongnguoidi').on('keyup', function(){
        var tour_id = getUrlParams('tourId', window.location.href);
        var songuoidi = $('input#soluongnguoidi').val();
        $.ajax({
            type: "POST",
            url: "../include/action.php",
            data: {getTotalRequire:1, tourId:tour_id, soluong:songuoidi},
            success: function (data) {
                $('input#tongtien').val(data);
            }
        });
    });

    $('button#btn_dattour').on('click', function(event) {
        event.preventDefault();
        if($('input#soluongnguoidi').val() != null && $('input#soluongnguoidi').val() != ""){
            if($('input#soluongnguoidi').val() > 0){
                var tour_id = getUrlParams('tourId', window.location.href);
                var songuoidi = $('input#soluongnguoidi').val();
                $.ajax({
                    type: "POST",
                    url: "../include/action.php",
                    data: {saveTourRequire:1, tourId:tour_id, soluong:songuoidi},
                    success: function (data) {
                        if(data != null && data != ""){
                            alert(data);
                            location.href = "index.php";
                        }
                    }
                });
            }
        }else alert('Vui lòng nhập số người đi');
    });

    //====================== dat phong ===========================
    getRoomHotel();
    function getRoomHotel(){
        var room_id = getUrlParams('roomId', window.location.href);
        $.ajax({
            type: "POST",
            url: "../include/action.php",
            data: {getRoomHotelRequire:1, roomId:room_id},
            success: function (data) {
                $('input#tenphong_ks').val(data);
            }
        });
    }

    $('input#soluongkhachdi').on('keyup', function(){
        var room_id = getUrlParams('roomId', window.location.href);
        var songuoidi = $('input#soluongkhachdi').val();
        $.ajax({
            type: "POST",
            url: "../include/action.php",
            data: {getTotalRoomRequire:1, roomId:room_id, soluong:songuoidi},
            success: function (data) {
                $('input#tongtienphong').val(data);
            }
        });
    });

    $('button#btn_datphong').on('click', function(event) {
        event.preventDefault();
        if($('input#soluongkhachdi').val() != null && $('input#soluongkhachdi').val() != ""){
            if($('input#soluongkhachdi').val() > 0){
                var ngaykhachden = $('input#ngaykhachden').val();
                var ngaykhachdi = $('input#ngaykhachdi').val();
                if(moment(ngaykhachden).isValid()){
                    if(moment(ngaykhachdi).isValid()){
                        var room_id = getUrlParams('roomId', window.location.href);
                        var ks_id = getUrlParams('ksId', window.location.href);
                        var songuoidi = $('input#soluongkhachdi').val();
                        $.ajax({
                            type: "POST",
                            url: "../include/action.php",
                            data: {saveOrderRoomRequire:1, roomId:room_id, ksId:ks_id, soluong:songuoidi,
                                    ngayden:ngaykhachden, ngaydi:ngaykhachdi},
                            success: function (data) {
                                if(data != null && data != ""){
                                    alert(data);
                                    location.href = "index.php";
                                }
                            }
                        });
                    }else alert('Vui lòng chọn ngày đi');
                }else alert('Vui lòng chọn ngày đến');
            }
        }else alert('Vui lòng nhập số người đi');
    });

    //===================== FUNCTION ============================
    //get url parameters value
	function getUrlParams(name,url) {
		if (!url) url = location.href;
		name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
		var regexS = "[\\?&]"+name+"=([^&#]*)";
		var regex = new RegExp( regexS );
		var results = regex.exec( url );
		return results == null ? null : results[1];
	}
});