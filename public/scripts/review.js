$('#search').on('click',function(){
    console.log('a');
	var movie = $('#Film_Title').val();
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
        $("#film-card").append(
            `
            <div class="parent col-6 mt-2 ">
                <a class="link-dark" id='savevalue`+[index]+`' data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card konteinets21 d-inline-block col-sm-6 col-md-4 col-lg-3" style="width: 12rem;">
                        <img class="card-img-topp" src="`+response.d[index].i.imageUrl+`" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title">`+response.d[index].l+`</h6>
                            <p class="card-text">`+response.d[index].y+`</p>
                        </div>
                    </div>  
                </a>
            </div>
            `);

            var picurl = response.d[index].i.imageUrl;//saglabāti dati priekš saglabāšanas datubāzē, lai var pēctam izveidot ierakstu veidošanai
            var fyear = response.d[index].y;
            var fname = response.d[index].l;
            $("#savevalue"+[index]).on('click', function(){
                $("#filmyear").attr("value", fyear);
                $("#picurl").attr("value", picurl);
                $("#Film_Title").attr("value", fname);
            });
            
    });

    });
};
