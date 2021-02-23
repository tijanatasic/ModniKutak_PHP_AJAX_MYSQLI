$(document).ready(function(){
    $("#posalji_odeca").on('click',function(e){
        e.preventDefault();
        var korisnicko_ime_odeca=$('#ime_odeca').val();
        var komentar_odeca=$('#komentar_odeca').val();
        var ocena_odeca=$('#ocena_odeca').val();
        if(korisnicko_ime_odeca!="" && komentar_odeca!="" && ocena_odeca!=""){
            $.ajax({
                url:"../php/odeca_ajax.php",
                type: "POST",
                data:{
                    korisnicko_ime_odeca: korisnicko_ime_odeca,
                    komentar_odeca: komentar_odeca,
                    ocena_odeca: ocena_odeca
                },
                cache: false,
                success: function(dataResult){
                    alert("Uspesno ste dodali komentar");
                    $("#rec_forma").find('input:text').val('');
                    $("#rec_forma").find('select').val('');        
                    location.href = window.location.href;  
                }
            });
        }else{
            alert("Molimo Vas popunite sva polja");
        }
    });
});



$(document).ready(function(){
    $("#prikazi_moje").on('click',function(){
        if(document.getElementById("sakrivena_tabela").style.display==="block"){
            document.getElementById("sakrivena_tabela").style.display="none";
        }
        if (document.getElementById("searchpanel").style.display === "none"){
            document.getElementById("searchpanel").style.display="block";
        }
        if(document.getElementById("verformid").style.display==="none"){
            document.getElementById("verformid").style.display="inline-table";
        }
    });   
});

$(document).ready(function(){
    $("#prikazi_sve").on('click',function(){
    document.getElementById("verformid").style.display="none";
    document.getElementById("searchpanel").style.display="none";
    var btn=1;
        $.ajax({
            type: 'POST',
            url: "../php/odeca_ajax.php",
            data: {
                "btn":btn
            },
            dataType: "text",
            success: function(response){
                $("#tabela").html(response);
            }
        });
    document.getElementById("sakrivena_tabela").style.display="none";
    if (document.getElementById("sakrivena_tabela").style.display === "none")
        document.getElementById("sakrivena_tabela").style.display="block";
        
    });   
});

function deleteAjax(id){
    if(confirm('Da li ste sigurni?')){
        $.ajax({
            type:'post',
            url:'../php/odeca_ajax.php',
            data:
            {delete_id: id},
            success:function(data){
                var obrisan='table#verformid tr#'+id;
                $(obrisan).hide('slow');
            }
        });
    }
}


$(document).ready(function(){
    $(document).on('click','a[data-role=update]',function(){
        document.getElementById('korisnicko_ime_update').disabled = true;
        var id=$(this).data('id');
        var korisnicko_ime=$('#'+id).children('td[data-target=korisnicko_ime]').text();
        var komentar=$('#'+id).children('td[data-target=komentar]').text();
        var ocena=$('#'+id).children('td[data-target=ocena]').text();
        $('#korisnicko_ime_update').val(korisnicko_ime);
        $('#komentar_update').val(komentar);
        $('#ocena_update').val(ocena);
        $('#user_id').val(id);
        $('#myModal').modal('show');

        $('#save').click(function(){
            var korisnicko_ime=$('#korisnicko_ime_update').val();
            var komentar=$('#komentar_update').val();
            var ocena=$('#ocena_update').val();
            console.log(id);
            $.ajax({
                url:'../php/odeca_ajax.php',
                method: 'post',
                data: {
                    korisnicko_ime: korisnicko_ime,
                    komentar: komentar,
                    ocena: ocena,
                    id: id
                },
                success: function(response){
                    $('#'+id).children('td[data-target=korisnicko_ime]').text(korisnicko_ime);
                    $('#'+id).children('td[data-target=komentar]').text(komentar);
                    $('#'+id).children('td[data-target=ocena]').text(ocena);
                    $('#myModal').modal('toggle');
                }
            });
        });
    });
});


$(document).ready(function(){
    $("#searchdata").click(function(e){
        e.preventDefault();
        var ime=$("#name").val();
        if(ime==""){
            alert("Unesite korisnicko ime");
            location.href = window.location.href;  
        }
        $.ajax({
            type: 'POST',
            url: "../php/odeca_ajax.php",
            data: {
                "search_post_btn":1,
                "ime": ime
            },
            dataType: "text",
            success: function(response){
                $("#verformid").html(response);
            }
        });
    });
});