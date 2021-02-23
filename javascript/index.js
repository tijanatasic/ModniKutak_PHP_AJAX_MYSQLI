$(document).ready(function(){
    $("#prijava").on('click',function(){
        var ime=$('#ime').val();
        var mail=$('#mail').val();
        if(ime!="" && mail!=""){
            $.ajax({
                url:"php/index_ajax.php",
                type: "POST",
                data:{
                    ime: ime,
                    mail: mail
                },
                cache: false,
                success: function(dataResult){
                    alert("Hvala Vam na prijavi");
                        $("#forma_news").find('input:text').val('');
                        
                }
            });
        }else{
            alert("Molimo Vas popunite polja za ime i e-mail");
        }
    });
});
