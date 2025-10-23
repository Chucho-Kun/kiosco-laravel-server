# FullStack Platform LARAVEL API Server
Kiosk-style order management platform with user and administrator account access and user and administrator views. Real-time product availability updates. Laravel + MySQL + Axios + Docker + Tailwindcss + Typescript - SWC - (Full-Stack Food App)

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<img width="1629" height="868" alt="Captura de Pantalla 2025-10-23 a la(s) 17 30 57" src="https://github.com/user-attachments/assets/8b3dd8f5-392b-4278-bd20-80e619d97700" />

## CORS configuration
```
sail artisan config:publish cors
sail artisan route:cache
sail artisan vendo:publish --provider="Laravel\Sanctum\SanctumServideProvider"
```
## Relating different databases
### app/Models/Pedido.php
```
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'pedido_productos')->withPivot('cantidad');
    }
}

```
