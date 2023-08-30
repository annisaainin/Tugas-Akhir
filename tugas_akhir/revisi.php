<?php
include "koneksi.php";               
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title></title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" />
<link rel="stylesheet" href="../src/leaflet-search.css" />
<link rel="stylesheet" href="style.css" />
<style>
#findbox {
	background: #eee;
	border-radius:.125em;
	border:2px solid #1978cf;
	box-shadow: 0 0 8px #999;	
	margin-bottom: 10px;
	padding: 2px 0;
	width: 600px;
	height: 26px;
}
.search-tooltip {
	width: 200px;
}
.leaflet-control-search .search-cancel {
	position: static;
	float: left;
	margin-left: -22px;
}
</style>
</head>

<body>
<h3><a href="../"><big>◄</big> Leaflet.Control.Search</a></h3>

<h4>Outside Div Example: <em>move Seach Control outside the map div</em></h4>
<div id="findbox"></div>
<div id="map"></div>

<div id="post-it">
<b>Search values:</b><br />
aquamarine, black, blue, cyan, darkblue, darkred, darkgray, dodgerblue, gray, green, red, skyblue, yellow, white ...
</div>

<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
<script src="../src/leaflet-search.js"></script>
<script>

	//sample data values for populate map
	var data = [
		{"loc":[41.575330,13.102411], "title":"aquamarine"},
		{"loc":[41.575730,13.002411], "title":"black"},
		{"loc":[41.807149,13.162994], "title":"blue"},
		{"loc":[41.507149,13.172994], "title":"chocolate"},
		{"loc":[41.847149,14.132994], "title":"coral"},
		{"loc":[41.219190,13.062145], "title":"cyan"},
		{"loc":[41.344190,13.242145], "title":"darkblue"},	
		{"loc":[41.679190,13.122145], "title":"darkred"},
		{"loc":[41.329190,13.192145], "title":"darkgray"},
		{"loc":[41.379290,13.122545], "title":"dodgerblue"},
		{"loc":[41.409190,13.362145], "title":"gray"},
		{"loc":[41.794008,12.583884], "title":"green"},	
		{"loc":[41.805008,12.982884], "title":"greenyellow"},
		{"loc":[41.536175,13.273590], "title":"red"},
		{"loc":[41.516175,13.373590], "title":"rosybrown"},
		{"loc":[41.506175,13.173590], "title":"royalblue"},
		{"loc":[41.836175,13.673590], "title":"salmon"},
		{"loc":[41.796175,13.570590], "title":"seagreen"},
		{"loc":[41.436175,13.573590], "title":"seashell"},
		{"loc":[41.336175,13.973590], "title":"silver"},
		{"loc":[41.236175,13.273590], "title":"skyblue"},
		{"loc":[41.546175,13.473590], "title":"yellow"},
		{"loc":[41.239190,13.032145], "title":"white"}
	];

	var map = new L.Map('map', {zoom: 9, center: new L.latLng(data[0].loc) });	//set center from first location

	map.addLayer(new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));	//base layer

	var markersLayer = new L.LayerGroup();	//layer contain searched elements
	map.addLayer(markersLayer);

	map.addControl( new L.Control.Search({
		container: 'findbox',
		layer: markersLayer,
		initial: false,
		collapsed: false
	}) );
	//inizialize search control

	////////////populate map with markers from sample data
	for(i in data) {
		var title = data[i].title,	//value searched
			loc = data[i].loc,		//position found
			marker = new L.Marker(new L.latLng(loc), {title: title} );//se property searched
		marker.bindPopup('title: '+ title );
		markersLayer.addLayer(marker);
	}

</script>

<div id="copy"><a href="https://opengeo.tech/">Website</a> &bull; <a rel="author" href="https://opengeo.tech/stefano-cudini/">Stefano Cudini</a></div>

<script type="text/javascript" src="/labs-common.js"></script>

</body>
</html>