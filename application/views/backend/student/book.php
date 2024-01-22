<div class="row">
	<div class="col-md-12">
    
    	<!------KONTROL SEKMELERİ BAŞLANGIÇ------->
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					<?php echo ('Kitap Listesi');?>
                    	</a></li>
		</ul>
    	<!------KONTROL SEKMELERİ SON------->
        
	
		<div class="tab-content">
            <!----TABLO LİSTESİ BAŞLANGIÇ--->
            <div class="tab-pane box active" id="list">
					
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover table-striped datatable" id="table_export">
                	<thead>
                		<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo ('Kitap Adı');?></div></th>
                    		<th><div><?php echo ('Yazar');?></div></th>
                    		<th><div><?php echo ('Açıklama');?></div></th>
                    		<th><div><?php echo ('Fiyat');?></div></th>
                    		<th><div><?php echo ('Sınıf');?></div></th>
                    		<th><div><?php echo ('Durum');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1; foreach ($books as $row): ?>
                            <tr>
                                <td><?php echo $count++;?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['author'];?></td>
                                <td><?php echo $row['description'];?></td>
                                <td><?php echo $row['price'];?></td>
                                <td><?php echo $this->crud_model->get_type_name_by_id('class',$row['class_id']);?></td>
                                <td><span class="label label-<?php if($row['status']=='available')echo 'success';else echo 'secondary';?>"><?php echo $row['status'];?></span></td>

                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLO LİSTESİ SON--->
            
		</div>
	</div>
</div>
