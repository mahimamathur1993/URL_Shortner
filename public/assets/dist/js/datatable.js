$(function () {
    $("#datatable")
        .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            buttons: ["copy", "csv", "excel", "pdf", "print"],
        })
        .buttons()
        .container()
        .appendTo("#datatable_wrapper .col-md-6:eq(0)");
});
