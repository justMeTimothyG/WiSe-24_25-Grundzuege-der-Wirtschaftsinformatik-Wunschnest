const toggle = document.getElementById('dark-toggle');

// Icons in SVG (Sonne und Mond)
const sunPath = `
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4"/></svg>
`;
const moonPath = `
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path id="dark-mode-icon" d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
</svg>
`;

// Nutzereinstellung für Darkmode in localStorage speichern
if (localStorage.getItem('theme') === 'dark') {
  document.body.classList.add('dark');
  toggle.innerHTML = sunPath;
} else {
  document.body.classList.remove('dark');
  toggle.innerHTML = moonPath;
}

toggle.addEventListener('click', () => {
  // Wenn Nutzer Drückt, dann Theme ändern
  document.body.classList.toggle('dark');

  // Speichern der Nutzereinstellung in localStorage
  const isDarkMode = document.body.classList.contains('dark');
  localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');

  // Wechseln der Icons
  if (isDarkMode) {
    toggle.innerHTML = sunPath;
  } else {
    toggle.innerHTML = moonPath;
  }
});
