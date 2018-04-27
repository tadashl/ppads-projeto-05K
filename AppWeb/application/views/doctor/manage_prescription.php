<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
        	<?php if(isset($edit_profile)):?>
			<li class="active">
            	<a href="#edit" data-toggle="tab"><i class="icon-wrench"></i> 
					<?php echo get_phrase('Editar_Carteira');?>
                    	</a></li>
            <?php endif;?>
			<li class="<?php if(!isset($edit_profile))echo 'active';?>">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('Carteira_de_Vacina');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>
					<?php echo get_phrase('Adicionar');?>
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
                    <?php echo form_open('doctor/manage_prescription/edit/do_update/'.$row['prescription_id'] , array('class' => 'form-horizontal validatable'));?>
                        <div class="padded">
                           <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('doctor');?></label>
                                <div class="controls" style="padding-top:6px;">
                                	<?php echo $this->crud_model->get_type_name_by_id('doctor' ,$this->session->userdata('doctor_id') , 'name');?>
                                    <input type="hidden" name="doctor_id" value="<?php echo $this->session->userdata('doctor_id');?>"  />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('patient');?></label>
                                <div class="controls">
                                    <select class="chzn-select" name="patient_id">
										<?php 
										$this->db->order_by('account_opening_timestamp' , 'asc');
										$patients	=	$this->db->get('patient')->result_array();
										foreach($patients as $row2):
										?>
                                        	<option value="<?php echo $row2['patient_id'];?>" <?php if($row2['patient_id'] == $row['patient_id'])echo 'selected';?>>
												<?php echo $row2['name'];?>
                                            </option>
                                        <?php
										endforeach;
										?>
									</select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Clinica');?></label>
                                <div class="controls">
                                    <div class="">
                                        <div class="">
                                                <div class="">
                                                <textarea name="case_history" id="ttt" rows="1" 
                                                	placeholder="<?php echo get_phrase('add_description');?>"><?php echo $row['case_history'];?></textarea>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Vacina');?></label>
                                <div class="controls">
                                    <div class="">
                                        <div class="">
                                                <div class="">
                                                <textarea name="description" id="ttt" rows="1" 
                                                	placeholder="<?php echo get_phrase('add_description');?>"><?php echo $row['description'];?></textarea>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('date');?></label>
                                <div class="controls">
                                    <input type="text" class="datepicker fill-up" name="creation_timestamp" value="<?php echo date('m/d/Y', $row['creation_timestamp']);?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue"><?php echo get_phrase('Editar');?></button>
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
                    		<th><div><?php echo get_phrase('doctor');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($prescriptions as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo date('d M,Y', $row['creation_timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?doctor/manage_prescription/edit/<?php echo $row['prescription_id'];?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('edit');?>" class="btn btn-blue">
                                		<i class="icon-wrench"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php?doctor/manage_prescription/delete/<?php echo $row['prescription_id'];?>" onclick="return confirm('delete?')"
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
                    <?php echo form_open('doctor/manage_prescription/create/' , array('class' => 'form-horizontal validatable'));?>
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('doctor');?></label>
                                <div class="controls" style="padding-top:6px;">
                                	<?php echo $this->crud_model->get_type_name_by_id('doctor' ,$this->session->userdata('doctor_id') , 'name');?>
                                    <input type="hidden" name="doctor_id" value="<?php echo $this->session->userdata('doctor_id');?>"  />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('patient');?></label>
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
                              <label class="control-label"><?php echo get_phrase('Clinica');?></label>
                                <div class="controls">
                                    <select name="case_history" class="uniform" style="width:100%;">
                                    	<option value="Tatuapé">Tatuapé</option>
                                        <option value="Sé Praça 2">Sé Praça 2</option>
                                        <option value="C Vila Prudente">C Vila Prudente</option>
                                        <option value="Santos Imigrantes">Santos Imigrantes</option>
                                        <option value="Vila Matilde">Vila Matilde</option>
                                        <option value="Sao Judas">Sao Judas</option>
                                        <option value="Taubaté">Taubaté</option>
                                        <option value="Ana Rosa">Ana Rosa</option>  
                                        <option value="Guarulhos">Guarulhos</option>
                                    </select>
                                </div>
                             </div>
                            <div class="control-group">
                              <label class="control-label"><?php echo get_phrase('Vacina');?></label>
                                <div class="controls">
                                    <select name="description" class="uniform" style="width:100%;">
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
                                <label class="control-label"><?php echo get_phrase('date');?></label>
                                <div class="controls">
                                    <input type="text" class="datepicker fill-up" name="creation_timestamp" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue"><?php echo get_phrase('Adicionar');?></button>
                        </div>
                    <?php echo form_close();?>                
                </div>                
			</div>
			<!----CREATION FORM ENDS--->
            
		</div>
	</div>
</div>

