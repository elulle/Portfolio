$(document).ready(function(){

	var myLocations = [],
		myPic = [], 
		myText = [],
		myDatabase = [],
		currentLocation = '';

	loadData = (function() {
		var url="https://docs.google.com/spreadsheets/d/1OPUMaE5qEN0mXxJ-U4UPVpkaAMh5oAJrbzYE6t5Ir1Y/pub?output=csv";
		// var url="https://spreadsheets.google.com/feeds/cells/1OPUMaE5qEN0mXxJ-U4UPVpkaAMh5oAJrbzYE6t5Ir1Y/od6/public/values?alt=json-in-script&callback=myCallback";
		xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if(xmlhttp.readyState == 4 && xmlhttp.status==200){
				//get and split csv file
				myDatabase=xmlhttp.responseText.split("\n");

				myLocations = myDatabase[0].split(",");
				myPic = myDatabase[1].split(",");
				myText = myDatabase[2].split(",");

			    console.log(myLocations);
			    console.log(myPic);
			    console.log(myText);

			    currentLocation = myLocations[myLocations.length - 1];
			    currentPic = myPic[myPic.length - 1];
			    currentText = myText[myText.length - 1];

			    console.log(currentLocation);
			    console.log(currentPic);
			    console.log(currentText);

			    document.getElementById("actual-location").innerHTML = "<h1>"+currentLocation+"</h1>";
			    $('.header').css('backgroundImage', 'url('+currentPic+')');
			    document.getElementById("actual-text").innerHTML = "<p>"+currentText+"</p>";
			}
		};
	    xmlhttp.open("GET",url,true);
	    xmlhttp.send(null);

	  })();

	$("#location-check").click(function(){
	    $("#location-check").hide();
	    $("#actual-info").fadeIn();
	});

})