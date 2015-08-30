@include('inc/admin_header')
		<div class="container-fluid display-table">
			<div class="row display-table-row">

				<!-- SIDE MENU AREA
				======================================================= -->
                @include('inc/sidebar')


				<!-- MAIN CONTENT AREA
				======================================================= -->
				<div class="col-md-10 col-sm-11 display-table-cell valign-top">
					<div class="row">
                        @include('inc/admin_nav')

                        @yield('container')
					</div>
				</div>
			</div>

		</div>
@include('inc/footer')