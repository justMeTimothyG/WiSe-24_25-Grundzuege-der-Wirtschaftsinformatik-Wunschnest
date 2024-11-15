// Wähle den Span aus mit der ID "countdown"
const countdownSpan = document.getElementById("countdown");

// Hole den Standard wert aus dem HTML und konvertiere ihn in eine Zahl
let count = parseInt(countdownSpan.textContent);

// Warte bis die Seite geladen ist und starte den Timer
window.addEventListener("load", function () {
  setInterval(function () {
    if (count > 0) {
      countdownSpan.textContent = count;
      count--;
    } else {
      window.location.href = "/"; // Weiterleitung zur Startseite
    }
  }, 1000);
});
