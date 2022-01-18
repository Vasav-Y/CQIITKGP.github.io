const radioButton1 = document.getElementById("slide1");
const radioButton2 = document.getElementById("slide2");
const radioButton3 = document.getElementById("slide3");
const radioButton4 = document.getElementById("slide4");
const noticeBoard = document.getElementById("noticeboard-slider");
const radioButtons = [radioButton1, radioButton2, radioButton3, radioButton4];
const currElement = 0;
let i = currElement;
const noticeBoardAuto = function () {
  radioButtons[i].checked = false;
  i++;
  if (i > 3) {
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
  noticeBoard.classList.toggle("noticeBoard-fadein");
};
