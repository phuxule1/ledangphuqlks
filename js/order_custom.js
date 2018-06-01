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