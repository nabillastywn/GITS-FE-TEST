# Internship - Problem Solving Test 

**Nama :**
Nabilla Syaharani Putri S

**Email :**
Nabillasetyawann@gmail.com

**Asal Perguruan Tinggi :**
Politeknik Negeri Semarang

## Penjelasan
algoritma yang digunakan pada soal nomor 3 (Balanced Bracket) menggunakan pendekatan stack untuk memeriksa keseimbangan tanda kurung dalam input. Algoritma ini bekerja dengan cara memproses karakter satu per satu dari input, dan setiap kali bertemu tanda kurung buka, karakter tersebut dimasukkan ke dalam stack. Ketika bertemu tanda kurung tutup, algoritma akan memeriksa apakah tanda kurung tersebut cocok dengan tanda kurung yang terakhir dimasukkan ke dalam stack. Jika cocok, tanda kurung terakhir dari stack akan dihapus. Jika tidak cocok atau tidak ada tanda kurung di dalam stack, algoritma akan mengembalikan "NO". Pada akhirnya, algoritma akan mengembalikan "YES" jika stack kosong, yang menunjukkan bahwa semua tanda kurung dalam input seimbang.

kode pada soal nomor 3 memiliki kompleksitas paling rendah untuk menyelesaikan masalah "Balance Bracket Checker." Kompleksitasnya adalah O(N), di mana N adalah panjang dari string input. Hal ini disebabkan karena setiap karakter dari input string diiterasi satu per satu menggunakan loop `for`, sehingga kompleksitasnya tergantung pada panjang string input. Kompleksitas ruangnya juga O(n), karena pada kasus terburuk, stack bisa berisi semua karakter dari input jika tanda kurungnya semuanya terbuka tanpa ada yang ditutup. Setiap karakter hanya diiterasi sekali dan setiap operasi pada stack memiliki kompleksitas konstan (O(1)).

Pada setiap iterasi, operasi yang dilakukan adalah memeriksa apakah karakter tersebut merupakan karakter pembuka (opening bracket) atau penutup (closing bracket), dan melakukan manipulasi pada stack yang berisi karakter-karakter pembuka. Jika karakter pembuka ditemukan, maka karakter tersebut akan dipush (dimasukkan) ke dalam stack. Jika karakter penutup ditemukan, maka dilakukan pengecekan apakah karakter pembuka yang terakhir dimasukkan ke dalam stack sesuai dengan pasangannya. Jika tidak sesuai, maka dikembalikan "NO" karena tidak seimbang. Jika stack kosong pada akhir iterasi, berarti semua bracket sudah seimbang dan dikembalikan "YES", jika tidak kosong, dikembalikan "NO".

contoh :
input : "{[()]}".
Algoritma akan memproses karakter satu per satu:

- Ketika bertemu "{", algoritma akan memasukkan "{" ke dalam stack.
- Ketika bertemu "[", algoritma akan memasukkan "[" ke dalam stack.
- Ketika bertemu "(", algoritma akan memasukkan "(" ke dalam stack.
- Ketika bertemu "]", algoritma akan memeriksa apakah "]" cocok dengan tanda kurung terakhir di stack, yaitu "[". Jika cocok, "[" akan dihapus dari stack.
Proses berlanjut hingga akhir input.

Pada akhirnya, stack akan kosong dan algoritma mengembalikan "YES" karena semua tanda kurung seimbang.
