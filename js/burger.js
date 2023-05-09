let item = document.querySelector('.burger');
let count = true;
function burger() {
    if (count == true) {
        item.classList.add('activated');
        count = false;
    } else {
        item.classList.remove('activated');
        count = true;
    }
}
// activated
