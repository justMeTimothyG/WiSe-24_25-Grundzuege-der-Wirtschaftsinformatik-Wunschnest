//Alle ELemente mit der Klasse 'lottie-animation' auswählen -> Ergenis ist ein Array aller dieser Items
const lottieAnimationElements = document.querySelectorAll(".lottie-animation");

// Animationen speichern in einem Array
const animations = [];

// Durch alle Elemente durchgehen und Funktionnen hinzufügen
lottieAnimationElements.forEach((element, index) => {
  // Lösche den Inhalt des Elements
  element.innerHTML = "";
  // Lade die Animation
  let animation = lottie.loadAnimation({
    container: element, // the DOM element where the animation will be rendered
    renderer: "svg", // render as SVG
    loop: false, // loop the animation
    autoplay: false, // start playing the animation
    path: "/assets/animation.json", // the path to the JSON animation file
  });

  //Animation im Array Speichern
  animations[index] = animation;

  // Funktion, um die Animation nach einer Verzögerung zu starten
  function startAnimationAfterDelay() {
    setTimeout(() => {
      animation.play(); // Play the animation after the delay
    }, 2000); // Adjust the delay (in milliseconds) as needed
  }

  startAnimationAfterDelay();

  // Finde das Parent Element mit der Klasse 'lottie-hover-target um die Animation zu starten
  const parentElement = element.closest(".lottie-hover-target") || element;
  // Add Event Listeners
  parentElement.addEventListener("mouseenter", function () {
    // Check if the animation is already finished
    if (animation.currentFrame >= animation.totalFrames) {
      animation.goToAndStop(0, true); // Reset to the beginning
    }
    animation.play(); // Play on hover
    animation.loop = true; // wiederholt abspielen
  });
  parentElement.addEventListener("mouseleave", function () {
    animation.loop = false; // nicht wiederholen
    //wenn die animation zu ende animieren lassen
    if (!animation.isPaused) {
      animation.play();
    }
    // Wenn animation schon beendet, dann nicht mehr weiter animieren
    animation.addEventListener("complete", function () {
      animation.stop(); // Stop the animation after it finishes
    });
  });
});
