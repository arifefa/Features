Feature truck = merupakan feature yang menampilkan informasi truck

database yang dibutuhkan truck
- name truck
- feature img truck
- harga
- category tujuan awal
- category tujuan akhir 

alur pengerjaan admin:
- menginput data truck ke dalam dashboard

alur pengerjaan user:
- user mengisi form tujuan awal + akhir +pilih jenis truck / pilih berdasarkan nama truck
- click button cek rute muncul popap
- isi popup : nama truck, img truck, tujuan awal n akhir + harga. ada button reset n nego
- click button nego > informasi dimodal itu akan diredirect ke wa kecuali img truck

required : 
- plugin advance custom field
- functions.php
- truck.css
- truck.js

step :
- import acf type json to wp
- add shortcode have you been created in function.php into builder