import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

async function carregarcarrossel() {
    try {
        const swiper = new Swiper('.swiper', {
            loop: true,
            speed: 2000,
            effect: 'slide',
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                type: 'bullets',
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
        });
    } catch (error) {
        alert('Ocorreu um erro na renderização do carrossel');
        console.error('Erro na renderização do carrossel:', error);
    }
}

export default carregarcarrossel;