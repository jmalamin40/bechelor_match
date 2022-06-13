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
      <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Expense List</h5>
          </div>
          <div class="widget-content nopadding">
            <table id="tables" class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>SN</th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Head</th>
                  <th>Item</th>
                  <th>Total</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $total = 0;
                	$i=0;
                    $user_id = $this->session->userdata('user_id');
                	$expense = $this->db->get_where('table_income_expense', array('user_id !='=>$user_id, 'aprove_status'=>1, 'match_id'=>$this->session->userdata('match_id')))->result();
                	foreach ($expense as $key => $value) {
                		$i++;
                 ?>
                 <tr>
                 	<td><?php echo $i; ?></td>
                 	<td><?php $userdata= $this->MView->table_row('fullname', 'table_user', array('user_id'=>$value->user_id));
                 	echo $userdata->fullname;
                 	?></td>
                 	<td><?php echo date('Y M, d', strtotime($value->date)); ?></td>
                 	<td><?php
                 	 echo  $this->MView->table_row('name', 'table_head', array('head_id'=>$value->head_id))->name;
                 	 ?></td>
                 	<td><?php 
                 		$itemdata= $this->db->get_where('table_income_expense_item', array('ie_id'=>$value->ie_id))->result();
                 		foreach ($itemdata as $key => $val) {
                 			if ($key != 0) {
                 				echo ",";
                 			}
                 			echo $val->item_name.'/'.$val->item_qty.'=>'.$val->item_price;
                 		}
                 	 ?></td>
                 	 <td style="text-align:right;"><?php echo number_format($value->total_price, 2);
                 	// if($value->aprove_status == 2){
                 	    $total += $value->total_price;
                 	// }
                 	 ?></td>
                 	 <td>
                 	     <?php  
                 	     
                 	     $user_id =$this->session->userdata('user_id');
                 	     $count= $this->db->get_where('table_aprove', array('user_id'=>$user_id, 'ie_id'=>$value->ie_id))->num_rows();
                 	     if($count>0){ echo 'Aproved';
                 	     }else{
                 	     ?>
                 	     <a onclick="return confirm('Are You Sure!')" href="<?php echo base_url(); ?>Aprove-Expense-bill.txt/<?php echo $this->MdFive->md5($value->ie_id); ?>" class="btn btn-info">Aprove</a>
                 	        <?php } ?>
                 	     </td>
                 </tr>
             	<?php } ?>
             	<tr>
             	    <td colspan="5" style="text-align:right;">Total</td>
             	    <td style="text-align:right;"><?php echo number_format($total, 2); ?></td>
             	    <td></td>
             	</tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
<!--End-Action boxes-->    
  </div>
</div>

<!--end-main-container-part-->

<?php $this->load->view('member/inc/footer'); ?>
