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
				<a href="<?php echo base_url();?>index.php?laboratorist/dashboard" >
					<i class="icon-desktop icon-2x"></i>
					<span><?php echo get_phrase('dashboard');?></span>
				</a>
		</li>
    
        
        <!------manage blood bank----->
		<li class="<?php if($page_name == 'manage_blood_bank')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?laboratorist/manage_blood_bank" >
					<i class="icon-tint icon-2x"></i>
					<span><?php echo get_phrase('vacinas');?></span>
				</a>
		</li>
        
        <!------medicine blood donor----->
		<li class="<?php if($page_name == 'manage_blood_donor')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?laboratorist/manage_blood_donor" >
					<i class="icon-columns icon-2x"></i>
					<span><?php echo get_phrase('pacientes / Vacinas');?></span>
				</a>
		</li>
        <!------patient----->
		<li class="<?php if($page_name == 'manage_patient')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?laboratorist/manage_patient" >
					<i class="icon-user icon-2x"></i>
					<span><?php echo get_phrase('Add_Paciente');?></span>
				</a>
		</li>
        
		<!------manage own profile--->
		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?laboratorist/manage_profile" >
					<i class="icon-lock icon-2x"></i>
					<span><?php echo get_phrase('profile');?></span>
				</a>
		</li>
		
	</ul>
	
</div>