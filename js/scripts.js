if (screen.width <= 699) {
  document.location = "youtube-videos.html";
}
unmuteButton.addEventListener("click", function () {
  console.log("button clicked");
  video.muted = !video.muted;
});
