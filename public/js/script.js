$(function(){
    //Funcion que cambia el texto del lenguage entre español e ingles.
    const languageOption = $("#language-label");
    languageOption.click(function(){
        const language = languageOption.text()
        language == "Español" ? languageOption.text("English") : languageOption.text("Español")
    });
});

$(window).on("load", function(){
    //Funcion para el manejo el popup al inicio
    const popup_onload = $("#popup_onload");

    if(popup_onload.html() != undefined){
        //Manejamos el popup para aparecerlo cuando lo necesitemos
        const popup_onload_btn_close = $("#popup_onload_btn_close");
        popup_onload.css({"display":"flex"});
        $("body").addClass("popup-open");

        const popup_close = function(){
            popup_onload.css({"display":"none"});
            $("body").removeClass("popup-open");
        };

        popup_onload_btn_close.click(popup_close);
        
        $(document).keydown(function(event){
            if (event.key == "Escape"){
                popup_close();
            }
        })
    }
});


