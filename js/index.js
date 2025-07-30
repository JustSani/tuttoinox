$(function(){

  $(window).on('scroll', function () {
    var parallaxFactor = 0.1; // più piccolo = movimento più lento
    var offset = $(window).scrollTop() * parallaxFactor;
    $('.whatsapp-button-absolute').css('transform', 'translateY(-' + offset + 'px)');
  });

  // jQuery methods go here...
    $(".card").click(function(){
      $('#exampleModal').modal("show")
      console.log(this.id)
      // 'https://sanino.altervista.org/carena/api/getData.php'
      $.ajax({
        url: 'api/getData.php',
        type: 'POST',
        data: { id: this.id },
        dataType: 'json',
        success: function(response) {
           $("#carousel-inner").empty();
            $("#modal-title").text(response.Titolo);
            $("#modal-secondo-titolo").text(response.Secondo_Titolo);
            $("#modal-descrizione-lunga").text(response.Descrizione_Lunga);
            let images = response.img1.split(',');
            images.forEach((image, idx) => {
              $("#carousel-inner").append(`
                <div class="carousel-item${idx === 0 ? ' active' : ''}">
                  <img src="${image}" class="d-block w-100" alt="Carrello">
                </div>
              `);
            });
            
        },
        error: function(xhr, status, error) {
            console.error("Errore nella richiesta AJAX:", error);
        }
      });
    })

    $("#btn-modal-contatti").click(function(){
        $('#exampleModal').modal("hide")

    })

    $("#btn-whatsapp-fixed").click(function(){
        window.location.href = "https://api.whatsapp.com/send?phone=3334714990&text=Salve, sono interessato ai vostri servizi!";
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

    $("#btn-logo").click(function(){
        window.location.href = "/tuttoinox/";
    });
    $("#btn-logo").hover(function(){
        $(this).css('cursor','pointer');
    });
});