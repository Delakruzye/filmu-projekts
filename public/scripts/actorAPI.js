$(document).ready( function(){
    var aid = $('#actorid').val();//tiek iegūta atbilde no kontrolierī ievietotā API
    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "/searchactor/"+aid,
        "method": "GET",
    };
    $.ajax(settings).done(function (response) {//Tiek saliktas atbildes lapā
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
            $("#trademarks").append(
                `
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                </svg>
                `
                +response.trademarks[index]+`<br>`)
        })
    });
});
