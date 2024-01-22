<div class="row">
    <div class="col-md-12">
    
        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
                    <?php echo ('Not Listesi');?>
                </a>
            </li>
            <li>
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo ('Not Ekle');?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>
        <div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">
                
                <table class="table table-bordered table-hover table-striped datatable" id="table_export">
                    <thead>
                        <tr>
                            <th><div>#</div></th>
                            <th><div><?php echo ('Not Adı');?></div></th>
                            <th><div><?php echo ('Not Derecesi');?></div></th>
                            <th><div><?php echo ('İşareti');?></div></th>
                            <th><div><?php echo ('İşaret Bitiş');?></div></th>
                            <th><div><?php echo ('Yorum');?></div></th>
                            <th><div><?php echo ('Seçenekler');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;foreach($grades as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['grade_point'];?></td>
                            <td><?php echo $row['mark_from'];?></td>
                            <td><?php echo $row['mark_upto'];?></td>
                            <td><?php echo $row['comment'];?></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Değiştir <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                        
                                        <!-- EDITING LINK -->
                                        <li>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_grade/<?php echo $row['grade_id'];?>');">
                                                <i class="entypo-pencil"></i>
                                                <?php echo ('Düzenle');?>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        
                                        <!-- DELETION LINK -->
                                        <li>
                                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/grade/delete/<?php echo $row['grade_id'];?>');">
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
            <!----TABLE LISTING ENDS--->
            
            
            <!----CREATION FORM STARTS---->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(base_url() . 'index.php?admin/grade/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Ad');?></label>
                                <div class="col-sm-5 controls">
                                    <input type="text" class="form-control" name="name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Not Derecesi');?></label>
                                <div class="col-sm-5 controls">
                                    <input type="text" class="form-control" name="grade_point"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('İşareti');?></label>
                                <div class="col-sm-5 controls">
                                    <input type="text" class="form-control" name="mark_from"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('İşaret Bitiş');?></label>
                                <div class="col-sm-5 controls">
                                    <input type="text" class="form-control" name="mark_upto"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Yorum');?></label>
                                <div class="col-sm-5 controls">
                                    <input type="text" class="form-control" name="comment"/>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo ('Not Ekle');?></button>
                              </div>
                            </div>
                    </form>                
                </div>                
            </div>
            <!----CREATION FORM ENDS-->
            
        </div>
    </div>
</div>

<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->                      
<script type="text/javascript">

    jQuery(document).ready(function($)
    {
        var datatable = $("#table_export").dataTable();
        
        $(".dataTables_wrapper select").select2({
            minimumResultsForSearch: -1
        });
    });
</script>
