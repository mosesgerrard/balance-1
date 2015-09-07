          	<!-- FOOTER
    		======================================================= -->
    		<footer>
    			<div class="container">
    			     @if(!Auth::check())
    				<div class="navbar-text pull-left">
    					<a href="https://www.youtube.com/channel/UCUF_daaXZ-miCLCc1IFX6MA/playlists" target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a>
    					<a href="https://facebook.com" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
    					<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
    					<a href="https://instagram.com" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
    		        </div>
    		        @endif
			<div class="container">
				<div class="navbar-text pull-left">
		        	<p><b>Copyright </b>&copy; <?=date('Y')?> &middot; The Balance Crew | All Rights Reserved &middot;</p>
	        	</div>

            @if(Auth::check())
				<div class="navbar-text pull-center">
					Admin System
		        </div>
            @endif
		        <div>
	        		<p class="pull-right"><a href="#">Back to top</a></p>
	        	</div>
	       </div>

    	       </div>
    		</footer>


    		<!-- BOOTSTRAP CORE JAVASCRIPT
        ================================================== -->
        <div class="modal fade" id="videoModal" tabindex="1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-body">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        				<div>
        					<iframe width="100%" height="400" frameborder="0" allowfullscreen="" src=""></iframe>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>

@include('__partials/modals/loginModal')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/admin.js"></script>
    <script>
    $('.link').find("ul.collapseable").show();
    //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
        autoPlayYouTubeModal();
      	function autoPlayYouTubeModal() {
          var trigger = $("body").find('[data-toggle="modal"]');
          trigger.click(function () {
              var theModal = $(this).data("target"),
                  videoSRC = $(this).attr("data-theVideo"),
                  videoSRCauto = videoSRC + "?autoplay=1";
              $(theModal + ' iframe').attr('src', videoSRCauto);
              $(theModal + ' button.close').click(function () {
                  $(theModal + ' iframe').attr('src', videoSRC);
              });
          });
      }
    </script>




	</body>
</html>