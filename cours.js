$(document.body).ready(function () {
  $(document).on("click", "#MonHeader", function (event) {
    $("#PopUp").html("<span style='color:red'>mon text</span>");
    $("#PopUp").attr("style", "display:block !important");

    // $("#Colonne1").css("backgroundColor", "#1CEA50");
  });
});
