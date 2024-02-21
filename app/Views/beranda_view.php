<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <a href="<?= base_url('/'); ?>" style="color:Grey;">
            <?= $tajuk ?>
          </a>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <h2><b>Selamat datang!</b></h2>
      <!-- Data -->
      <div class="row">
        <div class="col-6">
          <div class="info-box shadow-none" style="background-color:transparent;">
            <span class="info-box-icon">
              <svg class="mantine-1pl3zja mantine-Avatar-placeholderIcon" width="45" height="45" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.877014 7.49988C0.877014 3.84219 3.84216 0.877045 7.49985 0.877045C11.1575 0.877045 14.1227 3.84219 14.1227 7.49988C14.1227 11.1575 11.1575 14.1227 7.49985 14.1227C3.84216 14.1227 0.877014 11.1575 0.877014 7.49988ZM7.49985 1.82704C4.36683 1.82704 1.82701 4.36686 1.82701 7.49988C1.82701 8.97196 2.38774 10.3131 3.30727 11.3213C4.19074 9.94119 5.73818 9.02499 7.50023 9.02499C9.26206 9.02499 10.8093 9.94097 11.6929 11.3208C12.6121 10.3127 13.1727 8.97172 13.1727 7.49988C13.1727 4.36686 10.6328 1.82704 7.49985 1.82704ZM10.9818 11.9787C10.2839 10.7795 8.9857 9.97499 7.50023 9.97499C6.01458 9.97499 4.71624 10.7797 4.01845 11.9791C4.97952 12.7272 6.18765 13.1727 7.49985 13.1727C8.81227 13.1727 10.0206 12.727 10.9818 11.9787ZM5.14999 6.50487C5.14999 5.207 6.20212 4.15487 7.49999 4.15487C8.79786 4.15487 9.84999 5.207 9.84999 6.50487C9.84999 7.80274 8.79786 8.85487 7.49999 8.85487C6.20212 8.85487 5.14999 7.80274 5.14999 6.50487ZM7.49999 5.10487C6.72679 5.10487 6.09999 5.73167 6.09999 6.50487C6.09999 7.27807 6.72679 7.90487 7.49999 7.90487C8.27319 7.90487 8.89999 7.27807 8.89999 6.50487C8.89999 5.73167 8.27319 5.10487 7.49999 5.10487Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
              </svg>
            </span>
            <div class="info-box-content">
              <a>JENNIE M. PRIMAZERA</a>
              <a style="color:Grey;">221910851</a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col">
          <div class="info-box shadow-none" style="background-color:transparent;">
            <span class="info-box-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-calendar">
                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                <path d="M16 3v4"></path>
                <path d="M8 3v4"></path>
                <path d="M4 11h16"></path>
                <path d="M11 15h1"></path>
                <path d="M12 15v3"></path>
              </svg>
            </span>
            <div class="info-box-content">
              <a><b>Hari</b><br>Tanggal</a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col">
          <div class="info-box shadow-none" style="background-color:transparent;">
            <span class="info-box-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-timeline-event">
                <path d="M12 20m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M10 20h-6"></path>
                <path d="M14 20h6"></path>
                <path d="M12 15l-2 -2h-3a1 1 0 0 1 -1 -1v-8a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-3l-2 2z"></path>
              </svg>
            </span>
            <div class="info-box-content">
              <a><b>T.A. 2023/2024</b><br>Semester Genap</a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.data -->
      <!-- Kelas -->
      <h5><b>Pertemuan hari ini</b></h5>
      <div class="row">
        <div class="col-4">
          <div class="card bg-gradient-primary">
            <div class="card-body">
              <div class="col-container" style="display: flex;">
                <div class="col" style="flex: 0; vertical-align: middle;">
                  <i class="fas fa-book" style="vertical-align: middle;"></i>
                </div>
                <div class="col" style="flex: 1; vertical-align: middle;">
                  <small>Teori<br>3T</small>
                </div>
                <div class="col" style="flex: 1; text-align: right; vertical-align: middle;">
                  <small>Ruang 123</small>
                </div>
              </div>
              <br><br>
              <a><b>Nama Mata Kuliah</b><br>Nama Dosen</a>
              <br><br><br>
              <a href="<?= base_url('/kelas'); ?>"><button type="button" class="btn btn-block btn-default">Default</button></a>
              <small>jam masuk - jam keluar</small>
            </div>
          </div>
        </div>
      </div>
      <!-- /.Kelas -->
      <h5><b>Pintasan</b></h5>
      <div class="row">
        <!-- Jadwal Pertemuan -->
        <div class="col-4">
          <div class="card card-primary">
            <div class="card-header" style="text-align: center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-calendar">
                <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                <path d="M16 3v4"></path>
                <path d="M8 3v4"></path>
                <path d="M4 11h16"></path>
                <path d="M11 15h1"></path>
                <path d="M12 15v3"></path>
              </svg>
            </div>
            <div class="card-body">
              <h4><b>Jadwal Pertemuan</b></h4>
              <a style="color:Grey;">Tinjau jadwal pertemuan Anda dalam tampilan kalender</a>
            </div>
          </div>
        </div>
        <!-- /.Jadwal Pertemuan -->
        <!-- Pergantian -->
        <div class="col-4">
          <div class="card card-primary">
            <div class="card-header" style="text-align: center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-arrow-move-right">
                <path d="M11 12h10"></path>
                <path d="M18 9l3 3l-3 3"></path>
                <path d="M7 12a2 2 0 1 1 -4 0a2 2 0 0 1 4 0z"></path>
              </svg>
            </div>
            <div class="card-body">
              <h4><b>Pergantian</b></h4>
              <a style="color:Grey;">Pantau progress pengajuan pergantian jadwal Anda dalam satu tempat</a>
            </div>
          </div>
        </div>
        <!-- /.Pergantian -->
        <!-- Evaluasi Dosen -->
        <div class="col-4">
          <div class="card card-primary">
            <div class="card-header" style="text-align: center;">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-adjustments-horizontal">
                <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M4 6l8 0"></path>
                <path d="M16 6l4 0"></path>
                <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M4 12l2 0"></path>
                <path d="M10 12l10 0"></path>
                <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M4 18l11 0"></path>
                <path d="M19 18l1 0"></path>
              </svg>
            </div>
            <div class="card-body">
              <h4><b>Evaluasi Dosen</b></h4>
              <a style="color:Grey;">Berikan penilaian pada dosen pengampu mata kuliah</a>
            </div>
          </div>
        </div>
        <!-- /.Evaluasi Dosen -->
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->