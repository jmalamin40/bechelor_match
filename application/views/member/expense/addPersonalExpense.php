<?php $this->load->view('member/inc/header'); ?>

<!--sidebar-->
<?php $this->load->view('member/inc/sidebar'); ?>
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <div class="row-fluid">
    <div class="span10">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Expense History</h5>
        </div>
        <?php if ($this->session->flashdata('msg')) { ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
    	<?php } ?>
        <div class="widget-content nopadding">
          <form action="<?php echo base_url(); ?>Submit-personal-Item.txt" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Date:</label>
              <div class="controls">

                <input type="text" required="" name="date" autocomplete="off" id="datepicker" class="span5" placeholder="0000-00-00" />

                <input type="text" name="" class="span6" style="opacity: 0;">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Expense Head:</label>
              <div class="controls">
              	<?php $head= $this->db->get_where('table_head', array('status'=>1))->result(); ?>
                <select required="" class="span5" name="head_id">
                	   <option value="">--Select--</option>
                	<?php foreach ($head as $key => $value) { ?>
                		<option value="<?php echo $value->head_id; ?>"><?php echo  $value->name; ?></option>
                	<?php } ?>
                </select>
                <input type="text" name="" class="span6" style="opacity: 0;">
              </div>
            </div>

            <div class="control-group">
            	<div class="row-fluid">
            		<div class="span4">Item Name</div>
            		<div class="span3">Item Qty</div>
            		<div class="span3">Price</div>
            		<div class="span2">Action</div>
            	</div>
            	<div class="static_item">
            		<div class="row-fluid">
	            		<div class="span4"><input type="text" placeholder="Item Name" name="item_name[]" class="span11"></div>
	            		<div class="span3"><input type="number" placeholder="Qty" name="item_qty[]"  class="span11"></div>
	            		<div class="span3"><input type="number" placeholder="Price" name="item_price[]" class="span11"></div>
	            		<div class="span2">
	            			<span class="btn itemAdd btn-info"><i class="icon-plus-sign"></i></span>
	            		</div>
	            	</div>
            	</div>
            	<div class="" id="dynamicItem"></div>
            </div>

            <div class="form-actions" style="text-align: right;">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
      
    </div>
</div>
    </div>
<!--End-Action boxes-->    


   
    
  </div>
</div>

<!--end-main-container-part-->

<?php $this->load->view('member/inc/footer'); ?>
