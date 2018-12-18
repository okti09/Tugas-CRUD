<?php 
$info = $this->session->flashdata('info');
if (!empty($info))
{
 echo $info;
}
?>
<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/table/simpan" 
 onsubmit="return cekform();">

 <div class="control-group">  
  <label class="control-label">id_creator</label>
  <div class="controls">
   <input type="text" name="ID" id="ID" placeholder="ID" class="span1" value="<?php echo $ID;?>">
  </div>
 </div>

 <div class="control-group">  
  <label class="control-label">creator</label>
  <div class="controls">
   <input type="text" name="creator" id="creator" placeholder="creator" class="span3" value="<?php echo $creator;?>">
  </div>
 </div>

 <div class="control-group">  
  <label class="control-label">Konten</label>
  <div class="controls">
   <input type="text" name="Konten" id="Konten" placeholder="Konten" class="span1" value="<?php echo $Konten;?>">
  </div>
 </div>
 <br>
 <div>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="submit"  class="btn btn-primary btn-small">simpan</button>
 </div>



</form>