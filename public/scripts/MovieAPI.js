const settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://imdb8.p.rapidapi.com/auto-complete?q=fastandfurious",
	"method": "GET",
	"headers": {
		"X-RapidAPI-Key": "f6f62138abmshc2bfd08c0a8261fp172b29jsnc375e5bd224f",
		"X-RapidAPI-Host": "imdb8.p.rapidapi.com"
	}
};

$.ajax(settings).done(function (response) {
	//console.log(response.d[0].i.imageUrl);
	//console.log(response.d[0].l);
	//console.log(response.d[0].y);
    $("#film-name").html(response.d[0].l);
	$("#film-year").html(response.d[0].y);
	$("#film-card").html('<div class="row"><div class="col-sm-6 col-md-4 col-lg-3 single-team"><div class="inner"><div class="team-img"><img src="'+response.d[0].i.imageUrl+'" alt="Film Picture"></div><div class="team-content"><h4 id="film-name">'+response.d[0].l+'</h4><h5 id="film-year">'+response.d[0].y+'</h5></div></div></div></div>');
});

function search(url){
    const settings2 = {
	"async": true,
	"crossDomain": true,
	"url": url,
	"method": "GET",
	"headers": {
		"X-RapidAPI-Key": "f6f62138abmshc2bfd08c0a8261fp172b29jsnc375e5bd224f",
		"X-RapidAPI-Host": "twelve-data1.p.rapidapi.com"
	}
};
$.ajax(settings2).done(function (response) {
	console.log(response.data);
    $("#name").html(response.data[0].name);
    $("#chart").html('');
    $.each(response.data[0], function(key,val) {
        $("#"+key).html('<span id="'+key+'">'+val+'</span>');})
});
};