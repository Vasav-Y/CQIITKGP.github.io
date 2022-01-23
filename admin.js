"use strict";
const qlist = document.querySelector("#question-list");
let noQuestion;
const btndel = document.querySelector(".deletebtn");
const btnAdd = document.querySelector(".addbtn");
const btnEdit = document.querySelector(".editbtn");
const addSec = document.querySelector(".add");
const editSec = document.querySelector(".edit");
const deleteSec = document.querySelector(".delete");

btnAdd.addEventListener("click", function (e) {
  e.preventDefault();
  addSec.classList.remove("d-none");
});
btnEdit.addEventListener("click", function (e) {
  e.preventDefault();
  editSec.classList.remove("d-none");
});
btndel.addEventListener("click", function (e) {
  e.preventDefault();
  deleteSec.classList.remove("d-none");
});

document.querySelector(".QAdd").addEventListener("click", function (event) {
  event.preventDefault();

  let i = 0;
  let html;

  noQuestion = Number(document.querySelector("#QuestionNo").value);
  for (; i < noQuestion; i++) {
    html = `
<div class="mb-3">
    <label for="cat_title" class="form-label">Question Summary</label>
    <input type="text" class="form-control" id="cat_title" name ="QS[${i}]"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Should be of atmost 5-6 words</div>
</div>
<div class="mb-3">
  <label for="cat_title" class="form-label">Question</label>
  <input type="text" class="form-control" id="cat_title" name ="Q[${i}]"  aria-describedby="emailHelp">
  <div id="emailHelp" class="form-text">Write the Question</div>
</div>
<div class="mb-3">
    <label for="cat_desc" class="form-label">Answer</label>
    <input type="text" class="form-control" id="cat_desc" name = "A[${i}]" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">The answer given</div>
</div>`;
    qlist.insertAdjacentHTML("beforeend", html);
  }
});
