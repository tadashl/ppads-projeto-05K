<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
        	<?php if(isset($edit_profile)):?>
			<li class="active">
            	<a href="#edit" data-toggle="tab"><i class="icon-wrench"></i> 
					<?php echo get_phrase('edit_vacina_paciente');?>
                    	</a></li>
            <?php endif;?>
			<li class="<?php if(!isset($edit_profile))echo 'active';?>">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('Lista_de_Pacientes');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>
					<?php echo get_phrase('add_vacina_paciente');?>
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
                    <?php echo form_open('laboratorist/manage_blood_donor/edit/do_update/'.$row['blood_donor_id'] , array('class' => 'form-horizontal validatable'));?>
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name');?></label>
                                <div class="controls">
                                    <select class="chzn-select" name="patient_id">
										<?php 
										$this->db->order_by('account_opening_timestamp' , 'asc');
										$patients	=	$this->db->get('patient')->result_array();
										foreach($patients as $row):
										?>
                                        	<option value="<?php echo $row['patient_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
									</select>
                                </div>
                                </div>
                        
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('phone');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="phone" value="<?php echo $row['phone'];?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('sex');?></label>
                                <div class="controls">
                                    <select name="sex" class="uniform" style="width:100%;">
                                    	<option value="male" <?php if($row['sex']=='male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                    	<option value="female" <?php if($row['sex']=='female')echo 'selected';?>><?php echo get_phrase('female');?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('age');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="age" value="<?php echo $row['age'];?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Vacina');?></label>
                                <div class="controls">
                                    <select name="blood_group" class="uniform" style="width:100%;">
                                    	<option value="Febre amarela" <?php if($row['blood_group']=='Febre amarela')echo 'selected';?>>Febre amarela</option>
                                        <option value="Tríplice viral" <?php if($row['blood_group']=='Tríplice viral')echo 'selected';?>>Tríplice viral</option>
                                        <option value="Tetraviral" <?php if($row['blood_group']=='Tetraviral')echo 'selected';?>>Tetraviral</option>
                                        <option value="BCG" <?php if($row['blood_group']=='BCG')echo 'selected';?>>BCG</option>
                                        <option value="Hepatite B" <?php if($row['blood_group']=='Hepatite B')echo 'selected';?>>Hepatite B</option>
                                        <option value="H1N1" <?php if($row['blood_group']=='H1N1')echo 'selected';?>>H1N1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Data');?></label>
                                <div class="controls">
                                    <input type="text" class="datepicker fill-up" name="last_donation_timestamp" value="<?php echo date('m/d/Y',$row['last_donation_timestamp']);?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue"><?php echo get_phrase('edit_vacina_paciente');?></button>
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
                    		<th><div><?php echo get_phrase('name');?></div></th>
                    		<th><div><?php echo get_phrase('age');?></div></th>
                    		<th><div><?php echo get_phrase('sex');?></div></th>
                    		<th><div><?php echo get_phrase('grupo_vacina');?></div></th>
                    		<th><div><?php echo get_phrase('Data');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($blood_donors as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $row['age'];?></td>
							<td><?php echo $row['sex'];?></td>
							<td><?php echo $row['blood_group'];?></td>
							<td><?php echo date('d M,Y',$row['last_donation_timestamp']);?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?laboratorist/manage_blood_donor/edit/<?php echo $row['blood_donor_id'];?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('edit');?>" class="btn btn-blue">
                                		<i class="icon-wrench"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php?laboratorist/manage_blood_donor/delete/<?php echo $row['blood_donor_id'];?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete');?>" class="btn btn-red">
                                		<i class="icon-trash"></i>
                                </a>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
            
            
			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open('laboratorist/manage_blood_donor/create/' , array('class' => 'form-horizontal validatable'));?>
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name');?></label>
                                <div class="controls">
                                    <select class="chzn-select" name="patient_id">
										<?php 
										$this->db->order_by('account_opening_timestamp' , 'asc');
										$patients	=	$this->db->get('patient')->result_array();
										foreach($patients as $row):
										?>
                                        	<option value="<?php echo $row['patient_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
									</select>
                                </div>
                                </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('phone');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="phone"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('sex');?></label>
                                <div class="controls">
                                    <select name="sex" class="uniform" style="width:100%;">
                                    	<option value="male"><?php echo get_phrase('male');?></option>
                                    	<option value="female"><?php echo get_phrase('female');?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('age');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="age"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Vacina');?></label>
                                <div class="controls">
                                    <select name="blood_group" class="uniform" style="width:100%;">
                                    	<option value="Febre amarela">Febre amarela</option>
                                        <option value="Tríplice viral">Tríplice viral</option>
                                        <option value="Tetraviral">Tetraviral</option>
                                        <option value="BCG">BCG</option>
                                        <option value="Hepatite B">Hepatite B</option>
                                        <option value="H1N1">H1N1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Data');?></label>
                                <div class="controls">
                                    <input type="text" class="datepicker fill-up" name="last_donation_timestamp"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue"><?php echo get_phrase('add_vacina_paciente');?></button>
                        </div>
                    <?php echo form_close();?>                
                </div>                
			</div>
			<!----CREATION FORM ENDS--->
            
		</div>
	</div>
</div>