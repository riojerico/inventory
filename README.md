# INVENTORY
Sistem Informasi Pasokan Chemical &amp; Sparepart
PT. Trisakti Mustika Graphika Semarang

- import table barcode terlebih dahulu
### Berikut URL yang harus dibuat menjadi kode QRcode
```
http://localhost:8080/{DIRECTORY}/transaksi/baca_barcode.php?barcode={KODE_BARANG}
```
- contoh:
```
http://localhost:8080/lites/inventory/transaksi/baca_barcode.php?barcode=001-0317
```
- contoh hasil yang didapat setelah melakukan scan pada android
<img width="473" alt="1x" src="https://user-images.githubusercontent.com/6455760/44945193-e8e61200-ae0d-11e8-9029-dc9480155dbb.PNG">
- pada aplikasi klik tombol cari maka akan otomatis menampilkan data pada kode tersebut
<img width="661" alt="2x" src="https://user-images.githubusercontent.com/6455760/44945203-1c28a100-ae0e-11e8-9d56-1d2577b0a114.PNG">
