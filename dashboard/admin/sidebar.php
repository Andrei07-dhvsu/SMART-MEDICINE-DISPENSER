<?php
include_once '../../config/settings-configuration.php';
include_once 'header.php';

$config = new SystemConfig();

class SideBar
{
    private $config;
    private $currentPage;

    public function __construct($config, $currentPage)
    {
        $this->config = $config;
        $this->currentPage = $currentPage;
    }

    private function isActive($pageName)
    {
        return $this->currentPage === $pageName ? 'active' : '';
    }

    public function getSideBar()
    {
        return '
        <section id="sidebar">
            <a href="./" class="brand">
                <img src="../../src/img/smart-medicine-logo.png" alt="logo">
                <span class="text">AUTOMED<br>
                    <p>SMART MED DISPENSER</p>
                </span>
            </a>

            <ul class="side-menu top">
                <li class="' . $this->isActive('index') . '">
                    <a href="./">
                        <i class="bx bxs-dashboard"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>

                <li class="' . $this->isActive('medicine-inventory') . '">
                    <a href="medicine-inventory">
                        <i class="bx bxs-capsule"></i>
                        <span class="text">Inventory</span>
                    </a>
                </li>

                <li class="' . $this->isActive('schedule-management') . '">
                    <a href="schedule-management">
                        <i class="bx bx-time-five"></i>
                        <span class="text">Schedule</span>
                    </a>
                </li>
                
                <li class="' . $this->isActive('dispensing-log') . '">
                    <a href="dispensing-log">
                        <i class="bx bx-history"></i>
                        <span class="text">Dispensing Logs</span>
                    </a>
                </li>
            </ul>

            <ul class="side-menu">
                <li class="' . $this->isActive('audit-trail') . '">
                    <a href="audit-trail">
                        <i class="bx bx-list-check"></i>
                        <span class="text">Audit Trail</span>
                    </a>
                </li>
                <li class="' . $this->isActive('settings') . '">
                    <a href="settings">
                        <i class="bx bxs-cog"></i>
                        <span class="text">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="authentication/admin-signout" class="btn-signout">
                        <i class="bx bxs-log-out-circle"></i>
                        <span class="text">Sign Out</span>
                    </a>
                </li>
            </ul>
        </section>';
    }
}
