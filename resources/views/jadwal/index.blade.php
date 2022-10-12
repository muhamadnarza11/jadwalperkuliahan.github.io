
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

{{-- Paginate --}}
        <div class="pagetitle">
            <h1>Jadwal</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/Home">Home</a></li>
                <li class="breadcrumb-item active"><a href="/Jadwal-index" class="active"> Jadwal</a></li>
                <li class="breadcrumb-item active"><a href="/Jadwal-index" class="active"> Semester 1</a></li>
              </ol>
            </nav>
        </div><!-- End Page Title -->
{{-- End Paginate --}}

    <div class="col-lg-12">

        <div class="card">
          <div class="card-body pb-2">
            <h5 class="card-title">Table Data Perkuliahan</h5>

            <div class="form-group pt-1 pb-4">
                <div class="card-tools col-lg-12">
                    <a href="/Jadwal-create" class="btn btn-primary"> Tambah data <i class="fas fa-plus-square"></i></a>
                </div>
            </div>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Matkul</th>
                  <th scope="col">Hari</th>
                  <th scope="col">Jam</th>
                  <th scope="col">Dosen</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($jadwal as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->matkul}}</td>
                <td>{{$item->hari}}</td>
                <td>{{$item->jam}}</td>
                <td>{{$item->dosen}}</td>
                <td>
                    {{-- edit | hapus --}}
                    <a href="/Jadwal-edit/{{$item->id}}/edit"><i class="fa-regular fa-pen-to-square"></i></a> |
                    <a href="/Jadwal-index/{{$item->id}}"><i class="fa-solid fa-trash" style="color:red;"></i></i></a>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
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
