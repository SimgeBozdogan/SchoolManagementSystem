<hr />
<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/section_add/');" 
    class="btn btn-primary pull-right">
        <i class="entypo-plus-circled"></i>
        <?php echo ('Yeni Bölüm Ekle');?>
</a> 
<br><br><br>

<div class="row">
    <div class="col-md-12">
    
        <div class="tabs-vertical-env">
        
            <ul class="nav tabs-vertical">
            <?php 
                $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row):
            ?>
                <li class="<?php if ($row['class_id'] == $class_id) echo 'active';?>">
                    <a href="<?php echo base_url();?>index.php?admin/section/<?php echo $row['class_id'];?>">
                        <i class="entypo-dot"></i>
                        <?php echo ('Sınıf');?> <?php echo $row['name'];?>
                    </a>
                </li>
            <?php endforeach;?>
            </ul>
            
            <div class="tab-content">

                <div class="tab-pane active">
                    <table class="table table-bordered table-hover table-striped responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo ('Bölüm Adı');?></th>
                                <th><?php echo ('Takma Ad');?></th>
                                <th><?php echo ('Öğretmen');?></th>
                                <th><?php echo ('Seçenekler');?></th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            $count    = 1;
                            $sections = $this->db->get_where('section' , array(
                                'class_id' => $class_id
                            ))->result_array();
                            foreach ($sections as $row):
                        ?>
                            <tr>
                                <td><?php echo $count++;?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['nick_name'];?></td>
                                <td>
                                    <?php if ($row['teacher_id'] != '')
                                            echo $this->db->get_where('teacher' , array('teacher_id' => $row['teacher_id']))->row()->name;
                                        ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                            Eylem <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                            
                                            <!-- DÜZENLEME LİNKİ -->
                                            <li>
                                                <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/section_edit/<?php echo $row['section_id'];?>');">
                                                    <i class="entypo-pencil"></i>
                                                        <?php echo ('Düzenle');?>
                                                    </a>
                                                </li>
                                            <li class="divider"></li>
                                            
                                            <!-- SİLME LİNKİ -->
                                            <li>
                                                <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/sections/delete/<?php echo $row['section_id'];?>');">
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

            </div>
            
        </div>    
    
    </div>
</div>
