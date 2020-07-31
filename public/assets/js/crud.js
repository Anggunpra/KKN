$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$("#create-form").submit(function (event) {
    /* stop form from submitting normally */
    event.preventDefault();

    /* get the action attribute from the <form action=""> element */
    var $form = $(this),
        url = $form.attr('action');

    $.ajax({
        type: "POST",
        url: url,
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (response) {
            iziToast.success({
                title : 'Berhasil!',
                message : response.message,
                position : 'topRight',
            });
            $form.trigger("reset");
            location.reload();
        },
        error: function (xhr, status, error) {
            var json = JSON.parse(xhr.responseText);
            var data = json.message;
            var message = '';
            // console.log($.isArray(data));
            if($.isArray(data)){
                data.forEach(function(datum) {
                    console.log('pesan :' + datum)
                    message += datum + '<br>';
                });
            }else{
                message += data;
            }
            iziToast.error({
                title : 'Gagal',
                message : message,
                position : 'topRight',
            });
        },
    });
});
$("#download-form").submit(function (event) {
    /* stop form from submitting normally */
    event.preventDefault();

    /* get the action attribute from the <form action=""> element */
    var $form = $(this),
        url = $form.attr('action');

    $.ajax({
        type: "POST",
        url: url,
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (response) {
            iziToast.success({
                title : 'Berhasil!',
                message : response.message,
                position : 'topRight',
            });
            location.href = response.file;
        },
        error: function (xhr, status, error) {
            var json = JSON.parse(xhr.responseText);
            var data = json.message;
            var message = '';
            // console.log($.isArray(data));
            if($.isArray(data)){
                data.forEach(function(datum) {
                    console.log('pesan :' + datum)
                    message += datum + '<br>';
                });
            }else{
                message += data;
            }
            iziToast.error({
                title : 'Gagal',
                message : message,
                position : 'topRight',
            });
        },
    });
});
/* attach a submit handler to the form */
$("#update-form").submit(function (event) {
    /* stop form from submitting normally */
    event.preventDefault();

    /* get the action attribute from the <form action=""> element */
    var $form = $(this),
        url = $form.attr('action');

    $.ajax({
        type: "POST",
        url: url,
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (response) {
            iziToast.success({
                title : 'Berhasil!',
                message : response.message,
                position : 'topRight',
            });
            location.reload();
        },
        error: function (xhr, status, error) {
            var json = JSON.parse(xhr.responseText);
            var data = json.message;
            var message = '';
            // console.log($.isArray(data));
            if($.isArray(data)){
                data.forEach(function(datum) {
                    console.log('pesan :' + datum)
                    message += datum + '<br>';
                });
            }else{
                message += data;
            }
            iziToast.error({
                title : 'Gagal',
                message : message,
                position : 'topRight',
            });
        },
    });
});

function deleteData(link, item) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        title: 'Apakah Anda yakin akan menghapus data ' + item + ' ?',
        text: "Anda tidak dapat mengembalikan ini",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Lanjutkan',
        cancelButtonText: 'Batalkan',
        reverseButtons: true
    }).then((result) => {
        var url = link;
        if (result.value) {
            $.ajax({
                type: "DELETE",
                url: url,
                dataType: "json",
                success: function (response) {
                    if (response.status) {
                        swalWithBootstrapButtons.fire(
                            'Berhasil!',
                            response.message,
                            'success'
                        )
                        location.reload();
                    } else {
                        swalWithBootstrapButtons.fire(
                            'Gagal',
                            response.message,
                            'error'
                        )
                    }
                },
                error: function (xhr, status, error) {
                    var json = JSON.parse(xhr.responseText);
                    var data = json.message;
                    var message = '';
                    // console.log($.isArray(data));
                    if($.isArray(data)){
                        data.forEach(function(datum) {
                            console.log('pesan :' + datum)
                            message += datum + '<br>';
                        });
                    }else{
                        message += data;
                    }
                    iziToast.error({
                        title : 'Gagal',
                        message : message,
                        position : 'topRight',
                    });
                },
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Dibatalkan',
                'Anda batal menghapus data',
                'error'
            )
        }
    });
}

