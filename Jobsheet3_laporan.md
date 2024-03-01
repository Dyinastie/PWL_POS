# Dyinastie Marchelina Puspitawening

# 2241720166

# 2F - 09

## Pertanyaan

1.  Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?

    APP_KEY pada file setting .env Laravel berfungsi sebagai kunci untuk enkripsi data yang sensitif, seperti session cookies dan tokens. Ini penting untuk keamanan aplikasi.

2.  Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?

    Untuk men-generate nilai untuk APP_KEY, menggunakan perintah `"php artisan key:generate"`di terminal. Ini akan secara otomatis menghasilkan nilai acak untuk APP_KEY dan menyimpannya dalam file .env.

3.  Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? dan untuk apa saja file migrasi tersebut?

    Secara default, Laravel memiliki 4 file migrasi. Yaitu : `create_users_table.php` untuk membuat struktur tabel terkait pengguna. `create_password_resets_table.php` untuk reset kata sandi.`create_failed_jobs_table.php` untuk menyimpan informasi tentang jobs yang gagal dieksekusi oleh Laravel. `create_personal_access_tokens_table.php` untuk menyimpan token akses yang diberikan kepada pengguna.

4.  Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output dari fungsi tersebut?

    Kode `$table->timestamps();` dalam file migrasi digunakan untuk menambahkan dua kolom, yaitu `created_at` dan `updated_at`, yang secara otomatis diisi dengan tanggal dan waktu ketika baris tersebut dibuat dan diperbarui.

5.  Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari fungsi tersebut?

    Fungsi `$table->id();` adalah menghasilkan kolom dengan tipe data big integer yang bertindak sebagai primary key dan secara otomatis bertambah nilainya.

6.  Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); dengan menggunakan $table->id('level_id'); ?

    Jika menggunakan `$table->id();` maka nama kolomnya akan secara otomatis menjadi `id`, sedangkan apabila menggunakan `$table->id('level_id')` nama kolomnya akan bernama `level_id`.

7.  Pada migration, Fungsi ->unique() digunakan untuk apa?

    Fungsi `->unique()` digunakan untuk menetapkan kolom sebagai kolom yang nilainya harus unik di seluruh tabel, sehingga tidak ada dua baris dengan nilai yang sama dalam kolom tersebut.

8.  Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id pada tabel m_level menggunakan $tabel->id('level_id') ?

    Kolom `level_id` pada tabel `m_user` menggunakan `$table->unsignedBigInteger('level_id')` karena itu adalah foreign key yang merujuk ke primary key di tabel `m_level`, sedangkan kolom `level_id` pada tabel `m_level` menggunakan `$table->id('level_id')` karena itu adalah primary key dari tabel tersebut.

9.  Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode program Hash::make('1234');?

    Tujuan dari Class Hash adalah untuk melakukan hashing pada data, seperti password. Kode program `Hash::make('1234');` digunakan untuk menghasilkan hash dari string '1234', yang akan digunakan sebagai password, sehingga di dalam database password tidak dismpan dalam bentuk teks biasa.

10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa kegunaan dari tanda tanya (?) tersebut?

    Tanda tanya (?) pada query builder digunakan untuk menandai placeholder untuk nilai yang akan di-bind ke dalam query. Ini membantu dalam mencegah serangan SQL injection dan mempermudah dalam menghindari kesalahan sintaksis.

11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table =‘m_user’; dan protected $primaryKey = ‘user_id’; ?

    `protected $table = ‘m_user’;` digunakan untuk menentukan nama tabel yang dipetakan ke model. Dan
    `protected $primaryKey = ‘user_id’;` digunakan untuk menentukan nama kolom primary key.

12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan!

    Menurut saya, lebih mudah menggunakan Query Builder dalam melakukan CRUD karena sintaks yang digunakan mirip dengan SQL standar, sehingga mudah dibaca, dipahami, dan dipelajari.
