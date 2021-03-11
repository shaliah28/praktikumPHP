>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="nilai.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>

                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="">Lesson</label>
                <select name ="mata_kuliah"class="form-select form-control" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="Pemrograman Web">Web Programming</option>
                    <option value="Basis Data">Database</option>
                    <option value="Statistika">Statiska</option>
                    <option value="PPKN">PKN</option>
                    <option value="UI/UX">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for=""> UTS Value</label>
                    <input type="text" name="nilai_uts" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">UAS Value</label>
                    <input type="text" name="nilai_uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assignment Value</label>
                    <input type="text" name="nilai_tugas" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">
                </div>
            </form>
            <?php
            if ($_GET)
            {
            
                $nama = $_GET['nama'];
                $nim = $_GET['nim'];
                $mata_kuliah = $_GET['mata_kuliah'];
                $nilai_uts = $_GET['nilai_uts'];
                $nilai_uas = $_GET['nilai_uas'];
                $nilai_tugas = $_GET['nilai_tugas'];
                $total_nilai = $nilai_uts + $nilai_uas + $nilai_tugas;
                $alphabet = $total_nilai / 3;
                if ($alphabet >= 85){
                    $grade = "A";
                }elseif ($alphabet >= 70)
                {   $grade = "B";
                }elseif ($alphabet >= 60)
                {   $grade = "C";
                }elseif ($alphabet >= 40)
                {   $grade = "D";
                }else{
                    $grade = "E";
                } 
            
            }   
            
            ?>

            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : <?= @$nama ?></li>
                    <li class="list-group-item">Nim : <?= @$nim?></li>
                    <li class="list-group-item">Lesson: <?= @$mata_kuliah?></li>
                    <li class="list-group-item"> UTS Value : <?= @$nilai_uts ?></li>
                    <li class="list-group-item">UAS Value : <?= @$nilai_uas?></li>
                    <li class="list-group-item">Assignment Value : <?= @$nilai_tugas?></li>
                    <li class="list-group-item">Value Total :  <?= @$total_nilai?></li>
                    <li class="list-group-item">Value in Alphabet : <?= @$grade ?></li>
                    
                    
                </ul>
                </div>

            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">E : Less than 40 </li>
                    
                    
                </ul>
                </div>

        </div>
        
    </div>
</body>
</html>
