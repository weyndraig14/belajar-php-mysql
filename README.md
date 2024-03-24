<p align="center" >
  <b>POINT UTAMA</b>
</p>

---
> #### PENGENALAN PDO
> - PDO (PHP Data Objects) adalah spesifikasi interface atau API untuk komunikasi antara PHP dengan database management system.
> - Penggunaan PDO lebih fleksibel karena menyediakan abstraksi yang sama untuk semua jenis database.
>
> Contoh kode untuk melihat PDO drivers :
> 
> <img width="167" alt="Cuplikan layar 2024-03-24 121318" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/8202d327-107b-467d-9049-7c12159faea7">
---
> #### KONEKSI DATABASE 
> - Untuk terkoneksi ke database menggunakan PDO, pertama-tama dibuatlah koneksi dengan membuat objek dari kelas PDO.
> - Dan saat kita membuat koneksi ke mySQL menggunakan PDO, kita perlu tentukan host,port,database name, username dan juga passwordnya.
>
> Berikut kode untuk koneksi database :
>
> <img width="516" alt="Cuplikan layar 2024-03-24 121529" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/3c2b7a1f-0452-4111-94d2-cb01c22d0308">
---
> #### ERROR PDOException
> -  Selalu gunakan try-catch untuk menangkap error ketika terkoneksi ke database menggunakan PDO untuk menghindari eksekusi kode yang tidak perlu.
> 
> Contoh kode try-catch :
> 
> <img width="528" alt="Cuplikan layar 2024-03-24 121630" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/0a1c2708-ee2c-42be-ac77-0b53756553b4">
---
> #### MENUTUP KONEKSI
> -  Menutup koneksi ke database setelah selesai menggunakan PDO sangat penting untuk mencegah koneksi yang terlalu banyak.
> -  Menutup koneksi PDO dapat dilakukan dengan mengatur variabel koneksi menjadi nol setelah selesai menggunakan koneksi tersebut.
>
> Contoh kode menutup koneksi :
>
> <img width="180" alt="Cuplikan layar 2024-03-24 121659" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/a5a115c7-25ed-4002-8759-09af8e56c918">
---
> #### EXECUTE SQL
> - Perintah SQL dapat dikirim ke database menggunakan fungsi execute(sql) dalam PDO.
> - function execute(sql) bisa kita gunakan untuk semua jenis sql yang tidak membutuhkan result data, misal CREATE TABLE,INSERT,UPDATE,DELETE,ALTER TABLE, dan lain-lain
>
> Contoh kode membuat getConnection() :
>
> <img width="500" alt="Cuplikan layar 2024-03-24 121723" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/0cf975a8-9ee4-4023-a10a-1f132e7e82d4">
>
> Contoh kode membuat table customers :
>
> <img width="235" alt="Cuplikan layar 2024-03-24 122346" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/ca423cf5-57a9-46bb-b876-30dc660f4dfc">
>
> Contoh eksekusi sql menggunakan pdo :
>
> <img width="344" alt="Cuplikan layar 2024-03-24 122453" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/d2bbb92a-6a2f-4112-840e-6cb117380f1e">
---
> #### QUERY SQL
> - Untuk melakukan query SQL yang mengembalikan data, gunakan fungsi query() dalam PDO.
> - Hasil dari query dapat diiterasi menggunakan perulangan foreach, karena PDOStatement adalah turunan dari IteratorAggregate.
>
> Berikut contoh kode query sql dengan pdo :
>
> <img width="331" alt="Cuplikan layar 2024-03-24 122538" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/c2f7bf16-6434-4ee3-bcc2-aaeff9f3674c">
---
> #### PDO STATEMENT
> - Hasil dari query dapat diiterasi menggunakan perulangan foreach, karena PDOStatement adalah turunan dari IteratorAggregate.
> - Penggunaan nama kolom dalam query SQL dapat memudahkan pembacaan kode.
>
> Berikut kode foreach pdostatement :
>
> <img width="340" alt="Cuplikan layar 2024-03-24 122644" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/18de08c2-ca44-4825-9a3c-a826ef9c2820">
---
> #### SQL INJECTION
> - SQL injection adalah teknik yang berbahaya yang dapat dimanfaatkan untuk mengakses atau merusak basis data aplikasi.
> 
> Contoh kode sql injection :
>
> <img width="177" alt="Cuplikan layar 2024-03-24 122759" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/5c58aab1-37c6-47ca-991c-7c4f410c0b5b">
>
> #### Solusinya
> - Penggunaan fungsi prepare atau quote dapat membantu mencegah SQL injection dengan menghindari penggabungan string SQL secara manual.
>
> Contoh kode fungsi quote :
>
> <img width="502" alt="Cuplikan layar 2024-03-24 122835" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/51aa57bc-5499-40a2-9a3b-27505336bd08">
>
> #### SQL DENGAN PARAMETER
> - Pentingnya melakukan iterasi terhadap hasil query untuk mendapatkan data yang diinginkan.
>
> Berikut contoh kode membuat tabel admin :
>
> <img width="252" alt="Cuplikan layar 2024-03-24 123350" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/36061b8c-351b-4b70-92ba-4f90a0a418d0">
>
> Berikut contoh kode membuat sql dari input user :
>
> <img width="386" alt="Cuplikan layar 2024-03-24 123717" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/b7032cd4-a9d3-4fe6-b564-a4f6424bec97">
>
> #### PREPARE STATEMENT
> - Penggunaan prepare statement lebih aman daripada penggunaan string SQL manual karena dapat mengatasi SQL injection dengan menggunakan parameter input dari pengguna.
> - Pembuatan prepare statement penting untuk keamanan dalam SQL karena menghindari kesalahan quoting manual.
>
> Berikut kode membuat prepare statement :
>
> <img width="542" alt="Cuplikan layar 2024-03-24 124053" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/0046c266-4b9a-4a94-a87b-d836ad2a4a80">
>
> #### BINDING PARAMETER
> - Binding parameter dalam prepare statement dilakukan untuk mengisi nilai parameter dengan input dari pengguna, membuat penggunaan prepare statement lebih aman
>
> Berikut contoh kode binding parameter :
>
> <img width="540" alt="Cuplikan layar 2024-03-24 124233" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/ba7dd883-f7d4-4cf6-98a2-18cc998698df">
>
> #### BINDING PARAMETER DENGAN INDEX
> -  Disarankan untuk menggunakan prepare statement ketika membutuhkan input dari pengguna dalam pembuatan query SQL untuk mencegah SQL injection.
>
> Berikut contoh kode binding parameter dengan index :
>
> <img width="464" alt="Cuplikan layar 2024-03-24 124316" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/bbb9a5a8-90a3-4cb6-95ca-1796bf8eadc6">
>
> Berikut contoh kode binding parameter index tanpa bind :
>
> <img width="459" alt="Cuplikan layar 2024-03-24 124449" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/686d64dd-2d4a-4957-ba1f-b9dc2929b7d2">
>
> Berikut contoh kode binding parameter non query :
>
> <img width="544" alt="Cuplikan layar 2024-03-24 124553" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/85e44ac9-89e8-46f8-893a-25abbd41af9b">
---
> #### FETCH DATA
> - Fungsi fetch dalam PDO digunakan untuk mengambil satu data dari hasil query tanpa perlu melakukan iterasi manual.
> - Penggunaan fetch secara langsung bisa membuat kode lebih sederhana dan efisien daripada melakukan iterasi manual dalam mengambil data dari hasil query.
> - Jika ingin mengambil semua data dari hasil query, bisa menggunakan fetchAll untuk langsung mengonversi hasil query menjadi array tanpa perlu persiapan parameter.
>
> Berikut kode function fetch :
>
> <img width="477" alt="Cuplikan layar 2024-03-24 124713" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/b1c8a638-46f6-4bf5-84f9-2d0a5db3a53d">
>
> Berikut kode function fetchall :
>
> <img width="315" alt="Cuplikan layar 2024-03-24 124832" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/3a96a6b8-04ed-42df-9ccb-4bdb87ccaf0e">
---
> #### AUTO INCREMENT
> - Autoincrement digunakan untuk membuat ID yang naik secara otomatis. Function lastInsertId() dapat digunakan untuk mengambil ID terakhir yang di-generate secara otomatis.
>
> Berikut kode membuat table :
>
> <img width="293" alt="Cuplikan layar 2024-03-24 131523" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/354273f8-5cc8-4251-8f86-f396be67053d">
>
> Berikut kode function lastinsertid() :
>
> <img width="532" alt="Cuplikan layar 2024-03-24 131616" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/0b55ad4c-f44c-46d3-9d67-b8f2d9d09814">
---
> ### DATABASE TRANSACTION
>
> #### TRANSACTION DI PDO
> - Transaksi database merupakan fitur penting di database relasional untuk memastikan keberhasilan atau pembatalan operasi dalam aplikasi. Dalam PHP menggunakan PDO, transaksi dimulai dengan beginTransaction(), diikuti dengan commit() untuk menyimpan data, dan rollback() untuk membatalkan operasi.
>
> Berikut contoh transaction :
>
> <img width="544" alt="Cuplikan layar 2024-03-24 132312" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/39c8d767-ed4d-4da8-832a-e694214ba861">
>
> Berikut contoh rollback transaction :
>
> <img width="541" alt="Cuplikan layar 2024-03-24 132413" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/58a05e19-26c3-4cf7-8230-f6b1f4526606">
--- 
> #### REPOSITORY PATATERN
> -  Repository adalah mekanisme untuk mengelola akses dan manipulasi data dalam aplikasi, yang memisahkan logika bisnis dari akses database. Implementasi repository membantu dalam pengelolaan koneksi dan operasi database.
>
> #### ENTITY / MODEL
> - Dalam pengembangan aplikasi berbasis objek, tabel database biasanya direpresentasikan sebagai kelas model atau entity. Hal ini mempermudah dalam pengembangan dan pemeliharaan kode program dengan memisahkan logika bisnis dari akses database.
>
> Berikut contoh class model :
>
> <img width="498" alt="Cuplikan layar 2024-03-24 132518" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/b08f43e3-b3c5-4a8d-b6a9-284fb6207d35">
>
> Berikut contoh interface repository :
>
> <img width="373" alt="Cuplikan layar 2024-03-24 132635" src="https://github.com/weyndraig14/belajar-php-mysql/assets/162102805/9f2747e6-ed34-45c8-b76e-d68f2727f07d">
---
<p align="center" >
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
</p>

> - Saya tidak tau bagaimana ia menaruh kode menambah table atau insert ke dalam table dengan bantuan text editornya, jadi saya menggunakan phpmyadmin secara manual

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

>  PHP dan MySQL adalah kombinasi yang kuat dan serbaguna untuk pengembangan aplikasi web. Mereka memungkinkan pembuatan aplikasi web yang dinamis, interaktif, dan berkinerja tinggi dengan biaya yang rendah. Dengan memahami dan menguasai kedua teknologi ini, pengembang dapat membuat aplikasi web yang efisien dan efektif.




















