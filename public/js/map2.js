
const countriesList = document.getElementById("countries");
let countries;


countriesList.addEventListener("change", newCountrySelection);

function newCountrySelection(event) {
  displayCountryInfo(event.target.value);
}

fetch("js/restcountries.json")
.then(res => res.json())
.then(data => initialize(data))
.catch(err => console.log("Error:", err));

function initialize(countriesData) {
  countries = countriesData;
  let options = "";

  countries.forEach(country => options+=`<option value="${country.alpha3Code}">${country.translations["fr"]}</option>`);
  countries.forEach(country => options+=`<option value="${country.alpha3Code}">${country.latlng}</option>`);

  countriesList.innerHTML = options;

  displayCountryInfo(countriesList[countriesList.selectedIndex].value);
}

function displayCountryInfo(countryByAlpha3Code) {
  const countryData = countries.find(country => country.alpha3Code === countryByAlpha3Code);
  document.querySelector("#flag-container img").src = countryData.flag;
  document.querySelector("#flag-container img").alt = `Flag of ${countryData.name}`;
  document.getElementById("capital").innerHTML = countryData.capital;
  document.getElementById("population").innerHTML = countryData.population.toLocaleString("fr-FR");
  document.getElementById("region").innerHTML = countryData.region;
  document.getElementById("languages").innerHTML =countryData.languages[0].name;

  document.getElementById("Lon").innerHTML =countryData.latlng[1];
  document.getElementById("Lat").innerHTML =countryData.latlng[0];

    var lat = countryData.latlng[0];
    var lon = countryData.latlng[1];
    var map = map;



function initMap() {

map = new google.maps.Map(document.getElementById("map"), {
    center: new google.maps.LatLng(lat, lon),
    zoom: 4,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    mapTypeControl: true,
    scrollwheel: true,
    mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
    },
    navigationControl: true,
    navigationControlOptions: {
        style: google.maps.NavigationControlStyle.ZOOM_PAN
    },

});


var marker = new google.maps.Marker();
        marker.setPosition(new google.maps.LatLng(lat,lon));
        marker.setIcon('https://img.icons8.com/color/24/000000/rucksack.png');
        marker.setTitle(countryData.translations["fr"]);
        marker.setMap(map);
}

window.onload = function(){
    initMap();
    // var marker2 = new google.maps.Marker();
    // marker2.setPosition(new google.maps.LatLng(lat, lon));
    // marker2.setIcon('https://img.icons8.com/color/24/000000/rucksack.png');
    // marker2.setTitle("MALI");
    // marker2.setMap(map);

};

}
