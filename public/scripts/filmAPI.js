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
        console.log(response);
        $("#coverphoto").html(`<img class="border" id="cover" src="`+response.base.image.url+`">`);
        $("#ry").html(response.base.year);
        $("#length").html(response.base.runningTimeInMinutes);
        $("#filmname").html(response.base.title);
        
        if(response.crew && response.crew.writer && Array.isArray(response.crew.writer) ) {//Šeit izvēlas noteiktu lomu no komandas un izvada tās darbiniekus
            $.each(response.crew.writer, function(index,value){
                var aid = response.crew.writer[index].id;
                aid = aid.replace("/name/", "");
                $("#writer").append(
                    `
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                    </svg><a href="/movies/actor/`+aid+`" class="link-light rolelink">`
                    +response.crew.writer[index].name+`</a><br>
                    `
                );
            });
          }
        if(response.crew && response.crew.producer && Array.isArray(response.crew.producer) ) {
            $.each(response.crew.producer, function(index,value){
                var aid = response.crew.producer[index].id;
                aid = aid.replace("/name/", "");
                $("#producer").append(
                    `
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                    </svg><a href="/movies/actor/`+aid+`" class="link-light rolelink">`
                    +response.crew.producer[index].name+`</a><br>
                    `
                    );
            });
        };
        if(response.crew && response.crew.director && Array.isArray(response.crew.director) ) {
            $.each(response.crew.director, function(index,value){
                var aid = response.crew.director[index].id;
                aid = aid.replace("/name/", "");
                $("#director").append(
                    `
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                    </svg><a href="/movies/actor/`+aid+`" class="link-light rolelink">`
                    +response.crew.director[index].name+`</a><br>
                    `
                    );
            });
        };
        if(response.crew && response.crew.cinematographer && Array.isArray(response.crew.cinematographer) ) {
            $.each(response.crew.cinematographer, function(index,value){
                var aid = response.crew.cinematographer[index].id;
                aid = aid.replace("/name/", "");
                $("#cinematographer").append(
                    `
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                    </svg><a href="/movies/actor/`+aid+`" class="link-light rolelink">`
                    +response.crew.cinematographer[index].name+`</a><br>
                    `
                );
            });
        };
        if(response.crew && response.crew.assistant_director && Array.isArray(response.crew.assistant_director) ) {
            $.each(response.crew.assistant_director, function(index,value){
                $("#assistant_director").append(
                    response.crew.assistant_director[index].name+`, `
                );
            });
        };
        if(response.crew && response.crew.production_designer && Array.isArray(response.crew.production_designer) ) {
            $.each(response.crew.production_designer, function(index,value){
                $("#production_designer").append(
                    response.crew.production_designer[index].name+`, `
                );
            });
        };
        if(response.crew && response.crew.stunts && Array.isArray(response.crew.stunts) ) {
            $.each(response.crew.stunts, function(index,value){
                $("#stunts").append(
                    response.crew.stunts[index].name+`, `
                );
            });
        };
        if(response.cast && Array.isArray(response.cast)) {//Šeit tiek izvadīti aktieri
            $.each(response.cast, function(index,value){
                var aid = response.cast[index].id;
                aid = aid.replace("/name/", "");
                $("#stars").append(
                    `
                    <div class="mt-2">
                    <a href="/movies/actor/`+aid+`" class="link-light rolelink">`
                    +response.cast[index].name+
                    `</a><div class="actorpichover"><img id="hoversize" class="border" src="`
                    +response.cast[index].image.url+
                    `"></div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                    </svg>`
                    +response.cast[index].characters[0]+
                    `<br></div>
                    `
                );
            });
          }
        })
    .fail(function (error) {
        console.log('Error Occured: ', error);
    });
    const settings2 = {
        "async": true,
        "crossDomain": true,
        "url": "/searchgenre/"+id,
        "method": "GET",
    };
    $.ajax(settings2).done(function (response) { 
        var response = JSON.parse(response);
        $.each(response, function(index,value){
            $("#genre").append(
                `
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                </svg>
                `
                +response[index]
            );
        });
    })
    const settings3 = {
        "async": true,
        "crossDomain": true,
        "url": "/alike/"+id,
        "method": "GET",
    };
    $.ajax(settings3).done(function (response) {
        var response = JSON.parse(response);
        // console.log(response);
        
        $.each(response, function(index,value){
            if (index == 5) {//neļauj izvadīt vairāk par 5 filmām rekomendācijās
                return false;
          }
            var id = response[index];
            id = id.replace("/title/", "");
            const settingss = {
                "async": true,
                "crossDomain": true,
                "url": "/shortdata/"+id,
                "method": "GET",
            };
            $.ajax(settingss).done(function (response2) { //šeit ir cikls kurš pieprasa filmu titullapu, nosaukumu un iznākšanas gadu
                var response2 = JSON.parse(response2);
                // console.log(response2);
                $("#rec").append(
                    `<a class="recc link-light" href="/movies/`+id+`">
                        <div class="row mt-1">
                            <div class="konteinets21">
                                <img src="`
                                    +response2.results[0].image.url+
                                `" alt="Film Picture" class="border" id="recpic">
                            </div>
                            <div class="">
                                <h5>`
                                    +response2.results[0].title+
                                `</h5><h6>`
                                    +response2.results[0].year+
                                `</h6>
                            </div>
                        </div>
                    </a>
                    <hr>`
                );
            });
        });
    
    })
});
