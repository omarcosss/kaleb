var rsvpModal = document.querySelector('#rsvp-modal');
var closeRsvp = document.querySelector('#close-modal-rsvp');
var openRsvp = document.querySelector('#open-modal-rsvp');

closeRsvp.addEventListener('click', function(){
    rsvpModal.style.display = 'none';
})
openRsvp.addEventListener('click', function(){
    rsvpModal.style.display = 'flex';
})

const radioButtons = document.querySelectorAll('input[name="presenca"]');
const inputAcompanhantes = document.getElementById('qnt_acompanhantes');
const inputAlergias = document.getElementById('alergias');

function updateVisibility() {
    const selectedValue = document.querySelector('input[name="presenca"]:checked').value;
    if (selectedValue === '0') {
        inputAcompanhantes.classList.add('hidden');
        inputAlergias.classList.add('hidden');
    } else {
        inputAcompanhantes.classList.remove('hidden');
        inputAlergias.classList.remove('hidden');
    }
}

// Adicionando ouvintes de eventos aos botões de rádio
radioButtons.forEach(radio => {
    radio.addEventListener('change', updateVisibility);
});
