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
						<a href="<?php echo BASE_URL; ?>">Home</a> > Edit
                        
					</li>
				</ul>
			</div>

			<div class="row-fluid sortable">
				<?php
				if($this->session->userdata('dup'))
				{
					?>
                    <div class="alert alert-error">
							<button data-dismiss="alert" class="close" type="button">×</button>
							
                            <strong><?php echo $this->session->userdata('dup'); 
							$this->session->unset_userdata('dup');
							?> </strong>
						</div>
                    <?php
				}
				?>
				<div class="box">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> Edit Threshold</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                    <form action="<?php echo BASE_URL; ?>/home/edit/<?php echo $this->uri->segment(3); ?>" method="post">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						   
						  <tbody>
							  <tr>
								  <td>Department</th>
								  <td><input type="text" name="dept" value="<?php echo $content->dept; ?>" disabled="disabled" /></th>
							  </tr> 
							  <tr>
								  <td>Threshold</td>
								  <td><!--<input type="text" name="thrashold" value="<?php echo $content->thrashold; ?>"  />-->
<select name="thrashold" required>
<option value="">Select Threshold</option>
<option value="no"<?php if($content->thrashold == 'no' ) { echo "selected='selected'";  } ?>>Not Auth.</option>
<option value="1"<?php if($content->thrashold == '1' ) { echo "selected='selected'";  } ?>>1</option>
<option value="2"<?php if($content->thrashold == '2' ) { echo "selected='selected'";  } ?>>2</option>
<option value="3"<?php if($content->thrashold == '3' ) { echo "selected='selected'";  } ?>>3</option>
<option value="4"<?php if($content->thrashold == '4' ) { echo "selected='selected'";  } ?>>4</option>
<option value="5"<?php if($content->thrashold == '5' ) { echo "selected='selected'";  } ?>>5</option>
<option value="6"<?php if($content->thrashold == '6' ) { echo "selected='selected'";  } ?>>6</option>
<option value="7"<?php if($content->thrashold == '7' ) { echo "selected='selected'";  } ?>>7</option>
<option value="8"<?php if($content->thrashold == '8' ) { echo "selected='selected'";  } ?>>8</option>
<option value="9"<?php if($content->thrashold == '9' ) { echo "selected='selected'";  } ?>>9</option>
<option value="10"<?php if($content->thrashold == '10' ) { echo "selected='selected'";  } ?>>10</option>
</select>
</td>
							  </tr>
							  <tr>
								  <td>&nbsp;</td>
								  <td><input type="submit" name="submit" value="Update" class="btn btn-primary" />
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

		