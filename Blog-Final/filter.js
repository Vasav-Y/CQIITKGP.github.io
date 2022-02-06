filterSelection("all");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("blogc");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show2");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show2");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("btnContainer");
var btns = btnContainer.getElementsByClassName("btnf");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("activef");
    current[0].className = current[0].className.replace(" activef", "");
    this.className += " activef";
  });
}
const passwords = ["U8PCNWxtg4GmSpQ", "SJn6SPjP8MdTBCc", "yf4NRceLvreL2eQ"];
let flag = 0;
const loginButton = document.querySelector("#login_button");
const loginAdminName = document.querySelector("#admin-name");
const loginPassword = document.querySelector("#password");
loginButton.addEventListener("click", function () {
  if (loginAdminName.value === "") {
    passwords.forEach(function (password) {
      if (loginPassword.value === password) flag = 1;
    });
  }
  if (flag === 1) {
    console.log(1);
    window.location.href = "admin.php";
  }
});
