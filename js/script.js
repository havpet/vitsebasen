$(document).ready(function() {
  getJoke();
});

function getJoke() {
  $("#jokesform").on('submit', function(e) {
    e.preventDefault();
    $.ajax({
      url: 'https://vitsebasen.no/backend/joke.php',
      type: "GET",
      data: $(this).serialize(),
      success: function(result) {
        var content = result.content;
        $("#result").css("color", "black");
        $("#result").html(content);
        $('html, body').clearQueue();
        $("#excep").val(result.id);

        $('html, body').animate({
          scrollTop: $("#resultdiv").offset().top
        }, 500);
      }
    });
  });
}

function toggleDiv() {
  if($(".funkyradio").is(":visible")) {
    $("#top_buttona").text("Vis innstillinger");
    $("#icon").attr("class", "glyphicon glyphicon-chevron-down");
    $(".funkyradio").fadeOut(300);
    //$("#outer").css("height", "260px");
    $("#outer").delay(300).queue(function(next) {
      $(this).css("height", "260px");
      $("#submitbutton").attr("value", "Finn vits med samme kriterier");
      next();
    });
    $("#resultdiv").css("margin-top", "10px");
  }
  else {
    $("#top_buttona").text("Skjul innstillinger");
    $("#icon").attr("class", "glyphicon glyphicon-chevron-right");
    $("#submitbutton").attr("value", "Finn vits");
    $(".funkyradio").fadeIn(300);
    $("#outer").css("height", "480px");
    $("#resultdiv").css("margin-top", "50px");
  }
}
