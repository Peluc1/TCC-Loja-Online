
$(document).ready(function(){

    var form = document.getElementById('anunciar');

    form.addEventListener('submit', function(event){
        event.preventDefault();

        var fd = new FormData(form);

        var files = $('.arquivo')[0].files;
        
        if(files.length > 0 ){
           fd.append('file',files[0]);

        
           $.ajax({
              url: '../app/cadastroproduto.php',
              type: 'post',
              data: fd,
              contentType: false,
              processData: false,
              success: function(response){
                 if(response != 0){
                    alert(response);
                 }else{
                    alert('response');
                 }
              },
           });
        }else{
           alert("Please select a file.");
        }
    });
});
