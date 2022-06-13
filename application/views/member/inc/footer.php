<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12">  <a href="#">Technical Team</a> </div>
</div>

<!--end-Footer-part-->

<script src="<?php echo base_url(); ?>assets/member/js/excanvas.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/jquery.min.js"></script> 

<script type="text/javascript">
  $(document).ready(function(){
    var i=0;
      $('.itemAdd').click(function()
        {
          i++;
          var html ='';
          html +='<div id="remove_row_'+i+'" class="row-fluid">';
          html +='  <div class="span4"><input type="text" placeholder="Item Name" name="item_name[]" class="span11"></div>';
          html +='  <div class="span3"><input type="number" placeholder="Qty" name="item_qty[]" class="span11"></div>';
          html +='  <div class="span3"><input type="number" placeholder="Price" name="item_price[]" class="span11"></div>';
          html +='  <div class="span2">';
          html +='    <span onclick="remove('+i+')" class="btn  btn-danger"><i class="icon-remove"></i></span>';
          html +='  </div>';
          html  +='</div>';

          $('#dynamicItem').append(html);

        });
    });
  function remove(id)
  {
    $('#remove_row_'+id).remove();
  }
</script>
<script src="<?php echo base_url(); ?>assets/member/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/jquery.flot.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/jquery.flot.resize.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/jquery.peity.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/fullcalendar.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/matrix.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/matrix.dashboard.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/jquery.gritter.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/matrix.interface.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/matrix.chat.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/jquery.validate.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/matrix.form_validation.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/jquery.wizard.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/select2.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/matrix.popover.js"></script> 
<script src="<?php echo base_url(); ?>assets/member/js/jquery.dataTables.min.js"></script> 
<script type="text/javascript">
  $(document).ready( function () {
      $('#tables').DataTable();
  } );
</script>
<script src="<?php echo base_url(); ?>assets/member/js/matrix.tables.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
  $('#datepicker').datepicker({dateFormat: 'dd-mm-yy',});
</script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

<script type="text/javascript">
  // $(document).ready(function(){
  //   alert();
  //   $('.itemAdd').click(function()
  //     {
  //       var html ='';
  //       html +='<div class="row-fluid">';
  //       html +='  <div class="span4"><input type="text" name="item_name[]" class="span11"></div>';
  //       html +='  <div class="span3"><input type="number" name="item_qty[]" class="span11"></div>';
  //       html +='  <div class="span3"><input type="number" name="item_price[]" class="span11"></div>';
  //       html +='  <div class="span2">';
  //       html +='    <span class="btn  btn-danger"><i class="icon-remove"></i></span>';
  //       html +='  </div>';
  //       html  +='</div>';

  //       $('#dynamicItem').append(html);

  //     });
  // });
</script>
<?php $resdata= $this->db->get_where('table_income_expense', array('ledgertype'=>'public', 'match_id'=>$this->session->userdata('match_id'), 'user_id !='=>$this->session->userdata('user_id')))->result();

    foreach($resdata as $v){
       $userdata= $this->MView->table_row('fullname', 'table_user', array('user_id'=>$v->user_id));
       
       $count= $this->db->get_where('table_aprove', array('user_id'=>$this->session->userdata('user_id'), 'ie_id'=>$v->ie_id))->num_rows();
                 	     if($count>0){
                 	     }else{
?>
<script>
    $.gritter.add({
  // heading of the notification
  title: 'New Expense Notification! <?php echo number_format($v->total_price, 2); ?>',
  // the text inside the notification
  text: '<a href="<?php echo base_url(); ?>show-Details.txt/<?php echo $this->MdFive->md5($v->ie_id); ?>">From <?php echo $userdata->fullname; ?> View Details</a>'
});
</script>
<?php } } ?>

</body>
</html>