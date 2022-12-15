$(document).ready( function(){
    var aid = $('#actorid').val();
    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "/searchactor/"+aid,
        "method": "GET",
    };
    $.ajax(settings).done(function (response) {
        var response = JSON.parse(response);
        console.log(response);
        $("#actorname").html(response.name);
        $("#actorpicture").html(`<img class="border" id="cover" src="`+response.image.url+`">`);
        $("#realname").html(response.realName);
        $("#birthdate").html(response.birthDate);
        $("#birthplace").html(response.birthPlace);
        $("#bio").html(response.miniBios[0].text);
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");
        });
        $.each(response.trademarks, function(index){
            $("#trademarks").append(response.trademarks[index]+`<br>`)
        })
    });
});