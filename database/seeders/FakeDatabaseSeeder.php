<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProducersSeeder;
use Database\Seeders\ProductSeeder;
use Faker\Factory;

class FakeDatabaseSeeder extends Seeder {

    public $producers = [
        ['img' => 'vinho.jpeg', 'name' => 'Adega São Luis'],
        ['img' => 'cau1.jpeg', 'name' => 'Cauana Minusculi Confeitaria Gourmet'],
        ['img' => 'chef1.jpeg', 'name' => 'Caseiros e Cia'],
        ['img' => 'comidokas.jpeg', 'name' => 'Comidokas'],
        ['img' => 'mistureba.jpeg', 'name' => 'Mistureba Vegana'],
        ['img' => 'rural1.webp', 'name' => 'Sítio Chico Bento'],
        ['img' => 'rural2.jpeg', 'name' => 'Fazenda Novo Horizonte'],
    ];

    public $products = [
        ['img' => 'abobrinha.jpeg', 'producer_idx' => 5, 'name' => 'Abobrinha'],
        ['img' => 'alface.jpeg', 'producer_idx' => 5, 'name' => 'Alface Orgânica'],
        ['img' => 'bolinhadequeijo.jpeg', 'producer_idx' => 3, 'name' => 'Bolinha de Queijo'],
        ['img' => 'bolofit.webp', 'producer_idx' =>2, 'name' => 'Bolo Fit Sem Lactose'],
        ['img' => 'cau1.jpeg', 'producer_idx' => 1, 'name' => 'Docinhos Sortidos'],
        ['img' => 'cau2.jpeg', 'producer_idx' => 1, 'name' => 'Bento Cake'],
        ['img' => 'caubolo1.jpeg', 'producer_idx' => 1, 'name' => 'Bolos Decorados'],
        ['img' => 'caudonuts.jpeg', 'producer_idx' => 1, 'name' => 'Donuts'],
        ['img' => 'cauovo.jpeg', 'producer_idx' => 1, 'name' => 'Ovo de Colher'],
        ['img' => 'couve.jpeg', 'producer_idx' => 5, 'name' => 'Couve Manteiga Sem Agrotóxicos'],
        ['img' => 'coxinha1.jpeg', 'producer_idx' => 3, 'name' => 'Coxinhas Caseiras'],
        ['img' => 'escondidinho.jpeg', 'producer_idx' => 3, 'name' => 'Escondidinho Vários Sabores'],
        ['img' => 'geleias.webp', 'producer_idx' => 2, 'name' => 'Geleias Vários Sabores'],
        ['img' => 'laranja.webp', 'producer_idx' => 5, 'name' => 'Laranja'],
        ['img' => 'lasanha.jpeg', 'producer_idx' => 2, 'name' => 'Lasanha Sabores'],
        ['img' => 'limoa.jpeg', 'producer_idx' => 5, 'name' => 'Limão Taiti'],
        ['img' => 'marmita.jpeg', 'producer_idx' => 3, 'name' => 'Marmitas Fit'],
        ['img' => 'marmita2.webp', 'producer_idx' => 2, 'name' => 'Marmitas Saudáveis'],
        ['img' => 'melancia.webp', 'producer_idx' => 5, 'name' => 'Melancia'],
        ['img' => 'mistureba1.jpeg', 'producer_idx' => 4, 'name' => 'Bolo Vegano'],
        ['img' => 'mistureba2.jpeg', 'producer_idx' => 4, 'name' => 'Lasanha Vegana'],
        ['img' => 'mistureba3-fuba.jpeg', 'producer_idx' => 4, 'name' => 'Bolinho de Fubá Vegano Recheado'],
        ['img' => 'misturebamuffin.jpeg', 'producer_idx' => 4, 'name' => 'Muffin Vegano'],
        ['img' => 'misturebapastel.jpeg', 'producer_idx' => 4, 'name' => 'Pastel Assado Vegano'],
        ['img' => 'misturebaqueijo.jpeg', 'producer_idx' => 4, 'name' => 'Queijo Vegano'],
        ['img' => 'pão de queijo.webp', 'producer_idx' => 3, 'name' => 'Pão de Queijo'],
        ['img' => 'pessego.jpeg', 'producer_idx' => 5, 'name' => 'Pêssego'],
        ['img' => 'risoles1.jpeg', 'producer_idx' => 2, 'name' => 'Risoles Artesanais'],
        ['img' => 'vinho.webp', 'producer_idx' => 0, 'name' => 'Vinho Colonial'],
    ];

    /**
     * Seed the application's database fake data.
     * Used for the application testing/development
     *
     * @return void
     */
    public function run()
    {
        $citiesId = [
            4380,
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
            rand(1, 5570),
        ];

        $faker = Factory::create('pt_BR');
        
        $producersToCreate = 15;
        foreach ($citiesId as $city) {
            for ($i=0; $i<$producersToCreate; $i++) {
                $producerData = $this->producers[$i] ?? [];
                $productsData = array_filter($this->products, function ($product) use ($i) {
                    return $product['producer_idx'] == $i;
                });

                $producerId = (new ProducersSeeder($faker, $city, $producerData))->run();
                (new ProductSeeder($faker, $productsData))->run($producerId);
            }
        }
    }
}
