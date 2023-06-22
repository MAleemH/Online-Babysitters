// carousel to display services

const carousel = document.querySelector('#services-carousel');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

prevButton.addEventListener('click', () => {
    carousel.scrollBy({
        left: -300,
        behavior: 'smooth'
    });
});

nextButton.addEventListener('click', () => {
    carousel.scrollBy({
        left: 300,
        behavior: 'smooth'
    });
});