

const likeBtn = document.querySelector(".likeBtn");
const commentBtn = document.querySelector(".commentBtn");
const repostBtn = document.querySelector(".repostBtn");
const shareBtn = document.querySelector(".shareBtn");
const commentForm = document.querySelector(".commentForm");
const commentList = document.querySelector(".commentList");

likeBtn.addEventListener("click", function() {
  // Handle like button click
});

commentBtn.addEventListener("click", function() {
  // Toggle comments section
  const comments = document.querySelector(".comments");
  comments.classList.toggle("show");
});

repostBtn.addEventListener("click", function() {
  // Handle repost button click
});

shareBtn.addEventListener("click", function() {
  // Handle share button click
});

commentForm.addEventListener("submit", function(event) {
  event.preventDefault();
  
  // Get comment input value
  const commentInput = document.querySelector("input[type='text']");
  const comment = commentInput.value;
  commentInput.value = "";
  
  // Add comment to the comment list
  const newComment = document.createElement("li");
  newComment.textContent = comment;
  commentList.appendChild(newComment);
});





var words = ['Career Consultant And Guidance For Rookies '],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 15,
    speed = 70;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.word').text(part);
  },speed);
};
$(document).ready(function () {
  wordflick();
});








