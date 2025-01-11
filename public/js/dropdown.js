document.querySelectorAll('button[aria-controls]').forEach(button => {
    button.addEventListener('click', () => {
        const content = document.getElementById(button.getAttribute('aria-controls'));
        
        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            button.setAttribute('aria-expanded', 'true');
        } else {
            content.classList.add('hidden');
            button.setAttribute('aria-expanded', 'false');
        }
    });
});
