$(document).ready(function(){
  $("div#max").click(function(){
    $("#bright, #picture").fadeIn(100);
  });
    $("div#min").click(function(){
    $("#bright, #picture").fadeOut(100);
  })
});