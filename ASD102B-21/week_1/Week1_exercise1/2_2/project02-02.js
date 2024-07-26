/*    JavaScript 7th Edition
      Chapter 2
      Project 02-02

      Application to test for completed form
      Author: Razielle De La Cerda
      Date:   18 April 2024

      Filename: project02-02.js
 */
 
function verifyForm(){
      let name = document.getElementById("name").value;
      let email = document.getElementById("email").value;
      let phone = document.getElementById("phone").value;
      (name && email && phone) ? window.alert("Thank you!") : 
                                 window.alert("Please enter all fields.");
}

document.getElementById("submit").addEventListener("click", verifyForm);