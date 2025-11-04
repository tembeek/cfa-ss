// assets/main.js
// Lightweight form feedback. Server-side processing is not included.
// This script only provides client-side UX feedback and basic validation.

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Basic client-side validation
        const name = form.querySelector('#name').value.trim();
        const email = form.querySelector('#email').value.trim();
        const message = form.querySelector('#message').value.trim();
        const responseEl = document.getElementById('response');

        if (!name || !email || !message) {
            responseEl.style.color = 'orange';
            responseEl.textContent = 'Please complete all fields.';
            return;
        }

        // Simulated submit UX
        responseEl.style.color = 'green';
        responseEl.textContent = 'Sending...';

        // Simulate server call with a short timeout for UX only.
        setTimeout(() => {
            responseEl.style.color = 'green';
            responseEl.textContent = 'Thank you. We will contact you soon.';
            form.reset();
        }, 800);
    });
});
