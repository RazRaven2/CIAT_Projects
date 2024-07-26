"use strict";
/*
   New Perspectives on HTML5 and CSS3, 8th Edition
   Tutorial 7
   Coding Challenge 3


   Filename: formsubmit.js

   Purpose: The purpose of this program is to simply report on a
            successful completition of a valid Web form.

            When the form is submitted, the onsubmit event handler
            verifies that the form data is complete and valid.
            An alert box is displayed notifying the user.

            The event function returns a value of false so that the
            student does not have to continually retype test values
            in the survey form.


*/

window.onload = function() {
   document.forms[0].onsubmit = function() {
      if (this.checkValidity()) {
         alert("Form Submitted");
         return false;
      }
   };
};