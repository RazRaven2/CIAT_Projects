/* 
Author: Razielle DeLaCerda
Date: 19 April 2024
*/

function validateEmail(){
     try {
         let email = document.getElementById("userEmail")
         let notValid = email.validity.typeMismatch;
         if (notValid) throw "Incorrect address";
         document.getElementById("submitMsg").innerHTML = "Thanks for joining the mailing list.";
     } catch (error) {
         document.getElementById("submitMsg").innerHTMLL = error;
     }
 
 }

 // Maximum Length of Review
const MAX_REVIEW = 100;
document.getElementById("limit").innerHTML = MAX_REVIEW;

// Reference to elemets in the web page
let wordCountBox = document.getElementById("countValue");
let warningBox = document.getElementById("warningBox");


// Event listener for typing into the comment box
document.getElementById("comment").addEventListener("keyup", updateCount);

// Function to update the count with each keyup event
function updateCount() {
   // Set the warning box to an empty text string 
   warningBox.innerHTML = "";
   
   // Count the number of characters in the comment box
   let commentText = document.getElementById("comment").value;
   let charCount = countCharacters(commentText);
   
   try {
      if (charCount > MAX_REVIEW) throw "You have exceeded the character count limit.";
   } catch (err) {
      warningBox.innerHTML = err;
   } finally {
      wordCountBox.innerHTML = charCount;
   }
}