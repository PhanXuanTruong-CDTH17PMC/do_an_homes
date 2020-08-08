$(document).ready(function () {
    $('.xoa_linh_vuc').click(function () {
        Swal.fire({
            title: 'Bạn có chắc xóa không?',
            text: "Bạn sẽ không thể khôi phục lĩnh vực này!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Xóa!',
            cancelButtonText: 'Hủy'
        }).then((result) => {
            if (result.value) {
                Swal.fire('', 'Đã xóa lĩnh vực!', 'success'
                ).then((result) => {
                    if (result.value) {
                        window.location.href = $(this).data('href')
                    };
                });
            };
        });
    });
});