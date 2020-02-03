    var lat = 21.5;
    var lon = 14.7;
    var map = map;

    // Fonction d'initialisation de la carte
    function initMap() {


        map = new google.maps.Map(document.getElementById("map"), {
            center: new google.maps.LatLng(lat, lon),
            zoom: 3,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: true,
            scrollwheel: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
            },
            navigationControl: true,
            navigationControlOptions: {
                style: google.maps.NavigationControlStyle.ZOOM_PAN
            }
        });
        var marker1 = new google.maps.Marker();
        marker1.setPosition(new google.maps.LatLng(47.21,-1.55));
        marker1.setIcon('https://img.icons8.com/color/24/000000/rucksack.png');
        marker1.setTitle("Nantes");
        marker1.setMap(map);
    }

    window.onload = function(){
        initMap();
    };

// // NANTES
//         var marker1 = new google.maps.Marker();
//         marker1.setPosition(new google.maps.LatLng(47.21,-1.55));
//         marker1.setIcon('https://img.icons8.com/color/24/000000/rucksack.png');
//         marker1.setTitle("Nantes");
//         marker1.setMap(map);

//         // infoBulles
//         var infowindow1 = new google.maps.InfoWindow({maxWidth: 300,
//         content: " Nantes "});
//         google.maps.event.addListener(marker1, 'click', function() {
//         infowindow1.open(map, marker1);
//         });
// // Mahamed
//         var marker2 = new google.maps.Marker();
//         marker2.setPosition(new google.maps.LatLng(14.43, -11.44));
//         marker2.setIcon('https://img.icons8.com/color/24/000000/rucksack.png');
//         marker2.setTitle("MALI");
//         marker2.setMap(map);

//         // infoBulles
//         var infowindow2 = new google.maps.InfoWindow({maxWidth: 300,
//         content: "<div style=\"text-align:justify\"><strong>Mahamed</strong> depuis l’ouest du Mali Mahamed à rejoint l’Algérie puis le Maroc, l’Espagne via le détroit de Gibraltar, pour enfin arriver en france la France.</div>"});
//         google.maps.event.addListener(marker2, 'click', function() {
//         infowindow2.open(map, marker2);
//         });

// // Serguey
//         var marker3 = new google.maps.Marker();
//         marker3.setPosition(new google.maps.LatLng(40.06, 45.03));
//         marker3.setIcon('https://img.icons8.com/color/24/000000/rucksack.png');
//         marker3.setTitle("ARMENIE");
//         marker3.setMap(map);

//         // infoBulles
//         var infowindow3 = new google.maps.InfoWindow({maxWidth: 300,
//         content: "<div style=\"text-align:justify\"><strong> Serguey</strong> ,<br>  L’Arménie est une république caucasienne mais le système oligarchique est jugé corrompu.Un système oligarchique c’est un système politique dans lequel tout le pouvoir appartient à un petit nombre d’individus, à un groupe. Et, corrompre signifie convaincre de manière illégale, en donnant de l’argent ou en rendant un service.C’est pourquoi, des milliers d’opposants à ce régime ont manifesté dans les rues de la ville d’Erevan dans le but de faire démissionner le premier ministre le 24 avril 2018. Il a démissionné et l’actuel premier ministre s’est engagé contre la corruption.</div>"
//     });
//         google.maps.event.addListener(marker3, 'click', function() {
//         infowindow3.open(map, marker3);
//         });
// // Radjah
//         var marker4 = new google.maps.Marker();
//         marker4.setPosition(new google.maps.LatLng(14.37, 24.9));
//         marker4.setIcon('https://img.icons8.com/color/24/000000/rucksack.png');
//         marker4.setTitle("SOUDAN");
//         marker4.setMap(map);

