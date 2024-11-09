// Toast Element auswählen mit der ID "toast"
const toastElement = document.getElementById("toast");
// X Element auswählen
const closeElement = document.getElementById("toast-close");

// Überprüfen, ob sowohl das Toast-Element als auch das Schließen-Element vorhanden sind
if (toastElement && closeElement) {
  // Toast-Element entfernen beim Klicken auf das X
  closeElement.addEventListener("click", function () {
    // Füge Klassen für die Animation hinzu
    toastElement.classList.add("h-0", "-mb-8");

    // Entferne das Element nach der Animation
    setTimeout(function () {
      toastElement.remove();
    }, 500);
  });
}
