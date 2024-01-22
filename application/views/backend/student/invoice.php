<div class="row">
    <div class="col-md-12">
    
        <!------KONTROL SEKMELEME BAŞLANGIÇ------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
                    <?php echo ('Fatura/Ödeme Listesi');?>
                </a></li>
        </ul>
        <!------KONTROL SEKMELEME SON------>
        <div class="tab-content">
            <!----TABLO LİSTESİ BAŞLANGIÇ-->
            <div class="tab-pane box active" id="list">
                
                <table  class="table table-bordered table-hover table-striped datatable" id="table_export">
                    <thead>
                        <tr>
                            <th><div><?php echo ('Öğrenci');?></div></th>
                            <th><div><?php echo ('Başlık');?></div></th>
                            <th><div><?php echo ('Açıklama');?></div></th>
                            <th><div><?php echo ('Miktar');?></div></th>
                            <th><div><?php echo ('Durum');?></div></th>
                            <th><div><?php echo ('Tarih');?></div></th>
                            <th><div><?php echo ('Seçenekler');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($invoices as $row):?>
                        <tr>
                            <td><?php echo $this->crud_model->get_type_name_by_id('student',$row['student_id']);?></td>
                            <td><?php echo $row['title'];?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo $row['amount'];?></td>
                            <td>
                                <span class="label label-<?php if($row['status']=='paid')echo 'success';else echo 'secondary';?>"><?php echo $row['status'];?></span>
                            </td>
                            <td><?php echo date('d M,Y', $row['creation_timestamp']);?></td>
                            <td>
                                <?php echo form_open('student/invoice/make_payment');?>
                                    <input type="hidden" name="invoice_id" value="<?php echo $row['invoice_id'];?>" />
                                    <button type="submit" class="btn btn-info"><i class="entypo-paypal"></i> PayPal ile Öde</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <!----TABLO LİSTESİ SON--->
        </div>
    </div>
</div>
