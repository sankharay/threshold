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
						<a href="<?php echo BASE_URL; ?>">Home</a> > Upload File
                        
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
                <?php 
if($this->session->userdata('update'))
{
	?>
    <div class="alert alert-success">
							<button data-dismiss="alert" class="close" type="button">×</button>
							<strong>Well done!</strong> 
<?php echo $this->session->userdata('update');
$this->session->unset_userdata('update'); ?>
						</div>
    <?php
}
?>
                        
				<div class="box">
					<div class="box-header well">
						<h2><i class="icon-list-alt"></i> Upload Files</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered ">
						   
						  <tbody>
							  <tr>
								  <td>File</td>
								  <td>
                                  

    <?php echo form_open_multipart('');?>

<input type="file" name="userfile" size="20" />
    <br /><br /><input type="hidden" name="userfiles" value="123"  />
    <input type="submit" name="submit" value="Upload" />
	
                                  </td>
							  </tr>
                              </tbody>
                              </table>


<?php
$dir    = BASE_DIR.'/uploads';
$files1 = scandir($dir);
$numfiles = sizeof($files1);
?>
<br />
<span id="notify"></span>
<br />
<table width="500px" border="0" cellpadding="5">
<?php
for($i=2;$i<$numfiles;$i++)
{
?>
  <tr>
    <td width="247"><?php echo $files1[$i]; ?></td>
    <td width="243"><input type="button" value="Process File" onclick="return processfile('<?php echo $files1[$i]; ?>')" /></td>
  </tr>
  <?php
}
?>
</table>
<script>
function processfile(id){
	$("#notify").html('<img src="<?php echo BASE_URL; ?>/img/loader.gif">');
	$("#notify").load('<?php echo BASE_URL; ?>/otherplugins/fileprocess/import.php?file='+id);
	return false;
}
</script>

					</div>
				</div>
			</div><!--/row-->
			
			<div class="row-fluid sortable"></div><!--/row-->
		
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		