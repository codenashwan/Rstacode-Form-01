$(document).ready(function(){
    $("#submit").on("click", function(){
    var nameku = $("#nameku").val();
    var nameen = $("#nameen").val();
    var classs  = $( "#class option:selected" ).val();
       $(".alert").removeClass("d-none");
       $("#submit").addClass("d-none");
    $.post('proccess.php' , {nameku : nameku , nameen : nameen , classs : classs} , function(response){
        if(response === "success"){
            $(".alert").addClass("d-none");
            $(".form").html('<img src="assets/img/success.gif" width="300" alt="">');
        }else{
            $("#submit").removeClass("d-none");
            $(".alert").removeClass("d-none");
            $(".alert").html(response);
        }
    })
    })
    })