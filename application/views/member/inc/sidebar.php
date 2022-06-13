<!--sidebar-menu-->
<div id="sidebar"><a href="<?php echo base_url(); ?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="<?php  if($menu == 'dashboard'){ ?> active <?php } ?>"><a href="<?php echo base_url(); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

    <li class="<?php  if($menu == 'addexpense'){ ?> active <?php } ?>"><a href="<?php echo base_url(); ?>Add-expense-bill.txt"><i class="icon-pencil"></i> <span>Add Expense</span></a> </li>

	<li class="<?php  if($menu == 'expenselist'){ ?> active <?php } ?>"><a href="<?php echo base_url(); ?>expense-bill.txt"><i class="icon-th"></i> <span>Expense List</span></a> </li>

    <li class=""><a href="<?php echo base_url(); ?>Logout.txt"><i class="icon-signout"></i> <span>Logout</span></a> </li>

    
   

 
  </ul>
</div>
<!--sidebar-menu-->