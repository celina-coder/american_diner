"use strict"

//CANVAS//
function canvasFun()
{
  var canvas = document.getElementById('logo');
  if (canvas.getContext)
  {    
    var ctx = canvas.getContext('2d'); 
    ctx.font = "50pt Calibri,Geneva,Arial";
    ctx.strokeStyle = "rgb(220,20,60)";
    ctx.fillStyle = "rgb(0,20,200)";
    ctx.lineWidth = 3;
    ctx.strokeText("American's Diner", 0, 80);
  }  
}
window.onload=canvasFun;


// FLEXSLIDER //


let language;
let userLanguage = navigator.language || navigator.userLanguage;
// If the navigator language is available for the game
if (userLanguage && Object.keys(texts).includes(userLanguage.slice(0,2))) {
    language = userLanguage.slice(0,2);
}
// Else, the default language is English
else {
    language = 'en';
}

// function language drop down menu
function changeLanguage(event) {
    sessionStorage.setItem('language', event.target.value);
    window.location.reload();
}

$(document).ready(function() {
 
    // Show explanation modal
  $('#explanation').modal({backdrop: 'static', keyboard: false});
  $('.modal-backdrop').css('display', 'none');

    // flexslider
    $('.flexslider').flexslider({
     directionNav: false
  });

    // If there is a language item in the sessionStorage,
    // it means the user has changed the game language
    if (sessionStorage.getItem('language') != null) {
        language = sessionStorage.getItem('language');
    }
    // The languages list is filled with the user language first,
    // then with the other available languages
    $('select').append(`
        <option value="${language}">${language.toUpperCase()}</option>
    `);
    Object.keys(texts).forEach((key) => {
        if (key != language) {
            $('select').append(`
                <option value="${key}">${key.toUpperCase()}</option>
            `);
        }
	});
	
  // function translation text
  $('.translation').each(function(index) {
      $(this).html(texts[language][$(this).attr('id')]);
  });
  
  
  // changement css

   $('#horaire').css('color');
   $('#horaire').css('color','red');

   $('h4').css('color');
   $('h4').css('color','#e0d31f');

  

  // afficher /cacher les horaires
  $('#cacher').on('click', function(){
   
    $('#horaire').toggle("slow");
    let buttonText = $(this).text();
    $(this).text(buttonText === "afficher" ? "cacher" : "afficher");

  })


  // changer l'opacity image

  $('.img-thumbnail').on('mouseenter', function(){
    $(this).fadeTo("slow", "0.8");

  });

  $('.img-thumbnail').on('mouseleave', function(){
    $(this).fadeTo("slow", "0.3");

  });


  $('.text-white').on('mouseenter', function(){ 
    $(this).css("background","#b43030");
    $(this).css("border-radius"," 5px");

  });

  $('.text-white').on('mouseleave', function(){
    $(this).css('background', '' )
    $(this).css('border-radius', '');
    
  });

  $('.administrateur').on('mouseenter', function(){ 
    $(this).css("background","#fff");
    $(this).css("border-radius"," 5px");

  });

  $('.administrateur').on('mouseleave', function(){
    $(this).css('background', '' )
    $(this).css('border-radius', '');
    
  });
 

  
})



 





