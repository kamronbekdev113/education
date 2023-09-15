<!-- Sidebar Area Start Here -->
<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color" style="height:100vh">
    <div class="mobile-sidebar-header d-md-none">
        <div class="header-logo">
            <a href="index.html"><img src="/img/logo1.png" alt="logo"></a>
        </div>
    </div>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="fas fa-users"></i><span>Students</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/student/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Students</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="fa fa-id-card"></i><span>Teachers</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/teacher/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Teachers</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="fas fa-laptop-code"></i><span>Courses</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/course/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Courses</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="fas fa-place-of-worship"></i><span>Region</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/region/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Region</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="fas fa-door-open"></i><span>Room</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/room/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Room</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="fas fa-layer-group"></i><span>Groups</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/group/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Groups Teacher</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/group-student/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Groups Students</a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</div>