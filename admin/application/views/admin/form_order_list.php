		<div class="panel-body" id="ajax">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>ID</th>
											<th>Record #</th>
											<th>Customer</th>
											<th>Product</th>
											<th class="hidden-phone">Unitprice</th>
											<th class="hidden-phone">Qty</th>
											<th class="hidden-phone">Price</th>
											<th class="hidden-phone">Image</th>								
											<th class="hidden-phone">Pay</th>


										</tr>
									</thead>
									<tbody>

										<?php if ($order <> false): $i =1; foreach ($order as $row):?>
												
											<tr class="gradeX" id="order_id_<?php echo $row['order_id'] ?>">
											<td> <?php echo $i ?></td>
											<td> <?php echo $row['order_id'] ?> </td>
											<td> <?php echo $row['cus_name'] ?> </td>
											<td> <?php echo $row['pro_name'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['unitprice'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['qty'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['price'] ?> </td>
											<td class="center hidden-phone"> <img width="100px" src="<?php echo base_url().'public/images/product_features/'. $row['pro_feature'] ?>">  </td>
											<td class="center hidden-phone"> 


												<?php 

												$credit_card = 	$this->m_order->get_pay_credit_card( $row['cus_id']);
												$dedit_card = 	$this->m_order->get_pay_dedit_card( $row['cus_id']);
												$net_bank =	$this->m_order->get_pay_net_bank( $row['cus_id']);

												if ($credit_card != false) {
													print_r($credit_card) ;
												}elseif($dedit_card != false){

													print_r($dedit_card) ;
												}elseif ($net_bank != false ) {
													print_r($net_bank) ;
												}
												


												?>


											 </td>


											<td class="center hidden-phone hidden">

												<a href="<?php echo site_url() ?>admin/category/edit/<?php echo $row['order_id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a> 
												<?php if($row['pro_status'] == 'Y'){ ?>
													<a href="#modal_delete_<?php echo $row['order_id'] ?>" class="modal-with-zoom-anim btn btn-danger" id="<?php echo $row['order_id'] ?>"><i class="fa fa-trash-o"></i></a> 

														<!-- Modal Animation -->
													<div id="modal_delete_<?php echo $row['order_id'] ?>" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
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
																		<button class="btn btn-primary modal-confirm-delete" id="<?php echo $row['order_id'] ?>">Yes</button>
																		<button class="btn btn-default modal-dismiss">No</button>
																	</div>
																</div>
															</footer>
														</section>
													</div>
													
												<?php }else{ ?>
													<a href="#modal_restore_<?php echo $row['order_id'] ?>" class="modal-with-zoom-anim btn btn-success" id="<?php echo $row['order_id'] ?>"><i class="fa fa-check"></i></a> 


											<!-- Modal Animation -->
														<div id="modal_restore_<?php echo $row['order_id'] ?>" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
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
																			<button  class="btn btn-primary modal-confirm-restore" id="<?php echo $row['order_id'] ?>">Yes</button>
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

						
