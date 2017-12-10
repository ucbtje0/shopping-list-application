$(document).ready(function () {
    $("input:checkbox").change(function () {
        if ($(this).prop("checked") == true) {
            $(this).closest('tr').addClass("checked");
        } else $(this).closest('tr').removeClass("checked");
    });
});
