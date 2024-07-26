/*
Author: Razielle DeLaCerda
Date 19 April 2024
*/

let captions = new Array(22);
captions[0]="";
captions[1]="";
captions[2]=""; 
captions[3]=""; 
captions[4]=""; 
captions[5]="";
captions[6]="";
captions[7]="";
captions[8]="";
captions[9]="";
captions[10]="";
captions[11]="";
captions[12]="";
captions[13]="";
captions[14]="";
captions[15]="";
captions[16]="";
captions[17]="";
captions[18]="";
captions[19]="";
captions[20]="";
captions[21]="";

let htmlCode = ""

for (let i=0; i<captions.length; i++){
      htmlCode += "<figure>";
      htmlCode += "<img alt='' src='images/slide" + i + ".jpg' />";
      htmlCode += "<figcaption>" + captions[i] + "</figcaption>";
      htmlCode += "</figure>";
}

document.getElementById("gallery").innerHTML = htmlCode;