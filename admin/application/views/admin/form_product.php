<div class="panel-body">
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
												
											<tr class="gradeX">
											<td> <?php echo $i ?></td>
											<td> <?php echo $row['pro_id'] ?> </td>
											<td> <?php echo $row['pro_name'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['pro_size'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['pro_price'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['pro_discount'] ?> </td>
											<td class="center hidden-phone"> <?php echo $row['pro_feature'] ?> </td>
											<td class="center hidden-phone">

												<a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a> 
												<?php if($row['pro_status'] == 'Y'){ ?>
													<a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i></a> 
												<?php }else{ ?>
													<a href="" class="btn btn-success"><i class="fa fa-check"></i></a> 
												<?php } ?>

											</td>
											</tr>

										<?php $i++; endforeach; endif; ?>



									</tbody>
								</table>
							</div>