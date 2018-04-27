<div class="sidebar-background">
	<div class="primary-sidebar-background">
	</div>
</div>
<div class="primary-sidebar">
	<!-- Main nav -->
    <br />
    <div style="text-align:center;">
    	<a href="<?php echo base_url();?>">
        	<img src="<?php echo base_url();?>uploads/logo.png"  style="max-height:100px; max-width:100px;"/>
        </a>
    </div>
   	<br />
	<ul class="nav nav-collapse collapse nav-collapse-primary">
    
        
        <!------dashboard----->
		<li class="<?php if($page_name == 'dashboard')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?patient/dashboard" >
					<i class="icon-desktop icon-2x"></i>
					<span><?php echo get_phrase('Painel');?></span>
				</a>
		</li>
        
        <!------doctor----->
		<li class="<?php if($page_name == 'view_doctor')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?patient/view_doctor" >
					<i class="icon-user-md icon-2x"></i>
					<span><?php echo get_phrase('Ver_medicos');?></span>
				</a>
		</li>
        
        <!------blood bank----->
		<li class="<?php if($page_name == 'Vacinas')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?patient/view_blood_bank" >
					<i class="icon-tint icon-2x"></i>
					<span><?php echo get_phrase('Vacina');?></span>
				</a>
		</li>
		<li class="<?php if($page_name == 'manage_blood_donor')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?patient/manage_blood_donor" >
					<i class="icon-user icon-2x"></i>
					<span><?php echo get_phrase('Agendar_Vacina');?></span>
				</a>
		</li>
        

		
        <!------appointment----->
		<li class="<?php if($page_name == 'view_prescription')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?patient/view_prescription" >
					<i class="icon-edit icon-2x"></i>
					<span><?php echo get_phrase('Carteira de Vacina');?></span>
				</a>
		</li>

		

		<!------manage own profile--->
		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?patient/manage_profile" >
					<i class="icon-lock icon-2x"></i>
					<span><?php echo get_phrase('profile');?></span>
				</a>
		</li>
		
	</ul>
	
</div>