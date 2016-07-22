$(document).ready(function(){

	// window.googleDocCallback = function () { return true; };

	var myLocations = [],
		myPic = [], 
		myText = [],
		myDatabase = [],
		currentLocation = '';

		$.ajax({
			type: "GET",
			url: "http://cors.io/?u=https://docs.google.com/spreadsheets/d/1OPUMaE5qEN0mXxJ-U4UPVpkaAMh5oAJrbzYE6t5Ir1Y/pub?output=csv",
			cache: false,
			crossDomain: true,

			success: function(data){
			  	myDatabase=data.split("\n");
				myLocations = myDatabase[0].split(",");
				myPic = myDatabase[1].split(",");
				myText = myDatabase[2].split(",");

			    // console.log(myLocations);
			    // console.log(myPic);
			    // console.log(myText);

			    currentLocation = myLocations[myLocations.length - 1];
			    currentPic = myPic[myPic.length - 1];
			    currentText = myText[myText.length - 1];

			    // console.log(currentLocation);
			    // console.log(currentPic);
			    // console.log(currentText);

			    document.getElementById("actual-location").innerHTML = "<h1>"+currentLocation+"</h1>";
			    $('.header').css('backgroundImage', 'url('+currentPic+')');
			    document.getElementById("actual-text").innerHTML = "<p>"+currentText+"</p>";
			},

			error: function(error){
			  	console.log(error);
			  	console.log("error");
			}
		});

	$(".button-click-hide").click(function(){
	    $(".button-click-hide").hide();
	    $(".button-click-show").fadeIn();
	});

	$("#advice-submit").click(function(){ 
	    $(".content-wrap").hide();
	    $("#thank-you").show();
	    // document.getElementById("landing-pg-img").src = "http://www.imagefully.com/wp-content/uploads/2015/05/Thank-You-For-Friend-On-His-Anniversary.jpg";
	});

})

// on submit change bakground to http://www.caridad.com/wp-content/uploads/2015/11/thankyou.jpg