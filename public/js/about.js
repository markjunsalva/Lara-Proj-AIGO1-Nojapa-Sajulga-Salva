
document.addEventListener('DOMContentLoaded', () => {
    const readMoreButton = document.querySelector('[data-read-more]');
    const additionalStory = document.querySelector('[data-story-more]');

    if (!readMoreButton || !additionalStory) {
        return;
    }

    readMoreButton.addEventListener('click', () => {
        const isExpanded =
            readMoreButton.getAttribute('aria-expanded') === 'true';

        additionalStory.hidden = isExpanded;

        readMoreButton.setAttribute(
            'aria-expanded',
            String(!isExpanded)
        );

        readMoreButton.textContent = isExpanded
            ? 'Read More'
            : 'Read Less';
    });
});
