		<div class="panel-body" id="ajax">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>ID</th>
											<th>Record #</th>
											<th>Prouduct</th>
											<th class="hidden-phone">Size</th>
											<th class="hidden-phone">Price</th>
											<th class="hidden-phone">Discount</th>
											<th class="hidden-phone">Feature</th>
											<th class="hidden-phone">Action</th>
										</tr>
									</thead>
									<tbody>

										<?php if ($product <> false): $i =1; foreach ($product as $row):?>
												
											<tr class="gradeX" id="pro_id_<?php echo $row['pro_id'] ?>">
											<td> <?php echo $i ?></td>
											<td> <?php echo $row['pro_id'] ?> </td>
											<td> <?php echo $row['pro_name'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['pro_size'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['pro_price'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['pro_discount'] ?> </td>
											<td class="center hidden-phone"> <img width="100px" src="<?php echo base_url().$this->upload_path.'/product_features/'. $row['pro_feature'] ?>">  </td>
											<td class="center hidden-phone">

												<a href="<?php echo site_url() ?>admin/product/edit/<?php echo $row['pro_id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a> 
												<?php if($row['pro_status'] == 'Y'){ ?>
													<a href="#modal_delete_<?php echo $row['pro_id'] ?>" class="modal-with-zoom-anim btn btn-danger" id="<?php echo $row['pro_id'] ?>"><i class="fa fa-trash-o"></i></a> 

														<!-- Modal Animation -->
													<div id="modal_delete_<?php echo $row['pro_id'] ?>" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
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
																		<p>Are you sure that you want to delete this product?</p>
																	</div>
																</div>
															</div>
															<footer class="panel-footer">
																<div class="row">
																	<div class="col-md-12 text-right">
																		<button class="btn btn-primary modal-confirm-delete" id="<?php echo $row['pro_id'] ?>">Yes</button>
																		<button class="btn btn-default modal-dismiss">No</button>
																	</div>
																</div>
															</footer>
														</section>
													</div>
													
												<?php }else{ ?>
													<a href="#modal_restore_<?php echo $row['pro_id'] ?>" class="modal-with-zoom-anim btn btn-success" id="<?php echo $row['pro_id'] ?>"><i class="fa fa-check"></i></a> 


											<!-- Modal Animation -->
														<div id="modal_restore_<?php echo $row['pro_id'] ?>" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
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
																			<p>Are you sure that you want to restore this product?</p>
																		</div>
																	</div>
																</div>
																<footer class="panel-footer">
																	<div class="row">
																		<div class="col-md-12 text-right">
																			<button  class="btn btn-primary modal-confirm-restore" id="<?php echo $row['pro_id'] ?>">Yes</button>
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

						
