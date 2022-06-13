<?php $this->load->view('member/inc/header'); ?>

<!--sidebar-->
<?php $this->load->view('member/inc/sidebar'); ?>
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url(); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">My Profile</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <div class="row-fluid">
    <div class="span10">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>My Profile</h5>
        </div>
        <?php if ($this->session->flashdata('msg')) { ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
    	<?php } ?>
        <div class="widget-content nopadding">
          <form action="<?php echo base_url(); ?>profile-update.txt" method="post" class="form-horizontal">
            <div class="control-group">
                <input type="hidden" name="user_id" value="<?php echo $data->user_id;  ?>">
              <label class="control-label">Username :</label>
              <div class="controls">
                <input type="text" class="span11" name="username" value="<?php echo $data->username;  ?>" placeholder="Username" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="fullname" value="<?php echo $data->fullname;  ?>" placeholder="Full Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Phone :</label>
              <div class="controls">
                <input type="text" class="span11" name="phone" value="<?php echo $data->phone;  ?>" placeholder="Phone" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">E-mail :</label>
              <div class="controls">
                <input type="email" class="span11" name="email" value="<?php echo $data->email;  ?>" placeholder="E-mail" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Password </label>
              <div class="controls">
                <input type="password" name="password" id="password" class="span11" autocomplete="off" placeholder="Enter Password"  />
              </div>
            </div>
            
            
            <div class="form-actions">
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


