		<div class="panel-body" id="ajax">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>ID</th>
											<th>Record #</th>
											<th>Category</th>
											<th class="hidden-phone">Icon</th>
											<!-- <th class="hidden-phone">Image</th>		 -->									
											<th class="hidden-phone">Action</th>
										</tr>
									</thead>
									<tbody>

										<?php if ($category <> false): $i =1; foreach ($category as $row):?>
												
											<tr class="gradeX" id="sub_cat1_id_<?php echo $row['sub_cat1_id'] ?>">
											<td> <?php echo $i ?></td>
											<td> <?php echo $row['sub_cat1_id'] ?> </td>
											<td> <?php echo $row['subcat_name'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['subcat_icon'] ?> </td>
											<!-- <td class="center hidden-phone"> <img width="100px" src="<?php echo base_url().'public/images/product_category/'. $row['pro_cat_img'] ?>">  </td> -->
											<td class="center hidden-phone">

												<a href="<?php echo site_url() ?>admin/category/sub1/edit/<?php echo $row['sub_cat1_id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a> 
												<?php if($row['subcate_status'] == 'Y'){ ?>
													<a href="#modal_delete_<?php echo $row['sub_cat1_id'] ?>" class="modal-with-zoom-anim btn btn-danger" id="<?php echo $row['sub_cat1_id'] ?>"><i class="fa fa-trash-o"></i></a> 

														<!-- Modal Animation -->
													<div id="modal_delete_<?php echo $row['sub_cat1_id'] ?>" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
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
																		<p>Are you sure that you want to delete this category?</p>
																	</div>
																</div>
															</div>
															<footer class="panel-footer">
																<div class="row">
																	<div class="col-md-12 text-right">
																		<button class="btn btn-primary modal-confirm-delete" id="<?php echo $row['sub_cat1_id'] ?>">Yes</button>
																		<button class="btn btn-default modal-dismiss">No</button>
																	</div>
																</div>
															</footer>
														</section>
													</div>
													
												<?php }else{ ?>
													<a href="#modal_restore_<?php echo $row['sub_cat1_id'] ?>" class="modal-with-zoom-anim btn btn-success" id="<?php echo $row['sub_cat1_id'] ?>"><i class="fa fa-check"></i></a> 


											<!-- Modal Animation -->
														<div id="modal_restore_<?php echo $row['sub_cat1_id'] ?>" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
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
																			<p>Are you sure that you want to restore this category?</p>
																		</div>
																	</div>
																</div>
																<footer class="panel-footer">
																	<div class="row">
																		<div class="col-md-12 text-right">
																			<button  class="btn btn-primary modal-confirm-restore" id="<?php echo $row['sub_cat1_id'] ?>">Yes</button>
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

						
