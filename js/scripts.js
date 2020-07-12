if (screen.width <= 699) {
  document.location = "index_mobile.html";
}
unmuteButton.addEventListener("click", function() {
  console.log("button clicked");
  video.muted = !video.muted;
});
