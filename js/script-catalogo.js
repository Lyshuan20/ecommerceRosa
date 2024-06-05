// Filtro de categorias de catalogo
$('.filtro-categorias').on( 'click', 'li', function() {
    var filterCategoria = $(this).attr('data-filter');
    resetFilterBtns();
    $(this).addClass('active-filter');
    $grid.isotope({ filter: filterCategoria });
  });

  var filterLi = $('.filtro-categorias').find('li');
  function resetFilterBtns(){
      filterLi.each(function(){
          $(this).removeClass('active-filter');
      })
  }
//-------------------DETALLES DE PRODUCTOS----------------------------
let preveiwContainer = document.querySelector('.products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

document.querySelectorAll('.products-container .product').forEach(product =>{
    product.onclick = () =>{
        preveiwContainer.style.display = 'flex';
        let name = product.getAttribute('data-name');
        previewBox.forEach(preview =>{
            let target = preview.getAttribute('data-target');
            if(name == target){
                preview.classList.add('active');
            }
        });
    };
});

previewBox.forEach(close =>{
    close.querySelector('.fa-times').onclick = () =>{
        close.classList.remove('active');
        preveiwContainer.style.display = 'none';
    };
});