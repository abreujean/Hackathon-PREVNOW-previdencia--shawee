
$(function(){
    ocultaOpcoesPreAbertaFechada();
    
});
var data='';
function exibeOpcoesPrevAbertaFechada(){
    var chkFechada = $('#complFechada').prop("checked");
    var chkAberta = $('#complAberta').prop("checked");

    if(chkFechada === true){
        $("#efpc").css('display','block');
        
    }
    else {
        $("#efpc").css("display", "none");
        $("#EFPC1").prop('checked', false);
        $("#EFPC2").prop('checked', false);
    }

    if (chkAberta === true){
        $("#bancos").css('display','block');
    }
    else {
        $("#bancos").css('display','none');
        $("#abc").prop('checked', false);
        $("#xyz").prop('checked', false);
    }
}

function ocultaOpcoesPreAbertaFechada(){

    $("#bancos").css("display", "none");
    $("#efpc").css("display", "none");
}

function nextform(f){

    data+=$('#form-'+f).serialize()+"&";
    //console.log(data);
    $("#form-"+f).hide();
    $("#form-"+(f+1)).show();
  

}

function backform(f){
    $("#form-"+f).hide();
    $("#form-"+(f-1)).show();
  

}

function send(){
    data+=$('#form-4').serialize();
    data+="&call=send";
    $.post( "php/handler.php", data, function( response ) {
        $("#form-4").hide();
        $("#details").hide();
        //$("#validation").show();
        $("#contrato_operacional").html(response); 
  console.log( "Data Loaded: " + response );
});
    //console.log(data);
}

function update(){
    data+=$('#form-4').serialize();

    data+="&call=update";
    $.post( "php/handler.php", data, function( response ) {
           $("#form-4").hide();
            $("#details").hide();
     //$("#validation").show();
      $("#contrato_operacional").html(response);
  console.log( "Data Loaded: " + response );
}); 
}