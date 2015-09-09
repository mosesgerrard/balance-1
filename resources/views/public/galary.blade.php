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
						{!! Html::image('img/pic1.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic2.jpg" data-title="The Balance Photo Gallery 2" data-lightbox="theBalance">
							{!! Html::image('img/pic2.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic3.JPG" data-title="The Balance Photo Gallery 3" data-lightbox="theBalance">
							{!! Html::image('img/pic3.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic4.JPG" data-title="The Balance Photo Gallery 4" data-lightbox="theBalance">
							{!! Html::image('img/pic4.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>
				</div> <!-- ROW ONE ENDS -->

                  &nbsp;
				<div class="row">
					<div class="col-lg-3">
						<a href="img/pic4.JPG" data-title="The Balance Photo Gallery 5" data-lightbox="theBalance">
							{!! Html::image('img/pic5.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic6.JPG" data-title="The Balance Photo Gallery 6" data-lightbox="theBalance">
							{!! Html::image('img/pic6.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic7.JPG" data-title="The Balance Photo Gallery 7" data-lightbox="theBalance">
							{!! Html::image('img/pic7.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic8.JPG" data-title="The Balance Photo Gallery 8" data-lightbox="theBalance">
							{!! Html::image('img/pic8.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>
				</div> <!-- ROW TWO ENDS -->

				&nbsp;
				<div class="row">
					<div class="col-lg-3">
						<a href="img/pic9.JPG" data-title="The Balance Photo Gallery 9" data-lightbox="theBalance">
							{!! Html::image('img/pic9.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic10.JPG" data-title="The Balance Photo Gallery 10" data-lightbox="theBalance">
							{!! Html::image('img/pic10.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic11.JPG" data-title="The Balance Photo Gallery 11" data-lightbox="theBalance">
							{!! Html::image('img/pic11.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>

					<div class="col-lg-3">
						<a href="img/pic12.JPG" data-title="The Balance Photo Gallery 12" data-lightbox="theBalance">
							{!! Html::image('img/pic12.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>
				</div> <!-- ROW THREE ENDS -->
			</div>
		</div>
  <hr role="separator" class="divider">
@endsection