$(function () {
    $("#image").change(function () {
        $("#output").attr("src", URL.createObjectURL($(this)[0].files[0]));
    });
});