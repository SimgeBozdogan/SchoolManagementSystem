<div class="row">
    <div class="col-md-12">
    
        <!-- CONTROL TABS START -->
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
                    <?php echo ('Fatura/Ödeme Listesi');?>
                </a>
            </li>
            <li>
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo ('Fatura/Ödeme Ekle');?>
                </a>
            </li>
        </ul>
        <!-- CONTROL TABS END -->

        <div class="tab-content">
            <!-- TABLE LISTING STARTS -->
            <div class="tab-pane box active" id="list">
                
                <table class="table table-bordered table-hover table-striped datatable" id="table_export">
                    <thead>
                        <tr>
                            <th><div><?php echo ('Öğrenci');?></div></th>
                            <th><div><?php echo ('Başlık');?></div></th>
                            <th><div><?php echo ('Toplam');?></div></th>
                            <th><div><?php echo ('Ödenen');?></div></th>
                            <th><div><?php echo ('Durum');?></div></th>
                            <th><div><?php echo ('Tarih');?></div></th>
                            <th><div><?php echo ('Seçenekler');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($invoices as $row):?>
                            <tr>
                                <td><?php echo $this->crud_model->get_type_name_by_id('student', $row['student_id']);?></td>
                                <td><?php echo $row['title'];?></td>
                                <td><?php echo $row['amount'];?></td>
                                <td><?php echo $row['amount_paid'];?></td>
                                <td>
                                    <span class="label label-<?php if($row['status']=='paid') echo 'success'; else echo 'secondary';?>">
                                        <?php echo $row['status'];?>
                                    </span>
                                </td>
                                <td><?php echo date('d M,Y', $row['creation_timestamp']);?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                            Değiştir <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                            <?php if ($row['due'] != 0):?>
                                                <li>
                                                    <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_take_payment/<?php echo $row['invoice_id'];?>');">
                                                        <i class="entypo-bookmarks"></i>
                                                        <?php echo ('Ödeme Al');?>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                            <?php endif;?>
                                            
                                            <!-- VIEWING LINK -->
                                            <li>
                                                <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_view_invoice/<?php echo $row['invoice_id'];?>');">
                                                    <i class="entypo-credit-card"></i>
                                                    <?php echo ('Faturayı Görüntüle');?>
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            
                                            <!-- EDITING LINK -->
                                            <li>
                                                <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_invoice/<?php echo $row['invoice_id'];?>');">
                                                    <i class="entypo-pencil"></i>
                                                    <?php echo ('Düzenle');?>
                                                </a>
                                            </li>
                                            <li class="divider"></li>

                                            <!-- DELETION LINK -->
                                            <li>
                                                <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/invoice/delete/<?php echo $row['invoice_id'];?>');">
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
            <!-- TABLE LISTING ENDS -->

            <!-- CREATION FORM STARTS -->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <?php echo form_open(base_url() . 'index.php?admin/invoice/create', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top'));?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default panel-shadow" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title"><?php echo ('Fatura Bilgileri');?></div>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><?php echo ('Öğrenci');?></label>
                                        <div class="col-sm-9">
                                            <select name="student_id" class="form-control" style="">
                                                <?php 
                                                $this->db->order_by('class_id', 'asc');
                                                $students = $this->db->get('student')->result_array();
                                                foreach ($students as $row):
                                                ?>
                                                    <option value="<?php echo $row['student_id'];?>">
                                                        sınıf <?php echo $this->crud_model->get_class_name($row['class_id']);?> -
                                                        numara <?php echo $row['roll'];?> -
                                                        <?php echo $row['name'];?>
                                                    </option>
                                                <?php
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><?php echo ('Başlık');?></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="title"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><?php echo ('Açıklama');?></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="description"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><?php echo ('Tarih');?></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="datepicker form-control" name="date"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default panel-shadow" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title"><?php echo ('Ödeme Bilgisi');?></div>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><?php echo ('Toplam');?></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="amount" placeholder="<?php echo ('Toplam Tutarı Girin');?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><?php echo ('Ödeme');?></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="amount_paid" placeholder="<?php echo ('Ödeme Tutarını Girin');?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><?php echo ('Durum');?></label>
                                        <div class="col-sm-9">
                                            <select name="status" class="form-control">
                                                <option value="paid"><?php echo ('Ödenmiş');?></option>
                                                <option value="unpaid"><?php echo ('Ödenmemiş');?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"><?php echo ('Yöntem');?></label>
                                        <div class="col-sm-9">
                                            <select name="method" class="form-control">
                                                <option value="1"><?php echo ('Nakit');?></option>
                                                <option value="2"><?php echo ('Çek');?></option>
                                                <option value="3"><?php echo ('Kart');?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-5">
                                    <button type="submit" class="btn btn-info"><?php echo ('Fatura Ekle');?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo form_close();?>
            </div>
            <!-- CREATION FORM ENDS -->
        </div>
    </div>
</div>
