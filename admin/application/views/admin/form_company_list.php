		<div class="panel-body" id="ajax">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>ID</th>
											<th>Record #</th>
											<th>Company</th>
											<th class="hidden-phone">Contact</th>
											<th class="hidden-phone">Address</th>
											<th class="hidden-phone">Social</th>
											<th class="hidden-phone">Logo</th>
											<th class="hidden-phone">Action</th>
										</tr>
									</thead>
									<tbody>

										<?php if ($company <> false): $i =1; foreach ($company as $row):?>
												
											<tr class="gradeX" id="company_id_<?php echo $row['company_id'] ?>">
											<td> <?php echo $i ?></td>
											<td> <?php echo $row['company_id'] ?> </td>
											<td> <?php echo $row['comp_name'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['comp_email'] ?><br><?php echo $row['comp_phone'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['comp_address'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['fb'] ?><br><?php echo $row['site'] ?> </td>
											<td class="center hidden-phone"> <img width="100px" src="<?php echo base_url().$this->upload_path.'/product_company/'. $row['comp_logo'] ?>">  </td>
											<td class="center hidden-phone">

												<a href="<?php echo site_url() ?>admin/company/edit/<?php echo $row['company_id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a> 
												<?php if($row['comp_status'] == 'Y'){ ?>
													<a href="#modal_delete_<?php echo $row['company_id'] ?>" class="modal-with-zoom-anim btn btn-danger" id="<?php echo $row['company_id'] ?>"><i class="fa fa-trash-o"></i></a> 

														<!-- Modal Animation -->
													<div id="modal_delete_<?php echo $row['company_id'] ?>" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
														<section class="panel">
															<header class="panel-heading">
																<h2 class="panel-title">Are you sure?</h2>
															</header>
															<div class="panel-body">
																<div class="modal-wrapper">
																	<div class="modal-icon">
																		<i class="fa fa-question-circle"></i>
																	</div>
																	<div class="modal-text">
																		<p>Are you sure that you want to delete this company?</p>
																	</div>
																</div>
															</div>
															<footer class="panel-footer">
																<div class="row">
																	<div class="col-md-12 text-right">
																		<button class="btn btn-primary modal-confirm-delete" id="<?php echo $row['company_id'] ?>">Yes</button>
																		<button class="btn btn-default modal-dismiss">No</button>
																	</div>
																</div>
															</footer>
														</section>
													</div>
													
												<?php }else{ ?>
													<a href="#modal_restore_<?php echo $row['company_id'] ?>" class="modal-with-zoom-anim btn btn-success" id="<?php echo $row['company_id'] ?>"><i class="fa fa-check"></i></a> 


											<!-- Modal Animation -->
														<div id="modal_restore_<?php echo $row['company_id'] ?>" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
															<section class="panel">
																<header class="panel-heading">
																	<h2 class="panel-title">Are you sure?</h2>
																</header>
																<div class="panel-body">
																	<div class="modal-wrapper">
																		<div class="modal-icon">
																			<i class="fa fa-question-circle"></i>
																		</div>
																		<div class="modal-text">
																			<p>Are you sure that you want to restore this company?</p>
																		</div>
																	</div>
																</div>
																<footer class="panel-footer">
																	<div class="row">
																		<div class="col-md-12 text-right">
																			<button  class="btn btn-primary modal-confirm-restore" id="<?php echo $row['company_id'] ?>">Yes</button>
																			<button class="btn btn-default modal-dismiss">No</button>
																		</div>
																	</div>
																</footer>
															</section>
														</div>
												<?php } ?>

											</td>
											</tr>

										<?php $i++; endforeach; endif; ?>



									</tbody>
								</table>
							</div>

						
