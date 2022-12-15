$(document).ready( function(){
    var id = $("#movieid").val();
    id = id.replace("{", "");
    id = id.replace("}", "");
    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "/searchmovie/"+id,
        "method": "GET",
    };
    $.ajax(settings).done(function (response) { 
        var response = JSON.parse(response);
        $("#coverphoto").html(`<img class="border" id="cover" src="`+response.results[0].image.url+`">`);
        $("#ry").html(response.results[0].year);
        $("#length").html(response.results[0].runningTimeInMinutes);
        $("#filmname").html(response.results[0].title);
        $.each(response.results[0].principals, function(index){
                var aid = response.results[0].principals[index].id;
                aid = aid.replace("/name/", "");
                $("#stars").append(
                    `
                    <br><a href="/movies/actor/`+aid+`" class="link-light rolelink">`
                    +response.results[0].principals[index].name+
                    `</a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                    </svg>`
                    +response.results[0].principals[index].characters[0]
                );
        })
    });
});