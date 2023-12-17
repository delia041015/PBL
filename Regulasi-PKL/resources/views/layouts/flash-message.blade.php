<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Periksa ulang kesalahan pengisian formulir
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
    </div>
    @endif
</div>

<!-- Sertakan JavaScript Bootstrap (Popper.js dan Bootstrap JS) -->
<script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-eaQyf9a9ZAZLShQld3dDg9B0oZn+i18KFyKPI73i5fybEho3+nS2I2dRVpcF9bX" crossorigin="anonymous"></script>