//         // infoBulles
//         var infowindow4 = new google.maps.InfoWindow({maxWidth: 300,
//         content: "<strong> Radjah</strong> ,<br> Radjah a quitté le Soudan du Sud, la province du Darfour avec sa famille.<br> Elle habitait à Absolut.<br> Le Darfour est une région de l’ouest du Soudan, frontalière de la Libye, du Tchad, de la République centrafricaine.<br>Radjah et sa famille ont d’abord fui au Tchad, puis ils ont pris l’avion jusqu’à Strasbourg, puis déménagé à Nantes."
//     });
//         google.maps.event.addListener(marker4, 'click', function() {
//         infowindow4.open(map, marker4);
//         });

// // Serge et Aïcha
//         var marker5 = new google.maps.Marker();
//         marker5.setPosition(new google.maps.LatLng(7.539989,-5.547080 ));
//         marker5.setIcon('https://img.icons8.com/color/24/000000/rucksack.png');
//         marker5.setTitle("COTE D'IVOIRE");
//         marker5.setMap(map);

//         // infoBulles
//         var infowindow5 = new google.maps.InfoWindow({maxWidth: 300,
//         content: "<div style=\"text-align:justify\"><strong> Aïcha</strong> ,<br><q><i>J’ai quitté mon pays en 2017 parce que la vie était très difficile. Je suis partie seule avec une amie. J’ai pris le bus et le pick-up.Je suis passée par le Burkina Faso, le Niger, l’Algérie, le Maroc, l’Espagne.</i></q><strong><br><br>Serge</strong><br><q><i>Pour venir en France, je suis passé par le Mali, par l’Algérie, le Maroc, l’Espagne et puis la France. Mon voyage a duré 1 an et 4 mois en tout…Mon voyage a été très dur. Pendant un mois je ne me suis pas lavé au Maroc. En Algérie aussi, je ne me suis pas lavé pendant 3 semaines, c’était trop dur.Pour passer du Maroc à l’Espagne, j’ai pris un zodiac et c’était très difficile. Le zodiac était petit, on était très nombreux, c’était vraiment risqué.</i></q></div>"});
//         google.maps.event.addListener(marker5, 'click', function() {
//         infowindow5.open(map, marker5);
//         });

// // Souleyman
//         var marker6 = new google.maps.Marker();
//         marker6.setPosition(new google.maps.LatLng(12.650000,-8 ));
//         marker6.setIcon('https://img.icons8.com/color/24/000000/rucksack.png');
//         marker6.setTitle("MALI");
//         marker6.setMap(map);

//         // infoBulles
//         var infowindow6 = new google.maps.InfoWindow({maxWidth: 300,
//         content: "<div style=\"text-align:justify\"><strong> Souleyman</strong> ,<br> En 2017 il a quitté son pays car la vie était trop difficile. Il a pris le bus a Bamako jusqu'a Gao, puis le camion pendant une semaine jusqu'en Algérie. Surla route il n'a mangé que quelques biscuits et un peu d'eau. Aprs son arrivée en Algrie il a pris un pik up vers la lybie. SUITE A REDIGER</div>"});
//         google.maps.event.addListener(marker6, 'click', function() {
//         infowindow6.open(map, marker6);
//         });
// // Mohammad
//         var marker7 = new google.maps.Marker();
//         marker7.setPosition(new google.maps.LatLng(34.802075,38.996815 ));
//         marker7.setIcon('https://img.icons8.com/color/24/000000/rucksack.png');
//         marker7.setTitle("SYRIE");
//         marker7.setMap(map);

//         // infoBulles
//         var infowindow7 = new google.maps.InfoWindow({maxWidth: 300,
//         content: "<div style=\"text-align:justify\"><strong> Mohammad</strong> ,<br> En 2012, il est obligé de fuir son pays car c’était la guerre. <br>Pour fuir Mohammad est allé au Liban ou son père travaillait dans le bâtiment et sa mère était sans emploi. <br> S’il a quitté ce pays c’est parce que il y a beaucoup de migrants au Liban. <br> Donc, Mohammad et sa famille sont partis en avion et sont arrivés en mars 2018 à Nantes, c’est l’association FRANCE TERRE D’ASILE qui leur a conseillé d’aller à Nantes.</div>"});
//         google.maps.event.addListener(marker7, 'click', function() {
//         infowindow7.open(map, marker7);
//         });
// // Hassan
//         var marker8 = new google.maps.Marker();
//         marker8.setPosition(new google.maps.LatLng(30.375321,69.345116 ));
//         marker8.setIcon('https://img.icons8.com/color/24/000000/rucksack.png');
//         marker8.setTitle("SYRIE");
//         marker8.setMap(map);

