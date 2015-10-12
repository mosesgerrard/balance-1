@extends('layouts/master')

@section('title', 'Page Title')

@section('featured')
    @parent
@endsection

@section('container')


		<!-- GALLERY
		======================================================= -->
		<div class="container">
			<div class="gallery">

			    <h2 class="foto-gallery">Bundung Road</h2>
			    <hr role="separator" class="divider">
			    <p> This is a picture gallery of Bundung main highway. We want to bring the attention of the government
			        and the relevant stakeholders to the current status quo of the road and highlight the dangers and
			        difficulties  it poses to businesses, drivers and commuters; as well as solicitude funds for
			        the maintenance of the road in order to remedy the situation</p>

                <div class="row" preload="true">
                	<div class="col-lg-3">
                		<a href="img/roadf1.jpg" data-title="Bundung Highway 1" data-lightbox="theBalance">
                			<img src="img/road1.jpg" width="200px" class="img-thumbnail"/>
                		</a>
                	</div>

                	<div class="col-lg-3">
                		<a href="img/road2.jpg" data-title="Bundung Highway 2" data-lightbox="theBalance">
                			<img src="img/road2.jpg" width="200px" class="img-thumbnail"/>
                		</a>
                	</div>

                	<div class="col-lg-3">
                		<a href="img/road3.jpg" data-title="Bundung Highway 3" data-lightbox="theBalance">
                			<img src="img/road3.jpg" width="200px" class="img-thumbnail"/>
                		</a>
                	</div>

                	<div class="col-lg-3">
                		<a href="img/road4.jpg" data-title="Bundung Highway 4" data-lightbox="theBalance">
                			<img src="img/road4.jpg" width="200px" class="img-thumbnail"/>
                		</a>
                	</div>
                </div> <!-- ROW ONE ENDS -->

                &nbsp;
                <div class="row" preload="true">
                    <div class="col-lg-3">
                        <a href="img/roadf5.jpg" data-title="Bundung Highway 5" data-lightbox="theBalance">
                            <img src="img/road5.jpg" width="200px" class="img-thumbnail"/>
                        </a>
                    </div>

                    <div class="col-lg-3">
                        <a href="img/road6.jpg" data-title="Bundung Highway 6" data-lightbox="theBalance">
                            <img src="img/road6.jpg" width="200px" class="img-thumbnail"/>
                        </a>
                    </div>

                    <div class="col-lg-3">
                        <a href="img/road7.jpg" data-title="Bundung Highway 7" data-lightbox="theBalance">
                            <img src="img/road7.jpg" width="200px" class="img-thumbnail"/>
                        </a>
                    </div>

                    <div class="col-lg-3">
                        <a href="img/road8.jpg" data-title="Bundung Highway 8" data-lightbox="theBalance">
                            <img src="img/road8.jpg" width="200px" class="img-thumbnail"/>
                        </a>
                    </div>
                </div> <!-- ROW TWO ENDS -->

                 &nbsp;
                <div class="row" preload="true">
                    <div class="col-lg-3">
                        <a href="img/roadf9.jpg" data-title="Bundung Highway 9" data-lightbox="theBalance">
                            <img src="img/road9.jpg" width="200px" class="img-thumbnail"/>
                        </a>
                    </div>

                    <div class="col-lg-3">
                        <a href="img/road10.jpg" data-title="Bundung Highway 10" data-lightbox="theBalance">
                            <img src="img/road10.jpg" width="200px" class="img-thumbnail"/>
                        </a>
                    </div>

                    <div class="col-lg-3">
                        <a href="img/road11.jpg" data-title="Bundung Highway 11" data-lightbox="theBalance">
                            <img src="img/road11.jpg" width="200px" class="img-thumbnail"/>
                        </a>
                    </div>
                </div> <!-- ROW THREE ENDS -->

                 &nbsp;&nbsp;
			    <h2>The Balance Crew Members and Supporters</h2>
			    <hr role="separator" class="divider">

				<div class="row" preload="true">
					<div class="col-lg-3">

						<a href="img/pic1.JPG" data-title="The Balance Photo Gallery 1" data-lightbox="theBalance">


						{!! Html::image('img/pic1.JPG','galary image', [ "width"=>"200px", "class"=>"img-thumbnail"]); !!}
						</a>
					</div>

					<div class="col-lg-3">

						<a href="img/pic2.JPG" data-title="The Balance Photo Gallery 2" data-lightbox="theBalance">
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
				<div class="row" preload="true">
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
 @endsection
