const heroImage = document.querySelector('[data-hero-image]');
const heroLabel = document.querySelector('[data-hero-label]');
const heroCount = document.querySelector('[data-hero-count]');
const carouselDots = Array.from(document.querySelectorAll('[data-carousel-slide]'));
const previousButton = document.querySelector('[data-carousel-previous]');
const nextButton = document.querySelector('[data-carousel-next]');

const coffeePhotos = [
    {
        image: heroImage.dataset.firstPhoto,
        alt: 'Friends sharing coffee together',
        caption: 'Good coffee, shared with good company.',
    },
    {
        image: heroImage.dataset.secondPhoto,
        alt: 'Hot water being poured over ground coffee',
        caption: 'A slow pour, made just the way you like it.',
    },
    {
        image: heroImage.dataset.thirdPhoto,
        alt: 'A warm, softly lit café with a menu board',
        caption: 'Discover a cozy neighborhood coffee shop.',
    },
];

let activePhotoIndex = 0;

function showPhoto(index) {
    activePhotoIndex = (index + coffeePhotos.length) % coffeePhotos.length;
    const photo = coffeePhotos[activePhotoIndex];

    heroImage.classList.add('is-unavailable');
    heroImage.src = photo.image;
    heroImage.alt = photo.alt;
    heroLabel.textContent = photo.caption;
    heroCount.textContent = `${String(activePhotoIndex + 1).padStart(2, '0')} / ${String(coffeePhotos.length).padStart(2, '0')}`;

    carouselDots.forEach((dot, dotIndex) => {
        const isActive = dotIndex === activePhotoIndex;

        dot.classList.toggle('is-active', isActive);
        dot.setAttribute('aria-pressed', String(isActive));
    });
}

heroImage.addEventListener('load', () => {
    heroImage.classList.remove('is-unavailable');
});

heroImage.addEventListener('error', () => {
    heroImage.classList.add('is-unavailable');
});

previousButton.addEventListener('click', () => {
    showPhoto(activePhotoIndex - 1);
});

nextButton.addEventListener('click', () => {
    showPhoto(activePhotoIndex + 1);
});

carouselDots.forEach((dot) => {
    dot.addEventListener('click', () => {
        showPhoto(Number(dot.dataset.carouselSlide));
    });
});

const menuToggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#primary-navigation');

menuToggle.addEventListener('click', () => {
    const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';

    menuToggle.setAttribute('aria-expanded', String(!isExpanded));
    menuToggle.setAttribute('aria-label', isExpanded ? 'Open navigation menu' : 'Close navigation menu');
    navigation.classList.toggle('is-open', !isExpanded);
});

navigation.addEventListener('click', (event) => {
    if (event.target.closest('a')) {
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Open navigation menu');
        navigation.classList.remove('is-open');
    }
});
