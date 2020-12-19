//<!-- AJAX refresh -->
$.ajax({
  url: 'http://localhost/skola_matematike/index.php',
  success: function(data) {
    if (data == "refresh"){
      window.location.reload(); // This is not jQuery but simple plain ol' JS
    }
  }
});