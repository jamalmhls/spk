<?php
$uri = service('uri')->getSegments();
$uri1 = $uri[1] ?? 'index';
$uri2 = $uri[2] ?? '';
$uri3 = $uri[3] ?? '';
?>

<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="<?= base_url(); ?>assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item <?= ($uri1 == 'index') ? 'active' : '' ?> ">
                    <a href="/mazer" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($uri1 == 'components') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Components</span>
                    </a>
                    <ul class="submenu <?= ($uri1 == 'components') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri2 == 'alert') ? 'active' : '' ?>">
                            <a href="/components/alert">Alert</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'badge') ? 'active' : '' ?>">
                            <a href="/components/badge">Badge</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'breadcrumb') ? 'active' : '' ?>">
                            <a href="/components/breadcrumb">Breadcrumb</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-arrow-bar-right text-danger"></i>
                        <span class="text-danger">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>