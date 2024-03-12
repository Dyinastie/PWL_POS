# Dyinastie Marhelina Puspitawening
# 2241720166
# 2F

## Praktikum 1

1. Menambahkan $fillable pada `UserModel`

    $data baru yang diinputkan akan ditampilkan di browser dan tersimpan di database.

    <img src = foto/JS4_Praktikum1_1.png>

2. Menghapus `password` dari $fillable

    Browser akan menampilkan pesan error, karena penambahan $data baru memiliki value dari `password` sedangkan `UserModel` tidak memiliki variabel untuk value ini, jadi browser akan menampilkan pesan error berikut dan $data baru ditak akan masuk ke dalam database.

    <img src = foto/JS4_Praktikum1_2.png>

## Praktikum 2

### Praktikum 2.1 - Retrieving Single Models

1. `find(1)`

    Ini akan menampilkan data dari tabel user dengan `user_id` = 1.

    <img src = foto/JS4_Praktikum2_1.png>

2. `where(level_id, 1)->first()`

    Ini akan menampilkan data dari tabel user dengan `level_id` = 1.

    <img src = foto/JS4_Praktikum2_2.png>

3. `$user = UserModel::firstWhere('level_id', 1)`

    Ini sama seperti sebelumnya, yaitu menampilkan data dari tabel user dengan `level_id` = 1.

    <img src = foto/JS4_Praktikum2_3.png>

4. `$user = UserModel::findOr(1, ['username', 'nama'], function () { abort(404); });`


    Ini akan menampilkan data dari tabel user dengan `user_id` = 1. Jika hasilnya ditemukan maka tampilan akan seperti berikut, yaitu hanya menampilkan hasil dari field `username` dan `nama` saja.

    <img src = foto/JS4_Praktikum2_4.png>

5. `$user = UserModel::findOr(20, ['username', 'nama'], function () { abort(404); });`

    
    Ini sama seperti kode sebelumnya, namun mencari `user_id` = 20. Karena hasil tidak ditemukan maka tampilannya akan seperti berikut.

    <img src = foto/JS4_Praktikum2_5.png>


### Praktikum 2.2 - Not Found Exceptions

1. `$user = UserModel::findOrFail(1);`

    Ini akan menampilkan data dengan `user_id` = 1. Jika data ditemukan maka hasilnya akan ditampilkan di browser. Jika tidak ditemukan, maka akan menghasilkan halaman 404 (Not Found) sebagai respons.

    <img src = foto/JS4_Praktikum2_6.png>

2. `$user = UserModel::where('username', 'manager9')->firstOrFail();`

    Kode ini sama seperti sebelumnya, namun dikarenakan data dengan `username` = `manager9` tidak ditemukan, maka tampilannya akan seperti berikut.

    <img src = foto/JS4_Praktikum2_7.png>


### Praktikum 2.3 - Retreiving Aggregates

1. `$user = UserModel::where('level_id', 2)->count();`

    Kode ini akan menghitung jumlah pengguna yang memiliki `level_id` = 2 dalam tabel yang sesuai.

    <img src = foto/JS4_Praktikum2_8_.png>

2. Tampilan view `count` di atas.

    <img src = foto/JS4_Praktikum2_9.png>


### Praktikum 2.4 - Retreiving or Creating Models

1. `$user = UserModel::firstOrCreate`

    `firstOrCreate` ini pertama kali akan mencoba menemukan data yang sesuai dengan kriteria di dalamnya pada database. Jika data ditemukan maka akan ditampilkan di browser, namun, jika data tidak ditemukan maka akan membuta data baru (create) ke dalam database terlebih dahulu kemudian hasilnya akan langsung dimunculkan di browser.
    Dalam kasus ini adalah mencari `'username' => 'manager'` dan `'nama' => 'Manager',`, karena data terssebut ditemukan (ada), maka tampilannya seerti berikut.

    <img src = foto/JS4_Praktikum2_10.png>

2. `$user = UserModel::firstOrCreate`

    Kode ini seperti kode sebelumnya. Dalam kasus ini adalah mencoba menemukan `'username' => 'manager22','nama' => 'Manager Dua Dua','password' => Hash::make('12345'),'level_id' => 2,`. Karena tidak ditemukan maka akan membuat data baru (create) ke database dahulu seperti berikut.

    <img src = foto/JS4_Praktikum2_12.png>

    Kemudian hasilnya akan ditampilkan di browser seperti berikut. 

    <img src = foto/JS4_Praktikum2_11.png>

