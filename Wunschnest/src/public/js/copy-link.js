// Kopiere den Link beim drücken des buttons

// Wähle BUtton aus
const copyLinkButton = document.querySelector("#share-list-button");

// Select Share info button
const shareInfoSpan = document.querySelector("#share-info");

// Check if the wishlist is already shared, dann copy funktion, sonst einfach als button zum weiterleiten zum teilen.

if (shareInfoSpan.innerHTML == "Teilen") {
  // Make button clickable and link to share php script
  copyLinkButton.addEventListener("click", function () {
    //
  });
} else {
  // Add Event Listener
  copyLinkButton.addEventListener("click", function () {
    // Select Link from data-share-link attribute
    const shareLink = copyLinkButton.getAttribute("data-share-link");

    // Copy Link
    navigator.clipboard.writeText(shareLink);
  });
}
