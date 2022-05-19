
var map = L.map('map').setView([45.75337045478135, 4.829870553728087], 13);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiYWNlcml2ZXJiYXQiLCJhIjoiY2wyMDU0ajFjMDB2NzNpbDh2YWxocnAwdCJ9._DNfriipSr0hkAJ5D7SIpw'
}).addTo(map);
var marker = L.marker([45.75337045478135, 4.829870553728087]).addTo(map);
marker.bindPopup("On est juste ici !").openPopup();
