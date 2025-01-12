document.addEventListener("DOMContentLoaded", function () {
  console.log("App initialized.");
  
  // Spinner functionality
  const body = document.querySelector("body");
  if (body.classList.contains("show-spinner")) {
    setTimeout(() => {
      body.classList.remove("show-spinner");
    }, 2000); // Simulate loading time
  }
  
  // Example functionality: Add event listeners to buttons (if needed)
  const buttons = document.querySelectorAll("button");
  buttons.forEach(button => {
    button.addEventListener("click", () => {
      alert("Button clicked!");
    });
  });
});