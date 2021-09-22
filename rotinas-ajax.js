
//ROTINA para SALVAR com AJAX
jQuery('#salvar').click(function(){

    var dadosajax = {
        'txPegaid':jQuery('#txPegaid').val(),
        'nomeCarro':jQuery('#nomeCarro').val(),
        'corCarro':jQuery('#corCarro').val(),
        'marcaCarro':jQuery('#marcaCarro').val(),
        'velMaxCarro':jQuery('#velMaxCarro').val(),
    };

    pageurl = 'salvar-categoria.php';

    jQuery.ajax({
        url: pageurl,
        data:dadosajax,
        type:'POST',
        success:function(html){
            jQuery('.msg').show();
            jQuery('.msgajax').html("Dados salvos com êxito!");
            jQuery('html body').animate({scrollTop:0},500);
            jQuery('.msg').fadeOut(3000);

            setTimeout(function(){
                location.href="carros.php";
            },3000);
        }
});
});


//exclusao com ajax

//referenciando a class excluir e quando clicar iremos executar uma function
jQuery('.excluir').click(function(){
    //Declarando variaveis

    //element vai receber o Jquery
    var element = $(this);

    //a var id vai recuperar o atributo id
    var id = element.attr("id");

    //a var info vai receber um texto
    var info = 'id=' +id;

    //vamos colocar um alert mais especifico
    if(confirm("Deseja realmente excluir esse carro?")){ //se caso a pessoa quiser excluir entraremos no if
        //chamamos o ajax
        $.ajax({
            //tipo de metodo que iremos usar
            type:"GET",
            //estamos chamando o arquivo excluir-categoria.php | vamos chamar um parametro, que vai receber nossa var id
            url:"./excluir-categoria.php?id=+id="+id,
            //data ira receber nossa var info
            data:info,
            //mensagem de exclusao
            success:function(){
                jQuery('.msg').show();
                jQuery('.msgajax').html("Dados Excluidos com êxito!");
                jQuery('html body').animate({scrollTop:0},500);
                jQuery('.msg').fadeOut(3000);

                setTimeout(function(){
                    window.location.reload(1);
                },3000);
            }
        });
    }


});





// impedindo de submeter via forms
jQuery('form').on('submit',function(e){
    e.preventDefault();  
});



//codigo do botao cancelar
jQuery('.bt-cancelar').click(function(){
    location.href="carros.php";


});