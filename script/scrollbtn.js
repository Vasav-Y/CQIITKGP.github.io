mybutton = document.getElementById("myScrollBtn");
mybutton.addEventListener("click", topFunction);
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  //   console.log("hi");
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    mybutton.style.display = "block";
    // console.log("block");
  } else {
    // console.log("none");
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  //   console.log("hiiiiiiiii");
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0;
}
