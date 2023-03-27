$(document).ready(function () {
    $(".example").DataTable({
        scrollX: true,
        paging: true,
        dom: "<'row mb-2'<'col-md-9'B><'col-md-3'f>>" + "rt" + "<'mt-3'p>",
        select: true,
        buttons: [
            {
                extend: "pageLength",
                text: '<i class="bi bi-filter-square-fill me-1"></i>',
                className: "btn btn-info text-white",
            },
            {
                extend: "colvis",
                text: '<i class="bi bi-eye-fill me-1"></i>',
                className: "btn btn-info text-white",
            },
            {
                extend: "excel",
                text: '<i class="bi bi-file-earmark-excel-fill me-1"></i>',
                className: "btn btn-info text-white",
                exportOptions: {
                    columns: ":visible",
                },
                footer: true,
            },
            {
                extend: "selectAll",
                text: '<i class="bi bi-bookmark-check-fill me-1"></i>',
                className: "btn btn-info text-white",
            },
            {
                extend: "selectNone",
                text: '<i class="bi bi-bookmark-x-fill me-1"></i>',
                className: "btn btn-info text-white",
            },
            ,
        ],
        lengthMenu: [
            [10, 20, 30, 40, 50, -1],
            ["10", "20", "30", "40", "50", "Semua"],
        ],
        language: {
            url: "//cdn.datatables.net/plug-ins/1.12.0/i18n/id.json",
        },
    });
});
