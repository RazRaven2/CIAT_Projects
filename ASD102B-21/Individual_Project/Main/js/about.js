"use strict";


// Maximum Length of Review
const MAX_REVIEW = 100;
//document.getElementById("limit").innerHTML = MAX_REVIEW;

// Reference to elemets in the web page
let wordCountBox = document.getElementById("countValue");
let warningBox = document.getElementById("warningBox");


// Event listener for typing into the comment box
document.getElementById("feedback").addEventListener("keyup", updateCount);

// Function to update the count with each keyup event
function updateCount() {
   // Set the warning box to an empty text string 
   warningBox.innerHTML = "";
   
   // Count the number of characters in the comment box
   let commentText = document.getElementById("feedback").value;
   let charCount = countCharacters(commentText);
   
   try {
      if (charCount > MAX_REVIEW) throw "You have exceeded the character count limit.";
   } catch (err) {
      warningBox.innerHTML = err;
   } finally {
      wordCountBox.innerHTML = charCount;
   }
}

function download(){
     let text = document.getElementById("feedback").value;
     text = text.replace(/\n/g, "\r\n");
     let blob = new Blob([text], { type: "text/plain"});
     let anchor = document.createElement("a");
     anchor.download = "feedback.txt";
     anchor.href = window.URL.createObjectURL(blob);
     anchor.target ="_blank";
     anchor.style.display = "none";
     document.body.appendChild(anchor);
     anchor.click();
     document.body.removeChild(anchor);
  }