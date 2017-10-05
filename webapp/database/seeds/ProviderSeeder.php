<?php

use Illuminate\Database\Seeder;
use App\Provider;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $provider = new Provider;
        $provider->name = "Samsung";
        $provider->telefono = "60653243";
        $provider->direccion = "Almirante Grau";
        $provider->description = "Es un proveedor rapido en entregas";
        $provider->save();

        $provider = new Provider;
        $provider->name = "LG";
        $provider->telefono = "60653243";
        $provider->direccion = "Almirante Grau";
        $provider->description = "Es un provvedor rapido en entregas";
        $provider->save();

        $provider = new Provider;
        $provider->name = "Lenovo";
        $provider->telefono = "60653243";
        $provider->direccion = "Almirante Grau";
        $provider->description = "Es un provvedor rapido en entregas";
        $provider->save();

    }
}
