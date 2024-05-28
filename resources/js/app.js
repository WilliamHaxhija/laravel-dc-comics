import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const allCardImage = document.querySelectorAll('.single-card');
allCardImage.forEach((cardImage) => {
    cardImage.addEventListener('click', function() {
        
    });
});