3. `$user = UserModel::firstOrNew`

    `firstOrNew`seperti `firstOrCreate`, akan mencoba menemukan/mengambil record/data dalam database yang cocok dengan atribut yang diberikan. Namun, jika data tidak ditemukan, data akan disiapkan untuk di-insert-kan ke database. Dalam kasus ini adalah mencari data `'username' => 'manager'` dan `'nama' => 'Manager',`, karena data ditemukan maka akan ditampilkan seperti berikut.
    
    <img src = foto/JS4_Praktikum2_13.png>

4. `$user = UserModel::firstOrNew`

    Dalam kasus ini adlah mencari  `'username' => 'manager33','nama' => 'Manager Tiga Tiga','password' => Hash::make('12345'),'level_id' => 2,`, namun karena hasilnya tidak ditemukan maka pada tampilan browser tetap memunculkan data yang dicari seperti berikut.

    <img src = foto/JS4_Praktikum2_14.png>

    Namun data ini masih belum masuk ke dalam database. 

    <img src = foto/JS4_Praktikum2_15.png>

5. `$user->save();`

    Ini adalah kode untuk menyimpan data yang siap di-insert-kan ke dalam database. Sehingga tampilannya akan seperti berikut.

    <img src = foto/JS4_Praktikum2_16.png>
    <img src = foto/JS4_Praktikum2_17.png>


### Praktikum 2.5 - Attribute Changes

1. `isDirty()`

    Kode ini digunakan untuk memeriksa apakah atribut tertentu pada model telah diubah sejak objek model dibuat atau disimpan. Jika ada perubahan pada atribut yang diberikan, metode ini akan mengembalikan true, dan false sebaliknya. `isClean()` adalah kebalikan dari `isDirty();` itu mengembalikan true jika tidak ada perubahan yang dibuat pada model.

    <img src = foto/JS4_Praktikum2_18_.png>

    Dikarenakan terdapat metode `save()`, maka data baru tersebut akan disimpan dalam database.

    <img src = foto/JS4_Praktikum2_19.png>

2. `wasChanged()`

    Kode ini digunakan untuk memeriksa apakah atribut tertentu telah diubah sejak objek model dibuat atau disimpan terakhir kali. Jika ada perubahan pada atribut yang diberikan, metode ini akan mengembalikan true, dan false sebaliknya.

    <img src = foto/JS4_Praktikum2_20_.png>

    Dikarenakan terdapat metode `save()`, maka data baru tersebut akan disimpan dalam database.

    <img src = foto/JS4_Praktikum2_21.png>


### Praktikum 2.6 - CRUD

1. Menampilkan data user

    <img src = foto/JS4_Praktikum2_22.png>

2. Membuat form `+ Tambah User`

    <img src = foto/JS4_Praktikum2_23.png>

3. Menambahkan data dan tersimpan dalam database

    <img src = foto/JS4_Praktikum2_24.png>

    Hasil di browser setelah ditambahkan data.

    <img src = foto/JS4_Praktikum2_25.png>

    Data baru dalam database.

    <img src = foto/JS4_Praktikum2_26.png>

4. Membuat form `Ubah`

    <img src = foto/JS4_Praktikum2_27.png>

5. Mengubah data 

    <img src = foto/JS4_Praktikum2_28.png>

    Hasil di browser setelah diubah data.

    <img src = foto/JS4_Praktikum2_29.png>

    Data baru dalam database.

    <img src = foto/JS4_Praktikum2_30.png>

6. Menghapus data dengan `Hapus`

    Sebelum data terakhir di hapus.

    <img src = foto/JS4_Praktikum2_31.png>

    Setelah data terakhir di hapus.

    <img src = foto/JS4_Praktikum2_32.png>

    Data dalam databse juga telah hilang.

    <img src = foto/JS4_Praktikum2_34.png>


### Praktikum 2.7 - Relationships

1. Membuat `LevelModel`

    Model yang akan dihubungkan dengan relasi dari model `UserModel`. Metode ini mengembalikan hasil dari panggilan `belongsTo()`, yang menunjukkan bahwa setiap objek pengguna (UserModel) "mengikuti" (belongs to) atau mempunyai `hasMany` hubungan satu objek tingkat (LevelModel) yang diberi nama `level` sebagai nama relasinya.

    <img src = foto/JS4_Praktikum2_35.png>

    Hasilnya akan seperti berikut.

    <img src = foto/JS4_Praktikum2_36.png>

    Hal di atas akan error, karena dalam `LevelModel` tidak didefinisikan akan menampilkan tabel apa, sehingga dalam `levelModel` sebaiknya didefinisikan dahulu seperti berikut.

    <img src = foto/JS4_Praktikum2_37.png>

    Maka hasilnya akan seperti berikut.

    <img src = foto/JS4_Praktikum2_38_.png>
