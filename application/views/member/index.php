<?php $this->load->view('member/inc/header'); ?>

<!--sidebar-->
<?php $this->load->view('member/inc/sidebar'); ?>
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url(); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        
        <li class="bg_lb m_lg"> <a href="<?php echo base_url(); ?>Add-expense-bill.txt"> <i class="icon-pencil"></i>Add Expense</a> </li>
        <li class="bg_lo m_lg"> <a href="<?php echo base_url(); ?>expense-bill.txt"> <i class="icon-th"></i> Expense List</a> </li>
        
      </ul>
    </div>
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        
       
        <?php 
        $userdata = $this->MView->table_result('user_id,fullname', 'table_user', array('status'=>1, 'match_id'=>$this->session->userdata('match_id'))); 
        $texpese = 0;
        foreach($userdata as $v){
        ?>
        <li class="bg_lo m_lg"> <a href="<?php echo base_url(); ?>expense-bill-List-by-User.txt/<?php echo $this->MdFive->md5($v->user_id); ?>/<?php echo $v->fullname; ?>"> <i class="icon-th"></i> 
                <?php $userExpense= $this->MView->thisMonthUserExpense($v->user_id);
                    echo number_format($userExpense, 2);
                    $texpese += $userExpense;
                ?><br>
        <?php echo $v->fullname; ?></a> </li>
        <?php } ?>
      </ul>
    </div>
    
    
<!--End-Action boxes-->    
<?php 

    $coutuser = $this->db->get_where('table_user', array('status'=>1, 'match_id'=>$this->session->userdata('match_id')))->num_rows();
?>
    
   <div class="row-fluid">
      <div class="span4">
        <div class="widget-box">
           <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
              <h5>Total/Average</h5>
            </div>
            <div class="widget-content" >
                <table class="table">
                    <tr>
                        <th><?php //echo date('Y M'); ?></th>
                        <th>Total Cost</th>
                        <th><?php echo number_format($texpese, 2); ?></th>
                    </tr>
                    <tr>
                        <th><?php //echo date('Y M'); ?></th>
                        <th>Average Cost</th>
                        <th><?php echo number_format($texpese/$coutuser, 2); ?></th>
                    </tr>
                </table>
            </div>
       </div> 
    </div>
    <div class="span8">
        <div class="widget-box">
           <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
              <h5>Your Status</h5>
            </div>
            <div class="widget-content" >
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Total Cost</th>
                        <th>Average Cost</th>
                        <th>Get</th>
                        <th>Pay</th>
                    </tr>
                    <?php foreach($userdata as $v){ ?>
                        <tr>
                            <td><?php echo $v->fullname; ?></td>
                            <td align="right"><?php echo number_format($texpese, 2); ?></td>
                            <td align="right"><?php
                            $averagecost= $texpese/$coutuser;
                            echo number_format($averagecost, 2); ?></td>
                            <td>
                                <?php 
                                    $userExpense= $this->MView->thisMonthUserExpense($v->user_id);
                                    $current= $userExpense-$averagecost;
                                    if($current >=0 ){
                                        echo number_format($current, 2);
                                    }
                                ?>
                            </td>
                            <td>
                                <?php 
                                    
                                    if($current <=0 ){
                                        echo number_format($current, 2);
                                    }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
       </div> 
    </div>
  </div>
  </div>
  
</div>

<!--end-main-container-part-->

<?php $this->load->view('member/inc/footer'); ?>
