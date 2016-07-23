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

			    // document.getElementById("actual-location").innerHTML = "<h1>"+currentLocation+"</h1>";
			    // $('.header').css('backgroundImage', 'url('+currentPic+')');
			    // document.getElementById("actual-text").innerHTML = "<p>"+currentText+"</p>";
			},

			error: function(error){
			  	console.log(error);
			}
		});

//send info to google form

	  // function postContactToGoogle() {
   //      var share = $('#share').val();
   //      var advice = $('#advice').val();

   //          $.ajax({
   //              url: "https://docs.google.com/forms/d/e/1FAIpQLSdEoLefYBYuVuZGP1GbyCnO9tLvSQf-i1gBaCoOlir5mphv9Q/formResponse",
   //              data: { "entry.1891396694": share, "entry.623392099": advice },
   //              type: "POST",
   //              dataType: "xml",
   //              statusCode: {
   //                  0: function () {
   //                      window.location.replace("ThankYou.html");
   //                  },
   //                  200: function () {
   //                      window.location.replace("ThankYou.html");
   //                  }
   //              }
   //          });
   //  }

	$(".button-click-hide").click(function(){
	    $(".button-click-hide").hide();
	    $(".button-click-show").fadeIn();
	});

	$("#ButtonSubmit").click(function(){ 
	    $(".content-wrap").hide();
	    $("#thank-you").fadeIn();
	    // document.getElementById("landing-pg-img").src = "http://www.imagefully.com/wp-content/uploads/2015/05/Thank-You-For-Friend-On-His-Anniversary.jpg";
	});

})

// on submit change bakground to http://www.caridad.com/wp-content/uploads/2015/11/thankyou.jpg