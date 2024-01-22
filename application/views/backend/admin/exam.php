<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					<?php echo ('Sınav Listesi');?>
                </a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					<?php echo ('Sınav Ekle');?>
                </a></li>
		</ul>
    	<!------CONTROL TABS END------>
        
		<div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">
                <table class="table table-bordered table-hover table-striped datatable" id="table_export">
                	<thead>
                		<tr>
                    		<th><div><?php echo ('Sınav İsmi');?></div></th>
                    		<th><div><?php echo ('Tarih');?></div></th>
                    		<th><div><?php echo ('Açıklama');?></div></th>
                    		<th><div><?php echo ('Seçenekler');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php foreach($exams as $row):?>
                        <tr>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['date'];?></td>
							<td><?php echo $row['comment'];?></td>
							<td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Değiştir <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    <!-- DÜZENLEME BAĞLANTISI -->
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_exam/<?php echo $row['exam_id'];?>');">
                                            <i class="entypo-pencil"></i>
                                            <?php echo ('Düzenle');?>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    
                                    <!-- SİLME BAĞLANTISI -->
                                    <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/exam/delete/<?php echo $row['exam_id'];?>');">
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
            <!----TABLO LİSTESİ BİTİŞ--->
            
            
			<!----OLUŞTURMA FORMU BAŞLANGICI---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open(base_url() . 'index.php?admin/exam/create', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top'));?>
                        
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('İsim');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo ('Değer Gerekli');?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Tarih');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker form-control" name="date"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Açıklama');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="comment"/>
                                </div>
                            </div>
                            <div class="form-group">
                              	<div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo ('Sınav Ekle');?></button>
                              	</div>
							</div>
                    </form>                
                </div>                
			</div>
			<!----OLUŞTURMA FORMU BİTİŞ-->
            
		</div>
	</div>
</div>

<!-----  TABLO VERİLERİNİ DIŞA AKTARMA YAPILANDIRMALARI ---->                      
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		var datatable = $("#table_export").dataTable();
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
</script>
