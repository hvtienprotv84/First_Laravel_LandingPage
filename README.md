<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# First Laravel LandingPage - Trang Laravel Đầu Tiên
- Laravel (Framework của PHP)
- SQLite (Không dùng MySQL vì chạy dự án đầu tiên và chỉ thiết kế về Frontend của LandingPage)

# Tạo Dự Án
- Bước 1: mở CMD - Command Prompt
- Bước 2: `composer create-project laravel/laravel laravel_landingpage` - "laravel_landingpage" là tên của dự án (Project)
- Bước 3: Mở Visual Studio Code (VSCode) để mở nguyên thư mục (Folder) dự án của "laravel_landingpage"
- Bước 4: `php artisan serve` - Để chạy dự án (Project) với port: `http://127.0.0.1:8000/`

## **Trường Hợp 2:**
- khi chạy dự án ở Bước 4 và ở port: `http://127.0.0.1:8000/` bị lỗi
- Thông Báo Lỗi: **could not find driver (Connection: sqlite, SQL: PRAGMA foreign_keys = ON;)**
- thì chạy lệnh `php artisan migrate` để project update lại sqlite
- và chạy lại dự án với lệnh `php artisan serve` để chạy lại dự án - OK

# RUN
- `composer install` - lệnh này dùng để nếu bạn clone project từ github về thì dùng lệnh này.(còn nếu bạn build project từ đầu như Bước 2 của #Tạo Dự Án thì không cần dùng lệnh này)
- `php artisan serve` - Để chạy dự án (Project)
