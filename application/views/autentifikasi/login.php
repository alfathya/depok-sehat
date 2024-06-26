<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              
              <div class="d-flex justify-content-center py-4">
                <a href="<?= base_url('home');?>" class="logo d-flex align-items-center w-auto">
                  <i class="fa-solid fa-hand-holding-medical fa-xl me-2" style="color: #63E6BE;"></i>
                  <span class="d-none d-lg-block">Depok Sehat</span>
                </a>
              </div><!-- End Logo -->
              
              <div class="card mb-3">
                
                <div class="card-body">
                  
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login ke Akun Anda</h5>
                    <!-- <?= $this->session->flashdata('pesan'); ?> -->
                    <p class="text-center small">Masukkan Email dan Password untuk Login</p>
                  </div>
                  <form class="row g-3" method="post" action="<?= base_url('autentifikasi'); ?>">

                    <div class="col-12">
                      <label for="useremail" class="form-label">Email</label>
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="user_email" value="<?= set_value('user_email'); ?>" class="form-control" id="user_email">
                        <!-- <div class="invalid-feedback">Please enter your email.</div> -->
                      </div>
                      <?= form_error('user_email', '<small class="small text-danger">', '</small>'); ?>
                    </div>

                    <div class="col-12">
                      <label for="user_password" class="form-label">Password</label>
                      <input type="password" name="user_password" class="form-control" id="user_password">
                      <!-- <div class="invalid-feedback">Please enter your password!</div> -->
                    </div>
                    <?= form_error('user_password', '<small class="text-danger">', '</small>'); ?>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Belum Memiliki Akun? <a href="<?= base_url('autentifikasi/registrasi');?>">Registrasi Akun</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

