$(document.body).ready(function () {
    $(document).on("click", "#MonHeader", function (event) {
        $("#PopUp").html("<span style='color:red'>mon text</span>");
        $("#PopUp").attr("style", "display:block !important");

        // $("#Colonne1").css("backgroundColor", "#1CEA50");
    });

    $(document).on("click", ".itemmenu", function (event) {




        var menuname=$(this).attr("data-menuname"); 
        if (menuname == "admin"){
            if (localStorage.getItem("admin") == "true"){
                page("admincontent" ,"Content");
            }else{
                page(menuname ,"Content");
            }
        }else {
            page(menuname ,"Content");
        }

    });


    /*$(document).on("click", ".contact", function (event) {
    page("contact","Content");
  });
    $(document).on("click", ".about", function (event) {
    page("about","Content");
  });
       $(document).on("click", ".destinations", function (event) {
    page("destinations","Content");
  });

    $(document).on("click", ".photography", function (event) {
    page("photography","Content");
  });
    */

    $(document).on("click", ".MenuFerme", function (event) {

        //$("#MenuHamb").css("height", "100%");
        $("#MenuHamb").css("margin-left", "0px");
        $("#Menu").removeClass("MenuFerme").addClass("MenuOuvert");
    });
    $(document).on("click", ".MenuOuvert", function (event) {
        $("#MenuHamb").css("margin-left", "-200px");
        $("#MenuHamb").css("height", "auto");  
        $("#Menu").removeClass("MenuOuvert").addClass("MenuFerme");
    });
    $(document).on("click", "#submitlogin", function (event) {
        var login = $("#username").val();
        var password = $("#password").val();
        page("checkconnection","resultform",login, password); // je peux ajouter une autre variable, par exemple mail. PAS OUBLIER : d'ajouter variable avant (var) 
    });

    $(document).on("click", "#submitpost", function (event) {
        var titrepost = $("#posttitle").val();
        var textpost = $("#posttext").val();
        var imagepost = $("#postimage").val();
        page("createpost","resultform",titrepost, textpost,imagepost);


    });

    $(document).on("click", "#actionnewpost", function (event) {
        $("#editpost").hide();     
        $("#newpost").show(); 
    });

    $(document).on("click", "#actioneditpost", function (event) {
        $("#editpost").show();     
        $("#newpost").hide(); 
    });

});


