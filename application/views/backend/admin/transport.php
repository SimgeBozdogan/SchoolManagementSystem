<div class="row">
    <div class="col-md-12">
    
        <!------KONTROL SEKMELERİ BAŞLANGIÇ------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
                    <?php echo ('Taşıma Listesi');?>
                </a>
            </li>
            <li>
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo ('Taşıma Ekle');?>
                </a>
            </li>
        </ul>
        <!------KONTROL SEKMELERİ SON------>
        
        <div class="tab-content">
            <!----TABLO LİSTESİ BAŞLANGIÇ-->
            <div class="tab-pane box active" id="list">
                <table class="table table-bordered table-hover table-striped datatable" id="table_export">
                    <thead>
                        <tr>
                            <th><div><?php echo ('Rota Adı');?></div></th>
                            <th><div><?php echo ('Araç Sayısı');?></div></th>
                            <th><div><?php echo ('Açıklama');?></div></th>
                            <th><div><?php echo ('Rota Ücreti');?></div></th>
                            <th><div><?php echo ('Seçenekler');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;foreach($transports as $row):?>
                            <tr>
                                <td><?php echo $row['route_name'];?></td>
                                <td><?php echo $row['number_of_vehicle'];?></td>
                                <td><?php echo $row['description'];?></td>
                                <td><?php echo $row['route_fare'];?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                            Değiştir <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                            
                                            <!-- DÜZENLEME BAĞLANTISI -->
                                            <li>
                                                <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_transport/<?php echo $row['transport_id'];?>');">
                                                    <i class="entypo-pencil"></i>
                                                    <?php echo ('Düzenle');?>
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            
                                            <!-- SİLME BAĞLANTISI -->
                                            <li>
                                                <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/transport/delete/<?php echo $row['transport_id'];?>');">
                                                    <i class="entypo-trash"></i>
                                                    <?php echo ('Sil');?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!----TABLO LİSTESİ SON--->
            
            
            <!----OLUŞTURMA FORMU BAŞLANGIÇ--->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(base_url() . 'index.php?admin/transport/create', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top')); ?>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Rota Adı');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="route_name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Araç Sayısı');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="number_of_vehicle"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Açıklama');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="description"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Rota Ücreti');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="route_fare"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo ('Taşıma Ekle');?></button>
                            </div>
                        </div>
                    </form>                
                </div>                
            </div>
            <!----OLUŞTURMA FORMU SON--->
            
        </div>
    </div>
</div>
