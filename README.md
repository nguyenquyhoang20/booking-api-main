# QuyHoang Booking API

Đây là hệ thống Booking API được tùy chỉnh và xây dựng dựa trên nền tảng framework Laravel 10/11 hiện đại, cung cấp bộ RESTful API tốc độ cao cho việc quản lý cơ sở lưu trú (khách sạn, resort) và đặt phòng trực tuyến.

## 🚀 Tính năng nổi bật
- **Authentication**: Bảo mật phiên đăng nhập và định danh qua hệ thống `laravel/sanctum`.
- **Phân quyền người dùng**: Luồng API riêng biệt cho:
  - Khách vãng lai (Public/Guest)
  - Khách thuê phòng (User)
  - Chủ cơ sở (Owner)
- **Quản lý Media**: Tích hợp upload và tối ưu hóa hình ảnh với thư viện `spatie/laravel-medialibrary`.
- **Tài liệu API tự động**: Không cần viết doc thủ công, sử dụng Scramble để build Swagger (truy cập tại `/docs/api`).
- **Data chuẩn hóa Việt Nam**: Hệ thống Seeder được tùy biến để sinh dữ liệu mẫu giả định tập trung tại điều kiện thực tế của Việt Nam.

## 🛠️ Cài đặt tự động

1. **Cài đặt PHP Dependencies:**
   ```bash
   composer install
   ```

2. **Cài đặt Node.js Dependencies:**
   ```bash
   npm install
   ```

3. **Thiết lập Môi trường:**
   Hệ thống yêu cầu các cấu hình ban đầu:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Nhớ cấu hình thông số kết nối Database trong file `.env`.*

4. **Khởi tạo Dữ liệu (Database & Seeder):**
   ```bash
   php artisan migrate --seed
   ```

5. **Chạy ứng dụng:**
   ```bash
   php artisan serve
   ```
   Hệ thống sẽ khả dụng tại: `http://127.0.0.1:8000`

## 📖 Tài liệu endpoints
Toàn bộ tài liệu chi tiết (được tự động sinh ra tử mã nguồn) có sẵn khi dự án chạy tại đường dẫn: 
👉 `http://127.0.0.1:8000/docs/api`

## 📜 Giấy phép
Dự án được bảo lưu mọi quyền (All Rights Reserved).
