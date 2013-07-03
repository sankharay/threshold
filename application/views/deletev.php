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
						<a href="<?php echo BASE_URL; ?>">Home</a> > Delete
                        
					</li>
				</ul>
			</div>

			<div class="row-fluid sortable">
				
				<div class="box">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> Delete Department</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                    <form action="<?php echo BASE_URL; ?>/home/delete/<?php echo $this->uri->segment(3); ?>" method="post">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						   
						  <tbody>
							  <tr>
								  <td>Dept.</th>
								  <td><input type="text" name="dept" value="<?php echo $content->dept; ?>" disabled="disabled" /></th>
							  </tr> 
							  <tr>
								  <td>Thrashold</td>
								  <td><input type="text" name="thrashold" value="<?php echo $content->thrashold; ?>"  disabled="disabled" /></td>
							  </tr>
							  <tr>
								  <td>&nbsp;</td>
								  <td><input type="submit" name="submit" value="Delete" class="btn btn-primary" />
                                  </td>
							  </tr>
						  </tbody>
					  </table> 
                      </form>
					</div>
				</div>
			</div><!--/row-->
			
			<div class="row-fluid sortable"></div><!--/row-->
		
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		