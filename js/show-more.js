const btn = document.querySelector('.btn-show-more');
const cards = Array.from(document.querySelectorAll('.video-card'));

window.addEventListener('resize', event => {
    if (event.target.window.innerWidth > 767) respomse1();
    if (event.target.window.innerWidth <= 767) respomse2();
})


function openCatalog() {
    btn.addEventListener('click', () => {
        cards.forEach(item => item.classList.remove('hidden'));
        btn.classList.add('hidden');
    })
}


function respomse1() {
    if (window.innerWidth > 767) {
        btn.classList.add('hidden');

        cards.forEach((item, index) => {
            item.classList.add('hidden')
            if (index <= 5) {
                item.classList.remove('hidden');
            } else if (index > 5) {
                btn.classList.remove('hidden');
            }
            openCatalog();
        })
    }
}
respomse1();

function respomse2() {
    if (window.innerWidth <= 767) {
        btn.classList.add('hidden');

        cards.forEach((item, index) => {
            item.classList.add('hidden')
            if (index <= 2) {
                item.classList.remove('hidden');
            } else if (index > 2) {
                btn.classList.remove('hidden');
            }
            openCatalog();
        })
    }
}
respomse2();