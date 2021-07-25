<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil Laila</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <center>
    <div class="belanja">
    <h2> SILAHKAN PILIH SKINCARE </h2>
    <br><hr>
    </center>
    <div class="barang">
    <label for="">Nama Barang</label>
    <input type="text"id="Barang">
    <label for="">harga</label>
    <input type="text"id="harga">

    <label for="">Varian</label>
    <select name="varian" size=1> 
    <option value="tea tree">tea tree</option> 
    <option value="sakura">sakura</option> 
    <option value="green tea">green tea</option>
    <option value="apel">apel</option>
    </select> 
    
    <label for="">Jumlah</label>
    <input type="text"id="jumlah">
    <hr><br>
    <label for="">Total Harga</label>
    <textarea id="total"></textarea><br>
    <label for="">Jumlah Bayar</label>
    <textarea id="bayar"></textarea><br>
    <br><hr>
    <h2><button onclick="hasil()">Cek</h2></button>
    <form method="GET" action="index.php">
                <button>Home</button>
            </form>
</div>
    <script>
        function hasil(){
            var harga=parseInt(document.getElementById('harga').value);
            var jumlah=parseInt(document.getElementById('jumlah').value);
            var total=harga*jumlah;
            document.getElementById("total").innerHTML=total;
            var dis=0.10;
            var bayar;
            if(total>100000){
                bayar=total-(total*dis);
                document.getElementById("bayar").innerHTML=bayar;
                document.getElementById("dis").innerHTML="10%";
            }else{
                document.getElementById("bayar").innerHTML=total;
                document.getElementById("dis").innerHTML="10%";

            }
        }
    </script>
    </div>
</body>
</html>