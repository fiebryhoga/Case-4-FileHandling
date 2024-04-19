# Program PHP untuk Mengganti Kata dalam File Teks

## Deskripsi
Program PHP ini bertujuan untuk membaca konten dalam sebuah file teks, mengganti satu kata dengan kata lainnya, dan menyimpannya dalam file teks baru.

## Langkah-langkah untuk Menjalankan Program

### Persiapan Lingkungan
Pastikan Anda memiliki lingkungan pengembangan PHP yang terpasang, seperti XAMPP atau server PHP lainnya.

Clone repository ini ke dalam direktori `htdocs` di dalam instalasi XAMPP atau direktori root server web lainnya dengan masuk ke terminal

1. Buka terminal pada sistem Anda.

2. Masuk ke dalam direktori `htdocs` pada instalasi XAMPP dengan menjalankan perintah berikut, contoh:
   ```bash
   cd C:/xampp/htdocs
   ```
3. kemudian clone dengan perintah berikut
    ```bash
    git clone https://github.com/fiebryhoga/Case-4-FileHandling.git
    ```
### Menjalankan Program
Buka browser web dan arahkan ke URL program PHP ini. 
```bash
http://localhost/case-4-FileHandling/convert.php?infile=sushi.txt&outfile=ramen.txt&from=sushi&to=ramen
```

Pastikan untuk nama `repository tujuan url` dengan nama `folder` tempat Anda menyimpan file PHP ini.

Parameter yang diperlukan adalah:

- `infile`: Nama file teks input yang berisi konten yang akan diubah.
- `outfile`: Nama file teks output yang akan disimpan setelah penggantian kata dilakukan.
- `from`: Kata yang akan diganti.
- `to`: Kata pengganti yang baru.

### Hasil
Setelah menjalankan program, periksa direktori tempat Anda menyimpan file untuk melihat apakah file `ramen.txt` telah dibuat dengan konten yang telah diubah.

Dengan mengikuti langkah-langkah di atas, Anda dapat menjalankan program PHP ini untuk mengganti kata dalam file teks dan menyimpannya dalam file teks baru.
