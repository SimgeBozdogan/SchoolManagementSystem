<div class="row">
    <div class="col-md-12">
    
        <!-- KONTROL SEKMELEME BAŞLANGICI -->
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
                    <?php echo ('Dönem Listesi');?>
                </a>
            </li>
            <li>
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo ('Dönem Ekle');?>
                </a>
            </li>
        </ul>
        <!-- KONTROL SEKMELEME SONU -->
        
        <div class="tab-content">
            <!-- TABLO LİSTESİ BAŞLANGICI -->
            <div class="tab-pane box active" id="list">
                
                <table class="table table-bordered datatable table-hover table-striped" id="table_export">
                    <thead>
                        <tr>
                            <th><div>#</div></th>
                            <th><div><?php echo ('Ad');?></div></th>
                            <th><div><?php echo ('Açık mı');?></div></th>
                            <th><div><?php echo ('Başlangıç Tarihi');?></div></th>
                            <th><div><?php echo ('Bitiş Tarihi');?></div></th>
                            <th><div><?php echo ('Seçenekler');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;foreach($acdSession as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo ($row['is_open'] == '1' ? "Evet" : "Hayır");?></td>
                            <td><?php echo date('d/m/Y',strtotime($row['strt_dt']));?></td>
                            <td><?php echo date('d/m/Y',strtotime($row['end_dt']));?></td>
                            <td>
                                <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_acd_session/<?php echo $row['id'];?>');">
                                    <i class="entypo-pencil"></i>
                                    <?php echo ('Düzenle');?>
                                </a>
                                &nbsp; &nbsp; &nbsp;
                                <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/acd_session/delete/<?php echo $row['id'];?>');">
                                    <i class="entypo-trash"></i>
                                    <?php echo ('Sil');?>
                                </a>
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
                    <?php echo form_open(base_url() . 'index.php?admin/acd_session/create', array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="padded">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Ad');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Başlangıç Tarihi');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker form-control" name="strt_dt">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Bitiş Tarihi');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker form-control" name="end_dt">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Açık mı');?></label>
                                <div class="col-sm-5">
                                    <select name="is_open" class="form-control selectboxit visible" style="width:100%;">
                                        <option value="0">Hayır</option>
                                        <option value="1">Evet</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo ('Dönem Ekle');?></button>
                            </div>
                        </div>
                    </form>                
                </div>                
            </div>
            <!-- OLUŞTURMA FORMU SONU -->
        </div>
    </div>
</div>

<!-- DATA TABLE EXPORT KONFIGÜRASYONLARI -->
<script type="text/javascript">
    jQuery(document).ready(function($)
    {
        var datatable = $("#table_export").dataTable();
        
        $(".dataTables_wrapper select").select2({
            minimumResultsForSearch: -1
        });
    });
</script>
