<?= $this->extend('layout/index'); ?>


<?= $this->section('konten'); ?>


<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="row">
      <div class="col">
        <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
      </div>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
              <thead>
                <tr class="text-center">
                  <th scope="col">NO</th>
                  <th scope="col">Id Warga</th>
                  <th scope="col">NIK</th>
                  <th scope="col">Nama</th>
                  <th scope="col">L/P</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No.Rumah</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr class="text-center">
                  <th scope="col">NO</th>
                  <th scope="col">Id Warga</th>
                  <th scope="col">NIK</th>
                  <th scope="col">Nama</th>
                  <th scope="col">L/P</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No.Rumah</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                <tr class="text-center">

                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>




</div>







<?= $this->endSection(); ?>