# Test WebDev YHC
## Spesifikasi yang digunakan
```
{
    "php": "8.1",
    "laravel": "10",
    "bootstrap": "4",
    "template": "jeroennoten/laravel-adminlte 3"
}
```
## Rute yang Tersedia
| Rute | Metode | Deskripsi | Bagian |
| ------ | ------ | ------ | ------ |
| / | GET | Dashboard / halaman utama | Kursus |
| /course | GET | Halaman list kursus | Kursus |
| /course/create | GET | Halaman Tambah kursus | Kursus |
| /course | POST | Simpan kursus | Kursus |
| /course/{id} | GET | Halaman detail kursus | Kursus |
| /course/{id}/edit | GET | Halaman edit kursus | Kursus |
| /course/{id} | PUT | Update kursus | Kursus |
| /course/{id} | DELETE | Hapus kursus | Kursus |
| /course/{id}/material/create | GET | Halaman Tambah Materi | Materi |
| /material/ | POST | Simpan Materi | Materi |
| /material/{id}/edit | GET | Halaman edit Materi | Materi |
| /material/{id} | PUT | Update Materi | Materi |
| /material/{id} | DELETE | Hapus Materi | Materi |

## Tampilan Halaman Website
### Dashboard
![diagram env][dashboard]
[dashboard]: public/img/webdev%20dashboard.png 'Dashboard'

### Kursus
- Halaman list kursus
![diagram env][list-kursus]
[list-kursus]: public/img/webdev%20kursus.png 'List Kursus'

- Halaman Tambah kursus
![diagram env][tambah-kursus]
[tambah-kursus]: public/img/webdev%20tambah%20kursus.png 'Tambah Kursus'

- Halaman Detail Kursus
![diagram env][tambah-kursus]
[tambah-kursus]: public/img/webdev%20tambah%20kursus.png 'Tambah Kursus'

### Materi
