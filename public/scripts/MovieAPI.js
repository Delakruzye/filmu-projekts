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
			"X-RapidAPI-Key": "972bcb48f1msh9d516114f392b1fp1b7897jsn48256bd316bd",
			"X-RapidAPI-Host": "imdb8.p.rapidapi.com"
		}
	};
	$.ajax(settings).done(function (response) {
		$.ajax({
			type: 'POST',
			data: response,
			url: "/demo/ajax",
			success: function(data) {
			}
		});
		console.log(response);
		$.each(response.d, function(index){
		$("#film-card").append(`<a class="link-dark" href="/movies/`+response.d[index].id+`"><div class="d-inline-block col-sm-6 col-md-4 col-lg-3 single-team tempclass"><div class="inner"><div class="team-img"><img src="`+response.d[index].i.imageUrl+`" alt="Film Picture" class="img rounded mx-auto d-block"></div><div class="team-content"><h4 id="film-name">`+response.d[index].l+`</h4><h5 id="film-year">`+response.d[index].y+`</h5></div></div></div></a>`);
	});
	});
};
