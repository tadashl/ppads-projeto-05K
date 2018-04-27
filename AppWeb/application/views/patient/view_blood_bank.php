<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">

			<li class="active">
            	<a href="#list_blood_bank" data-toggle="tab"><i class="icon-align-justify"></i>
					<?php echo get_phrase('Vacinas');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------->
        
	</div>

            <!----TABLE LISTING ENDS--->
            
            
			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="list_blood_bank" >
                <div class="box-content">
                    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                        <thead>
                            <tr>
                                <th><div>#</div></th>
                                <th><div><?php echo get_phrase('grupo_vacina');?></div></th>
                                <th><div><?php echo get_phrase('Clinica');?></div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1;foreach($blood_bank as $row):?>
                            <tr>
                                <td><?php echo $count++;?></td>
                                <td><?php echo $row['blood_group'];?></td>
                                <td><?php echo $row['status'];?></td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>  
                </div>                
			</div>
			<!----CREATION FORM ENDS--->
            
		</div>
	</div>
</div>