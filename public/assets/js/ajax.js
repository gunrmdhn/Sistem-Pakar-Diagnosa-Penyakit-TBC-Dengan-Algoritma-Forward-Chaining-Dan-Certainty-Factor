$(document).ready(function () {
    $(".data-pasien").click(function () {
        var id = $(this).children("option:selected").data("id");
        $.ajax({
            type: "get",
            url: "/data-pasien",
            data: { id: id },
            dataType: "JSON",
            success: function (response) {
                $.each(response.data_pasien, function (index, value) {
                    $(".kode_registrasi").html(value.kode_registrasi);
                    $(".tanggal_registrasi").html(value.tanggal_registrasi);
                    $(".nama_pasien").html(value.nama_pasien);
                    $(".tanggal_lahir").html(value.tanggal_lahir);
                    $(".usia").html(value.usia);
                    $(".alamat").html(value.alamat);
                    $(".nomor_telepon").html(value.nomor_telepon);
                    $(".jenis_kelamin").html(value.jenis_kelamin);
                    $(".golongan_darah").html(value.golongan_darah);
                });
            },
        });
        $(".disabled-button").prop("type", "submit");
    });
});
