
<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.header')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    @include('template.navbar')

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    @include('template.sidebar')

  </aside><!-- End Sidebar-->

    {{-- main control website--}}

  <main id="main" class="main">

    <div class="pagetitle">
        <h1>Jadwal</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Home">Home</a></li>
            <li class="breadcrumb-item active"><a href="/Jadwal-index" class="active"> Jadwal</a></li>
            <li class="breadcrumb-item active"><a href="/Jadwal-index" class="active"> Semester 1</a></li>
            <li class="breadcrumb-item active"><a href="/Jadwal-create" class="active"> Create Jadwal</a></li>
          </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="col-lg-12">

        <div class="">
          <div class="card-body">
            <h5 class="card-title">Create Jadwal Form</h5>

            <!-- Vertical Form -->
            <form action="/Jadwal-store" method="post" class="row g-3">
                @csrf
              <div class="col-12">
                <label for="matkul" class="form-label">Matkul</label>
                <input type="text"  name="matkul" class="form-control" id="matkul" placeholder="Input Your Dosen">
              </div>
              <div class="col-12">
                <label for="hari" class="form-label">Hari</label>
                <input type="hari" name="hari" class="form-control" id="hari" placeholder="Input Your Hari">
              </div>
              <div class="col-12">
                <label for="jam" class="form-label">Jam Ke</label>
                <input type="jam" name="jam" class="form-control" id="jam" placeholder="Input Your Jam Ke">
              </div>
              <div class="col-12">
                <label for="Dosen" class="form-label">Dosen</label>
                <input type="text" name="dosen" class="form-control" id="dosen" placeholder="Input Your Dosen">
            </div>
            <div class="form-group text-center" >
                  <a class="btn btn-secondary" href="/Jadwal-index">Back</a>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
               </div>
            </form><!-- Vertical Form -->

          </div>
        </div>

  </main><!-- End #main -->

  {{-- end main control website --}}

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    @include('template.footer')
  </footer><!-- End Footer -->

  {{-- back to top --}}
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  {{-- end back to top --}}


 @include('template.script')

</body>

</html>
