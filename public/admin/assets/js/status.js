$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


//table is_active and is_deactive
$('div').on('click', '.statusToChange', function (e) {

    e.preventDefault();
    e.stopPropagation();

    $object = $(this).find('a');

    id = $object.data('id');
    module = $object.data('module');
    status = $object.data('status');
    status = (status == true) ? 0 : 1;
    check_permission = module == 'permissions' ? '_p' : '';

    $.ajax({
        url: url_status,
        method: 'post',
        data: {
            id: id,
            module: module,
            status: status,
        },
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                if (data['status'] === '1') {
                    $('#isActive_' + id + check_permission).show();
                    $('#isDeactive_' + id + check_permission).hide();
                } else {
                    $('#isActive_' + id + check_permission).hide();
                    $('#isDeactive_' + id + check_permission).show();
                }
            }
        }
    });

});

$('a').on('click', '.deleteModal', function (e) {
    console.log('dddddddd');
    e.preventDefault();
    e.stopPropagation();

    id = $(this).data('id');
    module = $(this).data('module');

    swal({
            title: "Silmək istədiyinizdən əminsiniz?",
            type: "error",
            showCancelButton: true,
            closeOnConfirm: false,
            confirmButtonColor: "#F44336",
            showLoaderOnConfirm: true
        },
        function () {
            $.ajax({
                type: 'post',
                url: url_delete,
                data: {
                    id: id,
                    module: module
                },
                success: function (data) {
                    if (data['success']) {
                        swal({
                            title: "Silindi",
                            type: "success",
                            confirmButtonColor: "#4CAF50"
                        });

                        $('button[data-id = ' + id + ']').parent().parent().parent().remove();
                        $('a[data-id = ' + id + ']').closest('tr').remove();
                    } else {
                        swal({
                            title: "Silə bilməzsiniz",
                            text: data['message'],
                            type: "error",
                            confirmButtonColor: "#F44336"
                        });
                    }
                }
            });
        });
});







