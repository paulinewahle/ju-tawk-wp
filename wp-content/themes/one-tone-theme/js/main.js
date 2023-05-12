
// let mouseCursor = document.querySelector("#custom-cursor");
// let followImg = document.querySelector("img");

window.addEventListener("mousemove", imgFollow);

// function mouseFollow(e) {
//   mouseCursor.style.left = e.clientX + "px";
//   mouseCursor.style.top = e.clientY + "px";
// }

// function imgFollow(e){
//   let rect = body.getBoundingClientRect();
//     console.log(rect);
//     followImg.style.left = e.clientX + "px";
//     followImg.style.top = e.clientY + "px";
// }
const container = document.querySelector("main");
const fixed = document.querySelector("img");

let offsetX = 0;
let offsetY = 0;

function imgFollow(e){
  const rect = container.getBoundingClientRect();
  const mouseX = e.clientX - rect.left;
  const mouseY = e.clientY - rect.top;
  
  const centerX = fixed.offsetLeft + fixed.offsetWidth / 2;
  const centerY = fixed.offsetTop + fixed.offsetHeight / 2;
  
  const distanceX = mouseX - centerX;
  const distanceY = mouseY - centerY;
  
  const maxDistance = 50;
  const maxDistanceSquared = maxDistance * maxDistance;
  
  if (distanceX * distanceX + distanceY * distanceY <= maxDistanceSquared) {
    offsetX = distanceX * (maxDistance / Math.sqrt(distanceX * distanceX + distanceY * distanceY));
    offsetY = distanceY * (maxDistance / Math.sqrt(distanceX * distanceX + distanceY * distanceY));
  }
  
  fixed.style.top = `${fixed.offsetTop + offsetY}px`;
  fixed.style.left = `${fixed.offsetLeft + offsetX}px`;
};

container.addEventListener("mouseleave", () => {
  offsetX = 0;
  offsetY = 0;
});
