<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
			<li class="active">
            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>
					<?php echo get_phrase('Agendar_Vacina');?>
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
                    <?php echo form_open('patient/manage_blood_donor/edit/do_update/'.$row['blood_donor_id'] , array('class' => 'form-horizontal validatable'));?>
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name');?></label>
                                <div class="controls" style="padding-top:6px;">
                                	<?php echo $this->crud_model->get_type_name_by_id('patient' ,$this->session->userdata('patient_id') , 'name');?>
                                    <input type="hidden" name="patient_id" value="<?php echo $this->session->userdata('patient_id');?>"  />
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
            
				
			<!----CREATION FORM STARTS---->
			<div class="active" id="add">
                <div class="box-content">
                    <?php echo form_open('patient/manage_blood_donor/create/' , array('class' => 'form-horizontal validatable'));?>
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name');?></label>
                                <div class="controls" style="padding-top:6px;">
                                	<?php echo $this->crud_model->get_type_name_by_id('patient' ,$this->session->userdata('patient_id') , 'name');?>
                                    <input type="hidden" name="patient_id" value="<?php echo $this->session->userdata('patient_id');?>"  />
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
                            <button type="submit" class="btn btn-blue"><?php echo get_phrase('Agendar');?></button>
                        </div>
                    <?php echo form_close();?>                
                </div>                
			</div>
			<!----CREATION FORM ENDS--->
            
		</div>
	</div>
</div>