<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
        	<?php if(isset($edit_profile)):?>
			<li class="active">
            	<a href="#edit" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('Visualizar');?>
                    	</a></li>
            <?php endif;?>
			<li class="<?php if(!isset($edit_profile))echo 'active';?>">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('Carteira_de_vacinas');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------->
        
	</div>
	<div class="box-content padded">
		<div class="tab-content">
        	<!----EDITING FORM STARTS---->
        	<?php if(isset($edit_profile)):?>
			<div class="tab-pane box active" id="edit" style="padding: 5px">
                <div class="box-content">
                	<?php foreach($edit_profile as $row):?>
                    <form method="post" action="<?php echo base_url();?>index.php?doctor/manage_prescription/edit/do_update/<?php echo $row['prescription_id'];?>" class="form-horizontal validatable">
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('doctor');?></label>
                                <div class="controls" style="padding-top:5px;">
                                    <?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('patient');?></label>
                                <div class="controls" style="padding-top:5px;">
                                    <?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Clinica');?></label>
                                <div class="controls" style="padding-top:5px;">
                                    <?php echo $row['case_history'];?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Vacina');?></label>
                                <div class="controls" style="padding-top:5px;">
                                    <?php echo $row['description'];?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('date');?></label>
                                <div class="controls" style="padding-top:5px;">
                                    <?php echo date('m/d/Y', $row['creation_timestamp']);?>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close();?>
            
                    <?php endforeach;?>
                </div>
			</div>
            <?php endif;?>
            <!----EDITING FORM ENDS--->
            <!----TABLE LISTING STARTS--->
            <div class="tab-pane box <?php if(!isset($edit_profile))echo 'active';?>" id="list">
				
                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                	<thead>
                		<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($prescriptions as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo date('d M,Y', $row['creation_timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?patient/view_prescription/edit/<?php echo $row['prescription_id'];?>" class="btn btn-blue">
                                	<?php echo get_phrase('Visualizar');?>
                                </a>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
            
            
		</div>
	</div>
</div>

