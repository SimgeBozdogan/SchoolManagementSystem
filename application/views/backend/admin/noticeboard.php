<div class="row">
    <div class="col-md-12">

        <!------KONTROL SEKMELEME BAŞLANGICI------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
                    <?php echo ('Duyuru Panosu Listesi');?>
                </a>
            </li>
            <li>
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo ('Duyuru Ekle');?>
                </a>
            </li>
        </ul>
        <!------KONTROL SEKMELEME SONU------>
        

        <div class="tab-content">
            <!----TABLO LİSTESİ BAŞLANGICI-->
            <div class="tab-pane box active" id="list">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover table-striped datatable" id="table_export">
                    <thead>
                        <tr>
                            <th><div>#</div></th>
                            <th><div><?php echo ('Başlık');?></div></th>
                            <th><div><?php echo ('Duyuru');?></div></th>
                            <th><div><?php echo ('Tarih');?></div></th>
                            <th><div><?php echo ('Seçenekler');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;foreach($notices as $row):?>
                            <tr>
                                <td><?php echo $count++;?></td>
                                <td><?php echo $row['notice_title'];?></td>
                                <td class="span5"><?php echo $row['notice'];?></td>
                                <td><?php echo date('d M,Y', $row['create_timestamp']);?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                            Değiştir <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                            
                                            <!-- DÜZENLEME BAĞLANTISI -->
                                            <li>
                                                <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_notice/<?php echo $row['notice_id'];?>');">
                                                    <i class="entypo-pencil"></i>
                                                    <?php echo ('Düzenle');?>
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            
                                            <!-- SİLME BAĞLANTISI -->
                                            <li>
                                                <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/noticeboard/delete/<?php echo $row['notice_id'];?>');">
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
            <!----TABLO LİSTESİ SONU--->
            
            
            <!----OLUŞTURMA FORMU BAŞLANGICI--->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(base_url() . 'index.php?admin/noticeboard/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Başlık');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="notice_title"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Duyuru');?></label>
                            <div class="col-sm-5">
                                <div class="box closable-chat-box">
                                    <div class="box-content padded">
                                        <div class="chat-message-box">
                                            <textarea name="notice" id="ttt" rows="5" placeholder="<?php echo ('Duyuru Ekle');?>" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Tarih');?></label>
                            <div class="col-sm-5">
                                <input type="text" class="datepicker form-control" name="create_timestamp"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Tümüne SMS Gönder');?></label>
                            <div class="col-sm-5">
                                <select class="form-control" name="check_sms">
                                    <option value="1"><?php echo ('Evet');?></option>
                                    <option value="2"><?php echo ('Hayır');?></option>
                                </select>
                                <br>
                                <span class="badge badge-primary">
                                    <?php 
                                        if ($active_sms_service == 'clickatell')
                                            echo 'Clickatell ' . ('Aktif');
                                        if ($active_sms_service == 'twilio')
                                            echo 'Twilio ' . ('Aktif');
                                        if ($active_sms_service == '' || $active_sms_service == 'disabled')
                                            echo ('SMS servisi aktif değil');
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-info"><?php echo ('Duyuru Ekle');?></button>
                            </div>
                        </div>
                    </form>                
                </div>                
            </div>
            <!----OLUŞTURMA FORMU SONU--->
            
        </div>
    </div>
</div>
