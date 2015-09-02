				@inject('count','App\Member')

				<div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="sidebar">
					<h1 class="hidden-xs hidden-sm">The Balance</h1>
					<ul>
						<li class="link active">
							<a href="{{route('admin.index')}}">
								<span class="fa fa-home fa-3x" aria-hidden="true"></span>
								<span class="hidden-sm hidden-xs">Dashboard</span>
							</a>
						</li>
						<li class="link ">
							<a href="#collapse-members" data-toggle="collapse" aria-controls="control-members">
								<span class="fa fa-users fa-3x" aria-hidden="true"></span>
								<span class="hidden-sm hidden-xs">Members</span>
							</a>
							<ul class="collapse collapseable" id="collapse-members">
								<li>
									<a href="{{url('approved')}}">Approved
										<span class="label label-success pull-right hidden-sm hidden-xs">{{$count->approved()->get()->count()}}</span>
									</a>
								</li>
								<li>
									<a href="{{url('unapproved')}}">Unapproved
										<span class="label label-warning pull-right hidden-sm hidden-xs">{{$count->unapproved()->get()->count()}}</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
{{--{{dd($data->total())}}--}}