//Select all elemts with the class 'lottie-animation'
const lottieAnimationElements = document.querySelectorAll(".lottie-animation");

// Anomationen speichern in einem Array
const animations = [];

console.log(lottieAnimationElements)
// Add Event Listeners to all Elements to animate with mouseovers
lottieAnimationElements.forEach((element, index) => {
  // Lade die Animation
  let animation = lottie.loadAnimation({
    container: element, // the DOM element where the animation will be rendered
    renderer: "svg", // render as SVG
    loop: false, // loop the animation
    autoplay: false, // start playing the animation
    path: "./assets/animation.json", // the path to the JSON animation file
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

  // Add Event Listeners
  element.addEventListener("mouseenter", function () {
    // Check if the animation is already finished
    if (animation.currentFrame >= animation.totalFrames) {
      animation.goToAndStop(0, true); // Reset to the beginning
    }
    animation.play(); // Play on hover
    animation.loop = true; // wiederholt abspielen
  });
  element.addEventListener("mouseleave", function () {
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
