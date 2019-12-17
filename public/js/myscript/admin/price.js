
$("#notAnyForm1").fadeOut();
$("#notAnyForm2").fadeOut();
$("#notAnyForm3").fadeOut();
$("#notAnyForm4").fadeOut();
$("#trRodnoy").fadeOut();
$("#trUkr").fadeOut();
$("#trNotUkr").fadeOut();

/*Forma uchastiya*/

$('input:radio').change(function(){
    formShow();

});
var formShow = function(){
    var result = $('#countryVuz:checked');
    var resLength = result.length;
    var country = $('input[name="country"]:checked');
    var form = $('input[name="form"]:checked');
    if(country.val()=='country'){
        $("#trUkr").fadeOut("slow");
        $("#trAny").fadeIn("slow");
        $("#trNotUkr").fadeOut("slow");
        if(form.val()=='formAny'){
            $("#anyForm1").fadeIn();
            $("#notAnyForm1").fadeOut();
        }else{
            $("#notAnyForm1").fadeIn();
            $("#anyForm1").fadeOut();
        }
    }else{
        $("#trUkr").fadeIn("slow");
        $("#trAny").fadeOut("slow");
        $("#trNotUkr").fadeIn("slow");
        if(form.val()=='formAny'){
            $("#anyForm2").fadeIn();
            $("#notAnyForm2").fadeOut();
            $("#anyForm3").fadeIn();
            $("#notAnyForm3").fadeOut();
        }else{
            $("#notAnyForm2").fadeIn();
            $("#anyForm2").fadeOut();
            $("#notAnyForm3").fadeIn();
            $("#anyForm3").fadeOut();
        }
    }
    if (resLength >0) {
        myVuz();
    }
};
/*VUZ*/
$("#countryVuz").click(function(){

    myVuz();

});
var myVuz = function(){
    var result = $('#countryVuz:checked');
    var form = $('input[name="form"]:checked');
    var resLength = result.length;
    if(resLength >0){
        $("#trRodnoy").fadeIn("slow");
        if(form.val()=='formAny'){
            $("#anyForm4").fadeIn();
            $("#notAnyForm4").fadeOut();
        }else{
            $("#notAnyForm4").fadeIn();
            $("#anyForm4").fadeOut();
        }

    }else{
        $("#trRodnoy").fadeOut("slow");
    }


};

$('.form-check-input').change(function(){
    var a = $('#box1:checked');
    var b = $('#box2:checked');
    var c = $('#box3:checked');
    var d = $('#box4:checked');
    var e = $('#box5:checked');
    if (a.length>0) {
        $('input[name="price_book"]').attr('readonly',false);
    }else{$('input[name="price_book"]').attr('readonly',true);}
    if (b.length>0) {
        $('input[name="price_certificate"]').attr('readonly',false);
    }else{$('input[name="price_certificate"]').attr('readonly',true);}
    if (c.length>0) {
        $('input[name="price_translate"]').attr('readonly',false);
    }else{$('input[name="price_translate"]').attr('readonly',true);}
    if (d.length>0) {
        $('input[name="price_en"]').attr('readonly',false);
    }else{$('input[name="price_en"]').attr('readonly',true);}
    if (e.length>0) {
        $('input[name="price_book_en"]').attr('readonly',false);
    }else{$('input[name="price_book_en"]').attr('readonly',true);}

});
