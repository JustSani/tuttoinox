$(function(){

  // jQuery methods go here...
    $(".card").click(function(){
        $('#exampleModal').modal("show")
        console.log(this.id)
        // 'https://sanino.altervista.org/carena/api/getData.php'
        $.post('api/getData.php', { id: this.id }, function(risposta) {
          console.log(JSON.parse(risposta));
          let response = JSON.parse(risposta)
          $("#modal-title").text(response.Titolo)
          $("#modal-secondo-titolo").text(response.Secondo_Titolo)
          $("#modal-descrizione-lunga").text(response.Descrizione_Lunga)
          $("#modal-title").text(response.Titolo)
          $("#modal-title").text(response.Titolo)
        });

    })

    $("#btn-modal-contatti").click(function(){
        $('#exampleModal').modal("hide")

    })

    $("#btn-whatsapp-fixed").hover(function(){
        $(this).css('cursor','pointer');

    })

     $(".card").hover(function(){
        $(this).css('cursor','pointer');
    })


    $('#recipeCarousel').carousel({
      interval: 10000
    })

    $('.carousel-custom .carousel-item').each(function(){
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
        next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        for (var i=0;i<minPerSlide;i++) {
            next=next.next();
            if (!next.length) {
              next = $(this).siblings(':first');
            }
            
            next.children(':first-child').clone().appendTo($(this));
          }
    });
});