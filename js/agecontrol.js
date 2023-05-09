let clickelem = document.querySelectorAll('.ageblock li');
let elem = document.querySelectorAll('.grid-show');
function clicking() {
    clickelem[0].addEventListener('click', function () {
        elem[0].classList.remove('invisible');
        elem[1].classList.add('invisible');
        elem[2].classList.add('invisible');
        elem[3].classList.add('invisible');
        console.log('dasdsa')
    });
    clickelem[1].addEventListener('click', function () {
        elem[0].classList.add('invisible');
        elem[1].classList.remove('invisible');
        elem[2].classList.add('invisible');
        elem[3].classList.add('invisible');
        console.log('dasdsa')
    });
    clickelem[2].addEventListener('click', function () {
        elem[0].classList.add('invisible');
        elem[1].classList.add('invisible');
        elem[2].classList.remove('invisible');
        elem[3].classList.add('invisible');
        console.log('dasdsa')
    });
    clickelem[3].addEventListener('click', function () {
        elem[0].classList.add('invisible');
        elem[1].classList.add('invisible');
        elem[2].classList.add('invisible');
        elem[3].classList.remove('invisible');
        console.log('dasdsa')
    });
}
clicking();

