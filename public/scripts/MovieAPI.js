$('#search').on('click',function(){
	var movie = $('#movie').val();
	var url = "https://imdb8.p.rapidapi.com/auto-complete?q="+movie;
	search(url);
	$('#film-card').empty();
})
function search(url){
	const settings = {
		"async": true,
		"crossDomain": true,
		"url": url,
		"method": "GET",
		"headers": {
			"X-RapidAPI-Key": "f6f62138abmshc2bfd08c0a8261fp172b29jsnc375e5bd224f",
			"X-RapidAPI-Host": "imdb8.p.rapidapi.com"
		}
	};
	$.ajax(settings).done(function (response) {
		console.log(response);
		$.each(response.d, function(index){
		$("#film-card").append(`
		<div class="parent col-3 p-2 mt-2 ">
			<a class="link-dark rolelink" href="/movies/`+response.d[index].id+`">
				<div class="card text-center konteinets21" style="width: 12rem;">
                	<img class="card-img-topp border" src="`+response.d[index].i.imageUrl+`" alt="Card image cap">
               			<div class="card-body">
                    		<h6 class="card-title">`+response.d[index].l+`</h6>
                    		<p class="card-text">`+response.d[index].y+`</p>
                		</div>
                </div>  
			</a>
		</div>
		`);
	});
	});
};


// // Execute a function when the user presses a key on the keyboard
// input.addEventListener("keypress", function(event) {
//   // If the user presses the "Enter" key on the keyboard
//   if (event.key === "Enter") {
//     // Cancel the default action, if needed
//     event.preventDefault();
//     // Trigger the button element with a click
//     document.getElementById("myBtn").click();
//   }
// });