//         // infoBulles
//         var infowindow8 = new google.maps.InfoWindow({maxWidth: 300,
//         content: "<div style=\"text-align:justify\"><strong> Hassan</strong> ,<br>Tout seul, Hassan a traversé l’Europe pour arriver jusqu’en France. Du Pakistan, il est allé en Grèce (sans doute en passant par l’Iran et la Turquie) où il est resté 7 mois (à Athènes) et il est allé 4 mois à l’école. Ensuite, il est parti en Serbie, et en Bosnie, en Croatie, en Slovénie, en Italie, et en France. Pendant ce trajet, il n’a pris la voiture, qu’une fois pendant 30 min, il a marché 2 ans.</div>"});
//         google.maps.event.addListener(marker8, 'click', function() {
//         infowindow8.open(map, marker8);
//         });
// // Navidullah
//         var marker9 = new google.maps.Marker();
//         marker9.setPosition(new google.maps.LatLng( 33.927125,67.721655 ));
//         marker9.setIcon('https://img.icons8.com/color/24/000000/rucksack.png');
//         marker9.setTitle("SYRIE");
//         marker9.setMap(map);

//         // infoBulles
//         var infowindow9 = new google.maps.InfoWindow({maxWidth: 300,
//         content: "<div style=\"text-align:justify\"><strong> Navidullah</strong> ,<br>Pour arriver jusqu’ici il a pris la voiture, le train et l’avion. Il est passé par le Pakistan, l’Iran, la Turquie, la Grèce, la Macédoine, la Bulgarie, la Serbie, la Bosnie-Herzégovine, la Croatie la Slovénie, l’Autriche, l’Allemagne où il est resté un peu de temps, le Danemark, où, là aussi, il est resté ici pendant un petit moment pour ensuite aller en Suède où il a passé un plus long moment et enfin il est venu en France. Pour lui le voyage était très difficile car il était triste et tout seul. Ces parents sont morts quand il était petit et il a un frère qui a 24 ans et qui travaille en Iran.</div>"});
//         google.maps.event.addListener(marker9, 'click', function() {
//         infowindow9.open(map, marker9);
//         });




    // }

    // window.onload = function(){
    //     initMap();
    // };


// // Global Variables
// const countriesList = document.getElementById("countries");
// let countries; // will contain "fetched" data

// // Event Listeners
// // countriesList.addEventListener("change", event => displayCountryInfo(event.target.value));

// // countriesList.addEventListener("change", newCountrySelection);

// function newCountrySelection(event) {
//   displayCountryInfo(event.target.value);
// }


// fetch("js/restcountries.json")
// .then(res => res.json())
// // .then(data => initialize(data))
// .catch(err => console.log("Error:", err));

// function initialize(countriesData) {
//   countries = countriesData;
//   let options = "";

//   countries.forEach(country => options+=`<option value="${country.alpha3Code}">${country.name}</option>`);

//   countriesList.innerHTML = options;

//   displayCountryInfo(countriesList[countriesList.selectedIndex].value);
// }

// function displayCountryInfo(countryByAlpha3Code) {
//   const countryData = countries.find(country => country.alpha3Code === countryByAlpha3Code);
//   document.querySelector("#flag-container img").src = countryData.flag;
//   document.querySelector("#flag-container img").alt = `Flag of ${countryData.name}`;
//   document.getElementById("capital").innerHTML = countryData.capital;
// //   document.getElementById("dialing-code").innerHTML = `+${countryData.callingCodes[0]}`;
//   document.getElementById("population").innerHTML = countryData.population.toLocaleString("fr-FR")+" habitants";
//   document.getElementById("region").innerHTML = countryData.region;
//   document.getElementById("languages").innerHTML = `${countryData.languages[0]["name"]}`;
// }
