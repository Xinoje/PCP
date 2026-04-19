const bouton = document.getElementById('bouton');
const titreh1 = document.querySelectorAll('h1');

function click_button(){
    titreh1.textContent = `click' ${titreH1}`;;
}

bouton.addEventListener('click', click_button);