							<table class="table table-hover all-members">
								<thead>
									<tr>
										<th>#</th>
										<th>Full Name</th>
										<th>Gender</th>
										<th>Nationality</th>
										<th>Occupation</th>
										<th>Address</th>
										<th>Phone</th>
										<th>Email</th>
										<th>Date</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
								    @if(!isset($data) and empty($data))
								    <tr>
								        <td colspan="10"><strong>Sorry there are no members yet!</strong></td>
								    </tr>
								    @else
								        @foreach($data as $key => $value)
								        <tr>
								                <td>{{$key + 1}}</td>
								                <td><a href="#">{{ucwords($value['person']['fullname'])}}</a></td>
								                 <td>{{ucwords($value['person']['gender'])}}</td>
								                <td>{{ucwords($value['person']['nationalities'])}}</td>
								                <td>{{ucwords($value['person']['occupation'])}}</td>
								                <td>
								                    @if(isset($value['person']['contacts']))
                                                        {{ucwords($value['person']['contacts']['address'])}}
								                    @else
								                     -
								                    @endif
								                </td>
								                <td>
   								                    @if(isset($value['person']['contacts']))
                                                           {{ucwords($value['person']['contacts']['phone'])}}
   								                    @else
   								                     -
   								                    @endif
   								                </td>
								                <td>
   								                    @if(isset($value['person']['contacts']))
                                                           {{ucwords($value['person']['contacts']['email'])}}
   								                    @else
   								                     -
   								                    @endif
   								                </td>
   								                 <td>{{$value['person']['created_at']}}</td>
   								                 <td>
                                                      @if($value['status'] == 1)
                                                        <a href="{{route('memberships.show',[$value['id'],'setstatus'=>0])}}" class="label label-success">Approved</a>
                                                      @else
                                                       <a href="{{route('memberships.show',[$value['id'],'setstatus'=>1])}}" class="label label-warning">unapprove</a>
                                                      @endif
                                                  </td>
								        </tr>
                                        @endforeach
								    @endif

								</tbody>
							</table>