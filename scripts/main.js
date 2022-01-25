$(document).ready(function(){
    /*JQuery for Complete Solution Provider Panel on Homepage*/
    $(function(){
            $('.csp-show').click(function(){
                  $('.csp-targetdiv').hide();
                  $('.csp-show').removeClass('current')
                  $($(this).addClass('current'))
                  $('#csp-'+$(this).attr('target')).show();
            });
    });

    /*Slick Slider
        https://www.solodev.com/blog/web-design/how-to-add-an-infinite-client-logo-carousel-to-your-website.stml
        https://kenwheeler.github.io/slick/
    */
        $('.logo-carousel').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            responsive: [{
              breakpoint: 768,
              settings: {
                slidesToShow: 4
              }
            }, {
              breakpoint: 520,
              settings: {
                slidesToShow: 2
              }
            }]
          });    
});
