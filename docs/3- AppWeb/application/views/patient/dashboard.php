<div class="container-fluid padded">
	<div class="row-fluid">
        <div class="span30">
            <!-- find me in partials/action_nav_normal -->
            <!--big normal buttons-->
            <div class="action-nav-normal">
                <div class="row-fluid">
                    <div class="span2 action-nav-button">
                        <a href="<?php echo base_url();?>index.php?patient/view_doctor">
                        <i class="icon-stethoscope"></i>
                        <span><?php echo get_phrase('doctor');?></span>
                        </a>
                    </div>
                    <div class="span2 action-nav-button">
                        <a href="<?php echo base_url();?>index.php?patient/view_blood_bank">
                        <i class="icon-tint"></i>
                        <span><?php echo get_phrase('Vacina');?></span>
                        </a>
                    </div>
                    <div class="span2 action-nav-button">
                        <a href="<?php echo base_url();?>index.php?patient/manage_blood_donor">
                        <i class="icon-user"></i>
                        <span><?php echo get_phrase('Agendar Vacina');?></span>
                        </a>
                    </div>
                    <div class="span2 action-nav-button">
                        <a href="<?php echo base_url();?>index.php?patient/view_prescription">
                        <i class="icon-credit-card"></i>
                        <span><?php echo get_phrase('Carteira de Vacina');?></span>
                        </a>
                    </div>
                  
                </div>
            </div>
        </div>
        <!---DASHBOARD MENU BAR ENDS HERE-->
    </div>
    <hr />
    <div class="row-fluid">
    

        
    	<!-----NOTICEBOARD LIST STARTS-->
        <div class="span6">
            <div class="box">
                <div class="box-header">
                    <span class="title">
                        <i class="icon-reorder"></i> <?php echo get_phrase('noticeboard');?>
                    </span>
                </div>
                <div class="box-content scrollable" style="max-height: 500px; overflow-y: auto">
                
                    <?php 
                    $notices	=	$this->db->get('noticeboard')->result_array();
                    foreach($notices as $row):
                    ?>
                    <div class="box-section news with-icons">
                        <div class="avatar blue">
                            <i class="icon-tag icon-2x"></i>
                        </div>
                        <div class="news-time">
                            <span><?php echo date('d',$row['create_timestamp']);?></span> <?php echo date('M',$row['create_timestamp']);?>
                        </div>
                        <div class="news-content">
                            <div class="news-title">
                                <?php echo $row['notice_title'];?>
                            </div>
                            <div class="news-text">
                                 <?php echo $row['notice'];?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    	<!-----NOTICEBOARD LIST ENDS-->
    </div>
</div>
