$(document.body).ready(function () {
  $(document).on("click", "#MonHeader", function (event) {
    $("#PopUp").html("<span style='color:red'>mon text</span>");
    $("#PopUp").attr("style", "display:block !important");

    // $("#Colonne1").css("backgroundColor", "#1CEA50");
  });

  $(document).on("click", ".MenuFerme", function (event) {
    $("#ContenuMenu").removeClass("d-none");
    $("#ContenuMenu").css("width", "200px");
    $("#Menu").removeClass("MenuFerme").addClass("MenuOuvert");
  });
  $(document).on("click", ".MenuOuvert", function (event) {
    $("#ContenuMenu").css("width", "0px");
    setTimeout('$("#ContenuMenu").addClass("d-none");', 500);
    $("#Menu").removeClass("MenuOuvert").addClass("MenuFerme");
  });
    $(document).on("click", "#submitlogin", function (event) {
    var login = $("#username").val();
    var password = $("#password").val();
        page("checkconnection","resultform",login, password); // je peux ajouter une autre variable, par exemple mail. PAS OUBLIER : d'ajouter variable avant (var) 
  });
});

