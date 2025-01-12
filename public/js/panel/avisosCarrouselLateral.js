$(document).ready(function() {
    const carrouselTarget = $('.avisos-carrousel');
    let isMousePressionado = false;
    let inicioX;
    let scrollLeft;

    carrouselTarget.on('mousedown', function(e) {
        isMousePressionado = true;
        carrouselTarget.addClass('rolagem-ativa');
        inicioX = e.pageX - carrouselTarget.offset().left;
        scrollLeft = carrouselTarget.scrollLeft();
    });

    carrouselTarget.on('mouseleave mouseup', function() {
        isMousePressionado = false;
        carrouselTarget.removeClass('rolagem-ativa');
    });

    carrouselTarget.on('mousemove', function(e) {
        if (!isMousePressionado) return;
        e.preventDefault();
        const posicaoX = e.pageX - carrouselTarget.offset().left;
        const rolagem = (posicaoX - inicioX) * 1; //scroll-fast
        carrouselTarget.scrollLeft(scrollLeft - rolagem);
    });

    carrouselTarget.on('wheel', function(e) {
        e.preventDefault();
        carrouselTarget.scrollLeft(carrouselTarget.scrollLeft() + e.originalEvent.deltaY);
    });
});