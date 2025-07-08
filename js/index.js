$(function(){

  // jQuery methods go here...
    $(".card").click(function(){
        $('#exampleModal').modal("show")
    })

     $(".card").hover(function(){
        $(this).css('cursor','pointer');
    })
});