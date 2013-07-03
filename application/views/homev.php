<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			
<div>
			<h2>Southgate Store Threshold</h2><br>
			</div>
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo BASE_URL; ?>">Home</a> 
                        
					</li>
				</ul>
			</div>

			<div class="row-fluid sortable">
            <?php if($duplicates > 0)
			{
				?>
				<div class="alert alert-error">
							<button data-dismiss="alert" class="close" type="button">×</button>
							
                            <strong>Oh!</strong> <?php echo $duplicates." Duplicate Department Records";
							echo "<br>Duplicate Departments : "; 
							foreach($duplicates_data as $value);
							echo $value->dept." , ";
							?>
						</div>
                        <?php
			}
			?>
				<div class="box">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> List Departments</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                    
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Department</th>
								  <th>Threshold</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  foreach($content as $value)
						  {
							  ?>
							  
							<tr>
								<td><?php echo $value->dept; ?></td>
								<td class="center"><?php echo $value->thrashold; ?></td>
								<td class="center">
									<a class="btn btn-info" href="<?php echo BASE_URL; ?>/home/edit/<?php echo $value->dept; ?>">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="<?php echo BASE_URL; ?>/home/delete/<?php echo $value->dept; ?>">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
                                </td>
							</tr>
							
							  <?php
						  }
						  ?>
							  <tr>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
								  <td>&nbsp;</td>
							  </tr>
						  </tbody>
					  </table>  
					</div>
				</div>
			</div><!--/row-->
			
			<div class="row-fluid sortable"></div><!--/row-->
		
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		