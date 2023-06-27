<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
<div class="sidebar-header">
    <img src="dist/assets/images/logo.svg" alt="" srcset="">
</div>
<div class="sidebar-menu">
    <ul class="menu">
        
        <li class="sidebar-item {{ request()->is('dashboard2') ? 'active' : '' }} ">
            <a href="dashboard2" class='sidebar-link'>
                <i data-feather="home" width="20"></i> 
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item {{ request()->is('data-obat','data-member') ? 'active' : '' }} has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="triangle" width="20"></i> 
                <span>Data Master</span>
            </a>
            <ul class="submenu {{ request()->is('data-obat','data-member') ? 'active' : '' }}">
                <li>
                    <a href="data-obat">Data Obat</a>
                </li>                       
                <li>                       
                <li>
                    <a href="data-member">Data Member</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item {{ request()->is('rekap-pembelian') ? 'active' : '' }}">
            <a href="#" class='sidebar-link'>
                <i data-feather="briefcase" width="20"></i> 
                <span>Rekap Pembelian</span>
            </a>
        </li>
                
        <li class="sidebar-item {{ request()->is('pengelolaan-chat') ? 'active' : '' }} ">
            <a href="pengelolaan-chat" class='sidebar-link'>
                <i data-feather="file-text" width="20"></i> 
                <span>Pengelolaan Chat</span>
            </a>                  
        </li>      
    </ul>
</div>