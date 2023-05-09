let ApplicationSection = document.querySelector('.application-section');
let ReviewSection = document.querySelector('.review-section');
let UserSection = document.querySelector('.user-section');

function Application() {
    document.querySelector('.navigation>div:first-child').classList.add('activated');
    document.querySelector('.navigation>div:nth-child(2)').classList.remove('activated');
    document.querySelector('.navigation>div:last-child').classList.remove('activated');
    ReviewSection.style.top = 101 + 'vh';
    UserSection.style.top = 101 + 'vh';
}
function Review() {
    document.querySelector('.navigation>div:first-child').classList.remove('activated');
    document.querySelector('.navigation>div:nth-child(2)').classList.add('activated');
    document.querySelector('.navigation>div:last-child').classList.remove('activated');
    ReviewSection.style.top = 60 + 'px';
    UserSection.style.top = 101 + 'vh';
}
function User() {
    document.querySelector('.navigation>div:first-child').classList.remove('activated');
    document.querySelector('.navigation>div:nth-child(2)').classList.remove('activated');
    document.querySelector('.navigation>div:last-child').classList.add('activated');
    ReviewSection.style.top = 60 + 'px';
    UserSection.style.top = 60 + 'px';
}