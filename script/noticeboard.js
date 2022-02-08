let width = window.innerWidth;
const radioButton1 = document.getElementById("slide1");
const radioButton2 = document.getElementById("slide2");
const noticeBoard = document.getElementById("noticeboard-slider");
const img1 = document.getElementById("img1");
const noticeboard_button = document.querySelector(".notice_button");
const content = document.querySelector(".content");
const otherImgs = document.getElementsByClassName("img-others");
const radioButtons = [radioButton1, radioButton2];
const close = document.querySelectorAll(".close__noticeboard");

// const height = img1.naturalHeight;
// for (let i = 0; i < otherImgs.length; i++) {
//   otherImgs[i].style.height = `${height}px`;
// }
const currElement = 0;
let i = currElement;
const noticeBoardAuto = function () {
  radioButtons[i].checked = false;
  i++;
  if (i > 1) {
    i = 0;
  }
  radioButtons[i].checked = true;
};

noticeBoardInterval = setInterval(noticeBoardAuto, 5000);
radioButtons.forEach((radioButton) =>
  radioButton.addEventListener("click", function (e) {
    console.log(e.target);
    i = e.target.dataset.number - 1;
    clearInterval(noticeBoardInterval);
    noticeBoardInterval = setInterval(noticeBoardAuto, 5000);
  })
);
const noticeboardToggle = function () {
  noticeBoard.classList.toggle("noticeBoard-fadeout");
  // content.classList.toggle("disp");

  // content.classList.toggle("disp");
  noticeBoard.classList.toggle("noticeBoard-fadein");
};
close.forEach((el) => el.addEventListener("click", noticeboardToggle));
const buttonBlink = function () {
  noticeboard_button.classList.toggle("button_dance_on");
  noticeboard_button.classList.toggle("button_dance_off");
};
setInterval(buttonBlink, 1000);
