const carousel = document.querySelector('#services-carousel');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');
const bCarousel = document.querySelector('#babysitters-carousel');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

// carousel to display services

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

// carousel to display babysitters

prevBtn.addEventListener('click', () => {
    bCarousel.scrollBy({
        left: -300,
        behavior: 'smooth'
    });
});

nextBtn.addEventListener('click', () => {
    bCarousel.scrollBy({
        left: 300,
        behavior: 'smooth'
    });
});
