//JQuery code
$(document).ready(function(){
  $('#msgbody').mouseenter(function(){
    var msgbody = $(this).val();
      $.post("ajaxfun/project.php",
        {msgbody:msgbody},
        function(data){
          $('#msgdata').html(data);
        }
      );
  });
});

//end of JQuery code

//back to top scroll
//Get the button
var mybutton = document.getElementById("backtotop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
//end of back to top scroll