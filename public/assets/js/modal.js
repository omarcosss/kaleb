var rsvpModal = document.querySelector('#rsvp-modal');
var closeRsvp = document.querySelector('#close-modal-rsvp');
var openRsvp = document.querySelector('#open-modal-rsvp');

closeRsvp.addEventListener('click', function(){
    rsvpModal.style.display = 'none';
})
openRsvp.addEventListener('click', function(){
    rsvpModal.style.display = 'flex';
})
