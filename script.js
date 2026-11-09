const inner = document.getElementById('carouselInner');
const items = document.querySelectorAll('.carousel-item');
let index = 0;

function mostrarSlide(i) {
    inner.style.transform = `translateX(-${i * 100}%)`;

    items.forEach(item => item.classList.remove('active'));
    items[i].classList.add('active');
}

mostrarSlide(0); // anima o primeiro slide ao carregar

setInterval(() => {
    index = (index + 1) % items.length;
    mostrarSlide(index);
}, 5000);