<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="uploads/logo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>	
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- GÖSTERGE PANELİ -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo ('Gösterge Paneli'); ?></span>
            </a>
        </li>

        <!-- SINIF -->
        <li class="<?php
        if ($page_name == 'class' ||
                $page_name == 'section')
            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-flow-tree"></i>
                <span><?php echo ('Sınıf'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'class') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/classes">
                        <span><i class="entypo-dot"></i> <?php echo ('Sınıfları Yönet'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/section">
                        <span><i class="entypo-dot"></i> <?php echo ('Bölümleri Yönet'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- KONU -->
        <li class="<?php if ($page_name == 'subject') echo 'opened active'; ?> ">
            <a href="#">
                <i class="entypo-docs"></i>
                <span><?php echo ('Konu'); ?></span>
            </a>
            <ul>
                <?php
                $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row):
                    ?>
                    <li class="<?php if ($page_name == 'subject' && $class_id == $row['class_id']) echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>index.php?admin/subject/<?php echo $row['class_id']; ?>">
                            <span><?php echo ('Sınıf'); ?> <?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>

        <!-- SINIF PROGRAMI -->
        <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/class_routine">
                <i class="entypo-calendar"></i>
                <span><?php echo ('Sınıf Programı'); ?></span>
            </a>
        </li>

         <!-- EBEVEYNLER -->
         <li class="<?php if ($page_name == 'parent') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/parent">
                <i class="entypo-user"></i>
                <span><?php echo ('Ebeveynler'); ?></span>
            </a>
        </li>

        <!-- ÖĞRENCİ -->
        <li class="<?php
        if ($page_name == 'student_add' ||
		        $page_name == 'acd_session' ||
		        $page_name == 'online_admission' ||
                $page_name == 'student_bulk_add' ||
                $page_name == 'student_information' ||
                $page_name == 'student_marksheet')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo ('Öğrenci Bölümü'); ?></span>
            </a>
            <ul>
                <!-- ÖĞRENCİ KABULÜ -->
                
                 <li class="<?php if ($page_name == 'acd_session') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/acd_session">
                        <span><i class="entypo-dot"></i> <?php echo ('Akademik Dönem'); ?></span>
                    </a>
                </li>
                
                   
                 
                <li class="<?php if ($page_name == 'student_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/student_add">
                        <span><i class="entypo-dot"></i> <?php echo ('Öğrenci Kabul Et'); ?></span>
                    </a>
                </li>

                <!-- TOPLU ÖĞRENCİ KABULÜ -->
                <li class="<?php if ($page_name == 'student_bulk_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/student_bulk_add">
                        <span><i class="entypo-dot"></i> <?php echo ('Toplu Öğrenci Kabul Et'); ?></span>
                    </a>
                </li>

                <!-- ÖĞRENCİ BİLGİLERİ -->
                <li class="<?php if ($page_name == 'student_information') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo ('Öğrenci Bilgileri'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/student_information/<?php echo $row['class_id']; ?>">
                                    <span><?php echo ('Sınıf'); ?> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <!-- ÖĞRENCİ NOT BELGESİ -->
                <li class="<?php if ($page_name == 'student_marksheet') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo ('Öğrenci Not Belgesi'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/student_marksheet/<?php echo $row['class_id']; ?>">
                                    <span><?php echo ('Sınıf'); ?> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- ÖĞRETMEN -->
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/teacher">
                <i class="entypo-users"></i>
                <span><?php echo ('Öğretmen Bölümü'); ?></span>
            </a>
        </li>


        <!-- GÜNLÜK KATILIM -->
        <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_attendance/<?php echo date("d/m/Y"); ?>">
                <i class="entypo-chart-area"></i>
                <span><?php echo ('Günlük Katılım'); ?></span>
            </a>

        </li>

        <!-- SINAVLAR -->
        <li class="<?php
        if ($page_name == 'exam' ||
                $page_name == 'grade' ||
                $page_name == 'marks' ||
                    $page_name == 'exam_marks_sms')
                        echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-graduation-cap"></i>
                <span><?php echo ('Sınav Bölümü'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'exam') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/exam">
                        <span><i class="entypo-dot"></i> <?php echo ('Sınav Listesi'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'grade') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/grade">
                        <span><i class="entypo-dot"></i> <?php echo ('Sınav Notları'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'marks') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/marks">
                        <span><i class="entypo-dot"></i> <?php echo ('Notları Yönet'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'exam_marks_sms') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/exam_marks_sms">
                        <span><i class="entypo-dot"></i> <?php echo ('Notları SMS ile Gönder'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- ÖDEME -->
        <li class="<?php if ($page_name == 'invoice') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/invoice">
                <i class="entypo-credit-card"></i>
                <span><?php echo ('Ödeme ve Fatura'); ?></span>
            </a>
        </li>

        <!-- MUHASEBE -->
        <li class="<?php
        if ($page_name == 'income' ||
                $page_name == 'expense' ||
                    $page_name == 'expense_category')
                        echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-suitcase"></i>
                <span><?php echo ('Muhasebe Bölümü'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'income') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/income">
                        <span><i class="entypo-dot"></i> <?php echo ('Kazanç'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/expense">
                        <span><i class="entypo-dot"></i> <?php echo ('Gider'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'expense_category') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/expense_category">
                        <span><i class="entypo-dot"></i> <?php echo ('Gider Kategorisi'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- KÜTÜPHANE -->
        <li class="<?php if ($page_name == 'book') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/book">
                <i class="entypo-book"></i>
                <span><?php echo ('Kütüphane'); ?></span>
            </a>
        </li>

        <!-- ULAŞIM -->
        <li class="<?php if ($page_name == 'transport') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/transport">
                <i class="entypo-location"></i>
                <span><?php echo ('Ulaşım'); ?></span>
            </a>
        </li>

        <!-- YURDUN -->
        <li class="<?php if ($page_name == 'dormitory') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/dormitory">
                <i class="entypo-home"></i>
                <span><?php echo ('Öğrenci Yurdu'); ?></span>
            </a>
        </li>

       <!-- DUYURU PANOSU -->
<li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
    <a href="<?php echo base_url(); ?>index.php?admin/noticeboard">
        <i class="entypo-doc-text-inv"></i>
        <span><?php echo ('Duyuru Panosu'); ?></span>
    </a>
</li>

<!-- MESAJ -->
<li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
    <a href="<?php echo base_url(); ?>index.php?admin/message">
        <i class="entypo-mail"></i>
        <span><?php echo ('Mesaj'); ?></span>
    </a>
</li>

<!-- AYARLAR -->
<li class="<?php
if ($page_name == 'system_settings' ||
        $page_name == 'manage_language' ||
            $page_name == 'sms_settings')
                echo 'opened active';
?> ">
    <a href="#">
        <i class="entypo-lifebuoy"></i>
        <span><?php echo ('Ayarlar'); ?></span>
    </a>
    <ul>
        <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/system_settings">
                <span><i class="entypo-dot"></i> <?php echo ('Genel Ayarlar'); ?></span>
            </a>
        </li>
        <li class="<?php if ($page_name == 'sms_settings') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/sms_settings">
                <span><i class="entypo-dot"></i> <?php echo ('SMS Ayarları'); ?></span>
            </a>
        </li>
        <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_language">
                <span><i class="entypo-dot"></i> <?php echo ('Dil Ayarları'); ?></span>
            </a>
        </li>
    </ul>
</li>

<!-- HESAP -->
<li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
    <a href="<?php echo base_url(); ?>index.php?admin/manage_profile">
        <i class="entypo-lock"></i>
        <span><?php echo ('Hesap'); ?></span>
    </a>
</li>


    </ul>

</div>