
# Project PKKMB Trilogi

Kerjakan sesuai branch masing masing


## Prosedur Instalasi

Clone repo menggunakan GitHub Cli

```bash
gh repo clone leviathan712/pkkmb-trilogi
```

Lalu ikuti langkah berikut

```bash
composer install
```
```bash
cp .env.example .env
```
```bash
php artisan key:generate
```
```bash
php artisan migrate
```
```bash
npm install
```

## Prosedur Menjalankan Program

Jalankan pada 2 git bash untuk menjalankan laravel dan npm dev

```bash
php artisan serve
```
```bash
npm run dev
```

## Prosedur Mengupdate Repo Berdasarkan Branch

untuk melihat daftar branch
```bash
git branch -a
```


pindah branch
```bash
git checkout [name_of_your_new_branch]
```

untuk menambah perubahan
```bash
git add .
```

commit
```bash
git commit -m "Sec Commit"
```

lalu push
```bash
git push -u origin [name_of_your_new_branch]
```



    