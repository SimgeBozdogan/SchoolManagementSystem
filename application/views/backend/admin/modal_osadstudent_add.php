<div class="panel panel-primary" data-collapsed="0">
    <div class="panel-heading">
        <div class="panel-title" >
            <i class="entypo-plus-circled"></i>
            <?php echo ('Öğrenci Ekle');?>
        </div>
    </div>
    <div class="panel-body">
        
                <?php echo form_open(base_url() . 'index.php?admin/online_admission/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo ('Ad');?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo ('Değer Gerekli');?>" value="" autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo ('Doğum Tarihi');?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label"><?php echo ('Cinsiyet');?></label>
                    <div class="col-sm-5">
                        <select name="sex" class="form-control">
                            <option value=""><?php echo ('Seçiniz');?></option>
                            <option value="Male"><?php echo ('Erkek');?></option>
                            <option value="Female"><?php echo ('Kadın');?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label"><?php echo ('Adres');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="address" value="" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label"><?php echo ('Telefon');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="phone" value="" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label"><?php echo ('E-posta');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label"><?php echo ('Şifre');?></label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" value="" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label"><?php echo ('Fotoğraf');?></label>
                    <div class="col-sm-5">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                <img src="http://placehold.it/200x200" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                            <div>
                                <span class="btn btn-white btn-file">
                                    <span class="fileinput-new">Resim Seç</span>
                                    <span class="fileinput-exists">Değiştir</span>
                                    <input type="file" name="userfile" accept="image/*">
                                </span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Kaldır</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-info"><?php echo ('Öğrenci Ekle');?></button>
                    </div>
                </div>
            </div>
        <?php echo form_close();?>
    </div>
</div>
