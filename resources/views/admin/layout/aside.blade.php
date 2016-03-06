  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/bower_components/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Operator Desa</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>
        <!-- Optionally, you can add icons to the links -->
        <li>
        <a href="/">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
      </li>

        <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Penduduk</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/penduduk"><i class="fa fa-circle-o"></i> Data Induk</a></li>
          <li><a href="/sementara"><i class="fa fa-circle-o"></i> Penduduk Sementara</a></li>
          <li><a href="/keluarga"><i class="fa fa-circle-o"></i> Keluarga</a></li>
          <li><a href="/ktp"><i class="fa fa-circle-o"></i> Wajib KTP</a></li>
          <li><a href="/rekapitulasi"><i class="fa fa-circle-o"></i> Rekapitulasi</a></li>
      </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-bank"></i>
          <span>Desa</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/peraturan"><i class="fa fa-circle-o"></i> Peraturan </a></li>
          <li><a href="/keputusan"><i class="fa fa-circle-o"></i> Keputusan Kepala</a></li>
          <li><a href="/inventaris"><i class="fa fa-circle-o"></i> Inventaris</a></li>
          <li><a href="/aparat"><i class="fa fa-circle-o"></i> Aparat Pemerintah</a></li>
      </ul>
      </li>

      <li class="treeview">
        <a href="/tanah">
          <i class="fa fa-map"></i>
          <span>Pertanahan</span>
        </a>
      </li>

      <li class="treeview">
        <a href="/profil">
          <i class="fa fa-user"></i> <span>Pengguna</span>
        </a>
      </li>

      <li class="treeview">
        <a href="/profil">
          <i class="fa fa-gear"></i> <span>Pengaturan</span>
        </a>
      </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>