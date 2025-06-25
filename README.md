# WebBanHang - Laravel Project

## Thông tin sinh viên

- **Họ tên:** Nguyễn Duy Việt  
- **Mã số sinh viên:** 23010775  

## Giới thiệu Project

**WebBanHang** là 1 dự án với công nghệ sủ dụng:
- Laravel 
- Laravel Breeze (xác thực người dùng)
- Blade template
- MySQL / Aiven Cloud SQL
- Eloquent ORM
- Middleware & Validation
---

## Sơ đồ cấu trúc (Class Diagram):
![image](https://github.com/user-attachments/assets/d2ef2a47-c86f-4eb6-a173-5e65888944dd)

## Các chức năng chính:

- Quản lý **Khách hàng (Customer)**: Thêm, sửa, xoá, tìm kiếm, phân trang.
- Quản lý **Đơn hàng (Order)**: Tạo đơn hàng từ danh sách sản phẩm & khách hàng, hiển thị chi tiết.
- Quản lý **Người dùng (User)**: Đăng ký, đăng nhập (Laravel Breeze).
- Quản lý **Sản phẩm (Product)**: Thêm/sửa/xoá sản phẩm (đang phát triển).
- Dashboard đơn giản: thống kê số lượng khách hàng, đơn hàng, sản phẩm.
- 
## Cài đặt

1. Clone project:
   git clone https://github.com/yourusername/WebBanHang.git
   cd WebBanHang
2.Cài đặt thư viện:
   composer install
   npm install && npm run dev
3.Đổi tên file .env.example thành .env
4.Tạo database và migrate:
   php artisan migrate
5.Chạy server:
  php artisan serve
## Link:
   https://github.com/yourusername/WebBanHang.git

