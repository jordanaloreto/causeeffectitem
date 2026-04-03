document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.tool-card');

    cards.forEach(card => {
        card.addEventListener('click', function () {
            const content = this.querySelector('.tool-content');
            content.classList.toggle('active');
        });
    });
});