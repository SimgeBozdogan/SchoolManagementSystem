<div class="row">
	<div class="col-md-12">
    
    	<!------KONTROL SEKMELEME BAŞLANGICI------>
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					<?php echo ('Ders Listesi');?>
                    	</a></li>
		</ul>
    	<!------KONTROL SEKMELEME SONU------>
		<div class="tab-content">            
            <!----TABLO LİSTESİ BAŞLANGICI-->
            <div class="tab-pane box active" id="list">
				
                <table class="table table-bordered table-hover table-striped datatable" id="table_export">
                	<thead>
                		<tr>
                    		<th><div><?php echo ('Sınıf');?></div></th>
                    		<th><div><?php echo ('Ders Adı');?></div></th>
                    		<th><div><?php echo ('Öğretmen');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($subjects as $row):?>
                        <tr>
							<td><?php echo $this->crud_model->get_type_name_by_id('class',$row['class_id']);?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('teacher',$row['teacher_id']);?></td>
							
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLO LİSTESİ SONU-->
		</div>
	</div>
</div>


<!-----  VERİ TABLOSU DIŞA AKTARMA YAPILANDIRMALARI ---->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		var datatable = $("#table_export").dataTable();
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>
