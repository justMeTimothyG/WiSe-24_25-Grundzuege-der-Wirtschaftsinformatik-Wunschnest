// Kopiere den Link beim drücken des buttons

// Wähle Button aus
const copyLinkButton = document.querySelector("#share-list-button");

// Select Share info button
const shareInfoSpan = document.querySelector("#share-info");

// Wunschliste ID
const wishlist_id = copyLinkButton.getAttribute("data-wishlist-id");

// Check if the wishlist is already shared, dann copy funktion, sonst einfach als button zum weiterleiten zum teilen.

if (shareInfoSpan.innerText == "Teilen") {
  // Wunschliste wurde noch nicht geteilt, also muss dies erst noch geteilt werden.
  // Auf Click "hören" und die Liste über ein PHP Script teilen.
  copyLinkButton.addEventListener("click", function () {
    // open PHP Script
    window.location.href = "/share_wishlist.php?wishlist_id=" + wishlist_id;
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
