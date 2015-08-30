@extends('layouts/master')

@section('title', 'Page Title')

@section('featured')
    @parent
@endsection

@section('container')


		<!-- GALLERY
		======================================================= -->
		<div class="container">
			<h1>Photo Gallery</h1>
			<div class="gallery">
				<div class="row" preload="true">
					<div class="col-lg-3">
						<a href="img/pic1.jpg" data-title="The Balance Photo Gallery 1" data-lightbox="theBalance">
							<img src="img/pic1.jpg" width="200px" class="img-thumbnail"/>
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic2.jpg" data-title="The Balance Photo Gallery 2" data-lightbox="theBalance">
							<img src="img/pic2.jpg" width="200px" class="img-thumbnail"/>
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic3.jpg" data-title="The Balance Photo Gallery 3" data-lightbox="theBalance">
							<img src="img/pic3.jpg" width="200px" class="img-thumbnail"/>
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic4.jpg" data-title="The Balance Photo Gallery 4" data-lightbox="theBalance">
							<img src="img/pic4.jpg" width="200px" class="img-thumbnail"/>
						</a>
					</div>
				</div> <!-- ROW ONE ENDS -->

                  &nbsp;
				<div class="row">
					<div class="col-lg-3">
						<a href="img/pic4.jpg" data-title="The Balance Photo Gallery 5" data-lightbox="theBalance">
							<img src="img/pic5.jpg" width="200px" class="img-thumbnail"/>
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic6.jpg" data-title="The Balance Photo Gallery 6" data-lightbox="theBalance">
							<img src="img/pic6.jpg" width="200px" class="img-thumbnail"/>
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic7.jpg" data-title="The Balance Photo Gallery 7" data-lightbox="theBalance">
							<img src="img/pic7.jpg" width="200px" class="img-thumbnail"/>
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic8.jpg" data-title="The Balance Photo Gallery 8" data-lightbox="theBalance">
							<img src="img/pic8.jpg" width="200px" class="img-thumbnail"/>
						</a>
					</div>
				</div> <!-- ROW TWO ENDS -->

				&nbsp;
				<div class="row">
					<div class="col-lg-3">
						<a href="img/pic9.jpg" data-title="The Balance Photo Gallery 9" data-lightbox="theBalance">
							<img src="img/pic9.jpg" width="200px" class="img-thumbnail"/>
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic10.jpg" data-title="The Balance Photo Gallery 10" data-lightbox="theBalance">
							<img src="img/pic10.jpg" width="200px" class="img-thumbnail"/>
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic11.jpg" data-title="The Balance Photo Gallery 11" data-lightbox="theBalance">
							<img src="img/pic11.jpg" width="200px" class="img-thumbnail"/>
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic12.jpg" data-title="The Balance Photo Gallery 12" data-lightbox="theBalance">
							<img src="img/pic12.jpg" width="200px" class="img-thumbnail"/>
						</a>
					</div>
				</div> <!-- ROW THREE ENDS -->
			</div>
		</div>
  <hr role="separator" class="divider">
@endsection