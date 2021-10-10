function buscarNome(nomeproduto){
    $.ajax({
        url: "http://localhost/TCC/app/pesquisar-produtos.php",
        method: "POST",
        data :{nomeproduto:nomeproduto},
        success: function(produto){
            $('#resultado').html(produto).img();
        }
    });
}

$(document).ready(function(){
    $('#pesquisar').keyup(function(){
        var nomeproduto = $(this).val();
        if(nomeproduto != ''){
            buscarNome(nomeproduto);
        }
        else{
            buscarNome();
        }
    })
})