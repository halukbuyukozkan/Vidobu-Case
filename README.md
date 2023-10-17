# Vidobu Case Project

Laravel Breeze ile authentication işlemleri yapıldı. User seeder oluşturuldu. Person modeli için resource controller oluşturuldu. One-to-one relation kullanıldı. Validation için custom request oluşturuldu. Cinsiyet seçimi enum ile yapıldı.

Arayüz tasarımında Bootstrap kullanıldı. Kullanıcı ip adresi ve tarihi Event oluşturularak veritabanına kaydedildi. Person Factory ile veri oluşturularak pagination test edildi.

## Deployment

Kurulum aşamaları

```terminal
composer install
npm install
cp .env.example .env
```

.env örneği

```.env
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

```terminal
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
npm run dev
```

### Giriş Bilgileri

email: test@test.com

password: 12341234
