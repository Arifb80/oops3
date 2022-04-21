<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body style="margin: 4rem;">

<center>

<h2> <br></h2>
</center>
<br>

    <div class="card">

        <!-- HEADER CARD -->
        <div class="card-header">
            <h5>siswa</h5>
        </div>

        <!-- BODY CARD -->
        <div class="card-body">

            <div class="row g-2">
                <div class="col text-center">
                    <h4>
                    <b><i></i></b>
                    <h4>
                </div>

                <div class="col text-center">
                    <h4>
                    <b><i></i></b>
                    <h4>
                </div>
            </div>

            <form action="tesinput.php" method="post">

            <!-- CARD FORM -->

            <div class="row g-2 mb-3">
                <div class="col ">
                    <label>Nis</label>
                    <input type="number" name="nis" placeholder="nis" class="form-control" required>
                </div>

                <div class="row g-2 mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="nama" class="form-control" required>
                </div>
            </div>

            <div class="row g-2 mb-3">
                <div class="col ">
                    <label>Jurusan</label>
                    <select name="jurusan" id="" class="form-select" required>
                        <option>jurusan</option>
                        <option value="rekayasaperangkatlunak">rekayasaperangkatlunak</option>
                        <option value="tsm">tsm</option>
                        <option value="tkr">tkr</option>
                    </select>
                </div>

                <div class="row g-2 mb-3">
                    <label>Kelas</label>
                    <input type="text" name="kelas" placeholder="kelas" class="form-control" required>
                </div>
            </div>
            
            <div div class="d-flex justify-content-center">
                    <div class="col">   
                        <p>bahasa indonesia</p>
                        <input type="number" name="kehadiran1" class="form-control" placeholder="Kehadiran">
                        <input type="number" name="tugas1" class="form-control" placeholder="Tugas">
                        <input type="number" name="absen1" class="form-control" placeholder="Absen">
                        <input type="number" name="ujian1" class="form-control" placeholder="Ujian">
                    </div>
                    <div class="col">
                        <p>Bahasa Inggris</p>
                        <input type="number" name="kehadiran2" class="form-control" placeholder="Kehadiran">
                        <input type="number" name="tugas2" class="form-control" placeholder="Tugas">
                        <input type="number" name="absen2" class="form-control" placeholder="Absen">
                        <input type="number" name="ujian2" class="form-control" placeholder="Ujian">
                    </div>
                    <div class="col">
                        <p>Matematika</p>
                        <input type="number" name="kehadiran3" class="form-control" placeholder="Kehadiran">
                        <input type="number" name="tugas3" class="form-control" placeholder="Tugas">
                        <input type="number" name="absen3" class="form-control" placeholder="Absen">
                        <input type="number" name="ujian3" class="form-control" placeholder="Ujian">
                    </div>
                    <div class="col">
                        <p>Produktif</p>
                        <input type="number" name="kehadiran4" class="form-control" placeholder="Kehadiran">
                        <input type="number" name="tugas4" class="form-control" placeholder="Tugas">
                        <input type="number" name="absen4" class="form-control" placeholder="Absen">
                        <input type="number" name="ujian4" class="form-control" placeholder="Ujian">
                    </div>
                </div>
                <div>
               <div class="row g-2">
                <div class="col text-center">
                   <input type="submit" name="kirim" value="kirim" class="btn-primary mt-4" required>
                </div>

            </div>
            </form>
        </div>

    </div>