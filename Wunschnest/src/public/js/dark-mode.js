const toggle = document.getElementById('dark-toggle');


toggle.addEventListener('click', () => {
    // Wenn Nutzer Drückt, dann Theme ändern    
    document.body.classList.toggle('dark');

    // Save user's preference in localStorage
    const isDarkMode = document.body.classList.contains('dark');
    localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
});

// Save user's preference in localStorage
if (localStorage.getItem('theme') === 'dark') {
    document.body.classList.add('dark');
}
