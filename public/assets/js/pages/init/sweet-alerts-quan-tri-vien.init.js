$(document).ready(function () {
    $('.xoa_quan_tri_vien').click(function () {
        Swal.fire({
            title: 'Bạn có chắc xóa không?',
            text: "Bạn sẽ không thể khôi phục quản trị viên này!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xóa!',
            cancelButtonText: 'Hủy'
        }).then((result) => {
            if (result.value) {
                Swal.fire('', 'Đã xóa quản trị viên!', 'success'
                ).then((result) => {
                    if (result.value) {
                        window.location.href = $(this).data('href')
                    };
                });
            };
        });
    });
});