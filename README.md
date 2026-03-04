# Booking API - Hệ Thống Đặt Phòng Cơ Sở Lưu Trú

Hệ thống Booking API được xây dựng chuyên sâu dựa trên framework **Laravel hiện đại**, cung cấp bộ RESTful API chuẩn mực, hiệu suất cao phục vụ cho tính năng quản lý cơ sở lưu trú (khách sạn, homestay, resort) và đặt lịch phòng (Booking) đa nền tảng.

##  Tính năng nổi bật

- **Authentication toàn diện**: Quản lý định danh an toàn qua `laravel/sanctum` (Token-based).
- **Phân luồng đặc quyền**: API phục vụ với kiến trúc phân lớp tự động cho từng nhóm đối tượng:
  - Khách vãng lai (Public/Guest): Tìm kiếm, xem chi tiết phòng.
  - Khách hàng (User): Theo dõi lịch sử và cập nhật trạng thái Booking.
  - Chủ cơ sở (Owner): Quản trị Property, Apartment và hình ảnh tương ứng.
- **Tự động Document API (Swagger)**: Tích hợp thư viện Scramble tự động đọc mã nguồn và build ra UI API Docs chuẩn hoá (truy cập tại `/docs/api`).
- **Media Engine mạnh mẽ**: Áp dụng thư viện `spatie/laravel-medialibrary` hỗ trợ upload hình ảnh phòng, phân loại Collection, tối ưu dung lượng và thứ tự.
- **Data mồi chuẩn Việt Nam**: Database Seeder tập trung giả lập các chuỗi khách sạn/địa danh sát với môi trường Việt Nam (Đà Lạt, Hà Nội, v.v).

##  Yêu cầu kỹ thuật
- PHP 8.3+
- Composer
- MySQL / PostgreSQL
- Node.js & npm (cho công cụ build Vite Frontend nếu cần)

##  Hướng dẫn khởi chạy

Clone cấu trúc dự án từ GitHub:
```bash
git clone https://github.com/nguyenquyhoang20/booking-api-main.git
cd booking-api-main
```

1. **Cài đặt thư viện phụ thuộc:**
   ```bash
   composer install
   npm install && npm run build
   ```

2. **Thiết lập biến Môi trường:**
   Hệ thống yêu cầu Key để khởi động:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *(Hãy cập nhật cấu hình `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` trong `.env`)*

3. **Tạo lập Dữ liệu (Migration & Seeding):**
   ```bash
   php artisan migrate:fresh --seed
   ```

4. **Kích hoạt System Testing (Tuỳ chọn):**
   Hệ thống dùng `Pest` cho Unit & Feature Testing.
   ```bash
   php artisan test
   ```

5. **Chạy ứng dụng:**
   ```bash
   php artisan serve
   ```

##  Xem trực tiếp Endpoints
Khi Laravel Server lắng nghe trên cổng 8000, toàn bộ thông số Request / Response được tự động cập nhật tại:
 **[http://127.0.0.1:8000/docs/api](http://127.0.0.1:8000/docs/api)**

##  License
Dự án được bảo lưu mọi quyền (All Rights Reserved).
