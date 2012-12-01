<div class="sidebar">
				
				<div class="antiScroll">
					<div class="antiscroll-inner">
						<div class="antiscroll-content">
						
							
					
							<div class="sidebar_inner">
								<form class="input-append" >
									<input autocomplete="off" name="query" class="search_query input-medium" size="16" type="text" placeholder="Report Details" />
								</form>
								<div id="side_accordion" class="accordion">
									<?php foreach ($cities as $rows) {?>
										
                        				<div class="accordion-group">
										<div class="accordion-heading">
											<a href="#collapseOne" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle" id="<?php echo $rows['city_id']?>">
												<i class="icon-th"></i> <?php echo $rows['city_name'];?> (<?php if(isset($report_count[$rows['city_id']])) echo $report_count[$rows['city_id']]; else echo "0";?>)
											</a>
										</div>
										
									</div>
									

                    		<?php } ?>
									
														
									
								</div>
																
								<div class="push"></div>
							</div>
							   
							 
						
						</div>
					</div>
				</div>
			
			</div>