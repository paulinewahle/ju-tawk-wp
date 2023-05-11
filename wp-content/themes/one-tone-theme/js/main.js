
let mouseCursor = document.querySelector("#custom-cursor");

window.addEventListener("mousemove", mouseFollow);

function mouseFollow(e) {
  mouseCursor.style.left = e.clientX + "px";
  mouseCursor.style.top = e.clientY + "px";
}