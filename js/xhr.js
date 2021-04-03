var mesimages = [
    {url:"photo1.jpg", description: 'Super description'},{url:"photo2.jpg", description: 'Super description'},{url:"photo3.jpg", description: 'Super description'},{url:"photo4.jpg", description: 'Super description'}];


function getXMLHttpRequest() {
    var xhr = null;

    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch(e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        } else {
            xhr = new XMLHttpRequest();
        }
    } else {
        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
        return null;
    }
    return xhr;
}

function page(nom, contenu, arg1, arg2, arg3, arg4, arg5, arg6, arg7, arg8, arg9, arg10, arg11, arg12, arg13, arg14, arg15, arg16, arg17, arg18, arg19, arg20, arg21, arg22, arg23, arg24 , arg25, arg26, arg27 , arg28, arg29, arg30, arg31 , arg32 , arg33) {
    var xhr = getXMLHttpRequest();
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {

            if(nom == "") {
                   $('#'+contenu).html(xhr.responseText);
            }else if(nom == "photography") {
                 $('#'+contenu).html(xhr.responseText);
                   mesimages.forEach(loadGalerie);
            }else {
                $('#'+contenu).html(xhr.responseText);
            }
        }else {
            $('#'+contenu).html('<div class="text-center"><img src="Images/50655.gif"></div>');
        }
    };
    xhr.open("POST", "PHP/" + nom + ".php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("arg1=" + arg1 + "&arg2=" + arg2 + "&arg3=" + arg3 + "&arg4=" + arg4 + "&arg5=" + arg5 + "&arg6=" + arg6 + "&arg7=" + arg7 + "&arg8=" + arg8 + "&arg9=" + arg9 + "&arg10=" + arg10 + "&arg11=" + arg11 + "&arg12=" + arg12 + "&arg13=" + arg13 + "&arg14=" + arg14 + "&arg15=" + arg15 + "&arg16=" + arg16 + "&arg17=" + arg17 + "&arg18=" + arg18 + "&arg19=" + arg19 + "&arg20=" + arg20 + "&arg21=" + arg21 + "&arg22=" + arg22 + "&arg23=" + arg23 + "&arg24=" + arg24 + "&arg25=" + arg25 + "&arg26=" + arg26 + "&arg27=" + arg27 + "&arg28=" + arg28 + "&arg29=" + arg29 + "&arg30=" + arg30 + "&arg31=" + arg31 + "&arg32=" + arg32 + "&arg33=" + arg33);

}


function loadGalerie(item, index, arr) {
    var imgElem = $('<div class="imgitem m-2 col-5 text-center"><div class="descriptionimg p-4 col-12">'+item.description+'</div></div>');
    imgElem.css('backgroundImage', 'url(Images/'+item.url+')');
    $('#Content').find('.row').append(imgElem);
 
}
