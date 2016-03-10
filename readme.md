# Laravel 5.2 Twitter Bootstrap 3 Starter Site
  Mục đích của project là tạo ra một phiên bản của project mà người dùng có
  thể sử dụng như điểm bắt đầu dễ dàng hơn cho project của mình.

  Ngoài ra có thể sử dụng project như một nơi thử các package hay giới thiệu
  cho cộng đồng.

## Featue List:
* Đăng ký / Login bằng email
* Login thông qua tài khoản mạng xã hội
* Quản lý User, Profile của User
...

## Package list:
* Laravel Homestead : gói cài đặt sẵn môi trường phát triển cho Laravel
* barryvdh/laravel-ide-helper: generate file giúp các IDE có thể autocomplete các method của Laravel
* spatie/laravel-tail: Tail log của ứng dụng trên các môi trường 1 cách thuận tiện
* "fabpot/php-cs-fixer":  PSR-fixer tool
* laravel/socialite: Oauth với Faebook, Twitter, Google, Linkedin, Github, Bitbucket
* "codesleeve/laravel-stapler": upload ảnh
* intervention/image: manipulate ảnh

## Cài đặt
* Clone source code project về local
* Cài đặt các package của project bằng lệnh: `composer install`
* Generate homestead file: `vendor/bin/homestead make`
* Trong file Homestead.yaml sẽ có thông tin của ip virtual domain của máy ảo homestead. Thông thường ip là `192.168.10.10`
và tên domain là `homestead.app` . thêm virtual domain trỏ vào ip trên vào file hosts của máy.
* Copy nội dung của file  `.env.example` sang file `.env` :  `cp .env.example .env`
* Generate key cho ứng dụng bằng lệnh `php artisan key:generate`. Copy chuỗi đó vào biến `APP_KEY` trong file .env
* Bật máy ảo vagrant : `vagrant up`
* Kiểm tra ứng dụng đã hoạt động hay chưa bằng cách dùng browser truy cập vào `http://homestead.app`
* Để login thử vào ứng dụng, cần chạy migrate để tạo schema cho ứng dụng: Login vào máy ảo vagrant bằng lệnh `vagrant ssh`,
cd vào project folder và chạy lệnh  `php artisan migrate`

## Official Documentation

Tài liệu hướng dẫn sử dụng sẽ được tạo trong [Wiki](https://github.com/chungth/Laravel-5.2-Bootstrap3-starter-site/wiki) của Project


## Contributing

* Bạn có thể giới thiệu package mới hoặc feature mới bằng cách tạo Pull-Request
* Trong trường hợp Starter Site có lỗi xảy ra, đừng ngần ngại tạo issue
* Nếu bạn muốn đóng góp cho project mà chưa có ý tưởng gì có thể bắt đầu bằng cách tự assign mình vào
các issue, bắt đầu fix và tạo pull-request

## License

[MIT license](http://opensource.org/licenses/MIT)
