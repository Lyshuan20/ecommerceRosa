// init Isotope
var $grid = $('.popular-list').isotope({
    // options
  });
  // filter items on button click
  $('.filter-button-group').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    resetFilterBtns();
    $(this).addClass('active-filter-btn');
    $grid.isotope({ filter: filterValue });
  });

  var filterBtns = $('.filter-button-group').find('button');
  function resetFilterBtns(){
      filterBtns.each(function(){
          $(this).removeClass('active-filter-btn');
      })
  }
  
// -------------------------- BUSCADOR INTERNO -------------------------------

  //Ejecutando funciones
  document.getElementById("icon-search").addEventListener("click", mostrar_buscador);
  document.getElementById("cover-ctn-search").addEventListener("click",ocultar_buscador);

  //Declarando variables
  bars_search = document.getElementById("ctn-bars-search");
  cover_ctn_search = document.getElementById("cover-ctn-search");
  inputSearch = document.getElementById("inputSearch");
  box_search = document.getElementById("box-search");

  //Funcion para mostrar el buscador 
  function mostrar_buscador(){

    bars_search.style.top = "100px";
    cover_ctn_search.style.display = "block";
    inputSearch.focus();

  }

  //Funcion para ocultar buscador
  function ocultar_buscador(){

    bars_search.style.top = "-100px";
    cover_ctn_search.style.display = "none";
    inputSearch.value = "";
  }
// -------------------------- BOTON SUBIR -------------------------------
$(document).ready(function(){
  $('.ir-arriba').click(function(){
    $('body, html').animate({
      scrollTop: '0px'
    }, 300);
  });

  $(window).scroll(function(){
    if($(this).scrollTop() > 0){
      $('.ir-arriba').slideDown(300);
    }else{
      $('.ir-arriba').slideUp(300);
    }
  })

});

// -------------------------- SLIDER CATEGORIAS -------------------------------

$(document).ready(function() {
  $('#autoWidth').lightSlider({
      autoWidth:true,
      loop:true,
      onSliderLoad: function() {
          $('#autoWidth').removeClass('cS-hidden');
      } 
  });  
});

