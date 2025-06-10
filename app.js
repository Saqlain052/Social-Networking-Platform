


  function createPost() {
    const text = document.getElementById('postText').value;
    if (text.trim() !== "") {
      alert("Post created: " + text);
      document.getElementById('postText').value = "";
    } else {
      alert("Please write something before posting!");
    }
  }


// Like functionality
function likePost(button) {
  const countSpan = button.querySelector('.like-count');
  let count = parseInt(countSpan.innerText);
  count++;
  countSpan.innerText = count;
}

// Show/Hide comment input box
function toggleCommentBox(button) {
  const post = button.closest('.card-body');
  const commentSection = post.querySelector('.comment-section');
  commentSection.style.display = commentSection.style.display === "none" ? "block" : "none";
}

function addComment(button) {
  const commentSection = button.closest(".comment-section");
  const input = commentSection.querySelector("input");
  const commentText = input.value.trim();

  if (!commentText) return alert("Please write a comment before posting!");

  const commentList = button.closest(".card-body").querySelector(".comment-list");

  commentList.innerHTML += `
    <div class="alert alert-secondary py-1 px-2 mb-1">${commentText}</div>
  `;

  input.value = "";
}

function logout() {
  

  
  window.location.href = "login.html"; 
}  

 