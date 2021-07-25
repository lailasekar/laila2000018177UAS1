<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kepala">
    <div class="jdl">
    <h2>SELAMAT DATANG </h2>
    </div>
    <div class="menu">
        <h3 class="brk"> Selamat Datang Di halaman jumlah kunjungan</h3>
    </div>
    <div class="container2">
    <div class="php">
        
   <?php
    $filename = 'counter2.txt';	
    
    function counter(){		
        global $filename;	
    
        if(file_exists($filename)){		
            $value = file_get_contents($filename);	
        }else{		
            $value = 0;		
        }
    
        file_put_contents($filename, ++$value);		
    }
    
    counter();	
    
    echo  '  Anda adalah pengunjung ke : '.file_get_contents($filename);
    ?>
     <div class="data6">            
            <p> Untuk Kembali Silahkan Kil Tombol Berikut</p>
            <form method="GET" action="index.php">
                <button>KEMBALI</button>
            </form>
    </div>
   </div>
   
    </div>
   
</div>
</body>
</html>