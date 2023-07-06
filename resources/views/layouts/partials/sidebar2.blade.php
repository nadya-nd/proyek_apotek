<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
<div class="sidebar-header">
    <img src="/dist/assets/images/logo.svg" alt="" srcset="">
</div>
<div class="sidebar-menu">
    <ul class="menu">
        
        <li class="sidebar-item ">
            <a href="index.html" class='sidebar-link'>
                <i data-feather="home" width="20"></i> 
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="triangle" width="20"></i> 
                <span>Data Master</span>
            </a>
            <ul class="submenu ">
                <li class='sidebar-title'>Data Obat</li>                       
                <li class='sidebar-title'>Data Member</li>
            </ul>
        </li>

        <li class="sidebar-item {{ request()->is('rekap-pembelian2') ? 'active' : '' }}">
            <a href="../rekap-pembelian2" class='sidebar-link'>
                <i data-feather="briefcase" width="20"></i> 
                <span>Rekap Pembelian</span>
            </a>
        </li>
                
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i data-feather="file-text" width="20"></i> 
                <span>Pengelolaan Chat</span>
            </a>                   
            <ul class="submenu ">                        
                <li>
                    <a href="form-element-input.html">History Chat</a>
                </li>
                <li>
                    <a href="form-element-input.html">Template Chat</a>
                </li>
            </ul>                    
        </li>      
    </ul>
</div>