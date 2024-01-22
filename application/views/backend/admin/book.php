<div class="row">
	<div class="col-md-12">
    
    	<!-- KONTROL SEKMELEME BAŞLANGICI -->
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					<?php echo ('Kitap Listesi');?>
                </a>
            </li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					<?php echo ('Kitap Ekle');?>
                </a>
            </li>
		</ul>
    	<!-- KONTROL SEKMELEME SONU -->
        
	
		<div class="tab-content">
            <!-- TABLO LİSTESİ BAŞLANGICI -->
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
                    		<th><div><?php echo ('Seçenekler');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($books as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['author'];?></td>
							<td><?php echo $row['description'];?></td>
							<td><?php echo $row['price'];?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('class',$row['class_id']);?></td>
							<td><span class="label label-<?php echo ($row['status']=='available') ? 'success' : 'secondary';?>">
								<?php echo $row['status'];?>
								</span>
							</td>
							<td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Değiştir <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    
                                    <!-- DÜZENLEME BAĞLANTISI -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_book/<?php echo $row['book_id'];?>');">
                                            <i class="entypo-pencil"></i>
                                            <?php echo ('Düzenle');?>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    
                                    <!-- SİLME BAĞLANTISI -->
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/book/delete/<?php echo $row['book_id'];?>');">
                                            <i class="entypo-trash"></i>
                                            <?php echo ('Sil');?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!-- TABLO LİSTESİ SONU -->
            
            
			<!-- OLUŞTURMA FORMU BAŞLANGICI -->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open(base_url() . 'index.php?admin/book/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Ad');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Yazar');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="author"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Açıklama');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="description"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Fiyat');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="price"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Sınıf');?></label>
                                <div class="col-sm-5">
                                    <select name="class_id" class="form-control" style="width:100%;">
                                    	<?php 
										$classes = $this->db->get('class')->result_array();
										foreach($classes as $row):
										?>
                                    		<option value="<?php echo $row['class_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Durum');?></label>
                                <div class="col-sm-5">
                                    <select name="status" class="form-control" style="width:100%;">
                                    	<option value="available"><?php echo ('Mevcut');?></option>
                                    	<option value="unavailable"><?php echo ('Mevcut Değil');?></option>
                                    </select>
                                </div>
                            </div>
                        	<div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo ('Kitap Ekle');?></button>
                              </div>
							</div>
                    </form>                
                </div>                
			</div>
			<!-- OLUŞTURMA FORMU SONU -->
            
		</div>
	</div>
</div>
