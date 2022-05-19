let map;

function initMap()
{
    map = new google.maps.Map(document.getElementById("maps"), //опция - це наша function MainMap;
    {           
        center: {lat: 50.25640229738523, lng: 28.662554826988373}, //Ширина і довжина (Київська 10)
    zoom: 20,                                                  
});
}

window.initMap = initMap;