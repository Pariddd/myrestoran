@extends('admin.layouts.master')
@section('title', 'Add Karyawan')

@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Tambah Data Karyawan</h3>
            <p class="text-subtitle text-muted">Silahkan isi data karyawan yang ingin ditambahkan</p>
        </div>
    </div>
</div>
<div class="card">
  <div class="card-body">
      @if ($errors->any())
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <h5 class="alert-heading">Submit Error!</h5>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      <form class="form" action="{{ route('users.store') }}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="form-body">
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="fullname">Nama Lengkap</label>
                          <input type="text" class="form-control" id="fullname" placeholder="Masukkan Nama Lengkap" name="fullname" required>
                      </div>
                      <div class="form-group">
                          <label for="name">Username</label>
                          <input type="text" class="form-control" id="name" placeholder="Masukkan Username" name="username" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                      </div>

                      <div class="form-group">
                        <label for="phone">No Handphone</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Masukkan No Handphone" name="phone" pattern="[0-9]{10,15}" required>
                        <small class="text-muted">Format: 08xxxxxxxxxx (10-15 digits)</small>
                      </div>
                      <div class="form-group">
                          <label for="role">Role</label>
                          <select class="form-select" id="role" name="role_id" required>
                              <option value="" disabled selected>Pilih Menu</option>
                              @foreach ($roles as $role)
                                  <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required>
                            <small><a href="#" class="toggle-password" data-target="password">Lihat Password</a></small>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password_confirmation" placeholder="Masukkan Konfirmasi Password" name="password_confirmation" required>
                            <small><a href="#" class="toggle-password" data-target="password_confirmation">Lihat Password</a></small>
                        </div>
                      <div class="form-group d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                          <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                          <a href="{{ route('users.index') }}" type="submit" class="btn btn-light-secondary me-1 mb-1">Batal</a>
                      </div>
                  </div>
              </div>
          </div>
      </form>
  </div>
</div>

<script>
    document.querySelectorAll('.toggle-password').forEach(el => {
        el.addEventListener('click', function (e) {
            e.preventDefault();
            let input = document.getElementById(this.dataset.target);
            let isHidden = input.type === 'password';
            input.type = isHidden ? 'text' : 'password';
            document.querySelector(`a[data-target="${this.dataset.target}"]`).textContent = isHidden ? 'Sembunyikan Password' : 'Lihat Password';
        });
    });
</script>
@endsection