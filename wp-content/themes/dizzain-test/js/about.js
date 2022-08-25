const items = document.querySelectorAll('.about__item');
const titles = document.querySelectorAll('.about__item-title');

titles.forEach(title => {
    title.addEventListener('click', () => {
        items.forEach(item =>{
            item.classList.remove('about__item--active');
        });
        title.closest('.about__item').classList.add('about__item--active');
    });
});