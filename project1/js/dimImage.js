//Script to dim image on ready and click. CSS for picture and bright dim the background and position image in the center of the page.

$(document).ready(function(){
  $("div#max").click(function(){
    $("#bright, #picture").fadeIn(100);
  });
    $("div#min").click(function(){
    $("#bright, #picture").fadeOut(100);
  })
});