<?php

use Illuminate\Database\Seeder;

use App\Province;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create(['id' => 2, 'name' => 'Albacete']);
        Province::create(['id' => 3, 'name' => 'Alicante/Alacant']);
        Province::create(['id' => 4, 'name' => 'Almería']);
        Province::create(['id' => 1, 'name' => 'Araba/Álava']);
        Province::create(['id' => 33, 'name' => 'Asturias']);
        Province::create(['id' => 5, 'name' => 'Ávila']);
        Province::create(['id' => 6, 'name' => 'Badajoz']);
        Province::create(['id' => 7, 'name' => 'Balears, Illes']);
        Province::create(['id' => 8, 'name' => 'Barcelona']);
        Province::create(['id' => 48, 'name' => 'Bizkaia']);
        Province::create(['id' => 9, 'name' => 'Burgos']);
        Province::create(['id' => 10, 'name' => 'Cáceres']);
        Province::create(['id' => 11, 'name' => 'Cádiz']);
        Province::create(['id' => 39, 'name' => 'Cantabria']);
        Province::create(['id' => 12, 'name' => 'Castellón/Castelló']);
        Province::create(['id' => 13, 'name' => 'Ciudad Real']);
        Province::create(['id' => 14, 'name' => 'Córdoba']);
        Province::create(['id' => 15, 'name' => 'Coruña, A']);
        Province::create(['id' => 16, 'name' => 'Cuenca']);
        Province::create(['id' => 20, 'name' => 'Gipuzkoa']);
        Province::create(['id' => 17, 'name' => 'Girona']);
        Province::create(['id' => 18, 'name' => 'Granada']);
        Province::create(['id' => 19, 'name' => 'Guadalajara']);
        Province::create(['id' => 21, 'name' => 'Huelva']);
        Province::create(['id' => 22, 'name' => 'Huesca']);
        Province::create(['id' => 23, 'name' => 'Jaén']);
        Province::create(['id' => 24, 'name' => 'León']);
        Province::create(['id' => 25, 'name' => 'Lleida']);
        Province::create(['id' => 27, 'name' => 'Lugo']);
        Province::create(['id' => 28, 'name' => 'Madrid']);
        Province::create(['id' => 29, 'name' => 'Málaga']);
        Province::create(['id' => 30, 'name' => 'Murcia']);
        Province::create(['id' => 31, 'name' => 'Navarra']);
        Province::create(['id' => 32, 'name' => 'Ourense']);
        Province::create(['id' => 34, 'name' => 'Palencia']);
        Province::create(['id' => 35, 'name' => 'Palmas, Las']);
        Province::create(['id' => 36, 'name' => 'Pontevedra']);
        Province::create(['id' => 26, 'name' => 'Rioja, La']);
        Province::create(['id' => 37, 'name' => 'Salamanca']);
        Province::create(['id' => 38, 'name' => 'Santa Cruz de Tenerife']);
        Province::create(['id' => 40, 'name' => 'Segovia']);
        Province::create(['id' => 41, 'name' => 'Sevilla']);
        Province::create(['id' => 42, 'name' => 'Soria']);
        Province::create(['id' => 43, 'name' => 'Tarragona']);
        Province::create(['id' => 44, 'name' => 'Teruel']);
        Province::create(['id' => 45, 'name' => 'Toledo']);
        Province::create(['id' => 46, 'name' => 'Valencia/València']);
        Province::create(['id' => 47, 'name' => 'Valladolid']);
        Province::create(['id' => 49, 'name' => 'Zamora']);
        Province::create(['id' => 50, 'name' => 'Zaragoza']);
        Province::create(['id' => 51, 'name' => 'Ceuta']);
        Province::create(['id' => 52, 'name' => 'Melilla']);
    }
}
