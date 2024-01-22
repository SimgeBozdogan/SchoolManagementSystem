<div class="row">
    <div class="col-md-12">
        
        <!------KONTROL SEKMELEME BAŞLANGICI------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
                    <?php echo ('Taşıma Listesi');?>
                </a>
            </li>
        </ul>
        <!------KONTROL SEKMELEME SONU------>
        
        <div class="tab-content">
            <!----TABLO LİSTESİ BAŞLANGICI-->
            <div class="tab-pane box active" id="list">
                <table class="table table-bordered table-hover table-striped datatable" id="table_export">
                    <thead>
                        <tr>
                            <th><div><?php echo ('Rota Adı');?></div></th>
                            <th><div><?php echo ('Araç Sayısı');?></div></th>
                            <th><div><?php echo ('Açıklama');?></div></th>
                            <th><div><?php echo ('Rota Ücreti');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;foreach($transports as $row):?>
                        <tr>
                            <td><?php echo $row['route_name'];?></td>
                            <td><?php echo $row['number_of_vehicle'];?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo $row['route_fare'];?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <!----TABLO LİSTESİ SONU-->
        </div>
    </div>
</div>
