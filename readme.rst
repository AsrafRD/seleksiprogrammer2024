###################
Selamat Datang Peserta Seleksi Programmer di Sahabat Mediacom
###################

*********
Tentang Test Seleksi, test ini akan menguji pemahaman anda tentang:
*********

-  `Bahasa Program PHP`
-  `Database MySQL`
-  `Pemahaman anda mengenai GIT`
-  `Pemahaman anda mengenai Framework Code Igniter 3`


*********
Ketentuan test teknis:
*********

- Test teknis tersedia offline (bagi domisili jogja) dan online (bagi domisili jauh dari jogja).
- Waktu peserta test offline maupun online yaitu jam 09:00 s.d. 11:00 pada hari Rabu tgl 24 Juli 2024.
- Bagi peserta test online siapkan zoom di laptop. link zoom akan dikirimkan pada hari H.
- Boleh membuka tools seperti chatgpt, google, staackoverflow dan lainnya.
- Dilarang mengerjakan pada branch utama.


*********
Persiapan test teknis (offline dan online):
*********

- Siapkan environment localhost di masing2 laptop. boleh pakai xampp atau yang lain. PHP versi 7 atau 8, mysql versi 5 atau 8, apache versi 2
- Siapkan git di laptop masing-masing
- Siapkan IDE atau text editor sesuai kenyamanan masing-masing
- instruksi selanjutnya akan disampaikan ketika test

*********
Instruksi pada hari H:
*********

- Clone git@github.com:tantos/SeleksiProgrammer2024.git
- Jika sudah selesai atau waktu sudah habis harap di push dari branch anda
- Buat branch sesuai nama masing-masing. boleh nama singkat.
- Repository tersebut adalah repository codeigniter versi 3, silakan buat CRUD menggunakan mysql dengan struktur tabel sebagai berikut :
 


struktur tabel patients

- id INT
- name VARCHAR 300
- gender ENUM('L', 'P')
- address TEXT


struktur tabel patients

- id INT
- name VARCHAR 300
- clinic_name VARCHAR 300
- tanggal_daftar datetime
- tanggal_mulai_periksa datetime
- tanggal_selesai_periksa datetime
- doctor_name VARCHAR 300

