<html>
    <head> 
        <title>Web Penjualan Handphone</title>
        </head>
        <body>
            <h1>HANDPHONE SHOP</h1>

            Produk GSM Mobile (Best Price) :<br>
            <form action="penjualanHP_output.php" method="post">

                <input type="checkbox" name="produk1" value="Nokia 1208 Rp.350.000,-">Nokia 1208 Rp.350.000,- <br> 
                <input type="checkbox" name="produk2" value="Nokia 1661 Rp.465.000,-">Nokia 1661 Rp.465.000,-<br>
                <input type="checkbox" name="produk3" value="SonyEricson K330 Rp.485.000,-">SonyEricson K330 Rp. 485.000,-<br>
                <input type="checkbox" name="produk4" value="Samsung Champ Rp.865.000,-">Samsung Champ Rp.865.000,-<br>
                <input type="checkbox" name="produk5" value="Samsung B3410 Rp.1.624.000,-">Samsung B3410 Rp.1.624.000,-<br>
                

                ================================= <br>
<pre> 
Data Customer <br>
ID Customer :   <input type="text" name="ID" size="25" maxlength="60">

Nama        :   <input type="text" name="nama" size="25" maxlength="60">

Email       :   <input type="text" name="email" size="25" maxlength="60">

Alamat      :   <input type="text" name="alamat" size="25" maxlength="100">

Member :
 <input type=radio name="member" value=Ya checked>Member 
 <input type=radio name="member" value=Bukan>Bukan 

Pembayaran : <br><select name=pembayaran>
 <option value=VISA>VISA
 <option value=MasterCard>Master Card
 <option value=DebitBCA>Debit BCA
 </select><br>                         
</pre>
<input type="submit" value="Proses" name="submit">

            </form>
        </body>
</html>
