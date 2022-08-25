  <!-- Begin Page Content -->

  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-9">
          <h1 class="h3 mb-3 text-gray-800">Dashboard</h1>

      </div>
      <!-- Content Row -->
      <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">

                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2 ">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                  Artikel

                              </div>
                              <i class="fas fa-fw fa-folder"></i>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  <?= number_format($count->jumlah)?>


                              </div>
                          </div>

                      </div>

                  </div>


              </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2 ">
                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">

                                  Member
                              </div> <i class="fas fa-fw fa-cog"></i>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  <?= number_format($total->member)?>


                              </div>
                          </div>

                      </div>
                      <div class=" col-auto">

                      </div>
                  </div>


              </div>
          </div>
      </div>
  </div>
  </div>

  <div>
  </div>