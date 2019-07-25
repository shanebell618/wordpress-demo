jQuery(document).ready(function ($) {

	$.getJSON("http://api.openweathermap.org/data/2.5/weather?id=2172797&units=imperial&appid=0bf7e3bb61d93f8e579f1ac312823b3c", function(data) {
	    
	    var icon = "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
	    $('.weather-icon').attr('src', icon);

	    var weather = data.weather[0].main;
	    $('.weather-status').append(weather);

	    var temp = Math.round(data.main.temp);
	    $('.weather-temperature').append(temp + " &#176;");

	});

});