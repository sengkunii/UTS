<html>    
<head>
    <title>Calculator Imam Muhyiddin</title>
    <style>
        /* CSS untuk mengatur tampilan di tengah */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style> 
</head>
<body> 
    <form action="" method="post"> 
        <!-- Form untuk mengirimkan data dengan metode POST -->
        <h1>Demo Operator</h1> 
        <h2>Arithmetic</h2> 
        <table border="3"> 
            <table width="25%" border="2" cellspacing="2" cellpadding="2"> 
                <tr> 
                    <td align="center"><b>Operand Kiri</b></td> 
                    <td align="center"><b>Operator</b></td> 
                    <td align="center"><b>Operator Kanan</b></td> 
                    <td align="center"><b></b></td> 
                </tr> 
                <tr>
                    <td><input type="text" name="angka1" size="20" /></td> 
                    <td>
                        <select name="operasi"> 
                            <option value="*">x</option> 
                            <option value="/">:</option> 
                            <option value="+">+</option> 
                            <option value="-">-</option> 
                            <option value="%">%</option> 
                        </select>
                    </td> 
                    <td><input type="text" name="angka2" size="20" /></td> 
                    <td><input type="submit" value="Submit" /></td>
                </tr> 
            </table> 
        </table> 
        
        <?php 
        if (isset($_POST["angka1"]) && isset($_POST["angka2"])) { 
            
            $angka1 = $_POST["angka1"]; // Mengambil nilai angka1
            $angka2 = $_POST["angka2"]; // Mengambil nilai angka2
            if ($_POST["operasi"] == '*') { 
                // Blok if dengan kondisi $_POST["operasi"] sama dengan '*' (perkalian)
                echo "<br> Hasil Perhitungan = ";
                echo $angka1 * $angka2; 
                // Menampilkan hasil perkalian
            } elseif ($_POST["operasi"] == '/') { 
                // Blok elseif dengan kondisi $_POST["operasi"] sama dengan '/' (pembagian)
                echo "<br> Hasil Perhitungan = ";
                echo $angka1 / $angka2; 
                // Menampilkan hasil pembagian
            } elseif ($_POST["operasi"] == '+') { 
                // Blok elseif dengan kondisi $_POST["operasi"] sama dengan '+' (penjumlahan)
                echo "<br> Hasil Perhitungan  = ";
                echo $angka1 + $angka2; 
                // Menampilkan hasil penjumlahan
            } elseif ($_POST["operasi"] == '-') { 
                // Blok elseif dengan kondisi $_POST["operasi"] sama dengan '-' (pengurangan)
                echo "<br> Hasil Perhitungan = ";
                echo $angka1 - $angka2; 
                // Menampilkan hasil pengurangan
            } elseif ($_POST["operasi"] == '%') { 
                // Blok elseif dengan kondisi $_POST["operasi"] sama dengan '%' (modulus)
                echo "<br> Hasil Perhitungan = ";
                echo $angka1 % $angka2; 
                // Menampilkan hasil modulus
            } 
        } 
        ?> 
    </form> 
</body> 
</html> 
