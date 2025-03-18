
## **Hashmicro-test**  
Aplikasi berbasis web yang memiliki 2 menu berdasarkan studikasus pada soal test (CRUD dan Pilih kata). Dikembangkan menggunakan **Laravel**, **JavaScript**, dan **Bootstrap**.
![Dashboard](./public/images/Dashboard2.png)

---

## **Fitur Utama:**
- ⚡ **Menu Crud Transaksi dan Produk**
- 🎮 **Pencocokan Huruf Berdasarkan Input**

---

## **Tampilan Antarmuka:**
### **1. Menu Studikasus 1 (CRUD):**
![Halaman Utama Studikasus 1](./public/images/Crud1.png)
![Halaman Detail Transaksi](./public/images/Crud2.png)

### **2. Menu 2 (Pilih Kata):**
![Halaman Utama Studikasus 2](./public/images/Case2.png)

---

## **Teknologi yang Digunakan:**
- **Laravel** - Framework PHP untuk backend.
- **JavaScript (JQuery)** - Untuk interaksi front-end.
- **Bootstrap** - Desain responsif dan modern.
- **MySQL** - Database penyimpanan data CRUD.

---

## **Instalasi:**
1. **Clone Repository:**
   ```sh
   git clone https://github.com/Dikar15/hash-test.git
   cd hash-test
   ```

2. **Install Dependencies:**
   ```sh
   composer install
   npm install
   ```

3. **Copy .env File dan Generate Key:**
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi Database:**
   Sesuaikan konfigurasi database di `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=username
   DB_PASSWORD=password
   ```

5. **Migrasi dan Seed Database:**
   ```sh
   php artisan migrate --seed
   ```

6. **Jalankan Aplikasi:**
   ```sh
   php artisan serve
   npm run dev
   ```

---

## **Pengembang:**
- Nama: Dika Ramdani
- Email: dikar151200@gmail.com
- GitHub: https://github.com/Dikar15

