// Hàm gửi dữ liệu
function Join() {
    // Khai báo các biến dữ liệu trong form
    $username = $('#username').val();
    $password = $('#password').val();

    // Gửi dữ liệu
    $.ajax({
        url: '../join.php', // Đường dẫn file xử lý
        type: 'POST', // Phương thức
        // Các dữ liệu
        data: {
            username: $username,
            password: $password
                    // Thực thi khi gửi dữ liệu thành công
        }, success: function (data) {
            $('#form_tour .btn-submit').html('Bắt đầu');
        }
    });
}

// Bắt sự kiện click vào nút bắt đầu của form
$('#form_tour .btn-submit').click(function () {
    console.log('okok');
});
