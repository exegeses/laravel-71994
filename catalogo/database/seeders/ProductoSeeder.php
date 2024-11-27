<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::insert(
            [
                [
                    'prdNombre'=>'Oppo A78 Dual-SIM 128GB',
                    'prdPrecio'=>200,
                    'idMarca'=>2,
                    'idCategoria'=>1,
                    'prdDescripcion'=>'Smartphone Android con pantalla HD+ de 6.56 pulgadas. 8GB de RAM y 128GB de almacenamiento interno. Cámara trasera dual de 50MP. Cámara selfie es de 8MP. Batería de 5000 mAh con soporte para carga rápida de 33W.',
                    'prdImagen'=>'Oppo-A78.png',
                    'prdActivo'=>1
                ],
                [
                    'prdNombre'=>'iPhone 15 Pro',
                    'prdPrecio'=>1000,
                    'idMarca'=>1,
                    'idCategoria'=>1,
                    'prdDescripcion'=>'Apple iPhone 15 Pro con chasis fabricado en titanio y puerto USB-C. Pantalla OLED LTPO de 6.1 pulgadas y triple cámara posteriorde 48MP. Cámara frontal de 12MP con sensores para Face ID. Batería de carga rápida de 15W.',
                    'prdImagen'=>'iPhone-15-pro.png',
                    'prdActivo'=>1
                ],
                [
                    'prdNombre'=>'HomePod (2nd gen)',
                    'prdPrecio'=>250,
                    'idMarca'=>1,
                    'idCategoria'=>2,
                    'prdDescripcion'=>'El HomePod es un altavoz de alta fidelidad que combina sonido inmersivo, asistente personal y control de hogar inteligente. Conectividad Bluetooth y Wifi via Apple Music',
                    'prdImagen'=>'homepod-2.png',
                    'prdActivo'=>1
                ],
                [
                    'prdNombre'=>'Marshall Acton III',
                    'prdPrecio'=>300,
                    'idMarca'=>3,
                    'idCategoria'=>2,
                    'prdDescripcion'=>'El altavoz bluetooth Acton III Cuenta con Dynamic Loudness, que ajusta el equilibrio tonal del sonido para garantizar que su música suene brillante en todos los volúmenes. 30 Watts de potencia',
                    'prdImagen'=>'marshall-acton-iii.png',
                    'prdActivo'=>1
                ],
                [
                    'prdNombre'=>'Aspiradora Robot iRobot Roomba j7+',
                    'prdPrecio'=>900,
                    'idMarca'=>4,
                    'idCategoria'=>3,
                    'prdDescripcion'=>'Robot de limpieza Roomba J7+ con sistema de limpieza superior de tres fases y dos rodillos de silicona. Tecnología de trazado de mapas inteligente Imprint™ que aprende, crea mapas y se adapta a cada habitación.',
                    'prdImagen'=>'roomba-j7.png',
                    'prdActivo'=>1
                ],
                [
                    'prdNombre'=>'Xiaomi TV Q2',
                    'prdPrecio'=>560,
                    'idMarca'=>5,
                    'idCategoria'=>4,
                    'prdDescripcion'=>'Smart TV con panel QLED Quantum Dot Display de 55 pulgadas y resolución 4K UHD. Sonido Dolby VisionTM IQ y Dolby Atmos. Sistema operativo Google TV. 3 puertos HDMI 2.0, un puerto HDMI 2.1 eARC a 120 Hz, 2 USB 2.0, Wi-Fi 802.11, Bluetooth 5.0 y entrada de audio óptica',
                    'prdImagen'=>'xiaomi-q2.jpg',
                    'prdActivo'=>1
                ],
                [
                    'prdNombre'=>'Samsung TV Crystal UHD 2023',
                    'prdPrecio'=>650,
                    'idMarca'=>6,
                    'idCategoria'=>4,
                    'prdDescripcion'=>'Smart TV con panel LED de 65 pulgadas con resolución 4K, tasa de 50 Hz y retroiluminación LED. TizenOS integra altavoces de 20 W compatibles con Dolby Atmos. 3 puertos HDMI, 2 USB y salida óptica de audio, WiFi y Bluetooth.',
                    'prdImagen'=>'samsung-crystal-65.png',
                    'prdActivo'=>1
                ],
            ]
        );
    }
}
