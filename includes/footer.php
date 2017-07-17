
<footer>
	<div class="row">
		<div class="six columns">
			<p>Hacienda &copy; 2017</p>
		</div>
	
		<div class="six columns">
			<p class="u-pull-right credits">Made by Michelle Currier @ <a href="http://mcurrier.com" target="_blank" title="mcurrier designs">mcurrier.com</a></p>
		</div>
	</div>
</footer>

<!-- This was made by Michelle Claire Currier - mcurrier.com -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
//paralax
		$('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
});
// Carousel only has one playing video at a time.
//$('#carousel-example-generic').bind('slid', function (e) {
//  $('.item').find('iframe').contents().find('body').find('video')[0].pause();
//});
$('video').on('play', function (e) {
    $("#carousel-example-generic").carousel('pause');
});
$('video').on('stop pause ended', function (e) {
    $("#carousel-example-generic").carousel();
});
	//no fouc

	document.getElementById("fouc").style.display="block";
	
	//encrypt email 
    function UnCryptMailto( s )
    {
        var n = 0;
        var r = "";
        for( var i = 0; i < s.length; i++)
        {
            n = s.charCodeAt( i );
            if( n >= 8364 )
            {
                n = 128;
            }
            r += String.fromCharCode( n - 1 );
        }
        return r;
    }

    function linkTo_UnCryptMailto( s )
    {
        location.href=UnCryptMailto( s );
    }
    
    //for modal
    $(window).load(function()
	{
	    $('#myModal').modal('show');
	});
   </script>
   
</body>
</html>
