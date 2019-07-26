# lay-tin-tuc-tu-dong
Website lấy tin tức tự động - sử dụng ngôn ngữ lập trình PHP

## Hướng dẫn cài đặt
1. Cài đặt XAMPP
2. Cài đặt Git SCM (Git Bash)
3. Cài đặt Composer
4. Đặt thư mục `my_laravel` vào trong thư mục `htdocs` của XAMPP
5. Mở XAMPP Control Panel và Start Apache, MySQL (chạy với quyền Administrator, tích vào nút trước 2 mục này để cài đặt)
6. Mở trình duyệt, truy cập vào http://localhost/phpMyAdmin
7. Tạo một CSDL tên myDb
8. Chọn database myDb > chọn tab Import > chọn tệp myDb.sql > nhấn nút Go để import dữ liệu
9. Vào thư mục my_laravel, đổi tên file `.env.example` thành `.env` và mở file này lên bằng Notepad
10. Chỉnh như bên dưới, rồi lưu lại
```
DB_DATABASE=myDb
DB_USERNAME=root
DB_PASSWORD=
```
11. Chuột phải chọn `Git Bash Here`, rồi gõ `composer install` và chờ composer cài đặt các thư viện cần thiết
12. Rồi gõ lần lượt từng dòng lệnh bên dưới
```
php artisan key:generate
php artisan db:seed
php artisan serve
```
13. Nếu thành công có thể truy cập vào trang web bằng đường dẫn http://127.0.0.1:8000

## Yêu cầu
1. Commit code php theo định dạng:
> PHP[-Tên chức năng (nếu có)]: nội dung commit

Ví dụ:
> PHP: sửa lỗi chính tả

> PHP-Lấy tin từ RSS: fix lỗi lấy tin từ RSS

2. Commit về UI theo định dạng:
> UI: nội dung commit

Ví dụ:
> UI: cập nhật UI

> UI: sửa lỗi không hiển thị nút tìm kiếm

3. Khi thêm chức năng hay sửa lỗi thì phải tạo 1 branch mới dựa trên branch master, sau khi làm xong pm Bảo để test, Bảo test xong sẽ merge vào branch master.

4. Có khó khăn gì trao đổi trong nhóm.

5. Khi tạo 1 nhánh cần đặt tên nhánh theo định dạng:
> tênNgườiThựcHiện/tên-chức-năng-hoặc-công việc

Ví dụ:
> Nhi/php-lay-tin-tu-dong

> Long/fix-UI

> Tuan/test-website

> Nhan/bao-cao

Lưu ý: tên người thực hiện phải giữ nguyên trong suốt quá trình làm không thay đổi
Ví dụ:
> Nhi/php-dang-nhap

Không được thay đổi thành
> ~~HuuNhi/php-dang-xuat~~

## Bảng phân công
MSSV | Tên thành viên | Công việc | Tiến độ |
| --- | --- | --- | --- |
1551010060 | Lê Tuấn Long | Thiết kế giao diện website | 100%
1551010092 | Lê Hữu Nhị | Xây dựng API<br/>Xử lý RSS | 100%
1551010142 | Nguyễn Anh Tuấn | Test trang web | 100%
1551010086 | Lê Thành Nhân | Viết báo cáo | 100%
1551010009 | Lê Hoàng Quốc Bảo | Kiểm định chất lượng code<br/>Test trang web<br/>Phân công việc | 100%
