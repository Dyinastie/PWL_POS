# Dyinastie Marchelina Puspitawening

# 2241720166

# 2F - 09

## Jobsheet 6

### Praktikum 1 - Template Form

1. Template AdminLTE pada projek PWL_2024

    Commit pada bagian praktikum ini dilakukan pada projek PWL_2024 yang dapat diakses pada : 
    https://github.com/Dyinastie/PWL_2024

    <img src = foto/JS6_Praktikum1_1.png>

2. Membuat form General Elements pada dashboard

    Pada dashboard ditampilkan template pengisisan form.

    <img src = foto/JS6_Praktikum1_2.png>


### Praktikum 2 - Validasi Pada Server

1. Tulis perbedaan penggunaan validate dengan validateWithBag!

    Validate:

    - Digunakan untuk memvalidasi nilai individual dalam sebuah form field.
    - Biasanya digunakan untuk:
        - Memastikan nilai tidak kosong.
        - Memastikan nilai memiliki format yang benar (misalnya, email, nomor telepon).
        - Memastikan nilai berada dalam rentang tertentu.

    ValidateWithBag:

    - Digunakan untuk memvalidasi sekumpulan nilai dalam sebuah form.
    - Biasanya digunakan untuk:
        - Memastikan setidaknya satu nilai dipilih dari sekumpulan pilihan.
        - Memastikan semua nilai dalam sekumpulan pilihan valid.

2. Aturan `bail`

    <img src = foto/JS6_Praktikum2_1_1.png>
    <img src = foto/JS6_Praktikum2_1_2.png>

3. `$errors->any()`

    <img src = foto/JS6_Praktikum2_1.png>
    <img src = foto/JS6_Praktikum2_2.png>

4. `@error('kode_kategori')`

    <img src = foto/JS6_Praktikum2_3.png>

    Atau dengan pesan kesalahan lainnya.

    <img src = foto/JS6_Praktikum2_4.png>

    <img src = foto/JS6_Praktikum2_5.png>


### Praktikum 3 - Form Request Validation

1. Validasi dengan `StorePostRequest`

    <img src = foto/JS6_Praktikum3_1.png>
    <img src = foto/JS6_Praktikum3_2.png>


### Praktikum 4 - CRUD

1. Tampilan `/m_user`

    <img src = foto/JS6_Praktikum4_1.png>

2. Input data

    - Form input data
        
        <img src = foto/JS6_Praktikum4_2.png>

    - Data berhasil diinputkan

        <img src = foto/JS6_Praktikum4_3.png>

    - Baris data baru dalam tabel

        <img src = foto/JS6_Praktikum4_4.png>

3. Show data
    
    <img src = foto/JS6_Praktikum4_5.png>

4. Edit data

    - Form edit data

        <img src = foto/JS6_Praktikum4_6.png>

    - Mengedit data

        <img src = foto/JS6_Praktikum4_7.png>
    
    - Data berhasil diedit

        <img src = foto/JS6_Praktikum4_8.png>

    - Baris data yang telah diedit pada tabel

        <img src = foto/JS6_Praktikum4_9.png>

4. Menghapus data

    - Konfirmasi penghapusan data

        <img src = foto/JS6_Praktikum4_10.png>
    
    - Data berhasil dihapus

        <img src = foto/JS6_Praktikum4_11.png>


## Tugas Praktikum

1. Coba tampilkan level_id pada halaman web tersebut dimana field ini merupakan foreign key

    `level_id` berhasil ditampilkan

    <img src = foto/JS6_Praktikum5_1.png>

2. Modifikasi dengan tema/ template kesukaan Anda
    
    Baik, sudah menggunakan template.

3. Apa fungsi $request->validate, $error dan alert yang ada pada halaman CRUD tersebut?

    - $request->validate:

        Fungsi ini digunakan untuk memvalidasi input data yang dikirimkan melalui formulir. Fungsi ini menerima beberapa parameter, yaitu:
        - Nama field: Nama field yang ingin divalidasi.
        - Rules: Aturan validasi yang ingin diterapkan.  Aturan validasi dapat berupa:
            - required: Memastikan field tidak kosong.
            - email: Memastikan field berisi alamat email yang valid.
            - numeric: Memastikan field berisi angka.
            - min: Memastikan nilai field minimal sama dengan nilai yang ditentukan.
            - max: Memastikan nilai field maksimal sama dengan nilai yang ditentukan.

    - $error:

        Variable ini berisi pesan error yang dihasilkan dari proses validasi. Pesan error ini dapat diakses dan ditampilkan kepada pengguna.

    - alert:

        Fungsi ini digunakan untuk menampilkan pesan kepada pengguna. Fungsi ini menerima dua parameter, yaitu:
        - Tipe pesan: Tipe pesan dapat berupa success, error, warning, atau info.
        - Message (Pesan): Pesan yang ingin ditampilkan kepada pengguna.

    
    
    