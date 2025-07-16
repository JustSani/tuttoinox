$(function(){

  // jQuery methods go here...
    $(".card").click(function(){
        $('#exampleModal').modal("show")
        console.log(this.id)
        // 'https://sanino.altervista.org/carena/api/getData.php'
        $.post('api/getData.php', { id: this.id }, function(risposta) {
          console.log('Risposta:', risposta);
        });
    })

     $(".card").hover(function(){
        $(this).css('cursor','pointer');
    })


    $('#recipeCarousel').carousel({
      interval: 10000
    })

    $('.carousel .carousel-item').each(function(){
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