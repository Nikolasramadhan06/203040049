<?php 
// Menghubungkan dengan file php lainnya
require 'php/functions.php';

// Melakukan query dengan memanggil function
$buku = query("SELECT * FROM buku");




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Smart</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha512-L7MWcK7FNPcwNqnLdZq86lTHYLdQqZaz5YcAgE+5cnGmlw8JT03QB2+oxL100UeB6RlzZLUxCGSS4/++mNZdxw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<nav class="navbar">
  
   
    <span class="navbar-toggler-icon"></span>
    </button>

 
    </nav>

    <div class="container mt-5 mb-5">
    <br>
            <form action="" method="GET">
                <div class="field is-grouped">
                <div class="control">
              
                    </div>
                    <div class="field mr-2">
                        <div class="control">
                        <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus class="keyword">
                        </div>
                    </div>
                </div>
          </form>
          <br>
        
          <table border="1" cellpadding="10" cellspacing="0">
		<tr>
		    	<th>No</th>
			<th>Nama Buku</th>
            <th>Penerbit</th>
            <th>Tanggal Terbit</th>
            <th>Image</th>
			      <th>Harga</th>
            <th>Detail</th>
		</tr>
                
            </thead>
          
            <tbody>
            <?php if (empty($buku)) : ?>
                <tr>
                    <td colspan="4">
                        <p style="color: red; font-style: italic;">data tidak ditemukan!</p>
                    </td>
                </tr>
            <?php endif; ?>

            <?php $i = 1;
            foreach($buku as $bk) : ?>
              <tr>
                <td><?= $i++; ?></td>
                      <td><?= $bk['Nama Buku']; ?></td>
                      <td><?= $bk['Penerbit']; ?></td>
                      <td><?= $bk['Tanggal Terbit']; ?></td>
                <td><img src="img/<?= $bk['Image']; ?>" width="60"></td>
                <td><?= $bk['Harga Buku']; ?></td>
                <td>
                <a href="php/detail.php?id=<? $bk['id']; ?>">lihat detail</a>
                </td>
              </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <div class="nama">
        <center> <h2>Toko Buku Book Smart</h2> </center>
       <br>
        </div>
    </div>
    <script src="js/script.js"></script>

    <div class="text-center p-3 bg-secondary">

    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#items').DataTable();
        } );
    </script>
</body>
</html>