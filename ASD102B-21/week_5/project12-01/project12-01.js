"use strict";
/*    JavaScript 7th Edition
      Chapter 12
      Project 12-01

      Project to display a dropdown menu
      Author: Razielle DeLaCerda
      Date:   14 May 2024  

      Filename: project12-01.js
*/

$( () => {

      $("li.submenu")
      .mouseover(e => {
            $(e.currentTarget).children("ul").show();
      })

      .mouseout(e => {
            $(e.currentTarget).children("ul").hide();
      });
});






                                                