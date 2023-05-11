
let mouseCursor = document.querySelector("#custom-cursor");
let followImg = document.querySelectorAll("img");

window.addEventListener("mousemove", imgFollow);

function mouseFollow(e) {
  mouseCursor.style.left = e.clientX + "px";
  mouseCursor.style.top = e.clientY + "px";
}

// function imgFollow(e){
//     followImg.style.left = e.clientX + "px";
//     followImg.style.top = e.clientY + "px";
// }