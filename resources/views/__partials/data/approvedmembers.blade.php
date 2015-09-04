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
								        	<?php  $unique = $value['id'].'-'.str_random(28)  ?>
								                <td>{{$key + 1}}</td>
								                <td><a href="#{!! $unique !!}" data-toggle="modal" class="edit-record" data-id="1">{{ucwords($value['person']['fullname'])}}</a></td>
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

                                                  <td colspan="12">
                                                  	

												    <!-- MODAL MEMBERS RECORDS
											    ================================================== -->
													<div class="modal fade" id="{!!$unique!!}" tabindex="-1" role="dialog" aria-labelledby="membersModal">
											  			<div class="modal-dialog modal-lg">
											    			<div class="modal-content">
											      				<div class="modal-header">
											        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        					<h4 class="modal-title" id="membersModal">Members Name</h4>
											      				</div>
											      				<div class="modal-body">
											      					<table class="table table-hover all-members">
																			<thead>
																				<tr>
																					
																					<th>Full Name</th>
																					<th>Gender</th>
																					<th>Nationality</th>
																					<th>Occupation</th>
																					<th>Address</th>
																					<th>Phone</th>
																					<th>Email</th>
																					<th>Date</th>
			
																				</tr>
																			</thead>
																			<tbody>
																				<tr>
																					
																					<td>{{ucwords($value['person']['fullname'])}}</td>
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
																			<td>
																				{{$value['person']['created_at']}}

																			</td>
																					
																				</tr>
																				
																			</tbody>
																		</table>
											      				</div>
											      				<div class="modal-footer">

	      				@if( !($value->person->files->isEmpty()) )


	      					<a href="{!!
	      					 asset('download/'.'media/'.$value->person->files->toArray()[0]['renameFile']) 
	      					 !!}" class="btn btn-success">Download</a>
	      				@endif



																	<a href="{!! route('memberships.edit',$value['id']) !!}" class="btn btn-info" >Edit</a>

																	<button class="blanker">
																	{!! Form::open(['route'=>['memberships.destroy',$value['id']],'method'=>'delete', 'class'=>'form-inline']) !!}
																		<button type="submit" class="btn btn-danger">Delete </button>
																	{!! Form::close() !!}																		
																	</button>



											        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											      				</div>
											    			</div>
											  			</div>
													</div>



                                                  </td>

								        </tr>
                                        @endforeach
								    @endif

								</tbody>
							</table>

                                                  	

