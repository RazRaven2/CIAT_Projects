/*
Provides calculation for requested services

Author: Razielle DeLaCerda
Date: 19 April 2024

**/

/* Constants */
WAGE_HOUR = 100;
TASTING_PRICE = 350;
RIGHTS_PRICE = 1250;
TRAVEL_PRICE = 2;

document.getElementById("gardenNum").addEventListener('click', calcTotal);
document.getElementById("gardenHrs").addEventListener('click', calcTotal);
document.getElementById("tasteTesting").onclick = calcTotal;
document.getElementById("photoRights").onclick = calcTotal;
document.getElementById("gardenDist").addEventListener('click', calcTotal);


function calcTotal(){
    let gardenNum = document.getElementById("gardenNum").value;
    let gardenHrs = document.getElementById("gardenHrs").value;
    let tasteTesting = document.getElementById("tasteTesting").checked;
    let photoRights = document.getElementById("photoRights").checked;
    let gardenDist = document.getElementById("gardenDist").value;
    let totalCost = 0;

    totalCost += (tasteTesting) ? TASTING_PRICE : 0;
    totalCost += (photoRights) ? RIGHTS_PRICE : 0;
    totalCost += gardenNum * gardenHrs * WAGE_HOUR;
    totalCost += gardenDist * TRAVEL_PRICE;

    document.getElementById("estimate").innerHTML = formatCurrency(totalCost);
}

// Function to display a numeric value as a text string in the format $##.## 
function formatCurrency(value) {
    return "$" + value.toFixed(2);
 }

//Service location map
// Function to set up and display the Request Service Map
function initMap() {
   
    // Page objects
    let displayMap = document.getElementById("displayMap");
    let routeBox =  document.getElementById("routeBox");
    
    //create map to Wandering Paw
    let waderingPaw = {lat: 47.02424644491476, lng:-122.81499052355174};

    let myMap = new google.maps.Map(displayMap, {
        zoom: 11,
        center: waderingPaw,
        fullscreenControl: false
    });

    //Add marker
    new google.maps.Marker({
        position: waderingPaw,
        map: myMap,
        title: "Wander Paw Studios"
    });
  
    //device current location
    navigator.geolocation.getCurrentPosition(getPos, handleError);

    function getPos(pos){
        let myPosition = {
            lat: pos.coords.latitude,
            lng: pos.coords.longitude,
            altitude: pos.coords.altitude
        }
        console.log(pos);
        document.getElementById("latitude").innerHTML = "Latitude: " + myPosition.lat;
        document.getElementById("longitude").innerHTML = "Longitude: " + myPosition.lng;
        document.getElementById("altitude").innerHTML = "Altitude: " + myPosition.altitude;
    }

    

    function handleError(err){
        console.log("Geolocation error: "+ err.message);
    }
 }

 
$( () => {

    $("li.submenu")
    .mouseover(e => {
          $(e.currentTarget).children("ul").show();
    })

    .mouseout(e => {
          $(e.currentTarget).children("ul").hide();
    });
});
