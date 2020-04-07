<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Berita</title>
</head> 

<body>
    <div class="container" style="margin-top: 5%">
    <table border="0" cellpadding="10" cellspacing="0" style="width: 100%">
        <tr>
            <th ><div align="center"><h2>Tambah Berita</h2></div></th>
            <th><div  align="right"><a href=""><button class="btn btn-primary" name="tambah">Tambah</button></a></div></th>
        </tr>
    </table>
        
        <form method="post" action="" style="margin-top: 30px">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="judul">Judul</span>
                    </div>
                    <input class="form-control" type="text" name="judul" placeholder="Judul" aria-label="Judul"
                        aria-describedby="Judul">
                </div>
                <label for="kategori">Kategori</label>
                <select id="kategori" class="form-control" name="kategori">
                    <option value="umum">Umum</option>
                    <option value="politik">Politik</option>
                    <option value="sport">Sport</option>
                    <option value="game">Game</option>
                    <option value="teknologi">Teknologi</option>
                    <option value="ekonomi">Ekonomi</option>
                </select>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea id="isi" class="form-control" name="isi" rows="10"></textarea>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>