function acceptData(link, item) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })
    const inputOptions = new Promise((resolve) => {
        setTimeout(() => {
          resolve({
            'Kolektif': 'Kolektif',
            'Individu': 'Individu',
          })
        }, 100)
    })
    swalWithBootstrapButtons.fire({
        title: 'Apakah Anda yakin akan menerima data pembayaran dan/atau berkas dari ' + item + ' ?',
        text: "Anda tidak dapat mengembalikan ini",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Lanjutkan',
        cancelButtonText: 'Batalkan',
        title: 'Pilih Skema Pembayaran',
        input: 'radio',
        inputOptions: inputOptions,
        inputValidator: (value) => {
            if (!value) {
            return 'Anda wajib memilih salah satu'
            }
        },
        reverseButtons: true
    }).then((result) => {
        var url = link;
        if (result.value) {
            $.ajax({
                type: "PATCH",
                url: url+'?skema_pembayaran='+result.value,
                dataType: "json",
                success: function (response) {
                    if (response.status) {
                        swalWithBootstrapButtons.fire(
                            'Berhasil!',
                            response.message,
                            'success'
                        )
                        location.reload();
                    } else {
                        swalWithBootstrapButtons.fire(
                            'Gagal',
                            response.message,
                            'error'
                        )
                    }
                },
                error: function (xhr, status, error) {
                    var json = JSON.parse(xhr.responseText);
                    var data = json.message;
                    var message = '';
                    // console.log($.isArray(data));
                    if($.isArray(data)){
                        data.forEach(function(datum) {
                            console.log('pesan :' + datum)
                            message += datum + '<br>';
                        });
                    }else{
                        message += data;
                    }
                    iziToast.error({
                        title : 'Gagal',
                        message : message,
                        position : 'topRight',
                    });
                },
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Dibatalkan',
                'Anda batal menerima data pembayaran ini',
                'error'
            )
        }
    });
}
function declineData(link, item) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Apakah Anda yakin akan menolak data pembayaran dan/atau berkas dari ' + item + ' ?',
        text: "Anda tidak dapat mengembalikan ini",
        icon: 'warning',
        input : 'textarea',
        inputPlaceHolder: 'Silahkan masukkan alasan penolakan',
        inputAttributes: {
            'aria-label': 'Silahkan masukkan alasan penolakan',
            'required' : true,
        },
        inputValidator: (value) => {
            if (!value) {
              return 'Anda belum menginputkan pesan apapun!'
            }
        },
        showCancelButton: true,
        confirmButtonText: 'Lanjutkan',
        cancelButtonText: 'Batalkan',
        reverseButtons: true
    }).then((result) => {
        var url = link;
        if (result.value) {
            $.ajax({
                type: "PATCH",
                url: url+'?pesan='+result.value,
                dataType: "json",
                success: function (response) {
                    if (response.status) {
                        swalWithBootstrapButtons.fire(
                            'Berhasil!',
                            response.message,
                            'success'
                        )
                        location.reload();
                    } else {
                        swalWithBootstrapButtons.fire(
                            'Gagal',
                            response.message,
                            'error'
                        )
                    }
                },
                error: function (xhr, status, error) {
                    var json = JSON.parse(xhr.responseText);
                    var data = json.message;
                    var message = '';
                    // console.log($.isArray(data));
                    if($.isArray(data)){
                        data.forEach(function(datum) {
                            console.log('pesan :' + datum)
                            message += datum + '<br>';
                        });
                    }else{
                        message += data;
                    }
                    iziToast.error({
                        title : 'Gagal',
                        message : message,
                        position : 'topRight',
                    });
                },
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                'Dibatalkan',
                'Anda batal menolak data pembayaran ini',
                'error'
            )
        }
    });
}
