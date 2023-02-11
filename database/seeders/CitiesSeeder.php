<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use MatanYadaev\EloquentSpatial\Objects\Point;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getCities() as $key => $city) {
            (new City(['name' => $city['name'], 'country_id' => 1, 'location' => new Point($city['latitude'], $city['longitude'])]))->save();
        }
    }

    private function getCities(): array
    {
        return [
            [
                "name" => "Alta Floresta D'Oeste, Rondônia",
                "latitude" => -11.9283,
                "longitude" => -61.9953
            ],
            [
                "name" => "Ariquemes, Rondônia",
                "latitude" => -9.90571,
                "longitude" => -63.0325
            ],
            [
                "name" => "Cabixi, Rondônia",
                "latitude" => -13.4945,
                "longitude" => -60.552
            ],
            [
                "name" => "Cacoal, Rondônia",
                "latitude" => -11.4343,
                "longitude" => -61.4562
            ],
            [
                "name" => "Cerejeiras, Rondônia",
                "latitude" => -13.187,
                "longitude" => -60.8168
            ],
            [
                "name" => "Colorado do Oeste, Rondônia",
                "latitude" => -13.1174,
                "longitude" => -60.5454
            ],
            [
                "name" => "Corumbiara, Rondônia",
                "latitude" => -12.9551,
                "longitude" => -60.8947
            ],
            [
                "name" => "Costa Marques, Rondônia",
                "latitude" => -12.4367,
                "longitude" => -64.228
            ],
            [
                "name" => "Espigão D'Oeste, Rondônia",
                "latitude" => -11.5266,
                "longitude" => -61.0252
            ],
            [
                "name" => "Guajará-Mirim, Rondônia",
                "latitude" => -10.7889,
                "longitude" => -65.3296
            ],
            [
                "name" => "Jaru, Rondônia",
                "latitude" => -10.4318,
                "longitude" => -62.4788
            ],
            [
                "name" => "Ji-Paraná, Rondônia",
                "latitude" => -10.8777,
                "longitude" => -61.9322
            ],
            [
                "name" => "Machadinho D'Oeste, Rondônia",
                "latitude" => -9.44363,
                "longitude" => -61.9818
            ],
            [
                "name" => "Nova Brasilândia D'Oeste, Rondônia",
                "latitude" => -11.7247,
                "longitude" => -62.3127
            ],
            [
                "name" => "Ouro Preto do Oeste, Rondônia",
                "latitude" => -10.7167,
                "longitude" => -62.2565
            ],
            [
                "name" => "Pimenta Bueno, Rondônia",
                "latitude" => -11.672,
                "longitude" => -61.198
            ],
            [
                "name" => "Porto Velho, Rondônia",
                "latitude" => -8.76077,
                "longitude" => -63.8999
            ],
            [
                "name" => "Presidente Médici, Rondônia",
                "latitude" => -11.169,
                "longitude" => -61.8986
            ],
            [
                "name" => "Rio Crespo, Rondônia",
                "latitude" => -9.69965,
                "longitude" => -62.9011
            ],
            [
                "name" => "Rolim de Moura, Rondônia",
                "latitude" => -11.7271,
                "longitude" => -61.7714
            ],
            [
                "name" => "Santa Luzia D'Oeste, Rondônia",
                "latitude" => -11.9074,
                "longitude" => -61.7777
            ],
            [
                "name" => "Vilhena, Rondônia",
                "latitude" => -12.7502,
                "longitude" => -60.1488
            ],
            [
                "name" => "São Miguel do Guaporé, Rondônia",
                "latitude" => -11.6953,
                "longitude" => -62.7192
            ],
            [
                "name" => "Nova Mamoré, Rondônia",
                "latitude" => -10.4077,
                "longitude" => -65.3346
            ],
            [
                "name" => "Alvorada D'Oeste, Rondônia",
                "latitude" => -11.3463,
                "longitude" => -62.2847
            ],
            [
                "name" => "Alto Alegre dos Parecis, Rondônia",
                "latitude" => -12.132,
                "longitude" => -61.835
            ],
            [
                "name" => "Alto Paraíso, Rondônia",
                "latitude" => -9.71429,
                "longitude" => -63.3188
            ],
            [
                "name" => "Buritis, Rondônia",
                "latitude" => -10.1943,
                "longitude" => -63.8324
            ],
            [
                "name" => "Novo Horizonte do Oeste, Rondônia",
                "latitude" => -11.6961,
                "longitude" => -61.9951
            ],
            [
                "name" => "Cacaulândia, Rondônia",
                "latitude" => -10.349,
                "longitude" => -62.9043
            ],
            [
                "name" => "Campo Novo de Rondônia, Rondônia",
                "latitude" => -10.5712,
                "longitude" => -63.6266
            ],
            [
                "name" => "Candeias do Jamari, Rondônia",
                "latitude" => -8.7907,
                "longitude" => -63.7005
            ],
            [
                "name" => "Castanheiras, Rondônia",
                "latitude" => -11.4253,
                "longitude" => -61.9482
            ],
            [
                "name" => "Chupinguaia, Rondônia",
                "latitude" => -12.5611,
                "longitude" => -60.8877
            ],
            [
                "name" => "Cujubim, Rondônia",
                "latitude" => -9.36065,
                "longitude" => -62.5846
            ],
            [
                "name" => "Governador Jorge Teixeira, Rondônia",
                "latitude" => -10.61,
                "longitude" => -62.7371
            ],
            [
                "name" => "Itapuã do Oeste, Rondônia",
                "latitude" => -9.19687,
                "longitude" => -63.1809
            ],
            [
                "name" => "Ministro Andreazza, Rondônia",
                "latitude" => -11.196,
                "longitude" => -61.5174
            ],
            [
                "name" => "Mirante da Serra, Rondônia",
                "latitude" => -11.029,
                "longitude" => -62.6696
            ],
            [
                "name" => "Monte Negro, Rondônia",
                "latitude" => -10.2458,
                "longitude" => -63.29
            ],
            [
                "name" => "Nova União, Rondônia",
                "latitude" => -10.9068,
                "longitude" => -62.5564
            ],
            [
                "name" => "Parecis, Rondônia",
                "latitude" => -12.1754,
                "longitude" => -61.6032
            ],
            [
                "name" => "Pimenteiras do Oeste, Rondônia",
                "latitude" => -13.4823,
                "longitude" => -61.0471
            ],
            [
                "name" => "Primavera de Rondônia, Rondônia",
                "latitude" => -11.8295,
                "longitude" => -61.3153
            ],
            [
                "name" => "São Felipe D'Oeste, Rondônia",
                "latitude" => -11.9023,
                "longitude" => -61.5026
            ],
            [
                "name" => "São Francisco do Guaporé, Rondônia",
                "latitude" => -12.052,
                "longitude" => -63.568
            ],
            [
                "name" => "Seringueiras, Rondônia",
                "latitude" => -11.8055,
                "longitude" => -63.0182
            ],
            [
                "name" => "Teixeirópolis, Rondônia",
                "latitude" => -10.9056,
                "longitude" => -62.242
            ],
            [
                "name" => "Theobroma, Rondônia",
                "latitude" => -10.2483,
                "longitude" => -62.3538
            ],
            [
                "name" => "Urupá, Rondônia",
                "latitude" => -11.1261,
                "longitude" => -62.3639
            ],
            [
                "name" => "Vale do Anari, Rondônia",
                "latitude" => -9.86215,
                "longitude" => -62.1876
            ],
            [
                "name" => "Vale do Paraíso, Rondônia",
                "latitude" => -10.4465,
                "longitude" => -62.1352
            ],
            [
                "name" => "Acrelândia, Acre",
                "latitude" => -9.82581,
                "longitude" => -66.8972
            ],
            [
                "name" => "Assis Brasil, Acre",
                "latitude" => -10.9298,
                "longitude" => -69.5738
            ],
            [
                "name" => "Brasiléia, Acre",
                "latitude" => -10.995,
                "longitude" => -68.7497
            ],
            [
                "name" => "Bujari, Acre",
                "latitude" => -9.81528,
                "longitude" => -67.955
            ],
            [
                "name" => "Capixaba, Acre",
                "latitude" => -10.566,
                "longitude" => -67.686
            ],
            [
                "name" => "Cruzeiro do Sul, Acre",
                "latitude" => -7.62762,
                "longitude" => -72.6756
            ],
            [
                "name" => "Epitaciolândia, Acre",
                "latitude" => -11.0188,
                "longitude" => -68.7341
            ],
            [
                "name" => "Feijó, Acre",
                "latitude" => -8.17054,
                "longitude" => -70.351
            ],
            [
                "name" => "Jordão, Acre",
                "latitude" => -9.1908,
                "longitude" => -71.9503
            ],
            [
                "name" => "Mâncio Lima, Acre",
                "latitude" => -7.61657,
                "longitude" => -72.8997
            ],
            [
                "name" => "Manoel Urbano, Acre",
                "latitude" => -8.83291,
                "longitude" => -69.2679
            ],
            [
                "name" => "Marechal Thaumaturgo, Acre",
                "latitude" => -8.93898,
                "longitude" => -72.7997
            ],
            [
                "name" => "Plácido de Castro, Acre",
                "latitude" => -10.2806,
                "longitude" => -67.1371
            ],
            [
                "name" => "Porto Walter, Acre",
                "latitude" => -8.26323,
                "longitude" => -72.7537
            ],
            [
                "name" => "Rio Branco, Acre",
                "latitude" => -9.97499,
                "longitude" => -67.8243
            ],
            [
                "name" => "Rodrigues Alves, Acre",
                "latitude" => -7.73864,
                "longitude" => -72.661
            ],
            [
                "name" => "Santa Rosa do Purus, Acre",
                "latitude" => -9.44652,
                "longitude" => -70.4902
            ],
            [
                "name" => "Senador Guiomard, Acre",
                "latitude" => -10.1497,
                "longitude" => -67.7362
            ],
            [
                "name" => "Sena Madureira, Acre",
                "latitude" => -9.06596,
                "longitude" => -68.6571
            ],
            [
                "name" => "Tarauacá, Acre",
                "latitude" => -8.15697,
                "longitude" => -70.7722
            ],
            [
                "name" => "Xapuri, Acre",
                "latitude" => -10.6516,
                "longitude" => -68.4969
            ],
            [
                "name" => "Porto Acre, Acre",
                "latitude" => -9.58138,
                "longitude" => -67.5478
            ],
            [
                "name" => "Alvarães, Amazonas",
                "latitude" => -3.22727,
                "longitude" => -64.8007
            ],
            [
                "name" => "Amaturá, Amazonas",
                "latitude" => -3.37455,
                "longitude" => -68.2005
            ],
            [
                "name" => "Anamã, Amazonas",
                "latitude" => -3.56697,
                "longitude" => -61.3963
            ],
            [
                "name" => "Anori, Amazonas",
                "latitude" => -3.74603,
                "longitude" => -61.6575
            ],
            [
                "name" => "Apuí, Amazonas",
                "latitude" => -7.19409,
                "longitude" => -59.896
            ],
            [
                "name" => "Atalaia do Norte, Amazonas",
                "latitude" => -4.37055,
                "longitude" => -70.1967
            ],
            [
                "name" => "Autazes, Amazonas",
                "latitude" => -3.58574,
                "longitude" => -59.1256
            ],
            [
                "name" => "Barcelos, Amazonas",
                "latitude" => -0.983373,
                "longitude" => -62.9311
            ],
            [
                "name" => "Barreirinha, Amazonas",
                "latitude" => -2.79886,
                "longitude" => -57.0679
            ],
            [
                "name" => "Benjamin Constant, Amazonas",
                "latitude" => -4.37768,
                "longitude" => -70.0342
            ],
            [
                "name" => "Beruri, Amazonas",
                "latitude" => -3.89874,
                "longitude" => -61.3616
            ],
            [
                "name" => "Boa Vista do Ramos, Amazonas",
                "latitude" => -2.97409,
                "longitude" => -57.5873
            ],
            [
                "name" => "Boca do Acre, Amazonas",
                "latitude" => -8.74232,
                "longitude" => -67.3919
            ],
            [
                "name" => "Borba, Amazonas",
                "latitude" => -4.39154,
                "longitude" => -59.5874
            ],
            [
                "name" => "Caapiranga, Amazonas",
                "latitude" => -3.31537,
                "longitude" => -61.2206
            ],
            [
                "name" => "Canutama, Amazonas",
                "latitude" => -6.52582,
                "longitude" => -64.3953
            ],
            [
                "name" => "Carauari, Amazonas",
                "latitude" => -4.88161,
                "longitude" => -66.9086
            ],
            [
                "name" => "Careiro, Amazonas",
                "latitude" => -3.76803,
                "longitude" => -60.369
            ],
            [
                "name" => "Careiro da Várzea, Amazonas",
                "latitude" => -3.314,
                "longitude" => -59.5557
            ],
            [
                "name" => "Coari, Amazonas",
                "latitude" => -4.09412,
                "longitude" => -63.1441
            ],
            [
                "name" => "Codajás, Amazonas",
                "latitude" => -3.83053,
                "longitude" => -62.0658
            ],
            [
                "name" => "Eirunepé, Amazonas",
                "latitude" => -6.65677,
                "longitude" => -69.8662
            ],
            [
                "name" => "Envira, Amazonas",
                "latitude" => -7.43789,
                "longitude" => -70.0281
            ],
            [
                "name" => "Fonte Boa, Amazonas",
                "latitude" => -2.52342,
                "longitude" => -66.0942
            ],
            [
                "name" => "Guajará, Amazonas",
                "latitude" => -7.53797,
                "longitude" => -72.5907
            ],
            [
                "name" => "Humaitá, Amazonas",
                "latitude" => -7.51171,
                "longitude" => -63.0327
            ],
            [
                "name" => "Ipixuna, Amazonas",
                "latitude" => -7.04791,
                "longitude" => -71.6934
            ],
            [
                "name" => "Iranduba, Amazonas",
                "latitude" => -3.27479,
                "longitude" => -60.19
            ],
            [
                "name" => "Itacoatiara, Amazonas",
                "latitude" => -3.13861,
                "longitude" => -58.4449
            ],
            [
                "name" => "Itamarati, Amazonas",
                "latitude" => -6.43852,
                "longitude" => -68.2437
            ],
            [
                "name" => "Itapiranga, Amazonas",
                "latitude" => -2.74081,
                "longitude" => -58.0293
            ],
            [
                "name" => "Japurá, Amazonas",
                "latitude" => -1.88237,
                "longitude" => -66.9291
            ],
            [
                "name" => "Juruá, Amazonas",
                "latitude" => -3.48438,
                "longitude" => -66.0718
            ],
            [
                "name" => "Jutaí, Amazonas",
                "latitude" => -2.75814,
                "longitude" => -66.7595
            ],
            [
                "name" => "Lábrea, Amazonas",
                "latitude" => -7.26413,
                "longitude" => -64.7948
            ],
            [
                "name" => "Manacapuru, Amazonas",
                "latitude" => -3.29066,
                "longitude" => -60.6216
            ],
            [
                "name" => "Manaquiri, Amazonas",
                "latitude" => -3.44078,
                "longitude" => -60.4612
            ],
            [
                "name" => "Manaus, Amazonas",
                "latitude" => -3.11866,
                "longitude" => -60.0212
            ],
            [
                "name" => "Manicoré, Amazonas",
                "latitude" => -5.80462,
                "longitude" => -61.2895
            ],
            [
                "name" => "Maraã, Amazonas",
                "latitude" => -1.85313,
                "longitude" => -65.573
            ],
            [
                "name" => "Maués, Amazonas",
                "latitude" => -3.39289,
                "longitude" => -57.7067
            ],
            [
                "name" => "Nhamundá, Amazonas",
                "latitude" => -2.20793,
                "longitude" => -56.7112
            ],
            [
                "name" => "Nova Olinda do Norte, Amazonas",
                "latitude" => -3.90037,
                "longitude" => -59.094
            ],
            [
                "name" => "Novo Airão, Amazonas",
                "latitude" => -2.63637,
                "longitude" => -60.9434
            ],
            [
                "name" => "Novo Aripuanã, Amazonas",
                "latitude" => -5.12593,
                "longitude" => -60.3732
            ],
            [
                "name" => "Parintins, Amazonas",
                "latitude" => -2.63741,
                "longitude" => -56.729
            ],
            [
                "name" => "Pauini, Amazonas",
                "latitude" => -7.71311,
                "longitude" => -66.992
            ],
            [
                "name" => "Presidente Figueiredo, Amazonas",
                "latitude" => -2.02981,
                "longitude" => -60.0234
            ],
            [
                "name" => "Rio Preto da Eva, Amazonas",
                "latitude" => -2.7045,
                "longitude" => -59.6858
            ],
            [
                "name" => "Santa Isabel do Rio Negro, Amazonas",
                "latitude" => -0.410824,
                "longitude" => -65.0092
            ],
            [
                "name" => "Santo Antônio do Içá, Amazonas",
                "latitude" => -3.09544,
                "longitude" => -67.9463
            ],
            [
                "name" => "São Gabriel da Cachoeira, Amazonas",
                "latitude" => -0.11909,
                "longitude" => -67.084
            ],
            [
                "name" => "São Paulo de Olivença, Amazonas",
                "latitude" => -3.47292,
                "longitude" => -68.9646
            ],
            [
                "name" => "São Sebastião do Uatumã, Amazonas",
                "latitude" => -2.55915,
                "longitude" => -57.8731
            ],
            [
                "name" => "Silves, Amazonas",
                "latitude" => -2.81748,
                "longitude" => -58.248
            ],
            [
                "name" => "Tabatinga, Amazonas",
                "latitude" => -4.2416,
                "longitude" => -69.9383
            ],
            [
                "name" => "Tapauá, Amazonas",
                "latitude" => -5.62085,
                "longitude" => -63.1808
            ],
            [
                "name" => "Tefé, Amazonas",
                "latitude" => -3.36822,
                "longitude" => -64.7193
            ],
            [
                "name" => "Tonantins, Amazonas",
                "latitude" => -2.86582,
                "longitude" => -67.7919
            ],
            [
                "name" => "Uarini, Amazonas",
                "latitude" => -2.99609,
                "longitude" => -65.1133
            ],
            [
                "name" => "Urucará, Amazonas",
                "latitude" => -2.52936,
                "longitude" => -57.7538
            ],
            [
                "name" => "Urucurituba, Amazonas",
                "latitude" => -3.12841,
                "longitude" => -58.1496
            ],
            [
                "name" => "Amajari, Roraima",
                "latitude" => 3.64571,
                "longitude" => -61.3692
            ],
            [
                "name" => "Alto Alegre, Roraima",
                "latitude" => 2.98858,
                "longitude" => -61.3072
            ],
            [
                "name" => "Boa Vista, Roraima",
                "latitude" => 2.82384,
                "longitude" => -60.6753
            ],
            [
                "name" => "Bonfim, Roraima",
                "latitude" => 3.36161,
                "longitude" => -59.8333
            ],
            [
                "name" => "Cantá, Roraima",
                "latitude" => 2.60994,
                "longitude" => -60.6058
            ],
            [
                "name" => "Caracaraí, Roraima",
                "latitude" => 1.82766,
                "longitude" => -61.1304
            ],
            [
                "name" => "Caroebe, Roraima",
                "latitude" => 0.884203,
                "longitude" => -59.6959
            ],
            [
                "name" => "Iracema, Roraima",
                "latitude" => 2.18305,
                "longitude" => -61.0415
            ],
            [
                "name" => "Mucajaí, Roraima",
                "latitude" => 2.43998,
                "longitude" => -60.9096
            ],
            [
                "name" => "Normandia, Roraima",
                "latitude" => 3.8853,
                "longitude" => -59.6204
            ],
            [
                "name" => "Pacaraima, Roraima",
                "latitude" => 4.4799,
                "longitude" => -61.1477
            ],
            [
                "name" => "Rorainópolis, Roraima",
                "latitude" => 0.939956,
                "longitude" => -60.4389
            ],
            [
                "name" => "São João da Baliza, Roraima",
                "latitude" => 0.951659,
                "longitude" => -59.9133
            ],
            [
                "name" => "São Luiz, Roraima",
                "latitude" => 1.01019,
                "longitude" => -60.0419
            ],
            [
                "name" => "Uiramutã, Roraima",
                "latitude" => 4.60314,
                "longitude" => -60.1815
            ],
            [
                "name" => "Abaetetuba, Pará",
                "latitude" => -1.72183,
                "longitude" => -48.8788
            ],
            [
                "name" => "Abel Figueiredo, Pará",
                "latitude" => -4.95333,
                "longitude" => -48.3933
            ],
            [
                "name" => "Acará, Pará",
                "latitude" => -1.95383,
                "longitude" => -48.1985
            ],
            [
                "name" => "Afuá, Pará",
                "latitude" => -0.154874,
                "longitude" => -50.3861
            ],
            [
                "name" => "Água Azul do Norte, Pará",
                "latitude" => -6.79053,
                "longitude" => -50.4791
            ],
            [
                "name" => "Alenquer, Pará",
                "latitude" => -1.94623,
                "longitude" => -54.7384
            ],
            [
                "name" => "Almeirim, Pará",
                "latitude" => -1.52904,
                "longitude" => -52.5788
            ],
            [
                "name" => "Altamira, Pará",
                "latitude" => -3.20407,
                "longitude" => -52.21
            ],
            [
                "name" => "Anajás, Pará",
                "latitude" => -0.996811,
                "longitude" => -49.9354
            ],
            [
                "name" => "Ananindeua, Pará",
                "latitude" => -1.36391,
                "longitude" => -48.3743
            ],
            [
                "name" => "Anapu, Pará",
                "latitude" => -3.46985,
                "longitude" => -51.2003
            ],
            [
                "name" => "Augusto Corrêa, Pará",
                "latitude" => -1.05109,
                "longitude" => -46.6147
            ],
            [
                "name" => "Aurora do Pará, Pará",
                "latitude" => -2.14898,
                "longitude" => -47.5677
            ],
            [
                "name" => "Aveiro, Pará",
                "latitude" => -3.60841,
                "longitude" => -55.3199
            ],
            [
                "name" => "Bagre, Pará",
                "latitude" => -1.90057,
                "longitude" => -50.1987
            ],
            [
                "name" => "Baião, Pará",
                "latitude" => -2.79021,
                "longitude" => -49.6694
            ],
            [
                "name" => "Bannach, Pará",
                "latitude" => -7.34779,
                "longitude" => -50.3959
            ],
            [
                "name" => "Barcarena, Pará",
                "latitude" => -1.51187,
                "longitude" => -48.6195
            ],
            [
                "name" => "Belém, Pará",
                "latitude" => -1.4554,
                "longitude" => -48.4898
            ],
            [
                "name" => "Belterra, Pará",
                "latitude" => -2.63609,
                "longitude" => -54.9374
            ],
            [
                "name" => "Benevides, Pará",
                "latitude" => -1.36183,
                "longitude" => -48.2434
            ],
            [
                "name" => "Bom Jesus do Tocantins, Pará",
                "latitude" => -5.0424,
                "longitude" => -48.6047
            ],
            [
                "name" => "Bonito, Pará",
                "latitude" => -1.36745,
                "longitude" => -47.3066
            ],
            [
                "name" => "Bragança, Pará",
                "latitude" => -1.06126,
                "longitude" => -46.7826
            ],
            [
                "name" => "Brasil Novo, Pará",
                "latitude" => -3.29792,
                "longitude" => -52.534
            ],
            [
                "name" => "Brejo Grande do Araguaia, Pará",
                "latitude" => -5.69822,
                "longitude" => -48.4103
            ],
            [
                "name" => "Breu Branco, Pará",
                "latitude" => -3.77191,
                "longitude" => -49.5735
            ],
            [
                "name" => "Breves, Pará",
                "latitude" => -1.68036,
                "longitude" => -50.4791
            ],
            [
                "name" => "Bujaru, Pará",
                "latitude" => -1.51762,
                "longitude" => -48.0381
            ],
            [
                "name" => "Cachoeira do Piriá, Pará",
                "latitude" => -1.75974,
                "longitude" => -46.5459
            ],
            [
                "name" => "Cachoeira do Arari, Pará",
                "latitude" => -1.01226,
                "longitude" => -48.9503
            ],
            [
                "name" => "Cametá, Pará",
                "latitude" => -2.24295,
                "longitude" => -49.4979
            ],
            [
                "name" => "Canaã dos Carajás, Pará",
                "latitude" => -6.49659,
                "longitude" => -49.8776
            ],
            [
                "name" => "Capanema, Pará",
                "latitude" => -1.20529,
                "longitude" => -47.1778
            ],
            [
                "name" => "Capitão Poço, Pará",
                "latitude" => -1.74785,
                "longitude" => -47.0629
            ],
            [
                "name" => "Castanhal, Pará",
                "latitude" => -1.29797,
                "longitude" => -47.9167
            ],
            [
                "name" => "Chaves, Pará",
                "latitude" => -0.164154,
                "longitude" => -49.987
            ],
            [
                "name" => "Colares, Pará",
                "latitude" => -0.936423,
                "longitude" => -48.2803
            ],
            [
                "name" => "Conceição do Araguaia, Pará",
                "latitude" => -8.26136,
                "longitude" => -49.2689
            ],
            [
                "name" => "Concórdia do Pará, Pará",
                "latitude" => -1.99238,
                "longitude" => -47.9422
            ],
            [
                "name" => "Cumaru do Norte, Pará",
                "latitude" => -7.81097,
                "longitude" => -50.7698
            ],
            [
                "name" => "Curionópolis, Pará",
                "latitude" => -6.09965,
                "longitude" => -49.6068
            ],
            [
                "name" => "Curralinho, Pará",
                "latitude" => -1.81179,
                "longitude" => -49.7952
            ],
            [
                "name" => "Curuá, Pará",
                "latitude" => -1.88775,
                "longitude" => -55.1168
            ],
            [
                "name" => "Curuçá, Pará",
                "latitude" => -0.733214,
                "longitude" => -47.8515
            ],
            [
                "name" => "Dom Eliseu, Pará",
                "latitude" => -4.19944,
                "longitude" => -47.8245
            ],
            [
                "name" => "Eldorado do Carajás, Pará",
                "latitude" => -6.10389,
                "longitude" => -49.3553
            ],
            [
                "name" => "Faro, Pará",
                "latitude" => -2.16805,
                "longitude" => -56.7405
            ],
            [
                "name" => "Floresta do Araguaia, Pará",
                "latitude" => -7.55335,
                "longitude" => -49.7125
            ],
            [
                "name" => "Garrafão do Norte, Pará",
                "latitude" => -1.92986,
                "longitude" => -47.0505
            ],
            [
                "name" => "Goianésia do Pará, Pará",
                "latitude" => -3.84338,
                "longitude" => -49.0974
            ],
            [
                "name" => "Gurupá, Pará",
                "latitude" => -1.41412,
                "longitude" => -51.6338
            ],
            [
                "name" => "Igarapé-Açu, Pará",
                "latitude" => -1.12539,
                "longitude" => -47.626
            ],
            [
                "name" => "Igarapé-Miri, Pará",
                "latitude" => -1.97533,
                "longitude" => -48.9575
            ],
            [
                "name" => "Inhangapi, Pará",
                "latitude" => -1.4349,
                "longitude" => -47.9114
            ],
            [
                "name" => "Ipixuna do Pará, Pará",
                "latitude" => -2.55992,
                "longitude" => -47.5059
            ],
            [
                "name" => "Irituia, Pará",
                "latitude" => -1.76984,
                "longitude" => -47.446
            ],
            [
                "name" => "Itaituba, Pará",
                "latitude" => -4.2667,
                "longitude" => -55.9926
            ],
            [
                "name" => "Itupiranga, Pará",
                "latitude" => -5.13272,
                "longitude" => -49.3358
            ],
            [
                "name" => "Jacareacanga, Pará",
                "latitude" => -6.21469,
                "longitude" => -57.7544
            ],
            [
                "name" => "Jacundá, Pará",
                "latitude" => -4.44617,
                "longitude" => -49.1153
            ],
            [
                "name" => "Juruti, Pará",
                "latitude" => -2.16347,
                "longitude" => -56.0889
            ],
            [
                "name" => "Limoeiro do Ajuru, Pará",
                "latitude" => -1.8985,
                "longitude" => -49.3903
            ],
            [
                "name" => "Mãe do Rio, Pará",
                "latitude" => -2.05683,
                "longitude" => -47.5601
            ],
            [
                "name" => "Magalhães Barata, Pará",
                "latitude" => -0.803391,
                "longitude" => -47.6014
            ],
            [
                "name" => "Marabá, Pará",
                "latitude" => -5.38075,
                "longitude" => -49.1327
            ],
            [
                "name" => "Maracanã, Pará",
                "latitude" => -0.778899,
                "longitude" => -47.452
            ],
            [
                "name" => "Marapanim, Pará",
                "latitude" => -0.714702,
                "longitude" => -47.7034
            ],
            [
                "name" => "Marituba, Pará",
                "latitude" => -1.36002,
                "longitude" => -48.3421
            ],
            [
                "name" => "Medicilândia, Pará",
                "latitude" => -3.44637,
                "longitude" => -52.8875
            ],
            [
                "name" => "Melgaço, Pará",
                "latitude" => -1.8032,
                "longitude" => -50.7149
            ],
            [
                "name" => "Mocajuba, Pará",
                "latitude" => -2.5831,
                "longitude" => -49.5042
            ],
            [
                "name" => "Moju, Pará",
                "latitude" => -1.88993,
                "longitude" => -48.7668
            ],
            [
                "name" => "Mojuí dos Campos, Pará",
                "latitude" => -2.6822,
                "longitude" => -54.6425
            ],
            [
                "name" => "Monte Alegre, Pará",
                "latitude" => -1.99768,
                "longitude" => -54.0724
            ],
            [
                "name" => "Muaná, Pará",
                "latitude" => -1.53936,
                "longitude" => -49.2224
            ],
            [
                "name" => "Nova Esperança do Piriá, Pará",
                "latitude" => -2.26693,
                "longitude" => -46.9731
            ],
            [
                "name" => "Nova Ipixuna, Pará",
                "latitude" => -4.91622,
                "longitude" => -49.0822
            ],
            [
                "name" => "Nova Timboteua, Pará",
                "latitude" => -1.20874,
                "longitude" => -47.3921
            ],
            [
                "name" => "Novo Progresso, Pará",
                "latitude" => -7.14347,
                "longitude" => -55.3786
            ],
            [
                "name" => "Novo Repartimento, Pará",
                "latitude" => -4.24749,
                "longitude" => -49.9499
            ],
            [
                "name" => "Óbidos, Pará",
                "latitude" => -1.90107,
                "longitude" => -55.5208
            ],
            [
                "name" => "Oeiras do Pará, Pará",
                "latitude" => -2.00358,
                "longitude" => -49.8628
            ],
            [
                "name" => "Oriximiná, Pará",
                "latitude" => -1.75989,
                "longitude" => -55.8579
            ],
            [
                "name" => "Ourém, Pará",
                "latitude" => -1.54168,
                "longitude" => -47.1126
            ],
            [
                "name" => "Ourilândia do Norte, Pará",
                "latitude" => -6.7529,
                "longitude" => -51.0858
            ],
            [
                "name" => "Pacajá, Pará",
                "latitude" => -3.83542,
                "longitude" => -50.6399
            ],
            [
                "name" => "Palestina do Pará, Pará",
                "latitude" => -5.74027,
                "longitude" => -48.3181
            ],
            [
                "name" => "Paragominas, Pará",
                "latitude" => -3.00212,
                "longitude" => -47.3527
            ],
            [
                "name" => "Parauapebas, Pará",
                "latitude" => -6.06781,
                "longitude" => -49.9037
            ],
            [
                "name" => "Pau d'Arco, Pará",
                "latitude" => -1.59772,
                "longitude" => -46.9268
            ],
            [
                "name" => "Peixe-Boi, Pará",
                "latitude" => -1.19382,
                "longitude" => -47.324
            ],
            [
                "name" => "Piçarra, Pará",
                "latitude" => -6.43778,
                "longitude" => -48.8716
            ],
            [
                "name" => "Placas, Pará",
                "latitude" => -3.86813,
                "longitude" => -54.2124
            ],
            [
                "name" => "Ponta de Pedras, Pará",
                "latitude" => -1.39587,
                "longitude" => -48.8661
            ],
            [
                "name" => "Portel, Pará",
                "latitude" => -1.93639,
                "longitude" => -50.8194
            ],
            [
                "name" => "Porto de Moz, Pará",
                "latitude" => -1.74691,
                "longitude" => -52.2361
            ],
            [
                "name" => "Prainha, Pará",
                "latitude" => -1.798,
                "longitude" => -53.4779
            ],
            [
                "name" => "Primavera, Pará",
                "latitude" => -0.945439,
                "longitude" => -47.1253
            ],
            [
                "name" => "Quatipuru, Pará",
                "latitude" => -0.899604,
                "longitude" => -47.0134
            ],
            [
                "name" => "Redenção, Pará",
                "latitude" => -8.02529,
                "longitude" => -50.0317
            ],
            [
                "name" => "Rio Maria, Pará",
                "latitude" => -7.31236,
                "longitude" => -50.0379
            ],
            [
                "name" => "Rondon do Pará, Pará",
                "latitude" => -4.77793,
                "longitude" => -48.067
            ],
            [
                "name" => "Rurópolis, Pará",
                "latitude" => -4.10028,
                "longitude" => -54.9092
            ],
            [
                "name" => "Salinópolis, Pará",
                "latitude" => -0.630815,
                "longitude" => -47.3465
            ],
            [
                "name" => "Salvaterra, Pará",
                "latitude" => -0.758444,
                "longitude" => -48.5139
            ],
            [
                "name" => "Santa Bárbara do Pará, Pará",
                "latitude" => -1.19219,
                "longitude" => -48.238
            ],
            [
                "name" => "Santa Cruz do Arari, Pará",
                "latitude" => -0.661019,
                "longitude" => -49.1771
            ],
            [
                "name" => "Santa Izabel do Pará, Pará",
                "latitude" => -1.29686,
                "longitude" => -48.1606
            ],
            [
                "name" => "Santa Luzia do Pará, Pará",
                "latitude" => -1.52147,
                "longitude" => -46.9008
            ],
            [
                "name" => "Santa Maria das Barreiras, Pará",
                "latitude" => -8.85784,
                "longitude" => -49.7215
            ],
            [
                "name" => "Santa Maria do Pará, Pará",
                "latitude" => -1.35392,
                "longitude" => -47.5712
            ],
            [
                "name" => "Santana do Araguaia, Pará",
                "latitude" => -9.3281,
                "longitude" => -50.35
            ],
            [
                "name" => "Santarém, Pará",
                "latitude" => -2.43849,
                "longitude" => -54.6996
            ],
            [
                "name" => "Santarém Novo, Pará",
                "latitude" => -0.93097,
                "longitude" => -47.3855
            ],
            [
                "name" => "Santo Antônio do Tauá, Pará",
                "latitude" => -1.1522,
                "longitude" => -48.1314
            ],
            [
                "name" => "São Caetano de Odivelas, Pará",
                "latitude" => -0.747293,
                "longitude" => -48.0246
            ],
            [
                "name" => "São Domingos do Araguaia, Pará",
                "latitude" => -5.53732,
                "longitude" => -48.7366
            ],
            [
                "name" => "São Domingos do Capim, Pará",
                "latitude" => -1.68768,
                "longitude" => -47.7665
            ],
            [
                "name" => "São Félix do Xingu, Pará",
                "latitude" => -6.64254,
                "longitude" => -51.9904
            ],
            [
                "name" => "São Francisco do Pará, Pará",
                "latitude" => -1.16963,
                "longitude" => -47.7917
            ],
            [
                "name" => "São Geraldo do Araguaia, Pará",
                "latitude" => -6.39471,
                "longitude" => -48.5592
            ],
            [
                "name" => "São João da Ponta, Pará",
                "latitude" => -0.857885,
                "longitude" => -47.918
            ],
            [
                "name" => "São João de Pirabas, Pará",
                "latitude" => -0.780222,
                "longitude" => -47.181
            ],
            [
                "name" => "São João do Araguaia, Pará",
                "latitude" => -5.36334,
                "longitude" => -48.7926
            ],
            [
                "name" => "São Miguel do Guamá, Pará",
                "latitude" => -1.61307,
                "longitude" => -47.4784
            ],
            [
                "name" => "São Sebastião da Boa Vista, Pará",
                "latitude" => -1.71597,
                "longitude" => -49.5249
            ],
            [
                "name" => "Sapucaia, Pará",
                "latitude" => -6.94018,
                "longitude" => -49.6834
            ],
            [
                "name" => "Senador José Porfírio, Pará",
                "latitude" => -4.31242,
                "longitude" => -51.5764
            ],
            [
                "name" => "Soure, Pará",
                "latitude" => -0.73032,
                "longitude" => -48.5015
            ],
            [
                "name" => "Tailândia, Pará",
                "latitude" => -2.94584,
                "longitude" => -48.9489
            ],
            [
                "name" => "Terra Alta, Pará",
                "latitude" => -1.02963,
                "longitude" => -47.9004
            ],
            [
                "name" => "Terra Santa, Pará",
                "latitude" => -2.10443,
                "longitude" => -56.4877
            ],
            [
                "name" => "Tomé-Açu, Pará",
                "latitude" => -2.41302,
                "longitude" => -48.1415
            ],
            [
                "name" => "Tracuateua, Pará",
                "latitude" => -1.07653,
                "longitude" => -46.9031
            ],
            [
                "name" => "Trairão, Pará",
                "latitude" => -4.57347,
                "longitude" => -55.9429
            ],
            [
                "name" => "Tucumã, Pará",
                "latitude" => -6.74687,
                "longitude" => -51.1626
            ],
            [
                "name" => "Tucuruí, Pará",
                "latitude" => -3.7657,
                "longitude" => -49.6773
            ],
            [
                "name" => "Ulianópolis, Pará",
                "latitude" => -3.75007,
                "longitude" => -47.4892
            ],
            [
                "name" => "Uruará, Pará",
                "latitude" => -3.71519,
                "longitude" => -53.7396
            ],
            [
                "name" => "Vigia, Pará",
                "latitude" => -0.861194,
                "longitude" => -48.1386
            ],
            [
                "name" => "Viseu, Pará",
                "latitude" => -1.19124,
                "longitude" => -46.1399
            ],
            [
                "name" => "Vitória do Xingu, Pará",
                "latitude" => -2.87922,
                "longitude" => -52.0088
            ],
            [
                "name" => "Xinguara, Pará",
                "latitude" => -7.0983,
                "longitude" => -49.9437
            ],
            [
                "name" => "Serra do Navio, Amapá",
                "latitude" => 0.901357,
                "longitude" => -52.0036
            ],
            [
                "name" => "Amapá, Amapá",
                "latitude" => 2.05267,
                "longitude" => -50.7957
            ],
            [
                "name" => "Pedra Branca do Amapari, Amapá",
                "latitude" => 0.777424,
                "longitude" => -51.9503
            ],
            [
                "name" => "Calçoene, Amapá",
                "latitude" => 2.50475,
                "longitude" => -50.9512
            ],
            [
                "name" => "Cutias, Amapá",
                "latitude" => 0.970761,
                "longitude" => -50.8005
            ],
            [
                "name" => "Ferreira Gomes, Amapá",
                "latitude" => 0.857256,
                "longitude" => -51.1795
            ],
            [
                "name" => "Itaubal, Amapá",
                "latitude" => 0.602185,
                "longitude" => -50.6996
            ],
            [
                "name" => "Laranjal do Jari, Amapá",
                "latitude" => -0.804911,
                "longitude" => -52.453
            ],
            [
                "name" => "Macapá, Amapá",
                "latitude" => 0.034934,
                "longitude" => -51.0694
            ],
            [
                "name" => "Mazagão, Amapá",
                "latitude" => -0.11336,
                "longitude" => -51.2891
            ],
            [
                "name" => "Oiapoque, Amapá",
                "latitude" => 3.84074,
                "longitude" => -51.8331
            ],
            [
                "name" => "Porto Grande, Amapá",
                "latitude" => 0.71243,
                "longitude" => -51.4155
            ],
            [
                "name" => "Pracuúba, Amapá",
                "latitude" => 1.74543,
                "longitude" => -50.7892
            ],
            [
                "name" => "Santana, Amapá",
                "latitude" => -0.045434,
                "longitude" => -51.1729
            ],
            [
                "name" => "Tartarugalzinho, Amapá",
                "latitude" => 1.50652,
                "longitude" => -50.9087
            ],
            [
                "name" => "Vitória do Jari, Amapá",
                "latitude" => -0.938,
                "longitude" => -52.424
            ],
            [
                "name" => "Abreulândia, Tocantins",
                "latitude" => -9.62101,
                "longitude" => -49.1518
            ],
            [
                "name" => "Aguiarnópolis, Tocantins",
                "latitude" => -6.55409,
                "longitude" => -47.4702
            ],
            [
                "name" => "Aliança do Tocantins, Tocantins",
                "latitude" => -11.3056,
                "longitude" => -48.9361
            ],
            [
                "name" => "Almas, Tocantins",
                "latitude" => -11.5706,
                "longitude" => -47.1792
            ],
            [
                "name" => "Alvorada, Tocantins",
                "latitude" => -12.4785,
                "longitude" => -49.1249
            ],
            [
                "name" => "Ananás, Tocantins",
                "latitude" => -6.36437,
                "longitude" => -48.0735
            ],
            [
                "name" => "Angico, Tocantins",
                "latitude" => -6.39179,
                "longitude" => -47.8611
            ],
            [
                "name" => "Aparecida do Rio Negro, Tocantins",
                "latitude" => -9.94139,
                "longitude" => -47.9638
            ],
            [
                "name" => "Aragominas, Tocantins",
                "latitude" => -7.16005,
                "longitude" => -48.5291
            ],
            [
                "name" => "Araguacema, Tocantins",
                "latitude" => -8.80755,
                "longitude" => -49.5569
            ],
            [
                "name" => "Araguaçu, Tocantins",
                "latitude" => -12.9289,
                "longitude" => -49.8231
            ],
            [
                "name" => "Araguaína, Tocantins",
                "latitude" => -7.19238,
                "longitude" => -48.2044
            ],
            [
                "name" => "Araguanã, Tocantins",
                "latitude" => -6.58225,
                "longitude" => -48.6395
            ],
            [
                "name" => "Araguatins, Tocantins",
                "latitude" => -5.64659,
                "longitude" => -48.1232
            ],
            [
                "name" => "Arapoema, Tocantins",
                "latitude" => -7.65463,
                "longitude" => -49.0637
            ],
            [
                "name" => "Arraias, Tocantins",
                "latitude" => -12.9287,
                "longitude" => -46.9359
            ],
            [
                "name" => "Augustinópolis, Tocantins",
                "latitude" => -5.46863,
                "longitude" => -47.8863
            ],
            [
                "name" => "Aurora do Tocantins, Tocantins",
                "latitude" => -12.7105,
                "longitude" => -46.4076
            ],
            [
                "name" => "Axixá do Tocantins, Tocantins",
                "latitude" => -5.61275,
                "longitude" => -47.7701
            ],
            [
                "name" => "Babaçulândia, Tocantins",
                "latitude" => -7.20923,
                "longitude" => -47.7613
            ],
            [
                "name" => "Bandeirantes do Tocantins, Tocantins",
                "latitude" => -7.75612,
                "longitude" => -48.5836
            ],
            [
                "name" => "Barra do Ouro, Tocantins",
                "latitude" => -7.69593,
                "longitude" => -47.6776
            ],
            [
                "name" => "Barrolândia, Tocantins",
                "latitude" => -9.83404,
                "longitude" => -48.7252
            ],
            [
                "name" => "Bernardo Sayão, Tocantins",
                "latitude" => -7.87481,
                "longitude" => -48.8893
            ],
            [
                "name" => "Bom Jesus do Tocantins, Tocantins",
                "latitude" => -8.96306,
                "longitude" => -48.165
            ],
            [
                "name" => "Brasilândia do Tocantins, Tocantins",
                "latitude" => -8.38918,
                "longitude" => -48.4822
            ],
            [
                "name" => "Brejinho de Nazaré, Tocantins",
                "latitude" => -11.0058,
                "longitude" => -48.5683
            ],
            [
                "name" => "Buriti do Tocantins, Tocantins",
                "latitude" => -5.31448,
                "longitude" => -48.2271
            ],
            [
                "name" => "Cachoeirinha, Tocantins",
                "latitude" => -6.1156,
                "longitude" => -47.9234
            ],
            [
                "name" => "Campos Lindos, Tocantins",
                "latitude" => -7.98956,
                "longitude" => -46.8645
            ],
            [
                "name" => "Cariri do Tocantins, Tocantins",
                "latitude" => -11.8881,
                "longitude" => -49.1609
            ],
            [
                "name" => "Carmolândia, Tocantins",
                "latitude" => -7.03262,
                "longitude" => -48.3978
            ],
            [
                "name" => "Carrasco Bonito, Tocantins",
                "latitude" => -5.31415,
                "longitude" => -48.0314
            ],
            [
                "name" => "Caseara, Tocantins",
                "latitude" => -9.27612,
                "longitude" => -49.9521
            ],
            [
                "name" => "Centenário, Tocantins",
                "latitude" => -8.96103,
                "longitude" => -47.3304
            ],
            [
                "name" => "Chapada de Areia, Tocantins",
                "latitude" => -10.1419,
                "longitude" => -49.1403
            ],
            [
                "name" => "Chapada da Natividade, Tocantins",
                "latitude" => -11.6175,
                "longitude" => -47.7486
            ],
            [
                "name" => "Colinas do Tocantins, Tocantins",
                "latitude" => -8.05764,
                "longitude" => -48.4757
            ],
            [
                "name" => "Combinado, Tocantins",
                "latitude" => -12.7917,
                "longitude" => -46.5388
            ],
            [
                "name" => "Conceição do Tocantins, Tocantins",
                "latitude" => -12.2209,
                "longitude" => -47.2951
            ],
            [
                "name" => "Couto Magalhães, Tocantins",
                "latitude" => -8.28411,
                "longitude" => -49.2473
            ],
            [
                "name" => "Cristalândia, Tocantins",
                "latitude" => -10.5985,
                "longitude" => -49.1942
            ],
            [
                "name" => "Crixás do Tocantins, Tocantins",
                "latitude" => -11.0994,
                "longitude" => -48.9152
            ],
            [
                "name" => "Darcinópolis, Tocantins",
                "latitude" => -6.71591,
                "longitude" => -47.7597
            ],
            [
                "name" => "Dianópolis, Tocantins",
                "latitude" => -11.624,
                "longitude" => -46.8198
            ],
            [
                "name" => "Divinópolis do Tocantins, Tocantins",
                "latitude" => -9.80018,
                "longitude" => -49.2169
            ],
            [
                "name" => "Dois Irmãos do Tocantins, Tocantins",
                "latitude" => -9.25534,
                "longitude" => -49.0638
            ],
            [
                "name" => "Dueré, Tocantins",
                "latitude" => -11.3416,
                "longitude" => -49.2716
            ],
            [
                "name" => "Esperantina, Tocantins",
                "latitude" => -5.36593,
                "longitude" => -48.5378
            ],
            [
                "name" => "Fátima, Tocantins",
                "latitude" => -10.7603,
                "longitude" => -48.9076
            ],
            [
                "name" => "Figueirópolis, Tocantins",
                "latitude" => -12.1312,
                "longitude" => -49.1748
            ],
            [
                "name" => "Filadélfia, Tocantins",
                "latitude" => -7.33501,
                "longitude" => -47.4954
            ],
            [
                "name" => "Formoso do Araguaia, Tocantins",
                "latitude" => -11.7976,
                "longitude" => -49.5316
            ],
            [
                "name" => "Fortaleza do Tabocão, Tocantins",
                "latitude" => -9.05611,
                "longitude" => -48.5206
            ],
            [
                "name" => "Goianorte, Tocantins",
                "latitude" => -8.77413,
                "longitude" => -48.9313
            ],
            [
                "name" => "Goiatins, Tocantins",
                "latitude" => -7.71478,
                "longitude" => -47.3252
            ],
            [
                "name" => "Guaraí, Tocantins",
                "latitude" => -8.83543,
                "longitude" => -48.5114
            ],
            [
                "name" => "Gurupi, Tocantins",
                "latitude" => -11.7279,
                "longitude" => -49.068
            ],
            [
                "name" => "Ipueiras, Tocantins",
                "latitude" => -11.2329,
                "longitude" => -48.46
            ],
            [
                "name" => "Itacajá, Tocantins",
                "latitude" => -8.39293,
                "longitude" => -47.7726
            ],
            [
                "name" => "Itaguatins, Tocantins",
                "latitude" => -5.77267,
                "longitude" => -47.4864
            ],
            [
                "name" => "Itapiratins, Tocantins",
                "latitude" => -8.37982,
                "longitude" => -48.1072
            ],
            [
                "name" => "Itaporã do Tocantins, Tocantins",
                "latitude" => -8.57172,
                "longitude" => -48.6895
            ],
            [
                "name" => "Jaú do Tocantins, Tocantins",
                "latitude" => -12.6509,
                "longitude" => -48.589
            ],
            [
                "name" => "Juarina, Tocantins",
                "latitude" => -8.11951,
                "longitude" => -49.0643
            ],
            [
                "name" => "Lagoa da Confusão, Tocantins",
                "latitude" => -10.7906,
                "longitude" => -49.6199
            ],
            [
                "name" => "Lagoa do Tocantins, Tocantins",
                "latitude" => -10.368,
                "longitude" => -47.538
            ],
            [
                "name" => "Lajeado, Tocantins",
                "latitude" => -9.74996,
                "longitude" => -48.3565
            ],
            [
                "name" => "Lavandeira, Tocantins",
                "latitude" => -12.7847,
                "longitude" => -46.5099
            ],
            [
                "name" => "Lizarda, Tocantins",
                "latitude" => -9.59002,
                "longitude" => -46.6738
            ],
            [
                "name" => "Luzinópolis, Tocantins",
                "latitude" => -6.17794,
                "longitude" => -47.8582
            ],
            [
                "name" => "Marianópolis do Tocantins, Tocantins",
                "latitude" => -9.79377,
                "longitude" => -49.6553
            ],
            [
                "name" => "Mateiros, Tocantins",
                "latitude" => -10.5464,
                "longitude" => -46.4168
            ],
            [
                "name" => "Maurilândia do Tocantins, Tocantins",
                "latitude" => -5.95169,
                "longitude" => -47.5125
            ],
            [
                "name" => "Miracema do Tocantins, Tocantins",
                "latitude" => -9.56556,
                "longitude" => -48.393
            ],
            [
                "name" => "Miranorte, Tocantins",
                "latitude" => -9.52907,
                "longitude" => -48.5922
            ],
            [
                "name" => "Monte do Carmo, Tocantins",
                "latitude" => -10.7611,
                "longitude" => -48.1114
            ],
            [
                "name" => "Monte Santo do Tocantins, Tocantins",
                "latitude" => -10.0075,
                "longitude" => -48.9941
            ],
            [
                "name" => "Palmeiras do Tocantins, Tocantins",
                "latitude" => -6.61658,
                "longitude" => -47.5464
            ],
            [
                "name" => "Muricilândia, Tocantins",
                "latitude" => -7.14669,
                "longitude" => -48.6091
            ],
            [
                "name" => "Natividade, Tocantins",
                "latitude" => -11.7034,
                "longitude" => -47.7223
            ],
            [
                "name" => "Nazaré, Tocantins",
                "latitude" => -6.37496,
                "longitude" => -47.6643
            ],
            [
                "name" => "Nova Olinda, Tocantins",
                "latitude" => -7.63171,
                "longitude" => -48.4252
            ],
            [
                "name" => "Nova Rosalândia, Tocantins",
                "latitude" => -10.5651,
                "longitude" => -48.9125
            ],
            [
                "name" => "Novo Acordo, Tocantins",
                "latitude" => -9.97063,
                "longitude" => -47.6785
            ],
            [
                "name" => "Novo Alegre, Tocantins",
                "latitude" => -12.9217,
                "longitude" => -46.5713
            ],
            [
                "name" => "Novo Jardim, Tocantins",
                "latitude" => -11.826,
                "longitude" => -46.6325
            ],
            [
                "name" => "Oliveira de Fátima, Tocantins",
                "latitude" => -10.707,
                "longitude" => -48.9086
            ],
            [
                "name" => "Palmeirante, Tocantins",
                "latitude" => -7.84786,
                "longitude" => -47.9242
            ],
            [
                "name" => "Palmeirópolis, Tocantins",
                "latitude" => -13.0447,
                "longitude" => -48.4026
            ],
            [
                "name" => "Paraíso do Tocantins, Tocantins",
                "latitude" => -10.175,
                "longitude" => -48.8823
            ],
            [
                "name" => "Paranã, Tocantins",
                "latitude" => -12.6167,
                "longitude" => -47.8734
            ],
            [
                "name" => "Pau D'Arco, Tocantins",
                "latitude" => -7.53919,
                "longitude" => -49.367
            ],
            [
                "name" => "Pedro Afonso, Tocantins",
                "latitude" => -8.97034,
                "longitude" => -48.1729
            ],
            [
                "name" => "Peixe, Tocantins",
                "latitude" => -12.0254,
                "longitude" => -48.5395
            ],
            [
                "name" => "Pequizeiro, Tocantins",
                "latitude" => -8.5932,
                "longitude" => -48.9327
            ],
            [
                "name" => "Colméia, Tocantins",
                "latitude" => -8.72463,
                "longitude" => -48.7638
            ],
            [
                "name" => "Pindorama do Tocantins, Tocantins",
                "latitude" => -11.1311,
                "longitude" => -47.5726
            ],
            [
                "name" => "Piraquê, Tocantins",
                "latitude" => -6.77302,
                "longitude" => -48.2958
            ],
            [
                "name" => "Pium, Tocantins",
                "latitude" => -10.442,
                "longitude" => -49.1876
            ],
            [
                "name" => "Ponte Alta do Bom Jesus, Tocantins",
                "latitude" => -12.0853,
                "longitude" => -46.4825
            ],
            [
                "name" => "Ponte Alta do Tocantins, Tocantins",
                "latitude" => -10.7481,
                "longitude" => -47.5276
            ],
            [
                "name" => "Porto Alegre do Tocantins, Tocantins",
                "latitude" => -11.618,
                "longitude" => -47.0621
            ],
            [
                "name" => "Porto Nacional, Tocantins",
                "latitude" => -10.7027,
                "longitude" => -48.408
            ],
            [
                "name" => "Praia Norte, Tocantins",
                "latitude" => -5.39281,
                "longitude" => -47.8111
            ],
            [
                "name" => "Presidente Kennedy, Tocantins",
                "latitude" => -8.5406,
                "longitude" => -48.5062
            ],
            [
                "name" => "Pugmil, Tocantins",
                "latitude" => -10.424,
                "longitude" => -48.8957
            ],
            [
                "name" => "Recursolândia, Tocantins",
                "latitude" => -8.7227,
                "longitude" => -47.2421
            ],
            [
                "name" => "Riachinho, Tocantins",
                "latitude" => -6.44005,
                "longitude" => -48.1371
            ],
            [
                "name" => "Rio da Conceição, Tocantins",
                "latitude" => -11.3949,
                "longitude" => -46.8847
            ],
            [
                "name" => "Rio dos Bois, Tocantins",
                "latitude" => -9.34425,
                "longitude" => -48.5245
            ],
            [
                "name" => "Rio Sono, Tocantins",
                "latitude" => -9.35002,
                "longitude" => -47.888
            ],
            [
                "name" => "Sampaio, Tocantins",
                "latitude" => -5.35423,
                "longitude" => -47.8782
            ],
            [
                "name" => "Sandolândia, Tocantins",
                "latitude" => -12.538,
                "longitude" => -49.9242
            ],
            [
                "name" => "Santa Fé do Araguaia, Tocantins",
                "latitude" => -7.15803,
                "longitude" => -48.7165
            ],
            [
                "name" => "Santa Maria do Tocantins, Tocantins",
                "latitude" => -8.8046,
                "longitude" => -47.7887
            ],
            [
                "name" => "Santa Rita do Tocantins, Tocantins",
                "latitude" => -10.8617,
                "longitude" => -48.9161
            ],
            [
                "name" => "Santa Rosa do Tocantins, Tocantins",
                "latitude" => -11.4474,
                "longitude" => -48.1216
            ],
            [
                "name" => "Santa Tereza do Tocantins, Tocantins",
                "latitude" => -10.2746,
                "longitude" => -47.8033
            ],
            [
                "name" => "Santa Terezinha do Tocantins, Tocantins",
                "latitude" => -6.44438,
                "longitude" => -47.6684
            ],
            [
                "name" => "São Bento do Tocantins, Tocantins",
                "latitude" => -6.0258,
                "longitude" => -47.9012
            ],
            [
                "name" => "São Félix do Tocantins, Tocantins",
                "latitude" => -10.1615,
                "longitude" => -46.6618
            ],
            [
                "name" => "São Miguel do Tocantins, Tocantins",
                "latitude" => -5.56305,
                "longitude" => -47.5743
            ],
            [
                "name" => "São Salvador do Tocantins, Tocantins",
                "latitude" => -12.7458,
                "longitude" => -48.2352
            ],
            [
                "name" => "São Sebastião do Tocantins, Tocantins",
                "latitude" => -5.26131,
                "longitude" => -48.2021
            ],
            [
                "name" => "São Valério, Tocantins",
                "latitude" => -11.9743,
                "longitude" => -48.2353
            ],
            [
                "name" => "Silvanópolis, Tocantins",
                "latitude" => -11.1471,
                "longitude" => -48.1694
            ],
            [
                "name" => "Sítio Novo do Tocantins, Tocantins",
                "latitude" => -5.6012,
                "longitude" => -47.6381
            ],
            [
                "name" => "Sucupira, Tocantins",
                "latitude" => -11.993,
                "longitude" => -48.9685
            ],
            [
                "name" => "Taguatinga, Tocantins",
                "latitude" => -12.4026,
                "longitude" => -46.437
            ],
            [
                "name" => "Taipas do Tocantins, Tocantins",
                "latitude" => -12.1873,
                "longitude" => -46.9797
            ],
            [
                "name" => "Talismã, Tocantins",
                "latitude" => -12.7949,
                "longitude" => -49.0896
            ],
            [
                "name" => "Palmas, Tocantins",
                "latitude" => -10.24,
                "longitude" => -48.3558
            ],
            [
                "name" => "Tocantínia, Tocantins",
                "latitude" => -9.5632,
                "longitude" => -48.3741
            ],
            [
                "name" => "Tocantinópolis, Tocantins",
                "latitude" => -6.32447,
                "longitude" => -47.4224
            ],
            [
                "name" => "Tupirama, Tocantins",
                "latitude" => -8.97168,
                "longitude" => -48.1883
            ],
            [
                "name" => "Tupiratins, Tocantins",
                "latitude" => -8.39388,
                "longitude" => -48.1277
            ],
            [
                "name" => "Wanderlândia, Tocantins",
                "latitude" => -6.85274,
                "longitude" => -47.9601
            ],
            [
                "name" => "Xambioá, Tocantins",
                "latitude" => -6.4141,
                "longitude" => -48.532
            ],
            [
                "name" => "Açailândia, Maranhão",
                "latitude" => -4.94714,
                "longitude" => -47.5004
            ],
            [
                "name" => "Afonso Cunha, Maranhão",
                "latitude" => -4.13631,
                "longitude" => -43.3275
            ],
            [
                "name" => "Água Doce do Maranhão, Maranhão",
                "latitude" => -2.84048,
                "longitude" => -42.1189
            ],
            [
                "name" => "Alcântara, Maranhão",
                "latitude" => -2.39574,
                "longitude" => -44.4062
            ],
            [
                "name" => "Aldeias Altas, Maranhão",
                "latitude" => -4.62621,
                "longitude" => -43.4689
            ],
            [
                "name" => "Altamira do Maranhão, Maranhão",
                "latitude" => -4.16598,
                "longitude" => -45.4706
            ],
            [
                "name" => "Alto Alegre do Maranhão, Maranhão",
                "latitude" => -4.213,
                "longitude" => -44.446
            ],
            [
                "name" => "Alto Alegre do Pindaré, Maranhão",
                "latitude" => -3.66689,
                "longitude" => -45.8421
            ],
            [
                "name" => "Alto Parnaíba, Maranhão",
                "latitude" => -9.10273,
                "longitude" => -45.9303
            ],
            [
                "name" => "Amapá do Maranhão, Maranhão",
                "latitude" => -1.67524,
                "longitude" => -46.0024
            ],
            [
                "name" => "Amarante do Maranhão, Maranhão",
                "latitude" => -5.56913,
                "longitude" => -46.7473
            ],
            [
                "name" => "Anajatuba, Maranhão",
                "latitude" => -3.26269,
                "longitude" => -44.6126
            ],
            [
                "name" => "Anapurus, Maranhão",
                "latitude" => -3.67577,
                "longitude" => -43.1014
            ],
            [
                "name" => "Apicum-Açu, Maranhão",
                "latitude" => -1.45862,
                "longitude" => -45.0864
            ],
            [
                "name" => "Araguanã, Maranhão",
                "latitude" => -2.94644,
                "longitude" => -45.6589
            ],
            [
                "name" => "Araioses, Maranhão",
                "latitude" => -2.89091,
                "longitude" => -41.905
            ],
            [
                "name" => "Arame, Maranhão",
                "latitude" => -4.88347,
                "longitude" => -46.0032
            ],
            [
                "name" => "Arari, Maranhão",
                "latitude" => -3.45214,
                "longitude" => -44.7665
            ],
            [
                "name" => "Axixá, Maranhão",
                "latitude" => -2.83939,
                "longitude" => -44.062
            ],
            [
                "name" => "Bacabal, Maranhão",
                "latitude" => -4.22447,
                "longitude" => -44.7832
            ],
            [
                "name" => "Bacabeira, Maranhão",
                "latitude" => -2.96452,
                "longitude" => -44.3164
            ],
            [
                "name" => "Bacuri, Maranhão",
                "latitude" => -1.6965,
                "longitude" => -45.1328
            ],
            [
                "name" => "Bacurituba, Maranhão",
                "latitude" => -2.71,
                "longitude" => -44.7329
            ],
            [
                "name" => "Balsas, Maranhão",
                "latitude" => -7.53214,
                "longitude" => -46.0372
            ],
            [
                "name" => "Barão de Grajaú, Maranhão",
                "latitude" => -6.74463,
                "longitude" => -43.0261
            ],
            [
                "name" => "Barra do Corda, Maranhão",
                "latitude" => -5.49682,
                "longitude" => -45.2485
            ],
            [
                "name" => "Barreirinhas, Maranhão",
                "latitude" => -2.75863,
                "longitude" => -42.8232
            ],
            [
                "name" => "Belágua, Maranhão",
                "latitude" => -3.15485,
                "longitude" => -43.5122
            ],
            [
                "name" => "Bela Vista do Maranhão, Maranhão",
                "latitude" => -3.72618,
                "longitude" => -45.3075
            ],
            [
                "name" => "Benedito Leite, Maranhão",
                "latitude" => -7.21037,
                "longitude" => -44.5577
            ],
            [
                "name" => "Bequimão, Maranhão",
                "latitude" => -2.44162,
                "longitude" => -44.7842
            ],
            [
                "name" => "Bernardo do Mearim, Maranhão",
                "latitude" => -4.62666,
                "longitude" => -44.7608
            ],
            [
                "name" => "Boa Vista do Gurupi, Maranhão",
                "latitude" => -1.77614,
                "longitude" => -46.3002
            ],
            [
                "name" => "Bom Jardim, Maranhão",
                "latitude" => -3.54129,
                "longitude" => -45.606
            ],
            [
                "name" => "Bom Jesus das Selvas, Maranhão",
                "latitude" => -4.47638,
                "longitude" => -46.8641
            ],
            [
                "name" => "Bom Lugar, Maranhão",
                "latitude" => -4.37311,
                "longitude" => -45.0326
            ],
            [
                "name" => "Brejo, Maranhão",
                "latitude" => -3.67796,
                "longitude" => -42.7527
            ],
            [
                "name" => "Brejo de Areia, Maranhão",
                "latitude" => -4.334,
                "longitude" => -45.581
            ],
            [
                "name" => "Buriti, Maranhão",
                "latitude" => -3.94169,
                "longitude" => -42.9179
            ],
            [
                "name" => "Buriti Bravo, Maranhão",
                "latitude" => -5.83239,
                "longitude" => -43.8353
            ],
            [
                "name" => "Buriticupu, Maranhão",
                "latitude" => -4.32375,
                "longitude" => -46.4409
            ],
            [
                "name" => "Buritirana, Maranhão",
                "latitude" => -5.59823,
                "longitude" => -47.0131
            ],
            [
                "name" => "Cachoeira Grande, Maranhão",
                "latitude" => -2.93074,
                "longitude" => -44.0528
            ],
            [
                "name" => "Cajapió, Maranhão",
                "latitude" => -2.87326,
                "longitude" => -44.6741
            ],
            [
                "name" => "Cajari, Maranhão",
                "latitude" => -3.32742,
                "longitude" => -45.0145
            ],
            [
                "name" => "Campestre do Maranhão, Maranhão",
                "latitude" => -6.17075,
                "longitude" => -47.3625
            ],
            [
                "name" => "Cândido Mendes, Maranhão",
                "latitude" => -1.43265,
                "longitude" => -45.7161
            ],
            [
                "name" => "Cantanhede, Maranhão",
                "latitude" => -3.63757,
                "longitude" => -44.383
            ],
            [
                "name" => "Capinzal do Norte, Maranhão",
                "latitude" => -4.7236,
                "longitude" => -44.328
            ],
            [
                "name" => "Carolina, Maranhão",
                "latitude" => -7.33584,
                "longitude" => -47.4634
            ],
            [
                "name" => "Carutapera, Maranhão",
                "latitude" => -1.19696,
                "longitude" => -46.0085
            ],
            [
                "name" => "Caxias, Maranhão",
                "latitude" => -4.86505,
                "longitude" => -43.3617
            ],
            [
                "name" => "Cedral, Maranhão",
                "latitude" => -2.00027,
                "longitude" => -44.5281
            ],
            [
                "name" => "Central do Maranhão, Maranhão",
                "latitude" => -2.19831,
                "longitude" => -44.8254
            ],
            [
                "name" => "Centro do Guilherme, Maranhão",
                "latitude" => -2.44891,
                "longitude" => -46.0345
            ],
            [
                "name" => "Centro Novo do Maranhão, Maranhão",
                "latitude" => -2.12696,
                "longitude" => -46.1228
            ],
            [
                "name" => "Chapadinha, Maranhão",
                "latitude" => -3.73875,
                "longitude" => -43.3538
            ],
            [
                "name" => "Cidelândia, Maranhão",
                "latitude" => -5.17465,
                "longitude" => -47.7781
            ],
            [
                "name" => "Codó, Maranhão",
                "latitude" => -4.45562,
                "longitude" => -43.8924
            ],
            [
                "name" => "Coelho Neto, Maranhão",
                "latitude" => -4.25245,
                "longitude" => -43.0108
            ],
            [
                "name" => "Colinas, Maranhão",
                "latitude" => -6.03199,
                "longitude" => -44.2543
            ],
            [
                "name" => "Conceição do Lago-Açu, Maranhão",
                "latitude" => -3.85142,
                "longitude" => -44.8895
            ],
            [
                "name" => "Coroatá, Maranhão",
                "latitude" => -4.13442,
                "longitude" => -44.1244
            ],
            [
                "name" => "Cururupu, Maranhão",
                "latitude" => -1.81475,
                "longitude" => -44.8644
            ],
            [
                "name" => "Davinópolis, Maranhão",
                "latitude" => -5.54637,
                "longitude" => -47.4217
            ],
            [
                "name" => "Dom Pedro, Maranhão",
                "latitude" => -5.03518,
                "longitude" => -44.4409
            ],
            [
                "name" => "Duque Bacelar, Maranhão",
                "latitude" => -4.15002,
                "longitude" => -42.9477
            ],
            [
                "name" => "Esperantinópolis, Maranhão",
                "latitude" => -4.87938,
                "longitude" => -44.6926
            ],
            [
                "name" => "Estreito, Maranhão",
                "latitude" => -6.56077,
                "longitude" => -47.4431
            ],
            [
                "name" => "Feira Nova do Maranhão, Maranhão",
                "latitude" => -6.96508,
                "longitude" => -46.6786
            ],
            [
                "name" => "Fernando Falcão, Maranhão",
                "latitude" => -6.16207,
                "longitude" => -44.8979
            ],
            [
                "name" => "Formosa da Serra Negra, Maranhão",
                "latitude" => -6.44017,
                "longitude" => -46.1916
            ],
            [
                "name" => "Fortaleza dos Nogueiras, Maranhão",
                "latitude" => -6.95983,
                "longitude" => -46.1749
            ],
            [
                "name" => "Fortuna, Maranhão",
                "latitude" => -5.72792,
                "longitude" => -44.1565
            ],
            [
                "name" => "Godofredo Viana, Maranhão",
                "latitude" => -1.40259,
                "longitude" => -45.7795
            ],
            [
                "name" => "Gonçalves Dias, Maranhão",
                "latitude" => -5.1475,
                "longitude" => -44.3013
            ],
            [
                "name" => "Governador Archer, Maranhão",
                "latitude" => -5.02078,
                "longitude" => -44.2754
            ],
            [
                "name" => "Governador Edison Lobão, Maranhão",
                "latitude" => -5.74973,
                "longitude" => -47.3646
            ],
            [
                "name" => "Governador Eugênio Barros, Maranhão",
                "latitude" => -5.31897,
                "longitude" => -44.2469
            ],
            [
                "name" => "Governador Luiz Rocha, Maranhão",
                "latitude" => -5.47835,
                "longitude" => -44.0774
            ],
            [
                "name" => "Governador Newton Bello, Maranhão",
                "latitude" => -3.43245,
                "longitude" => -45.6619
            ],
            [
                "name" => "Governador Nunes Freire, Maranhão",
                "latitude" => -2.12899,
                "longitude" => -45.8777
            ],
            [
                "name" => "Graça Aranha, Maranhão",
                "latitude" => -5.40547,
                "longitude" => -44.3358
            ],
            [
                "name" => "Grajaú, Maranhão",
                "latitude" => -5.81367,
                "longitude" => -46.1462
            ],
            [
                "name" => "Guimarães, Maranhão",
                "latitude" => -2.12755,
                "longitude" => -44.602
            ],
            [
                "name" => "Humberto de Campos, Maranhão",
                "latitude" => -2.59828,
                "longitude" => -43.4649
            ],
            [
                "name" => "Icatu, Maranhão",
                "latitude" => -2.77206,
                "longitude" => -44.0501
            ],
            [
                "name" => "Igarapé do Meio, Maranhão",
                "latitude" => -3.65771,
                "longitude" => -45.2114
            ],
            [
                "name" => "Igarapé Grande, Maranhão",
                "latitude" => -4.6625,
                "longitude" => -44.8558
            ],
            [
                "name" => "Imperatriz, Maranhão",
                "latitude" => -5.51847,
                "longitude" => -47.4777
            ],
            [
                "name" => "Itaipava do Grajaú, Maranhão",
                "latitude" => -5.14252,
                "longitude" => -45.7877
            ],
            [
                "name" => "Itapecuru Mirim, Maranhão",
                "latitude" => -3.40202,
                "longitude" => -44.3508
            ],
            [
                "name" => "Itinga do Maranhão, Maranhão",
                "latitude" => -4.45293,
                "longitude" => -47.5235
            ],
            [
                "name" => "Jatobá, Maranhão",
                "latitude" => -5.82282,
                "longitude" => -44.2153
            ],
            [
                "name" => "Jenipapo dos Vieiras, Maranhão",
                "latitude" => -5.36237,
                "longitude" => -45.6356
            ],
            [
                "name" => "João Lisboa, Maranhão",
                "latitude" => -5.44363,
                "longitude" => -47.4064
            ],
            [
                "name" => "Joselândia, Maranhão",
                "latitude" => -4.98611,
                "longitude" => -44.6958
            ],
            [
                "name" => "Junco do Maranhão, Maranhão",
                "latitude" => -1.83888,
                "longitude" => -46.09
            ],
            [
                "name" => "Lago da Pedra, Maranhão",
                "latitude" => -4.56974,
                "longitude" => -45.1319
            ],
            [
                "name" => "Lago do Junco, Maranhão",
                "latitude" => -4.609,
                "longitude" => -45.049
            ],
            [
                "name" => "Lago Verde, Maranhão",
                "latitude" => -3.94661,
                "longitude" => -44.826
            ],
            [
                "name" => "Lagoa do Mato, Maranhão",
                "latitude" => -6.05023,
                "longitude" => -43.5333
            ],
            [
                "name" => "Lago dos Rodrigues, Maranhão",
                "latitude" => -4.61173,
                "longitude" => -44.9798
            ],
            [
                "name" => "Lagoa Grande do Maranhão, Maranhão",
                "latitude" => -4.98893,
                "longitude" => -45.3816
            ],
            [
                "name" => "Lajeado Novo, Maranhão",
                "latitude" => -6.18539,
                "longitude" => -47.0293
            ],
            [
                "name" => "Lima Campos, Maranhão",
                "latitude" => -4.51837,
                "longitude" => -44.4646
            ],
            [
                "name" => "Loreto, Maranhão",
                "latitude" => -7.08111,
                "longitude" => -45.1451
            ],
            [
                "name" => "Luís Domingues, Maranhão",
                "latitude" => -1.27492,
                "longitude" => -45.867
            ],
            [
                "name" => "Magalhães de Almeida, Maranhão",
                "latitude" => -3.39232,
                "longitude" => -42.2117
            ],
            [
                "name" => "Maracaçumé, Maranhão",
                "latitude" => -2.04918,
                "longitude" => -45.9587
            ],
            [
                "name" => "Marajá do Sena, Maranhão",
                "latitude" => -4.62806,
                "longitude" => -45.4531
            ],
            [
                "name" => "Maranhãozinho, Maranhão",
                "latitude" => -2.24078,
                "longitude" => -45.8507
            ],
            [
                "name" => "Mata Roma, Maranhão",
                "latitude" => -3.62035,
                "longitude" => -43.1112
            ],
            [
                "name" => "Matinha, Maranhão",
                "latitude" => -3.09849,
                "longitude" => -45.035
            ],
            [
                "name" => "Matões, Maranhão",
                "latitude" => -5.51359,
                "longitude" => -43.2018
            ],
            [
                "name" => "Matões do Norte, Maranhão",
                "latitude" => -3.6244,
                "longitude" => -44.5468
            ],
            [
                "name" => "Milagres do Maranhão, Maranhão",
                "latitude" => -3.57443,
                "longitude" => -42.6131
            ],
            [
                "name" => "Mirador, Maranhão",
                "latitude" => -6.37454,
                "longitude" => -44.3683
            ],
            [
                "name" => "Miranda do Norte, Maranhão",
                "latitude" => -3.56313,
                "longitude" => -44.5814
            ],
            [
                "name" => "Mirinzal, Maranhão",
                "latitude" => -2.07094,
                "longitude" => -44.7787
            ],
            [
                "name" => "Monção, Maranhão",
                "latitude" => -3.48125,
                "longitude" => -45.2496
            ],
            [
                "name" => "Montes Altos, Maranhão",
                "latitude" => -5.83067,
                "longitude" => -47.0673
            ],
            [
                "name" => "Morros, Maranhão",
                "latitude" => -2.85379,
                "longitude" => -44.0357
            ],
            [
                "name" => "Nina Rodrigues, Maranhão",
                "latitude" => -3.46788,
                "longitude" => -43.9134
            ],
            [
                "name" => "Nova Colinas, Maranhão",
                "latitude" => -7.12263,
                "longitude" => -46.2607
            ],
            [
                "name" => "Nova Iorque, Maranhão",
                "latitude" => -6.73047,
                "longitude" => -44.0471
            ],
            [
                "name" => "Nova Olinda do Maranhão, Maranhão",
                "latitude" => -2.84227,
                "longitude" => -45.6953
            ],
            [
                "name" => "Olho d'Água das Cunhãs, Maranhão",
                "latitude" => -4.13417,
                "longitude" => -45.1163
            ],
            [
                "name" => "Olinda Nova do Maranhão, Maranhão",
                "latitude" => -2.99295,
                "longitude" => -44.9897
            ],
            [
                "name" => "Paço do Lumiar, Maranhão",
                "latitude" => -2.51657,
                "longitude" => -44.1019
            ],
            [
                "name" => "Palmeirândia, Maranhão",
                "latitude" => -2.64433,
                "longitude" => -44.8933
            ],
            [
                "name" => "Paraibano, Maranhão",
                "latitude" => -6.4264,
                "longitude" => -43.9792
            ],
            [
                "name" => "Parnarama, Maranhão",
                "latitude" => -5.67365,
                "longitude" => -43.1011
            ],
            [
                "name" => "Passagem Franca, Maranhão",
                "latitude" => -6.17745,
                "longitude" => -43.7755
            ],
            [
                "name" => "Pastos Bons, Maranhão",
                "latitude" => -6.60296,
                "longitude" => -44.0745
            ],
            [
                "name" => "Paulino Neves, Maranhão",
                "latitude" => -2.72094,
                "longitude" => -42.5258
            ],
            [
                "name" => "Paulo Ramos, Maranhão",
                "latitude" => -4.44485,
                "longitude" => -45.2398
            ],
            [
                "name" => "Pedreiras, Maranhão",
                "latitude" => -4.56482,
                "longitude" => -44.6006
            ],
            [
                "name" => "Pedro do Rosário, Maranhão",
                "latitude" => -2.97272,
                "longitude" => -45.3493
            ],
            [
                "name" => "Penalva, Maranhão",
                "latitude" => -3.27674,
                "longitude" => -45.1768
            ],
            [
                "name" => "Peri Mirim, Maranhão",
                "latitude" => -2.57676,
                "longitude" => -44.8504
            ],
            [
                "name" => "Peritoró, Maranhão",
                "latitude" => -4.37459,
                "longitude" => -44.3369
            ],
            [
                "name" => "Pindaré-Mirim, Maranhão",
                "latitude" => -3.60985,
                "longitude" => -45.342
            ],
            [
                "name" => "Pinheiro, Maranhão",
                "latitude" => -2.52224,
                "longitude" => -45.0788
            ],
            [
                "name" => "Pio XII, Maranhão",
                "latitude" => -3.89315,
                "longitude" => -45.1759
            ],
            [
                "name" => "Pirapemas, Maranhão",
                "latitude" => -3.72041,
                "longitude" => -44.2216
            ],
            [
                "name" => "Poção de Pedras, Maranhão",
                "latitude" => -4.74626,
                "longitude" => -44.9432
            ],
            [
                "name" => "Porto Franco, Maranhão",
                "latitude" => -6.34149,
                "longitude" => -47.3962
            ],
            [
                "name" => "Porto Rico do Maranhão, Maranhão",
                "latitude" => -1.85925,
                "longitude" => -44.5842
            ],
            [
                "name" => "Presidente Dutra, Maranhão",
                "latitude" => -5.2898,
                "longitude" => -44.495
            ],
            [
                "name" => "Presidente Juscelino, Maranhão",
                "latitude" => -2.91872,
                "longitude" => -44.0715
            ],
            [
                "name" => "Presidente Médici, Maranhão",
                "latitude" => -2.38991,
                "longitude" => -45.82
            ],
            [
                "name" => "Presidente Sarney, Maranhão",
                "latitude" => -2.58799,
                "longitude" => -45.3595
            ],
            [
                "name" => "Presidente Vargas, Maranhão",
                "latitude" => -3.40787,
                "longitude" => -44.0234
            ],
            [
                "name" => "Primeira Cruz, Maranhão",
                "latitude" => -2.50568,
                "longitude" => -43.4232
            ],
            [
                "name" => "Raposa, Maranhão",
                "latitude" => -2.4254,
                "longitude" => -44.0973
            ],
            [
                "name" => "Riachão, Maranhão",
                "latitude" => -7.35819,
                "longitude" => -46.6225
            ],
            [
                "name" => "Ribamar Fiquene, Maranhão",
                "latitude" => -5.93067,
                "longitude" => -47.3888
            ],
            [
                "name" => "Rosário, Maranhão",
                "latitude" => -2.93444,
                "longitude" => -44.2531
            ],
            [
                "name" => "Sambaíba, Maranhão",
                "latitude" => -7.13447,
                "longitude" => -45.3515
            ],
            [
                "name" => "Santa Filomena do Maranhão, Maranhão",
                "latitude" => -5.49671,
                "longitude" => -44.5638
            ],
            [
                "name" => "Santa Helena, Maranhão",
                "latitude" => -2.24426,
                "longitude" => -45.29
            ],
            [
                "name" => "Santa Inês, Maranhão",
                "latitude" => -3.65112,
                "longitude" => -45.3774
            ],
            [
                "name" => "Santa Luzia, Maranhão",
                "latitude" => -4.06873,
                "longitude" => -45.69
            ],
            [
                "name" => "Santa Luzia do Paruá, Maranhão",
                "latitude" => -2.51123,
                "longitude" => -45.7801
            ],
            [
                "name" => "Santa Quitéria do Maranhão, Maranhão",
                "latitude" => -3.49308,
                "longitude" => -42.5688
            ],
            [
                "name" => "Santa Rita, Maranhão",
                "latitude" => -3.14241,
                "longitude" => -44.3211
            ],
            [
                "name" => "Santana do Maranhão, Maranhão",
                "latitude" => -3.109,
                "longitude" => -42.4064
            ],
            [
                "name" => "Santo Amaro do Maranhão, Maranhão",
                "latitude" => -2.50068,
                "longitude" => -43.238
            ],
            [
                "name" => "Santo Antônio dos Lopes, Maranhão",
                "latitude" => -4.86613,
                "longitude" => -44.3653
            ],
            [
                "name" => "São Benedito do Rio Preto, Maranhão",
                "latitude" => -3.33515,
                "longitude" => -43.5287
            ],
            [
                "name" => "São Bento, Maranhão",
                "latitude" => -2.69781,
                "longitude" => -44.8289
            ],
            [
                "name" => "São Bernardo, Maranhão",
                "latitude" => -3.37223,
                "longitude" => -42.4191
            ],
            [
                "name" => "São Domingos do Azeitão, Maranhão",
                "latitude" => -6.81471,
                "longitude" => -44.6509
            ],
            [
                "name" => "São Domingos do Maranhão, Maranhão",
                "latitude" => -5.58095,
                "longitude" => -44.3822
            ],
            [
                "name" => "São Félix de Balsas, Maranhão",
                "latitude" => -7.07535,
                "longitude" => -44.8092
            ],
            [
                "name" => "São Francisco do Brejão, Maranhão",
                "latitude" => -5.12584,
                "longitude" => -47.389
            ],
            [
                "name" => "São Francisco do Maranhão, Maranhão",
                "latitude" => -6.25159,
                "longitude" => -42.8668
            ],
            [
                "name" => "São João Batista, Maranhão",
                "latitude" => -2.95398,
                "longitude" => -44.7953
            ],
            [
                "name" => "São João do Carú, Maranhão",
                "latitude" => -3.5503,
                "longitude" => -46.2507
            ],
            [
                "name" => "São João do Paraíso, Maranhão",
                "latitude" => -6.45634,
                "longitude" => -47.0594
            ],
            [
                "name" => "São João do Soter, Maranhão",
                "latitude" => -5.10821,
                "longitude" => -43.8163
            ],
            [
                "name" => "São João dos Patos, Maranhão",
                "latitude" => -6.4934,
                "longitude" => -43.7036
            ],
            [
                "name" => "São José de Ribamar, Maranhão",
                "latitude" => -2.54704,
                "longitude" => -44.0597
            ],
            [
                "name" => "São José dos Basílios, Maranhão",
                "latitude" => -5.05493,
                "longitude" => -44.5809
            ],
            [
                "name" => "São Luís, Maranhão",
                "latitude" => -2.53874,
                "longitude" => -44.2825
            ],
            [
                "name" => "São Luís Gonzaga do Maranhão, Maranhão",
                "latitude" => -4.38541,
                "longitude" => -44.6654
            ],
            [
                "name" => "São Mateus do Maranhão, Maranhão",
                "latitude" => -4.03736,
                "longitude" => -44.4707
            ],
            [
                "name" => "São Pedro da Água Branca, Maranhão",
                "latitude" => -5.08472,
                "longitude" => -48.4291
            ],
            [
                "name" => "São Pedro dos Crentes, Maranhão",
                "latitude" => -6.82389,
                "longitude" => -46.5319
            ],
            [
                "name" => "São Raimundo das Mangabeiras, Maranhão",
                "latitude" => -7.02183,
                "longitude" => -45.4809
            ],
            [
                "name" => "São Raimundo do Doca Bezerra, Maranhão",
                "latitude" => -5.11053,
                "longitude" => -45.0696
            ],
            [
                "name" => "São Roberto, Maranhão",
                "latitude" => -5.0231,
                "longitude" => -45.001
            ],
            [
                "name" => "São Vicente Ferrer, Maranhão",
                "latitude" => -2.89487,
                "longitude" => -44.8681
            ],
            [
                "name" => "Satubinha, Maranhão",
                "latitude" => -4.04913,
                "longitude" => -45.2457
            ],
            [
                "name" => "Senador Alexandre Costa, Maranhão",
                "latitude" => -5.25096,
                "longitude" => -44.0533
            ],
            [
                "name" => "Senador La Rocque, Maranhão",
                "latitude" => -5.4461,
                "longitude" => -47.2959
            ],
            [
                "name" => "Serrano do Maranhão, Maranhão",
                "latitude" => -1.85229,
                "longitude" => -45.1207
            ],
            [
                "name" => "Sítio Novo, Maranhão",
                "latitude" => -5.87601,
                "longitude" => -46.7033
            ],
            [
                "name" => "Sucupira do Norte, Maranhão",
                "latitude" => -6.47839,
                "longitude" => -44.1919
            ],
            [
                "name" => "Sucupira do Riachão, Maranhão",
                "latitude" => -6.40858,
                "longitude" => -43.5455
            ],
            [
                "name" => "Tasso Fragoso, Maranhão",
                "latitude" => -8.4662,
                "longitude" => -45.7536
            ],
            [
                "name" => "Timbiras, Maranhão",
                "latitude" => -4.25597,
                "longitude" => -43.932
            ],
            [
                "name" => "Timon, Maranhão",
                "latitude" => -5.09769,
                "longitude" => -42.8329
            ],
            [
                "name" => "Trizidela do Vale, Maranhão",
                "latitude" => -4.538,
                "longitude" => -44.628
            ],
            [
                "name" => "Tufilândia, Maranhão",
                "latitude" => -3.67355,
                "longitude" => -45.6238
            ],
            [
                "name" => "Tuntum, Maranhão",
                "latitude" => -5.25476,
                "longitude" => -44.6444
            ],
            [
                "name" => "Turiaçu, Maranhão",
                "latitude" => -1.65893,
                "longitude" => -45.3798
            ],
            [
                "name" => "Turilândia, Maranhão",
                "latitude" => -2.21638,
                "longitude" => -45.3044
            ],
            [
                "name" => "Tutóia, Maranhão",
                "latitude" => -2.76141,
                "longitude" => -42.2755
            ],
            [
                "name" => "Urbano Santos, Maranhão",
                "latitude" => -3.20642,
                "longitude" => -43.3878
            ],
            [
                "name" => "Vargem Grande, Maranhão",
                "latitude" => -3.53639,
                "longitude" => -43.917
            ],
            [
                "name" => "Viana, Maranhão",
                "latitude" => -3.20451,
                "longitude" => -44.9912
            ],
            [
                "name" => "Vila Nova dos Martírios, Maranhão",
                "latitude" => -5.18889,
                "longitude" => -48.1336
            ],
            [
                "name" => "Vitória do Mearim, Maranhão",
                "latitude" => -3.45125,
                "longitude" => -44.8643
            ],
            [
                "name" => "Vitorino Freire, Maranhão",
                "latitude" => -4.28184,
                "longitude" => -45.2505
            ],
            [
                "name" => "Zé Doca, Maranhão",
                "latitude" => -3.27014,
                "longitude" => -45.6553
            ],
            [
                "name" => "Acauã, Piauí",
                "latitude" => -8.21954,
                "longitude" => -41.0831
            ],
            [
                "name" => "Agricolândia, Piauí",
                "latitude" => -5.79676,
                "longitude" => -42.6664
            ],
            [
                "name" => "Água Branca, Piauí",
                "latitude" => -5.88856,
                "longitude" => -42.637
            ],
            [
                "name" => "Alagoinha do Piauí, Piauí",
                "latitude" => -7.00039,
                "longitude" => -40.9282
            ],
            [
                "name" => "Alegrete do Piauí, Piauí",
                "latitude" => -7.24196,
                "longitude" => -40.8566
            ],
            [
                "name" => "Alto Longá, Piauí",
                "latitude" => -5.25634,
                "longitude" => -42.2096
            ],
            [
                "name" => "Altos, Piauí",
                "latitude" => -5.03888,
                "longitude" => -42.4612
            ],
            [
                "name" => "Alvorada do Gurguéia, Piauí",
                "latitude" => -8.42418,
                "longitude" => -43.777
            ],
            [
                "name" => "Amarante, Piauí",
                "latitude" => -6.24304,
                "longitude" => -42.8433
            ],
            [
                "name" => "Angical do Piauí, Piauí",
                "latitude" => -6.08786,
                "longitude" => -42.74
            ],
            [
                "name" => "Anísio de Abreu, Piauí",
                "latitude" => -9.18564,
                "longitude" => -43.0494
            ],
            [
                "name" => "Antônio Almeida, Piauí",
                "latitude" => -7.21276,
                "longitude" => -44.1889
            ],
            [
                "name" => "Aroazes, Piauí",
                "latitude" => -6.11022,
                "longitude" => -41.7822
            ],
            [
                "name" => "Aroeiras do Itaim, Piauí",
                "latitude" => -7.24502,
                "longitude" => -41.5325
            ],
            [
                "name" => "Arraial, Piauí",
                "latitude" => -6.65075,
                "longitude" => -42.5418
            ],
            [
                "name" => "Assunção do Piauí, Piauí",
                "latitude" => -5.865,
                "longitude" => -41.0389
            ],
            [
                "name" => "Avelino Lopes, Piauí",
                "latitude" => -10.1345,
                "longitude" => -43.9563
            ],
            [
                "name" => "Baixa Grande do Ribeiro, Piauí",
                "latitude" => -7.84903,
                "longitude" => -45.219
            ],
            [
                "name" => "Barra D'Alcântara, Piauí",
                "latitude" => -6.51645,
                "longitude" => -42.1146
            ],
            [
                "name" => "Barras, Piauí",
                "latitude" => -4.24468,
                "longitude" => -42.2922
            ],
            [
                "name" => "Barreiras do Piauí, Piauí",
                "latitude" => -9.9296,
                "longitude" => -45.4702
            ],
            [
                "name" => "Barro Duro, Piauí",
                "latitude" => -5.81673,
                "longitude" => -42.5147
            ],
            [
                "name" => "Batalha, Piauí",
                "latitude" => -4.0223,
                "longitude" => -42.0787
            ],
            [
                "name" => "Bela Vista do Piauí, Piauí",
                "latitude" => -7.98809,
                "longitude" => -41.8675
            ],
            [
                "name" => "Belém do Piauí, Piauí",
                "latitude" => -7.36652,
                "longitude" => -40.9688
            ],
            [
                "name" => "Beneditinos, Piauí",
                "latitude" => -5.45676,
                "longitude" => -42.3638
            ],
            [
                "name" => "Bertolínia, Piauí",
                "latitude" => -7.63338,
                "longitude" => -43.9498
            ],
            [
                "name" => "Betânia do Piauí, Piauí",
                "latitude" => -8.14376,
                "longitude" => -40.7989
            ],
            [
                "name" => "Boa Hora, Piauí",
                "latitude" => -4.41404,
                "longitude" => -42.1357
            ],
            [
                "name" => "Bocaina, Piauí",
                "latitude" => -6.94124,
                "longitude" => -41.3168
            ],
            [
                "name" => "Bom Jesus, Piauí",
                "latitude" => -9.07124,
                "longitude" => -44.359
            ],
            [
                "name" => "Bom Princípio do Piauí, Piauí",
                "latitude" => -3.19631,
                "longitude" => -41.6403
            ],
            [
                "name" => "Bonfim do Piauí, Piauí",
                "latitude" => -9.1605,
                "longitude" => -42.8865
            ],
            [
                "name" => "Boqueirão do Piauí, Piauí",
                "latitude" => -4.48181,
                "longitude" => -42.1212
            ],
            [
                "name" => "Brasileira, Piauí",
                "latitude" => -4.1337,
                "longitude" => -41.7859
            ],
            [
                "name" => "Brejo do Piauí, Piauí",
                "latitude" => -8.20314,
                "longitude" => -42.8229
            ],
            [
                "name" => "Buriti dos Lopes, Piauí",
                "latitude" => -3.18259,
                "longitude" => -41.8695
            ],
            [
                "name" => "Buriti dos Montes, Piauí",
                "latitude" => -5.30584,
                "longitude" => -41.0933
            ],
            [
                "name" => "Cabeceiras do Piauí, Piauí",
                "latitude" => -4.4773,
                "longitude" => -42.3069
            ],
            [
                "name" => "Cajazeiras do Piauí, Piauí",
                "latitude" => -6.79667,
                "longitude" => -42.3903
            ],
            [
                "name" => "Cajueiro da Praia, Piauí",
                "latitude" => -2.93111,
                "longitude" => -41.3408
            ],
            [
                "name" => "Caldeirão Grande do Piauí, Piauí",
                "latitude" => -7.3314,
                "longitude" => -40.6366
            ],
            [
                "name" => "Campinas do Piauí, Piauí",
                "latitude" => -7.6593,
                "longitude" => -41.8775
            ],
            [
                "name" => "Campo Alegre do Fidalgo, Piauí",
                "latitude" => -8.38236,
                "longitude" => -41.8344
            ],
            [
                "name" => "Campo Grande do Piauí, Piauí",
                "latitude" => -7.12827,
                "longitude" => -41.0315
            ],
            [
                "name" => "Campo Largo do Piauí, Piauí",
                "latitude" => -3.80441,
                "longitude" => -42.64
            ],
            [
                "name" => "Campo Maior, Piauí",
                "latitude" => -4.8217,
                "longitude" => -42.1641
            ],
            [
                "name" => "Canavieira, Piauí",
                "latitude" => -7.68821,
                "longitude" => -43.7233
            ],
            [
                "name" => "Canto do Buriti, Piauí",
                "latitude" => -8.1111,
                "longitude" => -42.9517
            ],
            [
                "name" => "Capitão de Campos, Piauí",
                "latitude" => -4.457,
                "longitude" => -41.944
            ],
            [
                "name" => "Capitão Gervásio Oliveira, Piauí",
                "latitude" => -8.49655,
                "longitude" => -41.814
            ],
            [
                "name" => "Caracol, Piauí",
                "latitude" => -9.27933,
                "longitude" => -43.329
            ],
            [
                "name" => "Caraúbas do Piauí, Piauí",
                "latitude" => -3.47525,
                "longitude" => -41.8425
            ],
            [
                "name" => "Caridade do Piauí, Piauí",
                "latitude" => -7.73435,
                "longitude" => -40.9848
            ],
            [
                "name" => "Castelo do Piauí, Piauí",
                "latitude" => -5.31869,
                "longitude" => -41.5499
            ],
            [
                "name" => "Caxingó, Piauí",
                "latitude" => -3.41904,
                "longitude" => -41.8955
            ],
            [
                "name" => "Cocal, Piauí",
                "latitude" => -3.47279,
                "longitude" => -41.5546
            ],
            [
                "name" => "Cocal de Telha, Piauí",
                "latitude" => -4.5571,
                "longitude" => -41.9587
            ],
            [
                "name" => "Cocal dos Alves, Piauí",
                "latitude" => -3.62047,
                "longitude" => -41.4402
            ],
            [
                "name" => "Coivaras, Piauí",
                "latitude" => -5.09224,
                "longitude" => -42.208
            ],
            [
                "name" => "Colônia do Gurguéia, Piauí",
                "latitude" => -8.1837,
                "longitude" => -43.794
            ],
            [
                "name" => "Colônia do Piauí, Piauí",
                "latitude" => -7.22651,
                "longitude" => -42.1756
            ],
            [
                "name" => "Conceição do Canindé, Piauí",
                "latitude" => -7.87638,
                "longitude" => -41.5942
            ],
            [
                "name" => "Coronel José Dias, Piauí",
                "latitude" => -8.81397,
                "longitude" => -42.5232
            ],
            [
                "name" => "Corrente, Piauí",
                "latitude" => -10.4333,
                "longitude" => -45.1633
            ],
            [
                "name" => "Cristalândia do Piauí, Piauí",
                "latitude" => -10.6443,
                "longitude" => -45.1893
            ],
            [
                "name" => "Cristino Castro, Piauí",
                "latitude" => -8.82273,
                "longitude" => -44.223
            ],
            [
                "name" => "Curimatá, Piauí",
                "latitude" => -10.0326,
                "longitude" => -44.3002
            ],
            [
                "name" => "Currais, Piauí",
                "latitude" => -9.01175,
                "longitude" => -44.4062
            ],
            [
                "name" => "Curralinhos, Piauí",
                "latitude" => -5.60825,
                "longitude" => -42.8376
            ],
            [
                "name" => "Curral Novo do Piauí, Piauí",
                "latitude" => -7.8313,
                "longitude" => -40.8957
            ],
            [
                "name" => "Demerval Lobão, Piauí",
                "latitude" => -5.35875,
                "longitude" => -42.6776
            ],
            [
                "name" => "Dirceu Arcoverde, Piauí",
                "latitude" => -9.33939,
                "longitude" => -42.4348
            ],
            [
                "name" => "Dom Expedito Lopes, Piauí",
                "latitude" => -6.95332,
                "longitude" => -41.6396
            ],
            [
                "name" => "Domingos Mourão, Piauí",
                "latitude" => -4.2495,
                "longitude" => -41.2683
            ],
            [
                "name" => "Dom Inocêncio, Piauí",
                "latitude" => -9.00516,
                "longitude" => -41.9697
            ],
            [
                "name" => "Elesbão Veloso, Piauí",
                "latitude" => -6.19947,
                "longitude" => -42.1355
            ],
            [
                "name" => "Eliseu Martins, Piauí",
                "latitude" => -8.09629,
                "longitude" => -43.6705
            ],
            [
                "name" => "Esperantina, Piauí",
                "latitude" => -3.88863,
                "longitude" => -42.2324
            ],
            [
                "name" => "Fartura do Piauí, Piauí",
                "latitude" => -9.48342,
                "longitude" => -42.7912
            ],
            [
                "name" => "Flores do Piauí, Piauí",
                "latitude" => -7.78793,
                "longitude" => -42.918
            ],
            [
                "name" => "Floresta do Piauí, Piauí",
                "latitude" => -7.46682,
                "longitude" => -41.7883
            ],
            [
                "name" => "Floriano, Piauí",
                "latitude" => -6.77182,
                "longitude" => -43.0241
            ],
            [
                "name" => "Francinópolis, Piauí",
                "latitude" => -6.39334,
                "longitude" => -42.2591
            ],
            [
                "name" => "Francisco Ayres, Piauí",
                "latitude" => -6.62606,
                "longitude" => -42.6881
            ],
            [
                "name" => "Francisco Macedo, Piauí",
                "latitude" => -7.331,
                "longitude" => -40.788
            ],
            [
                "name" => "Francisco Santos, Piauí",
                "latitude" => -6.99491,
                "longitude" => -41.1288
            ],
            [
                "name" => "Fronteiras, Piauí",
                "latitude" => -7.08173,
                "longitude" => -40.6146
            ],
            [
                "name" => "Geminiano, Piauí",
                "latitude" => -7.15476,
                "longitude" => -41.3409
            ],
            [
                "name" => "Gilbués, Piauí",
                "latitude" => -9.83001,
                "longitude" => -45.3423
            ],
            [
                "name" => "Guadalupe, Piauí",
                "latitude" => -6.78285,
                "longitude" => -43.5594
            ],
            [
                "name" => "Guaribas, Piauí",
                "latitude" => -9.38647,
                "longitude" => -43.6943
            ],
            [
                "name" => "Hugo Napoleão, Piauí",
                "latitude" => -5.9886,
                "longitude" => -42.5598
            ],
            [
                "name" => "Ilha Grande, Piauí",
                "latitude" => -2.85774,
                "longitude" => -41.8186
            ],
            [
                "name" => "Inhuma, Piauí",
                "latitude" => -6.665,
                "longitude" => -41.7041
            ],
            [
                "name" => "Ipiranga do Piauí, Piauí",
                "latitude" => -6.82421,
                "longitude" => -41.7381
            ],
            [
                "name" => "Isaías Coelho, Piauí",
                "latitude" => -7.73597,
                "longitude" => -41.6735
            ],
            [
                "name" => "Itainópolis, Piauí",
                "latitude" => -7.44336,
                "longitude" => -41.4687
            ],
            [
                "name" => "Itaueira, Piauí",
                "latitude" => -7.59989,
                "longitude" => -43.0249
            ],
            [
                "name" => "Jacobina do Piauí, Piauí",
                "latitude" => -7.93063,
                "longitude" => -41.2075
            ],
            [
                "name" => "Jaicós, Piauí",
                "latitude" => -7.36229,
                "longitude" => -41.1371
            ],
            [
                "name" => "Jardim do Mulato, Piauí",
                "latitude" => -6.099,
                "longitude" => -42.63
            ],
            [
                "name" => "Jatobá do Piauí, Piauí",
                "latitude" => -4.77025,
                "longitude" => -41.817
            ],
            [
                "name" => "Jerumenha, Piauí",
                "latitude" => -7.09128,
                "longitude" => -43.5033
            ],
            [
                "name" => "João Costa, Piauí",
                "latitude" => -8.50736,
                "longitude" => -42.4264
            ],
            [
                "name" => "Joaquim Pires, Piauí",
                "latitude" => -3.50164,
                "longitude" => -42.1865
            ],
            [
                "name" => "Joca Marques, Piauí",
                "latitude" => -3.4804,
                "longitude" => -42.4255
            ],
            [
                "name" => "José de Freitas, Piauí",
                "latitude" => -4.75146,
                "longitude" => -42.5746
            ],
            [
                "name" => "Juazeiro do Piauí, Piauí",
                "latitude" => -5.17459,
                "longitude" => -41.6976
            ],
            [
                "name" => "Júlio Borges, Piauí",
                "latitude" => -10.3225,
                "longitude" => -44.2381
            ],
            [
                "name" => "Jurema, Piauí",
                "latitude" => -9.21992,
                "longitude" => -43.1337
            ],
            [
                "name" => "Lagoinha do Piauí, Piauí",
                "latitude" => -5.83074,
                "longitude" => -42.6223
            ],
            [
                "name" => "Lagoa Alegre, Piauí",
                "latitude" => -4.51539,
                "longitude" => -42.6309
            ],
            [
                "name" => "Lagoa do Barro do Piauí, Piauí",
                "latitude" => -8.47673,
                "longitude" => -41.5342
            ],
            [
                "name" => "Lagoa de São Francisco, Piauí",
                "latitude" => -4.38505,
                "longitude" => -41.5969
            ],
            [
                "name" => "Lagoa do Piauí, Piauí",
                "latitude" => -5.41864,
                "longitude" => -42.6437
            ],
            [
                "name" => "Lagoa do Sítio, Piauí",
                "latitude" => -6.50766,
                "longitude" => -41.5653
            ],
            [
                "name" => "Landri Sales, Piauí",
                "latitude" => -7.25922,
                "longitude" => -43.9364
            ],
            [
                "name" => "Luís Correia, Piauí",
                "latitude" => -2.88438,
                "longitude" => -41.6641
            ],
            [
                "name" => "Luzilândia, Piauí",
                "latitude" => -3.4683,
                "longitude" => -42.3718
            ],
            [
                "name" => "Madeiro, Piauí",
                "latitude" => -3.48624,
                "longitude" => -42.4981
            ],
            [
                "name" => "Manoel Emídio, Piauí",
                "latitude" => -8.01234,
                "longitude" => -43.8755
            ],
            [
                "name" => "Marcolândia, Piauí",
                "latitude" => -7.44169,
                "longitude" => -40.6602
            ],
            [
                "name" => "Marcos Parente, Piauí",
                "latitude" => -7.11565,
                "longitude" => -43.8926
            ],
            [
                "name" => "Massapê do Piauí, Piauí",
                "latitude" => -7.47469,
                "longitude" => -41.1103
            ],
            [
                "name" => "Matias Olímpio, Piauí",
                "latitude" => -3.71492,
                "longitude" => -42.5507
            ],
            [
                "name" => "Miguel Alves, Piauí",
                "latitude" => -4.16857,
                "longitude" => -42.8963
            ],
            [
                "name" => "Miguel Leão, Piauí",
                "latitude" => -5.68077,
                "longitude" => -42.7436
            ],
            [
                "name" => "Milton Brandão, Piauí",
                "latitude" => -4.68295,
                "longitude" => -41.4173
            ],
            [
                "name" => "Monsenhor Gil, Piauí",
                "latitude" => -5.562,
                "longitude" => -42.6075
            ],
            [
                "name" => "Monsenhor Hipólito, Piauí",
                "latitude" => -6.99275,
                "longitude" => -41.026
            ],
            [
                "name" => "Monte Alegre do Piauí, Piauí",
                "latitude" => -9.75364,
                "longitude" => -45.3037
            ],
            [
                "name" => "Morro Cabeça no Tempo, Piauí",
                "latitude" => -9.71891,
                "longitude" => -43.9072
            ],
            [
                "name" => "Morro do Chapéu do Piauí, Piauí",
                "latitude" => -3.73337,
                "longitude" => -42.3024
            ],
            [
                "name" => "Murici dos Portelas, Piauí",
                "latitude" => -3.319,
                "longitude" => -42.094
            ],
            [
                "name" => "Nazaré do Piauí, Piauí",
                "latitude" => -6.97023,
                "longitude" => -42.6773
            ],
            [
                "name" => "Nazária, Piauí",
                "latitude" => -5.35128,
                "longitude" => -42.8153
            ],
            [
                "name" => "Nossa Senhora de Nazaré, Piauí",
                "latitude" => -4.63019,
                "longitude" => -42.173
            ],
            [
                "name" => "Nossa Senhora dos Remédios, Piauí",
                "latitude" => -3.97574,
                "longitude" => -42.6184
            ],
            [
                "name" => "Novo Oriente do Piauí, Piauí",
                "latitude" => -6.44901,
                "longitude" => -41.9261
            ],
            [
                "name" => "Novo Santo Antônio, Piauí",
                "latitude" => -5.28749,
                "longitude" => -41.9325
            ],
            [
                "name" => "Oeiras, Piauí",
                "latitude" => -7.01915,
                "longitude" => -42.1283
            ],
            [
                "name" => "Olho D'Água do Piauí, Piauí",
                "latitude" => -5.84125,
                "longitude" => -42.5594
            ],
            [
                "name" => "Padre Marcos, Piauí",
                "latitude" => -7.35101,
                "longitude" => -40.8997
            ],
            [
                "name" => "Paes Landim, Piauí",
                "latitude" => -7.77375,
                "longitude" => -42.2474
            ],
            [
                "name" => "Pajeú do Piauí, Piauí",
                "latitude" => -7.85508,
                "longitude" => -42.8248
            ],
            [
                "name" => "Palmeira do Piauí, Piauí",
                "latitude" => -8.73076,
                "longitude" => -44.2466
            ],
            [
                "name" => "Palmeirais, Piauí",
                "latitude" => -5.97086,
                "longitude" => -43.056
            ],
            [
                "name" => "Paquetá, Piauí",
                "latitude" => -7.10303,
                "longitude" => -41.7
            ],
            [
                "name" => "Parnaguá, Piauí",
                "latitude" => -10.2166,
                "longitude" => -44.63
            ],
            [
                "name" => "Parnaíba, Piauí",
                "latitude" => -2.90585,
                "longitude" => -41.7754
            ],
            [
                "name" => "Passagem Franca do Piauí, Piauí",
                "latitude" => -5.86036,
                "longitude" => -42.4436
            ],
            [
                "name" => "Patos do Piauí, Piauí",
                "latitude" => -7.67231,
                "longitude" => -41.2408
            ],
            [
                "name" => "Pau D'Arco do Piauí, Piauí",
                "latitude" => -5.26072,
                "longitude" => -42.3908
            ],
            [
                "name" => "Paulistana, Piauí",
                "latitude" => -8.13436,
                "longitude" => -41.1431
            ],
            [
                "name" => "Pavussu, Piauí",
                "latitude" => -7.96059,
                "longitude" => -43.2284
            ],
            [
                "name" => "Pedro II, Piauí",
                "latitude" => -4.42585,
                "longitude" => -41.4482
            ],
            [
                "name" => "Pedro Laurentino, Piauí",
                "latitude" => -8.06807,
                "longitude" => -42.2847
            ],
            [
                "name" => "Nova Santa Rita, Piauí",
                "latitude" => -8.09707,
                "longitude" => -42.0471
            ],
            [
                "name" => "Picos, Piauí",
                "latitude" => -7.07721,
                "longitude" => -41.467
            ],
            [
                "name" => "Pimenteiras, Piauí",
                "latitude" => -6.23839,
                "longitude" => -41.4113
            ],
            [
                "name" => "Pio IX, Piauí",
                "latitude" => -6.83002,
                "longitude" => -40.6083
            ],
            [
                "name" => "Piracuruca, Piauí",
                "latitude" => -3.93335,
                "longitude" => -41.7088
            ],
            [
                "name" => "Piripiri, Piauí",
                "latitude" => -4.27157,
                "longitude" => -41.7716
            ],
            [
                "name" => "Porto, Piauí",
                "latitude" => -3.88815,
                "longitude" => -42.6998
            ],
            [
                "name" => "Porto Alegre do Piauí, Piauí",
                "latitude" => -6.96423,
                "longitude" => -44.1837
            ],
            [
                "name" => "Prata do Piauí, Piauí",
                "latitude" => -5.67265,
                "longitude" => -42.2046
            ],
            [
                "name" => "Queimada Nova, Piauí",
                "latitude" => -8.57064,
                "longitude" => -41.4106
            ],
            [
                "name" => "Redenção do Gurguéia, Piauí",
                "latitude" => -9.47937,
                "longitude" => -44.5811
            ],
            [
                "name" => "Regeneração, Piauí",
                "latitude" => -6.23115,
                "longitude" => -42.6842
            ],
            [
                "name" => "Riacho Frio, Piauí",
                "latitude" => -10.1244,
                "longitude" => -44.9503
            ],
            [
                "name" => "Ribeira do Piauí, Piauí",
                "latitude" => -7.69028,
                "longitude" => -42.7128
            ],
            [
                "name" => "Ribeiro Gonçalves, Piauí",
                "latitude" => -7.55651,
                "longitude" => -45.2447
            ],
            [
                "name" => "Rio Grande do Piauí, Piauí",
                "latitude" => -7.78029,
                "longitude" => -43.1369
            ],
            [
                "name" => "Santa Cruz do Piauí, Piauí",
                "latitude" => -7.1785,
                "longitude" => -41.7609
            ],
            [
                "name" => "Santa Cruz dos Milagres, Piauí",
                "latitude" => -5.80581,
                "longitude" => -41.9506
            ],
            [
                "name" => "Santa Filomena, Piauí",
                "latitude" => -9.11228,
                "longitude" => -45.9116
            ],
            [
                "name" => "Santa Luz, Piauí",
                "latitude" => -8.9488,
                "longitude" => -44.1296
            ],
            [
                "name" => "Santana do Piauí, Piauí",
                "latitude" => -6.94696,
                "longitude" => -41.5178
            ],
            [
                "name" => "Santa Rosa do Piauí, Piauí",
                "latitude" => -6.79581,
                "longitude" => -42.2814
            ],
            [
                "name" => "Santo Antônio de Lisboa, Piauí",
                "latitude" => -6.98676,
                "longitude" => -41.2252
            ],
            [
                "name" => "Santo Antônio dos Milagres, Piauí",
                "latitude" => -6.04647,
                "longitude" => -42.7123
            ],
            [
                "name" => "Santo Inácio do Piauí, Piauí",
                "latitude" => -7.42072,
                "longitude" => -41.9063
            ],
            [
                "name" => "São Braz do Piauí, Piauí",
                "latitude" => -9.05797,
                "longitude" => -43.0076
            ],
            [
                "name" => "São Félix do Piauí, Piauí",
                "latitude" => -5.93485,
                "longitude" => -42.1172
            ],
            [
                "name" => "São Francisco de Assis do Piauí, Piauí",
                "latitude" => -8.23599,
                "longitude" => -41.6873
            ],
            [
                "name" => "São Francisco do Piauí, Piauí",
                "latitude" => -7.2463,
                "longitude" => -42.541
            ],
            [
                "name" => "São Gonçalo do Gurguéia, Piauí",
                "latitude" => -10.0319,
                "longitude" => -45.3092
            ],
            [
                "name" => "São Gonçalo do Piauí, Piauí",
                "latitude" => -5.99393,
                "longitude" => -42.7095
            ],
            [
                "name" => "São João da Canabrava, Piauí",
                "latitude" => -6.81203,
                "longitude" => -41.3415
            ],
            [
                "name" => "São João da Fronteira, Piauí",
                "latitude" => -3.95497,
                "longitude" => -41.2569
            ],
            [
                "name" => "São João da Serra, Piauí",
                "latitude" => -5.51081,
                "longitude" => -41.8923
            ],
            [
                "name" => "São João da Varjota, Piauí",
                "latitude" => -6.94082,
                "longitude" => -41.8889
            ],
            [
                "name" => "São João do Arraial, Piauí",
                "latitude" => -3.8186,
                "longitude" => -42.4459
            ],
            [
                "name" => "São João do Piauí, Piauí",
                "latitude" => -8.35466,
                "longitude" => -42.2559
            ],
            [
                "name" => "São José do Divino, Piauí",
                "latitude" => -3.81411,
                "longitude" => -41.8308
            ],
            [
                "name" => "São José do Peixe, Piauí",
                "latitude" => -7.48554,
                "longitude" => -42.5672
            ],
            [
                "name" => "São José do Piauí, Piauí",
                "latitude" => -6.87194,
                "longitude" => -41.4731
            ],
            [
                "name" => "São Julião, Piauí",
                "latitude" => -7.08391,
                "longitude" => -40.8246
            ],
            [
                "name" => "São Lourenço do Piauí, Piauí",
                "latitude" => -9.16463,
                "longitude" => -42.5496
            ],
            [
                "name" => "São Luis do Piauí, Piauí",
                "latitude" => -6.81936,
                "longitude" => -41.3175
            ],
            [
                "name" => "São Miguel da Baixa Grande, Piauí",
                "latitude" => -5.85646,
                "longitude" => -42.1934
            ],
            [
                "name" => "São Miguel do Fidalgo, Piauí",
                "latitude" => -7.59713,
                "longitude" => -42.3676
            ],
            [
                "name" => "São Miguel do Tapuio, Piauí",
                "latitude" => -5.49729,
                "longitude" => -41.3165
            ],
            [
                "name" => "São Pedro do Piauí, Piauí",
                "latitude" => -5.92078,
                "longitude" => -42.7192
            ],
            [
                "name" => "São Raimundo Nonato, Piauí",
                "latitude" => -9.01241,
                "longitude" => -42.6987
            ],
            [
                "name" => "Sebastião Barros, Piauí",
                "latitude" => -10.817,
                "longitude" => -44.8337
            ],
            [
                "name" => "Sebastião Leal, Piauí",
                "latitude" => -7.56803,
                "longitude" => -44.06
            ],
            [
                "name" => "Sigefredo Pacheco, Piauí",
                "latitude" => -4.91665,
                "longitude" => -41.7311
            ],
            [
                "name" => "Simões, Piauí",
                "latitude" => -7.59109,
                "longitude" => -40.8137
            ],
            [
                "name" => "Simplício Mendes, Piauí",
                "latitude" => -7.85294,
                "longitude" => -41.9075
            ],
            [
                "name" => "Socorro do Piauí, Piauí",
                "latitude" => -7.86773,
                "longitude" => -42.4922
            ],
            [
                "name" => "Sussuapara, Piauí",
                "latitude" => -7.03687,
                "longitude" => -41.3767
            ],
            [
                "name" => "Tamboril do Piauí, Piauí",
                "latitude" => -8.40937,
                "longitude" => -42.9211
            ],
            [
                "name" => "Tanque do Piauí, Piauí",
                "latitude" => -6.59787,
                "longitude" => -42.2795
            ],
            [
                "name" => "Teresina, Piauí",
                "latitude" => -5.09194,
                "longitude" => -42.8034
            ],
            [
                "name" => "União, Piauí",
                "latitude" => -4.58571,
                "longitude" => -42.8583
            ],
            [
                "name" => "Uruçuí, Piauí",
                "latitude" => -7.23944,
                "longitude" => -44.5577
            ],
            [
                "name" => "Valença do Piauí, Piauí",
                "latitude" => -6.40301,
                "longitude" => -41.7375
            ],
            [
                "name" => "Várzea Branca, Piauí",
                "latitude" => -9.238,
                "longitude" => -42.9692
            ],
            [
                "name" => "Várzea Grande, Piauí",
                "latitude" => -6.54899,
                "longitude" => -42.248
            ],
            [
                "name" => "Vera Mendes, Piauí",
                "latitude" => -7.59748,
                "longitude" => -41.4673
            ],
            [
                "name" => "Vila Nova do Piauí, Piauí",
                "latitude" => -7.13272,
                "longitude" => -40.9345
            ],
            [
                "name" => "Wall Ferraz, Piauí",
                "latitude" => -7.23151,
                "longitude" => -41.905
            ],
            [
                "name" => "Abaiara, Ceará",
                "latitude" => -7.34588,
                "longitude" => -39.0416
            ],
            [
                "name" => "Acarape, Ceará",
                "latitude" => -4.22083,
                "longitude" => -38.7055
            ],
            [
                "name" => "Acaraú, Ceará",
                "latitude" => -2.88769,
                "longitude" => -40.1183
            ],
            [
                "name" => "Acopiara, Ceará",
                "latitude" => -6.08911,
                "longitude" => -39.448
            ],
            [
                "name" => "Aiuaba, Ceará",
                "latitude" => -6.57122,
                "longitude" => -40.1178
            ],
            [
                "name" => "Alcântaras, Ceará",
                "latitude" => -3.58537,
                "longitude" => -40.5479
            ],
            [
                "name" => "Altaneira, Ceará",
                "latitude" => -6.99837,
                "longitude" => -39.7356
            ],
            [
                "name" => "Alto Santo, Ceará",
                "latitude" => -5.50894,
                "longitude" => -38.2743
            ],
            [
                "name" => "Amontada, Ceará",
                "latitude" => -3.36017,
                "longitude" => -39.8288
            ],
            [
                "name" => "Antonina do Norte, Ceará",
                "latitude" => -6.76919,
                "longitude" => -39.987
            ],
            [
                "name" => "Apuiarés, Ceará",
                "latitude" => -3.94506,
                "longitude" => -39.4359
            ],
            [
                "name" => "Aquiraz, Ceará",
                "latitude" => -3.89929,
                "longitude" => -38.3896
            ],
            [
                "name" => "Aracati, Ceará",
                "latitude" => -4.55826,
                "longitude" => -37.7679
            ],
            [
                "name" => "Aracoiaba, Ceará",
                "latitude" => -4.36872,
                "longitude" => -38.8125
            ],
            [
                "name" => "Ararendá, Ceará",
                "latitude" => -4.74567,
                "longitude" => -40.831
            ],
            [
                "name" => "Araripe, Ceará",
                "latitude" => -7.21319,
                "longitude" => -40.1359
            ],
            [
                "name" => "Aratuba, Ceará",
                "latitude" => -4.41229,
                "longitude" => -39.0471
            ],
            [
                "name" => "Arneiroz, Ceará",
                "latitude" => -6.3165,
                "longitude" => -40.1653
            ],
            [
                "name" => "Assaré, Ceará",
                "latitude" => -6.8669,
                "longitude" => -39.8689
            ],
            [
                "name" => "Aurora, Ceará",
                "latitude" => -6.93349,
                "longitude" => -38.9742
            ],
            [
                "name" => "Baixio, Ceará",
                "latitude" => -6.71945,
                "longitude" => -38.7134
            ],
            [
                "name" => "Banabuiú, Ceará",
                "latitude" => -5.30454,
                "longitude" => -38.9132
            ],
            [
                "name" => "Barbalha, Ceará",
                "latitude" => -7.2982,
                "longitude" => -39.3021
            ],
            [
                "name" => "Barreira, Ceará",
                "latitude" => -4.28921,
                "longitude" => -38.6429
            ],
            [
                "name" => "Barro, Ceará",
                "latitude" => -7.17188,
                "longitude" => -38.7741
            ],
            [
                "name" => "Barroquinha, Ceará",
                "latitude" => -3.02051,
                "longitude" => -41.1358
            ],
            [
                "name" => "Baturité, Ceará",
                "latitude" => -4.32598,
                "longitude" => -38.8812
            ],
            [
                "name" => "Beberibe, Ceará",
                "latitude" => -4.17741,
                "longitude" => -38.1271
            ],
            [
                "name" => "Bela Cruz, Ceará",
                "latitude" => -3.04996,
                "longitude" => -40.1671
            ],
            [
                "name" => "Boa Viagem, Ceará",
                "latitude" => -5.11258,
                "longitude" => -39.7337
            ],
            [
                "name" => "Brejo Santo, Ceará",
                "latitude" => -7.48469,
                "longitude" => -38.9799
            ],
            [
                "name" => "Camocim, Ceará",
                "latitude" => -2.9005,
                "longitude" => -40.8544
            ],
            [
                "name" => "Campos Sales, Ceará",
                "latitude" => -7.06761,
                "longitude" => -40.3687
            ],
            [
                "name" => "Canindé, Ceará",
                "latitude" => -4.35162,
                "longitude" => -39.3155
            ],
            [
                "name" => "Capistrano, Ceará",
                "latitude" => -4.45569,
                "longitude" => -38.9048
            ],
            [
                "name" => "Caridade, Ceará",
                "latitude" => -4.22514,
                "longitude" => -39.1912
            ],
            [
                "name" => "Cariré, Ceará",
                "latitude" => -3.94858,
                "longitude" => -40.476
            ],
            [
                "name" => "Caririaçu, Ceará",
                "latitude" => -7.02808,
                "longitude" => -39.2828
            ],
            [
                "name" => "Cariús, Ceará",
                "latitude" => -6.52428,
                "longitude" => -39.4916
            ],
            [
                "name" => "Carnaubal, Ceará",
                "latitude" => -4.15985,
                "longitude" => -40.9413
            ],
            [
                "name" => "Cascavel, Ceará",
                "latitude" => -4.12967,
                "longitude" => -38.2412
            ],
            [
                "name" => "Catarina, Ceará",
                "latitude" => -6.12291,
                "longitude" => -39.8736
            ],
            [
                "name" => "Catunda, Ceará",
                "latitude" => -4.64336,
                "longitude" => -40.2
            ],
            [
                "name" => "Caucaia, Ceará",
                "latitude" => -3.72797,
                "longitude" => -38.6619
            ],
            [
                "name" => "Cedro, Ceará",
                "latitude" => -6.60034,
                "longitude" => -39.0609
            ],
            [
                "name" => "Chaval, Ceará",
                "latitude" => -3.03571,
                "longitude" => -41.2435
            ],
            [
                "name" => "Choró, Ceará",
                "latitude" => -4.83906,
                "longitude" => -39.1344
            ],
            [
                "name" => "Chorozinho, Ceará",
                "latitude" => -4.28873,
                "longitude" => -38.4986
            ],
            [
                "name" => "Coreaú, Ceará",
                "latitude" => -3.5415,
                "longitude" => -40.6587
            ],
            [
                "name" => "Crateús, Ceará",
                "latitude" => -5.16768,
                "longitude" => -40.6536
            ],
            [
                "name" => "Crato, Ceará",
                "latitude" => -7.2153,
                "longitude" => -39.4103
            ],
            [
                "name" => "Croatá, Ceará",
                "latitude" => -4.40481,
                "longitude" => -40.9022
            ],
            [
                "name" => "Cruz, Ceará",
                "latitude" => -2.91813,
                "longitude" => -40.176
            ],
            [
                "name" => "Deputado Irapuan Pinheiro, Ceará",
                "latitude" => -5.91485,
                "longitude" => -39.257
            ],
            [
                "name" => "Ererê, Ceará",
                "latitude" => -6.02751,
                "longitude" => -38.3461
            ],
            [
                "name" => "Eusébio, Ceará",
                "latitude" => -3.8925,
                "longitude" => -38.4559
            ],
            [
                "name" => "Farias Brito, Ceará",
                "latitude" => -6.92146,
                "longitude" => -39.5651
            ],
            [
                "name" => "Forquilha, Ceará",
                "latitude" => -3.79945,
                "longitude" => -40.2634
            ],
            [
                "name" => "Fortaleza, Ceará",
                "latitude" => -3.71664,
                "longitude" => -38.5423
            ],
            [
                "name" => "Fortim, Ceará",
                "latitude" => -4.45126,
                "longitude" => -37.7981
            ],
            [
                "name" => "Frecheirinha, Ceará",
                "latitude" => -3.75557,
                "longitude" => -40.818
            ],
            [
                "name" => "General Sampaio, Ceará",
                "latitude" => -4.04351,
                "longitude" => -39.454
            ],
            [
                "name" => "Graça, Ceará",
                "latitude" => -4.04422,
                "longitude" => -40.749
            ],
            [
                "name" => "Granja, Ceará",
                "latitude" => -3.12788,
                "longitude" => -40.8372
            ],
            [
                "name" => "Granjeiro, Ceará",
                "latitude" => -6.88134,
                "longitude" => -39.2144
            ],
            [
                "name" => "Groaíras, Ceará",
                "latitude" => -3.91787,
                "longitude" => -40.3852
            ],
            [
                "name" => "Guaiúba, Ceará",
                "latitude" => -4.04057,
                "longitude" => -38.6404
            ],
            [
                "name" => "Guaraciaba do Norte, Ceará",
                "latitude" => -4.15814,
                "longitude" => -40.7476
            ],
            [
                "name" => "Guaramiranga, Ceará",
                "latitude" => -4.26248,
                "longitude" => -38.932
            ],
            [
                "name" => "Hidrolândia, Ceará",
                "latitude" => -4.40958,
                "longitude" => -40.4056
            ],
            [
                "name" => "Horizonte, Ceará",
                "latitude" => -4.1209,
                "longitude" => -38.4707
            ],
            [
                "name" => "Ibaretama, Ceará",
                "latitude" => -4.80376,
                "longitude" => -38.7501
            ],
            [
                "name" => "Ibiapina, Ceará",
                "latitude" => -3.92403,
                "longitude" => -40.8911
            ],
            [
                "name" => "Ibicuitinga, Ceará",
                "latitude" => -4.96999,
                "longitude" => -38.6362
            ],
            [
                "name" => "Icapuí, Ceará",
                "latitude" => -4.71206,
                "longitude" => -37.3531
            ],
            [
                "name" => "Icó, Ceará",
                "latitude" => -6.39627,
                "longitude" => -38.8554
            ],
            [
                "name" => "Iguatu, Ceará",
                "latitude" => -6.36281,
                "longitude" => -39.2892
            ],
            [
                "name" => "Independência, Ceará",
                "latitude" => -5.38789,
                "longitude" => -40.3085
            ],
            [
                "name" => "Ipaporanga, Ceará",
                "latitude" => -4.89764,
                "longitude" => -40.7537
            ],
            [
                "name" => "Ipaumirim, Ceará",
                "latitude" => -6.78265,
                "longitude" => -38.7179
            ],
            [
                "name" => "Ipu, Ceará",
                "latitude" => -4.31748,
                "longitude" => -40.7059
            ],
            [
                "name" => "Ipueiras, Ceará",
                "latitude" => -4.53802,
                "longitude" => -40.7118
            ],
            [
                "name" => "Iracema, Ceará",
                "latitude" => -5.8124,
                "longitude" => -38.2919
            ],
            [
                "name" => "Irauçuba, Ceará",
                "latitude" => -3.74737,
                "longitude" => -39.7843
            ],
            [
                "name" => "Itaiçaba, Ceará",
                "latitude" => -4.67146,
                "longitude" => -37.833
            ],
            [
                "name" => "Itaitinga, Ceará",
                "latitude" => -3.96577,
                "longitude" => -38.5298
            ],
            [
                "name" => "Itapajé, Ceará",
                "latitude" => -3.68314,
                "longitude" => -39.5855
            ],
            [
                "name" => "Itapipoca, Ceará",
                "latitude" => -3.49933,
                "longitude" => -39.5836
            ],
            [
                "name" => "Itapiúna, Ceará",
                "latitude" => -4.55516,
                "longitude" => -38.9281
            ],
            [
                "name" => "Itarema, Ceará",
                "latitude" => -2.9248,
                "longitude" => -39.9167
            ],
            [
                "name" => "Itatira, Ceará",
                "latitude" => -4.52608,
                "longitude" => -39.6202
            ],
            [
                "name" => "Jaguaretama, Ceará",
                "latitude" => -5.6051,
                "longitude" => -38.7639
            ],
            [
                "name" => "Jaguaribara, Ceará",
                "latitude" => -5.67765,
                "longitude" => -38.5359
            ],
            [
                "name" => "Jaguaribe, Ceará",
                "latitude" => -5.90213,
                "longitude" => -38.6227
            ],
            [
                "name" => "Jaguaruana, Ceará",
                "latitude" => -4.83151,
                "longitude" => -37.781
            ],
            [
                "name" => "Jardim, Ceará",
                "latitude" => -7.57599,
                "longitude" => -39.2826
            ],
            [
                "name" => "Jati, Ceará",
                "latitude" => -7.6797,
                "longitude" => -39.0029
            ],
            [
                "name" => "Jijoca de Jericoacoara, Ceará",
                "latitude" => -2.79331,
                "longitude" => -40.5127
            ],
            [
                "name" => "Juazeiro do Norte, Ceará",
                "latitude" => -7.19621,
                "longitude" => -39.3076
            ],
            [
                "name" => "Jucás, Ceará",
                "latitude" => -6.51523,
                "longitude" => -39.5187
            ],
            [
                "name" => "Lavras da Mangabeira, Ceará",
                "latitude" => -6.7448,
                "longitude" => -38.9706
            ],
            [
                "name" => "Limoeiro do Norte, Ceará",
                "latitude" => -5.14392,
                "longitude" => -38.0847
            ],
            [
                "name" => "Madalena, Ceará",
                "latitude" => -4.84601,
                "longitude" => -39.5725
            ],
            [
                "name" => "Maracanaú, Ceará",
                "latitude" => -3.86699,
                "longitude" => -38.6259
            ],
            [
                "name" => "Maranguape, Ceará",
                "latitude" => -3.89143,
                "longitude" => -38.6829
            ],
            [
                "name" => "Marco, Ceará",
                "latitude" => -3.1285,
                "longitude" => -40.1582
            ],
            [
                "name" => "Martinópole, Ceará",
                "latitude" => -3.2252,
                "longitude" => -40.6896
            ],
            [
                "name" => "Massapê, Ceará",
                "latitude" => -3.52364,
                "longitude" => -40.3423
            ],
            [
                "name" => "Mauriti, Ceará",
                "latitude" => -7.38597,
                "longitude" => -38.7708
            ],
            [
                "name" => "Meruoca, Ceará",
                "latitude" => -3.53974,
                "longitude" => -40.4531
            ],
            [
                "name" => "Milagres, Ceará",
                "latitude" => -7.29749,
                "longitude" => -38.9378
            ],
            [
                "name" => "Milhã, Ceará",
                "latitude" => -5.67252,
                "longitude" => -39.1875
            ],
            [
                "name" => "Miraíma, Ceará",
                "latitude" => -3.56867,
                "longitude" => -39.9663
            ],
            [
                "name" => "Missão Velha, Ceará",
                "latitude" => -7.23522,
                "longitude" => -39.143
            ],
            [
                "name" => "Mombaça, Ceará",
                "latitude" => -5.73844,
                "longitude" => -39.63
            ],
            [
                "name" => "Monsenhor Tabosa, Ceará",
                "latitude" => -4.79102,
                "longitude" => -40.0646
            ],
            [
                "name" => "Morada Nova, Ceará",
                "latitude" => -5.09736,
                "longitude" => -38.3702
            ],
            [
                "name" => "Moraújo, Ceará",
                "latitude" => -3.46311,
                "longitude" => -40.6776
            ],
            [
                "name" => "Morrinhos, Ceará",
                "latitude" => -3.23426,
                "longitude" => -40.1233
            ],
            [
                "name" => "Mucambo, Ceará",
                "latitude" => -3.90271,
                "longitude" => -40.7452
            ],
            [
                "name" => "Mulungu, Ceará",
                "latitude" => -4.30294,
                "longitude" => -38.9951
            ],
            [
                "name" => "Nova Olinda, Ceará",
                "latitude" => -7.08415,
                "longitude" => -39.6713
            ],
            [
                "name" => "Nova Russas, Ceará",
                "latitude" => -4.70581,
                "longitude" => -40.5621
            ],
            [
                "name" => "Novo Oriente, Ceará",
                "latitude" => -5.52552,
                "longitude" => -40.7713
            ],
            [
                "name" => "Ocara, Ceará",
                "latitude" => -4.48523,
                "longitude" => -38.5933
            ],
            [
                "name" => "Orós, Ceará",
                "latitude" => -6.25182,
                "longitude" => -38.9053
            ],
            [
                "name" => "Pacajus, Ceará",
                "latitude" => -4.17107,
                "longitude" => -38.465
            ],
            [
                "name" => "Pacatuba, Ceará",
                "latitude" => -3.9784,
                "longitude" => -38.6183
            ],
            [
                "name" => "Pacoti, Ceará",
                "latitude" => -4.22492,
                "longitude" => -38.922
            ],
            [
                "name" => "Pacujá, Ceará",
                "latitude" => -3.98327,
                "longitude" => -40.6989
            ],
            [
                "name" => "Palhano, Ceará",
                "latitude" => -4.73672,
                "longitude" => -37.9655
            ],
            [
                "name" => "Palmácia, Ceará",
                "latitude" => -4.13831,
                "longitude" => -38.8446
            ],
            [
                "name" => "Paracuru, Ceará",
                "latitude" => -3.41436,
                "longitude" => -39.03
            ],
            [
                "name" => "Paraipaba, Ceará",
                "latitude" => -3.43799,
                "longitude" => -39.1479
            ],
            [
                "name" => "Parambu, Ceará",
                "latitude" => -6.20768,
                "longitude" => -40.6905
            ],
            [
                "name" => "Paramoti, Ceará",
                "latitude" => -4.08815,
                "longitude" => -39.2417
            ],
            [
                "name" => "Pedra Branca, Ceará",
                "latitude" => -5.45341,
                "longitude" => -39.7078
            ],
            [
                "name" => "Penaforte, Ceará",
                "latitude" => -7.82163,
                "longitude" => -39.0707
            ],
            [
                "name" => "Pentecoste, Ceará",
                "latitude" => -3.79274,
                "longitude" => -39.2692
            ],
            [
                "name" => "Pereiro, Ceará",
                "latitude" => -6.03576,
                "longitude" => -38.4624
            ],
            [
                "name" => "Pindoretama, Ceará",
                "latitude" => -4.01584,
                "longitude" => -38.3061
            ],
            [
                "name" => "Piquet Carneiro, Ceará",
                "latitude" => -5.80025,
                "longitude" => -39.417
            ],
            [
                "name" => "Pires Ferreira, Ceará",
                "latitude" => -4.23922,
                "longitude" => -40.6442
            ],
            [
                "name" => "Poranga, Ceará",
                "latitude" => -4.74672,
                "longitude" => -40.9205
            ],
            [
                "name" => "Porteiras, Ceará",
                "latitude" => -7.52265,
                "longitude" => -39.114
            ],
            [
                "name" => "Potengi, Ceará",
                "latitude" => -7.09154,
                "longitude" => -40.0233
            ],
            [
                "name" => "Potiretama, Ceará",
                "latitude" => -5.71287,
                "longitude" => -38.1578
            ],
            [
                "name" => "Quiterianópolis, Ceará",
                "latitude" => -5.8425,
                "longitude" => -40.7002
            ],
            [
                "name" => "Quixadá, Ceará",
                "latitude" => -4.9663,
                "longitude" => -39.0155
            ],
            [
                "name" => "Quixelô, Ceará",
                "latitude" => -6.24637,
                "longitude" => -39.2011
            ],
            [
                "name" => "Quixeramobim, Ceará",
                "latitude" => -5.19067,
                "longitude" => -39.2889
            ],
            [
                "name" => "Quixeré, Ceará",
                "latitude" => -5.07148,
                "longitude" => -37.9802
            ],
            [
                "name" => "Redenção, Ceará",
                "latitude" => -4.21587,
                "longitude" => -38.7277
            ],
            [
                "name" => "Reriutaba, Ceará",
                "latitude" => -4.14191,
                "longitude" => -40.5759
            ],
            [
                "name" => "Russas, Ceará",
                "latitude" => -4.92673,
                "longitude" => -37.9721
            ],
            [
                "name" => "Saboeiro, Ceará",
                "latitude" => -6.5346,
                "longitude" => -39.9017
            ],
            [
                "name" => "Salitre, Ceará",
                "latitude" => -7.28398,
                "longitude" => -40.45
            ],
            [
                "name" => "Santana do Acaraú, Ceará",
                "latitude" => -3.46144,
                "longitude" => -40.2118
            ],
            [
                "name" => "Santana do Cariri, Ceará",
                "latitude" => -7.17613,
                "longitude" => -39.7302
            ],
            [
                "name" => "Santa Quitéria, Ceará",
                "latitude" => -4.32608,
                "longitude" => -40.1523
            ],
            [
                "name" => "São Benedito, Ceará",
                "latitude" => -4.04713,
                "longitude" => -40.8596
            ],
            [
                "name" => "São Gonçalo do Amarante, Ceará",
                "latitude" => -3.60515,
                "longitude" => -38.9726
            ],
            [
                "name" => "São João do Jaguaribe, Ceará",
                "latitude" => -5.27516,
                "longitude" => -38.2694
            ],
            [
                "name" => "São Luís do Curu, Ceará",
                "latitude" => -3.66976,
                "longitude" => -39.2391
            ],
            [
                "name" => "Senador Pompeu, Ceará",
                "latitude" => -5.58244,
                "longitude" => -39.3704
            ],
            [
                "name" => "Senador Sá, Ceará",
                "latitude" => -3.35305,
                "longitude" => -40.4662
            ],
            [
                "name" => "Sobral, Ceará",
                "latitude" => -3.68913,
                "longitude" => -40.3482
            ],
            [
                "name" => "Solonópole, Ceará",
                "latitude" => -5.71894,
                "longitude" => -39.0107
            ],
            [
                "name" => "Tabuleiro do Norte, Ceará",
                "latitude" => -5.24353,
                "longitude" => -38.1282
            ],
            [
                "name" => "Tamboril, Ceará",
                "latitude" => -4.83136,
                "longitude" => -40.3196
            ],
            [
                "name" => "Tarrafas, Ceará",
                "latitude" => -6.67838,
                "longitude" => -39.753
            ],
            [
                "name" => "Tauá, Ceará",
                "latitude" => -5.98585,
                "longitude" => -40.2968
            ],
            [
                "name" => "Tejuçuoca, Ceará",
                "latitude" => -3.98831,
                "longitude" => -39.5799
            ],
            [
                "name" => "Tianguá, Ceará",
                "latitude" => -3.72965,
                "longitude" => -40.9923
            ],
            [
                "name" => "Trairi, Ceará",
                "latitude" => -3.26932,
                "longitude" => -39.2681
            ],
            [
                "name" => "Tururu, Ceará",
                "latitude" => -3.58413,
                "longitude" => -39.4297
            ],
            [
                "name" => "Ubajara, Ceará",
                "latitude" => -3.85448,
                "longitude" => -40.9204
            ],
            [
                "name" => "Umari, Ceará",
                "latitude" => -6.63893,
                "longitude" => -38.7008
            ],
            [
                "name" => "Umirim, Ceará",
                "latitude" => -3.67654,
                "longitude" => -39.3465
            ],
            [
                "name" => "Uruburetama, Ceará",
                "latitude" => -3.62316,
                "longitude" => -39.5107
            ],
            [
                "name" => "Uruoca, Ceará",
                "latitude" => -3.30819,
                "longitude" => -40.5628
            ],
            [
                "name" => "Varjota, Ceará",
                "latitude" => -4.19387,
                "longitude" => -40.4741
            ],
            [
                "name" => "Várzea Alegre, Ceará",
                "latitude" => -6.78264,
                "longitude" => -39.2942
            ],
            [
                "name" => "Viçosa do Ceará, Ceará",
                "latitude" => -3.5667,
                "longitude" => -41.0916
            ],
            [
                "name" => "Acari, Rio Grande do Norte",
                "latitude" => -6.4282,
                "longitude" => -36.6347
            ],
            [
                "name" => "Açu, Rio Grande do Norte",
                "latitude" => -5.58362,
                "longitude" => -36.914
            ],
            [
                "name" => "Afonso Bezerra, Rio Grande do Norte",
                "latitude" => -5.49229,
                "longitude" => -36.5075
            ],
            [
                "name" => "Água Nova, Rio Grande do Norte",
                "latitude" => -6.20351,
                "longitude" => -38.2941
            ],
            [
                "name" => "Alexandria, Rio Grande do Norte",
                "latitude" => -6.40533,
                "longitude" => -38.0142
            ],
            [
                "name" => "Almino Afonso, Rio Grande do Norte",
                "latitude" => -6.1475,
                "longitude" => -37.7636
            ],
            [
                "name" => "Alto do Rodrigues, Rio Grande do Norte",
                "latitude" => -5.28186,
                "longitude" => -36.75
            ],
            [
                "name" => "Angicos, Rio Grande do Norte",
                "latitude" => -5.65792,
                "longitude" => -36.6094
            ],
            [
                "name" => "Antônio Martins, Rio Grande do Norte",
                "latitude" => -6.21367,
                "longitude" => -37.8834
            ],
            [
                "name" => "Apodi, Rio Grande do Norte",
                "latitude" => -5.65349,
                "longitude" => -37.7946
            ],
            [
                "name" => "Areia Branca, Rio Grande do Norte",
                "latitude" => -4.95254,
                "longitude" => -37.1252
            ],
            [
                "name" => "Arês, Rio Grande do Norte",
                "latitude" => -6.18831,
                "longitude" => -35.1608
            ],
            [
                "name" => "Augusto Severo (Campo Grande), Rio Grande do Norte",
                "latitude" => -5.86206,
                "longitude" => -37.3135
            ],
            [
                "name" => "Baía Formosa, Rio Grande do Norte",
                "latitude" => -6.37161,
                "longitude" => -35.0033
            ],
            [
                "name" => "Baraúna, Rio Grande do Norte",
                "latitude" => -5.06977,
                "longitude" => -37.6129
            ],
            [
                "name" => "Barcelona, Rio Grande do Norte",
                "latitude" => -5.94284,
                "longitude" => -35.9247
            ],
            [
                "name" => "Bento Fernandes, Rio Grande do Norte",
                "latitude" => -5.69906,
                "longitude" => -35.813
            ],
            [
                "name" => "Bodó, Rio Grande do Norte",
                "latitude" => -5.98027,
                "longitude" => -36.4167
            ],
            [
                "name" => "Bom Jesus, Rio Grande do Norte",
                "latitude" => -5.98648,
                "longitude" => -35.5792
            ],
            [
                "name" => "Brejinho, Rio Grande do Norte",
                "latitude" => -6.18566,
                "longitude" => -35.3591
            ],
            [
                "name" => "Caiçara do Norte, Rio Grande do Norte",
                "latitude" => -5.07091,
                "longitude" => -36.0717
            ],
            [
                "name" => "Caiçara do Rio do Vento, Rio Grande do Norte",
                "latitude" => -5.76541,
                "longitude" => -35.9938
            ],
            [
                "name" => "Caicó, Rio Grande do Norte",
                "latitude" => -6.45441,
                "longitude" => -37.1067
            ],
            [
                "name" => "Campo Redondo, Rio Grande do Norte",
                "latitude" => -6.23829,
                "longitude" => -36.1888
            ],
            [
                "name" => "Canguaretama, Rio Grande do Norte",
                "latitude" => -6.37193,
                "longitude" => -35.1281
            ],
            [
                "name" => "Caraúbas, Rio Grande do Norte",
                "latitude" => -5.78387,
                "longitude" => -37.5586
            ],
            [
                "name" => "Carnaúba dos Dantas, Rio Grande do Norte",
                "latitude" => -6.55015,
                "longitude" => -36.5868
            ],
            [
                "name" => "Carnaubais, Rio Grande do Norte",
                "latitude" => -5.34181,
                "longitude" => -36.8335
            ],
            [
                "name" => "Ceará-Mirim, Rio Grande do Norte",
                "latitude" => -5.64323,
                "longitude" => -35.4247
            ],
            [
                "name" => "Cerro Corá, Rio Grande do Norte",
                "latitude" => -6.03503,
                "longitude" => -36.3503
            ],
            [
                "name" => "Coronel Ezequiel, Rio Grande do Norte",
                "latitude" => -6.3748,
                "longitude" => -36.2223
            ],
            [
                "name" => "Coronel João Pessoa, Rio Grande do Norte",
                "latitude" => -6.24974,
                "longitude" => -38.4441
            ],
            [
                "name" => "Cruzeta, Rio Grande do Norte",
                "latitude" => -6.40894,
                "longitude" => -36.7782
            ],
            [
                "name" => "Currais Novos, Rio Grande do Norte",
                "latitude" => -6.25484,
                "longitude" => -36.5146
            ],
            [
                "name" => "Doutor Severiano, Rio Grande do Norte",
                "latitude" => -6.08082,
                "longitude" => -38.3794
            ],
            [
                "name" => "Parnamirim, Rio Grande do Norte",
                "latitude" => -5.91116,
                "longitude" => -35.271
            ],
            [
                "name" => "Encanto, Rio Grande do Norte",
                "latitude" => -6.10691,
                "longitude" => -38.3033
            ],
            [
                "name" => "Equador, Rio Grande do Norte",
                "latitude" => -6.93835,
                "longitude" => -36.717
            ],
            [
                "name" => "Espírito Santo, Rio Grande do Norte",
                "latitude" => -6.33563,
                "longitude" => -35.3052
            ],
            [
                "name" => "Extremoz, Rio Grande do Norte",
                "latitude" => -5.70143,
                "longitude" => -35.3048
            ],
            [
                "name" => "Felipe Guerra, Rio Grande do Norte",
                "latitude" => -5.59274,
                "longitude" => -37.6875
            ],
            [
                "name" => "Fernando Pedroza, Rio Grande do Norte",
                "latitude" => -5.69096,
                "longitude" => -36.5282
            ],
            [
                "name" => "Florânia, Rio Grande do Norte",
                "latitude" => -6.12264,
                "longitude" => -36.8226
            ],
            [
                "name" => "Francisco Dantas, Rio Grande do Norte",
                "latitude" => -6.07234,
                "longitude" => -38.1212
            ],
            [
                "name" => "Frutuoso Gomes, Rio Grande do Norte",
                "latitude" => -6.15669,
                "longitude" => -37.8375
            ],
            [
                "name" => "Galinhos, Rio Grande do Norte",
                "latitude" => -5.0909,
                "longitude" => -36.2754
            ],
            [
                "name" => "Goianinha, Rio Grande do Norte",
                "latitude" => -6.26486,
                "longitude" => -35.1943
            ],
            [
                "name" => "Governador Dix-Sept Rosado, Rio Grande do Norte",
                "latitude" => -5.44887,
                "longitude" => -37.5183
            ],
            [
                "name" => "Grossos, Rio Grande do Norte",
                "latitude" => -4.98068,
                "longitude" => -37.1621
            ],
            [
                "name" => "Guamaré, Rio Grande do Norte",
                "latitude" => -5.10619,
                "longitude" => -36.3222
            ],
            [
                "name" => "Ielmo Marinho, Rio Grande do Norte",
                "latitude" => -5.82447,
                "longitude" => -35.55
            ],
            [
                "name" => "Ipanguaçu, Rio Grande do Norte",
                "latitude" => -5.48984,
                "longitude" => -36.8501
            ],
            [
                "name" => "Ipueira, Rio Grande do Norte",
                "latitude" => -6.80596,
                "longitude" => -37.2045
            ],
            [
                "name" => "Itajá, Rio Grande do Norte",
                "latitude" => -5.63894,
                "longitude" => -36.8712
            ],
            [
                "name" => "Itaú, Rio Grande do Norte",
                "latitude" => -5.8363,
                "longitude" => -37.9912
            ],
            [
                "name" => "Jaçanã, Rio Grande do Norte",
                "latitude" => -6.41856,
                "longitude" => -36.2031
            ],
            [
                "name" => "Jandaíra, Rio Grande do Norte",
                "latitude" => -5.35211,
                "longitude" => -36.1278
            ],
            [
                "name" => "Janduís, Rio Grande do Norte",
                "latitude" => -6.01474,
                "longitude" => -37.4048
            ],
            [
                "name" => "Januário Cicco (Boa Saúde), Rio Grande do Norte",
                "latitude" => -6.16566,
                "longitude" => -35.6219
            ],
            [
                "name" => "Japi, Rio Grande do Norte",
                "latitude" => -6.46544,
                "longitude" => -35.9346
            ],
            [
                "name" => "Jardim de Angicos, Rio Grande do Norte",
                "latitude" => -5.64999,
                "longitude" => -35.9713
            ],
            [
                "name" => "Jardim de Piranhas, Rio Grande do Norte",
                "latitude" => -6.37665,
                "longitude" => -37.3496
            ],
            [
                "name" => "Jardim do Seridó, Rio Grande do Norte",
                "latitude" => -6.58047,
                "longitude" => -36.7736
            ],
            [
                "name" => "João Câmara, Rio Grande do Norte",
                "latitude" => -5.54094,
                "longitude" => -35.8122
            ],
            [
                "name" => "João Dias, Rio Grande do Norte",
                "latitude" => -6.27215,
                "longitude" => -37.7885
            ],
            [
                "name" => "José da Penha, Rio Grande do Norte",
                "latitude" => -6.31095,
                "longitude" => -38.2823
            ],
            [
                "name" => "Jucurutu, Rio Grande do Norte",
                "latitude" => -6.0306,
                "longitude" => -37.009
            ],
            [
                "name" => "Jundiá, Rio Grande do Norte",
                "latitude" => -6.26866,
                "longitude" => -35.3495
            ],
            [
                "name" => "Lagoa d'Anta, Rio Grande do Norte",
                "latitude" => -6.39493,
                "longitude" => -35.5949
            ],
            [
                "name" => "Lagoa de Pedras, Rio Grande do Norte",
                "latitude" => -6.15082,
                "longitude" => -35.4299
            ],
            [
                "name" => "Lagoa de Velhos, Rio Grande do Norte",
                "latitude" => -6.0119,
                "longitude" => -35.8729
            ],
            [
                "name" => "Lagoa Nova, Rio Grande do Norte",
                "latitude" => -6.09339,
                "longitude" => -36.4703
            ],
            [
                "name" => "Lagoa Salgada, Rio Grande do Norte",
                "latitude" => -6.12295,
                "longitude" => -35.4724
            ],
            [
                "name" => "Lajes, Rio Grande do Norte",
                "latitude" => -5.69322,
                "longitude" => -36.247
            ],
            [
                "name" => "Lajes Pintadas, Rio Grande do Norte",
                "latitude" => -6.14943,
                "longitude" => -36.1171
            ],
            [
                "name" => "Lucrécia, Rio Grande do Norte",
                "latitude" => -6.10525,
                "longitude" => -37.8134
            ],
            [
                "name" => "Luís Gomes, Rio Grande do Norte",
                "latitude" => -6.40588,
                "longitude" => -38.3899
            ],
            [
                "name" => "Macaíba, Rio Grande do Norte",
                "latitude" => -5.85229,
                "longitude" => -35.3552
            ],
            [
                "name" => "Macau, Rio Grande do Norte",
                "latitude" => -5.10795,
                "longitude" => -36.6318
            ],
            [
                "name" => "Major Sales, Rio Grande do Norte",
                "latitude" => -6.39949,
                "longitude" => -38.324
            ],
            [
                "name" => "Marcelino Vieira, Rio Grande do Norte",
                "latitude" => -6.2846,
                "longitude" => -38.1642
            ],
            [
                "name" => "Martins, Rio Grande do Norte",
                "latitude" => -6.08279,
                "longitude" => -37.908
            ],
            [
                "name" => "Maxaranguape, Rio Grande do Norte",
                "latitude" => -5.52181,
                "longitude" => -35.2631
            ],
            [
                "name" => "Messias Targino, Rio Grande do Norte",
                "latitude" => -6.07194,
                "longitude" => -37.5158
            ],
            [
                "name" => "Montanhas, Rio Grande do Norte",
                "latitude" => -6.48522,
                "longitude" => -35.2842
            ],
            [
                "name" => "Monte Alegre, Rio Grande do Norte",
                "latitude" => -6.07063,
                "longitude" => -35.3253
            ],
            [
                "name" => "Monte das Gameleiras, Rio Grande do Norte",
                "latitude" => -6.43698,
                "longitude" => -35.7831
            ],
            [
                "name" => "Mossoró, Rio Grande do Norte",
                "latitude" => -5.18374,
                "longitude" => -37.3474
            ],
            [
                "name" => "Natal, Rio Grande do Norte",
                "latitude" => -5.79357,
                "longitude" => -35.1986
            ],
            [
                "name" => "Nísia Floresta, Rio Grande do Norte",
                "latitude" => -6.09329,
                "longitude" => -35.1991
            ],
            [
                "name" => "Nova Cruz, Rio Grande do Norte",
                "latitude" => -6.47511,
                "longitude" => -35.4286
            ],
            [
                "name" => "Olho-d'Água do Borges, Rio Grande do Norte",
                "latitude" => -5.9486,
                "longitude" => -37.7047
            ],
            [
                "name" => "Ouro Branco, Rio Grande do Norte",
                "latitude" => -6.6958,
                "longitude" => -36.9428
            ],
            [
                "name" => "Paraná, Rio Grande do Norte",
                "latitude" => -6.47565,
                "longitude" => -38.3057
            ],
            [
                "name" => "Paraú, Rio Grande do Norte",
                "latitude" => -5.76893,
                "longitude" => -37.1032
            ],
            [
                "name" => "Parazinho, Rio Grande do Norte",
                "latitude" => -5.22276,
                "longitude" => -35.8398
            ],
            [
                "name" => "Parelhas, Rio Grande do Norte",
                "latitude" => -6.68491,
                "longitude" => -36.6566
            ],
            [
                "name" => "Rio do Fogo, Rio Grande do Norte",
                "latitude" => -5.2765,
                "longitude" => -35.3794
            ],
            [
                "name" => "Passa e Fica, Rio Grande do Norte",
                "latitude" => -6.43018,
                "longitude" => -35.6442
            ],
            [
                "name" => "Passagem, Rio Grande do Norte",
                "latitude" => -6.27268,
                "longitude" => -35.37
            ],
            [
                "name" => "Patu, Rio Grande do Norte",
                "latitude" => -6.10656,
                "longitude" => -37.6356
            ],
            [
                "name" => "Santa Maria, Rio Grande do Norte",
                "latitude" => -5.83802,
                "longitude" => -35.6914
            ],
            [
                "name" => "Pau dos Ferros, Rio Grande do Norte",
                "latitude" => -6.10498,
                "longitude" => -38.2077
            ],
            [
                "name" => "Pedra Grande, Rio Grande do Norte",
                "latitude" => -5.14988,
                "longitude" => -35.876
            ],
            [
                "name" => "Pedra Preta, Rio Grande do Norte",
                "latitude" => -5.57352,
                "longitude" => -36.1084
            ],
            [
                "name" => "Pedro Avelino, Rio Grande do Norte",
                "latitude" => -5.5161,
                "longitude" => -36.3867
            ],
            [
                "name" => "Pedro Velho, Rio Grande do Norte",
                "latitude" => -6.4356,
                "longitude" => -35.2195
            ],
            [
                "name" => "Pendências, Rio Grande do Norte",
                "latitude" => -5.2564,
                "longitude" => -36.7095
            ],
            [
                "name" => "Pilões, Rio Grande do Norte",
                "latitude" => -6.26364,
                "longitude" => -38.0461
            ],
            [
                "name" => "Poço Branco, Rio Grande do Norte",
                "latitude" => -5.62233,
                "longitude" => -35.6635
            ],
            [
                "name" => "Portalegre, Rio Grande do Norte",
                "latitude" => -6.02064,
                "longitude" => -37.9865
            ],
            [
                "name" => "Porto do Mangue, Rio Grande do Norte",
                "latitude" => -5.05441,
                "longitude" => -36.7887
            ],
            [
                "name" => "Serra Caiada, Rio Grande do Norte",
                "latitude" => -6.10478,
                "longitude" => -35.7113
            ],
            [
                "name" => "Pureza, Rio Grande do Norte",
                "latitude" => -5.46393,
                "longitude" => -35.5554
            ],
            [
                "name" => "Rafael Fernandes, Rio Grande do Norte",
                "latitude" => -6.18987,
                "longitude" => -38.2211
            ],
            [
                "name" => "Rafael Godeiro, Rio Grande do Norte",
                "latitude" => -6.07244,
                "longitude" => -37.716
            ],
            [
                "name" => "Riacho da Cruz, Rio Grande do Norte",
                "latitude" => -5.92654,
                "longitude" => -37.949
            ],
            [
                "name" => "Riacho de Santana, Rio Grande do Norte",
                "latitude" => -6.25139,
                "longitude" => -38.3116
            ],
            [
                "name" => "Riachuelo, Rio Grande do Norte",
                "latitude" => -5.82156,
                "longitude" => -35.8215
            ],
            [
                "name" => "Rodolfo Fernandes, Rio Grande do Norte",
                "latitude" => -5.78393,
                "longitude" => -38.0579
            ],
            [
                "name" => "Tibau, Rio Grande do Norte",
                "latitude" => -4.83729,
                "longitude" => -37.2554
            ],
            [
                "name" => "Ruy Barbosa, Rio Grande do Norte",
                "latitude" => -5.88745,
                "longitude" => -35.933
            ],
            [
                "name" => "Santa Cruz, Rio Grande do Norte",
                "latitude" => -6.22475,
                "longitude" => -36.0193
            ],
            [
                "name" => "Santana do Matos, Rio Grande do Norte",
                "latitude" => -5.94605,
                "longitude" => -36.6578
            ],
            [
                "name" => "Santana do Seridó, Rio Grande do Norte",
                "latitude" => -6.76643,
                "longitude" => -36.7312
            ],
            [
                "name" => "Santo Antônio, Rio Grande do Norte",
                "latitude" => -6.31195,
                "longitude" => -35.4739
            ],
            [
                "name" => "São Bento do Norte, Rio Grande do Norte",
                "latitude" => -5.09259,
                "longitude" => -35.9587
            ],
            [
                "name" => "São Bento do Trairí, Rio Grande do Norte",
                "latitude" => -6.33798,
                "longitude" => -36.0863
            ],
            [
                "name" => "São Fernando, Rio Grande do Norte",
                "latitude" => -6.37975,
                "longitude" => -37.1864
            ],
            [
                "name" => "São Francisco do Oeste, Rio Grande do Norte",
                "latitude" => -5.97472,
                "longitude" => -38.1519
            ],
            [
                "name" => "São Gonçalo do Amarante, Rio Grande do Norte",
                "latitude" => -5.79068,
                "longitude" => -35.3257
            ],
            [
                "name" => "São João do Sabugi, Rio Grande do Norte",
                "latitude" => -6.71387,
                "longitude" => -37.2027
            ],
            [
                "name" => "São José de Mipibu, Rio Grande do Norte",
                "latitude" => -6.0773,
                "longitude" => -35.2417
            ],
            [
                "name" => "São José do Campestre, Rio Grande do Norte",
                "latitude" => -6.31087,
                "longitude" => -35.7067
            ],
            [
                "name" => "São José do Seridó, Rio Grande do Norte",
                "latitude" => -6.44002,
                "longitude" => -36.8746
            ],
            [
                "name" => "São Miguel, Rio Grande do Norte",
                "latitude" => -6.20283,
                "longitude" => -38.4947
            ],
            [
                "name" => "São Miguel do Gostoso, Rio Grande do Norte",
                "latitude" => -5.12302,
                "longitude" => -35.6354
            ],
            [
                "name" => "São Paulo do Potengi, Rio Grande do Norte",
                "latitude" => -5.8994,
                "longitude" => -35.7642
            ],
            [
                "name" => "São Pedro, Rio Grande do Norte",
                "latitude" => -5.90559,
                "longitude" => -35.6317
            ],
            [
                "name" => "São Rafael, Rio Grande do Norte",
                "latitude" => -5.79791,
                "longitude" => -36.8778
            ],
            [
                "name" => "São Tomé, Rio Grande do Norte",
                "latitude" => -5.96404,
                "longitude" => -36.0798
            ],
            [
                "name" => "São Vicente, Rio Grande do Norte",
                "latitude" => -6.21893,
                "longitude" => -36.6827
            ],
            [
                "name" => "Senador Elói de Souza, Rio Grande do Norte",
                "latitude" => -6.03334,
                "longitude" => -35.6978
            ],
            [
                "name" => "Senador Georgino Avelino, Rio Grande do Norte",
                "latitude" => -6.1576,
                "longitude" => -35.1299
            ],
            [
                "name" => "Serra de São Bento, Rio Grande do Norte",
                "latitude" => -6.41762,
                "longitude" => -35.7033
            ],
            [
                "name" => "Serra do Mel, Rio Grande do Norte",
                "latitude" => -5.17725,
                "longitude" => -37.0242
            ],
            [
                "name" => "Serra Negra do Norte, Rio Grande do Norte",
                "latitude" => -6.66031,
                "longitude" => -37.3996
            ],
            [
                "name" => "Serrinha, Rio Grande do Norte",
                "latitude" => -6.28181,
                "longitude" => -35.5
            ],
            [
                "name" => "Serrinha dos Pintos, Rio Grande do Norte",
                "latitude" => -6.11087,
                "longitude" => -37.9548
            ],
            [
                "name" => "Severiano Melo, Rio Grande do Norte",
                "latitude" => -5.77666,
                "longitude" => -37.957
            ],
            [
                "name" => "Sítio Novo, Rio Grande do Norte",
                "latitude" => -6.11132,
                "longitude" => -35.909
            ],
            [
                "name" => "Taboleiro Grande, Rio Grande do Norte",
                "latitude" => -5.91948,
                "longitude" => -38.0367
            ],
            [
                "name" => "Taipu, Rio Grande do Norte",
                "latitude" => -5.63058,
                "longitude" => -35.5918
            ],
            [
                "name" => "Tangará, Rio Grande do Norte",
                "latitude" => -6.19649,
                "longitude" => -35.7989
            ],
            [
                "name" => "Tenente Ananias, Rio Grande do Norte",
                "latitude" => -6.45823,
                "longitude" => -38.182
            ],
            [
                "name" => "Tenente Laurentino Cruz, Rio Grande do Norte",
                "latitude" => -6.1378,
                "longitude" => -36.7135
            ],
            [
                "name" => "Tibau do Sul, Rio Grande do Norte",
                "latitude" => -6.19176,
                "longitude" => -35.0866
            ],
            [
                "name" => "Timbaúba dos Batistas, Rio Grande do Norte",
                "latitude" => -6.45768,
                "longitude" => -37.2745
            ],
            [
                "name" => "Touros, Rio Grande do Norte",
                "latitude" => -5.20182,
                "longitude" => -35.4621
            ],
            [
                "name" => "Triunfo Potiguar, Rio Grande do Norte",
                "latitude" => -5.85408,
                "longitude" => -37.1786
            ],
            [
                "name" => "Umarizal, Rio Grande do Norte",
                "latitude" => -5.98238,
                "longitude" => -37.818
            ],
            [
                "name" => "Upanema, Rio Grande do Norte",
                "latitude" => -5.63761,
                "longitude" => -37.2635
            ],
            [
                "name" => "Várzea, Rio Grande do Norte",
                "latitude" => -6.34641,
                "longitude" => -35.3732
            ],
            [
                "name" => "Venha-Ver, Rio Grande do Norte",
                "latitude" => -6.32016,
                "longitude" => -38.4896
            ],
            [
                "name" => "Vera Cruz, Rio Grande do Norte",
                "latitude" => -6.04399,
                "longitude" => -35.428
            ],
            [
                "name" => "Viçosa, Rio Grande do Norte",
                "latitude" => -5.98253,
                "longitude" => -37.9462
            ],
            [
                "name" => "Vila Flor, Rio Grande do Norte",
                "latitude" => -6.31287,
                "longitude" => -35.067
            ],
            [
                "name" => "Água Branca, Paraíba",
                "latitude" => -7.51144,
                "longitude" => -37.6357
            ],
            [
                "name" => "Aguiar, Paraíba",
                "latitude" => -7.0918,
                "longitude" => -38.1681
            ],
            [
                "name" => "Alagoa Grande, Paraíba",
                "latitude" => -7.03943,
                "longitude" => -35.6206
            ],
            [
                "name" => "Alagoa Nova, Paraíba",
                "latitude" => -7.05377,
                "longitude" => -35.7591
            ],
            [
                "name" => "Alagoinha, Paraíba",
                "latitude" => -6.94657,
                "longitude" => -35.5332
            ],
            [
                "name" => "Alcantil, Paraíba",
                "latitude" => -7.73668,
                "longitude" => -36.0511
            ],
            [
                "name" => "Algodão de Jandaíra, Paraíba",
                "latitude" => -6.89292,
                "longitude" => -36.0129
            ],
            [
                "name" => "Alhandra, Paraíba",
                "latitude" => -7.42977,
                "longitude" => -34.9057
            ],
            [
                "name" => "São João do Rio do Peixe, Paraíba",
                "latitude" => -6.72195,
                "longitude" => -38.4468
            ],
            [
                "name" => "Amparo, Paraíba",
                "latitude" => -7.55502,
                "longitude" => -37.0628
            ],
            [
                "name" => "Aparecida, Paraíba",
                "latitude" => -6.78466,
                "longitude" => -38.0803
            ],
            [
                "name" => "Araçagi, Paraíba",
                "latitude" => -6.84374,
                "longitude" => -35.3737
            ],
            [
                "name" => "Arara, Paraíba",
                "latitude" => -6.82813,
                "longitude" => -35.7552
            ],
            [
                "name" => "Araruna, Paraíba",
                "latitude" => -6.54848,
                "longitude" => -35.7498
            ],
            [
                "name" => "Areia, Paraíba",
                "latitude" => -6.96396,
                "longitude" => -35.6977
            ],
            [
                "name" => "Areia de Baraúnas, Paraíba",
                "latitude" => -7.11702,
                "longitude" => -36.9404
            ],
            [
                "name" => "Areial, Paraíba",
                "latitude" => -7.04789,
                "longitude" => -35.9313
            ],
            [
                "name" => "Aroeiras, Paraíba",
                "latitude" => -7.54473,
                "longitude" => -35.7066
            ],
            [
                "name" => "Assunção, Paraíba",
                "latitude" => -7.07231,
                "longitude" => -36.725
            ],
            [
                "name" => "Baía da Traição, Paraíba",
                "latitude" => -6.69209,
                "longitude" => -34.9381
            ],
            [
                "name" => "Bananeiras, Paraíba",
                "latitude" => -6.74775,
                "longitude" => -35.6246
            ],
            [
                "name" => "Baraúna, Paraíba",
                "latitude" => -6.63484,
                "longitude" => -36.2601
            ],
            [
                "name" => "Barra de Santana, Paraíba",
                "latitude" => -7.51809,
                "longitude" => -35.9913
            ],
            [
                "name" => "Barra de Santa Rosa, Paraíba",
                "latitude" => -6.71816,
                "longitude" => -36.0671
            ],
            [
                "name" => "Barra de São Miguel, Paraíba",
                "latitude" => -7.74603,
                "longitude" => -36.3209
            ],
            [
                "name" => "Bayeux, Paraíba",
                "latitude" => -7.1238,
                "longitude" => -34.9293
            ],
            [
                "name" => "Belém, Paraíba",
                "latitude" => -6.74261,
                "longitude" => -35.5166
            ],
            [
                "name" => "Belém do Brejo do Cruz, Paraíba",
                "latitude" => -6.18515,
                "longitude" => -37.5348
            ],
            [
                "name" => "Bernardino Batista, Paraíba",
                "latitude" => -6.44572,
                "longitude" => -38.5521
            ],
            [
                "name" => "Boa Ventura, Paraíba",
                "latitude" => -7.40982,
                "longitude" => -38.2113
            ],
            [
                "name" => "Boa Vista, Paraíba",
                "latitude" => -7.26365,
                "longitude" => -36.2357
            ],
            [
                "name" => "Bom Jesus, Paraíba",
                "latitude" => -6.81601,
                "longitude" => -38.6453
            ],
            [
                "name" => "Bom Sucesso, Paraíba",
                "latitude" => -6.44176,
                "longitude" => -37.9234
            ],
            [
                "name" => "Bonito de Santa Fé, Paraíba",
                "latitude" => -7.31341,
                "longitude" => -38.5133
            ],
            [
                "name" => "Boqueirão, Paraíba",
                "latitude" => -7.487,
                "longitude" => -36.1309
            ],
            [
                "name" => "Igaracy, Paraíba",
                "latitude" => -7.17184,
                "longitude" => -38.1478
            ],
            [
                "name" => "Borborema, Paraíba",
                "latitude" => -6.80199,
                "longitude" => -35.6187
            ],
            [
                "name" => "Brejo do Cruz, Paraíba",
                "latitude" => -6.34185,
                "longitude" => -37.4943
            ],
            [
                "name" => "Brejo dos Santos, Paraíba",
                "latitude" => -6.37065,
                "longitude" => -37.8253
            ],
            [
                "name" => "Caaporã, Paraíba",
                "latitude" => -7.51351,
                "longitude" => -34.9055
            ],
            [
                "name" => "Cabaceiras, Paraíba",
                "latitude" => -7.48899,
                "longitude" => -36.287
            ],
            [
                "name" => "Cabedelo, Paraíba",
                "latitude" => -6.98731,
                "longitude" => -34.8284
            ],
            [
                "name" => "Cachoeira dos Índios, Paraíba",
                "latitude" => -6.91353,
                "longitude" => -38.676
            ],
            [
                "name" => "Cacimba de Areia, Paraíba",
                "latitude" => -7.12128,
                "longitude" => -37.1563
            ],
            [
                "name" => "Cacimba de Dentro, Paraíba",
                "latitude" => -6.6386,
                "longitude" => -35.7778
            ],
            [
                "name" => "Cacimbas, Paraíba",
                "latitude" => -7.20721,
                "longitude" => -37.0604
            ],
            [
                "name" => "Caiçara, Paraíba",
                "latitude" => -6.62115,
                "longitude" => -35.4581
            ],
            [
                "name" => "Cajazeiras, Paraíba",
                "latitude" => -6.88004,
                "longitude" => -38.5577
            ],
            [
                "name" => "Cajazeirinhas, Paraíba",
                "latitude" => -6.96016,
                "longitude" => -37.8009
            ],
            [
                "name" => "Caldas Brandão, Paraíba",
                "latitude" => -7.1025,
                "longitude" => -35.3272
            ],
            [
                "name" => "Camalaú, Paraíba",
                "latitude" => -7.88503,
                "longitude" => -36.8242
            ],
            [
                "name" => "Campina Grande, Paraíba",
                "latitude" => -7.22196,
                "longitude" => -35.8731
            ],
            [
                "name" => "Capim, Paraíba",
                "latitude" => -6.91624,
                "longitude" => -35.1673
            ],
            [
                "name" => "Caraúbas, Paraíba",
                "latitude" => -7.72049,
                "longitude" => -36.492
            ],
            [
                "name" => "Carrapateira, Paraíba",
                "latitude" => -7.03414,
                "longitude" => -38.3399
            ],
            [
                "name" => "Casserengue, Paraíba",
                "latitude" => -6.77954,
                "longitude" => -35.8179
            ],
            [
                "name" => "Catingueira, Paraíba",
                "latitude" => -7.12008,
                "longitude" => -37.6064
            ],
            [
                "name" => "Catolé do Rocha, Paraíba",
                "latitude" => -6.34062,
                "longitude" => -37.747
            ],
            [
                "name" => "Caturité, Paraíba",
                "latitude" => -7.41659,
                "longitude" => -36.0306
            ],
            [
                "name" => "Conceição, Paraíba",
                "latitude" => -7.55106,
                "longitude" => -38.5014
            ],
            [
                "name" => "Condado, Paraíba",
                "latitude" => -6.89831,
                "longitude" => -37.606
            ],
            [
                "name" => "Conde, Paraíba",
                "latitude" => -7.25746,
                "longitude" => -34.8999
            ],
            [
                "name" => "Congo, Paraíba",
                "latitude" => -7.79078,
                "longitude" => -36.6581
            ],
            [
                "name" => "Coremas, Paraíba",
                "latitude" => -7.00712,
                "longitude" => -37.9346
            ],
            [
                "name" => "Coxixola, Paraíba",
                "latitude" => -7.62365,
                "longitude" => -36.6064
            ],
            [
                "name" => "Cruz do Espírito Santo, Paraíba",
                "latitude" => -7.13902,
                "longitude" => -35.0857
            ],
            [
                "name" => "Cubati, Paraíba",
                "latitude" => -6.86686,
                "longitude" => -36.3619
            ],
            [
                "name" => "Cuité, Paraíba",
                "latitude" => -6.47647,
                "longitude" => -36.1515
            ],
            [
                "name" => "Cuitegi, Paraíba",
                "latitude" => -6.89058,
                "longitude" => -35.5215
            ],
            [
                "name" => "Cuité de Mamanguape, Paraíba",
                "latitude" => -6.91292,
                "longitude" => -35.2502
            ],
            [
                "name" => "Curral de Cima, Paraíba",
                "latitude" => -6.72325,
                "longitude" => -35.2639
            ],
            [
                "name" => "Curral Velho, Paraíba",
                "latitude" => -7.53075,
                "longitude" => -38.1962
            ],
            [
                "name" => "Damião, Paraíba",
                "latitude" => -6.63161,
                "longitude" => -35.9101
            ],
            [
                "name" => "Desterro, Paraíba",
                "latitude" => -7.287,
                "longitude" => -37.0925
            ],
            [
                "name" => "Vista Serrana, Paraíba",
                "latitude" => -6.7303,
                "longitude" => -37.5704
            ],
            [
                "name" => "Diamante, Paraíba",
                "latitude" => -7.41738,
                "longitude" => -38.2615
            ],
            [
                "name" => "Dona Inês, Paraíba",
                "latitude" => -6.61566,
                "longitude" => -35.6205
            ],
            [
                "name" => "Duas Estradas, Paraíba",
                "latitude" => -6.68499,
                "longitude" => -35.418
            ],
            [
                "name" => "Emas, Paraíba",
                "latitude" => -7.09964,
                "longitude" => -37.7163
            ],
            [
                "name" => "Esperança, Paraíba",
                "latitude" => -7.02278,
                "longitude" => -35.8597
            ],
            [
                "name" => "Fagundes, Paraíba",
                "latitude" => -7.34454,
                "longitude" => -35.7931
            ],
            [
                "name" => "Frei Martinho, Paraíba",
                "latitude" => -6.39759,
                "longitude" => -36.4526
            ],
            [
                "name" => "Gado Bravo, Paraíba",
                "latitude" => -7.58279,
                "longitude" => -35.7899
            ],
            [
                "name" => "Guarabira, Paraíba",
                "latitude" => -6.85064,
                "longitude" => -35.485
            ],
            [
                "name" => "Gurinhém, Paraíba",
                "latitude" => -7.1233,
                "longitude" => -35.4222
            ],
            [
                "name" => "Gurjão, Paraíba",
                "latitude" => -7.24833,
                "longitude" => -36.4923
            ],
            [
                "name" => "Ibiara, Paraíba",
                "latitude" => -7.47957,
                "longitude" => -38.4059
            ],
            [
                "name" => "Imaculada, Paraíba",
                "latitude" => -7.3889,
                "longitude" => -37.5079
            ],
            [
                "name" => "Ingá, Paraíba",
                "latitude" => -7.28144,
                "longitude" => -35.605
            ],
            [
                "name" => "Itabaiana, Paraíba",
                "latitude" => -7.33167,
                "longitude" => -35.3317
            ],
            [
                "name" => "Itaporanga, Paraíba",
                "latitude" => -7.30202,
                "longitude" => -38.1504
            ],
            [
                "name" => "Itapororoca, Paraíba",
                "latitude" => -6.82374,
                "longitude" => -35.2406
            ],
            [
                "name" => "Itatuba, Paraíba",
                "latitude" => -7.38115,
                "longitude" => -35.638
            ],
            [
                "name" => "Jacaraú, Paraíba",
                "latitude" => -6.61453,
                "longitude" => -35.289
            ],
            [
                "name" => "Jericó, Paraíba",
                "latitude" => -6.54577,
                "longitude" => -37.8036
            ],
            [
                "name" => "João Pessoa, Paraíba",
                "latitude" => -7.11509,
                "longitude" => -34.8641
            ],
            [
                "name" => "Juarez Távora, Paraíba",
                "latitude" => -7.1713,
                "longitude" => -35.5686
            ],
            [
                "name" => "Juazeirinho, Paraíba",
                "latitude" => -7.06092,
                "longitude" => -36.5793
            ],
            [
                "name" => "Junco do Seridó, Paraíba",
                "latitude" => -6.99269,
                "longitude" => -36.7166
            ],
            [
                "name" => "Juripiranga, Paraíba",
                "latitude" => -7.36176,
                "longitude" => -35.2321
            ],
            [
                "name" => "Juru, Paraíba",
                "latitude" => -7.52983,
                "longitude" => -37.815
            ],
            [
                "name" => "Lagoa, Paraíba",
                "latitude" => -6.58572,
                "longitude" => -37.9127
            ],
            [
                "name" => "Lagoa de Dentro, Paraíba",
                "latitude" => -6.67213,
                "longitude" => -35.3706
            ],
            [
                "name" => "Lagoa Seca, Paraíba",
                "latitude" => -7.15535,
                "longitude" => -35.8491
            ],
            [
                "name" => "Lastro, Paraíba",
                "latitude" => -6.50603,
                "longitude" => -38.1742
            ],
            [
                "name" => "Livramento, Paraíba",
                "latitude" => -7.37113,
                "longitude" => -36.9491
            ],
            [
                "name" => "Logradouro, Paraíba",
                "latitude" => -6.61191,
                "longitude" => -35.4384
            ],
            [
                "name" => "Lucena, Paraíba",
                "latitude" => -6.90258,
                "longitude" => -34.8748
            ],
            [
                "name" => "Mãe d'Água, Paraíba",
                "latitude" => -7.25201,
                "longitude" => -37.4322
            ],
            [
                "name" => "Malta, Paraíba",
                "latitude" => -6.89719,
                "longitude" => -37.5221
            ],
            [
                "name" => "Mamanguape, Paraíba",
                "latitude" => -6.8337,
                "longitude" => -35.1213
            ],
            [
                "name" => "Manaíra, Paraíba",
                "latitude" => -7.70331,
                "longitude" => -38.1523
            ],
            [
                "name" => "Marcação, Paraíba",
                "latitude" => -6.76535,
                "longitude" => -35.0087
            ],
            [
                "name" => "Mari, Paraíba",
                "latitude" => -7.05942,
                "longitude" => -35.318
            ],
            [
                "name" => "Marizópolis, Paraíba",
                "latitude" => -6.82748,
                "longitude" => -38.3528
            ],
            [
                "name" => "Massaranduba, Paraíba",
                "latitude" => -7.18995,
                "longitude" => -35.7848
            ],
            [
                "name" => "Mataraca, Paraíba",
                "latitude" => -6.59673,
                "longitude" => -35.0531
            ],
            [
                "name" => "Matinhas, Paraíba",
                "latitude" => -7.12486,
                "longitude" => -35.7669
            ],
            [
                "name" => "Mato Grosso, Paraíba",
                "latitude" => -6.54018,
                "longitude" => -37.7279
            ],
            [
                "name" => "Maturéia, Paraíba",
                "latitude" => -7.26188,
                "longitude" => -37.351
            ],
            [
                "name" => "Mogeiro, Paraíba",
                "latitude" => -7.28517,
                "longitude" => -35.4832
            ],
            [
                "name" => "Montadas, Paraíba",
                "latitude" => -7.08848,
                "longitude" => -35.9592
            ],
            [
                "name" => "Monte Horebe, Paraíba",
                "latitude" => -7.20402,
                "longitude" => -38.5838
            ],
            [
                "name" => "Monteiro, Paraíba",
                "latitude" => -7.88363,
                "longitude" => -37.1184
            ],
            [
                "name" => "Mulungu, Paraíba",
                "latitude" => -7.02525,
                "longitude" => -35.46
            ],
            [
                "name" => "Natuba, Paraíba",
                "latitude" => -7.63514,
                "longitude" => -35.5586
            ],
            [
                "name" => "Nazarezinho, Paraíba",
                "latitude" => -6.9114,
                "longitude" => -38.322
            ],
            [
                "name" => "Nova Floresta, Paraíba",
                "latitude" => -6.45056,
                "longitude" => -36.2057
            ],
            [
                "name" => "Nova Olinda, Paraíba",
                "latitude" => -7.47232,
                "longitude" => -38.0382
            ],
            [
                "name" => "Nova Palmeira, Paraíba",
                "latitude" => -6.67122,
                "longitude" => -36.422
            ],
            [
                "name" => "Olho d'Água, Paraíba",
                "latitude" => -7.22118,
                "longitude" => -37.7406
            ],
            [
                "name" => "Olivedos, Paraíba",
                "latitude" => -6.98434,
                "longitude" => -36.241
            ],
            [
                "name" => "Ouro Velho, Paraíba",
                "latitude" => -7.61604,
                "longitude" => -37.1519
            ],
            [
                "name" => "Parari, Paraíba",
                "latitude" => -7.30975,
                "longitude" => -36.6522
            ],
            [
                "name" => "Passagem, Paraíba",
                "latitude" => -7.13467,
                "longitude" => -37.0433
            ],
            [
                "name" => "Patos, Paraíba",
                "latitude" => -7.01743,
                "longitude" => -37.2747
            ],
            [
                "name" => "Paulista, Paraíba",
                "latitude" => -6.59138,
                "longitude" => -37.6185
            ],
            [
                "name" => "Pedra Branca, Paraíba",
                "latitude" => -7.42169,
                "longitude" => -38.0689
            ],
            [
                "name" => "Pedra Lavrada, Paraíba",
                "latitude" => -6.74997,
                "longitude" => -36.4758
            ],
            [
                "name" => "Pedras de Fogo, Paraíba",
                "latitude" => -7.39107,
                "longitude" => -35.1065
            ],
            [
                "name" => "Piancó, Paraíba",
                "latitude" => -7.19282,
                "longitude" => -37.9289
            ],
            [
                "name" => "Picuí, Paraíba",
                "latitude" => -6.50845,
                "longitude" => -36.3497
            ],
            [
                "name" => "Pilar, Paraíba",
                "latitude" => -7.26403,
                "longitude" => -35.2523
            ],
            [
                "name" => "Pilões, Paraíba",
                "latitude" => -6.86827,
                "longitude" => -35.613
            ],
            [
                "name" => "Pilõezinhos, Paraíba",
                "latitude" => -6.84277,
                "longitude" => -35.531
            ],
            [
                "name" => "Pirpirituba, Paraíba",
                "latitude" => -6.77922,
                "longitude" => -35.4906
            ],
            [
                "name" => "Pitimbu, Paraíba",
                "latitude" => -7.4664,
                "longitude" => -34.8151
            ],
            [
                "name" => "Pocinhos, Paraíba",
                "latitude" => -7.06658,
                "longitude" => -36.0668
            ],
            [
                "name" => "Poço Dantas, Paraíba",
                "latitude" => -6.39876,
                "longitude" => -38.4909
            ],
            [
                "name" => "Poço de José de Moura, Paraíba",
                "latitude" => -6.56401,
                "longitude" => -38.5111
            ],
            [
                "name" => "Pombal, Paraíba",
                "latitude" => -6.76606,
                "longitude" => -37.8003
            ],
            [
                "name" => "Prata, Paraíba",
                "latitude" => -7.68826,
                "longitude" => -37.0801
            ],
            [
                "name" => "Princesa Isabel, Paraíba",
                "latitude" => -7.73175,
                "longitude" => -37.9886
            ],
            [
                "name" => "Puxinanã, Paraíba",
                "latitude" => -7.15479,
                "longitude" => -35.9543
            ],
            [
                "name" => "Queimadas, Paraíba",
                "latitude" => -7.35029,
                "longitude" => -35.9031
            ],
            [
                "name" => "Quixabá, Paraíba",
                "latitude" => -7.0224,
                "longitude" => -37.1458
            ],
            [
                "name" => "Remígio, Paraíba",
                "latitude" => -6.94992,
                "longitude" => -35.8011
            ],
            [
                "name" => "Pedro Régis, Paraíba",
                "latitude" => -6.63323,
                "longitude" => -35.2966
            ],
            [
                "name" => "Riachão, Paraíba",
                "latitude" => -6.54269,
                "longitude" => -35.661
            ],
            [
                "name" => "Riachão do Bacamarte, Paraíba",
                "latitude" => -7.25347,
                "longitude" => -35.6693
            ],
            [
                "name" => "Riachão do Poço, Paraíba",
                "latitude" => -7.14173,
                "longitude" => -35.2914
            ],
            [
                "name" => "Riacho de Santo Antônio, Paraíba",
                "latitude" => -7.68023,
                "longitude" => -36.157
            ],
            [
                "name" => "Riacho dos Cavalos, Paraíba",
                "latitude" => -6.44067,
                "longitude" => -37.6483
            ],
            [
                "name" => "Rio Tinto, Paraíba",
                "latitude" => -6.80383,
                "longitude" => -35.0776
            ],
            [
                "name" => "Salgadinho, Paraíba",
                "latitude" => -7.10098,
                "longitude" => -36.8458
            ],
            [
                "name" => "Salgado de São Félix, Paraíba",
                "latitude" => -7.35337,
                "longitude" => -35.4305
            ],
            [
                "name" => "Santa Cecília, Paraíba",
                "latitude" => -7.7389,
                "longitude" => -35.8764
            ],
            [
                "name" => "Santa Cruz, Paraíba",
                "latitude" => -6.5237,
                "longitude" => -38.0617
            ],
            [
                "name" => "Santa Helena, Paraíba",
                "latitude" => -6.7176,
                "longitude" => -38.6427
            ],
            [
                "name" => "Santa Inês, Paraíba",
                "latitude" => -7.621,
                "longitude" => -38.554
            ],
            [
                "name" => "Santa Luzia, Paraíba",
                "latitude" => -6.86092,
                "longitude" => -36.9178
            ],
            [
                "name" => "Santana de Mangueira, Paraíba",
                "latitude" => -7.54705,
                "longitude" => -38.3236
            ],
            [
                "name" => "Santana dos Garrotes, Paraíba",
                "latitude" => -7.38162,
                "longitude" => -37.9819
            ],
            [
                "name" => "Joca Claudino, Paraíba",
                "latitude" => -6.48362,
                "longitude" => -38.4764
            ],
            [
                "name" => "Santa Rita, Paraíba",
                "latitude" => -7.11724,
                "longitude" => -34.9753
            ],
            [
                "name" => "Santa Teresinha, Paraíba",
                "latitude" => -7.07964,
                "longitude" => -37.4435
            ],
            [
                "name" => "Santo André, Paraíba",
                "latitude" => -7.22016,
                "longitude" => -36.6213
            ],
            [
                "name" => "São Bento, Paraíba",
                "latitude" => -6.48529,
                "longitude" => -37.4488
            ],
            [
                "name" => "São Bentinho, Paraíba",
                "latitude" => -6.88596,
                "longitude" => -37.7243
            ],
            [
                "name" => "São Domingos do Cariri, Paraíba",
                "latitude" => -7.63273,
                "longitude" => -36.4374
            ],
            [
                "name" => "São Domingos, Paraíba",
                "latitude" => -6.80313,
                "longitude" => -37.9488
            ],
            [
                "name" => "São Francisco, Paraíba",
                "latitude" => -6.60773,
                "longitude" => -38.0968
            ],
            [
                "name" => "São João do Cariri, Paraíba",
                "latitude" => -7.38168,
                "longitude" => -36.5345
            ],
            [
                "name" => "São João do Tigre, Paraíba",
                "latitude" => -8.07703,
                "longitude" => -36.8547
            ],
            [
                "name" => "São José da Lagoa Tapada, Paraíba",
                "latitude" => -6.93646,
                "longitude" => -38.1622
            ],
            [
                "name" => "São José de Caiana, Paraíba",
                "latitude" => -7.24636,
                "longitude" => -38.2989
            ],
            [
                "name" => "São José de Espinharas, Paraíba",
                "latitude" => -6.83974,
                "longitude" => -37.3214
            ],
            [
                "name" => "São José dos Ramos, Paraíba",
                "latitude" => -7.25238,
                "longitude" => -35.3725
            ],
            [
                "name" => "São José de Piranhas, Paraíba",
                "latitude" => -7.1187,
                "longitude" => -38.502
            ],
            [
                "name" => "São José de Princesa, Paraíba",
                "latitude" => -7.73633,
                "longitude" => -38.0894
            ],
            [
                "name" => "São José do Bonfim, Paraíba",
                "latitude" => -7.1607,
                "longitude" => -37.3036
            ],
            [
                "name" => "São José do Brejo do Cruz, Paraíba",
                "latitude" => -6.21054,
                "longitude" => -37.3601
            ],
            [
                "name" => "São José do Sabugi, Paraíba",
                "latitude" => -6.76295,
                "longitude" => -36.7972
            ],
            [
                "name" => "São José dos Cordeiros, Paraíba",
                "latitude" => -7.38775,
                "longitude" => -36.8085
            ],
            [
                "name" => "São Mamede, Paraíba",
                "latitude" => -6.92386,
                "longitude" => -37.0954
            ],
            [
                "name" => "São Miguel de Taipu, Paraíba",
                "latitude" => -7.24764,
                "longitude" => -35.2016
            ],
            [
                "name" => "São Sebastião de Lagoa de Roça, Paraíba",
                "latitude" => -7.11034,
                "longitude" => -35.8678
            ],
            [
                "name" => "São Sebastião do Umbuzeiro, Paraíba",
                "latitude" => -8.15289,
                "longitude" => -37.0138
            ],
            [
                "name" => "Sapé, Paraíba",
                "latitude" => -7.09359,
                "longitude" => -35.228
            ],
            [
                "name" => "São Vicente do Seridó, Paraíba",
                "latitude" => -6.85426,
                "longitude" => -36.4122
            ],
            [
                "name" => "Serra Branca, Paraíba",
                "latitude" => -7.48034,
                "longitude" => -36.666
            ],
            [
                "name" => "Serra da Raiz, Paraíba",
                "latitude" => -6.68527,
                "longitude" => -35.4379
            ],
            [
                "name" => "Serra Grande, Paraíba",
                "latitude" => -7.20957,
                "longitude" => -38.3647
            ],
            [
                "name" => "Serra Redonda, Paraíba",
                "latitude" => -7.18622,
                "longitude" => -35.6842
            ],
            [
                "name" => "Serraria, Paraíba",
                "latitude" => -6.81569,
                "longitude" => -35.6282
            ],
            [
                "name" => "Sertãozinho, Paraíba",
                "latitude" => -6.75127,
                "longitude" => -35.4372
            ],
            [
                "name" => "Sobrado, Paraíba",
                "latitude" => -7.14429,
                "longitude" => -35.2357
            ],
            [
                "name" => "Solânea, Paraíba",
                "latitude" => -6.75161,
                "longitude" => -35.6636
            ],
            [
                "name" => "Soledade, Paraíba",
                "latitude" => -7.05829,
                "longitude" => -36.3668
            ],
            [
                "name" => "Sossêgo, Paraíba",
                "latitude" => -6.77067,
                "longitude" => -36.2538
            ],
            [
                "name" => "Sousa, Paraíba",
                "latitude" => -6.75148,
                "longitude" => -38.2311
            ],
            [
                "name" => "Sumé, Paraíba",
                "latitude" => -7.66206,
                "longitude" => -36.884
            ],
            [
                "name" => "Tacima, Paraíba",
                "latitude" => -6.48759,
                "longitude" => -35.6367
            ],
            [
                "name" => "Taperoá, Paraíba",
                "latitude" => -7.20629,
                "longitude" => -36.8245
            ],
            [
                "name" => "Tavares, Paraíba",
                "latitude" => -7.62697,
                "longitude" => -37.8712
            ],
            [
                "name" => "Teixeira, Paraíba",
                "latitude" => -7.22104,
                "longitude" => -37.2525
            ],
            [
                "name" => "Tenório, Paraíba",
                "latitude" => -6.93855,
                "longitude" => -36.6273
            ],
            [
                "name" => "Triunfo, Paraíba",
                "latitude" => -6.5713,
                "longitude" => -38.5986
            ],
            [
                "name" => "Uiraúna, Paraíba",
                "latitude" => -6.51504,
                "longitude" => -38.4128
            ],
            [
                "name" => "Umbuzeiro, Paraíba",
                "latitude" => -7.69199,
                "longitude" => -35.6582
            ],
            [
                "name" => "Várzea, Paraíba",
                "latitude" => -6.76189,
                "longitude" => -36.9913
            ],
            [
                "name" => "Vieirópolis, Paraíba",
                "latitude" => -6.50684,
                "longitude" => -38.2567
            ],
            [
                "name" => "Zabelê, Paraíba",
                "latitude" => -8.07901,
                "longitude" => -37.1057
            ],
            [
                "name" => "Abreu e Lima, Pernambuco",
                "latitude" => -7.90072,
                "longitude" => -34.8984
            ],
            [
                "name" => "Afogados da Ingazeira, Pernambuco",
                "latitude" => -7.74312,
                "longitude" => -37.631
            ],
            [
                "name" => "Afrânio, Pernambuco",
                "latitude" => -8.51136,
                "longitude" => -41.0095
            ],
            [
                "name" => "Agrestina, Pernambuco",
                "latitude" => -8.45966,
                "longitude" => -35.9447
            ],
            [
                "name" => "Água Preta, Pernambuco",
                "latitude" => -8.70609,
                "longitude" => -35.5263
            ],
            [
                "name" => "Águas Belas, Pernambuco",
                "latitude" => -9.11125,
                "longitude" => -37.1226
            ],
            [
                "name" => "Alagoinha, Pernambuco",
                "latitude" => -8.4665,
                "longitude" => -36.7788
            ],
            [
                "name" => "Aliança, Pernambuco",
                "latitude" => -7.60398,
                "longitude" => -35.2227
            ],
            [
                "name" => "Altinho, Pernambuco",
                "latitude" => -8.48482,
                "longitude" => -36.0644
            ],
            [
                "name" => "Amaraji, Pernambuco",
                "latitude" => -8.37691,
                "longitude" => -35.4501
            ],
            [
                "name" => "Angelim, Pernambuco",
                "latitude" => -8.88429,
                "longitude" => -36.2902
            ],
            [
                "name" => "Araçoiaba, Pernambuco",
                "latitude" => -7.78391,
                "longitude" => -35.0809
            ],
            [
                "name" => "Araripina, Pernambuco",
                "latitude" => -7.57073,
                "longitude" => -40.494
            ],
            [
                "name" => "Arcoverde, Pernambuco",
                "latitude" => -8.41519,
                "longitude" => -37.0577
            ],
            [
                "name" => "Barra de Guabiraba, Pernambuco",
                "latitude" => -8.42075,
                "longitude" => -35.6585
            ],
            [
                "name" => "Barreiros, Pernambuco",
                "latitude" => -8.81605,
                "longitude" => -35.1832
            ],
            [
                "name" => "Belém de Maria, Pernambuco",
                "latitude" => -8.62504,
                "longitude" => -35.8335
            ],
            [
                "name" => "Belém do São Francisco, Pernambuco",
                "latitude" => -8.75046,
                "longitude" => -38.9623
            ],
            [
                "name" => "Belo Jardim, Pernambuco",
                "latitude" => -8.3313,
                "longitude" => -36.4258
            ],
            [
                "name" => "Betânia, Pernambuco",
                "latitude" => -8.26787,
                "longitude" => -38.0345
            ],
            [
                "name" => "Bezerros, Pernambuco",
                "latitude" => -8.2328,
                "longitude" => -35.796
            ],
            [
                "name" => "Bodocó, Pernambuco",
                "latitude" => -7.77759,
                "longitude" => -39.9338
            ],
            [
                "name" => "Bom Conselho, Pernambuco",
                "latitude" => -9.16919,
                "longitude" => -36.6857
            ],
            [
                "name" => "Bom Jardim, Pernambuco",
                "latitude" => -7.79695,
                "longitude" => -35.5784
            ],
            [
                "name" => "Bonito, Pernambuco",
                "latitude" => -8.47163,
                "longitude" => -35.7292
            ],
            [
                "name" => "Brejão, Pernambuco",
                "latitude" => -9.02915,
                "longitude" => -36.566
            ],
            [
                "name" => "Brejinho, Pernambuco",
                "latitude" => -7.34694,
                "longitude" => -37.2865
            ],
            [
                "name" => "Brejo da Madre de Deus, Pernambuco",
                "latitude" => -8.14933,
                "longitude" => -36.3741
            ],
            [
                "name" => "Buenos Aires, Pernambuco",
                "latitude" => -7.72449,
                "longitude" => -35.3182
            ],
            [
                "name" => "Buíque, Pernambuco",
                "latitude" => -8.61954,
                "longitude" => -37.1606
            ],
            [
                "name" => "Cabo de Santo Agostinho, Pernambuco",
                "latitude" => -8.28218,
                "longitude" => -35.0253
            ],
            [
                "name" => "Cabrobó, Pernambuco",
                "latitude" => -8.50548,
                "longitude" => -39.3094
            ],
            [
                "name" => "Cachoeirinha, Pernambuco",
                "latitude" => -8.48668,
                "longitude" => -36.2402
            ],
            [
                "name" => "Caetés, Pernambuco",
                "latitude" => -8.7803,
                "longitude" => -36.6268
            ],
            [
                "name" => "Calçado, Pernambuco",
                "latitude" => -8.73108,
                "longitude" => -36.3366
            ],
            [
                "name" => "Calumbi, Pernambuco",
                "latitude" => -7.93551,
                "longitude" => -38.1482
            ],
            [
                "name" => "Camaragibe, Pernambuco",
                "latitude" => -8.02351,
                "longitude" => -34.9782
            ],
            [
                "name" => "Camocim de São Félix, Pernambuco",
                "latitude" => -8.35865,
                "longitude" => -35.7653
            ],
            [
                "name" => "Camutanga, Pernambuco",
                "latitude" => -7.40545,
                "longitude" => -35.2664
            ],
            [
                "name" => "Canhotinho, Pernambuco",
                "latitude" => -8.87652,
                "longitude" => -36.1979
            ],
            [
                "name" => "Capoeiras, Pernambuco",
                "latitude" => -8.73423,
                "longitude" => -36.6306
            ],
            [
                "name" => "Carnaíba, Pernambuco",
                "latitude" => -7.79342,
                "longitude" => -37.7946
            ],
            [
                "name" => "Carnaubeira da Penha, Pernambuco",
                "latitude" => -8.31799,
                "longitude" => -38.7512
            ],
            [
                "name" => "Carpina, Pernambuco",
                "latitude" => -7.84566,
                "longitude" => -35.2514
            ],
            [
                "name" => "Caruaru, Pernambuco",
                "latitude" => -8.28455,
                "longitude" => -35.9699
            ],
            [
                "name" => "Casinhas, Pernambuco",
                "latitude" => -7.74084,
                "longitude" => -35.7206
            ],
            [
                "name" => "Catende, Pernambuco",
                "latitude" => -8.67509,
                "longitude" => -35.7024
            ],
            [
                "name" => "Cedro, Pernambuco",
                "latitude" => -7.71179,
                "longitude" => -39.2367
            ],
            [
                "name" => "Chã de Alegria, Pernambuco",
                "latitude" => -8.00679,
                "longitude" => -35.204
            ],
            [
                "name" => "Chã Grande, Pernambuco",
                "latitude" => -8.23827,
                "longitude" => -35.4571
            ],
            [
                "name" => "Condado, Pernambuco",
                "latitude" => -7.58787,
                "longitude" => -35.0999
            ],
            [
                "name" => "Correntes, Pernambuco",
                "latitude" => -9.12117,
                "longitude" => -36.3244
            ],
            [
                "name" => "Cortês, Pernambuco",
                "latitude" => -8.47443,
                "longitude" => -35.5468
            ],
            [
                "name" => "Cumaru, Pernambuco",
                "latitude" => -8.00827,
                "longitude" => -35.6957
            ],
            [
                "name" => "Cupira, Pernambuco",
                "latitude" => -8.62432,
                "longitude" => -35.9518
            ],
            [
                "name" => "Custódia, Pernambuco",
                "latitude" => -8.08546,
                "longitude" => -37.6443
            ],
            [
                "name" => "Dormentes, Pernambuco",
                "latitude" => -8.44116,
                "longitude" => -40.7662
            ],
            [
                "name" => "Escada, Pernambuco",
                "latitude" => -8.35672,
                "longitude" => -35.2241
            ],
            [
                "name" => "Exu, Pernambuco",
                "latitude" => -7.50364,
                "longitude" => -39.7238
            ],
            [
                "name" => "Feira Nova, Pernambuco",
                "latitude" => -7.94704,
                "longitude" => -35.3801
            ],
            [
                "name" => "Fernando de Noronha, Pernambuco",
                "latitude" => -3.8396,
                "longitude" => -32.4107
            ],
            [
                "name" => "Ferreiros, Pernambuco",
                "latitude" => -7.44666,
                "longitude" => -35.2373
            ],
            [
                "name" => "Flores, Pernambuco",
                "latitude" => -7.85842,
                "longitude" => -37.9715
            ],
            [
                "name" => "Floresta, Pernambuco",
                "latitude" => -8.60307,
                "longitude" => -38.5687
            ],
            [
                "name" => "Frei Miguelinho, Pernambuco",
                "latitude" => -7.93918,
                "longitude" => -35.9113
            ],
            [
                "name" => "Gameleira, Pernambuco",
                "latitude" => -8.5798,
                "longitude" => -35.3846
            ],
            [
                "name" => "Garanhuns, Pernambuco",
                "latitude" => -8.88243,
                "longitude" => -36.4966
            ],
            [
                "name" => "Glória do Goitá, Pernambuco",
                "latitude" => -8.00568,
                "longitude" => -35.2904
            ],
            [
                "name" => "Goiana, Pernambuco",
                "latitude" => -7.5606,
                "longitude" => -34.9959
            ],
            [
                "name" => "Granito, Pernambuco",
                "latitude" => -7.70711,
                "longitude" => -39.615
            ],
            [
                "name" => "Gravatá, Pernambuco",
                "latitude" => -8.21118,
                "longitude" => -35.5675
            ],
            [
                "name" => "Iati, Pernambuco",
                "latitude" => -9.04559,
                "longitude" => -36.8498
            ],
            [
                "name" => "Ibimirim, Pernambuco",
                "latitude" => -8.54026,
                "longitude" => -37.7032
            ],
            [
                "name" => "Ibirajuba, Pernambuco",
                "latitude" => -8.57633,
                "longitude" => -36.1812
            ],
            [
                "name" => "Igarassu, Pernambuco",
                "latitude" => -7.82881,
                "longitude" => -34.9013
            ],
            [
                "name" => "Iguaracy, Pernambuco",
                "latitude" => -7.83222,
                "longitude" => -37.5082
            ],
            [
                "name" => "Inajá, Pernambuco",
                "latitude" => -8.90206,
                "longitude" => -37.8351
            ],
            [
                "name" => "Ingazeira, Pernambuco",
                "latitude" => -7.66909,
                "longitude" => -37.4576
            ],
            [
                "name" => "Ipojuca, Pernambuco",
                "latitude" => -8.39303,
                "longitude" => -35.0609
            ],
            [
                "name" => "Ipubi, Pernambuco",
                "latitude" => -7.64505,
                "longitude" => -40.1476
            ],
            [
                "name" => "Itacuruba, Pernambuco",
                "latitude" => -8.82231,
                "longitude" => -38.6975
            ],
            [
                "name" => "Itaíba, Pernambuco",
                "latitude" => -8.94569,
                "longitude" => -37.4173
            ],
            [
                "name" => "Ilha de Itamaracá, Pernambuco",
                "latitude" => -7.74766,
                "longitude" => -34.8303
            ],
            [
                "name" => "Itambé, Pernambuco",
                "latitude" => -7.41403,
                "longitude" => -35.0963
            ],
            [
                "name" => "Itapetim, Pernambuco",
                "latitude" => -7.37178,
                "longitude" => -37.1863
            ],
            [
                "name" => "Itapissuma, Pernambuco",
                "latitude" => -7.76798,
                "longitude" => -34.8971
            ],
            [
                "name" => "Itaquitinga, Pernambuco",
                "latitude" => -7.66373,
                "longitude" => -35.1002
            ],
            [
                "name" => "Jaboatão dos Guararapes, Pernambuco",
                "latitude" => -8.11298,
                "longitude" => -35.015
            ],
            [
                "name" => "Jaqueira, Pernambuco",
                "latitude" => -8.72618,
                "longitude" => -35.7942
            ],
            [
                "name" => "Jataúba, Pernambuco",
                "latitude" => -7.97668,
                "longitude" => -36.4943
            ],
            [
                "name" => "Jatobá, Pernambuco",
                "latitude" => -9.17476,
                "longitude" => -38.2607
            ],
            [
                "name" => "João Alfredo, Pernambuco",
                "latitude" => -7.86565,
                "longitude" => -35.5787
            ],
            [
                "name" => "Joaquim Nabuco, Pernambuco",
                "latitude" => -8.62281,
                "longitude" => -35.5288
            ],
            [
                "name" => "Jucati, Pernambuco",
                "latitude" => -8.70195,
                "longitude" => -36.4871
            ],
            [
                "name" => "Jupi, Pernambuco",
                "latitude" => -8.70904,
                "longitude" => -36.4126
            ],
            [
                "name" => "Jurema, Pernambuco",
                "latitude" => -8.70714,
                "longitude" => -36.1347
            ],
            [
                "name" => "Lagoa do Carro, Pernambuco",
                "latitude" => -7.84383,
                "longitude" => -35.3108
            ],
            [
                "name" => "Lagoa de Itaenga, Pernambuco",
                "latitude" => -7.93005,
                "longitude" => -35.2874
            ],
            [
                "name" => "Lagoa do Ouro, Pernambuco",
                "latitude" => -9.12567,
                "longitude" => -36.4584
            ],
            [
                "name" => "Lagoa dos Gatos, Pernambuco",
                "latitude" => -8.6602,
                "longitude" => -35.904
            ],
            [
                "name" => "Lagoa Grande, Pernambuco",
                "latitude" => -8.99452,
                "longitude" => -40.2767
            ],
            [
                "name" => "Lajedo, Pernambuco",
                "latitude" => -8.65791,
                "longitude" => -36.3293
            ],
            [
                "name" => "Limoeiro, Pernambuco",
                "latitude" => -7.8726,
                "longitude" => -35.4402
            ],
            [
                "name" => "Macaparana, Pernambuco",
                "latitude" => -7.55564,
                "longitude" => -35.4425
            ],
            [
                "name" => "Machados, Pernambuco",
                "latitude" => -7.68827,
                "longitude" => -35.5114
            ],
            [
                "name" => "Manari, Pernambuco",
                "latitude" => -8.9649,
                "longitude" => -37.6313
            ],
            [
                "name" => "Maraial, Pernambuco",
                "latitude" => -8.79062,
                "longitude" => -35.8266
            ],
            [
                "name" => "Mirandiba, Pernambuco",
                "latitude" => -8.12113,
                "longitude" => -38.7388
            ],
            [
                "name" => "Moreno, Pernambuco",
                "latitude" => -8.10871,
                "longitude" => -35.0835
            ],
            [
                "name" => "Nazaré da Mata, Pernambuco",
                "latitude" => -7.74149,
                "longitude" => -35.2193
            ],
            [
                "name" => "Olinda, Pernambuco",
                "latitude" => -8.01017,
                "longitude" => -34.8545
            ],
            [
                "name" => "Orobó, Pernambuco",
                "latitude" => -7.74553,
                "longitude" => -35.5956
            ],
            [
                "name" => "Orocó, Pernambuco",
                "latitude" => -8.61026,
                "longitude" => -39.6026
            ],
            [
                "name" => "Ouricuri, Pernambuco",
                "latitude" => -7.87918,
                "longitude" => -40.08
            ],
            [
                "name" => "Palmares, Pernambuco",
                "latitude" => -8.68423,
                "longitude" => -35.589
            ],
            [
                "name" => "Palmeirina, Pernambuco",
                "latitude" => -9.0109,
                "longitude" => -36.3242
            ],
            [
                "name" => "Panelas, Pernambuco",
                "latitude" => -8.66121,
                "longitude" => -36.0125
            ],
            [
                "name" => "Paranatama, Pernambuco",
                "latitude" => -8.91875,
                "longitude" => -36.6549
            ],
            [
                "name" => "Parnamirim, Pernambuco",
                "latitude" => -8.08729,
                "longitude" => -39.5795
            ],
            [
                "name" => "Passira, Pernambuco",
                "latitude" => -7.9971,
                "longitude" => -35.5813
            ],
            [
                "name" => "Paudalho, Pernambuco",
                "latitude" => -7.90287,
                "longitude" => -35.1716
            ],
            [
                "name" => "Paulista, Pernambuco",
                "latitude" => -7.93401,
                "longitude" => -34.8684
            ],
            [
                "name" => "Pedra, Pernambuco",
                "latitude" => -8.49641,
                "longitude" => -36.94
            ],
            [
                "name" => "Pesqueira, Pernambuco",
                "latitude" => -8.35797,
                "longitude" => -36.6978
            ],
            [
                "name" => "Petrolândia, Pernambuco",
                "latitude" => -9.06863,
                "longitude" => -38.3027
            ],
            [
                "name" => "Petrolina, Pernambuco",
                "latitude" => -9.38866,
                "longitude" => -40.5027
            ],
            [
                "name" => "Poção, Pernambuco",
                "latitude" => -8.18726,
                "longitude" => -36.7111
            ],
            [
                "name" => "Pombos, Pernambuco",
                "latitude" => -8.13982,
                "longitude" => -35.3967
            ],
            [
                "name" => "Primavera, Pernambuco",
                "latitude" => -8.32999,
                "longitude" => -35.3544
            ],
            [
                "name" => "Quipapá, Pernambuco",
                "latitude" => -8.81175,
                "longitude" => -36.0137
            ],
            [
                "name" => "Quixaba, Pernambuco",
                "latitude" => -7.70734,
                "longitude" => -37.8446
            ],
            [
                "name" => "Recife, Pernambuco",
                "latitude" => -8.04666,
                "longitude" => -34.8771
            ],
            [
                "name" => "Riacho das Almas, Pernambuco",
                "latitude" => -8.13742,
                "longitude" => -35.8648
            ],
            [
                "name" => "Ribeirão, Pernambuco",
                "latitude" => -8.50957,
                "longitude" => -35.3698
            ],
            [
                "name" => "Rio Formoso, Pernambuco",
                "latitude" => -8.6592,
                "longitude" => -35.1532
            ],
            [
                "name" => "Sairé, Pernambuco",
                "latitude" => -8.32864,
                "longitude" => -35.6967
            ],
            [
                "name" => "Salgadinho, Pernambuco",
                "latitude" => -7.9269,
                "longitude" => -35.6503
            ],
            [
                "name" => "Salgueiro, Pernambuco",
                "latitude" => -8.07373,
                "longitude" => -39.1247
            ],
            [
                "name" => "Saloá, Pernambuco",
                "latitude" => -8.9723,
                "longitude" => -36.691
            ],
            [
                "name" => "Sanharó, Pernambuco",
                "latitude" => -8.36097,
                "longitude" => -36.5696
            ],
            [
                "name" => "Santa Cruz, Pernambuco",
                "latitude" => -8.24153,
                "longitude" => -40.3434
            ],
            [
                "name" => "Santa Cruz da Baixa Verde, Pernambuco",
                "latitude" => -7.81339,
                "longitude" => -38.1476
            ],
            [
                "name" => "Santa Cruz do Capibaribe, Pernambuco",
                "latitude" => -7.94802,
                "longitude" => -36.2061
            ],
            [
                "name" => "Santa Filomena, Pernambuco",
                "latitude" => -8.16688,
                "longitude" => -40.6079
            ],
            [
                "name" => "Santa Maria da Boa Vista, Pernambuco",
                "latitude" => -8.79766,
                "longitude" => -39.8241
            ],
            [
                "name" => "Santa Maria do Cambucá, Pernambuco",
                "latitude" => -7.83676,
                "longitude" => -35.8941
            ],
            [
                "name" => "Santa Terezinha, Pernambuco",
                "latitude" => -7.37696,
                "longitude" => -37.4787
            ],
            [
                "name" => "São Benedito do Sul, Pernambuco",
                "latitude" => -8.8166,
                "longitude" => -35.9453
            ],
            [
                "name" => "São Bento do Una, Pernambuco",
                "latitude" => -8.52637,
                "longitude" => -36.4465
            ],
            [
                "name" => "São Caetano, Pernambuco",
                "latitude" => -8.33763,
                "longitude" => -36.2869
            ],
            [
                "name" => "São João, Pernambuco",
                "latitude" => -8.87576,
                "longitude" => -36.3653
            ],
            [
                "name" => "São Joaquim do Monte, Pernambuco",
                "latitude" => -8.43196,
                "longitude" => -35.8035
            ],
            [
                "name" => "São José da Coroa Grande, Pernambuco",
                "latitude" => -8.88937,
                "longitude" => -35.1515
            ],
            [
                "name" => "São José do Belmonte, Pernambuco",
                "latitude" => -7.85723,
                "longitude" => -38.7577
            ],
            [
                "name" => "São José do Egito, Pernambuco",
                "latitude" => -7.46945,
                "longitude" => -37.274
            ],
            [
                "name" => "São Lourenço da Mata, Pernambuco",
                "latitude" => -8.00684,
                "longitude" => -35.0124
            ],
            [
                "name" => "São Vicente Ferrer, Pernambuco",
                "latitude" => -7.58969,
                "longitude" => -35.4808
            ],
            [
                "name" => "Serra Talhada, Pernambuco",
                "latitude" => -7.98178,
                "longitude" => -38.289
            ],
            [
                "name" => "Serrita, Pernambuco",
                "latitude" => -7.94041,
                "longitude" => -39.2951
            ],
            [
                "name" => "Sertânia, Pernambuco",
                "latitude" => -8.06847,
                "longitude" => -37.2684
            ],
            [
                "name" => "Sirinhaém, Pernambuco",
                "latitude" => -8.58778,
                "longitude" => -35.1126
            ],
            [
                "name" => "Moreilândia, Pernambuco",
                "latitude" => -7.61931,
                "longitude" => -39.546
            ],
            [
                "name" => "Solidão, Pernambuco",
                "latitude" => -7.59472,
                "longitude" => -37.6445
            ],
            [
                "name" => "Surubim, Pernambuco",
                "latitude" => -7.84746,
                "longitude" => -35.7481
            ],
            [
                "name" => "Tabira, Pernambuco",
                "latitude" => -7.58366,
                "longitude" => -37.5377
            ],
            [
                "name" => "Tacaimbó, Pernambuco",
                "latitude" => -8.30867,
                "longitude" => -36.3
            ],
            [
                "name" => "Tacaratu, Pernambuco",
                "latitude" => -9.09798,
                "longitude" => -38.1504
            ],
            [
                "name" => "Tamandaré, Pernambuco",
                "latitude" => -8.75665,
                "longitude" => -35.1033
            ],
            [
                "name" => "Taquaritinga do Norte, Pernambuco",
                "latitude" => -7.89446,
                "longitude" => -36.0423
            ],
            [
                "name" => "Terezinha, Pernambuco",
                "latitude" => -9.05621,
                "longitude" => -36.6272
            ],
            [
                "name" => "Terra Nova, Pernambuco",
                "latitude" => -8.22244,
                "longitude" => -39.3825
            ],
            [
                "name" => "Timbaúba, Pernambuco",
                "latitude" => -7.50484,
                "longitude" => -35.3119
            ],
            [
                "name" => "Toritama, Pernambuco",
                "latitude" => -8.00955,
                "longitude" => -36.0637
            ],
            [
                "name" => "Tracunhaém, Pernambuco",
                "latitude" => -7.80228,
                "longitude" => -35.2314
            ],
            [
                "name" => "Trindade, Pernambuco",
                "latitude" => -7.759,
                "longitude" => -40.2647
            ],
            [
                "name" => "Triunfo, Pernambuco",
                "latitude" => -7.83272,
                "longitude" => -38.0978
            ],
            [
                "name" => "Tupanatinga, Pernambuco",
                "latitude" => -8.74798,
                "longitude" => -37.3445
            ],
            [
                "name" => "Tuparetama, Pernambuco",
                "latitude" => -7.6003,
                "longitude" => -37.3165
            ],
            [
                "name" => "Venturosa, Pernambuco",
                "latitude" => -8.57885,
                "longitude" => -36.8742
            ],
            [
                "name" => "Verdejante, Pernambuco",
                "latitude" => -7.92235,
                "longitude" => -38.9701
            ],
            [
                "name" => "Vertente do Lério, Pernambuco",
                "latitude" => -7.77084,
                "longitude" => -35.8491
            ],
            [
                "name" => "Vertentes, Pernambuco",
                "latitude" => -7.90158,
                "longitude" => -35.9681
            ],
            [
                "name" => "Vicência, Pernambuco",
                "latitude" => -7.65655,
                "longitude" => -35.3139
            ],
            [
                "name" => "Vitória de Santo Antão, Pernambuco",
                "latitude" => -8.12819,
                "longitude" => -35.2976
            ],
            [
                "name" => "Xexéu, Pernambuco",
                "latitude" => -8.8046,
                "longitude" => -35.6212
            ],
            [
                "name" => "Água Branca, Alagoas",
                "latitude" => -9.262,
                "longitude" => -37.938
            ],
            [
                "name" => "Anadia, Alagoas",
                "latitude" => -9.68489,
                "longitude" => -36.3078
            ],
            [
                "name" => "Arapiraca, Alagoas",
                "latitude" => -9.75487,
                "longitude" => -36.6615
            ],
            [
                "name" => "Atalaia, Alagoas",
                "latitude" => -9.5119,
                "longitude" => -36.0086
            ],
            [
                "name" => "Barra de Santo Antônio, Alagoas",
                "latitude" => -9.4023,
                "longitude" => -35.5101
            ],
            [
                "name" => "Barra de São Miguel, Alagoas",
                "latitude" => -9.83842,
                "longitude" => -35.9057
            ],
            [
                "name" => "Batalha, Alagoas",
                "latitude" => -9.6742,
                "longitude" => -37.133
            ],
            [
                "name" => "Belém, Alagoas",
                "latitude" => -9.57047,
                "longitude" => -36.4904
            ],
            [
                "name" => "Belo Monte, Alagoas",
                "latitude" => -9.82272,
                "longitude" => -37.277
            ],
            [
                "name" => "Boca da Mata, Alagoas",
                "latitude" => -9.64308,
                "longitude" => -36.2125
            ],
            [
                "name" => "Branquinha, Alagoas",
                "latitude" => -9.23342,
                "longitude" => -36.0162
            ],
            [
                "name" => "Cacimbinhas, Alagoas",
                "latitude" => -9.40121,
                "longitude" => -36.9911
            ],
            [
                "name" => "Cajueiro, Alagoas",
                "latitude" => -9.3994,
                "longitude" => -36.1559
            ],
            [
                "name" => "Campestre, Alagoas",
                "latitude" => -8.84723,
                "longitude" => -35.5685
            ],
            [
                "name" => "Campo Alegre, Alagoas",
                "latitude" => -9.78451,
                "longitude" => -36.3525
            ],
            [
                "name" => "Campo Grande, Alagoas",
                "latitude" => -9.95542,
                "longitude" => -36.7926
            ],
            [
                "name" => "Canapi, Alagoas",
                "latitude" => -9.11932,
                "longitude" => -37.5967
            ],
            [
                "name" => "Capela, Alagoas",
                "latitude" => -9.41504,
                "longitude" => -36.0826
            ],
            [
                "name" => "Carneiros, Alagoas",
                "latitude" => -9.48476,
                "longitude" => -37.3773
            ],
            [
                "name" => "Chã Preta, Alagoas",
                "latitude" => -9.2556,
                "longitude" => -36.2983
            ],
            [
                "name" => "Coité do Nóia, Alagoas",
                "latitude" => -9.63348,
                "longitude" => -36.5845
            ],
            [
                "name" => "Colônia Leopoldina, Alagoas",
                "latitude" => -8.91806,
                "longitude" => -35.7214
            ],
            [
                "name" => "Coqueiro Seco, Alagoas",
                "latitude" => -9.63715,
                "longitude" => -35.7994
            ],
            [
                "name" => "Coruripe, Alagoas",
                "latitude" => -10.1276,
                "longitude" => -36.1717
            ],
            [
                "name" => "Craíbas, Alagoas",
                "latitude" => -9.6178,
                "longitude" => -36.7697
            ],
            [
                "name" => "Delmiro Gouveia, Alagoas",
                "latitude" => -9.38534,
                "longitude" => -37.9987
            ],
            [
                "name" => "Dois Riachos, Alagoas",
                "latitude" => -9.38465,
                "longitude" => -37.0965
            ],
            [
                "name" => "Estrela de Alagoas, Alagoas",
                "latitude" => -9.39089,
                "longitude" => -36.7644
            ],
            [
                "name" => "Feira Grande, Alagoas",
                "latitude" => -9.89859,
                "longitude" => -36.6815
            ],
            [
                "name" => "Feliz Deserto, Alagoas",
                "latitude" => -10.2935,
                "longitude" => -36.3028
            ],
            [
                "name" => "Flexeiras, Alagoas",
                "latitude" => -9.27281,
                "longitude" => -35.7139
            ],
            [
                "name" => "Girau do Ponciano, Alagoas",
                "latitude" => -9.88404,
                "longitude" => -36.8316
            ],
            [
                "name" => "Ibateguara, Alagoas",
                "latitude" => -8.97823,
                "longitude" => -35.9373
            ],
            [
                "name" => "Igaci, Alagoas",
                "latitude" => -9.53768,
                "longitude" => -36.6372
            ],
            [
                "name" => "Igreja Nova, Alagoas",
                "latitude" => -10.1235,
                "longitude" => -36.6597
            ],
            [
                "name" => "Inhapi, Alagoas",
                "latitude" => -9.22594,
                "longitude" => -37.7509
            ],
            [
                "name" => "Jacaré dos Homens, Alagoas",
                "latitude" => -9.63545,
                "longitude" => -37.2076
            ],
            [
                "name" => "Jacuípe, Alagoas",
                "latitude" => -8.83951,
                "longitude" => -35.4591
            ],
            [
                "name" => "Japaratinga, Alagoas",
                "latitude" => -9.08746,
                "longitude" => -35.2634
            ],
            [
                "name" => "Jaramataia, Alagoas",
                "latitude" => -9.66224,
                "longitude" => -37.0046
            ],
            [
                "name" => "Jequiá da Praia, Alagoas",
                "latitude" => -10.0133,
                "longitude" => -36.0142
            ],
            [
                "name" => "Joaquim Gomes, Alagoas",
                "latitude" => -9.1328,
                "longitude" => -35.7474
            ],
            [
                "name" => "Jundiá, Alagoas",
                "latitude" => -8.93297,
                "longitude" => -35.5669
            ],
            [
                "name" => "Junqueiro, Alagoas",
                "latitude" => -9.90696,
                "longitude" => -36.4803
            ],
            [
                "name" => "Lagoa da Canoa, Alagoas",
                "latitude" => -9.83291,
                "longitude" => -36.7413
            ],
            [
                "name" => "Limoeiro de Anadia, Alagoas",
                "latitude" => -9.74098,
                "longitude" => -36.5121
            ],
            [
                "name" => "Maceió, Alagoas",
                "latitude" => -9.66599,
                "longitude" => -35.735
            ],
            [
                "name" => "Major Isidoro, Alagoas",
                "latitude" => -9.53009,
                "longitude" => -36.992
            ],
            [
                "name" => "Maragogi, Alagoas",
                "latitude" => -9.00744,
                "longitude" => -35.2267
            ],
            [
                "name" => "Maravilha, Alagoas",
                "latitude" => -9.23045,
                "longitude" => -37.3524
            ],
            [
                "name" => "Marechal Deodoro, Alagoas",
                "latitude" => -9.70971,
                "longitude" => -35.8967
            ],
            [
                "name" => "Maribondo, Alagoas",
                "latitude" => -9.58353,
                "longitude" => -36.3045
            ],
            [
                "name" => "Mar Vermelho, Alagoas",
                "latitude" => -9.44739,
                "longitude" => -36.3881
            ],
            [
                "name" => "Mata Grande, Alagoas",
                "latitude" => -9.11824,
                "longitude" => -37.7323
            ],
            [
                "name" => "Matriz de Camaragibe, Alagoas",
                "latitude" => -9.15437,
                "longitude" => -35.5243
            ],
            [
                "name" => "Messias, Alagoas",
                "latitude" => -9.39384,
                "longitude" => -35.8392
            ],
            [
                "name" => "Minador do Negrão, Alagoas",
                "latitude" => -9.31236,
                "longitude" => -36.8696
            ],
            [
                "name" => "Monteirópolis, Alagoas",
                "latitude" => -9.60357,
                "longitude" => -37.2505
            ],
            [
                "name" => "Murici, Alagoas",
                "latitude" => -9.30682,
                "longitude" => -35.9428
            ],
            [
                "name" => "Novo Lino, Alagoas",
                "latitude" => -8.94191,
                "longitude" => -35.664
            ],
            [
                "name" => "Olho d'Água das Flores, Alagoas",
                "latitude" => -9.53686,
                "longitude" => -37.2971
            ],
            [
                "name" => "Olho d'Água do Casado, Alagoas",
                "latitude" => -9.50357,
                "longitude" => -37.8301
            ],
            [
                "name" => "Olho d'Água Grande, Alagoas",
                "latitude" => -10.0572,
                "longitude" => -36.8101
            ],
            [
                "name" => "Olivença, Alagoas",
                "latitude" => -9.51954,
                "longitude" => -37.1954
            ],
            [
                "name" => "Ouro Branco, Alagoas",
                "latitude" => -9.15884,
                "longitude" => -37.3556
            ],
            [
                "name" => "Palestina, Alagoas",
                "latitude" => -9.67493,
                "longitude" => -37.339
            ],
            [
                "name" => "Palmeira dos Índios, Alagoas",
                "latitude" => -9.40568,
                "longitude" => -36.6328
            ],
            [
                "name" => "Pão de Açúcar, Alagoas",
                "latitude" => -9.74032,
                "longitude" => -37.4403
            ],
            [
                "name" => "Pariconha, Alagoas",
                "latitude" => -9.25634,
                "longitude" => -37.9988
            ],
            [
                "name" => "Paripueira, Alagoas",
                "latitude" => -9.46313,
                "longitude" => -35.552
            ],
            [
                "name" => "Passo de Camaragibe, Alagoas",
                "latitude" => -9.24511,
                "longitude" => -35.4745
            ],
            [
                "name" => "Paulo Jacinto, Alagoas",
                "latitude" => -9.36792,
                "longitude" => -36.3672
            ],
            [
                "name" => "Penedo, Alagoas",
                "latitude" => -10.2874,
                "longitude" => -36.5819
            ],
            [
                "name" => "Piaçabuçu, Alagoas",
                "latitude" => -10.406,
                "longitude" => -36.434
            ],
            [
                "name" => "Pilar, Alagoas",
                "latitude" => -9.60135,
                "longitude" => -35.9543
            ],
            [
                "name" => "Pindoba, Alagoas",
                "latitude" => -9.47382,
                "longitude" => -36.2918
            ],
            [
                "name" => "Piranhas, Alagoas",
                "latitude" => -9.624,
                "longitude" => -37.757
            ],
            [
                "name" => "Poço das Trincheiras, Alagoas",
                "latitude" => -9.30742,
                "longitude" => -37.2889
            ],
            [
                "name" => "Porto Calvo, Alagoas",
                "latitude" => -9.05195,
                "longitude" => -35.3987
            ],
            [
                "name" => "Porto de Pedras, Alagoas",
                "latitude" => -9.16006,
                "longitude" => -35.3049
            ],
            [
                "name" => "Porto Real do Colégio, Alagoas",
                "latitude" => -10.1849,
                "longitude" => -36.8376
            ],
            [
                "name" => "Quebrangulo, Alagoas",
                "latitude" => -9.32001,
                "longitude" => -36.4692
            ],
            [
                "name" => "Rio Largo, Alagoas",
                "latitude" => -9.47783,
                "longitude" => -35.8394
            ],
            [
                "name" => "Roteiro, Alagoas",
                "latitude" => -9.83503,
                "longitude" => -35.9782
            ],
            [
                "name" => "Santa Luzia do Norte, Alagoas",
                "latitude" => -9.6037,
                "longitude" => -35.8232
            ],
            [
                "name" => "Santana do Ipanema, Alagoas",
                "latitude" => -9.36999,
                "longitude" => -37.248
            ],
            [
                "name" => "Santana do Mundaú, Alagoas",
                "latitude" => -9.17141,
                "longitude" => -36.2176
            ],
            [
                "name" => "São Brás, Alagoas",
                "latitude" => -10.1141,
                "longitude" => -36.8522
            ],
            [
                "name" => "São José da Laje, Alagoas",
                "latitude" => -9.01278,
                "longitude" => -36.0515
            ],
            [
                "name" => "São José da Tapera, Alagoas",
                "latitude" => -9.55768,
                "longitude" => -37.3831
            ],
            [
                "name" => "São Luís do Quitunde, Alagoas",
                "latitude" => -9.31816,
                "longitude" => -35.5606
            ],
            [
                "name" => "São Miguel dos Campos, Alagoas",
                "latitude" => -9.78301,
                "longitude" => -36.0971
            ],
            [
                "name" => "São Miguel dos Milagres, Alagoas",
                "latitude" => -9.26493,
                "longitude" => -35.3763
            ],
            [
                "name" => "São Sebastião, Alagoas",
                "latitude" => -9.93043,
                "longitude" => -36.559
            ],
            [
                "name" => "Satuba, Alagoas",
                "latitude" => -9.56911,
                "longitude" => -35.8227
            ],
            [
                "name" => "Senador Rui Palmeira, Alagoas",
                "latitude" => -9.46986,
                "longitude" => -37.4576
            ],
            [
                "name" => "Tanque d'Arca, Alagoas",
                "latitude" => -9.53379,
                "longitude" => -36.4366
            ],
            [
                "name" => "Taquarana, Alagoas",
                "latitude" => -9.64529,
                "longitude" => -36.4928
            ],
            [
                "name" => "Teotônio Vilela, Alagoas",
                "latitude" => -9.91656,
                "longitude" => -36.3492
            ],
            [
                "name" => "Traipu, Alagoas",
                "latitude" => -9.96262,
                "longitude" => -37.0071
            ],
            [
                "name" => "União dos Palmares, Alagoas",
                "latitude" => -9.15921,
                "longitude" => -36.0223
            ],
            [
                "name" => "Viçosa, Alagoas",
                "latitude" => -9.36763,
                "longitude" => -36.2431
            ],
            [
                "name" => "Amparo de São Francisco, Sergipe",
                "latitude" => -10.1348,
                "longitude" => -36.935
            ],
            [
                "name" => "Aquidabã, Sergipe",
                "latitude" => -10.278,
                "longitude" => -37.0148
            ],
            [
                "name" => "Aracaju, Sergipe",
                "latitude" => -10.9091,
                "longitude" => -37.0677
            ],
            [
                "name" => "Arauá, Sergipe",
                "latitude" => -11.2614,
                "longitude" => -37.6201
            ],
            [
                "name" => "Areia Branca, Sergipe",
                "latitude" => -10.758,
                "longitude" => -37.3251
            ],
            [
                "name" => "Barra dos Coqueiros, Sergipe",
                "latitude" => -10.8996,
                "longitude" => -37.0323
            ],
            [
                "name" => "Boquim, Sergipe",
                "latitude" => -11.1397,
                "longitude" => -37.6195
            ],
            [
                "name" => "Brejo Grande, Sergipe",
                "latitude" => -10.4297,
                "longitude" => -36.4611
            ],
            [
                "name" => "Campo do Brito, Sergipe",
                "latitude" => -10.7392,
                "longitude" => -37.4954
            ],
            [
                "name" => "Canhoba, Sergipe",
                "latitude" => -10.1365,
                "longitude" => -36.9806
            ],
            [
                "name" => "Canindé de São Francisco, Sergipe",
                "latitude" => -9.64882,
                "longitude" => -37.7923
            ],
            [
                "name" => "Capela, Sergipe",
                "latitude" => -10.5069,
                "longitude" => -37.0628
            ],
            [
                "name" => "Carira, Sergipe",
                "latitude" => -10.3524,
                "longitude" => -37.7002
            ],
            [
                "name" => "Carmópolis, Sergipe",
                "latitude" => -10.6449,
                "longitude" => -36.9887
            ],
            [
                "name" => "Cedro de São João, Sergipe",
                "latitude" => -10.2534,
                "longitude" => -36.8856
            ],
            [
                "name" => "Cristinápolis, Sergipe",
                "latitude" => -11.4668,
                "longitude" => -37.7585
            ],
            [
                "name" => "Cumbe, Sergipe",
                "latitude" => -10.352,
                "longitude" => -37.1846
            ],
            [
                "name" => "Divina Pastora, Sergipe",
                "latitude" => -10.6782,
                "longitude" => -37.1506
            ],
            [
                "name" => "Estância, Sergipe",
                "latitude" => -11.2659,
                "longitude" => -37.4484
            ],
            [
                "name" => "Feira Nova, Sergipe",
                "latitude" => -10.2616,
                "longitude" => -37.3147
            ],
            [
                "name" => "Frei Paulo, Sergipe",
                "latitude" => -10.5513,
                "longitude" => -37.5279
            ],
            [
                "name" => "Gararu, Sergipe",
                "latitude" => -9.9722,
                "longitude" => -37.0869
            ],
            [
                "name" => "General Maynard, Sergipe",
                "latitude" => -10.6835,
                "longitude" => -36.9838
            ],
            [
                "name" => "Gracho Cardoso, Sergipe",
                "latitude" => -10.2252,
                "longitude" => -37.2006
            ],
            [
                "name" => "Ilha das Flores, Sergipe",
                "latitude" => -10.4425,
                "longitude" => -36.5479
            ],
            [
                "name" => "Indiaroba, Sergipe",
                "latitude" => -11.5157,
                "longitude" => -37.515
            ],
            [
                "name" => "Itabaiana, Sergipe",
                "latitude" => -10.6826,
                "longitude" => -37.4273
            ],
            [
                "name" => "Itabaianinha, Sergipe",
                "latitude" => -11.2693,
                "longitude" => -37.7875
            ],
            [
                "name" => "Itabi, Sergipe",
                "latitude" => -10.1248,
                "longitude" => -37.1056
            ],
            [
                "name" => "Itaporanga d'Ajuda, Sergipe",
                "latitude" => -10.99,
                "longitude" => -37.3078
            ],
            [
                "name" => "Japaratuba, Sergipe",
                "latitude" => -10.5849,
                "longitude" => -36.9418
            ],
            [
                "name" => "Japoatã, Sergipe",
                "latitude" => -10.3477,
                "longitude" => -36.8045
            ],
            [
                "name" => "Lagarto, Sergipe",
                "latitude" => -10.9136,
                "longitude" => -37.6689
            ],
            [
                "name" => "Laranjeiras, Sergipe",
                "latitude" => -10.7981,
                "longitude" => -37.1731
            ],
            [
                "name" => "Macambira, Sergipe",
                "latitude" => -10.6619,
                "longitude" => -37.5413
            ],
            [
                "name" => "Malhada dos Bois, Sergipe",
                "latitude" => -10.3418,
                "longitude" => -36.9252
            ],
            [
                "name" => "Malhador, Sergipe",
                "latitude" => -10.6649,
                "longitude" => -37.3004
            ],
            [
                "name" => "Maruim, Sergipe",
                "latitude" => -10.7308,
                "longitude" => -37.0856
            ],
            [
                "name" => "Moita Bonita, Sergipe",
                "latitude" => -10.5769,
                "longitude" => -37.3512
            ],
            [
                "name" => "Monte Alegre de Sergipe, Sergipe",
                "latitude" => -10.0256,
                "longitude" => -37.5616
            ],
            [
                "name" => "Muribeca, Sergipe",
                "latitude" => -10.4271,
                "longitude" => -36.9588
            ],
            [
                "name" => "Neópolis, Sergipe",
                "latitude" => -10.3215,
                "longitude" => -36.585
            ],
            [
                "name" => "Nossa Senhora Aparecida, Sergipe",
                "latitude" => -10.3944,
                "longitude" => -37.4517
            ],
            [
                "name" => "Nossa Senhora da Glória, Sergipe",
                "latitude" => -10.2158,
                "longitude" => -37.4211
            ],
            [
                "name" => "Nossa Senhora das Dores, Sergipe",
                "latitude" => -10.4854,
                "longitude" => -37.1963
            ],
            [
                "name" => "Nossa Senhora de Lourdes, Sergipe",
                "latitude" => -10.0772,
                "longitude" => -37.0615
            ],
            [
                "name" => "Nossa Senhora do Socorro, Sergipe",
                "latitude" => -10.8468,
                "longitude" => -37.1231
            ],
            [
                "name" => "Pacatuba, Sergipe",
                "latitude" => -10.4538,
                "longitude" => -36.6531
            ],
            [
                "name" => "Pedra Mole, Sergipe",
                "latitude" => -10.6134,
                "longitude" => -37.6922
            ],
            [
                "name" => "Pedrinhas, Sergipe",
                "latitude" => -11.1902,
                "longitude" => -37.6775
            ],
            [
                "name" => "Pinhão, Sergipe",
                "latitude" => -10.5677,
                "longitude" => -37.7242
            ],
            [
                "name" => "Pirambu, Sergipe",
                "latitude" => -10.7215,
                "longitude" => -36.8544
            ],
            [
                "name" => "Poço Redondo, Sergipe",
                "latitude" => -9.80616,
                "longitude" => -37.6833
            ],
            [
                "name" => "Poço Verde, Sergipe",
                "latitude" => -10.7151,
                "longitude" => -38.1813
            ],
            [
                "name" => "Porto da Folha, Sergipe",
                "latitude" => -9.91626,
                "longitude" => -37.2842
            ],
            [
                "name" => "Propriá, Sergipe",
                "latitude" => -10.2138,
                "longitude" => -36.8442
            ],
            [
                "name" => "Riachão do Dantas, Sergipe",
                "latitude" => -11.0729,
                "longitude" => -37.731
            ],
            [
                "name" => "Riachuelo, Sergipe",
                "latitude" => -10.735,
                "longitude" => -37.1966
            ],
            [
                "name" => "Ribeirópolis, Sergipe",
                "latitude" => -10.5357,
                "longitude" => -37.438
            ],
            [
                "name" => "Rosário do Catete, Sergipe",
                "latitude" => -10.6904,
                "longitude" => -37.0357
            ],
            [
                "name" => "Salgado, Sergipe",
                "latitude" => -11.0288,
                "longitude" => -37.4804
            ],
            [
                "name" => "Santa Luzia do Itanhy, Sergipe",
                "latitude" => -11.3536,
                "longitude" => -37.4586
            ],
            [
                "name" => "Santana do São Francisco, Sergipe",
                "latitude" => -10.2922,
                "longitude" => -36.6105
            ],
            [
                "name" => "Santa Rosa de Lima, Sergipe",
                "latitude" => -10.6434,
                "longitude" => -37.1931
            ],
            [
                "name" => "Santo Amaro das Brotas, Sergipe",
                "latitude" => -10.7892,
                "longitude" => -37.0564
            ],
            [
                "name" => "São Cristóvão, Sergipe",
                "latitude" => -11.0084,
                "longitude" => -37.2044
            ],
            [
                "name" => "São Domingos, Sergipe",
                "latitude" => -10.7916,
                "longitude" => -37.5685
            ],
            [
                "name" => "São Francisco, Sergipe",
                "latitude" => -10.3442,
                "longitude" => -36.8869
            ],
            [
                "name" => "São Miguel do Aleixo, Sergipe",
                "latitude" => -10.3847,
                "longitude" => -37.3836
            ],
            [
                "name" => "Simão Dias, Sergipe",
                "latitude" => -10.7387,
                "longitude" => -37.8097
            ],
            [
                "name" => "Siriri, Sergipe",
                "latitude" => -10.5965,
                "longitude" => -37.1131
            ],
            [
                "name" => "Telha, Sergipe",
                "latitude" => -10.2064,
                "longitude" => -36.8818
            ],
            [
                "name" => "Tobias Barreto, Sergipe",
                "latitude" => -11.1798,
                "longitude" => -37.9995
            ],
            [
                "name" => "Tomar do Geru, Sergipe",
                "latitude" => -11.3694,
                "longitude" => -37.8433
            ],
            [
                "name" => "Umbaúba, Sergipe",
                "latitude" => -11.3809,
                "longitude" => -37.6623
            ],
            [
                "name" => "Abaíra, Bahia",
                "latitude" => -13.2488,
                "longitude" => -41.6619
            ],
            [
                "name" => "Abaré, Bahia",
                "latitude" => -8.72073,
                "longitude" => -39.1162
            ],
            [
                "name" => "Acajutiba, Bahia",
                "latitude" => -11.6575,
                "longitude" => -38.0197
            ],
            [
                "name" => "Adustina, Bahia",
                "latitude" => -10.5437,
                "longitude" => -38.1113
            ],
            [
                "name" => "Água Fria, Bahia",
                "latitude" => -11.8618,
                "longitude" => -38.7639
            ],
            [
                "name" => "Érico Cardoso, Bahia",
                "latitude" => -13.4215,
                "longitude" => -42.1352
            ],
            [
                "name" => "Aiquara, Bahia",
                "latitude" => -14.1269,
                "longitude" => -39.8937
            ],
            [
                "name" => "Alagoinhas, Bahia",
                "latitude" => -12.1335,
                "longitude" => -38.4208
            ],
            [
                "name" => "Alcobaça, Bahia",
                "latitude" => -17.5195,
                "longitude" => -39.2036
            ],
            [
                "name" => "Almadina, Bahia",
                "latitude" => -14.7089,
                "longitude" => -39.6415
            ],
            [
                "name" => "Amargosa, Bahia",
                "latitude" => -13.0215,
                "longitude" => -39.602
            ],
            [
                "name" => "Amélia Rodrigues, Bahia",
                "latitude" => -12.3914,
                "longitude" => -38.7563
            ],
            [
                "name" => "América Dourada, Bahia",
                "latitude" => -11.4429,
                "longitude" => -41.439
            ],
            [
                "name" => "Anagé, Bahia",
                "latitude" => -14.6151,
                "longitude" => -41.1356
            ],
            [
                "name" => "Andaraí, Bahia",
                "latitude" => -12.8049,
                "longitude" => -41.3297
            ],
            [
                "name" => "Andorinha, Bahia",
                "latitude" => -10.3482,
                "longitude" => -39.8391
            ],
            [
                "name" => "Angical, Bahia",
                "latitude" => -12.0063,
                "longitude" => -44.7003
            ],
            [
                "name" => "Anguera, Bahia",
                "latitude" => -12.1462,
                "longitude" => -39.2462
            ],
            [
                "name" => "Antas, Bahia",
                "latitude" => -10.3856,
                "longitude" => -38.3401
            ],
            [
                "name" => "Antônio Cardoso, Bahia",
                "latitude" => -12.4335,
                "longitude" => -39.1176
            ],
            [
                "name" => "Antônio Gonçalves, Bahia",
                "latitude" => -10.5767,
                "longitude" => -40.2785
            ],
            [
                "name" => "Aporá, Bahia",
                "latitude" => -11.6577,
                "longitude" => -38.0814
            ],
            [
                "name" => "Apuarema, Bahia",
                "latitude" => -13.8542,
                "longitude" => -39.7501
            ],
            [
                "name" => "Aracatu, Bahia",
                "latitude" => -14.428,
                "longitude" => -41.4648
            ],
            [
                "name" => "Araças, Bahia",
                "latitude" => -12.22,
                "longitude" => -38.2027
            ],
            [
                "name" => "Araci, Bahia",
                "latitude" => -11.3253,
                "longitude" => -38.9584
            ],
            [
                "name" => "Aramari, Bahia",
                "latitude" => -12.0884,
                "longitude" => -38.4969
            ],
            [
                "name" => "Arataca, Bahia",
                "latitude" => -15.2651,
                "longitude" => -39.419
            ],
            [
                "name" => "Aratuípe, Bahia",
                "latitude" => -13.0716,
                "longitude" => -39.0038
            ],
            [
                "name" => "Aurelino Leal, Bahia",
                "latitude" => -14.321,
                "longitude" => -39.329
            ],
            [
                "name" => "Baianópolis, Bahia",
                "latitude" => -12.3016,
                "longitude" => -44.5388
            ],
            [
                "name" => "Baixa Grande, Bahia",
                "latitude" => -11.9519,
                "longitude" => -40.169
            ],
            [
                "name" => "Banzaê, Bahia",
                "latitude" => -10.5788,
                "longitude" => -38.6212
            ],
            [
                "name" => "Barra, Bahia",
                "latitude" => -11.0859,
                "longitude" => -43.1459
            ],
            [
                "name" => "Barra da Estiva, Bahia",
                "latitude" => -13.6237,
                "longitude" => -41.3347
            ],
            [
                "name" => "Barra do Choça, Bahia",
                "latitude" => -14.8654,
                "longitude" => -40.5791
            ],
            [
                "name" => "Barra do Mendes, Bahia",
                "latitude" => -11.81,
                "longitude" => -42.059
            ],
            [
                "name" => "Barra do Rocha, Bahia",
                "latitude" => -14.2,
                "longitude" => -39.5991
            ],
            [
                "name" => "Barreiras, Bahia",
                "latitude" => -12.1439,
                "longitude" => -44.9968
            ],
            [
                "name" => "Barro Alto, Bahia",
                "latitude" => -11.7605,
                "longitude" => -41.9054
            ],
            [
                "name" => "Barrocas, Bahia",
                "latitude" => -11.5272,
                "longitude" => -39.0776
            ],
            [
                "name" => "Barro Preto, Bahia",
                "latitude" => -14.7948,
                "longitude" => -39.476
            ],
            [
                "name" => "Belmonte, Bahia",
                "latitude" => -15.8608,
                "longitude" => -38.8758
            ],
            [
                "name" => "Belo Campo, Bahia",
                "latitude" => -15.0334,
                "longitude" => -41.2652
            ],
            [
                "name" => "Biritinga, Bahia",
                "latitude" => -11.6072,
                "longitude" => -38.8051
            ],
            [
                "name" => "Boa Nova, Bahia",
                "latitude" => -14.3598,
                "longitude" => -40.2064
            ],
            [
                "name" => "Boa Vista do Tupim, Bahia",
                "latitude" => -12.6498,
                "longitude" => -40.6064
            ],
            [
                "name" => "Bom Jesus da Lapa, Bahia",
                "latitude" => -13.2506,
                "longitude" => -43.4108
            ],
            [
                "name" => "Bom Jesus da Serra, Bahia",
                "latitude" => -14.3663,
                "longitude" => -40.5126
            ],
            [
                "name" => "Boninal, Bahia",
                "latitude" => -12.7069,
                "longitude" => -41.8286
            ],
            [
                "name" => "Bonito, Bahia",
                "latitude" => -11.9668,
                "longitude" => -41.2647
            ],
            [
                "name" => "Boquira, Bahia",
                "latitude" => -12.8205,
                "longitude" => -42.7324
            ],
            [
                "name" => "Botuporã, Bahia",
                "latitude" => -13.3772,
                "longitude" => -42.5163
            ],
            [
                "name" => "Brejões, Bahia",
                "latitude" => -13.1039,
                "longitude" => -39.7988
            ],
            [
                "name" => "Brejolândia, Bahia",
                "latitude" => -12.4815,
                "longitude" => -43.9679
            ],
            [
                "name" => "Brotas de Macaúbas, Bahia",
                "latitude" => -11.9915,
                "longitude" => -42.6326
            ],
            [
                "name" => "Brumado, Bahia",
                "latitude" => -14.2021,
                "longitude" => -41.6696
            ],
            [
                "name" => "Buerarema, Bahia",
                "latitude" => -14.9595,
                "longitude" => -39.3028
            ],
            [
                "name" => "Buritirama, Bahia",
                "latitude" => -10.7171,
                "longitude" => -43.6302
            ],
            [
                "name" => "Caatiba, Bahia",
                "latitude" => -14.9699,
                "longitude" => -40.4092
            ],
            [
                "name" => "Cabaceiras do Paraguaçu, Bahia",
                "latitude" => -12.5317,
                "longitude" => -39.1902
            ],
            [
                "name" => "Cachoeira, Bahia",
                "latitude" => -12.5994,
                "longitude" => -38.9587
            ],
            [
                "name" => "Caculé, Bahia",
                "latitude" => -14.5003,
                "longitude" => -42.2229
            ],
            [
                "name" => "Caém, Bahia",
                "latitude" => -11.0677,
                "longitude" => -40.432
            ],
            [
                "name" => "Caetanos, Bahia",
                "latitude" => -14.3347,
                "longitude" => -40.9175
            ],
            [
                "name" => "Caetité, Bahia",
                "latitude" => -14.0684,
                "longitude" => -42.4861
            ],
            [
                "name" => "Cafarnaum, Bahia",
                "latitude" => -11.6914,
                "longitude" => -41.4688
            ],
            [
                "name" => "Cairu, Bahia",
                "latitude" => -13.4904,
                "longitude" => -39.0465
            ],
            [
                "name" => "Caldeirão Grande, Bahia",
                "latitude" => -11.0208,
                "longitude" => -40.2956
            ],
            [
                "name" => "Camacan, Bahia",
                "latitude" => -15.4142,
                "longitude" => -39.4919
            ],
            [
                "name" => "Camaçari, Bahia",
                "latitude" => -12.6996,
                "longitude" => -38.3263
            ],
            [
                "name" => "Camamu, Bahia",
                "latitude" => -13.9398,
                "longitude" => -39.1071
            ],
            [
                "name" => "Campo Alegre de Lourdes, Bahia",
                "latitude" => -9.52221,
                "longitude" => -43.0126
            ],
            [
                "name" => "Campo Formoso, Bahia",
                "latitude" => -10.5105,
                "longitude" => -40.32
            ],
            [
                "name" => "Canápolis, Bahia",
                "latitude" => -13.0725,
                "longitude" => -44.201
            ],
            [
                "name" => "Canarana, Bahia",
                "latitude" => -11.6858,
                "longitude" => -41.7677
            ],
            [
                "name" => "Canavieiras, Bahia",
                "latitude" => -15.6722,
                "longitude" => -38.9536
            ],
            [
                "name" => "Candeal, Bahia",
                "latitude" => -11.8049,
                "longitude" => -39.1203
            ],
            [
                "name" => "Candeias, Bahia",
                "latitude" => -12.6716,
                "longitude" => -38.5472
            ],
            [
                "name" => "Candiba, Bahia",
                "latitude" => -14.4097,
                "longitude" => -42.8667
            ],
            [
                "name" => "Cândido Sales, Bahia",
                "latitude" => -15.4993,
                "longitude" => -41.2414
            ],
            [
                "name" => "Cansanção, Bahia",
                "latitude" => -10.6647,
                "longitude" => -39.4944
            ],
            [
                "name" => "Canudos, Bahia",
                "latitude" => -9.90014,
                "longitude" => -39.1471
            ],
            [
                "name" => "Capela do Alto Alegre, Bahia",
                "latitude" => -11.6658,
                "longitude" => -39.8349
            ],
            [
                "name" => "Capim Grosso, Bahia",
                "latitude" => -11.3797,
                "longitude" => -40.0089
            ],
            [
                "name" => "Caraíbas, Bahia",
                "latitude" => -14.7177,
                "longitude" => -41.2603
            ],
            [
                "name" => "Caravelas, Bahia",
                "latitude" => -17.7268,
                "longitude" => -39.2597
            ],
            [
                "name" => "Cardeal da Silva, Bahia",
                "latitude" => -11.9472,
                "longitude" => -37.9469
            ],
            [
                "name" => "Carinhanha, Bahia",
                "latitude" => -14.2985,
                "longitude" => -43.7724
            ],
            [
                "name" => "Casa Nova, Bahia",
                "latitude" => -9.16408,
                "longitude" => -40.974
            ],
            [
                "name" => "Castro Alves, Bahia",
                "latitude" => -12.7579,
                "longitude" => -39.4248
            ],
            [
                "name" => "Catolândia, Bahia",
                "latitude" => -12.31,
                "longitude" => -44.8648
            ],
            [
                "name" => "Catu, Bahia",
                "latitude" => -12.3513,
                "longitude" => -38.3791
            ],
            [
                "name" => "Caturama, Bahia",
                "latitude" => -13.3239,
                "longitude" => -42.2904
            ],
            [
                "name" => "Central, Bahia",
                "latitude" => -11.1376,
                "longitude" => -42.1116
            ],
            [
                "name" => "Chorrochó, Bahia",
                "latitude" => -8.9695,
                "longitude" => -39.0979
            ],
            [
                "name" => "Cícero Dantas, Bahia",
                "latitude" => -10.5897,
                "longitude" => -38.3794
            ],
            [
                "name" => "Cipó, Bahia",
                "latitude" => -11.1032,
                "longitude" => -38.5179
            ],
            [
                "name" => "Coaraci, Bahia",
                "latitude" => -14.637,
                "longitude" => -39.5556
            ],
            [
                "name" => "Cocos, Bahia",
                "latitude" => -14.1814,
                "longitude" => -44.5352
            ],
            [
                "name" => "Conceição da Feira, Bahia",
                "latitude" => -12.5078,
                "longitude" => -38.9978
            ],
            [
                "name" => "Conceição do Almeida, Bahia",
                "latitude" => -12.7836,
                "longitude" => -39.1715
            ],
            [
                "name" => "Conceição do Coité, Bahia",
                "latitude" => -11.56,
                "longitude" => -39.2808
            ],
            [
                "name" => "Conceição do Jacuípe, Bahia",
                "latitude" => -12.3268,
                "longitude" => -38.7684
            ],
            [
                "name" => "Conde, Bahia",
                "latitude" => -11.8179,
                "longitude" => -37.6131
            ],
            [
                "name" => "Condeúba, Bahia",
                "latitude" => -14.9022,
                "longitude" => -41.9718
            ],
            [
                "name" => "Contendas do Sincorá, Bahia",
                "latitude" => -13.7537,
                "longitude" => -41.048
            ],
            [
                "name" => "Coração de Maria, Bahia",
                "latitude" => -12.2333,
                "longitude" => -38.7487
            ],
            [
                "name" => "Cordeiros, Bahia",
                "latitude" => -15.0356,
                "longitude" => -41.9308
            ],
            [
                "name" => "Coribe, Bahia",
                "latitude" => -13.8232,
                "longitude" => -44.4586
            ],
            [
                "name" => "Coronel João Sá, Bahia",
                "latitude" => -10.2847,
                "longitude" => -37.9198
            ],
            [
                "name" => "Correntina, Bahia",
                "latitude" => -13.3477,
                "longitude" => -44.6333
            ],
            [
                "name" => "Cotegipe, Bahia",
                "latitude" => -12.0228,
                "longitude" => -44.2566
            ],
            [
                "name" => "Cravolândia, Bahia",
                "latitude" => -13.3531,
                "longitude" => -39.8031
            ],
            [
                "name" => "Crisópolis, Bahia",
                "latitude" => -11.5059,
                "longitude" => -38.1515
            ],
            [
                "name" => "Cristópolis, Bahia",
                "latitude" => -12.2249,
                "longitude" => -44.4214
            ],
            [
                "name" => "Cruz das Almas, Bahia",
                "latitude" => -12.6675,
                "longitude" => -39.1008
            ],
            [
                "name" => "Curaçá, Bahia",
                "latitude" => -8.98458,
                "longitude" => -39.8997
            ],
            [
                "name" => "Dário Meira, Bahia",
                "latitude" => -14.4229,
                "longitude" => -39.9031
            ],
            [
                "name" => "Dias d'Ávila, Bahia",
                "latitude" => -12.6187,
                "longitude" => -38.2926
            ],
            [
                "name" => "Dom Basílio, Bahia",
                "latitude" => -13.7565,
                "longitude" => -41.7677
            ],
            [
                "name" => "Dom Macedo Costa, Bahia",
                "latitude" => -12.9016,
                "longitude" => -39.1923
            ],
            [
                "name" => "Elísio Medrado, Bahia",
                "latitude" => -12.9417,
                "longitude" => -39.5191
            ],
            [
                "name" => "Encruzilhada, Bahia",
                "latitude" => -15.5302,
                "longitude" => -40.9124
            ],
            [
                "name" => "Entre Rios, Bahia",
                "latitude" => -11.9392,
                "longitude" => -38.0871
            ],
            [
                "name" => "Esplanada, Bahia",
                "latitude" => -11.7942,
                "longitude" => -37.9432
            ],
            [
                "name" => "Euclides da Cunha, Bahia",
                "latitude" => -10.5078,
                "longitude" => -39.0153
            ],
            [
                "name" => "Eunápolis, Bahia",
                "latitude" => -16.3715,
                "longitude" => -39.5821
            ],
            [
                "name" => "Fátima, Bahia",
                "latitude" => -10.616,
                "longitude" => -38.2239
            ],
            [
                "name" => "Feira da Mata, Bahia",
                "latitude" => -14.2044,
                "longitude" => -44.2744
            ],
            [
                "name" => "Feira de Santana, Bahia",
                "latitude" => -12.2664,
                "longitude" => -38.9663
            ],
            [
                "name" => "Filadélfia, Bahia",
                "latitude" => -10.7405,
                "longitude" => -40.1437
            ],
            [
                "name" => "Firmino Alves, Bahia",
                "latitude" => -14.9823,
                "longitude" => -39.9269
            ],
            [
                "name" => "Floresta Azul, Bahia",
                "latitude" => -14.8629,
                "longitude" => -39.6579
            ],
            [
                "name" => "Formosa do Rio Preto, Bahia",
                "latitude" => -11.0328,
                "longitude" => -45.193
            ],
            [
                "name" => "Gandu, Bahia",
                "latitude" => -13.7441,
                "longitude" => -39.4747
            ],
            [
                "name" => "Gavião, Bahia",
                "latitude" => -11.4688,
                "longitude" => -39.7757
            ],
            [
                "name" => "Gentio do Ouro, Bahia",
                "latitude" => -11.4342,
                "longitude" => -42.5077
            ],
            [
                "name" => "Glória, Bahia",
                "latitude" => -9.34382,
                "longitude" => -38.2544
            ],
            [
                "name" => "Gongogi, Bahia",
                "latitude" => -14.3195,
                "longitude" => -39.469
            ],
            [
                "name" => "Governador Mangabeira, Bahia",
                "latitude" => -12.5994,
                "longitude" => -39.0412
            ],
            [
                "name" => "Guajeru, Bahia",
                "latitude" => -14.5467,
                "longitude" => -41.9381
            ],
            [
                "name" => "Guanambi, Bahia",
                "latitude" => -14.2231,
                "longitude" => -42.7799
            ],
            [
                "name" => "Guaratinga, Bahia",
                "latitude" => -16.5833,
                "longitude" => -39.7847
            ],
            [
                "name" => "Heliópolis, Bahia",
                "latitude" => -10.6825,
                "longitude" => -38.2907
            ],
            [
                "name" => "Iaçu, Bahia",
                "latitude" => -12.7666,
                "longitude" => -40.2056
            ],
            [
                "name" => "Ibiassucê, Bahia",
                "latitude" => -14.2711,
                "longitude" => -42.257
            ],
            [
                "name" => "Ibicaraí, Bahia",
                "latitude" => -14.8579,
                "longitude" => -39.5914
            ],
            [
                "name" => "Ibicoara, Bahia",
                "latitude" => -13.4059,
                "longitude" => -41.284
            ],
            [
                "name" => "Ibicuí, Bahia",
                "latitude" => -14.845,
                "longitude" => -39.9879
            ],
            [
                "name" => "Ibipeba, Bahia",
                "latitude" => -11.6438,
                "longitude" => -42.0195
            ],
            [
                "name" => "Ibipitanga, Bahia",
                "latitude" => -12.8804,
                "longitude" => -42.4856
            ],
            [
                "name" => "Ibiquera, Bahia",
                "latitude" => -12.6444,
                "longitude" => -40.9338
            ],
            [
                "name" => "Ibirapitanga, Bahia",
                "latitude" => -14.1649,
                "longitude" => -39.3787
            ],
            [
                "name" => "Ibirapuã, Bahia",
                "latitude" => -17.6832,
                "longitude" => -40.1129
            ],
            [
                "name" => "Ibirataia, Bahia",
                "latitude" => -14.0643,
                "longitude" => -39.6459
            ],
            [
                "name" => "Ibitiara, Bahia",
                "latitude" => -12.6502,
                "longitude" => -42.2179
            ],
            [
                "name" => "Ibititá, Bahia",
                "latitude" => -11.5414,
                "longitude" => -41.9748
            ],
            [
                "name" => "Ibotirama, Bahia",
                "latitude" => -12.1779,
                "longitude" => -43.2167
            ],
            [
                "name" => "Ichu, Bahia",
                "latitude" => -11.7431,
                "longitude" => -39.1905
            ],
            [
                "name" => "Igaporã, Bahia",
                "latitude" => -13.774,
                "longitude" => -42.7155
            ],
            [
                "name" => "Igrapiúna, Bahia",
                "latitude" => -13.8295,
                "longitude" => -39.1361
            ],
            [
                "name" => "Iguaí, Bahia",
                "latitude" => -14.7528,
                "longitude" => -40.0894
            ],
            [
                "name" => "Ilhéus, Bahia",
                "latitude" => -14.793,
                "longitude" => -39.046
            ],
            [
                "name" => "Inhambupe, Bahia",
                "latitude" => -11.781,
                "longitude" => -38.355
            ],
            [
                "name" => "Ipecaetá, Bahia",
                "latitude" => -12.3028,
                "longitude" => -39.3069
            ],
            [
                "name" => "Ipiaú, Bahia",
                "latitude" => -14.1226,
                "longitude" => -39.7353
            ],
            [
                "name" => "Ipirá, Bahia",
                "latitude" => -12.1561,
                "longitude" => -39.7359
            ],
            [
                "name" => "Ipupiara, Bahia",
                "latitude" => -11.8219,
                "longitude" => -42.6179
            ],
            [
                "name" => "Irajuba, Bahia",
                "latitude" => -13.2563,
                "longitude" => -40.0848
            ],
            [
                "name" => "Iramaia, Bahia",
                "latitude" => -13.2902,
                "longitude" => -40.9595
            ],
            [
                "name" => "Iraquara, Bahia",
                "latitude" => -12.2429,
                "longitude" => -41.6155
            ],
            [
                "name" => "Irará, Bahia",
                "latitude" => -12.0504,
                "longitude" => -38.7631
            ],
            [
                "name" => "Irecê, Bahia",
                "latitude" => -11.3033,
                "longitude" => -41.8535
            ],
            [
                "name" => "Itabela, Bahia",
                "latitude" => -16.5732,
                "longitude" => -39.5593
            ],
            [
                "name" => "Itaberaba, Bahia",
                "latitude" => -12.5242,
                "longitude" => -40.3059
            ],
            [
                "name" => "Itabuna, Bahia",
                "latitude" => -14.7876,
                "longitude" => -39.2781
            ],
            [
                "name" => "Itacaré, Bahia",
                "latitude" => -14.2784,
                "longitude" => -38.9959
            ],
            [
                "name" => "Itaeté, Bahia",
                "latitude" => -12.9831,
                "longitude" => -40.9677
            ],
            [
                "name" => "Itagi, Bahia",
                "latitude" => -14.1615,
                "longitude" => -40.0131
            ],
            [
                "name" => "Itagibá, Bahia",
                "latitude" => -14.2782,
                "longitude" => -39.8449
            ],
            [
                "name" => "Itagimirim, Bahia",
                "latitude" => -16.0819,
                "longitude" => -39.6133
            ],
            [
                "name" => "Itaguaçu da Bahia, Bahia",
                "latitude" => -11.0147,
                "longitude" => -42.3997
            ],
            [
                "name" => "Itaju do Colônia, Bahia",
                "latitude" => -15.1366,
                "longitude" => -39.7283
            ],
            [
                "name" => "Itajuípe, Bahia",
                "latitude" => -14.6788,
                "longitude" => -39.3698
            ],
            [
                "name" => "Itamaraju, Bahia",
                "latitude" => -17.0378,
                "longitude" => -39.5386
            ],
            [
                "name" => "Itamari, Bahia",
                "latitude" => -13.7782,
                "longitude" => -39.683
            ],
            [
                "name" => "Itambé, Bahia",
                "latitude" => -15.2429,
                "longitude" => -40.63
            ],
            [
                "name" => "Itanagra, Bahia",
                "latitude" => -12.2614,
                "longitude" => -38.0436
            ],
            [
                "name" => "Itanhém, Bahia",
                "latitude" => -17.1642,
                "longitude" => -40.3321
            ],
            [
                "name" => "Itaparica, Bahia",
                "latitude" => -12.8932,
                "longitude" => -38.68
            ],
            [
                "name" => "Itapé, Bahia",
                "latitude" => -14.8876,
                "longitude" => -39.4239
            ],
            [
                "name" => "Itapebi, Bahia",
                "latitude" => -15.9551,
                "longitude" => -39.5329
            ],
            [
                "name" => "Itapetinga, Bahia",
                "latitude" => -15.2475,
                "longitude" => -40.2482
            ],
            [
                "name" => "Itapicuru, Bahia",
                "latitude" => -11.3088,
                "longitude" => -38.2262
            ],
            [
                "name" => "Itapitanga, Bahia",
                "latitude" => -14.4139,
                "longitude" => -39.5657
            ],
            [
                "name" => "Itaquara, Bahia",
                "latitude" => -13.4459,
                "longitude" => -39.9378
            ],
            [
                "name" => "Itarantim, Bahia",
                "latitude" => -15.6528,
                "longitude" => -40.065
            ],
            [
                "name" => "Itatim, Bahia",
                "latitude" => -12.7099,
                "longitude" => -39.6952
            ],
            [
                "name" => "Itiruçu, Bahia",
                "latitude" => -13.529,
                "longitude" => -40.1472
            ],
            [
                "name" => "Itiúba, Bahia",
                "latitude" => -10.6948,
                "longitude" => -39.8446
            ],
            [
                "name" => "Itororó, Bahia",
                "latitude" => -15.11,
                "longitude" => -40.0684
            ],
            [
                "name" => "Ituaçu, Bahia",
                "latitude" => -13.8107,
                "longitude" => -41.3003
            ],
            [
                "name" => "Ituberá, Bahia",
                "latitude" => -13.7249,
                "longitude" => -39.1481
            ],
            [
                "name" => "Iuiú, Bahia",
                "latitude" => -14.4054,
                "longitude" => -43.5595
            ],
            [
                "name" => "Jaborandi, Bahia",
                "latitude" => -13.6071,
                "longitude" => -44.4255
            ],
            [
                "name" => "Jacaraci, Bahia",
                "latitude" => -14.8541,
                "longitude" => -42.4329
            ],
            [
                "name" => "Jacobina, Bahia",
                "latitude" => -11.1812,
                "longitude" => -40.5117
            ],
            [
                "name" => "Jaguaquara, Bahia",
                "latitude" => -13.5248,
                "longitude" => -39.964
            ],
            [
                "name" => "Jaguarari, Bahia",
                "latitude" => -10.2569,
                "longitude" => -40.1999
            ],
            [
                "name" => "Jaguaripe, Bahia",
                "latitude" => -13.1109,
                "longitude" => -38.8939
            ],
            [
                "name" => "Jandaíra, Bahia",
                "latitude" => -11.5616,
                "longitude" => -37.7853
            ],
            [
                "name" => "Jequié, Bahia",
                "latitude" => -13.8509,
                "longitude" => -40.0877
            ],
            [
                "name" => "Jeremoabo, Bahia",
                "latitude" => -10.0685,
                "longitude" => -38.3471
            ],
            [
                "name" => "Jiquiriçá, Bahia",
                "latitude" => -13.2621,
                "longitude" => -39.5737
            ],
            [
                "name" => "Jitaúna, Bahia",
                "latitude" => -14.0131,
                "longitude" => -39.8969
            ],
            [
                "name" => "João Dourado, Bahia",
                "latitude" => -11.3486,
                "longitude" => -41.6548
            ],
            [
                "name" => "Juazeiro, Bahia",
                "latitude" => -9.41622,
                "longitude" => -40.5033
            ],
            [
                "name" => "Jucuruçu, Bahia",
                "latitude" => -16.8488,
                "longitude" => -40.1641
            ],
            [
                "name" => "Jussara, Bahia",
                "latitude" => -11.0431,
                "longitude" => -41.9702
            ],
            [
                "name" => "Jussari, Bahia",
                "latitude" => -15.192,
                "longitude" => -39.491
            ],
            [
                "name" => "Jussiape, Bahia",
                "latitude" => -13.5155,
                "longitude" => -41.5882
            ],
            [
                "name" => "Lafaiete Coutinho, Bahia",
                "latitude" => -13.6541,
                "longitude" => -40.2119
            ],
            [
                "name" => "Lagoa Real, Bahia",
                "latitude" => -14.0334,
                "longitude" => -42.1328
            ],
            [
                "name" => "Laje, Bahia",
                "latitude" => -13.1673,
                "longitude" => -39.4213
            ],
            [
                "name" => "Lajedão, Bahia",
                "latitude" => -17.6056,
                "longitude" => -40.3383
            ],
            [
                "name" => "Lajedinho, Bahia",
                "latitude" => -12.3529,
                "longitude" => -40.9048
            ],
            [
                "name" => "Lajedo do Tabocal, Bahia",
                "latitude" => -13.4663,
                "longitude" => -40.2204
            ],
            [
                "name" => "Lamarão, Bahia",
                "latitude" => -11.773,
                "longitude" => -38.887
            ],
            [
                "name" => "Lapão, Bahia",
                "latitude" => -11.3851,
                "longitude" => -41.8286
            ],
            [
                "name" => "Lauro de Freitas, Bahia",
                "latitude" => -12.8978,
                "longitude" => -38.321
            ],
            [
                "name" => "Lençóis, Bahia",
                "latitude" => -12.5616,
                "longitude" => -41.3928
            ],
            [
                "name" => "Licínio de Almeida, Bahia",
                "latitude" => -14.6842,
                "longitude" => -42.5095
            ],
            [
                "name" => "Livramento de Nossa Senhora, Bahia",
                "latitude" => -13.6369,
                "longitude" => -41.8432
            ],
            [
                "name" => "Luís Eduardo Magalhães, Bahia",
                "latitude" => -12.0956,
                "longitude" => -45.7866
            ],
            [
                "name" => "Macajuba, Bahia",
                "latitude" => -12.1326,
                "longitude" => -40.3571
            ],
            [
                "name" => "Macarani, Bahia",
                "latitude" => -15.5646,
                "longitude" => -40.4209
            ],
            [
                "name" => "Macaúbas, Bahia",
                "latitude" => -13.0186,
                "longitude" => -42.6945
            ],
            [
                "name" => "Macururé, Bahia",
                "latitude" => -9.16226,
                "longitude" => -39.0518
            ],
            [
                "name" => "Madre de Deus, Bahia",
                "latitude" => -12.7446,
                "longitude" => -38.6153
            ],
            [
                "name" => "Maetinga, Bahia",
                "latitude" => -14.6623,
                "longitude" => -41.4915
            ],
            [
                "name" => "Maiquinique, Bahia",
                "latitude" => -15.624,
                "longitude" => -40.2587
            ],
            [
                "name" => "Mairi, Bahia",
                "latitude" => -11.7107,
                "longitude" => -40.1437
            ],
            [
                "name" => "Malhada, Bahia",
                "latitude" => -14.3371,
                "longitude" => -43.7686
            ],
            [
                "name" => "Malhada de Pedras, Bahia",
                "latitude" => -14.3847,
                "longitude" => -41.8842
            ],
            [
                "name" => "Manoel Vitorino, Bahia",
                "latitude" => -14.1476,
                "longitude" => -40.2399
            ],
            [
                "name" => "Mansidão, Bahia",
                "latitude" => -10.7227,
                "longitude" => -44.0428
            ],
            [
                "name" => "Maracás, Bahia",
                "latitude" => -13.4355,
                "longitude" => -40.4323
            ],
            [
                "name" => "Maragogipe, Bahia",
                "latitude" => -12.776,
                "longitude" => -38.9175
            ],
            [
                "name" => "Maraú, Bahia",
                "latitude" => -14.1035,
                "longitude" => -39.0137
            ],
            [
                "name" => "Marcionílio Souza, Bahia",
                "latitude" => -13.0064,
                "longitude" => -40.5295
            ],
            [
                "name" => "Mascote, Bahia",
                "latitude" => -15.5542,
                "longitude" => -39.3016
            ],
            [
                "name" => "Mata de São João, Bahia",
                "latitude" => -12.5307,
                "longitude" => -38.3009
            ],
            [
                "name" => "Matina, Bahia",
                "latitude" => -13.9109,
                "longitude" => -42.8439
            ],
            [
                "name" => "Medeiros Neto, Bahia",
                "latitude" => -17.3707,
                "longitude" => -40.2238
            ],
            [
                "name" => "Miguel Calmon, Bahia",
                "latitude" => -11.4299,
                "longitude" => -40.6031
            ],
            [
                "name" => "Milagres, Bahia",
                "latitude" => -12.8646,
                "longitude" => -39.8611
            ],
            [
                "name" => "Mirangaba, Bahia",
                "latitude" => -10.961,
                "longitude" => -40.574
            ],
            [
                "name" => "Mirante, Bahia",
                "latitude" => -14.2385,
                "longitude" => -40.7718
            ],
            [
                "name" => "Monte Santo, Bahia",
                "latitude" => -10.4374,
                "longitude" => -39.3321
            ],
            [
                "name" => "Morpará, Bahia",
                "latitude" => -11.5569,
                "longitude" => -43.2766
            ],
            [
                "name" => "Morro do Chapéu, Bahia",
                "latitude" => -11.5488,
                "longitude" => -41.1565
            ],
            [
                "name" => "Mortugaba, Bahia",
                "latitude" => -15.0225,
                "longitude" => -42.3727
            ],
            [
                "name" => "Mucugê, Bahia",
                "latitude" => -13.0053,
                "longitude" => -41.3703
            ],
            [
                "name" => "Mucuri, Bahia",
                "latitude" => -18.0754,
                "longitude" => -39.5565
            ],
            [
                "name" => "Mulungu do Morro, Bahia",
                "latitude" => -11.9648,
                "longitude" => -41.6374
            ],
            [
                "name" => "Mundo Novo, Bahia",
                "latitude" => -11.8541,
                "longitude" => -40.4714
            ],
            [
                "name" => "Muniz Ferreira, Bahia",
                "latitude" => -13.0092,
                "longitude" => -39.1092
            ],
            [
                "name" => "Muquém de São Francisco, Bahia",
                "latitude" => -12.065,
                "longitude" => -43.5497
            ],
            [
                "name" => "Muritiba, Bahia",
                "latitude" => -12.6329,
                "longitude" => -38.9921
            ],
            [
                "name" => "Mutuípe, Bahia",
                "latitude" => -13.2284,
                "longitude" => -39.5044
            ],
            [
                "name" => "Nazaré, Bahia",
                "latitude" => -13.0235,
                "longitude" => -39.0108
            ],
            [
                "name" => "Nilo Peçanha, Bahia",
                "latitude" => -13.604,
                "longitude" => -39.1091
            ],
            [
                "name" => "Nordestina, Bahia",
                "latitude" => -10.8192,
                "longitude" => -39.4297
            ],
            [
                "name" => "Nova Canaã, Bahia",
                "latitude" => -14.7912,
                "longitude" => -40.1458
            ],
            [
                "name" => "Nova Fátima, Bahia",
                "latitude" => -11.6031,
                "longitude" => -39.6302
            ],
            [
                "name" => "Nova Ibiá, Bahia",
                "latitude" => -13.812,
                "longitude" => -39.6182
            ],
            [
                "name" => "Nova Itarana, Bahia",
                "latitude" => -13.0241,
                "longitude" => -40.0653
            ],
            [
                "name" => "Nova Redenção, Bahia",
                "latitude" => -12.815,
                "longitude" => -41.0748
            ],
            [
                "name" => "Nova Soure, Bahia",
                "latitude" => -11.2329,
                "longitude" => -38.4871
            ],
            [
                "name" => "Nova Viçosa, Bahia",
                "latitude" => -17.8926,
                "longitude" => -39.3743
            ],
            [
                "name" => "Novo Horizonte, Bahia",
                "latitude" => -12.8083,
                "longitude" => -42.1682
            ],
            [
                "name" => "Novo Triunfo, Bahia",
                "latitude" => -10.3182,
                "longitude" => -38.4014
            ],
            [
                "name" => "Olindina, Bahia",
                "latitude" => -11.3497,
                "longitude" => -38.3379
            ],
            [
                "name" => "Oliveira dos Brejinhos, Bahia",
                "latitude" => -12.3132,
                "longitude" => -42.8969
            ],
            [
                "name" => "Ouriçangas, Bahia",
                "latitude" => -12.0175,
                "longitude" => -38.6166
            ],
            [
                "name" => "Ourolândia, Bahia",
                "latitude" => -10.9578,
                "longitude" => -41.0756
            ],
            [
                "name" => "Palmas de Monte Alto, Bahia",
                "latitude" => -14.2676,
                "longitude" => -43.1609
            ],
            [
                "name" => "Palmeiras, Bahia",
                "latitude" => -12.5059,
                "longitude" => -41.5809
            ],
            [
                "name" => "Paramirim, Bahia",
                "latitude" => -13.4388,
                "longitude" => -42.2395
            ],
            [
                "name" => "Paratinga, Bahia",
                "latitude" => -12.687,
                "longitude" => -43.1798
            ],
            [
                "name" => "Paripiranga, Bahia",
                "latitude" => -10.6859,
                "longitude" => -37.8626
            ],
            [
                "name" => "Pau Brasil, Bahia",
                "latitude" => -15.4572,
                "longitude" => -39.6458
            ],
            [
                "name" => "Paulo Afonso, Bahia",
                "latitude" => -9.3983,
                "longitude" => -38.2216
            ],
            [
                "name" => "Pé de Serra, Bahia",
                "latitude" => -11.8313,
                "longitude" => -39.611
            ],
            [
                "name" => "Pedrão, Bahia",
                "latitude" => -12.1491,
                "longitude" => -38.6487
            ],
            [
                "name" => "Pedro Alexandre, Bahia",
                "latitude" => -10.012,
                "longitude" => -37.8932
            ],
            [
                "name" => "Piatã, Bahia",
                "latitude" => -13.1465,
                "longitude" => -41.7702
            ],
            [
                "name" => "Pilão Arcado, Bahia",
                "latitude" => -10.0051,
                "longitude" => -42.4936
            ],
            [
                "name" => "Pindaí, Bahia",
                "latitude" => -14.4921,
                "longitude" => -42.686
            ],
            [
                "name" => "Pindobaçu, Bahia",
                "latitude" => -10.7433,
                "longitude" => -40.3675
            ],
            [
                "name" => "Pintadas, Bahia",
                "latitude" => -11.8117,
                "longitude" => -39.9009
            ],
            [
                "name" => "Piraí do Norte, Bahia",
                "latitude" => -13.759,
                "longitude" => -39.3836
            ],
            [
                "name" => "Piripá, Bahia",
                "latitude" => -14.9444,
                "longitude" => -41.7168
            ],
            [
                "name" => "Piritiba, Bahia",
                "latitude" => -11.73,
                "longitude" => -40.5587
            ],
            [
                "name" => "Planaltino, Bahia",
                "latitude" => -13.2618,
                "longitude" => -40.3695
            ],
            [
                "name" => "Planalto, Bahia",
                "latitude" => -14.6654,
                "longitude" => -40.4718
            ],
            [
                "name" => "Poções, Bahia",
                "latitude" => -14.5234,
                "longitude" => -40.3634
            ],
            [
                "name" => "Pojuca, Bahia",
                "latitude" => -12.4303,
                "longitude" => -38.3374
            ],
            [
                "name" => "Ponto Novo, Bahia",
                "latitude" => -10.8653,
                "longitude" => -40.1311
            ],
            [
                "name" => "Porto Seguro, Bahia",
                "latitude" => -16.4435,
                "longitude" => -39.0643
            ],
            [
                "name" => "Potiraguá, Bahia",
                "latitude" => -15.5943,
                "longitude" => -39.8638
            ],
            [
                "name" => "Prado, Bahia",
                "latitude" => -17.3364,
                "longitude" => -39.2227
            ],
            [
                "name" => "Presidente Dutra, Bahia",
                "latitude" => -11.2923,
                "longitude" => -41.9843
            ],
            [
                "name" => "Presidente Jânio Quadros, Bahia",
                "latitude" => -14.6885,
                "longitude" => -41.6798
            ],
            [
                "name" => "Presidente Tancredo Neves, Bahia",
                "latitude" => -13.4471,
                "longitude" => -39.4203
            ],
            [
                "name" => "Queimadas, Bahia",
                "latitude" => -10.9736,
                "longitude" => -39.6293
            ],
            [
                "name" => "Quijingue, Bahia",
                "latitude" => -10.7505,
                "longitude" => -39.2137
            ],
            [
                "name" => "Quixabeira, Bahia",
                "latitude" => -11.4031,
                "longitude" => -40.12
            ],
            [
                "name" => "Rafael Jambeiro, Bahia",
                "latitude" => -12.4053,
                "longitude" => -39.5007
            ],
            [
                "name" => "Remanso, Bahia",
                "latitude" => -9.61944,
                "longitude" => -42.0848
            ],
            [
                "name" => "Retirolândia, Bahia",
                "latitude" => -11.4832,
                "longitude" => -39.4234
            ],
            [
                "name" => "Riachão das Neves, Bahia",
                "latitude" => -11.7508,
                "longitude" => -44.9143
            ],
            [
                "name" => "Riachão do Jacuípe, Bahia",
                "latitude" => -11.8067,
                "longitude" => -39.3818
            ],
            [
                "name" => "Riacho de Santana, Bahia",
                "latitude" => -13.6059,
                "longitude" => -42.9397
            ],
            [
                "name" => "Ribeira do Amparo, Bahia",
                "latitude" => -11.0421,
                "longitude" => -38.4242
            ],
            [
                "name" => "Ribeira do Pombal, Bahia",
                "latitude" => -10.8373,
                "longitude" => -38.5382
            ],
            [
                "name" => "Ribeirão do Largo, Bahia",
                "latitude" => -15.4508,
                "longitude" => -40.7441
            ],
            [
                "name" => "Rio de Contas, Bahia",
                "latitude" => -13.5852,
                "longitude" => -41.8048
            ],
            [
                "name" => "Rio do Antônio, Bahia",
                "latitude" => -14.4071,
                "longitude" => -42.0721
            ],
            [
                "name" => "Rio do Pires, Bahia",
                "latitude" => -13.1185,
                "longitude" => -42.2902
            ],
            [
                "name" => "Rio Real, Bahia",
                "latitude" => -11.4814,
                "longitude" => -37.9332
            ],
            [
                "name" => "Rodelas, Bahia",
                "latitude" => -8.85021,
                "longitude" => -38.78
            ],
            [
                "name" => "Ruy Barbosa, Bahia",
                "latitude" => -12.2816,
                "longitude" => -40.4931
            ],
            [
                "name" => "Salinas da Margarida, Bahia",
                "latitude" => -12.873,
                "longitude" => -38.7562
            ],
            [
                "name" => "Salvador, Bahia",
                "latitude" => -12.9718,
                "longitude" => -38.5011
            ],
            [
                "name" => "Santa Bárbara, Bahia",
                "latitude" => -11.9515,
                "longitude" => -38.9681
            ],
            [
                "name" => "Santa Brígida, Bahia",
                "latitude" => -9.73227,
                "longitude" => -38.1209
            ],
            [
                "name" => "Santa Cruz Cabrália, Bahia",
                "latitude" => -16.2825,
                "longitude" => -39.0295
            ],
            [
                "name" => "Santa Cruz da Vitória, Bahia",
                "latitude" => -14.964,
                "longitude" => -39.8115
            ],
            [
                "name" => "Santa Inês, Bahia",
                "latitude" => -13.2793,
                "longitude" => -39.814
            ],
            [
                "name" => "Santaluz, Bahia",
                "latitude" => -11.2508,
                "longitude" => -39.375
            ],
            [
                "name" => "Santa Luzia, Bahia",
                "latitude" => -15.4342,
                "longitude" => -39.3287
            ],
            [
                "name" => "Santa Maria da Vitória, Bahia",
                "latitude" => -13.3859,
                "longitude" => -44.2011
            ],
            [
                "name" => "Santana, Bahia",
                "latitude" => -12.9792,
                "longitude" => -44.0506
            ],
            [
                "name" => "Santanópolis, Bahia",
                "latitude" => -12.0311,
                "longitude" => -38.8694
            ],
            [
                "name" => "Santa Rita de Cássia, Bahia",
                "latitude" => -11.0063,
                "longitude" => -44.5255
            ],
            [
                "name" => "Santa Teresinha, Bahia",
                "latitude" => -12.7697,
                "longitude" => -39.5215
            ],
            [
                "name" => "Santo Amaro, Bahia",
                "latitude" => -12.5472,
                "longitude" => -38.7137
            ],
            [
                "name" => "Santo Antônio de Jesus, Bahia",
                "latitude" => -12.9614,
                "longitude" => -39.2584
            ],
            [
                "name" => "Santo Estêvão, Bahia",
                "latitude" => -12.428,
                "longitude" => -39.2505
            ],
            [
                "name" => "São Desidério, Bahia",
                "latitude" => -12.3572,
                "longitude" => -44.9769
            ],
            [
                "name" => "São Domingos, Bahia",
                "latitude" => -11.4649,
                "longitude" => -39.5268
            ],
            [
                "name" => "São Félix, Bahia",
                "latitude" => -12.6104,
                "longitude" => -38.9727
            ],
            [
                "name" => "São Félix do Coribe, Bahia",
                "latitude" => -13.4019,
                "longitude" => -44.1837
            ],
            [
                "name" => "São Felipe, Bahia",
                "latitude" => -12.8394,
                "longitude" => -39.0893
            ],
            [
                "name" => "São Francisco do Conde, Bahia",
                "latitude" => -12.6183,
                "longitude" => -38.6786
            ],
            [
                "name" => "São Gabriel, Bahia",
                "latitude" => -11.2175,
                "longitude" => -41.8843
            ],
            [
                "name" => "São Gonçalo dos Campos, Bahia",
                "latitude" => -12.4331,
                "longitude" => -38.9663
            ],
            [
                "name" => "São José da Vitória, Bahia",
                "latitude" => -15.0787,
                "longitude" => -39.3437
            ],
            [
                "name" => "São José do Jacuípe, Bahia",
                "latitude" => -11.4137,
                "longitude" => -39.8669
            ],
            [
                "name" => "São Miguel das Matas, Bahia",
                "latitude" => -13.0434,
                "longitude" => -39.4578
            ],
            [
                "name" => "São Sebastião do Passé, Bahia",
                "latitude" => -12.5123,
                "longitude" => -38.4905
            ],
            [
                "name" => "Sapeaçu, Bahia",
                "latitude" => -12.7208,
                "longitude" => -39.1824
            ],
            [
                "name" => "Sátiro Dias, Bahia",
                "latitude" => -11.5929,
                "longitude" => -38.5938
            ],
            [
                "name" => "Saubara, Bahia",
                "latitude" => -12.7387,
                "longitude" => -38.7625
            ],
            [
                "name" => "Saúde, Bahia",
                "latitude" => -10.9428,
                "longitude" => -40.4155
            ],
            [
                "name" => "Seabra, Bahia",
                "latitude" => -12.4169,
                "longitude" => -41.7722
            ],
            [
                "name" => "Sebastião Laranjeiras, Bahia",
                "latitude" => -14.571,
                "longitude" => -42.9434
            ],
            [
                "name" => "Senhor do Bonfim, Bahia",
                "latitude" => -10.4594,
                "longitude" => -40.1865
            ],
            [
                "name" => "Serra do Ramalho, Bahia",
                "latitude" => -13.5659,
                "longitude" => -43.5929
            ],
            [
                "name" => "Sento Sé, Bahia",
                "latitude" => -9.74138,
                "longitude" => -41.8786
            ],
            [
                "name" => "Serra Dourada, Bahia",
                "latitude" => -12.759,
                "longitude" => -43.9504
            ],
            [
                "name" => "Serra Preta, Bahia",
                "latitude" => -12.156,
                "longitude" => -39.3305
            ],
            [
                "name" => "Serrinha, Bahia",
                "latitude" => -11.6584,
                "longitude" => -39.01
            ],
            [
                "name" => "Serrolândia, Bahia",
                "latitude" => -11.4085,
                "longitude" => -40.2983
            ],
            [
                "name" => "Simões Filho, Bahia",
                "latitude" => -12.7866,
                "longitude" => -38.4029
            ],
            [
                "name" => "Sítio do Mato, Bahia",
                "latitude" => -13.0801,
                "longitude" => -43.4689
            ],
            [
                "name" => "Sítio do Quinto, Bahia",
                "latitude" => -10.3545,
                "longitude" => -38.2213
            ],
            [
                "name" => "Sobradinho, Bahia",
                "latitude" => -9.45024,
                "longitude" => -40.8145
            ],
            [
                "name" => "Souto Soares, Bahia",
                "latitude" => -12.088,
                "longitude" => -41.6427
            ],
            [
                "name" => "Tabocas do Brejo Velho, Bahia",
                "latitude" => -12.7026,
                "longitude" => -44.0075
            ],
            [
                "name" => "Tanhaçu, Bahia",
                "latitude" => -14.0197,
                "longitude" => -41.2473
            ],
            [
                "name" => "Tanque Novo, Bahia",
                "latitude" => -13.5485,
                "longitude" => -42.4934
            ],
            [
                "name" => "Tanquinho, Bahia",
                "latitude" => -11.968,
                "longitude" => -39.1033
            ],
            [
                "name" => "Taperoá, Bahia",
                "latitude" => -13.5321,
                "longitude" => -39.1009
            ],
            [
                "name" => "Tapiramutá, Bahia",
                "latitude" => -11.8475,
                "longitude" => -40.7927
            ],
            [
                "name" => "Teixeira de Freitas, Bahia",
                "latitude" => -17.5399,
                "longitude" => -39.74
            ],
            [
                "name" => "Teodoro Sampaio, Bahia",
                "latitude" => -12.295,
                "longitude" => -38.6347
            ],
            [
                "name" => "Teofilândia, Bahia",
                "latitude" => -11.4827,
                "longitude" => -38.9913
            ],
            [
                "name" => "Teolândia, Bahia",
                "latitude" => -13.5896,
                "longitude" => -39.484
            ],
            [
                "name" => "Terra Nova, Bahia",
                "latitude" => -12.3888,
                "longitude" => -38.6238
            ],
            [
                "name" => "Tremedal, Bahia",
                "latitude" => -14.9736,
                "longitude" => -41.4142
            ],
            [
                "name" => "Tucano, Bahia",
                "latitude" => -10.9584,
                "longitude" => -38.7894
            ],
            [
                "name" => "Uauá, Bahia",
                "latitude" => -9.83325,
                "longitude" => -39.4794
            ],
            [
                "name" => "Ubaíra, Bahia",
                "latitude" => -13.2714,
                "longitude" => -39.666
            ],
            [
                "name" => "Ubaitaba, Bahia",
                "latitude" => -14.303,
                "longitude" => -39.3222
            ],
            [
                "name" => "Ubatã, Bahia",
                "latitude" => -14.2063,
                "longitude" => -39.5207
            ],
            [
                "name" => "Uibaí, Bahia",
                "latitude" => -11.3394,
                "longitude" => -42.1354
            ],
            [
                "name" => "Umburanas, Bahia",
                "latitude" => -10.7339,
                "longitude" => -41.3234
            ],
            [
                "name" => "Una, Bahia",
                "latitude" => -15.2791,
                "longitude" => -39.0765
            ],
            [
                "name" => "Urandi, Bahia",
                "latitude" => -14.7678,
                "longitude" => -42.6498
            ],
            [
                "name" => "Uruçuca, Bahia",
                "latitude" => -14.5963,
                "longitude" => -39.2851
            ],
            [
                "name" => "Utinga, Bahia",
                "latitude" => -12.0783,
                "longitude" => -41.0954
            ],
            [
                "name" => "Valença, Bahia",
                "latitude" => -13.3669,
                "longitude" => -39.073
            ],
            [
                "name" => "Valente, Bahia",
                "latitude" => -11.4062,
                "longitude" => -39.457
            ],
            [
                "name" => "Várzea da Roça, Bahia",
                "latitude" => -11.6005,
                "longitude" => -40.1328
            ],
            [
                "name" => "Várzea do Poço, Bahia",
                "latitude" => -11.5273,
                "longitude" => -40.3149
            ],
            [
                "name" => "Várzea Nova, Bahia",
                "latitude" => -11.2557,
                "longitude" => -40.9432
            ],
            [
                "name" => "Varzedo, Bahia",
                "latitude" => -12.9672,
                "longitude" => -39.3919
            ],
            [
                "name" => "Vera Cruz, Bahia",
                "latitude" => -12.9568,
                "longitude" => -38.6153
            ],
            [
                "name" => "Vereda, Bahia",
                "latitude" => -17.2183,
                "longitude" => -40.0974
            ],
            [
                "name" => "Vitória da Conquista, Bahia",
                "latitude" => -14.8615,
                "longitude" => -40.8442
            ],
            [
                "name" => "Wagner, Bahia",
                "latitude" => -12.2819,
                "longitude" => -41.1715
            ],
            [
                "name" => "Wanderley, Bahia",
                "latitude" => -12.1144,
                "longitude" => -43.8958
            ],
            [
                "name" => "Wenceslau Guimarães, Bahia",
                "latitude" => -13.6908,
                "longitude" => -39.4762
            ],
            [
                "name" => "Xique-Xique, Bahia",
                "latitude" => -10.823,
                "longitude" => -42.7245
            ],
            [
                "name" => "Abadia dos Dourados, Minas Gerais",
                "latitude" => -18.4831,
                "longitude" => -47.3916
            ],
            [
                "name" => "Abaeté, Minas Gerais",
                "latitude" => -19.1551,
                "longitude" => -45.4444
            ],
            [
                "name" => "Abre Campo, Minas Gerais",
                "latitude" => -20.2996,
                "longitude" => -42.4743
            ],
            [
                "name" => "Acaiaca, Minas Gerais",
                "latitude" => -20.359,
                "longitude" => -43.1439
            ],
            [
                "name" => "Açucena, Minas Gerais",
                "latitude" => -19.0671,
                "longitude" => -42.5419
            ],
            [
                "name" => "Água Boa, Minas Gerais",
                "latitude" => -17.9914,
                "longitude" => -42.3806
            ],
            [
                "name" => "Água Comprida, Minas Gerais",
                "latitude" => -20.0576,
                "longitude" => -48.1069
            ],
            [
                "name" => "Aguanil, Minas Gerais",
                "latitude" => -20.9439,
                "longitude" => -45.3915
            ],
            [
                "name" => "Águas Formosas, Minas Gerais",
                "latitude" => -17.0802,
                "longitude" => -40.9384
            ],
            [
                "name" => "Águas Vermelhas, Minas Gerais",
                "latitude" => -15.7431,
                "longitude" => -41.4571
            ],
            [
                "name" => "Aimorés, Minas Gerais",
                "latitude" => -19.5007,
                "longitude" => -41.0746
            ],
            [
                "name" => "Aiuruoca, Minas Gerais",
                "latitude" => -21.9736,
                "longitude" => -44.6042
            ],
            [
                "name" => "Alagoa, Minas Gerais",
                "latitude" => -22.171,
                "longitude" => -44.6413
            ],
            [
                "name" => "Albertina, Minas Gerais",
                "latitude" => -22.2018,
                "longitude" => -46.6139
            ],
            [
                "name" => "Além Paraíba, Minas Gerais",
                "latitude" => -21.8797,
                "longitude" => -42.7176
            ],
            [
                "name" => "Alfenas, Minas Gerais",
                "latitude" => -21.4256,
                "longitude" => -45.9477
            ],
            [
                "name" => "Alfredo Vasconcelos, Minas Gerais",
                "latitude" => -21.1535,
                "longitude" => -43.7718
            ],
            [
                "name" => "Almenara, Minas Gerais",
                "latitude" => -16.1785,
                "longitude" => -40.6942
            ],
            [
                "name" => "Alpercata, Minas Gerais",
                "latitude" => -18.974,
                "longitude" => -41.97
            ],
            [
                "name" => "Alpinópolis, Minas Gerais",
                "latitude" => -20.8631,
                "longitude" => -46.3878
            ],
            [
                "name" => "Alterosa, Minas Gerais",
                "latitude" => -21.2488,
                "longitude" => -46.1387
            ],
            [
                "name" => "Alto Caparaó, Minas Gerais",
                "latitude" => -20.431,
                "longitude" => -41.8738
            ],
            [
                "name" => "Alto Rio Doce, Minas Gerais",
                "latitude" => -21.0281,
                "longitude" => -43.4067
            ],
            [
                "name" => "Alvarenga, Minas Gerais",
                "latitude" => -19.4174,
                "longitude" => -41.7317
            ],
            [
                "name" => "Alvinópolis, Minas Gerais",
                "latitude" => -20.1098,
                "longitude" => -43.0535
            ],
            [
                "name" => "Alvorada de Minas, Minas Gerais",
                "latitude" => -18.7334,
                "longitude" => -43.3638
            ],
            [
                "name" => "Amparo do Serra, Minas Gerais",
                "latitude" => -20.5051,
                "longitude" => -42.8009
            ],
            [
                "name" => "Andradas, Minas Gerais",
                "latitude" => -22.0695,
                "longitude" => -46.5724
            ],
            [
                "name" => "Cachoeira de Pajeú, Minas Gerais",
                "latitude" => -15.9688,
                "longitude" => -41.4948
            ],
            [
                "name" => "Andrelândia, Minas Gerais",
                "latitude" => -21.7411,
                "longitude" => -44.3117
            ],
            [
                "name" => "Angelândia, Minas Gerais",
                "latitude" => -17.7279,
                "longitude" => -42.2641
            ],
            [
                "name" => "Antônio Carlos, Minas Gerais",
                "latitude" => -21.321,
                "longitude" => -43.7451
            ],
            [
                "name" => "Antônio Dias, Minas Gerais",
                "latitude" => -19.6491,
                "longitude" => -42.8732
            ],
            [
                "name" => "Antônio Prado de Minas, Minas Gerais",
                "latitude" => -21.0192,
                "longitude" => -42.1109
            ],
            [
                "name" => "Araçaí, Minas Gerais",
                "latitude" => -19.1955,
                "longitude" => -44.2493
            ],
            [
                "name" => "Aracitaba, Minas Gerais",
                "latitude" => -21.3446,
                "longitude" => -43.3736
            ],
            [
                "name" => "Araçuaí, Minas Gerais",
                "latitude" => -16.8523,
                "longitude" => -42.0637
            ],
            [
                "name" => "Araguari, Minas Gerais",
                "latitude" => -18.6456,
                "longitude" => -48.1934
            ],
            [
                "name" => "Arantina, Minas Gerais",
                "latitude" => -21.9102,
                "longitude" => -44.2555
            ],
            [
                "name" => "Araponga, Minas Gerais",
                "latitude" => -20.6686,
                "longitude" => -42.5178
            ],
            [
                "name" => "Araporã, Minas Gerais",
                "latitude" => -18.4357,
                "longitude" => -49.1847
            ],
            [
                "name" => "Arapuá, Minas Gerais",
                "latitude" => -19.0268,
                "longitude" => -46.1484
            ],
            [
                "name" => "Araújos, Minas Gerais",
                "latitude" => -19.9405,
                "longitude" => -45.1671
            ],
            [
                "name" => "Araxá, Minas Gerais",
                "latitude" => -19.5902,
                "longitude" => -46.9438
            ],
            [
                "name" => "Arceburgo, Minas Gerais",
                "latitude" => -21.359,
                "longitude" => -46.9401
            ],
            [
                "name" => "Arcos, Minas Gerais",
                "latitude" => -20.2863,
                "longitude" => -45.5373
            ],
            [
                "name" => "Areado, Minas Gerais",
                "latitude" => -21.3572,
                "longitude" => -46.1421
            ],
            [
                "name" => "Argirita, Minas Gerais",
                "latitude" => -21.6083,
                "longitude" => -42.8292
            ],
            [
                "name" => "Aricanduva, Minas Gerais",
                "latitude" => -17.8666,
                "longitude" => -42.5533
            ],
            [
                "name" => "Arinos, Minas Gerais",
                "latitude" => -15.9187,
                "longitude" => -46.1043
            ],
            [
                "name" => "Astolfo Dutra, Minas Gerais",
                "latitude" => -21.3184,
                "longitude" => -42.8572
            ],
            [
                "name" => "Ataléia, Minas Gerais",
                "latitude" => -18.0438,
                "longitude" => -41.1149
            ],
            [
                "name" => "Augusto de Lima, Minas Gerais",
                "latitude" => -18.0997,
                "longitude" => -44.2655
            ],
            [
                "name" => "Baependi, Minas Gerais",
                "latitude" => -21.957,
                "longitude" => -44.8874
            ],
            [
                "name" => "Baldim, Minas Gerais",
                "latitude" => -19.2832,
                "longitude" => -43.9613
            ],
            [
                "name" => "Bambuí, Minas Gerais",
                "latitude" => -20.0166,
                "longitude" => -45.9754
            ],
            [
                "name" => "Bandeira, Minas Gerais",
                "latitude" => -15.8783,
                "longitude" => -40.5622
            ],
            [
                "name" => "Bandeira do Sul, Minas Gerais",
                "latitude" => -21.7308,
                "longitude" => -46.3833
            ],
            [
                "name" => "Barão de Cocais, Minas Gerais",
                "latitude" => -19.9389,
                "longitude" => -43.4755
            ],
            [
                "name" => "Barão de Monte Alto, Minas Gerais",
                "latitude" => -21.2444,
                "longitude" => -42.2372
            ],
            [
                "name" => "Barbacena, Minas Gerais",
                "latitude" => -21.2214,
                "longitude" => -43.7703
            ],
            [
                "name" => "Barra Longa, Minas Gerais",
                "latitude" => -20.2869,
                "longitude" => -43.0402
            ],
            [
                "name" => "Barroso, Minas Gerais",
                "latitude" => -21.1907,
                "longitude" => -43.972
            ],
            [
                "name" => "Bela Vista de Minas, Minas Gerais",
                "latitude" => -19.8302,
                "longitude" => -43.0922
            ],
            [
                "name" => "Belmiro Braga, Minas Gerais",
                "latitude" => -21.944,
                "longitude" => -43.4084
            ],
            [
                "name" => "Belo Horizonte, Minas Gerais",
                "latitude" => -19.9102,
                "longitude" => -43.9266
            ],
            [
                "name" => "Belo Oriente, Minas Gerais",
                "latitude" => -19.2199,
                "longitude" => -42.4828
            ],
            [
                "name" => "Belo Vale, Minas Gerais",
                "latitude" => -20.4077,
                "longitude" => -44.0275
            ],
            [
                "name" => "Berilo, Minas Gerais",
                "latitude" => -16.9567,
                "longitude" => -42.4606
            ],
            [
                "name" => "Bertópolis, Minas Gerais",
                "latitude" => -17.059,
                "longitude" => -40.58
            ],
            [
                "name" => "Berizal, Minas Gerais",
                "latitude" => -15.61,
                "longitude" => -41.7432
            ],
            [
                "name" => "Betim, Minas Gerais",
                "latitude" => -19.9668,
                "longitude" => -44.2008
            ],
            [
                "name" => "Bias Fortes, Minas Gerais",
                "latitude" => -21.602,
                "longitude" => -43.7574
            ],
            [
                "name" => "Bicas, Minas Gerais",
                "latitude" => -21.7232,
                "longitude" => -43.056
            ],
            [
                "name" => "Biquinhas, Minas Gerais",
                "latitude" => -18.7754,
                "longitude" => -45.4974
            ],
            [
                "name" => "Boa Esperança, Minas Gerais",
                "latitude" => -21.0927,
                "longitude" => -45.5612
            ],
            [
                "name" => "Bocaina de Minas, Minas Gerais",
                "latitude" => -22.1697,
                "longitude" => -44.3972
            ],
            [
                "name" => "Bocaiúva, Minas Gerais",
                "latitude" => -17.1135,
                "longitude" => -43.8104
            ],
            [
                "name" => "Bom Despacho, Minas Gerais",
                "latitude" => -19.7386,
                "longitude" => -45.2622
            ],
            [
                "name" => "Bom Jardim de Minas, Minas Gerais",
                "latitude" => -21.9479,
                "longitude" => -44.1885
            ],
            [
                "name" => "Bom Jesus da Penha, Minas Gerais",
                "latitude" => -21.0148,
                "longitude" => -46.5174
            ],
            [
                "name" => "Bom Jesus do Amparo, Minas Gerais",
                "latitude" => -19.7054,
                "longitude" => -43.4782
            ],
            [
                "name" => "Bom Jesus do Galho, Minas Gerais",
                "latitude" => -19.836,
                "longitude" => -42.3165
            ],
            [
                "name" => "Bom Repouso, Minas Gerais",
                "latitude" => -22.4675,
                "longitude" => -46.144
            ],
            [
                "name" => "Bom Sucesso, Minas Gerais",
                "latitude" => -21.0329,
                "longitude" => -44.7537
            ],
            [
                "name" => "Bonfim, Minas Gerais",
                "latitude" => -20.3302,
                "longitude" => -44.2366
            ],
            [
                "name" => "Bonfinópolis de Minas, Minas Gerais",
                "latitude" => -16.568,
                "longitude" => -45.9839
            ],
            [
                "name" => "Bonito de Minas, Minas Gerais",
                "latitude" => -15.3231,
                "longitude" => -44.7543
            ],
            [
                "name" => "Borda da Mata, Minas Gerais",
                "latitude" => -22.2707,
                "longitude" => -46.1653
            ],
            [
                "name" => "Botelhos, Minas Gerais",
                "latitude" => -21.6412,
                "longitude" => -46.391
            ],
            [
                "name" => "Botumirim, Minas Gerais",
                "latitude" => -16.8657,
                "longitude" => -43.0086
            ],
            [
                "name" => "Brasilândia de Minas, Minas Gerais",
                "latitude" => -16.9999,
                "longitude" => -46.0081
            ],
            [
                "name" => "Brasília de Minas, Minas Gerais",
                "latitude" => -16.2104,
                "longitude" => -44.4299
            ],
            [
                "name" => "Brás Pires, Minas Gerais",
                "latitude" => -20.8419,
                "longitude" => -43.2406
            ],
            [
                "name" => "Braúnas, Minas Gerais",
                "latitude" => -19.0562,
                "longitude" => -42.7099
            ],
            [
                "name" => "Brazópolis, Minas Gerais",
                "latitude" => -22.4743,
                "longitude" => -45.6166
            ],
            [
                "name" => "Brumadinho, Minas Gerais",
                "latitude" => -20.151,
                "longitude" => -44.2007
            ],
            [
                "name" => "Bueno Brandão, Minas Gerais",
                "latitude" => -22.4383,
                "longitude" => -46.3491
            ],
            [
                "name" => "Buenópolis, Minas Gerais",
                "latitude" => -17.8744,
                "longitude" => -44.1775
            ],
            [
                "name" => "Bugre, Minas Gerais",
                "latitude" => -19.4231,
                "longitude" => -42.2552
            ],
            [
                "name" => "Buritis, Minas Gerais",
                "latitude" => -15.6218,
                "longitude" => -46.4221
            ],
            [
                "name" => "Buritizeiro, Minas Gerais",
                "latitude" => -17.3656,
                "longitude" => -44.9606
            ],
            [
                "name" => "Cabeceira Grande, Minas Gerais",
                "latitude" => -16.0335,
                "longitude" => -47.0862
            ],
            [
                "name" => "Cabo Verde, Minas Gerais",
                "latitude" => -21.4699,
                "longitude" => -46.3919
            ],
            [
                "name" => "Cachoeira da Prata, Minas Gerais",
                "latitude" => -19.521,
                "longitude" => -44.4544
            ],
            [
                "name" => "Cachoeira de Minas, Minas Gerais",
                "latitude" => -22.3511,
                "longitude" => -45.7809
            ],
            [
                "name" => "Cachoeira Dourada, Minas Gerais",
                "latitude" => -18.5161,
                "longitude" => -49.5039
            ],
            [
                "name" => "Caetanópolis, Minas Gerais",
                "latitude" => -19.2971,
                "longitude" => -44.4189
            ],
            [
                "name" => "Caeté, Minas Gerais",
                "latitude" => -19.8826,
                "longitude" => -43.6704
            ],
            [
                "name" => "Caiana, Minas Gerais",
                "latitude" => -20.6956,
                "longitude" => -41.9292
            ],
            [
                "name" => "Cajuri, Minas Gerais",
                "latitude" => -20.7903,
                "longitude" => -42.7925
            ],
            [
                "name" => "Caldas, Minas Gerais",
                "latitude" => -21.9183,
                "longitude" => -46.3843
            ],
            [
                "name" => "Camacho, Minas Gerais",
                "latitude" => -20.6294,
                "longitude" => -45.1593
            ],
            [
                "name" => "Camanducaia, Minas Gerais",
                "latitude" => -22.7515,
                "longitude" => -46.1494
            ],
            [
                "name" => "Cambuí, Minas Gerais",
                "latitude" => -22.6115,
                "longitude" => -46.0572
            ],
            [
                "name" => "Cambuquira, Minas Gerais",
                "latitude" => -21.854,
                "longitude" => -45.2896
            ],
            [
                "name" => "Campanário, Minas Gerais",
                "latitude" => -18.2427,
                "longitude" => -41.7355
            ],
            [
                "name" => "Campanha, Minas Gerais",
                "latitude" => -21.836,
                "longitude" => -45.4004
            ],
            [
                "name" => "Campestre, Minas Gerais",
                "latitude" => -21.7079,
                "longitude" => -46.2381
            ],
            [
                "name" => "Campina Verde, Minas Gerais",
                "latitude" => -19.5382,
                "longitude" => -49.4862
            ],
            [
                "name" => "Campo Azul, Minas Gerais",
                "latitude" => -16.5028,
                "longitude" => -44.8096
            ],
            [
                "name" => "Campo Belo, Minas Gerais",
                "latitude" => -20.8932,
                "longitude" => -45.2699
            ],
            [
                "name" => "Campo do Meio, Minas Gerais",
                "latitude" => -21.1127,
                "longitude" => -45.8273
            ],
            [
                "name" => "Campo Florido, Minas Gerais",
                "latitude" => -19.7631,
                "longitude" => -48.5716
            ],
            [
                "name" => "Campos Altos, Minas Gerais",
                "latitude" => -19.6914,
                "longitude" => -46.1725
            ],
            [
                "name" => "Campos Gerais, Minas Gerais",
                "latitude" => -21.237,
                "longitude" => -45.7569
            ],
            [
                "name" => "Canaã, Minas Gerais",
                "latitude" => -20.6869,
                "longitude" => -42.6167
            ],
            [
                "name" => "Canápolis, Minas Gerais",
                "latitude" => -18.7212,
                "longitude" => -49.2035
            ],
            [
                "name" => "Cana Verde, Minas Gerais",
                "latitude" => -21.0232,
                "longitude" => -45.1801
            ],
            [
                "name" => "Candeias, Minas Gerais",
                "latitude" => -20.7692,
                "longitude" => -45.2765
            ],
            [
                "name" => "Cantagalo, Minas Gerais",
                "latitude" => -18.5248,
                "longitude" => -42.6223
            ],
            [
                "name" => "Caparaó, Minas Gerais",
                "latitude" => -20.5289,
                "longitude" => -41.9061
            ],
            [
                "name" => "Capela Nova, Minas Gerais",
                "latitude" => -20.9179,
                "longitude" => -43.622
            ],
            [
                "name" => "Capelinha, Minas Gerais",
                "latitude" => -17.6888,
                "longitude" => -42.5147
            ],
            [
                "name" => "Capetinga, Minas Gerais",
                "latitude" => -20.6163,
                "longitude" => -47.0571
            ],
            [
                "name" => "Capim Branco, Minas Gerais",
                "latitude" => -19.5471,
                "longitude" => -44.1304
            ],
            [
                "name" => "Capinópolis, Minas Gerais",
                "latitude" => -18.6862,
                "longitude" => -49.5706
            ],
            [
                "name" => "Capitão Andrade, Minas Gerais",
                "latitude" => -19.0748,
                "longitude" => -41.8614
            ],
            [
                "name" => "Capitão Enéas, Minas Gerais",
                "latitude" => -16.3265,
                "longitude" => -43.7084
            ],
            [
                "name" => "Capitólio, Minas Gerais",
                "latitude" => -20.6164,
                "longitude" => -46.0493
            ],
            [
                "name" => "Caputira, Minas Gerais",
                "latitude" => -20.1703,
                "longitude" => -42.2683
            ],
            [
                "name" => "Caraí, Minas Gerais",
                "latitude" => -17.1862,
                "longitude" => -41.7004
            ],
            [
                "name" => "Caranaíba, Minas Gerais",
                "latitude" => -20.8707,
                "longitude" => -43.7417
            ],
            [
                "name" => "Carandaí, Minas Gerais",
                "latitude" => -20.9566,
                "longitude" => -43.811
            ],
            [
                "name" => "Carangola, Minas Gerais",
                "latitude" => -20.7343,
                "longitude" => -42.0313
            ],
            [
                "name" => "Caratinga, Minas Gerais",
                "latitude" => -19.7868,
                "longitude" => -42.1292
            ],
            [
                "name" => "Carbonita, Minas Gerais",
                "latitude" => -17.5255,
                "longitude" => -43.0137
            ],
            [
                "name" => "Careaçu, Minas Gerais",
                "latitude" => -22.0424,
                "longitude" => -45.696
            ],
            [
                "name" => "Carlos Chagas, Minas Gerais",
                "latitude" => -17.6973,
                "longitude" => -40.7723
            ],
            [
                "name" => "Carmésia, Minas Gerais",
                "latitude" => -19.0877,
                "longitude" => -43.1382
            ],
            [
                "name" => "Carmo da Cachoeira, Minas Gerais",
                "latitude" => -21.4633,
                "longitude" => -45.2201
            ],
            [
                "name" => "Carmo da Mata, Minas Gerais",
                "latitude" => -20.5575,
                "longitude" => -44.8735
            ],
            [
                "name" => "Carmo de Minas, Minas Gerais",
                "latitude" => -22.1204,
                "longitude" => -45.1307
            ],
            [
                "name" => "Carmo do Cajuru, Minas Gerais",
                "latitude" => -20.1912,
                "longitude" => -44.7664
            ],
            [
                "name" => "Carmo do Paranaíba, Minas Gerais",
                "latitude" => -18.991,
                "longitude" => -46.3167
            ],
            [
                "name" => "Carmo do Rio Claro, Minas Gerais",
                "latitude" => -20.9736,
                "longitude" => -46.1149
            ],
            [
                "name" => "Carmópolis de Minas, Minas Gerais",
                "latitude" => -20.5396,
                "longitude" => -44.6336
            ],
            [
                "name" => "Carneirinho, Minas Gerais",
                "latitude" => -19.6987,
                "longitude" => -50.6894
            ],
            [
                "name" => "Carrancas, Minas Gerais",
                "latitude" => -21.4898,
                "longitude" => -44.6446
            ],
            [
                "name" => "Carvalhópolis, Minas Gerais",
                "latitude" => -21.7735,
                "longitude" => -45.8421
            ],
            [
                "name" => "Carvalhos, Minas Gerais",
                "latitude" => -22.0,
                "longitude" => -44.4632
            ],
            [
                "name" => "Casa Grande, Minas Gerais",
                "latitude" => -20.7925,
                "longitude" => -43.9343
            ],
            [
                "name" => "Cascalho Rico, Minas Gerais",
                "latitude" => -18.5772,
                "longitude" => -47.8716
            ],
            [
                "name" => "Cássia, Minas Gerais",
                "latitude" => -20.5831,
                "longitude" => -46.9201
            ],
            [
                "name" => "Conceição da Barra de Minas, Minas Gerais",
                "latitude" => -21.1316,
                "longitude" => -44.4729
            ],
            [
                "name" => "Cataguases, Minas Gerais",
                "latitude" => -21.3924,
                "longitude" => -42.6896
            ],
            [
                "name" => "Catas Altas, Minas Gerais",
                "latitude" => -20.0734,
                "longitude" => -43.4061
            ],
            [
                "name" => "Catas Altas da Noruega, Minas Gerais",
                "latitude" => -20.6901,
                "longitude" => -43.4939
            ],
            [
                "name" => "Catuji, Minas Gerais",
                "latitude" => -17.3018,
                "longitude" => -41.5276
            ],
            [
                "name" => "Catuti, Minas Gerais",
                "latitude" => -15.3616,
                "longitude" => -42.9627
            ],
            [
                "name" => "Caxambu, Minas Gerais",
                "latitude" => -21.9753,
                "longitude" => -44.9319
            ],
            [
                "name" => "Cedro do Abaeté, Minas Gerais",
                "latitude" => -19.1458,
                "longitude" => -45.712
            ],
            [
                "name" => "Central de Minas, Minas Gerais",
                "latitude" => -18.7612,
                "longitude" => -41.3143
            ],
            [
                "name" => "Centralina, Minas Gerais",
                "latitude" => -18.5852,
                "longitude" => -49.2014
            ],
            [
                "name" => "Chácara, Minas Gerais",
                "latitude" => -21.6733,
                "longitude" => -43.215
            ],
            [
                "name" => "Chalé, Minas Gerais",
                "latitude" => -20.0453,
                "longitude" => -41.6897
            ],
            [
                "name" => "Chapada do Norte, Minas Gerais",
                "latitude" => -17.0881,
                "longitude" => -42.5392
            ],
            [
                "name" => "Chapada Gaúcha, Minas Gerais",
                "latitude" => -15.3014,
                "longitude" => -45.6116
            ],
            [
                "name" => "Chiador, Minas Gerais",
                "latitude" => -21.9996,
                "longitude" => -43.0617
            ],
            [
                "name" => "Cipotânea, Minas Gerais",
                "latitude" => -20.9026,
                "longitude" => -43.3629
            ],
            [
                "name" => "Claraval, Minas Gerais",
                "latitude" => -20.397,
                "longitude" => -47.2768
            ],
            [
                "name" => "Claro dos Poções, Minas Gerais",
                "latitude" => -17.082,
                "longitude" => -44.2061
            ],
            [
                "name" => "Cláudio, Minas Gerais",
                "latitude" => -20.4437,
                "longitude" => -44.7673
            ],
            [
                "name" => "Coimbra, Minas Gerais",
                "latitude" => -20.8535,
                "longitude" => -42.8008
            ],
            [
                "name" => "Coluna, Minas Gerais",
                "latitude" => -18.2311,
                "longitude" => -42.8352
            ],
            [
                "name" => "Comendador Gomes, Minas Gerais",
                "latitude" => -19.6973,
                "longitude" => -49.0789
            ],
            [
                "name" => "Comercinho, Minas Gerais",
                "latitude" => -16.2963,
                "longitude" => -41.7945
            ],
            [
                "name" => "Conceição da Aparecida, Minas Gerais",
                "latitude" => -21.096,
                "longitude" => -46.2049
            ],
            [
                "name" => "Conceição das Pedras, Minas Gerais",
                "latitude" => -22.1576,
                "longitude" => -45.4562
            ],
            [
                "name" => "Conceição das Alagoas, Minas Gerais",
                "latitude" => -19.9172,
                "longitude" => -48.3839
            ],
            [
                "name" => "Conceição de Ipanema, Minas Gerais",
                "latitude" => -19.9326,
                "longitude" => -41.6908
            ],
            [
                "name" => "Conceição do Mato Dentro, Minas Gerais",
                "latitude" => -19.0344,
                "longitude" => -43.4221
            ],
            [
                "name" => "Conceição do Pará, Minas Gerais",
                "latitude" => -19.7456,
                "longitude" => -44.8945
            ],
            [
                "name" => "Conceição do Rio Verde, Minas Gerais",
                "latitude" => -21.8778,
                "longitude" => -45.087
            ],
            [
                "name" => "Conceição dos Ouros, Minas Gerais",
                "latitude" => -22.4078,
                "longitude" => -45.7996
            ],
            [
                "name" => "Cônego Marinho, Minas Gerais",
                "latitude" => -15.2892,
                "longitude" => -44.4181
            ],
            [
                "name" => "Confins, Minas Gerais",
                "latitude" => -19.6282,
                "longitude" => -43.9931
            ],
            [
                "name" => "Congonhal, Minas Gerais",
                "latitude" => -22.1488,
                "longitude" => -46.043
            ],
            [
                "name" => "Congonhas, Minas Gerais",
                "latitude" => -20.4958,
                "longitude" => -43.851
            ],
            [
                "name" => "Congonhas do Norte, Minas Gerais",
                "latitude" => -18.8021,
                "longitude" => -43.6767
            ],
            [
                "name" => "Conquista, Minas Gerais",
                "latitude" => -19.9312,
                "longitude" => -47.5492
            ],
            [
                "name" => "Conselheiro Lafaiete, Minas Gerais",
                "latitude" => -20.6634,
                "longitude" => -43.7846
            ],
            [
                "name" => "Conselheiro Pena, Minas Gerais",
                "latitude" => -19.1789,
                "longitude" => -41.4736
            ],
            [
                "name" => "Consolação, Minas Gerais",
                "latitude" => -22.5493,
                "longitude" => -45.9255
            ],
            [
                "name" => "Contagem, Minas Gerais",
                "latitude" => -19.9321,
                "longitude" => -44.0539
            ],
            [
                "name" => "Coqueiral, Minas Gerais",
                "latitude" => -21.1858,
                "longitude" => -45.4366
            ],
            [
                "name" => "Coração de Jesus, Minas Gerais",
                "latitude" => -16.6841,
                "longitude" => -44.3635
            ],
            [
                "name" => "Cordisburgo, Minas Gerais",
                "latitude" => -19.1224,
                "longitude" => -44.3224
            ],
            [
                "name" => "Cordislândia, Minas Gerais",
                "latitude" => -21.7891,
                "longitude" => -45.6999
            ],
            [
                "name" => "Corinto, Minas Gerais",
                "latitude" => -18.369,
                "longitude" => -44.4542
            ],
            [
                "name" => "Coroaci, Minas Gerais",
                "latitude" => -18.6156,
                "longitude" => -42.2791
            ],
            [
                "name" => "Coromandel, Minas Gerais",
                "latitude" => -18.4734,
                "longitude" => -47.1933
            ],
            [
                "name" => "Coronel Fabriciano, Minas Gerais",
                "latitude" => -19.5179,
                "longitude" => -42.6276
            ],
            [
                "name" => "Coronel Murta, Minas Gerais",
                "latitude" => -16.6148,
                "longitude" => -42.184
            ],
            [
                "name" => "Coronel Pacheco, Minas Gerais",
                "latitude" => -21.5898,
                "longitude" => -43.256
            ],
            [
                "name" => "Coronel Xavier Chaves, Minas Gerais",
                "latitude" => -21.0277,
                "longitude" => -44.2206
            ],
            [
                "name" => "Córrego Danta, Minas Gerais",
                "latitude" => -19.8198,
                "longitude" => -45.9032
            ],
            [
                "name" => "Córrego do Bom Jesus, Minas Gerais",
                "latitude" => -22.6269,
                "longitude" => -46.0241
            ],
            [
                "name" => "Córrego Fundo, Minas Gerais",
                "latitude" => -20.4474,
                "longitude" => -45.5617
            ],
            [
                "name" => "Córrego Novo, Minas Gerais",
                "latitude" => -19.8361,
                "longitude" => -42.3988
            ],
            [
                "name" => "Couto de Magalhães de Minas, Minas Gerais",
                "latitude" => -18.0727,
                "longitude" => -43.4648
            ],
            [
                "name" => "Crisólita, Minas Gerais",
                "latitude" => -17.2381,
                "longitude" => -40.9184
            ],
            [
                "name" => "Cristais, Minas Gerais",
                "latitude" => -20.8733,
                "longitude" => -45.5167
            ],
            [
                "name" => "Cristália, Minas Gerais",
                "latitude" => -16.716,
                "longitude" => -42.8571
            ],
            [
                "name" => "Cristiano Otoni, Minas Gerais",
                "latitude" => -20.8324,
                "longitude" => -43.8166
            ],
            [
                "name" => "Cristina, Minas Gerais",
                "latitude" => -22.208,
                "longitude" => -45.2673
            ],
            [
                "name" => "Crucilândia, Minas Gerais",
                "latitude" => -20.3923,
                "longitude" => -44.3334
            ],
            [
                "name" => "Cruzeiro da Fortaleza, Minas Gerais",
                "latitude" => -18.944,
                "longitude" => -46.6669
            ],
            [
                "name" => "Cruzília, Minas Gerais",
                "latitude" => -21.84,
                "longitude" => -44.8067
            ],
            [
                "name" => "Cuparaque, Minas Gerais",
                "latitude" => -18.9648,
                "longitude" => -41.0986
            ],
            [
                "name" => "Curral de Dentro, Minas Gerais",
                "latitude" => -15.9327,
                "longitude" => -41.8557
            ],
            [
                "name" => "Curvelo, Minas Gerais",
                "latitude" => -18.7527,
                "longitude" => -44.4303
            ],
            [
                "name" => "Datas, Minas Gerais",
                "latitude" => -18.4478,
                "longitude" => -43.6591
            ],
            [
                "name" => "Delfim Moreira, Minas Gerais",
                "latitude" => -22.5036,
                "longitude" => -45.2792
            ],
            [
                "name" => "Delfinópolis, Minas Gerais",
                "latitude" => -20.3468,
                "longitude" => -46.8456
            ],
            [
                "name" => "Delta, Minas Gerais",
                "latitude" => -19.9721,
                "longitude" => -47.7841
            ],
            [
                "name" => "Descoberto, Minas Gerais",
                "latitude" => -21.46,
                "longitude" => -42.9618
            ],
            [
                "name" => "Desterro de Entre Rios, Minas Gerais",
                "latitude" => -20.665,
                "longitude" => -44.3334
            ],
            [
                "name" => "Desterro do Melo, Minas Gerais",
                "latitude" => -21.143,
                "longitude" => -43.5178
            ],
            [
                "name" => "Diamantina, Minas Gerais",
                "latitude" => -18.2413,
                "longitude" => -43.6031
            ],
            [
                "name" => "Diogo de Vasconcelos, Minas Gerais",
                "latitude" => -20.4879,
                "longitude" => -43.1953
            ],
            [
                "name" => "Dionísio, Minas Gerais",
                "latitude" => -19.8433,
                "longitude" => -42.7701
            ],
            [
                "name" => "Divinésia, Minas Gerais",
                "latitude" => -20.9917,
                "longitude" => -43.0003
            ],
            [
                "name" => "Divino, Minas Gerais",
                "latitude" => -20.6134,
                "longitude" => -42.1438
            ],
            [
                "name" => "Divino das Laranjeiras, Minas Gerais",
                "latitude" => -18.7755,
                "longitude" => -41.4781
            ],
            [
                "name" => "Divinolândia de Minas, Minas Gerais",
                "latitude" => -18.8004,
                "longitude" => -42.6103
            ],
            [
                "name" => "Divinópolis, Minas Gerais",
                "latitude" => -20.1446,
                "longitude" => -44.8912
            ],
            [
                "name" => "Divisa Alegre, Minas Gerais",
                "latitude" => -15.7221,
                "longitude" => -41.3463
            ],
            [
                "name" => "Divisa Nova, Minas Gerais",
                "latitude" => -21.5092,
                "longitude" => -46.1904
            ],
            [
                "name" => "Divisópolis, Minas Gerais",
                "latitude" => -15.7254,
                "longitude" => -40.9997
            ],
            [
                "name" => "Dom Bosco, Minas Gerais",
                "latitude" => -16.652,
                "longitude" => -46.2597
            ],
            [
                "name" => "Dom Cavati, Minas Gerais",
                "latitude" => -19.3735,
                "longitude" => -42.1121
            ],
            [
                "name" => "Dom Joaquim, Minas Gerais",
                "latitude" => -18.961,
                "longitude" => -43.2544
            ],
            [
                "name" => "Dom Silvério, Minas Gerais",
                "latitude" => -20.1627,
                "longitude" => -42.9627
            ],
            [
                "name" => "Dom Viçoso, Minas Gerais",
                "latitude" => -22.2511,
                "longitude" => -45.1643
            ],
            [
                "name" => "Dona Eusébia, Minas Gerais",
                "latitude" => -21.319,
                "longitude" => -42.807
            ],
            [
                "name" => "Dores de Campos, Minas Gerais",
                "latitude" => -21.1139,
                "longitude" => -44.0207
            ],
            [
                "name" => "Dores de Guanhães, Minas Gerais",
                "latitude" => -19.0516,
                "longitude" => -42.9254
            ],
            [
                "name" => "Dores do Indaiá, Minas Gerais",
                "latitude" => -19.4628,
                "longitude" => -45.5927
            ],
            [
                "name" => "Dores do Turvo, Minas Gerais",
                "latitude" => -20.9785,
                "longitude" => -43.1834
            ],
            [
                "name" => "Doresópolis, Minas Gerais",
                "latitude" => -20.2868,
                "longitude" => -45.9007
            ],
            [
                "name" => "Douradoquara, Minas Gerais",
                "latitude" => -18.4338,
                "longitude" => -47.5993
            ],
            [
                "name" => "Durandé, Minas Gerais",
                "latitude" => -20.2058,
                "longitude" => -41.7977
            ],
            [
                "name" => "Elói Mendes, Minas Gerais",
                "latitude" => -21.6088,
                "longitude" => -45.5691
            ],
            [
                "name" => "Engenheiro Caldas, Minas Gerais",
                "latitude" => -19.2065,
                "longitude" => -42.0503
            ],
            [
                "name" => "Engenheiro Navarro, Minas Gerais",
                "latitude" => -17.2831,
                "longitude" => -43.947
            ],
            [
                "name" => "Entre Folhas, Minas Gerais",
                "latitude" => -19.6218,
                "longitude" => -42.2306
            ],
            [
                "name" => "Entre Rios de Minas, Minas Gerais",
                "latitude" => -20.6706,
                "longitude" => -44.0654
            ],
            [
                "name" => "Ervália, Minas Gerais",
                "latitude" => -20.8403,
                "longitude" => -42.6544
            ],
            [
                "name" => "Esmeraldas, Minas Gerais",
                "latitude" => -19.764,
                "longitude" => -44.3065
            ],
            [
                "name" => "Espera Feliz, Minas Gerais",
                "latitude" => -20.6508,
                "longitude" => -41.9119
            ],
            [
                "name" => "Espinosa, Minas Gerais",
                "latitude" => -14.9249,
                "longitude" => -42.809
            ],
            [
                "name" => "Espírito Santo do Dourado, Minas Gerais",
                "latitude" => -22.0454,
                "longitude" => -45.9548
            ],
            [
                "name" => "Estiva, Minas Gerais",
                "latitude" => -22.4577,
                "longitude" => -46.0191
            ],
            [
                "name" => "Estrela Dalva, Minas Gerais",
                "latitude" => -21.7412,
                "longitude" => -42.4574
            ],
            [
                "name" => "Estrela do Indaiá, Minas Gerais",
                "latitude" => -19.5169,
                "longitude" => -45.7859
            ],
            [
                "name" => "Estrela do Sul, Minas Gerais",
                "latitude" => -18.7399,
                "longitude" => -47.6956
            ],
            [
                "name" => "Eugenópolis, Minas Gerais",
                "latitude" => -21.1002,
                "longitude" => -42.1878
            ],
            [
                "name" => "Ewbank da Câmara, Minas Gerais",
                "latitude" => -21.5498,
                "longitude" => -43.5068
            ],
            [
                "name" => "Extrema, Minas Gerais",
                "latitude" => -22.854,
                "longitude" => -46.3178
            ],
            [
                "name" => "Fama, Minas Gerais",
                "latitude" => -21.4089,
                "longitude" => -45.8286
            ],
            [
                "name" => "Faria Lemos, Minas Gerais",
                "latitude" => -20.8097,
                "longitude" => -42.0213
            ],
            [
                "name" => "Felício dos Santos, Minas Gerais",
                "latitude" => -18.0755,
                "longitude" => -43.2422
            ],
            [
                "name" => "São Gonçalo do Rio Preto, Minas Gerais",
                "latitude" => -18.0025,
                "longitude" => -43.3854
            ],
            [
                "name" => "Felisburgo, Minas Gerais",
                "latitude" => -16.6348,
                "longitude" => -40.7605
            ],
            [
                "name" => "Felixlândia, Minas Gerais",
                "latitude" => -18.7507,
                "longitude" => -44.9004
            ],
            [
                "name" => "Fernandes Tourinho, Minas Gerais",
                "latitude" => -19.1541,
                "longitude" => -42.0803
            ],
            [
                "name" => "Ferros, Minas Gerais",
                "latitude" => -19.2343,
                "longitude" => -43.0192
            ],
            [
                "name" => "Fervedouro, Minas Gerais",
                "latitude" => -20.726,
                "longitude" => -42.279
            ],
            [
                "name" => "Florestal, Minas Gerais",
                "latitude" => -19.888,
                "longitude" => -44.4318
            ],
            [
                "name" => "Formiga, Minas Gerais",
                "latitude" => -20.4618,
                "longitude" => -45.4268
            ],
            [
                "name" => "Formoso, Minas Gerais",
                "latitude" => -14.9446,
                "longitude" => -46.2371
            ],
            [
                "name" => "Fortaleza de Minas, Minas Gerais",
                "latitude" => -20.8508,
                "longitude" => -46.712
            ],
            [
                "name" => "Fortuna de Minas, Minas Gerais",
                "latitude" => -19.5578,
                "longitude" => -44.4472
            ],
            [
                "name" => "Francisco Badaró, Minas Gerais",
                "latitude" => -16.9883,
                "longitude" => -42.3568
            ],
            [
                "name" => "Francisco Dumont, Minas Gerais",
                "latitude" => -17.3107,
                "longitude" => -44.2317
            ],
            [
                "name" => "Francisco Sá, Minas Gerais",
                "latitude" => -16.4827,
                "longitude" => -43.4896
            ],
            [
                "name" => "Franciscópolis, Minas Gerais",
                "latitude" => -17.9578,
                "longitude" => -42.0094
            ],
            [
                "name" => "Frei Gaspar, Minas Gerais",
                "latitude" => -18.0709,
                "longitude" => -41.4325
            ],
            [
                "name" => "Frei Inocêncio, Minas Gerais",
                "latitude" => -18.5556,
                "longitude" => -41.9121
            ],
            [
                "name" => "Frei Lagonegro, Minas Gerais",
                "latitude" => -18.1751,
                "longitude" => -42.7617
            ],
            [
                "name" => "Fronteira, Minas Gerais",
                "latitude" => -20.2748,
                "longitude" => -49.1984
            ],
            [
                "name" => "Fronteira dos Vales, Minas Gerais",
                "latitude" => -16.8898,
                "longitude" => -40.923
            ],
            [
                "name" => "Fruta de Leite, Minas Gerais",
                "latitude" => -16.1225,
                "longitude" => -42.5288
            ],
            [
                "name" => "Frutal, Minas Gerais",
                "latitude" => -20.0259,
                "longitude" => -48.9355
            ],
            [
                "name" => "Funilândia, Minas Gerais",
                "latitude" => -19.3661,
                "longitude" => -44.061
            ],
            [
                "name" => "Galiléia, Minas Gerais",
                "latitude" => -19.0005,
                "longitude" => -41.5387
            ],
            [
                "name" => "Gameleiras, Minas Gerais",
                "latitude" => -15.0829,
                "longitude" => -43.125
            ],
            [
                "name" => "Glaucilândia, Minas Gerais",
                "latitude" => -16.8481,
                "longitude" => -43.692
            ],
            [
                "name" => "Goiabeira, Minas Gerais",
                "latitude" => -18.9807,
                "longitude" => -41.2235
            ],
            [
                "name" => "Goianá, Minas Gerais",
                "latitude" => -21.536,
                "longitude" => -43.1957
            ],
            [
                "name" => "Gonçalves, Minas Gerais",
                "latitude" => -22.6545,
                "longitude" => -45.8556
            ],
            [
                "name" => "Gonzaga, Minas Gerais",
                "latitude" => -18.8196,
                "longitude" => -42.4769
            ],
            [
                "name" => "Gouveia, Minas Gerais",
                "latitude" => -18.4519,
                "longitude" => -43.7423
            ],
            [
                "name" => "Governador Valadares, Minas Gerais",
                "latitude" => -18.8545,
                "longitude" => -41.9555
            ],
            [
                "name" => "Grão Mogol, Minas Gerais",
                "latitude" => -16.5662,
                "longitude" => -42.8923
            ],
            [
                "name" => "Grupiara, Minas Gerais",
                "latitude" => -18.5003,
                "longitude" => -47.7318
            ],
            [
                "name" => "Guanhães, Minas Gerais",
                "latitude" => -18.7713,
                "longitude" => -42.9312
            ],
            [
                "name" => "Guapé, Minas Gerais",
                "latitude" => -20.7631,
                "longitude" => -45.9152
            ],
            [
                "name" => "Guaraciaba, Minas Gerais",
                "latitude" => -20.5716,
                "longitude" => -43.0094
            ],
            [
                "name" => "Guaraciama, Minas Gerais",
                "latitude" => -17.0142,
                "longitude" => -43.6675
            ],
            [
                "name" => "Guaranésia, Minas Gerais",
                "latitude" => -21.3009,
                "longitude" => -46.7964
            ],
            [
                "name" => "Guarani, Minas Gerais",
                "latitude" => -21.3563,
                "longitude" => -43.0328
            ],
            [
                "name" => "Guarará, Minas Gerais",
                "latitude" => -21.7304,
                "longitude" => -43.0334
            ],
            [
                "name" => "Guarda-Mor, Minas Gerais",
                "latitude" => -17.7673,
                "longitude" => -47.0998
            ],
            [
                "name" => "Guaxupé, Minas Gerais",
                "latitude" => -21.305,
                "longitude" => -46.7081
            ],
            [
                "name" => "Guidoval, Minas Gerais",
                "latitude" => -21.155,
                "longitude" => -42.7887
            ],
            [
                "name" => "Guimarânia, Minas Gerais",
                "latitude" => -18.8425,
                "longitude" => -46.7901
            ],
            [
                "name" => "Guiricema, Minas Gerais",
                "latitude" => -21.0098,
                "longitude" => -42.7207
            ],
            [
                "name" => "Gurinhatã, Minas Gerais",
                "latitude" => -19.2143,
                "longitude" => -49.7876
            ],
            [
                "name" => "Heliodora, Minas Gerais",
                "latitude" => -22.0644,
                "longitude" => -45.5453
            ],
            [
                "name" => "Iapu, Minas Gerais",
                "latitude" => -19.4387,
                "longitude" => -42.2147
            ],
            [
                "name" => "Ibertioga, Minas Gerais",
                "latitude" => -21.433,
                "longitude" => -43.9639
            ],
            [
                "name" => "Ibiá, Minas Gerais",
                "latitude" => -19.4749,
                "longitude" => -46.5474
            ],
            [
                "name" => "Ibiaí, Minas Gerais",
                "latitude" => -16.8591,
                "longitude" => -44.9046
            ],
            [
                "name" => "Ibiracatu, Minas Gerais",
                "latitude" => -15.6605,
                "longitude" => -44.1667
            ],
            [
                "name" => "Ibiraci, Minas Gerais",
                "latitude" => -20.4611,
                "longitude" => -47.1222
            ],
            [
                "name" => "Ibirité, Minas Gerais",
                "latitude" => -20.0252,
                "longitude" => -44.0569
            ],
            [
                "name" => "Ibitiúra de Minas, Minas Gerais",
                "latitude" => -22.0604,
                "longitude" => -46.4368
            ],
            [
                "name" => "Ibituruna, Minas Gerais",
                "latitude" => -21.1541,
                "longitude" => -44.7479
            ],
            [
                "name" => "Icaraí de Minas, Minas Gerais",
                "latitude" => -16.214,
                "longitude" => -44.9034
            ],
            [
                "name" => "Igarapé, Minas Gerais",
                "latitude" => -20.0707,
                "longitude" => -44.2994
            ],
            [
                "name" => "Igaratinga, Minas Gerais",
                "latitude" => -19.9476,
                "longitude" => -44.7063
            ],
            [
                "name" => "Iguatama, Minas Gerais",
                "latitude" => -20.1776,
                "longitude" => -45.7111
            ],
            [
                "name" => "Ijaci, Minas Gerais",
                "latitude" => -21.1738,
                "longitude" => -44.9233
            ],
            [
                "name" => "Ilicínea, Minas Gerais",
                "latitude" => -20.9402,
                "longitude" => -45.8308
            ],
            [
                "name" => "Imbé de Minas, Minas Gerais",
                "latitude" => -19.6017,
                "longitude" => -41.9695
            ],
            [
                "name" => "Inconfidentes, Minas Gerais",
                "latitude" => -22.3136,
                "longitude" => -46.3264
            ],
            [
                "name" => "Indaiabira, Minas Gerais",
                "latitude" => -15.4911,
                "longitude" => -42.2005
            ],
            [
                "name" => "Indianópolis, Minas Gerais",
                "latitude" => -19.0341,
                "longitude" => -47.9155
            ],
            [
                "name" => "Ingaí, Minas Gerais",
                "latitude" => -21.4024,
                "longitude" => -44.9152
            ],
            [
                "name" => "Inhapim, Minas Gerais",
                "latitude" => -19.5476,
                "longitude" => -42.1147
            ],
            [
                "name" => "Inhaúma, Minas Gerais",
                "latitude" => -19.4898,
                "longitude" => -44.3934
            ],
            [
                "name" => "Inimutaba, Minas Gerais",
                "latitude" => -18.7271,
                "longitude" => -44.3584
            ],
            [
                "name" => "Ipaba, Minas Gerais",
                "latitude" => -19.4158,
                "longitude" => -42.4139
            ],
            [
                "name" => "Ipanema, Minas Gerais",
                "latitude" => -19.7992,
                "longitude" => -41.7164
            ],
            [
                "name" => "Ipatinga, Minas Gerais",
                "latitude" => -19.4703,
                "longitude" => -42.5476
            ],
            [
                "name" => "Ipiaçu, Minas Gerais",
                "latitude" => -18.6927,
                "longitude" => -49.9436
            ],
            [
                "name" => "Ipuiúna, Minas Gerais",
                "latitude" => -22.1013,
                "longitude" => -46.1915
            ],
            [
                "name" => "Iraí de Minas, Minas Gerais",
                "latitude" => -18.9819,
                "longitude" => -47.461
            ],
            [
                "name" => "Itabira, Minas Gerais",
                "latitude" => -19.6239,
                "longitude" => -43.2312
            ],
            [
                "name" => "Itabirinha, Minas Gerais",
                "latitude" => -18.5712,
                "longitude" => -41.234
            ],
            [
                "name" => "Itabirito, Minas Gerais",
                "latitude" => -20.2501,
                "longitude" => -43.8038
            ],
            [
                "name" => "Itacambira, Minas Gerais",
                "latitude" => -17.0625,
                "longitude" => -43.3069
            ],
            [
                "name" => "Itacarambi, Minas Gerais",
                "latitude" => -15.089,
                "longitude" => -44.095
            ],
            [
                "name" => "Itaguara, Minas Gerais",
                "latitude" => -20.3947,
                "longitude" => -44.4875
            ],
            [
                "name" => "Itaipé, Minas Gerais",
                "latitude" => -17.4014,
                "longitude" => -41.6697
            ],
            [
                "name" => "Itajubá, Minas Gerais",
                "latitude" => -22.4225,
                "longitude" => -45.4598
            ],
            [
                "name" => "Itamarandiba, Minas Gerais",
                "latitude" => -17.8552,
                "longitude" => -42.8561
            ],
            [
                "name" => "Itamarati de Minas, Minas Gerais",
                "latitude" => -21.4179,
                "longitude" => -42.813
            ],
            [
                "name" => "Itambacuri, Minas Gerais",
                "latitude" => -18.035,
                "longitude" => -41.683
            ],
            [
                "name" => "Itambé do Mato Dentro, Minas Gerais",
                "latitude" => -19.4158,
                "longitude" => -43.3182
            ],
            [
                "name" => "Itamogi, Minas Gerais",
                "latitude" => -21.0758,
                "longitude" => -47.046
            ],
            [
                "name" => "Itamonte, Minas Gerais",
                "latitude" => -22.2859,
                "longitude" => -44.868
            ],
            [
                "name" => "Itanhandu, Minas Gerais",
                "latitude" => -22.2942,
                "longitude" => -44.9382
            ],
            [
                "name" => "Itanhomi, Minas Gerais",
                "latitude" => -19.1736,
                "longitude" => -41.863
            ],
            [
                "name" => "Itaobim, Minas Gerais",
                "latitude" => -16.5571,
                "longitude" => -41.5017
            ],
            [
                "name" => "Itapagipe, Minas Gerais",
                "latitude" => -19.9062,
                "longitude" => -49.3781
            ],
            [
                "name" => "Itapecerica, Minas Gerais",
                "latitude" => -20.4704,
                "longitude" => -45.127
            ],
            [
                "name" => "Itapeva, Minas Gerais",
                "latitude" => -22.7665,
                "longitude" => -46.2241
            ],
            [
                "name" => "Itatiaiuçu, Minas Gerais",
                "latitude" => -20.1983,
                "longitude" => -44.4211
            ],
            [
                "name" => "Itaú de Minas, Minas Gerais",
                "latitude" => -20.7375,
                "longitude" => -46.7525
            ],
            [
                "name" => "Itaúna, Minas Gerais",
                "latitude" => -20.0818,
                "longitude" => -44.5801
            ],
            [
                "name" => "Itaverava, Minas Gerais",
                "latitude" => -20.6769,
                "longitude" => -43.6141
            ],
            [
                "name" => "Itinga, Minas Gerais",
                "latitude" => -16.61,
                "longitude" => -41.7672
            ],
            [
                "name" => "Itueta, Minas Gerais",
                "latitude" => -19.3999,
                "longitude" => -41.1746
            ],
            [
                "name" => "Ituiutaba, Minas Gerais",
                "latitude" => -18.9772,
                "longitude" => -49.4639
            ],
            [
                "name" => "Itumirim, Minas Gerais",
                "latitude" => -21.3171,
                "longitude" => -44.8724
            ],
            [
                "name" => "Iturama, Minas Gerais",
                "latitude" => -19.7276,
                "longitude" => -50.1966
            ],
            [
                "name" => "Itutinga, Minas Gerais",
                "latitude" => -21.3,
                "longitude" => -44.6567
            ],
            [
                "name" => "Jaboticatubas, Minas Gerais",
                "latitude" => -19.5119,
                "longitude" => -43.7373
            ],
            [
                "name" => "Jacinto, Minas Gerais",
                "latitude" => -16.1428,
                "longitude" => -40.295
            ],
            [
                "name" => "Jacuí, Minas Gerais",
                "latitude" => -21.0137,
                "longitude" => -46.7359
            ],
            [
                "name" => "Jacutinga, Minas Gerais",
                "latitude" => -22.286,
                "longitude" => -46.6166
            ],
            [
                "name" => "Jaguaraçu, Minas Gerais",
                "latitude" => -19.647,
                "longitude" => -42.7498
            ],
            [
                "name" => "Jaíba, Minas Gerais",
                "latitude" => -15.3432,
                "longitude" => -43.6688
            ],
            [
                "name" => "Jampruca, Minas Gerais",
                "latitude" => -18.461,
                "longitude" => -41.809
            ],
            [
                "name" => "Janaúba, Minas Gerais",
                "latitude" => -15.8022,
                "longitude" => -43.3132
            ],
            [
                "name" => "Januária, Minas Gerais",
                "latitude" => -15.4802,
                "longitude" => -44.3639
            ],
            [
                "name" => "Japaraíba, Minas Gerais",
                "latitude" => -20.1442,
                "longitude" => -45.5015
            ],
            [
                "name" => "Japonvar, Minas Gerais",
                "latitude" => -15.9891,
                "longitude" => -44.2758
            ],
            [
                "name" => "Jeceaba, Minas Gerais",
                "latitude" => -20.5339,
                "longitude" => -43.9894
            ],
            [
                "name" => "Jenipapo de Minas, Minas Gerais",
                "latitude" => -17.0831,
                "longitude" => -42.2589
            ],
            [
                "name" => "Jequeri, Minas Gerais",
                "latitude" => -20.4542,
                "longitude" => -42.6651
            ],
            [
                "name" => "Jequitaí, Minas Gerais",
                "latitude" => -17.229,
                "longitude" => -44.4376
            ],
            [
                "name" => "Jequitibá, Minas Gerais",
                "latitude" => -19.2345,
                "longitude" => -44.0304
            ],
            [
                "name" => "Jequitinhonha, Minas Gerais",
                "latitude" => -16.4375,
                "longitude" => -41.0117
            ],
            [
                "name" => "Jesuânia, Minas Gerais",
                "latitude" => -21.9887,
                "longitude" => -45.2911
            ],
            [
                "name" => "Joaíma, Minas Gerais",
                "latitude" => -16.6522,
                "longitude" => -41.0229
            ],
            [
                "name" => "Joanésia, Minas Gerais",
                "latitude" => -19.1729,
                "longitude" => -42.6775
            ],
            [
                "name" => "João Monlevade, Minas Gerais",
                "latitude" => -19.8126,
                "longitude" => -43.1735
            ],
            [
                "name" => "João Pinheiro, Minas Gerais",
                "latitude" => -17.7398,
                "longitude" => -46.1715
            ],
            [
                "name" => "Joaquim Felício, Minas Gerais",
                "latitude" => -17.758,
                "longitude" => -44.1643
            ],
            [
                "name" => "Jordânia, Minas Gerais",
                "latitude" => -15.9009,
                "longitude" => -40.1841
            ],
            [
                "name" => "José Gonçalves de Minas, Minas Gerais",
                "latitude" => -16.9053,
                "longitude" => -42.6014
            ],
            [
                "name" => "José Raydan, Minas Gerais",
                "latitude" => -18.2195,
                "longitude" => -42.4946
            ],
            [
                "name" => "Josenópolis, Minas Gerais",
                "latitude" => -16.5417,
                "longitude" => -42.5151
            ],
            [
                "name" => "Nova União, Minas Gerais",
                "latitude" => -19.6876,
                "longitude" => -43.583
            ],
            [
                "name" => "Juatuba, Minas Gerais",
                "latitude" => -19.9448,
                "longitude" => -44.3451
            ],
            [
                "name" => "Juiz de Fora, Minas Gerais",
                "latitude" => -21.7595,
                "longitude" => -43.3398
            ],
            [
                "name" => "Juramento, Minas Gerais",
                "latitude" => -16.8473,
                "longitude" => -43.5865
            ],
            [
                "name" => "Juruaia, Minas Gerais",
                "latitude" => -21.2493,
                "longitude" => -46.5735
            ],
            [
                "name" => "Juvenília, Minas Gerais",
                "latitude" => -14.2662,
                "longitude" => -44.1597
            ],
            [
                "name" => "Ladainha, Minas Gerais",
                "latitude" => -17.6279,
                "longitude" => -41.7488
            ],
            [
                "name" => "Lagamar, Minas Gerais",
                "latitude" => -18.1759,
                "longitude" => -46.8063
            ],
            [
                "name" => "Lagoa da Prata, Minas Gerais",
                "latitude" => -20.0237,
                "longitude" => -45.5401
            ],
            [
                "name" => "Lagoa dos Patos, Minas Gerais",
                "latitude" => -16.978,
                "longitude" => -44.5754
            ],
            [
                "name" => "Lagoa Dourada, Minas Gerais",
                "latitude" => -20.9139,
                "longitude" => -44.0797
            ],
            [
                "name" => "Lagoa Formosa, Minas Gerais",
                "latitude" => -18.7715,
                "longitude" => -46.4012
            ],
            [
                "name" => "Lagoa Grande, Minas Gerais",
                "latitude" => -17.8323,
                "longitude" => -46.5165
            ],
            [
                "name" => "Lagoa Santa, Minas Gerais",
                "latitude" => -19.6397,
                "longitude" => -43.8932
            ],
            [
                "name" => "Lajinha, Minas Gerais",
                "latitude" => -20.1539,
                "longitude" => -41.6228
            ],
            [
                "name" => "Lambari, Minas Gerais",
                "latitude" => -21.9671,
                "longitude" => -45.3498
            ],
            [
                "name" => "Lamim, Minas Gerais",
                "latitude" => -20.79,
                "longitude" => -43.4706
            ],
            [
                "name" => "Laranjal, Minas Gerais",
                "latitude" => -21.3715,
                "longitude" => -42.4732
            ],
            [
                "name" => "Lassance, Minas Gerais",
                "latitude" => -17.887,
                "longitude" => -44.5735
            ],
            [
                "name" => "Lavras, Minas Gerais",
                "latitude" => -21.248,
                "longitude" => -45.0009
            ],
            [
                "name" => "Leandro Ferreira, Minas Gerais",
                "latitude" => -19.7193,
                "longitude" => -45.0279
            ],
            [
                "name" => "Leme do Prado, Minas Gerais",
                "latitude" => -17.0793,
                "longitude" => -42.6936
            ],
            [
                "name" => "Leopoldina, Minas Gerais",
                "latitude" => -21.5296,
                "longitude" => -42.6421
            ],
            [
                "name" => "Liberdade, Minas Gerais",
                "latitude" => -22.0275,
                "longitude" => -44.3208
            ],
            [
                "name" => "Lima Duarte, Minas Gerais",
                "latitude" => -21.8386,
                "longitude" => -43.7934
            ],
            [
                "name" => "Limeira do Oeste, Minas Gerais",
                "latitude" => -19.5512,
                "longitude" => -50.5815
            ],
            [
                "name" => "Lontra, Minas Gerais",
                "latitude" => -15.9013,
                "longitude" => -44.306
            ],
            [
                "name" => "Luisburgo, Minas Gerais",
                "latitude" => -20.4468,
                "longitude" => -42.0976
            ],
            [
                "name" => "Luislândia, Minas Gerais",
                "latitude" => -16.1095,
                "longitude" => -44.5886
            ],
            [
                "name" => "Luminárias, Minas Gerais",
                "latitude" => -21.5145,
                "longitude" => -44.9034
            ],
            [
                "name" => "Luz, Minas Gerais",
                "latitude" => -19.7911,
                "longitude" => -45.6794
            ],
            [
                "name" => "Machacalis, Minas Gerais",
                "latitude" => -17.0723,
                "longitude" => -40.7245
            ],
            [
                "name" => "Machado, Minas Gerais",
                "latitude" => -21.6778,
                "longitude" => -45.9219
            ],
            [
                "name" => "Madre de Deus de Minas, Minas Gerais",
                "latitude" => -21.483,
                "longitude" => -44.3287
            ],
            [
                "name" => "Malacacheta, Minas Gerais",
                "latitude" => -17.8456,
                "longitude" => -42.0769
            ],
            [
                "name" => "Mamonas, Minas Gerais",
                "latitude" => -15.0479,
                "longitude" => -42.9469
            ],
            [
                "name" => "Manga, Minas Gerais",
                "latitude" => -14.7529,
                "longitude" => -43.9391
            ],
            [
                "name" => "Manhuaçu, Minas Gerais",
                "latitude" => -20.2572,
                "longitude" => -42.028
            ],
            [
                "name" => "Manhumirim, Minas Gerais",
                "latitude" => -20.3591,
                "longitude" => -41.9589
            ],
            [
                "name" => "Mantena, Minas Gerais",
                "latitude" => -18.7761,
                "longitude" => -40.9874
            ],
            [
                "name" => "Maravilhas, Minas Gerais",
                "latitude" => -19.5076,
                "longitude" => -44.6779
            ],
            [
                "name" => "Mar de Espanha, Minas Gerais",
                "latitude" => -21.8707,
                "longitude" => -43.0062
            ],
            [
                "name" => "Maria da Fé, Minas Gerais",
                "latitude" => -22.3044,
                "longitude" => -45.3773
            ],
            [
                "name" => "Mariana, Minas Gerais",
                "latitude" => -20.3765,
                "longitude" => -43.414
            ],
            [
                "name" => "Marilac, Minas Gerais",
                "latitude" => -18.5079,
                "longitude" => -42.0822
            ],
            [
                "name" => "Mário Campos, Minas Gerais",
                "latitude" => -20.0582,
                "longitude" => -44.1883
            ],
            [
                "name" => "Maripá de Minas, Minas Gerais",
                "latitude" => -21.6979,
                "longitude" => -42.9546
            ],
            [
                "name" => "Marliéria, Minas Gerais",
                "latitude" => -19.7096,
                "longitude" => -42.7327
            ],
            [
                "name" => "Marmelópolis, Minas Gerais",
                "latitude" => -22.447,
                "longitude" => -45.1645
            ],
            [
                "name" => "Martinho Campos, Minas Gerais",
                "latitude" => -19.3306,
                "longitude" => -45.2434
            ],
            [
                "name" => "Martins Soares, Minas Gerais",
                "latitude" => -20.2546,
                "longitude" => -41.8786
            ],
            [
                "name" => "Mata Verde, Minas Gerais",
                "latitude" => -15.6869,
                "longitude" => -40.7366
            ],
            [
                "name" => "Materlândia, Minas Gerais",
                "latitude" => -18.4699,
                "longitude" => -43.0579
            ],
            [
                "name" => "Mateus Leme, Minas Gerais",
                "latitude" => -19.9794,
                "longitude" => -44.4318
            ],
            [
                "name" => "Matias Barbosa, Minas Gerais",
                "latitude" => -21.869,
                "longitude" => -43.3135
            ],
            [
                "name" => "Matias Cardoso, Minas Gerais",
                "latitude" => -14.8563,
                "longitude" => -43.9146
            ],
            [
                "name" => "Matipó, Minas Gerais",
                "latitude" => -20.2873,
                "longitude" => -42.3401
            ],
            [
                "name" => "Mato Verde, Minas Gerais",
                "latitude" => -15.3944,
                "longitude" => -42.86
            ],
            [
                "name" => "Matozinhos, Minas Gerais",
                "latitude" => -19.5543,
                "longitude" => -44.0868
            ],
            [
                "name" => "Matutina, Minas Gerais",
                "latitude" => -19.2179,
                "longitude" => -45.9664
            ],
            [
                "name" => "Medeiros, Minas Gerais",
                "latitude" => -19.9865,
                "longitude" => -46.2181
            ],
            [
                "name" => "Medina, Minas Gerais",
                "latitude" => -16.2245,
                "longitude" => -41.4728
            ],
            [
                "name" => "Mendes Pimentel, Minas Gerais",
                "latitude" => -18.6631,
                "longitude" => -41.4052
            ],
            [
                "name" => "Mercês, Minas Gerais",
                "latitude" => -21.1976,
                "longitude" => -43.3337
            ],
            [
                "name" => "Mesquita, Minas Gerais",
                "latitude" => -19.224,
                "longitude" => -42.6079
            ],
            [
                "name" => "Minas Novas, Minas Gerais",
                "latitude" => -17.2156,
                "longitude" => -42.5884
            ],
            [
                "name" => "Minduri, Minas Gerais",
                "latitude" => -21.6797,
                "longitude" => -44.6051
            ],
            [
                "name" => "Mirabela, Minas Gerais",
                "latitude" => -16.256,
                "longitude" => -44.1602
            ],
            [
                "name" => "Miradouro, Minas Gerais",
                "latitude" => -20.8899,
                "longitude" => -42.3458
            ],
            [
                "name" => "Miraí, Minas Gerais",
                "latitude" => -21.2021,
                "longitude" => -42.6122
            ],
            [
                "name" => "Miravânia, Minas Gerais",
                "latitude" => -14.7348,
                "longitude" => -44.4092
            ],
            [
                "name" => "Moeda, Minas Gerais",
                "latitude" => -20.3399,
                "longitude" => -44.0509
            ],
            [
                "name" => "Moema, Minas Gerais",
                "latitude" => -19.8387,
                "longitude" => -45.4127
            ],
            [
                "name" => "Monjolos, Minas Gerais",
                "latitude" => -18.3245,
                "longitude" => -44.118
            ],
            [
                "name" => "Monsenhor Paulo, Minas Gerais",
                "latitude" => -21.7579,
                "longitude" => -45.5391
            ],
            [
                "name" => "Montalvânia, Minas Gerais",
                "latitude" => -14.4197,
                "longitude" => -44.3719
            ],
            [
                "name" => "Monte Alegre de Minas, Minas Gerais",
                "latitude" => -18.869,
                "longitude" => -48.881
            ],
            [
                "name" => "Monte Azul, Minas Gerais",
                "latitude" => -15.1514,
                "longitude" => -42.8718
            ],
            [
                "name" => "Monte Belo, Minas Gerais",
                "latitude" => -21.3271,
                "longitude" => -46.3635
            ],
            [
                "name" => "Monte Carmelo, Minas Gerais",
                "latitude" => -18.7302,
                "longitude" => -47.4912
            ],
            [
                "name" => "Monte Formoso, Minas Gerais",
                "latitude" => -16.8691,
                "longitude" => -41.2473
            ],
            [
                "name" => "Monte Santo de Minas, Minas Gerais",
                "latitude" => -21.1873,
                "longitude" => -46.9753
            ],
            [
                "name" => "Montes Claros, Minas Gerais",
                "latitude" => -16.7282,
                "longitude" => -43.8578
            ],
            [
                "name" => "Monte Sião, Minas Gerais",
                "latitude" => -22.4335,
                "longitude" => -46.573
            ],
            [
                "name" => "Montezuma, Minas Gerais",
                "latitude" => -15.1702,
                "longitude" => -42.4941
            ],
            [
                "name" => "Morada Nova de Minas, Minas Gerais",
                "latitude" => -18.5998,
                "longitude" => -45.3584
            ],
            [
                "name" => "Morro da Garça, Minas Gerais",
                "latitude" => -18.5356,
                "longitude" => -44.601
            ],
            [
                "name" => "Morro do Pilar, Minas Gerais",
                "latitude" => -19.2236,
                "longitude" => -43.3795
            ],
            [
                "name" => "Munhoz, Minas Gerais",
                "latitude" => -22.6092,
                "longitude" => -46.362
            ],
            [
                "name" => "Muriaé, Minas Gerais",
                "latitude" => -21.13,
                "longitude" => -42.3693
            ],
            [
                "name" => "Mutum, Minas Gerais",
                "latitude" => -19.8121,
                "longitude" => -41.4407
            ],
            [
                "name" => "Muzambinho, Minas Gerais",
                "latitude" => -21.3692,
                "longitude" => -46.5213
            ],
            [
                "name" => "Nacip Raydan, Minas Gerais",
                "latitude" => -18.4544,
                "longitude" => -42.2481
            ],
            [
                "name" => "Nanuque, Minas Gerais",
                "latitude" => -17.8481,
                "longitude" => -40.3533
            ],
            [
                "name" => "Naque, Minas Gerais",
                "latitude" => -19.2291,
                "longitude" => -42.3312
            ],
            [
                "name" => "Natalândia, Minas Gerais",
                "latitude" => -16.5021,
                "longitude" => -46.4874
            ],
            [
                "name" => "Natércia, Minas Gerais",
                "latitude" => -22.1158,
                "longitude" => -45.5123
            ],
            [
                "name" => "Nazareno, Minas Gerais",
                "latitude" => -21.2168,
                "longitude" => -44.6138
            ],
            [
                "name" => "Nepomuceno, Minas Gerais",
                "latitude" => -21.2324,
                "longitude" => -45.235
            ],
            [
                "name" => "Ninheira, Minas Gerais",
                "latitude" => -15.3148,
                "longitude" => -41.7564
            ],
            [
                "name" => "Nova Belém, Minas Gerais",
                "latitude" => -18.4925,
                "longitude" => -41.1107
            ],
            [
                "name" => "Nova Era, Minas Gerais",
                "latitude" => -19.7577,
                "longitude" => -43.0333
            ],
            [
                "name" => "Nova Lima, Minas Gerais",
                "latitude" => -19.9758,
                "longitude" => -43.8509
            ],
            [
                "name" => "Nova Módica, Minas Gerais",
                "latitude" => -18.4417,
                "longitude" => -41.4984
            ],
            [
                "name" => "Nova Ponte, Minas Gerais",
                "latitude" => -19.1461,
                "longitude" => -47.6779
            ],
            [
                "name" => "Nova Porteirinha, Minas Gerais",
                "latitude" => -15.7993,
                "longitude" => -43.2941
            ],
            [
                "name" => "Nova Resende, Minas Gerais",
                "latitude" => -21.1286,
                "longitude" => -46.4157
            ],
            [
                "name" => "Nova Serrana, Minas Gerais",
                "latitude" => -19.8713,
                "longitude" => -44.9847
            ],
            [
                "name" => "Novo Cruzeiro, Minas Gerais",
                "latitude" => -17.4654,
                "longitude" => -41.8826
            ],
            [
                "name" => "Novo Oriente de Minas, Minas Gerais",
                "latitude" => -17.4089,
                "longitude" => -41.2194
            ],
            [
                "name" => "Novorizonte, Minas Gerais",
                "latitude" => -16.0162,
                "longitude" => -42.4044
            ],
            [
                "name" => "Olaria, Minas Gerais",
                "latitude" => -21.8598,
                "longitude" => -43.9356
            ],
            [
                "name" => "Olhos d'Água, Minas Gerais",
                "latitude" => -17.3982,
                "longitude" => -43.5719
            ],
            [
                "name" => "Olímpio Noronha, Minas Gerais",
                "latitude" => -22.0685,
                "longitude" => -45.2657
            ],
            [
                "name" => "Oliveira, Minas Gerais",
                "latitude" => -20.6982,
                "longitude" => -44.829
            ],
            [
                "name" => "Oliveira Fortes, Minas Gerais",
                "latitude" => -21.3401,
                "longitude" => -43.4499
            ],
            [
                "name" => "Onça de Pitangui, Minas Gerais",
                "latitude" => -19.7276,
                "longitude" => -44.8058
            ],
            [
                "name" => "Oratórios, Minas Gerais",
                "latitude" => -20.4298,
                "longitude" => -42.7977
            ],
            [
                "name" => "Orizânia, Minas Gerais",
                "latitude" => -20.5142,
                "longitude" => -42.1991
            ],
            [
                "name" => "Ouro Branco, Minas Gerais",
                "latitude" => -20.5263,
                "longitude" => -43.6962
            ],
            [
                "name" => "Ouro Fino, Minas Gerais",
                "latitude" => -22.2779,
                "longitude" => -46.3716
            ],
            [
                "name" => "Ouro Preto, Minas Gerais",
                "latitude" => -20.3796,
                "longitude" => -43.512
            ],
            [
                "name" => "Ouro Verde de Minas, Minas Gerais",
                "latitude" => -18.0719,
                "longitude" => -41.2734
            ],
            [
                "name" => "Padre Carvalho, Minas Gerais",
                "latitude" => -16.3646,
                "longitude" => -42.5088
            ],
            [
                "name" => "Padre Paraíso, Minas Gerais",
                "latitude" => -17.0758,
                "longitude" => -41.4821
            ],
            [
                "name" => "Paineiras, Minas Gerais",
                "latitude" => -18.8993,
                "longitude" => -45.5321
            ],
            [
                "name" => "Pains, Minas Gerais",
                "latitude" => -20.3705,
                "longitude" => -45.6627
            ],
            [
                "name" => "Pai Pedro, Minas Gerais",
                "latitude" => -15.5271,
                "longitude" => -43.07
            ],
            [
                "name" => "Paiva, Minas Gerais",
                "latitude" => -21.2913,
                "longitude" => -43.4088
            ],
            [
                "name" => "Palma, Minas Gerais",
                "latitude" => -21.3748,
                "longitude" => -42.3123
            ],
            [
                "name" => "Palmópolis, Minas Gerais",
                "latitude" => -16.7364,
                "longitude" => -40.4296
            ],
            [
                "name" => "Papagaios, Minas Gerais",
                "latitude" => -19.4419,
                "longitude" => -44.7468
            ],
            [
                "name" => "Paracatu, Minas Gerais",
                "latitude" => -17.2252,
                "longitude" => -46.8711
            ],
            [
                "name" => "Pará de Minas, Minas Gerais",
                "latitude" => -19.8534,
                "longitude" => -44.6114
            ],
            [
                "name" => "Paraguaçu, Minas Gerais",
                "latitude" => -21.5465,
                "longitude" => -45.7374
            ],
            [
                "name" => "Paraisópolis, Minas Gerais",
                "latitude" => -22.5539,
                "longitude" => -45.7803
            ],
            [
                "name" => "Paraopeba, Minas Gerais",
                "latitude" => -19.2732,
                "longitude" => -44.4044
            ],
            [
                "name" => "Passabém, Minas Gerais",
                "latitude" => -19.3509,
                "longitude" => -43.1383
            ],
            [
                "name" => "Passa Quatro, Minas Gerais",
                "latitude" => -22.3871,
                "longitude" => -44.9709
            ],
            [
                "name" => "Passa Tempo, Minas Gerais",
                "latitude" => -20.6539,
                "longitude" => -44.4926
            ],
            [
                "name" => "Passa-Vinte, Minas Gerais",
                "latitude" => -22.2097,
                "longitude" => -44.2344
            ],
            [
                "name" => "Passos, Minas Gerais",
                "latitude" => -20.7193,
                "longitude" => -46.609
            ],
            [
                "name" => "Patis, Minas Gerais",
                "latitude" => -16.0773,
                "longitude" => -44.0787
            ],
            [
                "name" => "Patos de Minas, Minas Gerais",
                "latitude" => -18.5699,
                "longitude" => -46.5013
            ],
            [
                "name" => "Patrocínio, Minas Gerais",
                "latitude" => -18.9379,
                "longitude" => -46.9934
            ],
            [
                "name" => "Patrocínio do Muriaé, Minas Gerais",
                "latitude" => -21.1544,
                "longitude" => -42.2125
            ],
            [
                "name" => "Paula Cândido, Minas Gerais",
                "latitude" => -20.8754,
                "longitude" => -42.9752
            ],
            [
                "name" => "Paulistas, Minas Gerais",
                "latitude" => -18.4276,
                "longitude" => -42.8628
            ],
            [
                "name" => "Pavão, Minas Gerais",
                "latitude" => -17.4267,
                "longitude" => -41.0035
            ],
            [
                "name" => "Peçanha, Minas Gerais",
                "latitude" => -18.5441,
                "longitude" => -42.5583
            ],
            [
                "name" => "Pedra Azul, Minas Gerais",
                "latitude" => -16.0086,
                "longitude" => -41.2909
            ],
            [
                "name" => "Pedra Bonita, Minas Gerais",
                "latitude" => -20.5219,
                "longitude" => -42.3304
            ],
            [
                "name" => "Pedra do Anta, Minas Gerais",
                "latitude" => -20.5968,
                "longitude" => -42.7123
            ],
            [
                "name" => "Pedra do Indaiá, Minas Gerais",
                "latitude" => -20.2563,
                "longitude" => -45.2107
            ],
            [
                "name" => "Pedra Dourada, Minas Gerais",
                "latitude" => -20.8266,
                "longitude" => -42.1515
            ],
            [
                "name" => "Pedralva, Minas Gerais",
                "latitude" => -22.2386,
                "longitude" => -45.4654
            ],
            [
                "name" => "Pedras de Maria da Cruz, Minas Gerais",
                "latitude" => -15.6032,
                "longitude" => -44.391
            ],
            [
                "name" => "Pedrinópolis, Minas Gerais",
                "latitude" => -19.2241,
                "longitude" => -47.4579
            ],
            [
                "name" => "Pedro Leopoldo, Minas Gerais",
                "latitude" => -19.6308,
                "longitude" => -44.0383
            ],
            [
                "name" => "Pedro Teixeira, Minas Gerais",
                "latitude" => -21.7076,
                "longitude" => -43.743
            ],
            [
                "name" => "Pequeri, Minas Gerais",
                "latitude" => -21.8341,
                "longitude" => -43.1145
            ],
            [
                "name" => "Pequi, Minas Gerais",
                "latitude" => -19.6284,
                "longitude" => -44.6604
            ],
            [
                "name" => "Perdigão, Minas Gerais",
                "latitude" => -19.9411,
                "longitude" => -45.078
            ],
            [
                "name" => "Perdizes, Minas Gerais",
                "latitude" => -19.3434,
                "longitude" => -47.2963
            ],
            [
                "name" => "Perdões, Minas Gerais",
                "latitude" => -21.0932,
                "longitude" => -45.0896
            ],
            [
                "name" => "Periquito, Minas Gerais",
                "latitude" => -19.1573,
                "longitude" => -42.2333
            ],
            [
                "name" => "Pescador, Minas Gerais",
                "latitude" => -18.357,
                "longitude" => -41.6006
            ],
            [
                "name" => "Piau, Minas Gerais",
                "latitude" => -21.5096,
                "longitude" => -43.313
            ],
            [
                "name" => "Piedade de Caratinga, Minas Gerais",
                "latitude" => -19.7593,
                "longitude" => -42.0756
            ],
            [
                "name" => "Piedade de Ponte Nova, Minas Gerais",
                "latitude" => -20.2438,
                "longitude" => -42.7379
            ],
            [
                "name" => "Piedade do Rio Grande, Minas Gerais",
                "latitude" => -21.469,
                "longitude" => -44.1938
            ],
            [
                "name" => "Piedade dos Gerais, Minas Gerais",
                "latitude" => -20.4715,
                "longitude" => -44.2243
            ],
            [
                "name" => "Pimenta, Minas Gerais",
                "latitude" => -20.4827,
                "longitude" => -45.8049
            ],
            [
                "name" => "Pingo-d'Água, Minas Gerais",
                "latitude" => -19.7287,
                "longitude" => -42.4095
            ],
            [
                "name" => "Pintópolis, Minas Gerais",
                "latitude" => -16.0572,
                "longitude" => -45.1402
            ],
            [
                "name" => "Piracema, Minas Gerais",
                "latitude" => -20.5089,
                "longitude" => -44.4783
            ],
            [
                "name" => "Pirajuba, Minas Gerais",
                "latitude" => -19.9092,
                "longitude" => -48.7027
            ],
            [
                "name" => "Piranga, Minas Gerais",
                "latitude" => -20.6834,
                "longitude" => -43.2967
            ],
            [
                "name" => "Piranguçu, Minas Gerais",
                "latitude" => -22.5249,
                "longitude" => -45.4945
            ],
            [
                "name" => "Piranguinho, Minas Gerais",
                "latitude" => -22.395,
                "longitude" => -45.5324
            ],
            [
                "name" => "Pirapetinga, Minas Gerais",
                "latitude" => -21.6554,
                "longitude" => -42.3434
            ],
            [
                "name" => "Pirapora, Minas Gerais",
                "latitude" => -17.3392,
                "longitude" => -44.934
            ],
            [
                "name" => "Piraúba, Minas Gerais",
                "latitude" => -21.2825,
                "longitude" => -43.0172
            ],
            [
                "name" => "Pitangui, Minas Gerais",
                "latitude" => -19.6741,
                "longitude" => -44.8964
            ],
            [
                "name" => "Piumhi, Minas Gerais",
                "latitude" => -20.4762,
                "longitude" => -45.9589
            ],
            [
                "name" => "Planura, Minas Gerais",
                "latitude" => -20.1376,
                "longitude" => -48.7
            ],
            [
                "name" => "Poço Fundo, Minas Gerais",
                "latitude" => -21.78,
                "longitude" => -45.9658
            ],
            [
                "name" => "Poços de Caldas, Minas Gerais",
                "latitude" => -21.78,
                "longitude" => -46.5692
            ],
            [
                "name" => "Pocrane, Minas Gerais",
                "latitude" => -19.6208,
                "longitude" => -41.6334
            ],
            [
                "name" => "Pompéu, Minas Gerais",
                "latitude" => -19.2257,
                "longitude" => -45.0141
            ],
            [
                "name" => "Ponte Nova, Minas Gerais",
                "latitude" => -20.4111,
                "longitude" => -42.8978
            ],
            [
                "name" => "Ponto Chique, Minas Gerais",
                "latitude" => -16.6282,
                "longitude" => -45.0588
            ],
            [
                "name" => "Ponto dos Volantes, Minas Gerais",
                "latitude" => -16.7473,
                "longitude" => -41.5025
            ],
            [
                "name" => "Porteirinha, Minas Gerais",
                "latitude" => -15.7404,
                "longitude" => -43.0281
            ],
            [
                "name" => "Porto Firme, Minas Gerais",
                "latitude" => -20.6642,
                "longitude" => -43.0834
            ],
            [
                "name" => "Poté, Minas Gerais",
                "latitude" => -17.8077,
                "longitude" => -41.786
            ],
            [
                "name" => "Pouso Alegre, Minas Gerais",
                "latitude" => -22.2266,
                "longitude" => -45.9389
            ],
            [
                "name" => "Pouso Alto, Minas Gerais",
                "latitude" => -22.1964,
                "longitude" => -44.9748
            ],
            [
                "name" => "Prados, Minas Gerais",
                "latitude" => -21.0597,
                "longitude" => -44.0778
            ],
            [
                "name" => "Prata, Minas Gerais",
                "latitude" => -19.3086,
                "longitude" => -48.9276
            ],
            [
                "name" => "Pratápolis, Minas Gerais",
                "latitude" => -20.7411,
                "longitude" => -46.8624
            ],
            [
                "name" => "Pratinha, Minas Gerais",
                "latitude" => -19.739,
                "longitude" => -46.3755
            ],
            [
                "name" => "Presidente Bernardes, Minas Gerais",
                "latitude" => -20.7656,
                "longitude" => -43.1895
            ],
            [
                "name" => "Presidente Juscelino, Minas Gerais",
                "latitude" => -18.6401,
                "longitude" => -44.06
            ],
            [
                "name" => "Presidente Kubitschek, Minas Gerais",
                "latitude" => -18.6193,
                "longitude" => -43.5628
            ],
            [
                "name" => "Presidente Olegário, Minas Gerais",
                "latitude" => -18.4096,
                "longitude" => -46.4165
            ],
            [
                "name" => "Alto Jequitibá, Minas Gerais",
                "latitude" => -20.4208,
                "longitude" => -41.967
            ],
            [
                "name" => "Prudente de Morais, Minas Gerais",
                "latitude" => -19.4742,
                "longitude" => -44.1591
            ],
            [
                "name" => "Quartel Geral, Minas Gerais",
                "latitude" => -19.2703,
                "longitude" => -45.5569
            ],
            [
                "name" => "Queluzito, Minas Gerais",
                "latitude" => -20.7416,
                "longitude" => -43.8851
            ],
            [
                "name" => "Raposos, Minas Gerais",
                "latitude" => -19.9636,
                "longitude" => -43.8079
            ],
            [
                "name" => "Raul Soares, Minas Gerais",
                "latitude" => -20.1061,
                "longitude" => -42.4502
            ],
            [
                "name" => "Recreio, Minas Gerais",
                "latitude" => -21.5289,
                "longitude" => -42.4676
            ],
            [
                "name" => "Reduto, Minas Gerais",
                "latitude" => -20.2401,
                "longitude" => -41.9848
            ],
            [
                "name" => "Resende Costa, Minas Gerais",
                "latitude" => -20.9171,
                "longitude" => -44.2407
            ],
            [
                "name" => "Resplendor, Minas Gerais",
                "latitude" => -19.3194,
                "longitude" => -41.2462
            ],
            [
                "name" => "Ressaquinha, Minas Gerais",
                "latitude" => -21.0642,
                "longitude" => -43.7598
            ],
            [
                "name" => "Riachinho, Minas Gerais",
                "latitude" => -16.2258,
                "longitude" => -45.9888
            ],
            [
                "name" => "Riacho dos Machados, Minas Gerais",
                "latitude" => -16.0091,
                "longitude" => -43.0488
            ],
            [
                "name" => "Ribeirão das Neves, Minas Gerais",
                "latitude" => -19.7621,
                "longitude" => -44.0844
            ],
            [
                "name" => "Ribeirão Vermelho, Minas Gerais",
                "latitude" => -21.1879,
                "longitude" => -45.0637
            ],
            [
                "name" => "Rio Acima, Minas Gerais",
                "latitude" => -20.0876,
                "longitude" => -43.7878
            ],
            [
                "name" => "Rio Casca, Minas Gerais",
                "latitude" => -20.2285,
                "longitude" => -42.6462
            ],
            [
                "name" => "Rio Doce, Minas Gerais",
                "latitude" => -20.2412,
                "longitude" => -42.8995
            ],
            [
                "name" => "Rio do Prado, Minas Gerais",
                "latitude" => -16.6056,
                "longitude" => -40.5714
            ],
            [
                "name" => "Rio Espera, Minas Gerais",
                "latitude" => -20.855,
                "longitude" => -43.4721
            ],
            [
                "name" => "Rio Manso, Minas Gerais",
                "latitude" => -20.2666,
                "longitude" => -44.3069
            ],
            [
                "name" => "Rio Novo, Minas Gerais",
                "latitude" => -21.4649,
                "longitude" => -43.1168
            ],
            [
                "name" => "Rio Paranaíba, Minas Gerais",
                "latitude" => -19.1861,
                "longitude" => -46.2455
            ],
            [
                "name" => "Rio Pardo de Minas, Minas Gerais",
                "latitude" => -15.616,
                "longitude" => -42.5405
            ],
            [
                "name" => "Rio Piracicaba, Minas Gerais",
                "latitude" => -19.9284,
                "longitude" => -43.1829
            ],
            [
                "name" => "Rio Pomba, Minas Gerais",
                "latitude" => -21.2712,
                "longitude" => -43.1696
            ],
            [
                "name" => "Rio Preto, Minas Gerais",
                "latitude" => -22.0861,
                "longitude" => -43.8293
            ],
            [
                "name" => "Rio Vermelho, Minas Gerais",
                "latitude" => -18.2922,
                "longitude" => -43.0018
            ],
            [
                "name" => "Ritápolis, Minas Gerais",
                "latitude" => -21.0276,
                "longitude" => -44.3204
            ],
            [
                "name" => "Rochedo de Minas, Minas Gerais",
                "latitude" => -21.6284,
                "longitude" => -43.0165
            ],
            [
                "name" => "Rodeiro, Minas Gerais",
                "latitude" => -21.2035,
                "longitude" => -42.8586
            ],
            [
                "name" => "Romaria, Minas Gerais",
                "latitude" => -18.8838,
                "longitude" => -47.5782
            ],
            [
                "name" => "Rosário da Limeira, Minas Gerais",
                "latitude" => -20.9812,
                "longitude" => -42.5112
            ],
            [
                "name" => "Rubelita, Minas Gerais",
                "latitude" => -16.4053,
                "longitude" => -42.261
            ],
            [
                "name" => "Rubim, Minas Gerais",
                "latitude" => -16.3775,
                "longitude" => -40.5397
            ],
            [
                "name" => "Sabará, Minas Gerais",
                "latitude" => -19.884,
                "longitude" => -43.8263
            ],
            [
                "name" => "Sabinópolis, Minas Gerais",
                "latitude" => -18.6653,
                "longitude" => -43.0752
            ],
            [
                "name" => "Sacramento, Minas Gerais",
                "latitude" => -19.8622,
                "longitude" => -47.4508
            ],
            [
                "name" => "Salinas, Minas Gerais",
                "latitude" => -16.1753,
                "longitude" => -42.2964
            ],
            [
                "name" => "Salto da Divisa, Minas Gerais",
                "latitude" => -16.0063,
                "longitude" => -39.9391
            ],
            [
                "name" => "Santa Bárbara, Minas Gerais",
                "latitude" => -19.9604,
                "longitude" => -43.4101
            ],
            [
                "name" => "Santa Bárbara do Leste, Minas Gerais",
                "latitude" => -19.9753,
                "longitude" => -42.1457
            ],
            [
                "name" => "Santa Bárbara do Monte Verde, Minas Gerais",
                "latitude" => -21.9592,
                "longitude" => -43.7027
            ],
            [
                "name" => "Santa Bárbara do Tugúrio, Minas Gerais",
                "latitude" => -21.2431,
                "longitude" => -43.5607
            ],
            [
                "name" => "Santa Cruz de Minas, Minas Gerais",
                "latitude" => -21.1241,
                "longitude" => -44.2202
            ],
            [
                "name" => "Santa Cruz de Salinas, Minas Gerais",
                "latitude" => -16.0967,
                "longitude" => -41.7418
            ],
            [
                "name" => "Santa Cruz do Escalvado, Minas Gerais",
                "latitude" => -20.2372,
                "longitude" => -42.8169
            ],
            [
                "name" => "Santa Efigênia de Minas, Minas Gerais",
                "latitude" => -18.8235,
                "longitude" => -42.4388
            ],
            [
                "name" => "Santa Fé de Minas, Minas Gerais",
                "latitude" => -16.6859,
                "longitude" => -45.4102
            ],
            [
                "name" => "Santa Helena de Minas, Minas Gerais",
                "latitude" => -16.9707,
                "longitude" => -40.6727
            ],
            [
                "name" => "Santa Juliana, Minas Gerais",
                "latitude" => -19.3108,
                "longitude" => -47.5322
            ],
            [
                "name" => "Santa Luzia, Minas Gerais",
                "latitude" => -19.7548,
                "longitude" => -43.8497
            ],
            [
                "name" => "Santa Margarida, Minas Gerais",
                "latitude" => -20.3839,
                "longitude" => -42.2519
            ],
            [
                "name" => "Santa Maria de Itabira, Minas Gerais",
                "latitude" => -19.4431,
                "longitude" => -43.1064
            ],
            [
                "name" => "Santa Maria do Salto, Minas Gerais",
                "latitude" => -16.2479,
                "longitude" => -40.1512
            ],
            [
                "name" => "Santa Maria do Suaçuí, Minas Gerais",
                "latitude" => -18.1896,
                "longitude" => -42.4139
            ],
            [
                "name" => "Santana da Vargem, Minas Gerais",
                "latitude" => -21.2449,
                "longitude" => -45.5005
            ],
            [
                "name" => "Santana de Cataguases, Minas Gerais",
                "latitude" => -21.2893,
                "longitude" => -42.5524
            ],
            [
                "name" => "Santana de Pirapama, Minas Gerais",
                "latitude" => -18.9962,
                "longitude" => -44.0409
            ],
            [
                "name" => "Santana do Deserto, Minas Gerais",
                "latitude" => -21.9512,
                "longitude" => -43.1583
            ],
            [
                "name" => "Santana do Garambéu, Minas Gerais",
                "latitude" => -21.5983,
                "longitude" => -44.105
            ],
            [
                "name" => "Santana do Jacaré, Minas Gerais",
                "latitude" => -20.9007,
                "longitude" => -45.1285
            ],
            [
                "name" => "Santana do Manhuaçu, Minas Gerais",
                "latitude" => -20.1031,
                "longitude" => -41.9278
            ],
            [
                "name" => "Santana do Paraíso, Minas Gerais",
                "latitude" => -19.3661,
                "longitude" => -42.5446
            ],
            [
                "name" => "Santana do Riacho, Minas Gerais",
                "latitude" => -19.1662,
                "longitude" => -43.722
            ],
            [
                "name" => "Santana dos Montes, Minas Gerais",
                "latitude" => -20.7868,
                "longitude" => -43.6949
            ],
            [
                "name" => "Santa Rita de Caldas, Minas Gerais",
                "latitude" => -22.0292,
                "longitude" => -46.3385
            ],
            [
                "name" => "Santa Rita de Jacutinga, Minas Gerais",
                "latitude" => -22.1474,
                "longitude" => -44.0977
            ],
            [
                "name" => "Santa Rita de Minas, Minas Gerais",
                "latitude" => -19.876,
                "longitude" => -42.1363
            ],
            [
                "name" => "Santa Rita de Ibitipoca, Minas Gerais",
                "latitude" => -21.5658,
                "longitude" => -43.9163
            ],
            [
                "name" => "Santa Rita do Itueto, Minas Gerais",
                "latitude" => -19.3576,
                "longitude" => -41.3821
            ],
            [
                "name" => "Santa Rita do Sapucaí, Minas Gerais",
                "latitude" => -22.2461,
                "longitude" => -45.7034
            ],
            [
                "name" => "Santa Rosa da Serra, Minas Gerais",
                "latitude" => -19.5186,
                "longitude" => -45.9611
            ],
            [
                "name" => "Santa Vitória, Minas Gerais",
                "latitude" => -18.8414,
                "longitude" => -50.1208
            ],
            [
                "name" => "Santo Antônio do Amparo, Minas Gerais",
                "latitude" => -20.943,
                "longitude" => -44.9176
            ],
            [
                "name" => "Santo Antônio do Aventureiro, Minas Gerais",
                "latitude" => -21.7606,
                "longitude" => -42.8115
            ],
            [
                "name" => "Santo Antônio do Grama, Minas Gerais",
                "latitude" => -20.3185,
                "longitude" => -42.6047
            ],
            [
                "name" => "Santo Antônio do Itambé, Minas Gerais",
                "latitude" => -18.4609,
                "longitude" => -43.3006
            ],
            [
                "name" => "Santo Antônio do Jacinto, Minas Gerais",
                "latitude" => -16.5332,
                "longitude" => -40.1817
            ],
            [
                "name" => "Santo Antônio do Monte, Minas Gerais",
                "latitude" => -20.085,
                "longitude" => -45.2947
            ],
            [
                "name" => "Santo Antônio do Retiro, Minas Gerais",
                "latitude" => -15.3393,
                "longitude" => -42.6171
            ],
            [
                "name" => "Santo Antônio do Rio Abaixo, Minas Gerais",
                "latitude" => -19.2374,
                "longitude" => -43.2604
            ],
            [
                "name" => "Santo Hipólito, Minas Gerais",
                "latitude" => -18.2968,
                "longitude" => -44.2229
            ],
            [
                "name" => "Santos Dumont, Minas Gerais",
                "latitude" => -21.4634,
                "longitude" => -43.5499
            ],
            [
                "name" => "São Bento Abade, Minas Gerais",
                "latitude" => -21.5839,
                "longitude" => -45.0699
            ],
            [
                "name" => "São Brás do Suaçuí, Minas Gerais",
                "latitude" => -20.6242,
                "longitude" => -43.9515
            ],
            [
                "name" => "São Domingos das Dores, Minas Gerais",
                "latitude" => -19.5246,
                "longitude" => -42.0106
            ],
            [
                "name" => "São Domingos do Prata, Minas Gerais",
                "latitude" => -19.8678,
                "longitude" => -42.971
            ],
            [
                "name" => "São Félix de Minas, Minas Gerais",
                "latitude" => -18.5959,
                "longitude" => -41.4889
            ],
            [
                "name" => "São Francisco, Minas Gerais",
                "latitude" => -15.9514,
                "longitude" => -44.8593
            ],
            [
                "name" => "São Francisco de Paula, Minas Gerais",
                "latitude" => -20.7036,
                "longitude" => -44.9838
            ],
            [
                "name" => "São Francisco de Sales, Minas Gerais",
                "latitude" => -19.8611,
                "longitude" => -49.7727
            ],
            [
                "name" => "São Francisco do Glória, Minas Gerais",
                "latitude" => -20.7923,
                "longitude" => -42.2673
            ],
            [
                "name" => "São Geraldo, Minas Gerais",
                "latitude" => -20.9252,
                "longitude" => -42.8364
            ],
            [
                "name" => "São Geraldo da Piedade, Minas Gerais",
                "latitude" => -18.8411,
                "longitude" => -42.2867
            ],
            [
                "name" => "São Geraldo do Baixio, Minas Gerais",
                "latitude" => -18.9097,
                "longitude" => -41.363
            ],
            [
                "name" => "São Gonçalo do Abaeté, Minas Gerais",
                "latitude" => -18.3315,
                "longitude" => -45.8265
            ],
            [
                "name" => "São Gonçalo do Pará, Minas Gerais",
                "latitude" => -19.9822,
                "longitude" => -44.8593
            ],
            [
                "name" => "São Gonçalo do Rio Abaixo, Minas Gerais",
                "latitude" => -19.8221,
                "longitude" => -43.366
            ],
            [
                "name" => "São Gonçalo do Sapucaí, Minas Gerais",
                "latitude" => -21.8932,
                "longitude" => -45.5893
            ],
            [
                "name" => "São Gotardo, Minas Gerais",
                "latitude" => -19.3087,
                "longitude" => -46.0465
            ],
            [
                "name" => "São João Batista do Glória, Minas Gerais",
                "latitude" => -20.635,
                "longitude" => -46.508
            ],
            [
                "name" => "São João da Lagoa, Minas Gerais",
                "latitude" => -16.8455,
                "longitude" => -44.3507
            ],
            [
                "name" => "São João da Mata, Minas Gerais",
                "latitude" => -21.928,
                "longitude" => -45.9297
            ],
            [
                "name" => "São João da Ponte, Minas Gerais",
                "latitude" => -15.9271,
                "longitude" => -44.0096
            ],
            [
                "name" => "São João das Missões, Minas Gerais",
                "latitude" => -14.8859,
                "longitude" => -44.0922
            ],
            [
                "name" => "São João del Rei, Minas Gerais",
                "latitude" => -21.1311,
                "longitude" => -44.2526
            ],
            [
                "name" => "São João do Manhuaçu, Minas Gerais",
                "latitude" => -20.3933,
                "longitude" => -42.1533
            ],
            [
                "name" => "São João do Manteninha, Minas Gerais",
                "latitude" => -18.723,
                "longitude" => -41.1628
            ],
            [
                "name" => "São João do Oriente, Minas Gerais",
                "latitude" => -19.3384,
                "longitude" => -42.1575
            ],
            [
                "name" => "São João do Pacuí, Minas Gerais",
                "latitude" => -16.5373,
                "longitude" => -44.5134
            ],
            [
                "name" => "São João do Paraíso, Minas Gerais",
                "latitude" => -15.3168,
                "longitude" => -42.0213
            ],
            [
                "name" => "São João Evangelista, Minas Gerais",
                "latitude" => -18.548,
                "longitude" => -42.7655
            ],
            [
                "name" => "São João Nepomuceno, Minas Gerais",
                "latitude" => -21.5381,
                "longitude" => -43.0069
            ],
            [
                "name" => "São Joaquim de Bicas, Minas Gerais",
                "latitude" => -20.048,
                "longitude" => -44.2749
            ],
            [
                "name" => "São José da Barra, Minas Gerais",
                "latitude" => -20.7178,
                "longitude" => -46.313
            ],
            [
                "name" => "São José da Lapa, Minas Gerais",
                "latitude" => -19.6971,
                "longitude" => -43.9586
            ],
            [
                "name" => "São José da Safira, Minas Gerais",
                "latitude" => -18.3243,
                "longitude" => -42.1431
            ],
            [
                "name" => "São José da Varginha, Minas Gerais",
                "latitude" => -19.7006,
                "longitude" => -44.556
            ],
            [
                "name" => "São José do Alegre, Minas Gerais",
                "latitude" => -22.3243,
                "longitude" => -45.5258
            ],
            [
                "name" => "São José do Divino, Minas Gerais",
                "latitude" => -18.4793,
                "longitude" => -41.3907
            ],
            [
                "name" => "São José do Goiabal, Minas Gerais",
                "latitude" => -19.9214,
                "longitude" => -42.7035
            ],
            [
                "name" => "São José do Jacuri, Minas Gerais",
                "latitude" => -18.281,
                "longitude" => -42.6729
            ],
            [
                "name" => "São José do Mantimento, Minas Gerais",
                "latitude" => -20.0058,
                "longitude" => -41.7486
            ],
            [
                "name" => "São Lourenço, Minas Gerais",
                "latitude" => -22.1166,
                "longitude" => -45.0506
            ],
            [
                "name" => "São Miguel do Anta, Minas Gerais",
                "latitude" => -20.7067,
                "longitude" => -42.7174
            ],
            [
                "name" => "São Pedro da União, Minas Gerais",
                "latitude" => -21.131,
                "longitude" => -46.6123
            ],
            [
                "name" => "São Pedro dos Ferros, Minas Gerais",
                "latitude" => -20.1732,
                "longitude" => -42.5251
            ],
            [
                "name" => "São Pedro do Suaçuí, Minas Gerais",
                "latitude" => -18.3609,
                "longitude" => -42.5981
            ],
            [
                "name" => "São Romão, Minas Gerais",
                "latitude" => -16.3641,
                "longitude" => -45.0749
            ],
            [
                "name" => "São Roque de Minas, Minas Gerais",
                "latitude" => -20.249,
                "longitude" => -46.3639
            ],
            [
                "name" => "São Sebastião da Bela Vista, Minas Gerais",
                "latitude" => -22.1583,
                "longitude" => -45.7546
            ],
            [
                "name" => "São Sebastião da Vargem Alegre, Minas Gerais",
                "latitude" => -19.7477,
                "longitude" => -43.3679
            ],
            [
                "name" => "São Sebastião do Anta, Minas Gerais",
                "latitude" => -19.5064,
                "longitude" => -41.985
            ],
            [
                "name" => "São Sebastião do Maranhão, Minas Gerais",
                "latitude" => -18.0873,
                "longitude" => -42.5659
            ],
            [
                "name" => "São Sebastião do Oeste, Minas Gerais",
                "latitude" => -20.2758,
                "longitude" => -45.0063
            ],
            [
                "name" => "São Sebastião do Paraíso, Minas Gerais",
                "latitude" => -20.9167,
                "longitude" => -46.9837
            ],
            [
                "name" => "São Sebastião do Rio Preto, Minas Gerais",
                "latitude" => -19.2959,
                "longitude" => -43.1757
            ],
            [
                "name" => "São Sebastião do Rio Verde, Minas Gerais",
                "latitude" => -22.2183,
                "longitude" => -44.9761
            ],
            [
                "name" => "São Tiago, Minas Gerais",
                "latitude" => -20.9075,
                "longitude" => -44.5098
            ],
            [
                "name" => "São Tomás de Aquino, Minas Gerais",
                "latitude" => -20.7791,
                "longitude" => -47.0962
            ],
            [
                "name" => "São Thomé das Letras, Minas Gerais",
                "latitude" => -21.7218,
                "longitude" => -44.9849
            ],
            [
                "name" => "São Vicente de Minas, Minas Gerais",
                "latitude" => -21.7042,
                "longitude" => -44.4431
            ],
            [
                "name" => "Sapucaí-Mirim, Minas Gerais",
                "latitude" => -22.7409,
                "longitude" => -45.738
            ],
            [
                "name" => "Sardoá, Minas Gerais",
                "latitude" => -18.7828,
                "longitude" => -42.3629
            ],
            [
                "name" => "Sarzedo, Minas Gerais",
                "latitude" => -20.0367,
                "longitude" => -44.1446
            ],
            [
                "name" => "Setubinha, Minas Gerais",
                "latitude" => -17.6002,
                "longitude" => -42.1587
            ],
            [
                "name" => "Sem-Peixe, Minas Gerais",
                "latitude" => -20.1008,
                "longitude" => -42.8483
            ],
            [
                "name" => "Senador Amaral, Minas Gerais",
                "latitude" => -22.5869,
                "longitude" => -46.1763
            ],
            [
                "name" => "Senador Cortes, Minas Gerais",
                "latitude" => -21.7986,
                "longitude" => -42.9424
            ],
            [
                "name" => "Senador Firmino, Minas Gerais",
                "latitude" => -20.9158,
                "longitude" => -43.0904
            ],
            [
                "name" => "Senador José Bento, Minas Gerais",
                "latitude" => -22.1633,
                "longitude" => -46.1792
            ],
            [
                "name" => "Senador Modestino Gonçalves, Minas Gerais",
                "latitude" => -17.9465,
                "longitude" => -43.2172
            ],
            [
                "name" => "Senhora de Oliveira, Minas Gerais",
                "latitude" => -20.7972,
                "longitude" => -43.3394
            ],
            [
                "name" => "Senhora do Porto, Minas Gerais",
                "latitude" => -18.8909,
                "longitude" => -43.0799
            ],
            [
                "name" => "Senhora dos Remédios, Minas Gerais",
                "latitude" => -21.0351,
                "longitude" => -43.5812
            ],
            [
                "name" => "Sericita, Minas Gerais",
                "latitude" => -20.4748,
                "longitude" => -42.4828
            ],
            [
                "name" => "Seritinga, Minas Gerais",
                "latitude" => -21.9134,
                "longitude" => -44.518
            ],
            [
                "name" => "Serra Azul de Minas, Minas Gerais",
                "latitude" => -18.3602,
                "longitude" => -43.1675
            ],
            [
                "name" => "Serra da Saudade, Minas Gerais",
                "latitude" => -19.4447,
                "longitude" => -45.795
            ],
            [
                "name" => "Serra dos Aimorés, Minas Gerais",
                "latitude" => -17.7872,
                "longitude" => -40.2453
            ],
            [
                "name" => "Serra do Salitre, Minas Gerais",
                "latitude" => -19.1083,
                "longitude" => -46.6961
            ],
            [
                "name" => "Serrania, Minas Gerais",
                "latitude" => -21.5441,
                "longitude" => -46.0417
            ],
            [
                "name" => "Serranópolis de Minas, Minas Gerais",
                "latitude" => -15.8176,
                "longitude" => -42.8732
            ],
            [
                "name" => "Serranos, Minas Gerais",
                "latitude" => -21.8857,
                "longitude" => -44.5125
            ],
            [
                "name" => "Serro, Minas Gerais",
                "latitude" => -18.5991,
                "longitude" => -43.3744
            ],
            [
                "name" => "Sete Lagoas, Minas Gerais",
                "latitude" => -19.4569,
                "longitude" => -44.2413
            ],
            [
                "name" => "Silveirânia, Minas Gerais",
                "latitude" => -21.1615,
                "longitude" => -43.2128
            ],
            [
                "name" => "Silvianópolis, Minas Gerais",
                "latitude" => -22.0274,
                "longitude" => -45.8385
            ],
            [
                "name" => "Simão Pereira, Minas Gerais",
                "latitude" => -21.964,
                "longitude" => -43.3088
            ],
            [
                "name" => "Simonésia, Minas Gerais",
                "latitude" => -20.1341,
                "longitude" => -42.0091
            ],
            [
                "name" => "Sobrália, Minas Gerais",
                "latitude" => -19.2345,
                "longitude" => -42.0998
            ],
            [
                "name" => "Soledade de Minas, Minas Gerais",
                "latitude" => -22.0554,
                "longitude" => -45.0464
            ],
            [
                "name" => "Tabuleiro, Minas Gerais",
                "latitude" => -21.3632,
                "longitude" => -43.2381
            ],
            [
                "name" => "Taiobeiras, Minas Gerais",
                "latitude" => -15.8106,
                "longitude" => -42.2259
            ],
            [
                "name" => "Taparuba, Minas Gerais",
                "latitude" => -19.7621,
                "longitude" => -41.608
            ],
            [
                "name" => "Tapira, Minas Gerais",
                "latitude" => -19.9166,
                "longitude" => -46.8264
            ],
            [
                "name" => "Tapiraí, Minas Gerais",
                "latitude" => -19.8936,
                "longitude" => -46.0221
            ],
            [
                "name" => "Taquaraçu de Minas, Minas Gerais",
                "latitude" => -19.6652,
                "longitude" => -43.6922
            ],
            [
                "name" => "Tarumirim, Minas Gerais",
                "latitude" => -19.2835,
                "longitude" => -42.0097
            ],
            [
                "name" => "Teixeiras, Minas Gerais",
                "latitude" => -20.6561,
                "longitude" => -42.8564
            ],
            [
                "name" => "Teófilo Otoni, Minas Gerais",
                "latitude" => -17.8595,
                "longitude" => -41.5087
            ],
            [
                "name" => "Timóteo, Minas Gerais",
                "latitude" => -19.5811,
                "longitude" => -42.6471
            ],
            [
                "name" => "Tiradentes, Minas Gerais",
                "latitude" => -21.1102,
                "longitude" => -44.1744
            ],
            [
                "name" => "Tiros, Minas Gerais",
                "latitude" => -19.0037,
                "longitude" => -45.9626
            ],
            [
                "name" => "Tocantins, Minas Gerais",
                "latitude" => -21.1774,
                "longitude" => -43.0127
            ],
            [
                "name" => "Tocos do Moji, Minas Gerais",
                "latitude" => -22.3698,
                "longitude" => -46.0971
            ],
            [
                "name" => "Toledo, Minas Gerais",
                "latitude" => -22.7421,
                "longitude" => -46.3728
            ],
            [
                "name" => "Tombos, Minas Gerais",
                "latitude" => -20.9086,
                "longitude" => -42.0228
            ],
            [
                "name" => "Três Corações, Minas Gerais",
                "latitude" => -21.6921,
                "longitude" => -45.2511
            ],
            [
                "name" => "Três Marias, Minas Gerais",
                "latitude" => -18.2048,
                "longitude" => -45.2473
            ],
            [
                "name" => "Três Pontas, Minas Gerais",
                "latitude" => -21.3694,
                "longitude" => -45.5109
            ],
            [
                "name" => "Tumiritinga, Minas Gerais",
                "latitude" => -18.9844,
                "longitude" => -41.6527
            ],
            [
                "name" => "Tupaciguara, Minas Gerais",
                "latitude" => -18.5866,
                "longitude" => -48.6985
            ],
            [
                "name" => "Turmalina, Minas Gerais",
                "latitude" => -17.2828,
                "longitude" => -42.7285
            ],
            [
                "name" => "Turvolândia, Minas Gerais",
                "latitude" => -21.8733,
                "longitude" => -45.7859
            ],
            [
                "name" => "Ubá, Minas Gerais",
                "latitude" => -21.1204,
                "longitude" => -42.9359
            ],
            [
                "name" => "Ubaí, Minas Gerais",
                "latitude" => -16.2885,
                "longitude" => -44.7783
            ],
            [
                "name" => "Ubaporanga, Minas Gerais",
                "latitude" => -19.6351,
                "longitude" => -42.1059
            ],
            [
                "name" => "Uberaba, Minas Gerais",
                "latitude" => -19.7472,
                "longitude" => -47.9381
            ],
            [
                "name" => "Uberlândia, Minas Gerais",
                "latitude" => -18.9141,
                "longitude" => -48.2749
            ],
            [
                "name" => "Umburatiba, Minas Gerais",
                "latitude" => -17.2548,
                "longitude" => -40.5779
            ],
            [
                "name" => "Unaí, Minas Gerais",
                "latitude" => -16.3592,
                "longitude" => -46.9022
            ],
            [
                "name" => "União de Minas, Minas Gerais",
                "latitude" => -19.5299,
                "longitude" => -50.338
            ],
            [
                "name" => "Uruana de Minas, Minas Gerais",
                "latitude" => -16.0634,
                "longitude" => -46.2443
            ],
            [
                "name" => "Urucânia, Minas Gerais",
                "latitude" => -20.3521,
                "longitude" => -42.737
            ],
            [
                "name" => "Urucuia, Minas Gerais",
                "latitude" => -16.1244,
                "longitude" => -45.7352
            ],
            [
                "name" => "Vargem Alegre, Minas Gerais",
                "latitude" => -19.5988,
                "longitude" => -42.2949
            ],
            [
                "name" => "Vargem Bonita, Minas Gerais",
                "latitude" => -20.3333,
                "longitude" => -46.3688
            ],
            [
                "name" => "Vargem Grande do Rio Pardo, Minas Gerais",
                "latitude" => -15.3987,
                "longitude" => -42.3085
            ],
            [
                "name" => "Varginha, Minas Gerais",
                "latitude" => -21.5556,
                "longitude" => -45.4364
            ],
            [
                "name" => "Varjão de Minas, Minas Gerais",
                "latitude" => -18.3741,
                "longitude" => -46.0313
            ],
            [
                "name" => "Várzea da Palma, Minas Gerais",
                "latitude" => -17.5944,
                "longitude" => -44.7226
            ],
            [
                "name" => "Varzelândia, Minas Gerais",
                "latitude" => -15.6992,
                "longitude" => -44.0278
            ],
            [
                "name" => "Vazante, Minas Gerais",
                "latitude" => -17.9827,
                "longitude" => -46.9088
            ],
            [
                "name" => "Verdelândia, Minas Gerais",
                "latitude" => -15.5845,
                "longitude" => -43.6121
            ],
            [
                "name" => "Veredinha, Minas Gerais",
                "latitude" => -17.3974,
                "longitude" => -42.7307
            ],
            [
                "name" => "Veríssimo, Minas Gerais",
                "latitude" => -19.6657,
                "longitude" => -48.3118
            ],
            [
                "name" => "Vermelho Novo, Minas Gerais",
                "latitude" => -20.0406,
                "longitude" => -42.2688
            ],
            [
                "name" => "Vespasiano, Minas Gerais",
                "latitude" => -19.6883,
                "longitude" => -43.9239
            ],
            [
                "name" => "Viçosa, Minas Gerais",
                "latitude" => -20.7559,
                "longitude" => -42.8742
            ],
            [
                "name" => "Vieiras, Minas Gerais",
                "latitude" => -20.867,
                "longitude" => -42.2401
            ],
            [
                "name" => "Mathias Lobato, Minas Gerais",
                "latitude" => -18.59,
                "longitude" => -41.9166
            ],
            [
                "name" => "Virgem da Lapa, Minas Gerais",
                "latitude" => -16.807,
                "longitude" => -42.3431
            ],
            [
                "name" => "Virgínia, Minas Gerais",
                "latitude" => -22.3264,
                "longitude" => -45.0965
            ],
            [
                "name" => "Virginópolis, Minas Gerais",
                "latitude" => -18.8154,
                "longitude" => -42.7015
            ],
            [
                "name" => "Virgolândia, Minas Gerais",
                "latitude" => -18.4738,
                "longitude" => -42.3067
            ],
            [
                "name" => "Visconde do Rio Branco, Minas Gerais",
                "latitude" => -21.0127,
                "longitude" => -42.8361
            ],
            [
                "name" => "Volta Grande, Minas Gerais",
                "latitude" => -21.7671,
                "longitude" => -42.5375
            ],
            [
                "name" => "Wenceslau Braz, Minas Gerais",
                "latitude" => -22.5368,
                "longitude" => -45.3626
            ],
            [
                "name" => "Afonso Cláudio, Espírito Santo",
                "latitude" => -20.0778,
                "longitude" => -41.1261
            ],
            [
                "name" => "Águia Branca, Espírito Santo",
                "latitude" => -18.9846,
                "longitude" => -40.7437
            ],
            [
                "name" => "Água Doce do Norte, Espírito Santo",
                "latitude" => -18.5482,
                "longitude" => -40.9854
            ],
            [
                "name" => "Alegre, Espírito Santo",
                "latitude" => -20.758,
                "longitude" => -41.5382
            ],
            [
                "name" => "Alfredo Chaves, Espírito Santo",
                "latitude" => -20.6396,
                "longitude" => -40.7543
            ],
            [
                "name" => "Alto Rio Novo, Espírito Santo",
                "latitude" => -19.0618,
                "longitude" => -41.0209
            ],
            [
                "name" => "Anchieta, Espírito Santo",
                "latitude" => -20.7955,
                "longitude" => -40.6425
            ],
            [
                "name" => "Apiacá, Espírito Santo",
                "latitude" => -21.1523,
                "longitude" => -41.5693
            ],
            [
                "name" => "Aracruz, Espírito Santo",
                "latitude" => -19.82,
                "longitude" => -40.2764
            ],
            [
                "name" => "Atilio Vivacqua, Espírito Santo",
                "latitude" => -20.913,
                "longitude" => -41.1986
            ],
            [
                "name" => "Baixo Guandu, Espírito Santo",
                "latitude" => -19.5213,
                "longitude" => -41.0109
            ],
            [
                "name" => "Barra de São Francisco, Espírito Santo",
                "latitude" => -18.7548,
                "longitude" => -40.8965
            ],
            [
                "name" => "Boa Esperança, Espírito Santo",
                "latitude" => -18.5395,
                "longitude" => -40.3025
            ],
            [
                "name" => "Bom Jesus do Norte, Espírito Santo",
                "latitude" => -21.1173,
                "longitude" => -41.6731
            ],
            [
                "name" => "Brejetuba, Espírito Santo",
                "latitude" => -20.1395,
                "longitude" => -41.2954
            ],
            [
                "name" => "Cachoeiro de Itapemirim, Espírito Santo",
                "latitude" => -20.8462,
                "longitude" => -41.1198
            ],
            [
                "name" => "Cariacica, Espírito Santo",
                "latitude" => -20.2632,
                "longitude" => -40.4165
            ],
            [
                "name" => "Castelo, Espírito Santo",
                "latitude" => -20.6033,
                "longitude" => -41.2031
            ],
            [
                "name" => "Colatina, Espírito Santo",
                "latitude" => -19.5493,
                "longitude" => -40.6269
            ],
            [
                "name" => "Conceição da Barra, Espírito Santo",
                "latitude" => -18.5883,
                "longitude" => -39.7362
            ],
            [
                "name" => "Conceição do Castelo, Espírito Santo",
                "latitude" => -20.3639,
                "longitude" => -41.2417
            ],
            [
                "name" => "Divino de São Lourenço, Espírito Santo",
                "latitude" => -20.6229,
                "longitude" => -41.6937
            ],
            [
                "name" => "Domingos Martins, Espírito Santo",
                "latitude" => -20.3603,
                "longitude" => -40.6594
            ],
            [
                "name" => "Dores do Rio Preto, Espírito Santo",
                "latitude" => -20.6931,
                "longitude" => -41.8405
            ],
            [
                "name" => "Ecoporanga, Espírito Santo",
                "latitude" => -18.3702,
                "longitude" => -40.836
            ],
            [
                "name" => "Fundão, Espírito Santo",
                "latitude" => -19.937,
                "longitude" => -40.4078
            ],
            [
                "name" => "Governador Lindenberg, Espírito Santo",
                "latitude" => -19.1864,
                "longitude" => -40.4473
            ],
            [
                "name" => "Guaçuí, Espírito Santo",
                "latitude" => -20.7668,
                "longitude" => -41.6734
            ],
            [
                "name" => "Guarapari, Espírito Santo",
                "latitude" => -20.6772,
                "longitude" => -40.5093
            ],
            [
                "name" => "Ibatiba, Espírito Santo",
                "latitude" => -20.2347,
                "longitude" => -41.5087
            ],
            [
                "name" => "Ibiraçu, Espírito Santo",
                "latitude" => -19.8366,
                "longitude" => -40.3732
            ],
            [
                "name" => "Ibitirama, Espírito Santo",
                "latitude" => -20.5466,
                "longitude" => -41.6667
            ],
            [
                "name" => "Iconha, Espírito Santo",
                "latitude" => -20.7913,
                "longitude" => -40.8132
            ],
            [
                "name" => "Irupi, Espírito Santo",
                "latitude" => -20.3501,
                "longitude" => -41.6444
            ],
            [
                "name" => "Itaguaçu, Espírito Santo",
                "latitude" => -19.8018,
                "longitude" => -40.8601
            ],
            [
                "name" => "Itapemirim, Espírito Santo",
                "latitude" => -21.0095,
                "longitude" => -40.8307
            ],
            [
                "name" => "Itarana, Espírito Santo",
                "latitude" => -19.875,
                "longitude" => -40.8753
            ],
            [
                "name" => "Iúna, Espírito Santo",
                "latitude" => -20.3531,
                "longitude" => -41.5334
            ],
            [
                "name" => "Jaguaré, Espírito Santo",
                "latitude" => -18.907,
                "longitude" => -40.0759
            ],
            [
                "name" => "Jerônimo Monteiro, Espírito Santo",
                "latitude" => -20.7994,
                "longitude" => -41.3948
            ],
            [
                "name" => "João Neiva, Espírito Santo",
                "latitude" => -19.7577,
                "longitude" => -40.386
            ],
            [
                "name" => "Laranja da Terra, Espírito Santo",
                "latitude" => -19.8994,
                "longitude" => -41.0621
            ],
            [
                "name" => "Linhares, Espírito Santo",
                "latitude" => -19.3946,
                "longitude" => -40.0643
            ],
            [
                "name" => "Mantenópolis, Espírito Santo",
                "latitude" => -18.8594,
                "longitude" => -41.124
            ],
            [
                "name" => "Marataízes, Espírito Santo",
                "latitude" => -21.0398,
                "longitude" => -40.8384
            ],
            [
                "name" => "Marechal Floriano, Espírito Santo",
                "latitude" => -20.4159,
                "longitude" => -40.67
            ],
            [
                "name" => "Marilândia, Espírito Santo",
                "latitude" => -19.4114,
                "longitude" => -40.5456
            ],
            [
                "name" => "Mimoso do Sul, Espírito Santo",
                "latitude" => -21.0628,
                "longitude" => -41.3615
            ],
            [
                "name" => "Montanha, Espírito Santo",
                "latitude" => -18.1303,
                "longitude" => -40.3668
            ],
            [
                "name" => "Mucurici, Espírito Santo",
                "latitude" => -18.0965,
                "longitude" => -40.52
            ],
            [
                "name" => "Muniz Freire, Espírito Santo",
                "latitude" => -20.4652,
                "longitude" => -41.4156
            ],
            [
                "name" => "Muqui, Espírito Santo",
                "latitude" => -20.9509,
                "longitude" => -41.346
            ],
            [
                "name" => "Nova Venécia, Espírito Santo",
                "latitude" => -18.715,
                "longitude" => -40.4053
            ],
            [
                "name" => "Pancas, Espírito Santo",
                "latitude" => -19.2229,
                "longitude" => -40.8534
            ],
            [
                "name" => "Pedro Canário, Espírito Santo",
                "latitude" => -18.3004,
                "longitude" => -39.9574
            ],
            [
                "name" => "Pinheiros, Espírito Santo",
                "latitude" => -18.4141,
                "longitude" => -40.2171
            ],
            [
                "name" => "Piúma, Espírito Santo",
                "latitude" => -20.8334,
                "longitude" => -40.7268
            ],
            [
                "name" => "Ponto Belo, Espírito Santo",
                "latitude" => -18.1253,
                "longitude" => -40.5458
            ],
            [
                "name" => "Presidente Kennedy, Espírito Santo",
                "latitude" => -21.0964,
                "longitude" => -41.0468
            ],
            [
                "name" => "Rio Bananal, Espírito Santo",
                "latitude" => -19.2719,
                "longitude" => -40.3366
            ],
            [
                "name" => "Rio Novo do Sul, Espírito Santo",
                "latitude" => -20.8556,
                "longitude" => -40.9388
            ],
            [
                "name" => "Santa Leopoldina, Espírito Santo",
                "latitude" => -20.0999,
                "longitude" => -40.527
            ],
            [
                "name" => "Santa Maria de Jetibá, Espírito Santo",
                "latitude" => -20.0253,
                "longitude" => -40.7439
            ],
            [
                "name" => "Santa Teresa, Espírito Santo",
                "latitude" => -19.9363,
                "longitude" => -40.5979
            ],
            [
                "name" => "São Domingos do Norte, Espírito Santo",
                "latitude" => -19.1452,
                "longitude" => -40.6281
            ],
            [
                "name" => "São Gabriel da Palha, Espírito Santo",
                "latitude" => -19.0182,
                "longitude" => -40.5365
            ],
            [
                "name" => "São José do Calçado, Espírito Santo",
                "latitude" => -21.0274,
                "longitude" => -41.6636
            ],
            [
                "name" => "São Mateus, Espírito Santo",
                "latitude" => -18.7214,
                "longitude" => -39.8579
            ],
            [
                "name" => "São Roque do Canaã, Espírito Santo",
                "latitude" => -19.7411,
                "longitude" => -40.6526
            ],
            [
                "name" => "Serra, Espírito Santo",
                "latitude" => -20.121,
                "longitude" => -40.3074
            ],
            [
                "name" => "Sooretama, Espírito Santo",
                "latitude" => -19.1897,
                "longitude" => -40.0974
            ],
            [
                "name" => "Vargem Alta, Espírito Santo",
                "latitude" => -20.669,
                "longitude" => -41.0179
            ],
            [
                "name" => "Venda Nova do Imigrante, Espírito Santo",
                "latitude" => -20.327,
                "longitude" => -41.1355
            ],
            [
                "name" => "Viana, Espírito Santo",
                "latitude" => -20.3825,
                "longitude" => -40.4933
            ],
            [
                "name" => "Vila Pavão, Espírito Santo",
                "latitude" => -18.6091,
                "longitude" => -40.609
            ],
            [
                "name" => "Vila Valério, Espírito Santo",
                "latitude" => -18.9958,
                "longitude" => -40.3849
            ],
            [
                "name" => "Vila Velha, Espírito Santo",
                "latitude" => -20.3417,
                "longitude" => -40.2875
            ],
            [
                "name" => "Vitória, Espírito Santo",
                "latitude" => -20.3155,
                "longitude" => -40.3128
            ],
            [
                "name" => "Angra dos Reis, Rio de Janeiro",
                "latitude" => -23.0011,
                "longitude" => -44.3196
            ],
            [
                "name" => "Aperibé, Rio de Janeiro",
                "latitude" => -21.6252,
                "longitude" => -42.1017
            ],
            [
                "name" => "Araruama, Rio de Janeiro",
                "latitude" => -22.8697,
                "longitude" => -42.3326
            ],
            [
                "name" => "Areal, Rio de Janeiro",
                "latitude" => -22.2283,
                "longitude" => -43.1118
            ],
            [
                "name" => "Armação dos Búzios, Rio de Janeiro",
                "latitude" => -22.7528,
                "longitude" => -41.8846
            ],
            [
                "name" => "Arraial do Cabo, Rio de Janeiro",
                "latitude" => -22.9774,
                "longitude" => -42.0267
            ],
            [
                "name" => "Barra do Piraí, Rio de Janeiro",
                "latitude" => -22.4715,
                "longitude" => -43.8269
            ],
            [
                "name" => "Barra Mansa, Rio de Janeiro",
                "latitude" => -22.5481,
                "longitude" => -44.1752
            ],
            [
                "name" => "Belford Roxo, Rio de Janeiro",
                "latitude" => -22.764,
                "longitude" => -43.3992
            ],
            [
                "name" => "Bom Jardim, Rio de Janeiro",
                "latitude" => -22.1545,
                "longitude" => -42.4251
            ],
            [
                "name" => "Bom Jesus do Itabapoana, Rio de Janeiro",
                "latitude" => -21.1449,
                "longitude" => -41.6822
            ],
            [
                "name" => "Cabo Frio, Rio de Janeiro",
                "latitude" => -22.8894,
                "longitude" => -42.0286
            ],
            [
                "name" => "Cachoeiras de Macacu, Rio de Janeiro",
                "latitude" => -22.4658,
                "longitude" => -42.6523
            ],
            [
                "name" => "Cambuci, Rio de Janeiro",
                "latitude" => -21.5691,
                "longitude" => -41.9187
            ],
            [
                "name" => "Carapebus, Rio de Janeiro",
                "latitude" => -22.1821,
                "longitude" => -41.663
            ],
            [
                "name" => "Comendador Levy Gasparian, Rio de Janeiro",
                "latitude" => -22.0404,
                "longitude" => -43.214
            ],
            [
                "name" => "Campos dos Goytacazes, Rio de Janeiro",
                "latitude" => -21.7622,
                "longitude" => -41.3181
            ],
            [
                "name" => "Cantagalo, Rio de Janeiro",
                "latitude" => -21.9797,
                "longitude" => -42.3664
            ],
            [
                "name" => "Cardoso Moreira, Rio de Janeiro",
                "latitude" => -21.4846,
                "longitude" => -41.6165
            ],
            [
                "name" => "Carmo, Rio de Janeiro",
                "latitude" => -21.931,
                "longitude" => -42.6046
            ],
            [
                "name" => "Casimiro de Abreu, Rio de Janeiro",
                "latitude" => -22.4812,
                "longitude" => -42.2066
            ],
            [
                "name" => "Conceição de Macabu, Rio de Janeiro",
                "latitude" => -22.0834,
                "longitude" => -41.8719
            ],
            [
                "name" => "Cordeiro, Rio de Janeiro",
                "latitude" => -22.0267,
                "longitude" => -42.3648
            ],
            [
                "name" => "Duas Barras, Rio de Janeiro",
                "latitude" => -22.0536,
                "longitude" => -42.5232
            ],
            [
                "name" => "Duque de Caxias, Rio de Janeiro",
                "latitude" => -22.7858,
                "longitude" => -43.3049
            ],
            [
                "name" => "Engenheiro Paulo de Frontin, Rio de Janeiro",
                "latitude" => -22.5498,
                "longitude" => -43.6827
            ],
            [
                "name" => "Guapimirim, Rio de Janeiro",
                "latitude" => -22.5347,
                "longitude" => -42.9895
            ],
            [
                "name" => "Iguaba Grande, Rio de Janeiro",
                "latitude" => -22.8495,
                "longitude" => -42.2299
            ],
            [
                "name" => "Itaboraí, Rio de Janeiro",
                "latitude" => -22.7565,
                "longitude" => -42.8639
            ],
            [
                "name" => "Itaguaí, Rio de Janeiro",
                "latitude" => -22.8636,
                "longitude" => -43.7798
            ],
            [
                "name" => "Italva, Rio de Janeiro",
                "latitude" => -21.4296,
                "longitude" => -41.7014
            ],
            [
                "name" => "Itaocara, Rio de Janeiro",
                "latitude" => -21.6748,
                "longitude" => -42.0758
            ],
            [
                "name" => "Itaperuna, Rio de Janeiro",
                "latitude" => -21.1997,
                "longitude" => -41.8799
            ],
            [
                "name" => "Itatiaia, Rio de Janeiro",
                "latitude" => -22.4897,
                "longitude" => -44.5675
            ],
            [
                "name" => "Japeri, Rio de Janeiro",
                "latitude" => -22.6435,
                "longitude" => -43.6602
            ],
            [
                "name" => "Laje do Muriaé, Rio de Janeiro",
                "latitude" => -21.2091,
                "longitude" => -42.1271
            ],
            [
                "name" => "Macaé, Rio de Janeiro",
                "latitude" => -22.3768,
                "longitude" => -41.7848
            ],
            [
                "name" => "Macuco, Rio de Janeiro",
                "latitude" => -21.9813,
                "longitude" => -42.2533
            ],
            [
                "name" => "Magé, Rio de Janeiro",
                "latitude" => -22.6632,
                "longitude" => -43.0315
            ],
            [
                "name" => "Mangaratiba, Rio de Janeiro",
                "latitude" => -22.9594,
                "longitude" => -44.0409
            ],
            [
                "name" => "Maricá, Rio de Janeiro",
                "latitude" => -22.9354,
                "longitude" => -42.8246
            ],
            [
                "name" => "Mendes, Rio de Janeiro",
                "latitude" => -22.5245,
                "longitude" => -43.7312
            ],
            [
                "name" => "Mesquita, Rio de Janeiro",
                "latitude" => -22.8028,
                "longitude" => -43.4601
            ],
            [
                "name" => "Miguel Pereira, Rio de Janeiro",
                "latitude" => -22.4572,
                "longitude" => -43.4803
            ],
            [
                "name" => "Miracema, Rio de Janeiro",
                "latitude" => -21.4148,
                "longitude" => -42.1938
            ],
            [
                "name" => "Natividade, Rio de Janeiro",
                "latitude" => -21.039,
                "longitude" => -41.9697
            ],
            [
                "name" => "Nilópolis, Rio de Janeiro",
                "latitude" => -22.8057,
                "longitude" => -43.4233
            ],
            [
                "name" => "Niterói, Rio de Janeiro",
                "latitude" => -22.8832,
                "longitude" => -43.1034
            ],
            [
                "name" => "Nova Friburgo, Rio de Janeiro",
                "latitude" => -22.2932,
                "longitude" => -42.5377
            ],
            [
                "name" => "Nova Iguaçu, Rio de Janeiro",
                "latitude" => -22.7556,
                "longitude" => -43.4603
            ],
            [
                "name" => "Paracambi, Rio de Janeiro",
                "latitude" => -22.6078,
                "longitude" => -43.7108
            ],
            [
                "name" => "Paraíba do Sul, Rio de Janeiro",
                "latitude" => -22.1585,
                "longitude" => -43.304
            ],
            [
                "name" => "Paraty, Rio de Janeiro",
                "latitude" => -23.2221,
                "longitude" => -44.7175
            ],
            [
                "name" => "Paty do Alferes, Rio de Janeiro",
                "latitude" => -22.4309,
                "longitude" => -43.4285
            ],
            [
                "name" => "Petrópolis, Rio de Janeiro",
                "latitude" => -22.52,
                "longitude" => -43.1926
            ],
            [
                "name" => "Pinheiral, Rio de Janeiro",
                "latitude" => -22.5172,
                "longitude" => -44.0022
            ],
            [
                "name" => "Piraí, Rio de Janeiro",
                "latitude" => -22.6215,
                "longitude" => -43.9081
            ],
            [
                "name" => "Porciúncula, Rio de Janeiro",
                "latitude" => -20.9632,
                "longitude" => -42.0465
            ],
            [
                "name" => "Porto Real, Rio de Janeiro",
                "latitude" => -22.4175,
                "longitude" => -44.2952
            ],
            [
                "name" => "Quatis, Rio de Janeiro",
                "latitude" => -22.4045,
                "longitude" => -44.2597
            ],
            [
                "name" => "Queimados, Rio de Janeiro",
                "latitude" => -22.7102,
                "longitude" => -43.5518
            ],
            [
                "name" => "Quissamã, Rio de Janeiro",
                "latitude" => -22.1031,
                "longitude" => -41.4693
            ],
            [
                "name" => "Resende, Rio de Janeiro",
                "latitude" => -22.4705,
                "longitude" => -44.4509
            ],
            [
                "name" => "Rio Bonito, Rio de Janeiro",
                "latitude" => -22.7181,
                "longitude" => -42.6276
            ],
            [
                "name" => "Rio Claro, Rio de Janeiro",
                "latitude" => -22.72,
                "longitude" => -44.1419
            ],
            [
                "name" => "Rio das Flores, Rio de Janeiro",
                "latitude" => -22.1692,
                "longitude" => -43.5856
            ],
            [
                "name" => "Rio das Ostras, Rio de Janeiro",
                "latitude" => -22.5174,
                "longitude" => -41.9475
            ],
            [
                "name" => "Rio de Janeiro, Rio de Janeiro",
                "latitude" => -22.9129,
                "longitude" => -43.2003
            ],
            [
                "name" => "Santa Maria Madalena, Rio de Janeiro",
                "latitude" => -21.9547,
                "longitude" => -42.0098
            ],
            [
                "name" => "Santo Antônio de Pádua, Rio de Janeiro",
                "latitude" => -21.541,
                "longitude" => -42.1832
            ],
            [
                "name" => "São Francisco de Itabapoana, Rio de Janeiro",
                "latitude" => -21.4702,
                "longitude" => -41.1091
            ],
            [
                "name" => "São Fidélis, Rio de Janeiro",
                "latitude" => -21.6551,
                "longitude" => -41.756
            ],
            [
                "name" => "São Gonçalo, Rio de Janeiro",
                "latitude" => -22.8268,
                "longitude" => -43.0634
            ],
            [
                "name" => "São João da Barra, Rio de Janeiro",
                "latitude" => -21.638,
                "longitude" => -41.0446
            ],
            [
                "name" => "São João de Meriti, Rio de Janeiro",
                "latitude" => -22.8058,
                "longitude" => -43.3729
            ],
            [
                "name" => "São José de Ubá, Rio de Janeiro",
                "latitude" => -21.3661,
                "longitude" => -41.9511
            ],
            [
                "name" => "São José do Vale do Rio Preto, Rio de Janeiro",
                "latitude" => -22.1525,
                "longitude" => -42.9327
            ],
            [
                "name" => "São Pedro da Aldeia, Rio de Janeiro",
                "latitude" => -22.8429,
                "longitude" => -42.1026
            ],
            [
                "name" => "São Sebastião do Alto, Rio de Janeiro",
                "latitude" => -21.9578,
                "longitude" => -42.1328
            ],
            [
                "name" => "Sapucaia, Rio de Janeiro",
                "latitude" => -21.9949,
                "longitude" => -42.9142
            ],
            [
                "name" => "Saquarema, Rio de Janeiro",
                "latitude" => -22.9292,
                "longitude" => -42.5099
            ],
            [
                "name" => "Seropédica, Rio de Janeiro",
                "latitude" => -22.7526,
                "longitude" => -43.7155
            ],
            [
                "name" => "Silva Jardim, Rio de Janeiro",
                "latitude" => -22.6574,
                "longitude" => -42.3961
            ],
            [
                "name" => "Sumidouro, Rio de Janeiro",
                "latitude" => -22.0485,
                "longitude" => -42.6761
            ],
            [
                "name" => "Tanguá, Rio de Janeiro",
                "latitude" => -22.7423,
                "longitude" => -42.7202
            ],
            [
                "name" => "Teresópolis, Rio de Janeiro",
                "latitude" => -22.4165,
                "longitude" => -42.9752
            ],
            [
                "name" => "Trajano de Moraes, Rio de Janeiro",
                "latitude" => -22.0638,
                "longitude" => -42.0643
            ],
            [
                "name" => "Três Rios, Rio de Janeiro",
                "latitude" => -22.1165,
                "longitude" => -43.2185
            ],
            [
                "name" => "Valença, Rio de Janeiro",
                "latitude" => -22.2445,
                "longitude" => -43.7129
            ],
            [
                "name" => "Varre-Sai, Rio de Janeiro",
                "latitude" => -20.9276,
                "longitude" => -41.8701
            ],
            [
                "name" => "Vassouras, Rio de Janeiro",
                "latitude" => -22.4059,
                "longitude" => -43.6686
            ],
            [
                "name" => "Volta Redonda, Rio de Janeiro",
                "latitude" => -22.5202,
                "longitude" => -44.0996
            ],
            [
                "name" => "Adamantina, São Paulo",
                "latitude" => -21.682,
                "longitude" => -51.0737
            ],
            [
                "name" => "Adolfo, São Paulo",
                "latitude" => -21.2325,
                "longitude" => -49.6451
            ],
            [
                "name" => "Aguaí, São Paulo",
                "latitude" => -22.0572,
                "longitude" => -46.9735
            ],
            [
                "name" => "Águas da Prata, São Paulo",
                "latitude" => -21.9319,
                "longitude" => -46.7176
            ],
            [
                "name" => "Águas de Lindóia, São Paulo",
                "latitude" => -22.4733,
                "longitude" => -46.6314
            ],
            [
                "name" => "Águas de Santa Bárbara, São Paulo",
                "latitude" => -22.8812,
                "longitude" => -49.2421
            ],
            [
                "name" => "Águas de São Pedro, São Paulo",
                "latitude" => -22.5977,
                "longitude" => -47.8734
            ],
            [
                "name" => "Agudos, São Paulo",
                "latitude" => -22.4694,
                "longitude" => -48.9863
            ],
            [
                "name" => "Alambari, São Paulo",
                "latitude" => -23.5503,
                "longitude" => -47.898
            ],
            [
                "name" => "Alfredo Marcondes, São Paulo",
                "latitude" => -21.9527,
                "longitude" => -51.414
            ],
            [
                "name" => "Altair, São Paulo",
                "latitude" => -20.5242,
                "longitude" => -49.0571
            ],
            [
                "name" => "Altinópolis, São Paulo",
                "latitude" => -21.0214,
                "longitude" => -47.3712
            ],
            [
                "name" => "Alto Alegre, São Paulo",
                "latitude" => -21.5811,
                "longitude" => -50.168
            ],
            [
                "name" => "Alumínio, São Paulo",
                "latitude" => -23.5306,
                "longitude" => -47.2546
            ],
            [
                "name" => "Álvares Florence, São Paulo",
                "latitude" => -20.3203,
                "longitude" => -49.9141
            ],
            [
                "name" => "Álvares Machado, São Paulo",
                "latitude" => -22.0764,
                "longitude" => -51.4722
            ],
            [
                "name" => "Álvaro de Carvalho, São Paulo",
                "latitude" => -22.0841,
                "longitude" => -49.719
            ],
            [
                "name" => "Alvinlândia, São Paulo",
                "latitude" => -22.4435,
                "longitude" => -49.7623
            ],
            [
                "name" => "Americana, São Paulo",
                "latitude" => -22.7374,
                "longitude" => -47.3331
            ],
            [
                "name" => "Américo Brasiliense, São Paulo",
                "latitude" => -21.7288,
                "longitude" => -48.1147
            ],
            [
                "name" => "Américo de Campos, São Paulo",
                "latitude" => -20.2985,
                "longitude" => -49.7359
            ],
            [
                "name" => "Amparo, São Paulo",
                "latitude" => -22.7088,
                "longitude" => -46.772
            ],
            [
                "name" => "Analândia, São Paulo",
                "latitude" => -22.1289,
                "longitude" => -47.6619
            ],
            [
                "name" => "Andradina, São Paulo",
                "latitude" => -20.8948,
                "longitude" => -51.3786
            ],
            [
                "name" => "Angatuba, São Paulo",
                "latitude" => -23.4917,
                "longitude" => -48.4139
            ],
            [
                "name" => "Anhembi, São Paulo",
                "latitude" => -22.793,
                "longitude" => -48.1336
            ],
            [
                "name" => "Anhumas, São Paulo",
                "latitude" => -22.2934,
                "longitude" => -51.3895
            ],
            [
                "name" => "Aparecida, São Paulo",
                "latitude" => -22.8495,
                "longitude" => -45.2325
            ],
            [
                "name" => "Aparecida d'Oeste, São Paulo",
                "latitude" => -20.4487,
                "longitude" => -50.8835
            ],
            [
                "name" => "Apiaí, São Paulo",
                "latitude" => -24.5108,
                "longitude" => -48.8443
            ],
            [
                "name" => "Araçariguama, São Paulo",
                "latitude" => -23.4366,
                "longitude" => -47.0608
            ],
            [
                "name" => "Araçatuba, São Paulo",
                "latitude" => -21.2076,
                "longitude" => -50.4401
            ],
            [
                "name" => "Araçoiaba da Serra, São Paulo",
                "latitude" => -23.5029,
                "longitude" => -47.6166
            ],
            [
                "name" => "Aramina, São Paulo",
                "latitude" => -20.0882,
                "longitude" => -47.7873
            ],
            [
                "name" => "Arandu, São Paulo",
                "latitude" => -23.1386,
                "longitude" => -49.0487
            ],
            [
                "name" => "Arapeí, São Paulo",
                "latitude" => -22.6717,
                "longitude" => -44.4441
            ],
            [
                "name" => "Araraquara, São Paulo",
                "latitude" => -21.7845,
                "longitude" => -48.178
            ],
            [
                "name" => "Araras, São Paulo",
                "latitude" => -22.3572,
                "longitude" => -47.3842
            ],
            [
                "name" => "Arco-Íris, São Paulo",
                "latitude" => -21.7728,
                "longitude" => -50.466
            ],
            [
                "name" => "Arealva, São Paulo",
                "latitude" => -22.031,
                "longitude" => -48.9135
            ],
            [
                "name" => "Areias, São Paulo",
                "latitude" => -22.5786,
                "longitude" => -44.6992
            ],
            [
                "name" => "Areiópolis, São Paulo",
                "latitude" => -22.6672,
                "longitude" => -48.6681
            ],
            [
                "name" => "Ariranha, São Paulo",
                "latitude" => -21.1872,
                "longitude" => -48.7904
            ],
            [
                "name" => "Artur Nogueira, São Paulo",
                "latitude" => -22.5727,
                "longitude" => -47.1727
            ],
            [
                "name" => "Arujá, São Paulo",
                "latitude" => -23.3965,
                "longitude" => -46.32
            ],
            [
                "name" => "Aspásia, São Paulo",
                "latitude" => -20.16,
                "longitude" => -50.728
            ],
            [
                "name" => "Assis, São Paulo",
                "latitude" => -22.66,
                "longitude" => -50.4183
            ],
            [
                "name" => "Atibaia, São Paulo",
                "latitude" => -23.1171,
                "longitude" => -46.5563
            ],
            [
                "name" => "Auriflama, São Paulo",
                "latitude" => -20.6836,
                "longitude" => -50.5572
            ],
            [
                "name" => "Avaí, São Paulo",
                "latitude" => -22.1514,
                "longitude" => -49.3356
            ],
            [
                "name" => "Avanhandava, São Paulo",
                "latitude" => -21.4584,
                "longitude" => -49.9509
            ],
            [
                "name" => "Avaré, São Paulo",
                "latitude" => -23.1067,
                "longitude" => -48.9251
            ],
            [
                "name" => "Bady Bassitt, São Paulo",
                "latitude" => -20.9197,
                "longitude" => -49.4385
            ],
            [
                "name" => "Balbinos, São Paulo",
                "latitude" => -21.8963,
                "longitude" => -49.3619
            ],
            [
                "name" => "Bálsamo, São Paulo",
                "latitude" => -20.7348,
                "longitude" => -49.5865
            ],
            [
                "name" => "Bananal, São Paulo",
                "latitude" => -22.6819,
                "longitude" => -44.3281
            ],
            [
                "name" => "Barão de Antonina, São Paulo",
                "latitude" => -23.6284,
                "longitude" => -49.5634
            ],
            [
                "name" => "Barbosa, São Paulo",
                "latitude" => -21.2657,
                "longitude" => -49.9518
            ],
            [
                "name" => "Bariri, São Paulo",
                "latitude" => -22.073,
                "longitude" => -48.7438
            ],
            [
                "name" => "Barra Bonita, São Paulo",
                "latitude" => -22.4909,
                "longitude" => -48.5583
            ],
            [
                "name" => "Barra do Chapéu, São Paulo",
                "latitude" => -24.4722,
                "longitude" => -49.0238
            ],
            [
                "name" => "Barra do Turvo, São Paulo",
                "latitude" => -24.759,
                "longitude" => -48.5013
            ],
            [
                "name" => "Barretos, São Paulo",
                "latitude" => -20.5531,
                "longitude" => -48.5698
            ],
            [
                "name" => "Barrinha, São Paulo",
                "latitude" => -21.1864,
                "longitude" => -48.1636
            ],
            [
                "name" => "Barueri, São Paulo",
                "latitude" => -23.5057,
                "longitude" => -46.879
            ],
            [
                "name" => "Bastos, São Paulo",
                "latitude" => -21.921,
                "longitude" => -50.7357
            ],
            [
                "name" => "Batatais, São Paulo",
                "latitude" => -20.8929,
                "longitude" => -47.5921
            ],
            [
                "name" => "Bauru, São Paulo",
                "latitude" => -22.3246,
                "longitude" => -49.0871
            ],
            [
                "name" => "Bebedouro, São Paulo",
                "latitude" => -20.9491,
                "longitude" => -48.4791
            ],
            [
                "name" => "Bento de Abreu, São Paulo",
                "latitude" => -21.2686,
                "longitude" => -50.814
            ],
            [
                "name" => "Bernardino de Campos, São Paulo",
                "latitude" => -23.0164,
                "longitude" => -49.4679
            ],
            [
                "name" => "Bertioga, São Paulo",
                "latitude" => -23.8486,
                "longitude" => -46.1396
            ],
            [
                "name" => "Bilac, São Paulo",
                "latitude" => -21.404,
                "longitude" => -50.4746
            ],
            [
                "name" => "Birigui, São Paulo",
                "latitude" => -21.291,
                "longitude" => -50.3432
            ],
            [
                "name" => "Biritiba-Mirim, São Paulo",
                "latitude" => -23.5698,
                "longitude" => -46.0407
            ],
            [
                "name" => "Boa Esperança do Sul, São Paulo",
                "latitude" => -21.9918,
                "longitude" => -48.3906
            ],
            [
                "name" => "Bocaina, São Paulo",
                "latitude" => -22.1365,
                "longitude" => -48.523
            ],
            [
                "name" => "Bofete, São Paulo",
                "latitude" => -23.1055,
                "longitude" => -48.2582
            ],
            [
                "name" => "Boituva, São Paulo",
                "latitude" => -23.2855,
                "longitude" => -47.6786
            ],
            [
                "name" => "Bom Jesus dos Perdões, São Paulo",
                "latitude" => -23.1356,
                "longitude" => -46.4675
            ],
            [
                "name" => "Bom Sucesso de Itararé, São Paulo",
                "latitude" => -24.3155,
                "longitude" => -49.1451
            ],
            [
                "name" => "Borá, São Paulo",
                "latitude" => -22.2696,
                "longitude" => -50.5409
            ],
            [
                "name" => "Boracéia, São Paulo",
                "latitude" => -22.1926,
                "longitude" => -48.7808
            ],
            [
                "name" => "Borborema, São Paulo",
                "latitude" => -21.6214,
                "longitude" => -49.0741
            ],
            [
                "name" => "Borebi, São Paulo",
                "latitude" => -22.5728,
                "longitude" => -48.9707
            ],
            [
                "name" => "Botucatu, São Paulo",
                "latitude" => -22.8837,
                "longitude" => -48.4437
            ],
            [
                "name" => "Bragança Paulista, São Paulo",
                "latitude" => -22.9527,
                "longitude" => -46.5419
            ],
            [
                "name" => "Braúna, São Paulo",
                "latitude" => -21.499,
                "longitude" => -50.3175
            ],
            [
                "name" => "Brejo Alegre, São Paulo",
                "latitude" => -21.1651,
                "longitude" => -50.1861
            ],
            [
                "name" => "Brodowski, São Paulo",
                "latitude" => -20.9845,
                "longitude" => -47.6572
            ],
            [
                "name" => "Brotas, São Paulo",
                "latitude" => -22.2795,
                "longitude" => -48.1251
            ],
            [
                "name" => "Buri, São Paulo",
                "latitude" => -23.7977,
                "longitude" => -48.5958
            ],
            [
                "name" => "Buritama, São Paulo",
                "latitude" => -21.0661,
                "longitude" => -50.1475
            ],
            [
                "name" => "Buritizal, São Paulo",
                "latitude" => -20.1911,
                "longitude" => -47.7096
            ],
            [
                "name" => "Cabrália Paulista, São Paulo",
                "latitude" => -22.4576,
                "longitude" => -49.3393
            ],
            [
                "name" => "Cabreúva, São Paulo",
                "latitude" => -23.3053,
                "longitude" => -47.1362
            ],
            [
                "name" => "Caçapava, São Paulo",
                "latitude" => -23.0992,
                "longitude" => -45.7076
            ],
            [
                "name" => "Cachoeira Paulista, São Paulo",
                "latitude" => -22.6665,
                "longitude" => -45.0154
            ],
            [
                "name" => "Caconde, São Paulo",
                "latitude" => -21.528,
                "longitude" => -46.6437
            ],
            [
                "name" => "Cafelândia, São Paulo",
                "latitude" => -21.8031,
                "longitude" => -49.6092
            ],
            [
                "name" => "Caiabu, São Paulo",
                "latitude" => -22.0127,
                "longitude" => -51.2394
            ],
            [
                "name" => "Caieiras, São Paulo",
                "latitude" => -23.3607,
                "longitude" => -46.7397
            ],
            [
                "name" => "Caiuá, São Paulo",
                "latitude" => -21.8322,
                "longitude" => -51.9969
            ],
            [
                "name" => "Cajamar, São Paulo",
                "latitude" => -23.355,
                "longitude" => -46.8781
            ],
            [
                "name" => "Cajati, São Paulo",
                "latitude" => -24.7324,
                "longitude" => -48.1223
            ],
            [
                "name" => "Cajobi, São Paulo",
                "latitude" => -20.8773,
                "longitude" => -48.8063
            ],
            [
                "name" => "Cajuru, São Paulo",
                "latitude" => -21.2749,
                "longitude" => -47.303
            ],
            [
                "name" => "Campina do Monte Alegre, São Paulo",
                "latitude" => -23.5895,
                "longitude" => -48.4758
            ],
            [
                "name" => "Campinas, São Paulo",
                "latitude" => -22.9053,
                "longitude" => -47.0659
            ],
            [
                "name" => "Campo Limpo Paulista, São Paulo",
                "latitude" => -23.2078,
                "longitude" => -46.7889
            ],
            [
                "name" => "Campos do Jordão, São Paulo",
                "latitude" => -22.7296,
                "longitude" => -45.5833
            ],
            [
                "name" => "Campos Novos Paulista, São Paulo",
                "latitude" => -22.602,
                "longitude" => -49.9987
            ],
            [
                "name" => "Cananéia, São Paulo",
                "latitude" => -25.0144,
                "longitude" => -47.9341
            ],
            [
                "name" => "Canas, São Paulo",
                "latitude" => -22.7003,
                "longitude" => -45.0521
            ],
            [
                "name" => "Cândido Mota, São Paulo",
                "latitude" => -22.7471,
                "longitude" => -50.3873
            ],
            [
                "name" => "Cândido Rodrigues, São Paulo",
                "latitude" => -21.3275,
                "longitude" => -48.6327
            ],
            [
                "name" => "Canitar, São Paulo",
                "latitude" => -23.004,
                "longitude" => -49.7839
            ],
            [
                "name" => "Capão Bonito, São Paulo",
                "latitude" => -24.0113,
                "longitude" => -48.3482
            ],
            [
                "name" => "Capela do Alto, São Paulo",
                "latitude" => -23.4685,
                "longitude" => -47.7388
            ],
            [
                "name" => "Capivari, São Paulo",
                "latitude" => -22.9951,
                "longitude" => -47.5071
            ],
            [
                "name" => "Caraguatatuba, São Paulo",
                "latitude" => -23.6125,
                "longitude" => -45.4125
            ],
            [
                "name" => "Carapicuíba, São Paulo",
                "latitude" => -23.5235,
                "longitude" => -46.8407
            ],
            [
                "name" => "Cardoso, São Paulo",
                "latitude" => -20.08,
                "longitude" => -49.9183
            ],
            [
                "name" => "Casa Branca, São Paulo",
                "latitude" => -21.7708,
                "longitude" => -47.0852
            ],
            [
                "name" => "Cássia dos Coqueiros, São Paulo",
                "latitude" => -21.2801,
                "longitude" => -47.1643
            ],
            [
                "name" => "Castilho, São Paulo",
                "latitude" => -20.8689,
                "longitude" => -51.4884
            ],
            [
                "name" => "Catanduva, São Paulo",
                "latitude" => -21.1314,
                "longitude" => -48.977
            ],
            [
                "name" => "Catiguá, São Paulo",
                "latitude" => -21.0519,
                "longitude" => -49.0616
            ],
            [
                "name" => "Cedral, São Paulo",
                "latitude" => -20.9009,
                "longitude" => -49.2664
            ],
            [
                "name" => "Cerqueira César, São Paulo",
                "latitude" => -23.038,
                "longitude" => -49.1655
            ],
            [
                "name" => "Cerquilho, São Paulo",
                "latitude" => -23.1665,
                "longitude" => -47.7459
            ],
            [
                "name" => "Cesário Lange, São Paulo",
                "latitude" => -23.226,
                "longitude" => -47.9545
            ],
            [
                "name" => "Charqueada, São Paulo",
                "latitude" => -22.5096,
                "longitude" => -47.7755
            ],
            [
                "name" => "Clementina, São Paulo",
                "latitude" => -21.5604,
                "longitude" => -50.4525
            ],
            [
                "name" => "Colina, São Paulo",
                "latitude" => -20.7114,
                "longitude" => -48.5387
            ],
            [
                "name" => "Colômbia, São Paulo",
                "latitude" => -20.1768,
                "longitude" => -48.6865
            ],
            [
                "name" => "Conchal, São Paulo",
                "latitude" => -22.3375,
                "longitude" => -47.1729
            ],
            [
                "name" => "Conchas, São Paulo",
                "latitude" => -23.0154,
                "longitude" => -48.0134
            ],
            [
                "name" => "Cordeirópolis, São Paulo",
                "latitude" => -22.4778,
                "longitude" => -47.4519
            ],
            [
                "name" => "Coroados, São Paulo",
                "latitude" => -21.3521,
                "longitude" => -50.2859
            ],
            [
                "name" => "Coronel Macedo, São Paulo",
                "latitude" => -23.6261,
                "longitude" => -49.31
            ],
            [
                "name" => "Corumbataí, São Paulo",
                "latitude" => -22.2213,
                "longitude" => -47.6215
            ],
            [
                "name" => "Cosmópolis, São Paulo",
                "latitude" => -22.6419,
                "longitude" => -47.1926
            ],
            [
                "name" => "Cosmorama, São Paulo",
                "latitude" => -20.4755,
                "longitude" => -49.7827
            ],
            [
                "name" => "Cotia, São Paulo",
                "latitude" => -23.6022,
                "longitude" => -46.919
            ],
            [
                "name" => "Cravinhos, São Paulo",
                "latitude" => -21.338,
                "longitude" => -47.7324
            ],
            [
                "name" => "Cristais Paulista, São Paulo",
                "latitude" => -20.4036,
                "longitude" => -47.4209
            ],
            [
                "name" => "Cruzália, São Paulo",
                "latitude" => -22.7373,
                "longitude" => -50.7909
            ],
            [
                "name" => "Cruzeiro, São Paulo",
                "latitude" => -22.5728,
                "longitude" => -44.969
            ],
            [
                "name" => "Cubatão, São Paulo",
                "latitude" => -23.8911,
                "longitude" => -46.424
            ],
            [
                "name" => "Cunha, São Paulo",
                "latitude" => -23.0731,
                "longitude" => -44.9576
            ],
            [
                "name" => "Descalvado, São Paulo",
                "latitude" => -21.9002,
                "longitude" => -47.6181
            ],
            [
                "name" => "Diadema, São Paulo",
                "latitude" => -23.6813,
                "longitude" => -46.6205
            ],
            [
                "name" => "Dirce Reis, São Paulo",
                "latitude" => -20.4642,
                "longitude" => -50.6073
            ],
            [
                "name" => "Divinolândia, São Paulo",
                "latitude" => -21.6637,
                "longitude" => -46.7361
            ],
            [
                "name" => "Dobrada, São Paulo",
                "latitude" => -21.5155,
                "longitude" => -48.3935
            ],
            [
                "name" => "Dois Córregos, São Paulo",
                "latitude" => -22.3673,
                "longitude" => -48.3819
            ],
            [
                "name" => "Dolcinópolis, São Paulo",
                "latitude" => -20.124,
                "longitude" => -50.5149
            ],
            [
                "name" => "Dourado, São Paulo",
                "latitude" => -22.1044,
                "longitude" => -48.3178
            ],
            [
                "name" => "Dracena, São Paulo",
                "latitude" => -21.4843,
                "longitude" => -51.535
            ],
            [
                "name" => "Duartina, São Paulo",
                "latitude" => -22.4146,
                "longitude" => -49.4084
            ],
            [
                "name" => "Dumont, São Paulo",
                "latitude" => -21.2324,
                "longitude" => -47.9756
            ],
            [
                "name" => "Echaporã, São Paulo",
                "latitude" => -22.4326,
                "longitude" => -50.2038
            ],
            [
                "name" => "Eldorado, São Paulo",
                "latitude" => -24.5281,
                "longitude" => -48.1141
            ],
            [
                "name" => "Elias Fausto, São Paulo",
                "latitude" => -23.0428,
                "longitude" => -47.3682
            ],
            [
                "name" => "Elisiário, São Paulo",
                "latitude" => -21.1678,
                "longitude" => -49.1146
            ],
            [
                "name" => "Embaúba, São Paulo",
                "latitude" => -20.9796,
                "longitude" => -48.8325
            ],
            [
                "name" => "Embu das Artes, São Paulo",
                "latitude" => -23.6437,
                "longitude" => -46.8579
            ],
            [
                "name" => "Embu-Guaçu, São Paulo",
                "latitude" => -23.8297,
                "longitude" => -46.8136
            ],
            [
                "name" => "Emilianópolis, São Paulo",
                "latitude" => -21.8314,
                "longitude" => -51.4832
            ],
            [
                "name" => "Engenheiro Coelho, São Paulo",
                "latitude" => -22.4836,
                "longitude" => -47.211
            ],
            [
                "name" => "Espírito Santo do Pinhal, São Paulo",
                "latitude" => -22.1909,
                "longitude" => -46.7477
            ],
            [
                "name" => "Espírito Santo do Turvo, São Paulo",
                "latitude" => -22.6925,
                "longitude" => -49.4341
            ],
            [
                "name" => "Estrela d'Oeste, São Paulo",
                "latitude" => -20.2875,
                "longitude" => -50.4049
            ],
            [
                "name" => "Estrela do Norte, São Paulo",
                "latitude" => -22.4859,
                "longitude" => -51.6632
            ],
            [
                "name" => "Euclides da Cunha Paulista, São Paulo",
                "latitude" => -22.5545,
                "longitude" => -52.5928
            ],
            [
                "name" => "Fartura, São Paulo",
                "latitude" => -23.3916,
                "longitude" => -49.5124
            ],
            [
                "name" => "Fernandópolis, São Paulo",
                "latitude" => -20.2806,
                "longitude" => -50.2471
            ],
            [
                "name" => "Fernando Prestes, São Paulo",
                "latitude" => -21.2661,
                "longitude" => -48.6874
            ],
            [
                "name" => "Fernão, São Paulo",
                "latitude" => -22.3607,
                "longitude" => -49.5187
            ],
            [
                "name" => "Ferraz de Vasconcelos, São Paulo",
                "latitude" => -23.5411,
                "longitude" => -46.371
            ],
            [
                "name" => "Flora Rica, São Paulo",
                "latitude" => -21.6727,
                "longitude" => -51.3821
            ],
            [
                "name" => "Floreal, São Paulo",
                "latitude" => -20.6752,
                "longitude" => -50.1513
            ],
            [
                "name" => "Flórida Paulista, São Paulo",
                "latitude" => -21.6127,
                "longitude" => -51.1724
            ],
            [
                "name" => "Florínia, São Paulo",
                "latitude" => -22.868,
                "longitude" => -50.6814
            ],
            [
                "name" => "Franca, São Paulo",
                "latitude" => -20.5352,
                "longitude" => -47.4039
            ],
            [
                "name" => "Francisco Morato, São Paulo",
                "latitude" => -23.2792,
                "longitude" => -46.7448
            ],
            [
                "name" => "Franco da Rocha, São Paulo",
                "latitude" => -23.3229,
                "longitude" => -46.729
            ],
            [
                "name" => "Gabriel Monteiro, São Paulo",
                "latitude" => -21.5294,
                "longitude" => -50.5573
            ],
            [
                "name" => "Gália, São Paulo",
                "latitude" => -22.2918,
                "longitude" => -49.5504
            ],
            [
                "name" => "Garça, São Paulo",
                "latitude" => -22.2125,
                "longitude" => -49.6546
            ],
            [
                "name" => "Gastão Vidigal, São Paulo",
                "latitude" => -20.7948,
                "longitude" => -50.1912
            ],
            [
                "name" => "Gavião Peixoto, São Paulo",
                "latitude" => -21.8367,
                "longitude" => -48.4957
            ],
            [
                "name" => "General Salgado, São Paulo",
                "latitude" => -20.6485,
                "longitude" => -50.364
            ],
            [
                "name" => "Getulina, São Paulo",
                "latitude" => -21.7961,
                "longitude" => -49.9312
            ],
            [
                "name" => "Glicério, São Paulo",
                "latitude" => -21.3812,
                "longitude" => -50.2123
            ],
            [
                "name" => "Guaiçara, São Paulo",
                "latitude" => -21.6195,
                "longitude" => -49.8013
            ],
            [
                "name" => "Guaimbê, São Paulo",
                "latitude" => -21.9091,
                "longitude" => -49.8986
            ],
            [
                "name" => "Guaíra, São Paulo",
                "latitude" => -20.3196,
                "longitude" => -48.312
            ],
            [
                "name" => "Guapiaçu, São Paulo",
                "latitude" => -20.7959,
                "longitude" => -49.2172
            ],
            [
                "name" => "Guapiara, São Paulo",
                "latitude" => -24.1892,
                "longitude" => -48.5295
            ],
            [
                "name" => "Guará, São Paulo",
                "latitude" => -20.4302,
                "longitude" => -47.8236
            ],
            [
                "name" => "Guaraçaí, São Paulo",
                "latitude" => -21.0292,
                "longitude" => -51.2119
            ],
            [
                "name" => "Guaraci, São Paulo",
                "latitude" => -20.4977,
                "longitude" => -48.9391
            ],
            [
                "name" => "Guarani d'Oeste, São Paulo",
                "latitude" => -20.0746,
                "longitude" => -50.3411
            ],
            [
                "name" => "Guarantã, São Paulo",
                "latitude" => -21.8942,
                "longitude" => -49.5914
            ],
            [
                "name" => "Guararapes, São Paulo",
                "latitude" => -21.2544,
                "longitude" => -50.6453
            ],
            [
                "name" => "Guararema, São Paulo",
                "latitude" => -23.4112,
                "longitude" => -46.0369
            ],
            [
                "name" => "Guaratinguetá, São Paulo",
                "latitude" => -22.8075,
                "longitude" => -45.1938
            ],
            [
                "name" => "Guareí, São Paulo",
                "latitude" => -23.3714,
                "longitude" => -48.1837
            ],
            [
                "name" => "Guariba, São Paulo",
                "latitude" => -21.3594,
                "longitude" => -48.2316
            ],
            [
                "name" => "Guarujá, São Paulo",
                "latitude" => -23.9888,
                "longitude" => -46.258
            ],
            [
                "name" => "Guarulhos, São Paulo",
                "latitude" => -23.4538,
                "longitude" => -46.5333
            ],
            [
                "name" => "Guatapará, São Paulo",
                "latitude" => -21.4944,
                "longitude" => -48.0356
            ],
            [
                "name" => "Guzolândia, São Paulo",
                "latitude" => -20.6467,
                "longitude" => -50.6645
            ],
            [
                "name" => "Herculândia, São Paulo",
                "latitude" => -22.0038,
                "longitude" => -50.3907
            ],
            [
                "name" => "Holambra, São Paulo",
                "latitude" => -22.6405,
                "longitude" => -47.0487
            ],
            [
                "name" => "Hortolândia, São Paulo",
                "latitude" => -22.8529,
                "longitude" => -47.2143
            ],
            [
                "name" => "Iacanga, São Paulo",
                "latitude" => -21.8896,
                "longitude" => -49.031
            ],
            [
                "name" => "Iacri, São Paulo",
                "latitude" => -21.8572,
                "longitude" => -50.6932
            ],
            [
                "name" => "Iaras, São Paulo",
                "latitude" => -22.8682,
                "longitude" => -49.1634
            ],
            [
                "name" => "Ibaté, São Paulo",
                "latitude" => -21.9584,
                "longitude" => -47.9882
            ],
            [
                "name" => "Ibirá, São Paulo",
                "latitude" => -21.083,
                "longitude" => -49.2448
            ],
            [
                "name" => "Ibirarema, São Paulo",
                "latitude" => -22.8185,
                "longitude" => -50.0739
            ],
            [
                "name" => "Ibitinga, São Paulo",
                "latitude" => -21.7562,
                "longitude" => -48.8319
            ],
            [
                "name" => "Ibiúna, São Paulo",
                "latitude" => -23.6596,
                "longitude" => -47.223
            ],
            [
                "name" => "Icém, São Paulo",
                "latitude" => -20.3391,
                "longitude" => -49.1915
            ],
            [
                "name" => "Iepê, São Paulo",
                "latitude" => -22.6602,
                "longitude" => -51.0779
            ],
            [
                "name" => "Igaraçu do Tietê, São Paulo",
                "latitude" => -22.509,
                "longitude" => -48.5597
            ],
            [
                "name" => "Igarapava, São Paulo",
                "latitude" => -20.0407,
                "longitude" => -47.7466
            ],
            [
                "name" => "Igaratá, São Paulo",
                "latitude" => -23.2037,
                "longitude" => -46.157
            ],
            [
                "name" => "Iguape, São Paulo",
                "latitude" => -24.699,
                "longitude" => -47.5537
            ],
            [
                "name" => "Ilhabela, São Paulo",
                "latitude" => -23.7785,
                "longitude" => -45.3552
            ],
            [
                "name" => "Ilha Comprida, São Paulo",
                "latitude" => -24.7307,
                "longitude" => -47.5383
            ],
            [
                "name" => "Ilha Solteira, São Paulo",
                "latitude" => -20.4326,
                "longitude" => -51.3426
            ],
            [
                "name" => "Indaiatuba, São Paulo",
                "latitude" => -23.0816,
                "longitude" => -47.2101
            ],
            [
                "name" => "Indiana, São Paulo",
                "latitude" => -22.1738,
                "longitude" => -51.2555
            ],
            [
                "name" => "Indiaporã, São Paulo",
                "latitude" => -19.979,
                "longitude" => -50.2909
            ],
            [
                "name" => "Inúbia Paulista, São Paulo",
                "latitude" => -21.7695,
                "longitude" => -50.9633
            ],
            [
                "name" => "Ipaussu, São Paulo",
                "latitude" => -23.0575,
                "longitude" => -49.6279
            ],
            [
                "name" => "Iperó, São Paulo",
                "latitude" => -23.3513,
                "longitude" => -47.6927
            ],
            [
                "name" => "Ipeúna, São Paulo",
                "latitude" => -22.4355,
                "longitude" => -47.7151
            ],
            [
                "name" => "Ipiguá, São Paulo",
                "latitude" => -20.6557,
                "longitude" => -49.3842
            ],
            [
                "name" => "Iporanga, São Paulo",
                "latitude" => -24.5847,
                "longitude" => -48.5971
            ],
            [
                "name" => "Ipuã, São Paulo",
                "latitude" => -20.4438,
                "longitude" => -48.0129
            ],
            [
                "name" => "Iracemápolis, São Paulo",
                "latitude" => -22.5832,
                "longitude" => -47.523
            ],
            [
                "name" => "Irapuã, São Paulo",
                "latitude" => -21.2768,
                "longitude" => -49.4164
            ],
            [
                "name" => "Irapuru, São Paulo",
                "latitude" => -21.5684,
                "longitude" => -51.3472
            ],
            [
                "name" => "Itaberá, São Paulo",
                "latitude" => -23.8638,
                "longitude" => -49.14
            ],
            [
                "name" => "Itaí, São Paulo",
                "latitude" => -23.4213,
                "longitude" => -49.092
            ],
            [
                "name" => "Itajobi, São Paulo",
                "latitude" => -21.3123,
                "longitude" => -49.0629
            ],
            [
                "name" => "Itaju, São Paulo",
                "latitude" => -21.9857,
                "longitude" => -48.8116
            ],
            [
                "name" => "Itanhaém, São Paulo",
                "latitude" => -24.1736,
                "longitude" => -46.788
            ],
            [
                "name" => "Itaóca, São Paulo",
                "latitude" => -24.6393,
                "longitude" => -48.8413
            ],
            [
                "name" => "Itapecerica da Serra, São Paulo",
                "latitude" => -23.7161,
                "longitude" => -46.8572
            ],
            [
                "name" => "Itapetininga, São Paulo",
                "latitude" => -23.5886,
                "longitude" => -48.0483
            ],
            [
                "name" => "Itapeva, São Paulo",
                "latitude" => -23.9788,
                "longitude" => -48.8764
            ],
            [
                "name" => "Itapevi, São Paulo",
                "latitude" => -23.5488,
                "longitude" => -46.9327
            ],
            [
                "name" => "Itapira, São Paulo",
                "latitude" => -22.4357,
                "longitude" => -46.8224
            ],
            [
                "name" => "Itapirapuã Paulista, São Paulo",
                "latitude" => -24.572,
                "longitude" => -49.1661
            ],
            [
                "name" => "Itápolis, São Paulo",
                "latitude" => -21.5942,
                "longitude" => -48.8149
            ],
            [
                "name" => "Itaporanga, São Paulo",
                "latitude" => -23.7043,
                "longitude" => -49.4819
            ],
            [
                "name" => "Itapuí, São Paulo",
                "latitude" => -22.2324,
                "longitude" => -48.7197
            ],
            [
                "name" => "Itapura, São Paulo",
                "latitude" => -20.6419,
                "longitude" => -51.5063
            ],
            [
                "name" => "Itaquaquecetuba, São Paulo",
                "latitude" => -23.4835,
                "longitude" => -46.3457
            ],
            [
                "name" => "Itararé, São Paulo",
                "latitude" => -24.1085,
                "longitude" => -49.3352
            ],
            [
                "name" => "Itariri, São Paulo",
                "latitude" => -24.2834,
                "longitude" => -47.1736
            ],
            [
                "name" => "Itatiba, São Paulo",
                "latitude" => -23.0035,
                "longitude" => -46.8464
            ],
            [
                "name" => "Itatinga, São Paulo",
                "latitude" => -23.1047,
                "longitude" => -48.6157
            ],
            [
                "name" => "Itirapina, São Paulo",
                "latitude" => -22.2562,
                "longitude" => -47.8166
            ],
            [
                "name" => "Itirapuã, São Paulo",
                "latitude" => -20.6416,
                "longitude" => -47.2194
            ],
            [
                "name" => "Itobi, São Paulo",
                "latitude" => -21.7309,
                "longitude" => -46.9743
            ],
            [
                "name" => "Itu, São Paulo",
                "latitude" => -23.2544,
                "longitude" => -47.2927
            ],
            [
                "name" => "Itupeva, São Paulo",
                "latitude" => -23.1526,
                "longitude" => -47.0593
            ],
            [
                "name" => "Ituverava, São Paulo",
                "latitude" => -20.3355,
                "longitude" => -47.7902
            ],
            [
                "name" => "Jaborandi, São Paulo",
                "latitude" => -20.6884,
                "longitude" => -48.4112
            ],
            [
                "name" => "Jaboticabal, São Paulo",
                "latitude" => -21.252,
                "longitude" => -48.3252
            ],
            [
                "name" => "Jacareí, São Paulo",
                "latitude" => -23.2983,
                "longitude" => -45.9658
            ],
            [
                "name" => "Jaci, São Paulo",
                "latitude" => -20.8805,
                "longitude" => -49.5797
            ],
            [
                "name" => "Jacupiranga, São Paulo",
                "latitude" => -24.6963,
                "longitude" => -48.0064
            ],
            [
                "name" => "Jaguariúna, São Paulo",
                "latitude" => -22.7037,
                "longitude" => -46.9851
            ],
            [
                "name" => "Jales, São Paulo",
                "latitude" => -20.2672,
                "longitude" => -50.5494
            ],
            [
                "name" => "Jambeiro, São Paulo",
                "latitude" => -23.2522,
                "longitude" => -45.6942
            ],
            [
                "name" => "Jandira, São Paulo",
                "latitude" => -23.5275,
                "longitude" => -46.9023
            ],
            [
                "name" => "Jardinópolis, São Paulo",
                "latitude" => -21.0176,
                "longitude" => -47.7606
            ],
            [
                "name" => "Jarinu, São Paulo",
                "latitude" => -23.1039,
                "longitude" => -46.728
            ],
            [
                "name" => "Jaú, São Paulo",
                "latitude" => -22.2936,
                "longitude" => -48.5592
            ],
            [
                "name" => "Jeriquara, São Paulo",
                "latitude" => -20.3116,
                "longitude" => -47.5918
            ],
            [
                "name" => "Joanópolis, São Paulo",
                "latitude" => -22.927,
                "longitude" => -46.2741
            ],
            [
                "name" => "João Ramalho, São Paulo",
                "latitude" => -22.2473,
                "longitude" => -50.7694
            ],
            [
                "name" => "José Bonifácio, São Paulo",
                "latitude" => -21.0551,
                "longitude" => -49.6892
            ],
            [
                "name" => "Júlio Mesquita, São Paulo",
                "latitude" => -22.0112,
                "longitude" => -49.7873
            ],
            [
                "name" => "Jumirim, São Paulo",
                "latitude" => -23.0884,
                "longitude" => -47.7868
            ],
            [
                "name" => "Jundiaí, São Paulo",
                "latitude" => -23.1852,
                "longitude" => -46.8974
            ],
            [
                "name" => "Junqueirópolis, São Paulo",
                "latitude" => -21.5103,
                "longitude" => -51.4342
            ],
            [
                "name" => "Juquiá, São Paulo",
                "latitude" => -24.3101,
                "longitude" => -47.6426
            ],
            [
                "name" => "Juquitiba, São Paulo",
                "latitude" => -23.9244,
                "longitude" => -47.0653
            ],
            [
                "name" => "Lagoinha, São Paulo",
                "latitude" => -23.0846,
                "longitude" => -45.1944
            ],
            [
                "name" => "Laranjal Paulista, São Paulo",
                "latitude" => -23.0506,
                "longitude" => -47.8375
            ],
            [
                "name" => "Lavínia, São Paulo",
                "latitude" => -21.1639,
                "longitude" => -51.0412
            ],
            [
                "name" => "Lavrinhas, São Paulo",
                "latitude" => -22.57,
                "longitude" => -44.9024
            ],
            [
                "name" => "Leme, São Paulo",
                "latitude" => -22.1809,
                "longitude" => -47.3841
            ],
            [
                "name" => "Lençóis Paulista, São Paulo",
                "latitude" => -22.6027,
                "longitude" => -48.8037
            ],
            [
                "name" => "Limeira, São Paulo",
                "latitude" => -22.566,
                "longitude" => -47.397
            ],
            [
                "name" => "Lindóia, São Paulo",
                "latitude" => -22.5226,
                "longitude" => -46.65
            ],
            [
                "name" => "Lins, São Paulo",
                "latitude" => -21.6718,
                "longitude" => -49.7526
            ],
            [
                "name" => "Lorena, São Paulo",
                "latitude" => -22.7334,
                "longitude" => -45.1197
            ],
            [
                "name" => "Lourdes, São Paulo",
                "latitude" => -20.966,
                "longitude" => -50.2263
            ],
            [
                "name" => "Louveira, São Paulo",
                "latitude" => -23.0856,
                "longitude" => -46.9484
            ],
            [
                "name" => "Lucélia, São Paulo",
                "latitude" => -21.7182,
                "longitude" => -51.0215
            ],
            [
                "name" => "Lucianópolis, São Paulo",
                "latitude" => -22.4294,
                "longitude" => -49.522
            ],
            [
                "name" => "Luís Antônio, São Paulo",
                "latitude" => -21.55,
                "longitude" => -47.7801
            ],
            [
                "name" => "Luiziânia, São Paulo",
                "latitude" => -21.6737,
                "longitude" => -50.3294
            ],
            [
                "name" => "Lupércio, São Paulo",
                "latitude" => -22.4146,
                "longitude" => -49.818
            ],
            [
                "name" => "Lutécia, São Paulo",
                "latitude" => -22.3384,
                "longitude" => -50.394
            ],
            [
                "name" => "Macatuba, São Paulo",
                "latitude" => -22.5002,
                "longitude" => -48.7102
            ],
            [
                "name" => "Macaubal, São Paulo",
                "latitude" => -20.8022,
                "longitude" => -49.9687
            ],
            [
                "name" => "Macedônia, São Paulo",
                "latitude" => -20.1444,
                "longitude" => -50.1973
            ],
            [
                "name" => "Magda, São Paulo",
                "latitude" => -20.6445,
                "longitude" => -50.2305
            ],
            [
                "name" => "Mairinque, São Paulo",
                "latitude" => -23.5398,
                "longitude" => -47.185
            ],
            [
                "name" => "Mairiporã, São Paulo",
                "latitude" => -23.3171,
                "longitude" => -46.5897
            ],
            [
                "name" => "Manduri, São Paulo",
                "latitude" => -23.0056,
                "longitude" => -49.3202
            ],
            [
                "name" => "Marabá Paulista, São Paulo",
                "latitude" => -22.1068,
                "longitude" => -51.9617
            ],
            [
                "name" => "Maracaí, São Paulo",
                "latitude" => -22.6149,
                "longitude" => -50.6713
            ],
            [
                "name" => "Marapoama, São Paulo",
                "latitude" => -21.2587,
                "longitude" => -49.13
            ],
            [
                "name" => "Mariápolis, São Paulo",
                "latitude" => -21.7959,
                "longitude" => -51.1824
            ],
            [
                "name" => "Marília, São Paulo",
                "latitude" => -22.2171,
                "longitude" => -49.9501
            ],
            [
                "name" => "Marinópolis, São Paulo",
                "latitude" => -20.4389,
                "longitude" => -50.8254
            ],
            [
                "name" => "Martinópolis, São Paulo",
                "latitude" => -22.1462,
                "longitude" => -51.1709
            ],
            [
                "name" => "Matão, São Paulo",
                "latitude" => -21.6025,
                "longitude" => -48.364
            ],
            [
                "name" => "Mauá, São Paulo",
                "latitude" => -23.6677,
                "longitude" => -46.4613
            ],
            [
                "name" => "Mendonça, São Paulo",
                "latitude" => -21.1757,
                "longitude" => -49.5791
            ],
            [
                "name" => "Meridiano, São Paulo",
                "latitude" => -20.3579,
                "longitude" => -50.1811
            ],
            [
                "name" => "Mesópolis, São Paulo",
                "latitude" => -19.9684,
                "longitude" => -50.6326
            ],
            [
                "name" => "Miguelópolis, São Paulo",
                "latitude" => -20.1796,
                "longitude" => -48.031
            ],
            [
                "name" => "Mineiros do Tietê, São Paulo",
                "latitude" => -22.412,
                "longitude" => -48.451
            ],
            [
                "name" => "Miracatu, São Paulo",
                "latitude" => -24.2766,
                "longitude" => -47.4625
            ],
            [
                "name" => "Mira Estrela, São Paulo",
                "latitude" => -19.9789,
                "longitude" => -50.139
            ],
            [
                "name" => "Mirandópolis, São Paulo",
                "latitude" => -21.1313,
                "longitude" => -51.1035
            ],
            [
                "name" => "Mirante do Paranapanema, São Paulo",
                "latitude" => -22.2904,
                "longitude" => -51.9084
            ],
            [
                "name" => "Mirassol, São Paulo",
                "latitude" => -20.8169,
                "longitude" => -49.5206
            ],
            [
                "name" => "Mirassolândia, São Paulo",
                "latitude" => -20.6179,
                "longitude" => -49.4617
            ],
            [
                "name" => "Mococa, São Paulo",
                "latitude" => -21.4647,
                "longitude" => -47.0024
            ],
            [
                "name" => "Mogi das Cruzes, São Paulo",
                "latitude" => -23.5208,
                "longitude" => -46.1854
            ],
            [
                "name" => "Mogi Guaçu, São Paulo",
                "latitude" => -22.3675,
                "longitude" => -46.9428
            ],
            [
                "name" => "Mogi Mirim, São Paulo",
                "latitude" => -22.4332,
                "longitude" => -46.9532
            ],
            [
                "name" => "Mombuca, São Paulo",
                "latitude" => -22.9285,
                "longitude" => -47.559
            ],
            [
                "name" => "Monções, São Paulo",
                "latitude" => -20.8509,
                "longitude" => -50.0975
            ],
            [
                "name" => "Mongaguá, São Paulo",
                "latitude" => -24.0809,
                "longitude" => -46.6265
            ],
            [
                "name" => "Monte Alegre do Sul, São Paulo",
                "latitude" => -22.6817,
                "longitude" => -46.681
            ],
            [
                "name" => "Monte Alto, São Paulo",
                "latitude" => -21.2655,
                "longitude" => -48.4971
            ],
            [
                "name" => "Monte Aprazível, São Paulo",
                "latitude" => -20.768,
                "longitude" => -49.7184
            ],
            [
                "name" => "Monte Azul Paulista, São Paulo",
                "latitude" => -20.9065,
                "longitude" => -48.6387
            ],
            [
                "name" => "Monte Castelo, São Paulo",
                "latitude" => -21.2981,
                "longitude" => -51.5679
            ],
            [
                "name" => "Monteiro Lobato, São Paulo",
                "latitude" => -22.9544,
                "longitude" => -45.8407
            ],
            [
                "name" => "Monte Mor, São Paulo",
                "latitude" => -22.945,
                "longitude" => -47.3122
            ],
            [
                "name" => "Morro Agudo, São Paulo",
                "latitude" => -20.7288,
                "longitude" => -48.0581
            ],
            [
                "name" => "Morungaba, São Paulo",
                "latitude" => -22.8811,
                "longitude" => -46.7896
            ],
            [
                "name" => "Motuca, São Paulo",
                "latitude" => -21.5103,
                "longitude" => -48.1538
            ],
            [
                "name" => "Murutinga do Sul, São Paulo",
                "latitude" => -20.9908,
                "longitude" => -51.2774
            ],
            [
                "name" => "Nantes, São Paulo",
                "latitude" => -22.6156,
                "longitude" => -51.24
            ],
            [
                "name" => "Narandiba, São Paulo",
                "latitude" => -22.4057,
                "longitude" => -51.5274
            ],
            [
                "name" => "Natividade da Serra, São Paulo",
                "latitude" => -23.3707,
                "longitude" => -45.4468
            ],
            [
                "name" => "Nazaré Paulista, São Paulo",
                "latitude" => -23.1747,
                "longitude" => -46.3983
            ],
            [
                "name" => "Neves Paulista, São Paulo",
                "latitude" => -20.843,
                "longitude" => -49.6358
            ],
            [
                "name" => "Nhandeara, São Paulo",
                "latitude" => -20.6945,
                "longitude" => -50.0436
            ],
            [
                "name" => "Nipoã, São Paulo",
                "latitude" => -20.9114,
                "longitude" => -49.7833
            ],
            [
                "name" => "Nova Aliança, São Paulo",
                "latitude" => -21.0156,
                "longitude" => -49.4986
            ],
            [
                "name" => "Nova Campina, São Paulo",
                "latitude" => -24.1224,
                "longitude" => -48.9022
            ],
            [
                "name" => "Nova Canaã Paulista, São Paulo",
                "latitude" => -20.3836,
                "longitude" => -50.9483
            ],
            [
                "name" => "Nova Castilho, São Paulo",
                "latitude" => -20.7615,
                "longitude" => -50.3477
            ],
            [
                "name" => "Nova Europa, São Paulo",
                "latitude" => -21.7765,
                "longitude" => -48.5705
            ],
            [
                "name" => "Nova Granada, São Paulo",
                "latitude" => -20.5321,
                "longitude" => -49.3123
            ],
            [
                "name" => "Nova Guataporanga, São Paulo",
                "latitude" => -21.332,
                "longitude" => -51.6447
            ],
            [
                "name" => "Nova Independência, São Paulo",
                "latitude" => -21.1026,
                "longitude" => -51.4905
            ],
            [
                "name" => "Novais, São Paulo",
                "latitude" => -20.9893,
                "longitude" => -48.9141
            ],
            [
                "name" => "Nova Luzitânia, São Paulo",
                "latitude" => -20.856,
                "longitude" => -50.2617
            ],
            [
                "name" => "Nova Odessa, São Paulo",
                "latitude" => -22.7832,
                "longitude" => -47.2941
            ],
            [
                "name" => "Novo Horizonte, São Paulo",
                "latitude" => -21.4651,
                "longitude" => -49.2234
            ],
            [
                "name" => "Nuporanga, São Paulo",
                "latitude" => -20.7296,
                "longitude" => -47.7429
            ],
            [
                "name" => "Ocauçu, São Paulo",
                "latitude" => -22.438,
                "longitude" => -49.922
            ],
            [
                "name" => "Óleo, São Paulo",
                "latitude" => -22.9435,
                "longitude" => -49.3419
            ],
            [
                "name" => "Olímpia, São Paulo",
                "latitude" => -20.7366,
                "longitude" => -48.9106
            ],
            [
                "name" => "Onda Verde, São Paulo",
                "latitude" => -20.6042,
                "longitude" => -49.2929
            ],
            [
                "name" => "Oriente, São Paulo",
                "latitude" => -22.1549,
                "longitude" => -50.0971
            ],
            [
                "name" => "Orindiúva, São Paulo",
                "latitude" => -20.1861,
                "longitude" => -49.3464
            ],
            [
                "name" => "Orlândia, São Paulo",
                "latitude" => -20.7169,
                "longitude" => -47.8852
            ],
            [
                "name" => "Osasco, São Paulo",
                "latitude" => -23.5324,
                "longitude" => -46.7916
            ],
            [
                "name" => "Oscar Bressane, São Paulo",
                "latitude" => -22.3149,
                "longitude" => -50.2811
            ],
            [
                "name" => "Osvaldo Cruz, São Paulo",
                "latitude" => -21.7968,
                "longitude" => -50.8793
            ],
            [
                "name" => "Ourinhos, São Paulo",
                "latitude" => -22.9797,
                "longitude" => -49.8697
            ],
            [
                "name" => "Ouroeste, São Paulo",
                "latitude" => -20.0061,
                "longitude" => -50.3768
            ],
            [
                "name" => "Ouro Verde, São Paulo",
                "latitude" => -21.4872,
                "longitude" => -51.7024
            ],
            [
                "name" => "Pacaembu, São Paulo",
                "latitude" => -21.5627,
                "longitude" => -51.2654
            ],
            [
                "name" => "Palestina, São Paulo",
                "latitude" => -20.39,
                "longitude" => -49.4309
            ],
            [
                "name" => "Palmares Paulista, São Paulo",
                "latitude" => -21.0854,
                "longitude" => -48.8037
            ],
            [
                "name" => "Palmeira d'Oeste, São Paulo",
                "latitude" => -20.4148,
                "longitude" => -50.7632
            ],
            [
                "name" => "Palmital, São Paulo",
                "latitude" => -22.7858,
                "longitude" => -50.218
            ],
            [
                "name" => "Panorama, São Paulo",
                "latitude" => -21.354,
                "longitude" => -51.8562
            ],
            [
                "name" => "Paraguaçu Paulista, São Paulo",
                "latitude" => -22.4114,
                "longitude" => -50.5732
            ],
            [
                "name" => "Paraibuna, São Paulo",
                "latitude" => -23.3872,
                "longitude" => -45.6639
            ],
            [
                "name" => "Paraíso, São Paulo",
                "latitude" => -21.0159,
                "longitude" => -48.7761
            ],
            [
                "name" => "Paranapanema, São Paulo",
                "latitude" => -23.3862,
                "longitude" => -48.7214
            ],
            [
                "name" => "Paranapuã, São Paulo",
                "latitude" => -20.1048,
                "longitude" => -50.5886
            ],
            [
                "name" => "Parapuã, São Paulo",
                "latitude" => -21.7792,
                "longitude" => -50.7949
            ],
            [
                "name" => "Pardinho, São Paulo",
                "latitude" => -23.0841,
                "longitude" => -48.3679
            ],
            [
                "name" => "Pariquera-Açu, São Paulo",
                "latitude" => -24.7147,
                "longitude" => -47.8742
            ],
            [
                "name" => "Parisi, São Paulo",
                "latitude" => -20.3034,
                "longitude" => -50.0163
            ],
            [
                "name" => "Patrocínio Paulista, São Paulo",
                "latitude" => -20.6384,
                "longitude" => -47.2801
            ],
            [
                "name" => "Paulicéia, São Paulo",
                "latitude" => -21.3153,
                "longitude" => -51.8321
            ],
            [
                "name" => "Paulínia, São Paulo",
                "latitude" => -22.7542,
                "longitude" => -47.1488
            ],
            [
                "name" => "Paulistânia, São Paulo",
                "latitude" => -22.5768,
                "longitude" => -49.4008
            ],
            [
                "name" => "Paulo de Faria, São Paulo",
                "latitude" => -20.0296,
                "longitude" => -49.4
            ],
            [
                "name" => "Pederneiras, São Paulo",
                "latitude" => -22.3511,
                "longitude" => -48.7781
            ],
            [
                "name" => "Pedra Bela, São Paulo",
                "latitude" => -22.7902,
                "longitude" => -46.4455
            ],
            [
                "name" => "Pedranópolis, São Paulo",
                "latitude" => -20.2474,
                "longitude" => -50.1129
            ],
            [
                "name" => "Pedregulho, São Paulo",
                "latitude" => -20.2535,
                "longitude" => -47.4775
            ],
            [
                "name" => "Pedreira, São Paulo",
                "latitude" => -22.7413,
                "longitude" => -46.8948
            ],
            [
                "name" => "Pedrinhas Paulista, São Paulo",
                "latitude" => -22.8174,
                "longitude" => -50.7933
            ],
            [
                "name" => "Pedro de Toledo, São Paulo",
                "latitude" => -24.2764,
                "longitude" => -47.2354
            ],
            [
                "name" => "Penápolis, São Paulo",
                "latitude" => -21.4148,
                "longitude" => -50.0769
            ],
            [
                "name" => "Pereira Barreto, São Paulo",
                "latitude" => -20.6368,
                "longitude" => -51.1123
            ],
            [
                "name" => "Pereiras, São Paulo",
                "latitude" => -23.0804,
                "longitude" => -47.972
            ],
            [
                "name" => "Peruíbe, São Paulo",
                "latitude" => -24.312,
                "longitude" => -47.0012
            ],
            [
                "name" => "Piacatu, São Paulo",
                "latitude" => -21.5921,
                "longitude" => -50.6003
            ],
            [
                "name" => "Piedade, São Paulo",
                "latitude" => -23.7139,
                "longitude" => -47.4256
            ],
            [
                "name" => "Pilar do Sul, São Paulo",
                "latitude" => -23.8077,
                "longitude" => -47.7222
            ],
            [
                "name" => "Pindamonhangaba, São Paulo",
                "latitude" => -22.9246,
                "longitude" => -45.4613
            ],
            [
                "name" => "Pindorama, São Paulo",
                "latitude" => -21.1853,
                "longitude" => -48.9086
            ],
            [
                "name" => "Pinhalzinho, São Paulo",
                "latitude" => -22.7811,
                "longitude" => -46.5897
            ],
            [
                "name" => "Piquerobi, São Paulo",
                "latitude" => -21.8747,
                "longitude" => -51.7282
            ],
            [
                "name" => "Piquete, São Paulo",
                "latitude" => -22.6069,
                "longitude" => -45.1869
            ],
            [
                "name" => "Piracaia, São Paulo",
                "latitude" => -23.0525,
                "longitude" => -46.3594
            ],
            [
                "name" => "Piracicaba, São Paulo",
                "latitude" => -22.7338,
                "longitude" => -47.6476
            ],
            [
                "name" => "Piraju, São Paulo",
                "latitude" => -23.1981,
                "longitude" => -49.3803
            ],
            [
                "name" => "Pirajuí, São Paulo",
                "latitude" => -21.999,
                "longitude" => -49.4608
            ],
            [
                "name" => "Pirangi, São Paulo",
                "latitude" => -21.0886,
                "longitude" => -48.6607
            ],
            [
                "name" => "Pirapora do Bom Jesus, São Paulo",
                "latitude" => -23.3965,
                "longitude" => -46.9991
            ],
            [
                "name" => "Pirapozinho, São Paulo",
                "latitude" => -22.2711,
                "longitude" => -51.4976
            ],
            [
                "name" => "Pirassununga, São Paulo",
                "latitude" => -21.996,
                "longitude" => -47.4257
            ],
            [
                "name" => "Piratininga, São Paulo",
                "latitude" => -22.4142,
                "longitude" => -49.1339
            ],
            [
                "name" => "Pitangueiras, São Paulo",
                "latitude" => -21.0132,
                "longitude" => -48.221
            ],
            [
                "name" => "Planalto, São Paulo",
                "latitude" => -21.0342,
                "longitude" => -49.933
            ],
            [
                "name" => "Platina, São Paulo",
                "latitude" => -22.6371,
                "longitude" => -50.2104
            ],
            [
                "name" => "Poá, São Paulo",
                "latitude" => -23.5333,
                "longitude" => -46.3473
            ],
            [
                "name" => "Poloni, São Paulo",
                "latitude" => -20.7829,
                "longitude" => -49.8258
            ],
            [
                "name" => "Pompéia, São Paulo",
                "latitude" => -22.107,
                "longitude" => -50.176
            ],
            [
                "name" => "Pongaí, São Paulo",
                "latitude" => -21.7396,
                "longitude" => -49.3604
            ],
            [
                "name" => "Pontal, São Paulo",
                "latitude" => -21.0216,
                "longitude" => -48.0423
            ],
            [
                "name" => "Pontalinda, São Paulo",
                "latitude" => -20.4396,
                "longitude" => -50.5258
            ],
            [
                "name" => "Pontes Gestal, São Paulo",
                "latitude" => -20.1727,
                "longitude" => -49.7064
            ],
            [
                "name" => "Populina, São Paulo",
                "latitude" => -19.9453,
                "longitude" => -50.538
            ],
            [
                "name" => "Porangaba, São Paulo",
                "latitude" => -23.1761,
                "longitude" => -48.1195
            ],
            [
                "name" => "Porto Feliz, São Paulo",
                "latitude" => -23.2093,
                "longitude" => -47.5251
            ],
            [
                "name" => "Porto Ferreira, São Paulo",
                "latitude" => -21.8498,
                "longitude" => -47.487
            ],
            [
                "name" => "Potim, São Paulo",
                "latitude" => -22.8343,
                "longitude" => -45.2552
            ],
            [
                "name" => "Potirendaba, São Paulo",
                "latitude" => -21.0428,
                "longitude" => -49.3815
            ],
            [
                "name" => "Pracinha, São Paulo",
                "latitude" => -21.8496,
                "longitude" => -51.0868
            ],
            [
                "name" => "Pradópolis, São Paulo",
                "latitude" => -21.3626,
                "longitude" => -48.0679
            ],
            [
                "name" => "Praia Grande, São Paulo",
                "latitude" => -24.0084,
                "longitude" => -46.4121
            ],
            [
                "name" => "Pratânia, São Paulo",
                "latitude" => -22.8112,
                "longitude" => -48.6636
            ],
            [
                "name" => "Presidente Alves, São Paulo",
                "latitude" => -22.0999,
                "longitude" => -49.4381
            ],
            [
                "name" => "Presidente Bernardes, São Paulo",
                "latitude" => -22.0082,
                "longitude" => -51.5565
            ],
            [
                "name" => "Presidente Epitácio, São Paulo",
                "latitude" => -21.7651,
                "longitude" => -52.1111
            ],
            [
                "name" => "Presidente Prudente, São Paulo",
                "latitude" => -22.1207,
                "longitude" => -51.3925
            ],
            [
                "name" => "Presidente Venceslau, São Paulo",
                "latitude" => -21.8732,
                "longitude" => -51.8447
            ],
            [
                "name" => "Promissão, São Paulo",
                "latitude" => -21.5356,
                "longitude" => -49.8599
            ],
            [
                "name" => "Quadra, São Paulo",
                "latitude" => -23.2993,
                "longitude" => -48.0547
            ],
            [
                "name" => "Quatá, São Paulo",
                "latitude" => -22.2456,
                "longitude" => -50.6966
            ],
            [
                "name" => "Queiroz, São Paulo",
                "latitude" => -21.7969,
                "longitude" => -50.2415
            ],
            [
                "name" => "Queluz, São Paulo",
                "latitude" => -22.5312,
                "longitude" => -44.7781
            ],
            [
                "name" => "Quintana, São Paulo",
                "latitude" => -22.0692,
                "longitude" => -50.307
            ],
            [
                "name" => "Rafard, São Paulo",
                "latitude" => -23.0105,
                "longitude" => -47.5318
            ],
            [
                "name" => "Rancharia, São Paulo",
                "latitude" => -22.2269,
                "longitude" => -50.893
            ],
            [
                "name" => "Redenção da Serra, São Paulo",
                "latitude" => -23.2638,
                "longitude" => -45.5422
            ],
            [
                "name" => "Regente Feijó, São Paulo",
                "latitude" => -22.2181,
                "longitude" => -51.3055
            ],
            [
                "name" => "Reginópolis, São Paulo",
                "latitude" => -21.8914,
                "longitude" => -49.2268
            ],
            [
                "name" => "Registro, São Paulo",
                "latitude" => -24.4979,
                "longitude" => -47.8449
            ],
            [
                "name" => "Restinga, São Paulo",
                "latitude" => -20.6056,
                "longitude" => -47.4833
            ],
            [
                "name" => "Ribeira, São Paulo",
                "latitude" => -24.6517,
                "longitude" => -49.0044
            ],
            [
                "name" => "Ribeirão Bonito, São Paulo",
                "latitude" => -22.0685,
                "longitude" => -48.182
            ],
            [
                "name" => "Ribeirão Branco, São Paulo",
                "latitude" => -24.2206,
                "longitude" => -48.7635
            ],
            [
                "name" => "Ribeirão Corrente, São Paulo",
                "latitude" => -20.4579,
                "longitude" => -47.5904
            ],
            [
                "name" => "Ribeirão do Sul, São Paulo",
                "latitude" => -22.789,
                "longitude" => -49.933
            ],
            [
                "name" => "Ribeirão dos Índios, São Paulo",
                "latitude" => -21.8382,
                "longitude" => -51.6103
            ],
            [
                "name" => "Ribeirão Grande, São Paulo",
                "latitude" => -24.1011,
                "longitude" => -48.3679
            ],
            [
                "name" => "Ribeirão Pires, São Paulo",
                "latitude" => -23.7067,
                "longitude" => -46.4058
            ],
            [
                "name" => "Ribeirão Preto, São Paulo",
                "latitude" => -21.1699,
                "longitude" => -47.8099
            ],
            [
                "name" => "Riversul, São Paulo",
                "latitude" => -23.829,
                "longitude" => -49.429
            ],
            [
                "name" => "Rifaina, São Paulo",
                "latitude" => -20.0803,
                "longitude" => -47.4291
            ],
            [
                "name" => "Rincão, São Paulo",
                "latitude" => -21.5894,
                "longitude" => -48.0728
            ],
            [
                "name" => "Rinópolis, São Paulo",
                "latitude" => -21.7284,
                "longitude" => -50.7239
            ],
            [
                "name" => "Rio Claro, São Paulo",
                "latitude" => -22.3984,
                "longitude" => -47.5546
            ],
            [
                "name" => "Rio das Pedras, São Paulo",
                "latitude" => -22.8417,
                "longitude" => -47.6047
            ],
            [
                "name" => "Rio Grande da Serra, São Paulo",
                "latitude" => -23.7437,
                "longitude" => -46.3971
            ],
            [
                "name" => "Riolândia, São Paulo",
                "latitude" => -19.9868,
                "longitude" => -49.6836
            ],
            [
                "name" => "Rosana, São Paulo",
                "latitude" => -22.5782,
                "longitude" => -53.0603
            ],
            [
                "name" => "Roseira, São Paulo",
                "latitude" => -22.8938,
                "longitude" => -45.307
            ],
            [
                "name" => "Rubiácea, São Paulo",
                "latitude" => -21.3006,
                "longitude" => -50.7296
            ],
            [
                "name" => "Rubinéia, São Paulo",
                "latitude" => -20.1759,
                "longitude" => -51.007
            ],
            [
                "name" => "Sabino, São Paulo",
                "latitude" => -21.4593,
                "longitude" => -49.5755
            ],
            [
                "name" => "Sagres, São Paulo",
                "latitude" => -21.8823,
                "longitude" => -50.9594
            ],
            [
                "name" => "Sales, São Paulo",
                "latitude" => -21.3427,
                "longitude" => -49.4897
            ],
            [
                "name" => "Sales Oliveira, São Paulo",
                "latitude" => -20.7696,
                "longitude" => -47.8369
            ],
            [
                "name" => "Salesópolis, São Paulo",
                "latitude" => -23.5288,
                "longitude" => -45.8465
            ],
            [
                "name" => "Salmourão, São Paulo",
                "latitude" => -21.6267,
                "longitude" => -50.8614
            ],
            [
                "name" => "Saltinho, São Paulo",
                "latitude" => -22.8442,
                "longitude" => -47.6754
            ],
            [
                "name" => "Salto, São Paulo",
                "latitude" => -23.1996,
                "longitude" => -47.2931
            ],
            [
                "name" => "Salto de Pirapora, São Paulo",
                "latitude" => -23.6474,
                "longitude" => -47.5743
            ],
            [
                "name" => "Salto Grande, São Paulo",
                "latitude" => -22.8894,
                "longitude" => -49.9831
            ],
            [
                "name" => "Sandovalina, São Paulo",
                "latitude" => -22.4551,
                "longitude" => -51.7648
            ],
            [
                "name" => "Santa Adélia, São Paulo",
                "latitude" => -21.2427,
                "longitude" => -48.8063
            ],
            [
                "name" => "Santa Albertina, São Paulo",
                "latitude" => -20.0311,
                "longitude" => -50.7297
            ],
            [
                "name" => "Santa Bárbara d'Oeste, São Paulo",
                "latitude" => -22.7553,
                "longitude" => -47.4143
            ],
            [
                "name" => "Santa Branca, São Paulo",
                "latitude" => -23.3933,
                "longitude" => -45.8875
            ],
            [
                "name" => "Santa Clara d'Oeste, São Paulo",
                "latitude" => -20.09,
                "longitude" => -50.9491
            ],
            [
                "name" => "Santa Cruz da Conceição, São Paulo",
                "latitude" => -22.1405,
                "longitude" => -47.4512
            ],
            [
                "name" => "Santa Cruz da Esperança, São Paulo",
                "latitude" => -21.2951,
                "longitude" => -47.4304
            ],
            [
                "name" => "Santa Cruz das Palmeiras, São Paulo",
                "latitude" => -21.8235,
                "longitude" => -47.248
            ],
            [
                "name" => "Santa Cruz do Rio Pardo, São Paulo",
                "latitude" => -22.8988,
                "longitude" => -49.6354
            ],
            [
                "name" => "Santa Ernestina, São Paulo",
                "latitude" => -21.4618,
                "longitude" => -48.3953
            ],
            [
                "name" => "Santa Fé do Sul, São Paulo",
                "latitude" => -20.2083,
                "longitude" => -50.932
            ],
            [
                "name" => "Santa Gertrudes, São Paulo",
                "latitude" => -22.4572,
                "longitude" => -47.5272
            ],
            [
                "name" => "Santa Isabel, São Paulo",
                "latitude" => -23.3172,
                "longitude" => -46.2237
            ],
            [
                "name" => "Santa Lúcia, São Paulo",
                "latitude" => -21.685,
                "longitude" => -48.0885
            ],
            [
                "name" => "Santa Maria da Serra, São Paulo",
                "latitude" => -22.5661,
                "longitude" => -48.1593
            ],
            [
                "name" => "Santa Mercedes, São Paulo",
                "latitude" => -21.3495,
                "longitude" => -51.7564
            ],
            [
                "name" => "Santana da Ponte Pensa, São Paulo",
                "latitude" => -20.2523,
                "longitude" => -50.8014
            ],
            [
                "name" => "Santana de Parnaíba, São Paulo",
                "latitude" => -23.4439,
                "longitude" => -46.9178
            ],
            [
                "name" => "Santa Rita d'Oeste, São Paulo",
                "latitude" => -20.1414,
                "longitude" => -50.8358
            ],
            [
                "name" => "Santa Rita do Passa Quatro, São Paulo",
                "latitude" => -21.7083,
                "longitude" => -47.478
            ],
            [
                "name" => "Santa Rosa de Viterbo, São Paulo",
                "latitude" => -21.4776,
                "longitude" => -47.3622
            ],
            [
                "name" => "Santa Salete, São Paulo",
                "latitude" => -20.2429,
                "longitude" => -50.6887
            ],
            [
                "name" => "Santo Anastácio, São Paulo",
                "latitude" => -21.9747,
                "longitude" => -51.6527
            ],
            [
                "name" => "Santo André, São Paulo",
                "latitude" => -23.6737,
                "longitude" => -46.5432
            ],
            [
                "name" => "Santo Antônio da Alegria, São Paulo",
                "latitude" => -21.0864,
                "longitude" => -47.1464
            ],
            [
                "name" => "Santo Antônio de Posse, São Paulo",
                "latitude" => -22.6029,
                "longitude" => -46.9192
            ],
            [
                "name" => "Santo Antônio do Aracanguá, São Paulo",
                "latitude" => -20.9331,
                "longitude" => -50.498
            ],
            [
                "name" => "Santo Antônio do Jardim, São Paulo",
                "latitude" => -22.1121,
                "longitude" => -46.6845
            ],
            [
                "name" => "Santo Antônio do Pinhal, São Paulo",
                "latitude" => -22.827,
                "longitude" => -45.663
            ],
            [
                "name" => "Santo Expedito, São Paulo",
                "latitude" => -21.8467,
                "longitude" => -51.3929
            ],
            [
                "name" => "Santópolis do Aguapeí, São Paulo",
                "latitude" => -21.6376,
                "longitude" => -50.5044
            ],
            [
                "name" => "Santos, São Paulo",
                "latitude" => -23.9535,
                "longitude" => -46.335
            ],
            [
                "name" => "São Bento do Sapucaí, São Paulo",
                "latitude" => -22.6837,
                "longitude" => -45.7287
            ],
            [
                "name" => "São Bernardo do Campo, São Paulo",
                "latitude" => -23.6914,
                "longitude" => -46.5646
            ],
            [
                "name" => "São Caetano do Sul, São Paulo",
                "latitude" => -23.6229,
                "longitude" => -46.5548
            ],
            [
                "name" => "São Carlos, São Paulo",
                "latitude" => -22.0174,
                "longitude" => -47.886
            ],
            [
                "name" => "São Francisco, São Paulo",
                "latitude" => -20.3623,
                "longitude" => -50.6952
            ],
            [
                "name" => "São João da Boa Vista, São Paulo",
                "latitude" => -21.9707,
                "longitude" => -46.7944
            ],
            [
                "name" => "São João das Duas Pontes, São Paulo",
                "latitude" => -20.3879,
                "longitude" => -50.3792
            ],
            [
                "name" => "São João de Iracema, São Paulo",
                "latitude" => -20.5111,
                "longitude" => -50.3561
            ],
            [
                "name" => "São João do Pau d'Alho, São Paulo",
                "latitude" => -21.2662,
                "longitude" => -51.6672
            ],
            [
                "name" => "São Joaquim da Barra, São Paulo",
                "latitude" => -20.5812,
                "longitude" => -47.8593
            ],
            [
                "name" => "São José da Bela Vista, São Paulo",
                "latitude" => -20.5935,
                "longitude" => -47.6424
            ],
            [
                "name" => "São José do Barreiro, São Paulo",
                "latitude" => -22.6414,
                "longitude" => -44.5774
            ],
            [
                "name" => "São José do Rio Pardo, São Paulo",
                "latitude" => -21.5953,
                "longitude" => -46.8873
            ],
            [
                "name" => "São José do Rio Preto, São Paulo",
                "latitude" => -20.8113,
                "longitude" => -49.3758
            ],
            [
                "name" => "São José dos Campos, São Paulo",
                "latitude" => -23.1896,
                "longitude" => -45.8841
            ],
            [
                "name" => "São Lourenço da Serra, São Paulo",
                "latitude" => -23.8491,
                "longitude" => -46.9432
            ],
            [
                "name" => "São Luiz do Paraitinga, São Paulo",
                "latitude" => -23.222,
                "longitude" => -45.3109
            ],
            [
                "name" => "São Manuel, São Paulo",
                "latitude" => -22.7321,
                "longitude" => -48.5723
            ],
            [
                "name" => "São Miguel Arcanjo, São Paulo",
                "latitude" => -23.8782,
                "longitude" => -47.9935
            ],
            [
                "name" => "São Paulo, São Paulo",
                "latitude" => -23.5329,
                "longitude" => -46.6395
            ],
            [
                "name" => "São Pedro, São Paulo",
                "latitude" => -22.5483,
                "longitude" => -47.9096
            ],
            [
                "name" => "São Pedro do Turvo, São Paulo",
                "latitude" => -22.7453,
                "longitude" => -49.7428
            ],
            [
                "name" => "São Roque, São Paulo",
                "latitude" => -23.5226,
                "longitude" => -47.1357
            ],
            [
                "name" => "São Sebastião, São Paulo",
                "latitude" => -23.7951,
                "longitude" => -45.4143
            ],
            [
                "name" => "São Sebastião da Grama, São Paulo",
                "latitude" => -21.7041,
                "longitude" => -46.8208
            ],
            [
                "name" => "São Simão, São Paulo",
                "latitude" => -21.4732,
                "longitude" => -47.5518
            ],
            [
                "name" => "São Vicente, São Paulo",
                "latitude" => -23.9574,
                "longitude" => -46.3883
            ],
            [
                "name" => "Sarapuí, São Paulo",
                "latitude" => -23.6397,
                "longitude" => -47.8249
            ],
            [
                "name" => "Sarutaiá, São Paulo",
                "latitude" => -23.2721,
                "longitude" => -49.4763
            ],
            [
                "name" => "Sebastianópolis do Sul, São Paulo",
                "latitude" => -20.6523,
                "longitude" => -49.925
            ],
            [
                "name" => "Serra Azul, São Paulo",
                "latitude" => -21.3074,
                "longitude" => -47.5602
            ],
            [
                "name" => "Serrana, São Paulo",
                "latitude" => -21.2043,
                "longitude" => -47.5952
            ],
            [
                "name" => "Serra Negra, São Paulo",
                "latitude" => -22.6139,
                "longitude" => -46.7033
            ],
            [
                "name" => "Sertãozinho, São Paulo",
                "latitude" => -21.1316,
                "longitude" => -47.9875
            ],
            [
                "name" => "Sete Barras, São Paulo",
                "latitude" => -24.382,
                "longitude" => -47.9279
            ],
            [
                "name" => "Severínia, São Paulo",
                "latitude" => -20.8108,
                "longitude" => -48.8054
            ],
            [
                "name" => "Silveiras, São Paulo",
                "latitude" => -22.6638,
                "longitude" => -44.8522
            ],
            [
                "name" => "Socorro, São Paulo",
                "latitude" => -22.5903,
                "longitude" => -46.5251
            ],
            [
                "name" => "Sorocaba, São Paulo",
                "latitude" => -23.4969,
                "longitude" => -47.4451
            ],
            [
                "name" => "Sud Mennucci, São Paulo",
                "latitude" => -20.6872,
                "longitude" => -50.9238
            ],
            [
                "name" => "Sumaré, São Paulo",
                "latitude" => -22.8204,
                "longitude" => -47.2728
            ],
            [
                "name" => "Suzano, São Paulo",
                "latitude" => -23.5448,
                "longitude" => -46.3112
            ],
            [
                "name" => "Suzanápolis, São Paulo",
                "latitude" => -20.4981,
                "longitude" => -51.0268
            ],
            [
                "name" => "Tabapuã, São Paulo",
                "latitude" => -20.9602,
                "longitude" => -49.0307
            ],
            [
                "name" => "Tabatinga, São Paulo",
                "latitude" => -21.7239,
                "longitude" => -48.6896
            ],
            [
                "name" => "Taboão da Serra, São Paulo",
                "latitude" => -23.6019,
                "longitude" => -46.7526
            ],
            [
                "name" => "Taciba, São Paulo",
                "latitude" => -22.3866,
                "longitude" => -51.2882
            ],
            [
                "name" => "Taguaí, São Paulo",
                "latitude" => -23.4452,
                "longitude" => -49.4024
            ],
            [
                "name" => "Taiaçu, São Paulo",
                "latitude" => -21.1431,
                "longitude" => -48.5112
            ],
            [
                "name" => "Taiúva, São Paulo",
                "latitude" => -21.1223,
                "longitude" => -48.4528
            ],
            [
                "name" => "Tambaú, São Paulo",
                "latitude" => -21.7029,
                "longitude" => -47.2703
            ],
            [
                "name" => "Tanabi, São Paulo",
                "latitude" => -20.6228,
                "longitude" => -49.6563
            ],
            [
                "name" => "Tapiraí, São Paulo",
                "latitude" => -23.9612,
                "longitude" => -47.5062
            ],
            [
                "name" => "Tapiratiba, São Paulo",
                "latitude" => -21.4713,
                "longitude" => -46.7448
            ],
            [
                "name" => "Taquaral, São Paulo",
                "latitude" => -21.0737,
                "longitude" => -48.4126
            ],
            [
                "name" => "Taquaritinga, São Paulo",
                "latitude" => -21.4049,
                "longitude" => -48.5103
            ],
            [
                "name" => "Taquarituba, São Paulo",
                "latitude" => -23.5307,
                "longitude" => -49.241
            ],
            [
                "name" => "Taquarivaí, São Paulo",
                "latitude" => -23.9211,
                "longitude" => -48.6948
            ],
            [
                "name" => "Tarabai, São Paulo",
                "latitude" => -22.3016,
                "longitude" => -51.5621
            ],
            [
                "name" => "Tarumã, São Paulo",
                "latitude" => -22.7429,
                "longitude" => -50.5786
            ],
            [
                "name" => "Tatuí, São Paulo",
                "latitude" => -23.3487,
                "longitude" => -47.8461
            ],
            [
                "name" => "Taubaté, São Paulo",
                "latitude" => -23.0104,
                "longitude" => -45.5593
            ],
            [
                "name" => "Tejupá, São Paulo",
                "latitude" => -23.3425,
                "longitude" => -49.3722
            ],
            [
                "name" => "Teodoro Sampaio, São Paulo",
                "latitude" => -22.5299,
                "longitude" => -52.1682
            ],
            [
                "name" => "Terra Roxa, São Paulo",
                "latitude" => -20.787,
                "longitude" => -48.3314
            ],
            [
                "name" => "Tietê, São Paulo",
                "latitude" => -23.1101,
                "longitude" => -47.7164
            ],
            [
                "name" => "Timburi, São Paulo",
                "latitude" => -23.2057,
                "longitude" => -49.6096
            ],
            [
                "name" => "Torre de Pedra, São Paulo",
                "latitude" => -23.2462,
                "longitude" => -48.1955
            ],
            [
                "name" => "Torrinha, São Paulo",
                "latitude" => -22.4237,
                "longitude" => -48.1731
            ],
            [
                "name" => "Trabiju, São Paulo",
                "latitude" => -22.0388,
                "longitude" => -48.3342
            ],
            [
                "name" => "Tremembé, São Paulo",
                "latitude" => -22.9571,
                "longitude" => -45.5475
            ],
            [
                "name" => "Três Fronteiras, São Paulo",
                "latitude" => -20.2344,
                "longitude" => -50.8905
            ],
            [
                "name" => "Tuiuti, São Paulo",
                "latitude" => -22.8193,
                "longitude" => -46.6937
            ],
            [
                "name" => "Tupã, São Paulo",
                "latitude" => -21.9335,
                "longitude" => -50.5191
            ],
            [
                "name" => "Tupi Paulista, São Paulo",
                "latitude" => -21.3825,
                "longitude" => -51.575
            ],
            [
                "name" => "Turiúba, São Paulo",
                "latitude" => -20.9428,
                "longitude" => -50.1135
            ],
            [
                "name" => "Turmalina, São Paulo",
                "latitude" => -20.0486,
                "longitude" => -50.4792
            ],
            [
                "name" => "Ubarana, São Paulo",
                "latitude" => -21.165,
                "longitude" => -49.7198
            ],
            [
                "name" => "Ubatuba, São Paulo",
                "latitude" => -23.4332,
                "longitude" => -45.0834
            ],
            [
                "name" => "Ubirajara, São Paulo",
                "latitude" => -22.5272,
                "longitude" => -49.6613
            ],
            [
                "name" => "Uchoa, São Paulo",
                "latitude" => -20.9511,
                "longitude" => -49.1713
            ],
            [
                "name" => "União Paulista, São Paulo",
                "latitude" => -20.8862,
                "longitude" => -49.9025
            ],
            [
                "name" => "Urânia, São Paulo",
                "latitude" => -20.2455,
                "longitude" => -50.6455
            ],
            [
                "name" => "Uru, São Paulo",
                "latitude" => -21.7866,
                "longitude" => -49.2848
            ],
            [
                "name" => "Urupês, São Paulo",
                "latitude" => -21.2032,
                "longitude" => -49.2931
            ],
            [
                "name" => "Valentim Gentil, São Paulo",
                "latitude" => -20.4217,
                "longitude" => -50.0889
            ],
            [
                "name" => "Valinhos, São Paulo",
                "latitude" => -22.9698,
                "longitude" => -46.9974
            ],
            [
                "name" => "Valparaíso, São Paulo",
                "latitude" => -21.2229,
                "longitude" => -50.8699
            ],
            [
                "name" => "Vargem, São Paulo",
                "latitude" => -22.887,
                "longitude" => -46.4124
            ],
            [
                "name" => "Vargem Grande do Sul, São Paulo",
                "latitude" => -21.8322,
                "longitude" => -46.8913
            ],
            [
                "name" => "Vargem Grande Paulista, São Paulo",
                "latitude" => -23.5993,
                "longitude" => -47.022
            ],
            [
                "name" => "Várzea Paulista, São Paulo",
                "latitude" => -23.2136,
                "longitude" => -46.8234
            ],
            [
                "name" => "Vera Cruz, São Paulo",
                "latitude" => -22.2183,
                "longitude" => -49.8207
            ],
            [
                "name" => "Vinhedo, São Paulo",
                "latitude" => -23.0302,
                "longitude" => -46.9833
            ],
            [
                "name" => "Viradouro, São Paulo",
                "latitude" => -20.8734,
                "longitude" => -48.293
            ],
            [
                "name" => "Vista Alegre do Alto, São Paulo",
                "latitude" => -21.1692,
                "longitude" => -48.6284
            ],
            [
                "name" => "Vitória Brasil, São Paulo",
                "latitude" => -20.1956,
                "longitude" => -50.4875
            ],
            [
                "name" => "Votorantim, São Paulo",
                "latitude" => -23.5446,
                "longitude" => -47.4388
            ],
            [
                "name" => "Votuporanga, São Paulo",
                "latitude" => -20.4237,
                "longitude" => -49.9781
            ],
            [
                "name" => "Zacarias, São Paulo",
                "latitude" => -21.0506,
                "longitude" => -50.0552
            ],
            [
                "name" => "Chavantes, São Paulo",
                "latitude" => -23.0366,
                "longitude" => -49.7096
            ],
            [
                "name" => "Estiva Gerbi, São Paulo",
                "latitude" => -22.2713,
                "longitude" => -46.9481
            ],
            [
                "name" => "Abatiá, Paraná",
                "latitude" => -23.3049,
                "longitude" => -50.3133
            ],
            [
                "name" => "Adrianópolis, Paraná",
                "latitude" => -24.6606,
                "longitude" => -48.9922
            ],
            [
                "name" => "Agudos do Sul, Paraná",
                "latitude" => -25.9899,
                "longitude" => -49.3343
            ],
            [
                "name" => "Almirante Tamandaré, Paraná",
                "latitude" => -25.3188,
                "longitude" => -49.3037
            ],
            [
                "name" => "Altamira do Paraná, Paraná",
                "latitude" => -24.7983,
                "longitude" => -52.7128
            ],
            [
                "name" => "Altônia, Paraná",
                "latitude" => -23.8759,
                "longitude" => -53.8958
            ],
            [
                "name" => "Alto Paraná, Paraná",
                "latitude" => -23.1312,
                "longitude" => -52.3189
            ],
            [
                "name" => "Alto Piquiri, Paraná",
                "latitude" => -24.0224,
                "longitude" => -53.44
            ],
            [
                "name" => "Alvorada do Sul, Paraná",
                "latitude" => -22.7813,
                "longitude" => -51.2297
            ],
            [
                "name" => "Amaporã, Paraná",
                "latitude" => -23.0943,
                "longitude" => -52.7866
            ],
            [
                "name" => "Ampére, Paraná",
                "latitude" => -25.9168,
                "longitude" => -53.4686
            ],
            [
                "name" => "Anahy, Paraná",
                "latitude" => -24.6449,
                "longitude" => -53.1332
            ],
            [
                "name" => "Andirá, Paraná",
                "latitude" => -23.0533,
                "longitude" => -50.2304
            ],
            [
                "name" => "Ângulo, Paraná",
                "latitude" => -23.1946,
                "longitude" => -51.9154
            ],
            [
                "name" => "Antonina, Paraná",
                "latitude" => -25.4386,
                "longitude" => -48.7191
            ],
            [
                "name" => "Antônio Olinto, Paraná",
                "latitude" => -25.9804,
                "longitude" => -50.1972
            ],
            [
                "name" => "Apucarana, Paraná",
                "latitude" => -23.55,
                "longitude" => -51.4635
            ],
            [
                "name" => "Arapongas, Paraná",
                "latitude" => -23.4153,
                "longitude" => -51.4259
            ],
            [
                "name" => "Arapoti, Paraná",
                "latitude" => -24.1548,
                "longitude" => -49.8285
            ],
            [
                "name" => "Arapuã, Paraná",
                "latitude" => -24.3132,
                "longitude" => -51.7856
            ],
            [
                "name" => "Araruna, Paraná",
                "latitude" => -23.9315,
                "longitude" => -52.5021
            ],
            [
                "name" => "Araucária, Paraná",
                "latitude" => -25.5859,
                "longitude" => -49.4047
            ],
            [
                "name" => "Ariranha do Ivaí, Paraná",
                "latitude" => -24.3857,
                "longitude" => -51.5839
            ],
            [
                "name" => "Assaí, Paraná",
                "latitude" => -23.3697,
                "longitude" => -50.8459
            ],
            [
                "name" => "Assis Chateaubriand, Paraná",
                "latitude" => -24.4168,
                "longitude" => -53.5213
            ],
            [
                "name" => "Astorga, Paraná",
                "latitude" => -23.2318,
                "longitude" => -51.6668
            ],
            [
                "name" => "Atalaia, Paraná",
                "latitude" => -23.1517,
                "longitude" => -52.0551
            ],
            [
                "name" => "Balsa Nova, Paraná",
                "latitude" => -25.5804,
                "longitude" => -49.6291
            ],
            [
                "name" => "Bandeirantes, Paraná",
                "latitude" => -23.1078,
                "longitude" => -50.3704
            ],
            [
                "name" => "Barbosa Ferraz, Paraná",
                "latitude" => -24.0334,
                "longitude" => -52.004
            ],
            [
                "name" => "Barracão, Paraná",
                "latitude" => -26.2502,
                "longitude" => -53.6324
            ],
            [
                "name" => "Barra do Jacaré, Paraná",
                "latitude" => -23.116,
                "longitude" => -50.1842
            ],
            [
                "name" => "Bela Vista da Caroba, Paraná",
                "latitude" => -25.8842,
                "longitude" => -53.6725
            ],
            [
                "name" => "Bela Vista do Paraíso, Paraná",
                "latitude" => -22.9937,
                "longitude" => -51.1927
            ],
            [
                "name" => "Bituruna, Paraná",
                "latitude" => -26.1607,
                "longitude" => -51.5518
            ],
            [
                "name" => "Boa Esperança, Paraná",
                "latitude" => -24.2467,
                "longitude" => -52.7876
            ],
            [
                "name" => "Boa Esperança do Iguaçu, Paraná",
                "latitude" => -25.6324,
                "longitude" => -53.2108
            ],
            [
                "name" => "Boa Ventura de São Roque, Paraná",
                "latitude" => -24.8688,
                "longitude" => -51.6276
            ],
            [
                "name" => "Boa Vista da Aparecida, Paraná",
                "latitude" => -25.4308,
                "longitude" => -53.4117
            ],
            [
                "name" => "Bocaiúva do Sul, Paraná",
                "latitude" => -25.2066,
                "longitude" => -49.1141
            ],
            [
                "name" => "Bom Jesus do Sul, Paraná",
                "latitude" => -26.1958,
                "longitude" => -53.5955
            ],
            [
                "name" => "Bom Sucesso, Paraná",
                "latitude" => -23.7063,
                "longitude" => -51.7671
            ],
            [
                "name" => "Bom Sucesso do Sul, Paraná",
                "latitude" => -26.0731,
                "longitude" => -52.8353
            ],
            [
                "name" => "Borrazópolis, Paraná",
                "latitude" => -23.9366,
                "longitude" => -51.5875
            ],
            [
                "name" => "Braganey, Paraná",
                "latitude" => -24.8173,
                "longitude" => -53.1218
            ],
            [
                "name" => "Brasilândia do Sul, Paraná",
                "latitude" => -24.1978,
                "longitude" => -53.5275
            ],
            [
                "name" => "Cafeara, Paraná",
                "latitude" => -22.789,
                "longitude" => -51.7142
            ],
            [
                "name" => "Cafelândia, Paraná",
                "latitude" => -24.6189,
                "longitude" => -53.3207
            ],
            [
                "name" => "Cafezal do Sul, Paraná",
                "latitude" => -23.9005,
                "longitude" => -53.5124
            ],
            [
                "name" => "Califórnia, Paraná",
                "latitude" => -23.6566,
                "longitude" => -51.3574
            ],
            [
                "name" => "Cambará, Paraná",
                "latitude" => -23.0423,
                "longitude" => -50.0753
            ],
            [
                "name" => "Cambé, Paraná",
                "latitude" => -23.2766,
                "longitude" => -51.2798
            ],
            [
                "name" => "Cambira, Paraná",
                "latitude" => -23.589,
                "longitude" => -51.5792
            ],
            [
                "name" => "Campina da Lagoa, Paraná",
                "latitude" => -24.5893,
                "longitude" => -52.7976
            ],
            [
                "name" => "Campina do Simão, Paraná",
                "latitude" => -25.0802,
                "longitude" => -51.8237
            ],
            [
                "name" => "Campina Grande do Sul, Paraná",
                "latitude" => -25.3044,
                "longitude" => -49.0551
            ],
            [
                "name" => "Campo Bonito, Paraná",
                "latitude" => -25.0294,
                "longitude" => -52.9939
            ],
            [
                "name" => "Campo do Tenente, Paraná",
                "latitude" => -25.98,
                "longitude" => -49.6844
            ],
            [
                "name" => "Campo Largo, Paraná",
                "latitude" => -25.4525,
                "longitude" => -49.529
            ],
            [
                "name" => "Campo Magro, Paraná",
                "latitude" => -25.3687,
                "longitude" => -49.4501
            ],
            [
                "name" => "Campo Mourão, Paraná",
                "latitude" => -24.0463,
                "longitude" => -52.378
            ],
            [
                "name" => "Cândido de Abreu, Paraná",
                "latitude" => -24.5649,
                "longitude" => -51.3372
            ],
            [
                "name" => "Candói, Paraná",
                "latitude" => -25.5758,
                "longitude" => -52.0409
            ],
            [
                "name" => "Cantagalo, Paraná",
                "latitude" => -25.3734,
                "longitude" => -52.1198
            ],
            [
                "name" => "Capanema, Paraná",
                "latitude" => -25.6691,
                "longitude" => -53.8055
            ],
            [
                "name" => "Capitão Leônidas Marques, Paraná",
                "latitude" => -25.4816,
                "longitude" => -53.6112
            ],
            [
                "name" => "Carambeí, Paraná",
                "latitude" => -24.9152,
                "longitude" => -50.0986
            ],
            [
                "name" => "Carlópolis, Paraná",
                "latitude" => -23.4269,
                "longitude" => -49.7235
            ],
            [
                "name" => "Cascavel, Paraná",
                "latitude" => -24.9573,
                "longitude" => -53.459
            ],
            [
                "name" => "Castro, Paraná",
                "latitude" => -24.7891,
                "longitude" => -50.0108
            ],
            [
                "name" => "Catanduvas, Paraná",
                "latitude" => -25.2044,
                "longitude" => -53.1548
            ],
            [
                "name" => "Centenário do Sul, Paraná",
                "latitude" => -22.8188,
                "longitude" => -51.5973
            ],
            [
                "name" => "Cerro Azul, Paraná",
                "latitude" => -26.0891,
                "longitude" => -52.8691
            ],
            [
                "name" => "Céu Azul, Paraná",
                "latitude" => -25.1489,
                "longitude" => -53.8415
            ],
            [
                "name" => "Chopinzinho, Paraná",
                "latitude" => -25.8515,
                "longitude" => -52.5173
            ],
            [
                "name" => "Cianorte, Paraná",
                "latitude" => -23.6599,
                "longitude" => -52.6054
            ],
            [
                "name" => "Cidade Gaúcha, Paraná",
                "latitude" => -23.3772,
                "longitude" => -52.9436
            ],
            [
                "name" => "Clevelândia, Paraná",
                "latitude" => -26.4043,
                "longitude" => -52.3508
            ],
            [
                "name" => "Colombo, Paraná",
                "latitude" => -25.2925,
                "longitude" => -49.2262
            ],
            [
                "name" => "Colorado, Paraná",
                "latitude" => -22.8374,
                "longitude" => -51.9743
            ],
            [
                "name" => "Congonhinhas, Paraná",
                "latitude" => -23.5493,
                "longitude" => -50.5569
            ],
            [
                "name" => "Conselheiro Mairinck, Paraná",
                "latitude" => -23.623,
                "longitude" => -50.1707
            ],
            [
                "name" => "Contenda, Paraná",
                "latitude" => -25.6788,
                "longitude" => -49.535
            ],
            [
                "name" => "Corbélia, Paraná",
                "latitude" => -24.7971,
                "longitude" => -53.3006
            ],
            [
                "name" => "Cornélio Procópio, Paraná",
                "latitude" => -23.1829,
                "longitude" => -50.6498
            ],
            [
                "name" => "Coronel Domingos Soares, Paraná",
                "latitude" => -26.2277,
                "longitude" => -52.0356
            ],
            [
                "name" => "Coronel Vivida, Paraná",
                "latitude" => -25.9767,
                "longitude" => -52.5641
            ],
            [
                "name" => "Corumbataí do Sul, Paraná",
                "latitude" => -24.101,
                "longitude" => -52.1177
            ],
            [
                "name" => "Cruzeiro do Iguaçu, Paraná",
                "latitude" => -25.6192,
                "longitude" => -53.1285
            ],
            [
                "name" => "Cruzeiro do Oeste, Paraná",
                "latitude" => -23.7799,
                "longitude" => -53.0774
            ],
            [
                "name" => "Cruzeiro do Sul, Paraná",
                "latitude" => -22.9624,
                "longitude" => -52.1622
            ],
            [
                "name" => "Cruz Machado, Paraná",
                "latitude" => -26.0166,
                "longitude" => -51.343
            ],
            [
                "name" => "Cruzmaltina, Paraná",
                "latitude" => -24.0132,
                "longitude" => -51.4563
            ],
            [
                "name" => "Curitiba, Paraná",
                "latitude" => -25.4195,
                "longitude" => -49.2646
            ],
            [
                "name" => "Curiúva, Paraná",
                "latitude" => -24.0362,
                "longitude" => -50.4576
            ],
            [
                "name" => "Diamante do Norte, Paraná",
                "latitude" => -22.655,
                "longitude" => -52.8617
            ],
            [
                "name" => "Diamante do Sul, Paraná",
                "latitude" => -25.035,
                "longitude" => -52.6768
            ],
            [
                "name" => "Diamante D'Oeste, Paraná",
                "latitude" => -24.9419,
                "longitude" => -54.1052
            ],
            [
                "name" => "Dois Vizinhos, Paraná",
                "latitude" => -25.7407,
                "longitude" => -53.057
            ],
            [
                "name" => "Douradina, Paraná",
                "latitude" => -23.3807,
                "longitude" => -53.2918
            ],
            [
                "name" => "Doutor Camargo, Paraná",
                "latitude" => -23.5582,
                "longitude" => -52.2178
            ],
            [
                "name" => "Enéas Marques, Paraná",
                "latitude" => -25.9445,
                "longitude" => -53.1659
            ],
            [
                "name" => "Engenheiro Beltrão, Paraná",
                "latitude" => -23.797,
                "longitude" => -52.2659
            ],
            [
                "name" => "Esperança Nova, Paraná",
                "latitude" => -23.7238,
                "longitude" => -53.811
            ],
            [
                "name" => "Entre Rios do Oeste, Paraná",
                "latitude" => -24.7042,
                "longitude" => -54.2385
            ],
            [
                "name" => "Espigão Alto do Iguaçu, Paraná",
                "latitude" => -25.4216,
                "longitude" => -52.8348
            ],
            [
                "name" => "Farol, Paraná",
                "latitude" => -24.0958,
                "longitude" => -52.6217
            ],
            [
                "name" => "Faxinal, Paraná",
                "latitude" => -24.0077,
                "longitude" => -51.3227
            ],
            [
                "name" => "Fazenda Rio Grande, Paraná",
                "latitude" => -25.6624,
                "longitude" => -49.3073
            ],
            [
                "name" => "Fênix, Paraná",
                "latitude" => -23.9135,
                "longitude" => -51.9805
            ],
            [
                "name" => "Fernandes Pinheiro, Paraná",
                "latitude" => -25.4107,
                "longitude" => -50.5456
            ],
            [
                "name" => "Figueira, Paraná",
                "latitude" => -23.8455,
                "longitude" => -50.4031
            ],
            [
                "name" => "Floraí, Paraná",
                "latitude" => -23.3178,
                "longitude" => -52.3029
            ],
            [
                "name" => "Flor da Serra do Sul, Paraná",
                "latitude" => -26.2523,
                "longitude" => -53.3092
            ],
            [
                "name" => "Floresta, Paraná",
                "latitude" => -23.6031,
                "longitude" => -52.0807
            ],
            [
                "name" => "Florestópolis, Paraná",
                "latitude" => -22.8623,
                "longitude" => -51.3882
            ],
            [
                "name" => "Flórida, Paraná",
                "latitude" => -23.0847,
                "longitude" => -51.9546
            ],
            [
                "name" => "Formosa do Oeste, Paraná",
                "latitude" => -24.2951,
                "longitude" => -53.3114
            ],
            [
                "name" => "Foz do Iguaçu, Paraná",
                "latitude" => -25.5427,
                "longitude" => -54.5827
            ],
            [
                "name" => "Francisco Alves, Paraná",
                "latitude" => -24.0667,
                "longitude" => -53.8461
            ],
            [
                "name" => "Francisco Beltrão, Paraná",
                "latitude" => -26.0817,
                "longitude" => -53.0535
            ],
            [
                "name" => "Foz do Jordão, Paraná",
                "latitude" => -25.7371,
                "longitude" => -52.1188
            ],
            [
                "name" => "General Carneiro, Paraná",
                "latitude" => -26.425,
                "longitude" => -51.3172
            ],
            [
                "name" => "Godoy Moreira, Paraná",
                "latitude" => -24.173,
                "longitude" => -51.9246
            ],
            [
                "name" => "Goioerê, Paraná",
                "latitude" => -24.1835,
                "longitude" => -53.0248
            ],
            [
                "name" => "Goioxim, Paraná",
                "latitude" => -25.1927,
                "longitude" => -51.9911
            ],
            [
                "name" => "Grandes Rios, Paraná",
                "latitude" => -24.1466,
                "longitude" => -51.5094
            ],
            [
                "name" => "Guaíra, Paraná",
                "latitude" => -24.085,
                "longitude" => -54.2573
            ],
            [
                "name" => "Guairaçá, Paraná",
                "latitude" => -22.932,
                "longitude" => -52.6906
            ],
            [
                "name" => "Guamiranga, Paraná",
                "latitude" => -25.1912,
                "longitude" => -50.8021
            ],
            [
                "name" => "Guapirama, Paraná",
                "latitude" => -23.5203,
                "longitude" => -50.0407
            ],
            [
                "name" => "Guaporema, Paraná",
                "latitude" => -23.3402,
                "longitude" => -52.7786
            ],
            [
                "name" => "Guaraci, Paraná",
                "latitude" => -22.9694,
                "longitude" => -51.6504
            ],
            [
                "name" => "Guaraniaçu, Paraná",
                "latitude" => -25.0968,
                "longitude" => -52.8755
            ],
            [
                "name" => "Guarapuava, Paraná",
                "latitude" => -25.3902,
                "longitude" => -51.4623
            ],
            [
                "name" => "Guaraqueçaba, Paraná",
                "latitude" => -25.3071,
                "longitude" => -48.3204
            ],
            [
                "name" => "Guaratuba, Paraná",
                "latitude" => -25.8817,
                "longitude" => -48.5752
            ],
            [
                "name" => "Honório Serpa, Paraná",
                "latitude" => -26.139,
                "longitude" => -52.3848
            ],
            [
                "name" => "Ibaiti, Paraná",
                "latitude" => -23.8478,
                "longitude" => -50.1932
            ],
            [
                "name" => "Ibema, Paraná",
                "latitude" => -25.1193,
                "longitude" => -53.0072
            ],
            [
                "name" => "Ibiporã, Paraná",
                "latitude" => -23.2659,
                "longitude" => -51.0522
            ],
            [
                "name" => "Icaraíma, Paraná",
                "latitude" => -23.3944,
                "longitude" => -53.615
            ],
            [
                "name" => "Iguaraçu, Paraná",
                "latitude" => -23.1949,
                "longitude" => -51.8256
            ],
            [
                "name" => "Iguatu, Paraná",
                "latitude" => -24.7153,
                "longitude" => -53.0827
            ],
            [
                "name" => "Imbaú, Paraná",
                "latitude" => -24.448,
                "longitude" => -50.7533
            ],
            [
                "name" => "Imbituva, Paraná",
                "latitude" => -25.2285,
                "longitude" => -50.5989
            ],
            [
                "name" => "Inácio Martins, Paraná",
                "latitude" => -25.5704,
                "longitude" => -51.0769
            ],
            [
                "name" => "Inajá, Paraná",
                "latitude" => -22.7509,
                "longitude" => -52.1995
            ],
            [
                "name" => "Indianópolis, Paraná",
                "latitude" => -23.4762,
                "longitude" => -52.6989
            ],
            [
                "name" => "Ipiranga, Paraná",
                "latitude" => -25.0238,
                "longitude" => -50.5794
            ],
            [
                "name" => "Iporã, Paraná",
                "latitude" => -24.0083,
                "longitude" => -53.706
            ],
            [
                "name" => "Iracema do Oeste, Paraná",
                "latitude" => -24.4262,
                "longitude" => -53.3528
            ],
            [
                "name" => "Irati, Paraná",
                "latitude" => -25.4697,
                "longitude" => -50.6493
            ],
            [
                "name" => "Iretama, Paraná",
                "latitude" => -24.4253,
                "longitude" => -52.1012
            ],
            [
                "name" => "Itaguajé, Paraná",
                "latitude" => -22.6183,
                "longitude" => -51.9674
            ],
            [
                "name" => "Itaipulândia, Paraná",
                "latitude" => -25.1366,
                "longitude" => -54.3001
            ],
            [
                "name" => "Itambaracá, Paraná",
                "latitude" => -23.0181,
                "longitude" => -50.4097
            ],
            [
                "name" => "Itambé, Paraná",
                "latitude" => -23.6601,
                "longitude" => -51.9912
            ],
            [
                "name" => "Itapejara d'Oeste, Paraná",
                "latitude" => -25.9619,
                "longitude" => -52.8152
            ],
            [
                "name" => "Itaperuçu, Paraná",
                "latitude" => -25.2193,
                "longitude" => -49.3454
            ],
            [
                "name" => "Itaúna do Sul, Paraná",
                "latitude" => -22.7289,
                "longitude" => -52.8874
            ],
            [
                "name" => "Ivaí, Paraná",
                "latitude" => -25.0067,
                "longitude" => -50.857
            ],
            [
                "name" => "Ivaiporã, Paraná",
                "latitude" => -24.2485,
                "longitude" => -51.6754
            ],
            [
                "name" => "Ivaté, Paraná",
                "latitude" => -23.4072,
                "longitude" => -53.3687
            ],
            [
                "name" => "Ivatuba, Paraná",
                "latitude" => -23.6187,
                "longitude" => -52.2203
            ],
            [
                "name" => "Jaboti, Paraná",
                "latitude" => -23.7435,
                "longitude" => -50.0729
            ],
            [
                "name" => "Jacarezinho, Paraná",
                "latitude" => -23.1591,
                "longitude" => -49.9739
            ],
            [
                "name" => "Jaguapitã, Paraná",
                "latitude" => -23.1104,
                "longitude" => -51.5342
            ],
            [
                "name" => "Jaguariaíva, Paraná",
                "latitude" => -24.2439,
                "longitude" => -49.7066
            ],
            [
                "name" => "Jandaia do Sul, Paraná",
                "latitude" => -23.6011,
                "longitude" => -51.6448
            ],
            [
                "name" => "Janiópolis, Paraná",
                "latitude" => -24.1401,
                "longitude" => -52.7784
            ],
            [
                "name" => "Japira, Paraná",
                "latitude" => -23.8142,
                "longitude" => -50.1422
            ],
            [
                "name" => "Japurá, Paraná",
                "latitude" => -23.4693,
                "longitude" => -52.5557
            ],
            [
                "name" => "Jardim Alegre, Paraná",
                "latitude" => -24.1809,
                "longitude" => -51.6902
            ],
            [
                "name" => "Jardim Olinda, Paraná",
                "latitude" => -22.5523,
                "longitude" => -52.0503
            ],
            [
                "name" => "Jataizinho, Paraná",
                "latitude" => -23.2578,
                "longitude" => -50.9777
            ],
            [
                "name" => "Jesuítas, Paraná",
                "latitude" => -24.3839,
                "longitude" => -53.3849
            ],
            [
                "name" => "Joaquim Távora, Paraná",
                "latitude" => -23.4987,
                "longitude" => -49.909
            ],
            [
                "name" => "Jundiaí do Sul, Paraná",
                "latitude" => -23.4357,
                "longitude" => -50.2496
            ],
            [
                "name" => "Juranda, Paraná",
                "latitude" => -24.4209,
                "longitude" => -52.8413
            ],
            [
                "name" => "Jussara, Paraná",
                "latitude" => -23.6219,
                "longitude" => -52.4693
            ],
            [
                "name" => "Kaloré, Paraná",
                "latitude" => -23.8188,
                "longitude" => -51.6687
            ],
            [
                "name" => "Lapa, Paraná",
                "latitude" => -25.7671,
                "longitude" => -49.7168
            ],
            [
                "name" => "Laranjal, Paraná",
                "latitude" => -24.8862,
                "longitude" => -52.47
            ],
            [
                "name" => "Laranjeiras do Sul, Paraná",
                "latitude" => -25.4077,
                "longitude" => -52.4109
            ],
            [
                "name" => "Leópolis, Paraná",
                "latitude" => -23.0818,
                "longitude" => -50.7511
            ],
            [
                "name" => "Lidianópolis, Paraná",
                "latitude" => -24.11,
                "longitude" => -51.6506
            ],
            [
                "name" => "Lindoeste, Paraná",
                "latitude" => -25.2596,
                "longitude" => -53.5733
            ],
            [
                "name" => "Loanda, Paraná",
                "latitude" => -22.9232,
                "longitude" => -53.1362
            ],
            [
                "name" => "Lobato, Paraná",
                "latitude" => -23.0058,
                "longitude" => -51.9524
            ],
            [
                "name" => "Londrina, Paraná",
                "latitude" => -23.304,
                "longitude" => -51.1691
            ],
            [
                "name" => "Luiziana, Paraná",
                "latitude" => -24.2853,
                "longitude" => -52.269
            ],
            [
                "name" => "Lunardelli, Paraná",
                "latitude" => -24.0821,
                "longitude" => -51.7368
            ],
            [
                "name" => "Lupionópolis, Paraná",
                "latitude" => -22.755,
                "longitude" => -51.6601
            ],
            [
                "name" => "Mallet, Paraná",
                "latitude" => -25.8806,
                "longitude" => -50.8173
            ],
            [
                "name" => "Mamborê, Paraná",
                "latitude" => -24.317,
                "longitude" => -52.5271
            ],
            [
                "name" => "Mandaguaçu, Paraná",
                "latitude" => -23.3458,
                "longitude" => -52.0944
            ],
            [
                "name" => "Mandaguari, Paraná",
                "latitude" => -23.5446,
                "longitude" => -51.671
            ],
            [
                "name" => "Mandirituba, Paraná",
                "latitude" => -25.777,
                "longitude" => -49.3282
            ],
            [
                "name" => "Manfrinópolis, Paraná",
                "latitude" => -26.1441,
                "longitude" => -53.3113
            ],
            [
                "name" => "Mangueirinha, Paraná",
                "latitude" => -25.9421,
                "longitude" => -52.1743
            ],
            [
                "name" => "Manoel Ribas, Paraná",
                "latitude" => -24.5144,
                "longitude" => -51.6658
            ],
            [
                "name" => "Marechal Cândido Rondon, Paraná",
                "latitude" => -24.557,
                "longitude" => -54.0571
            ],
            [
                "name" => "Maria Helena, Paraná",
                "latitude" => -23.6158,
                "longitude" => -53.2053
            ],
            [
                "name" => "Marialva, Paraná",
                "latitude" => -23.4843,
                "longitude" => -51.7928
            ],
            [
                "name" => "Marilândia do Sul, Paraná",
                "latitude" => -23.7425,
                "longitude" => -51.3137
            ],
            [
                "name" => "Marilena, Paraná",
                "latitude" => -22.7336,
                "longitude" => -53.0402
            ],
            [
                "name" => "Mariluz, Paraná",
                "latitude" => -24.0089,
                "longitude" => -53.1432
            ],
            [
                "name" => "Maringá, Paraná",
                "latitude" => -23.4205,
                "longitude" => -51.9333
            ],
            [
                "name" => "Mariópolis, Paraná",
                "latitude" => -26.355,
                "longitude" => -52.5532
            ],
            [
                "name" => "Maripá, Paraná",
                "latitude" => -24.42,
                "longitude" => -53.8286
            ],
            [
                "name" => "Marmeleiro, Paraná",
                "latitude" => -26.1472,
                "longitude" => -53.0267
            ],
            [
                "name" => "Marquinho, Paraná",
                "latitude" => -25.112,
                "longitude" => -52.2497
            ],
            [
                "name" => "Marumbi, Paraná",
                "latitude" => -23.7058,
                "longitude" => -51.6404
            ],
            [
                "name" => "Matelândia, Paraná",
                "latitude" => -25.2496,
                "longitude" => -53.9935
            ],
            [
                "name" => "Matinhos, Paraná",
                "latitude" => -25.8237,
                "longitude" => -48.549
            ],
            [
                "name" => "Mato Rico, Paraná",
                "latitude" => -24.6995,
                "longitude" => -52.1454
            ],
            [
                "name" => "Mauá da Serra, Paraná",
                "latitude" => -23.8988,
                "longitude" => -51.2277
            ],
            [
                "name" => "Medianeira, Paraná",
                "latitude" => -25.2977,
                "longitude" => -54.0943
            ],
            [
                "name" => "Mercedes, Paraná",
                "latitude" => -24.4538,
                "longitude" => -54.1618
            ],
            [
                "name" => "Mirador, Paraná",
                "latitude" => -23.255,
                "longitude" => -52.7761
            ],
            [
                "name" => "Miraselva, Paraná",
                "latitude" => -22.9657,
                "longitude" => -51.4846
            ],
            [
                "name" => "Missal, Paraná",
                "latitude" => -25.0919,
                "longitude" => -54.2477
            ],
            [
                "name" => "Moreira Sales, Paraná",
                "latitude" => -24.0509,
                "longitude" => -53.0102
            ],
            [
                "name" => "Morretes, Paraná",
                "latitude" => -25.4744,
                "longitude" => -48.8345
            ],
            [
                "name" => "Munhoz de Melo, Paraná",
                "latitude" => -23.1487,
                "longitude" => -51.7737
            ],
            [
                "name" => "Nossa Senhora das Graças, Paraná",
                "latitude" => -22.9129,
                "longitude" => -51.7978
            ],
            [
                "name" => "Nova Aliança do Ivaí, Paraná",
                "latitude" => -23.1763,
                "longitude" => -52.6032
            ],
            [
                "name" => "Nova América da Colina, Paraná",
                "latitude" => -23.3308,
                "longitude" => -50.7168
            ],
            [
                "name" => "Nova Aurora, Paraná",
                "latitude" => -24.5289,
                "longitude" => -53.2575
            ],
            [
                "name" => "Nova Cantu, Paraná",
                "latitude" => -24.6723,
                "longitude" => -52.5661
            ],
            [
                "name" => "Nova Esperança, Paraná",
                "latitude" => -23.182,
                "longitude" => -52.2031
            ],
            [
                "name" => "Nova Esperança do Sudoeste, Paraná",
                "latitude" => -25.9004,
                "longitude" => -53.2618
            ],
            [
                "name" => "Nova Fátima, Paraná",
                "latitude" => -23.4324,
                "longitude" => -50.5665
            ],
            [
                "name" => "Nova Laranjeiras, Paraná",
                "latitude" => -25.3054,
                "longitude" => -52.5447
            ],
            [
                "name" => "Nova Londrina, Paraná",
                "latitude" => -22.7639,
                "longitude" => -52.9868
            ],
            [
                "name" => "Nova Olímpia, Paraná",
                "latitude" => -23.4703,
                "longitude" => -53.0898
            ],
            [
                "name" => "Nova Santa Bárbara, Paraná",
                "latitude" => -23.5865,
                "longitude" => -50.7598
            ],
            [
                "name" => "Nova Santa Rosa, Paraná",
                "latitude" => -24.4693,
                "longitude" => -53.9552
            ],
            [
                "name" => "Nova Prata do Iguaçu, Paraná",
                "latitude" => -25.6309,
                "longitude" => -53.3469
            ],
            [
                "name" => "Nova Tebas, Paraná",
                "latitude" => -24.438,
                "longitude" => -51.9454
            ],
            [
                "name" => "Novo Itacolomi, Paraná",
                "latitude" => -23.7631,
                "longitude" => -51.5079
            ],
            [
                "name" => "Ortigueira, Paraná",
                "latitude" => -24.2058,
                "longitude" => -50.9185
            ],
            [
                "name" => "Ourizona, Paraná",
                "latitude" => -23.4053,
                "longitude" => -52.1964
            ],
            [
                "name" => "Ouro Verde do Oeste, Paraná",
                "latitude" => -24.7933,
                "longitude" => -53.9043
            ],
            [
                "name" => "Paiçandu, Paraná",
                "latitude" => -23.4555,
                "longitude" => -52.046
            ],
            [
                "name" => "Palmas, Paraná",
                "latitude" => -26.4839,
                "longitude" => -51.9888
            ],
            [
                "name" => "Palmeira, Paraná",
                "latitude" => -25.4257,
                "longitude" => -50.007
            ],
            [
                "name" => "Palmital, Paraná",
                "latitude" => -24.8853,
                "longitude" => -52.2029
            ],
            [
                "name" => "Palotina, Paraná",
                "latitude" => -24.2868,
                "longitude" => -53.8404
            ],
            [
                "name" => "Paraíso do Norte, Paraná",
                "latitude" => -23.2824,
                "longitude" => -52.6054
            ],
            [
                "name" => "Paranacity, Paraná",
                "latitude" => -22.9297,
                "longitude" => -52.1549
            ],
            [
                "name" => "Paranaguá, Paraná",
                "latitude" => -25.5161,
                "longitude" => -48.5225
            ],
            [
                "name" => "Paranapoema, Paraná",
                "latitude" => -22.6412,
                "longitude" => -52.0905
            ],
            [
                "name" => "Paranavaí, Paraná",
                "latitude" => -23.0816,
                "longitude" => -52.4617
            ],
            [
                "name" => "Pato Bragado, Paraná",
                "latitude" => -24.6271,
                "longitude" => -54.2265
            ],
            [
                "name" => "Pato Branco, Paraná",
                "latitude" => -26.2292,
                "longitude" => -52.6706
            ],
            [
                "name" => "Paula Freitas, Paraná",
                "latitude" => -26.2105,
                "longitude" => -50.931
            ],
            [
                "name" => "Paulo Frontin, Paraná",
                "latitude" => -26.0466,
                "longitude" => -50.8304
            ],
            [
                "name" => "Peabiru, Paraná",
                "latitude" => -23.914,
                "longitude" => -52.3431
            ],
            [
                "name" => "Perobal, Paraná",
                "latitude" => -23.8949,
                "longitude" => -53.4098
            ],
            [
                "name" => "Pérola, Paraná",
                "latitude" => -23.8039,
                "longitude" => -53.6834
            ],
            [
                "name" => "Pérola d'Oeste, Paraná",
                "latitude" => -25.8278,
                "longitude" => -53.7433
            ],
            [
                "name" => "Piên, Paraná",
                "latitude" => -26.0965,
                "longitude" => -49.4336
            ],
            [
                "name" => "Pinhais, Paraná",
                "latitude" => -25.4429,
                "longitude" => -49.1927
            ],
            [
                "name" => "Pinhalão, Paraná",
                "latitude" => -23.7982,
                "longitude" => -50.0536
            ],
            [
                "name" => "Pinhal de São Bento, Paraná",
                "latitude" => -26.0324,
                "longitude" => -53.482
            ],
            [
                "name" => "Pinhão, Paraná",
                "latitude" => -25.6944,
                "longitude" => -51.6536
            ],
            [
                "name" => "Piraí do Sul, Paraná",
                "latitude" => -24.5306,
                "longitude" => -49.9433
            ],
            [
                "name" => "Piraquara, Paraná",
                "latitude" => -25.4422,
                "longitude" => -49.0624
            ],
            [
                "name" => "Pitanga, Paraná",
                "latitude" => -24.7588,
                "longitude" => -51.7596
            ],
            [
                "name" => "Pitangueiras, Paraná",
                "latitude" => -23.2281,
                "longitude" => -51.5873
            ],
            [
                "name" => "Planaltina do Paraná, Paraná",
                "latitude" => -23.0101,
                "longitude" => -52.9162
            ],
            [
                "name" => "Planalto, Paraná",
                "latitude" => -25.7211,
                "longitude" => -53.7642
            ],
            [
                "name" => "Ponta Grossa, Paraná",
                "latitude" => -25.0916,
                "longitude" => -50.1668
            ],
            [
                "name" => "Pontal do Paraná, Paraná",
                "latitude" => -25.6735,
                "longitude" => -48.5111
            ],
            [
                "name" => "Porecatu, Paraná",
                "latitude" => -22.7537,
                "longitude" => -51.3795
            ],
            [
                "name" => "Porto Amazonas, Paraná",
                "latitude" => -25.54,
                "longitude" => -49.8946
            ],
            [
                "name" => "Porto Barreiro, Paraná",
                "latitude" => -25.5477,
                "longitude" => -52.4067
            ],
            [
                "name" => "Porto Rico, Paraná",
                "latitude" => -22.7747,
                "longitude" => -53.2677
            ],
            [
                "name" => "Porto Vitória, Paraná",
                "latitude" => -26.1674,
                "longitude" => -51.231
            ],
            [
                "name" => "Prado Ferreira, Paraná",
                "latitude" => -23.0357,
                "longitude" => -51.4429
            ],
            [
                "name" => "Pranchita, Paraná",
                "latitude" => -26.0209,
                "longitude" => -53.7397
            ],
            [
                "name" => "Presidente Castelo Branco, Paraná",
                "latitude" => -23.2782,
                "longitude" => -52.1536
            ],
            [
                "name" => "Primeiro de Maio, Paraná",
                "latitude" => -22.8517,
                "longitude" => -51.0293
            ],
            [
                "name" => "Prudentópolis, Paraná",
                "latitude" => -25.2111,
                "longitude" => -50.9754
            ],
            [
                "name" => "Quarto Centenário, Paraná",
                "latitude" => -24.2775,
                "longitude" => -53.0759
            ],
            [
                "name" => "Quatiguá, Paraná",
                "latitude" => -23.5671,
                "longitude" => -49.916
            ],
            [
                "name" => "Quatro Barras, Paraná",
                "latitude" => -25.3673,
                "longitude" => -49.0763
            ],
            [
                "name" => "Quatro Pontes, Paraná",
                "latitude" => -24.5752,
                "longitude" => -53.9759
            ],
            [
                "name" => "Quedas do Iguaçu, Paraná",
                "latitude" => -25.4492,
                "longitude" => -52.9102
            ],
            [
                "name" => "Querência do Norte, Paraná",
                "latitude" => -23.0838,
                "longitude" => -53.483
            ],
            [
                "name" => "Quinta do Sol, Paraná",
                "latitude" => -23.8533,
                "longitude" => -52.1309
            ],
            [
                "name" => "Quitandinha, Paraná",
                "latitude" => -25.8734,
                "longitude" => -49.4973
            ],
            [
                "name" => "Ramilândia, Paraná",
                "latitude" => -25.1195,
                "longitude" => -54.023
            ],
            [
                "name" => "Rancho Alegre, Paraná",
                "latitude" => -23.0676,
                "longitude" => -50.9145
            ],
            [
                "name" => "Rancho Alegre D'Oeste, Paraná",
                "latitude" => -24.3065,
                "longitude" => -52.9552
            ],
            [
                "name" => "Realeza, Paraná",
                "latitude" => -25.7711,
                "longitude" => -53.526
            ],
            [
                "name" => "Rebouças, Paraná",
                "latitude" => -25.6232,
                "longitude" => -50.6877
            ],
            [
                "name" => "Renascença, Paraná",
                "latitude" => -26.1588,
                "longitude" => -52.9703
            ],
            [
                "name" => "Reserva, Paraná",
                "latitude" => -24.6492,
                "longitude" => -50.8466
            ],
            [
                "name" => "Reserva do Iguaçu, Paraná",
                "latitude" => -25.8319,
                "longitude" => -52.0272
            ],
            [
                "name" => "Ribeirão Claro, Paraná",
                "latitude" => -23.1941,
                "longitude" => -49.7597
            ],
            [
                "name" => "Ribeirão do Pinhal, Paraná",
                "latitude" => -23.4091,
                "longitude" => -50.3601
            ],
            [
                "name" => "Rio Azul, Paraná",
                "latitude" => -25.7306,
                "longitude" => -50.7985
            ],
            [
                "name" => "Rio Bom, Paraná",
                "latitude" => -23.7606,
                "longitude" => -51.4122
            ],
            [
                "name" => "Rio Bonito do Iguaçu, Paraná",
                "latitude" => -25.4874,
                "longitude" => -52.5292
            ],
            [
                "name" => "Rio Branco do Ivaí, Paraná",
                "latitude" => -24.3244,
                "longitude" => -51.3187
            ],
            [
                "name" => "Rio Branco do Sul, Paraná",
                "latitude" => -25.1892,
                "longitude" => -49.3115
            ],
            [
                "name" => "Rio Negro, Paraná",
                "latitude" => -26.095,
                "longitude" => -49.7982
            ],
            [
                "name" => "Rolândia, Paraná",
                "latitude" => -23.3101,
                "longitude" => -51.3659
            ],
            [
                "name" => "Roncador, Paraná",
                "latitude" => -24.5958,
                "longitude" => -52.2716
            ],
            [
                "name" => "Rondon, Paraná",
                "latitude" => -23.412,
                "longitude" => -52.7659
            ],
            [
                "name" => "Rosário do Ivaí, Paraná",
                "latitude" => -24.2682,
                "longitude" => -51.272
            ],
            [
                "name" => "Sabáudia, Paraná",
                "latitude" => -23.3155,
                "longitude" => -51.555
            ],
            [
                "name" => "Salgado Filho, Paraná",
                "latitude" => -26.1777,
                "longitude" => -53.3631
            ],
            [
                "name" => "Salto do Itararé, Paraná",
                "latitude" => -23.6074,
                "longitude" => -49.6354
            ],
            [
                "name" => "Salto do Lontra, Paraná",
                "latitude" => -25.7813,
                "longitude" => -53.3135
            ],
            [
                "name" => "Santa Amélia, Paraná",
                "latitude" => -23.2654,
                "longitude" => -50.4288
            ],
            [
                "name" => "Santa Cecília do Pavão, Paraná",
                "latitude" => -23.5201,
                "longitude" => -50.7835
            ],
            [
                "name" => "Santa Cruz de Monte Castelo, Paraná",
                "latitude" => -22.9582,
                "longitude" => -53.2949
            ],
            [
                "name" => "Santa Fé, Paraná",
                "latitude" => -23.04,
                "longitude" => -51.808
            ],
            [
                "name" => "Santa Helena, Paraná",
                "latitude" => -24.8585,
                "longitude" => -54.336
            ],
            [
                "name" => "Santa Inês, Paraná",
                "latitude" => -22.6376,
                "longitude" => -51.9024
            ],
            [
                "name" => "Santa Isabel do Ivaí, Paraná",
                "latitude" => -23.0025,
                "longitude" => -53.1989
            ],
            [
                "name" => "Santa Izabel do Oeste, Paraná",
                "latitude" => -25.8217,
                "longitude" => -53.4801
            ],
            [
                "name" => "Santa Lúcia, Paraná",
                "latitude" => -25.4104,
                "longitude" => -53.5638
            ],
            [
                "name" => "Santa Maria do Oeste, Paraná",
                "latitude" => -24.9377,
                "longitude" => -51.8696
            ],
            [
                "name" => "Santa Mariana, Paraná",
                "latitude" => -23.1465,
                "longitude" => -50.5167
            ],
            [
                "name" => "Santa Mônica, Paraná",
                "latitude" => -23.108,
                "longitude" => -53.1103
            ],
            [
                "name" => "Santana do Itararé, Paraná",
                "latitude" => -23.7587,
                "longitude" => -49.6293
            ],
            [
                "name" => "Santa Tereza do Oeste, Paraná",
                "latitude" => -25.0543,
                "longitude" => -53.6274
            ],
            [
                "name" => "Santa Terezinha de Itaipu, Paraná",
                "latitude" => -25.4391,
                "longitude" => -54.402
            ],
            [
                "name" => "Santo Antônio da Platina, Paraná",
                "latitude" => -23.2959,
                "longitude" => -50.0815
            ],
            [
                "name" => "Santo Antônio do Caiuá, Paraná",
                "latitude" => -22.7351,
                "longitude" => -52.344
            ],
            [
                "name" => "Santo Antônio do Paraíso, Paraná",
                "latitude" => -23.4969,
                "longitude" => -50.6455
            ],
            [
                "name" => "Santo Antônio do Sudoeste, Paraná",
                "latitude" => -26.0737,
                "longitude" => -53.7251
            ],
            [
                "name" => "Santo Inácio, Paraná",
                "latitude" => -22.6957,
                "longitude" => -51.7969
            ],
            [
                "name" => "São Carlos do Ivaí, Paraná",
                "latitude" => -23.3158,
                "longitude" => -52.4761
            ],
            [
                "name" => "São Jerônimo da Serra, Paraná",
                "latitude" => -23.7218,
                "longitude" => -50.7475
            ],
            [
                "name" => "São João, Paraná",
                "latitude" => -25.8214,
                "longitude" => -52.7252
            ],
            [
                "name" => "São João do Caiuá, Paraná",
                "latitude" => -22.8535,
                "longitude" => -52.3411
            ],
            [
                "name" => "São João do Ivaí, Paraná",
                "latitude" => -23.9833,
                "longitude" => -51.8215
            ],
            [
                "name" => "São João do Triunfo, Paraná",
                "latitude" => -25.683,
                "longitude" => -50.2949
            ],
            [
                "name" => "São Jorge d'Oeste, Paraná",
                "latitude" => -25.7085,
                "longitude" => -52.9204
            ],
            [
                "name" => "São Jorge do Ivaí, Paraná",
                "latitude" => -23.4336,
                "longitude" => -52.2929
            ],
            [
                "name" => "São Jorge do Patrocínio, Paraná",
                "latitude" => -23.7647,
                "longitude" => -53.8823
            ],
            [
                "name" => "São José da Boa Vista, Paraná",
                "latitude" => -23.9122,
                "longitude" => -49.6577
            ],
            [
                "name" => "São José das Palmeiras, Paraná",
                "latitude" => -24.8369,
                "longitude" => -54.0572
            ],
            [
                "name" => "São José dos Pinhais, Paraná",
                "latitude" => -25.5313,
                "longitude" => -49.2031
            ],
            [
                "name" => "São Manoel do Paraná, Paraná",
                "latitude" => -23.3941,
                "longitude" => -52.6454
            ],
            [
                "name" => "São Mateus do Sul, Paraná",
                "latitude" => -25.8677,
                "longitude" => -50.384
            ],
            [
                "name" => "São Miguel do Iguaçu, Paraná",
                "latitude" => -25.3492,
                "longitude" => -54.2405
            ],
            [
                "name" => "São Pedro do Iguaçu, Paraná",
                "latitude" => -24.9373,
                "longitude" => -53.8521
            ],
            [
                "name" => "São Pedro do Ivaí, Paraná",
                "latitude" => -23.8634,
                "longitude" => -51.8568
            ],
            [
                "name" => "São Pedro do Paraná, Paraná",
                "latitude" => -22.8239,
                "longitude" => -53.2241
            ],
            [
                "name" => "São Sebastião da Amoreira, Paraná",
                "latitude" => -23.4656,
                "longitude" => -50.7625
            ],
            [
                "name" => "São Tomé, Paraná",
                "latitude" => -23.5349,
                "longitude" => -52.5901
            ],
            [
                "name" => "Sapopema, Paraná",
                "latitude" => -23.9078,
                "longitude" => -50.5801
            ],
            [
                "name" => "Sarandi, Paraná",
                "latitude" => -23.4441,
                "longitude" => -51.876
            ],
            [
                "name" => "Saudade do Iguaçu, Paraná",
                "latitude" => -25.6917,
                "longitude" => -52.6184
            ],
            [
                "name" => "Sengés, Paraná",
                "latitude" => -24.1129,
                "longitude" => -49.4616
            ],
            [
                "name" => "Serranópolis do Iguaçu, Paraná",
                "latitude" => -25.3799,
                "longitude" => -54.0518
            ],
            [
                "name" => "Sertaneja, Paraná",
                "latitude" => -23.0361,
                "longitude" => -50.8317
            ],
            [
                "name" => "Sertanópolis, Paraná",
                "latitude" => -23.0571,
                "longitude" => -51.0399
            ],
            [
                "name" => "Siqueira Campos, Paraná",
                "latitude" => -23.6875,
                "longitude" => -49.8304
            ],
            [
                "name" => "Sulina, Paraná",
                "latitude" => -25.7066,
                "longitude" => -52.7299
            ],
            [
                "name" => "Tamarana, Paraná",
                "latitude" => -23.7204,
                "longitude" => -51.0991
            ],
            [
                "name" => "Tamboara, Paraná",
                "latitude" => -23.2036,
                "longitude" => -52.4743
            ],
            [
                "name" => "Tapejara, Paraná",
                "latitude" => -23.7315,
                "longitude" => -52.8735
            ],
            [
                "name" => "Tapira, Paraná",
                "latitude" => -23.3193,
                "longitude" => -53.0684
            ],
            [
                "name" => "Teixeira Soares, Paraná",
                "latitude" => -25.3701,
                "longitude" => -50.4571
            ],
            [
                "name" => "Telêmaco Borba, Paraná",
                "latitude" => -24.3245,
                "longitude" => -50.6176
            ],
            [
                "name" => "Terra Boa, Paraná",
                "latitude" => -23.7683,
                "longitude" => -52.447
            ],
            [
                "name" => "Terra Rica, Paraná",
                "latitude" => -22.7111,
                "longitude" => -52.6188
            ],
            [
                "name" => "Terra Roxa, Paraná",
                "latitude" => -24.1575,
                "longitude" => -54.0988
            ],
            [
                "name" => "Tibagi, Paraná",
                "latitude" => -24.5153,
                "longitude" => -50.4176
            ],
            [
                "name" => "Tijucas do Sul, Paraná",
                "latitude" => -25.9311,
                "longitude" => -49.195
            ],
            [
                "name" => "Toledo, Paraná",
                "latitude" => -24.7246,
                "longitude" => -53.7412
            ],
            [
                "name" => "Tomazina, Paraná",
                "latitude" => -23.7796,
                "longitude" => -49.9499
            ],
            [
                "name" => "Três Barras do Paraná, Paraná",
                "latitude" => -25.4185,
                "longitude" => -53.1833
            ],
            [
                "name" => "Tunas do Paraná, Paraná",
                "latitude" => -24.9731,
                "longitude" => -49.0879
            ],
            [
                "name" => "Tuneiras do Oeste, Paraná",
                "latitude" => -23.8648,
                "longitude" => -52.8769
            ],
            [
                "name" => "Tupãssi, Paraná",
                "latitude" => -24.5879,
                "longitude" => -53.5105
            ],
            [
                "name" => "Turvo, Paraná",
                "latitude" => -25.0437,
                "longitude" => -51.5282
            ],
            [
                "name" => "Ubiratã, Paraná",
                "latitude" => -24.5393,
                "longitude" => -52.9865
            ],
            [
                "name" => "Umuarama, Paraná",
                "latitude" => -23.7656,
                "longitude" => -53.3201
            ],
            [
                "name" => "União da Vitória, Paraná",
                "latitude" => -26.2273,
                "longitude" => -51.0873
            ],
            [
                "name" => "Uniflor, Paraná",
                "latitude" => -23.0868,
                "longitude" => -52.1573
            ],
            [
                "name" => "Uraí, Paraná",
                "latitude" => -23.2,
                "longitude" => -50.7939
            ],
            [
                "name" => "Wenceslau Braz, Paraná",
                "latitude" => -23.8742,
                "longitude" => -49.8032
            ],
            [
                "name" => "Ventania, Paraná",
                "latitude" => -24.2458,
                "longitude" => -50.2376
            ],
            [
                "name" => "Vera Cruz do Oeste, Paraná",
                "latitude" => -25.0577,
                "longitude" => -53.8771
            ],
            [
                "name" => "Verê, Paraná",
                "latitude" => -25.8772,
                "longitude" => -52.9051
            ],
            [
                "name" => "Alto Paraíso, Paraná",
                "latitude" => -26.1146,
                "longitude" => -52.7469
            ],
            [
                "name" => "Doutor Ulysses, Paraná",
                "latitude" => -24.5665,
                "longitude" => -49.4219
            ],
            [
                "name" => "Virmond, Paraná",
                "latitude" => -25.3829,
                "longitude" => -52.1987
            ],
            [
                "name" => "Vitorino, Paraná",
                "latitude" => -26.2683,
                "longitude" => -52.7843
            ],
            [
                "name" => "Xambrê, Paraná",
                "latitude" => -23.7364,
                "longitude" => -53.4884
            ],
            [
                "name" => "Abdon Batista, Santa Catarina",
                "latitude" => -27.6126,
                "longitude" => -51.0233
            ],
            [
                "name" => "Abelardo Luz, Santa Catarina",
                "latitude" => -26.5716,
                "longitude" => -52.3229
            ],
            [
                "name" => "Agrolândia, Santa Catarina",
                "latitude" => -27.4087,
                "longitude" => -49.822
            ],
            [
                "name" => "Agronômica, Santa Catarina",
                "latitude" => -27.2662,
                "longitude" => -49.708
            ],
            [
                "name" => "Água Doce, Santa Catarina",
                "latitude" => -26.9985,
                "longitude" => -51.5528
            ],
            [
                "name" => "Águas de Chapecó, Santa Catarina",
                "latitude" => -27.0754,
                "longitude" => -52.9808
            ],
            [
                "name" => "Águas Frias, Santa Catarina",
                "latitude" => -26.8794,
                "longitude" => -52.8568
            ],
            [
                "name" => "Águas Mornas, Santa Catarina",
                "latitude" => -27.6963,
                "longitude" => -48.8243
            ],
            [
                "name" => "Alfredo Wagner, Santa Catarina",
                "latitude" => -27.7001,
                "longitude" => -49.3273
            ],
            [
                "name" => "Alto Bela Vista, Santa Catarina",
                "latitude" => -27.4333,
                "longitude" => -51.9044
            ],
            [
                "name" => "Anchieta, Santa Catarina",
                "latitude" => -26.5382,
                "longitude" => -53.3319
            ],
            [
                "name" => "Angelina, Santa Catarina",
                "latitude" => -27.5704,
                "longitude" => -48.9879
            ],
            [
                "name" => "Anita Garibaldi, Santa Catarina",
                "latitude" => -27.6897,
                "longitude" => -51.1271
            ],
            [
                "name" => "Anitápolis, Santa Catarina",
                "latitude" => -27.9012,
                "longitude" => -49.1316
            ],
            [
                "name" => "Antônio Carlos, Santa Catarina",
                "latitude" => -27.5191,
                "longitude" => -48.766
            ],
            [
                "name" => "Apiúna, Santa Catarina",
                "latitude" => -27.0375,
                "longitude" => -49.3885
            ],
            [
                "name" => "Arabutã, Santa Catarina",
                "latitude" => -27.1587,
                "longitude" => -52.1423
            ],
            [
                "name" => "Araquari, Santa Catarina",
                "latitude" => -26.3754,
                "longitude" => -48.7188
            ],
            [
                "name" => "Araranguá, Santa Catarina",
                "latitude" => -28.9356,
                "longitude" => -49.4918
            ],
            [
                "name" => "Armazém, Santa Catarina",
                "latitude" => -28.2448,
                "longitude" => -49.0215
            ],
            [
                "name" => "Arroio Trinta, Santa Catarina",
                "latitude" => -26.9257,
                "longitude" => -51.3407
            ],
            [
                "name" => "Arvoredo, Santa Catarina",
                "latitude" => -27.0748,
                "longitude" => -52.4543
            ],
            [
                "name" => "Ascurra, Santa Catarina",
                "latitude" => -26.9548,
                "longitude" => -49.3783
            ],
            [
                "name" => "Atalanta, Santa Catarina",
                "latitude" => -27.4219,
                "longitude" => -49.7789
            ],
            [
                "name" => "Aurora, Santa Catarina",
                "latitude" => -27.3098,
                "longitude" => -49.6295
            ],
            [
                "name" => "Balneário Arroio do Silva, Santa Catarina",
                "latitude" => -28.9806,
                "longitude" => -49.4237
            ],
            [
                "name" => "Balneário Camboriú, Santa Catarina",
                "latitude" => -26.9926,
                "longitude" => -48.6352
            ],
            [
                "name" => "Balneário Barra do Sul, Santa Catarina",
                "latitude" => -26.4597,
                "longitude" => -48.6123
            ],
            [
                "name" => "Balneário Gaivota, Santa Catarina",
                "latitude" => -29.1527,
                "longitude" => -49.5841
            ],
            [
                "name" => "Bandeirante, Santa Catarina",
                "latitude" => -26.7705,
                "longitude" => -53.6413
            ],
            [
                "name" => "Barra Bonita, Santa Catarina",
                "latitude" => -26.654,
                "longitude" => -53.44
            ],
            [
                "name" => "Barra Velha, Santa Catarina",
                "latitude" => -26.637,
                "longitude" => -48.6933
            ],
            [
                "name" => "Bela Vista do Toldo, Santa Catarina",
                "latitude" => -26.2746,
                "longitude" => -50.4664
            ],
            [
                "name" => "Belmonte, Santa Catarina",
                "latitude" => -26.843,
                "longitude" => -53.5758
            ],
            [
                "name" => "Benedito Novo, Santa Catarina",
                "latitude" => -26.781,
                "longitude" => -49.3593
            ],
            [
                "name" => "Biguaçu, Santa Catarina",
                "latitude" => -27.496,
                "longitude" => -48.6598
            ],
            [
                "name" => "Blumenau, Santa Catarina",
                "latitude" => -26.9155,
                "longitude" => -49.0709
            ],
            [
                "name" => "Bocaina do Sul, Santa Catarina",
                "latitude" => -27.7455,
                "longitude" => -49.9423
            ],
            [
                "name" => "Bombinhas, Santa Catarina",
                "latitude" => -27.1382,
                "longitude" => -48.5146
            ],
            [
                "name" => "Bom Jardim da Serra, Santa Catarina",
                "latitude" => -28.3377,
                "longitude" => -49.6373
            ],
            [
                "name" => "Bom Jesus, Santa Catarina",
                "latitude" => -26.7326,
                "longitude" => -52.3919
            ],
            [
                "name" => "Bom Jesus do Oeste, Santa Catarina",
                "latitude" => -26.6927,
                "longitude" => -53.0967
            ],
            [
                "name" => "Bom Retiro, Santa Catarina",
                "latitude" => -27.799,
                "longitude" => -49.487
            ],
            [
                "name" => "Botuverá, Santa Catarina",
                "latitude" => -27.2007,
                "longitude" => -49.0689
            ],
            [
                "name" => "Braço do Norte, Santa Catarina",
                "latitude" => -28.2681,
                "longitude" => -49.1701
            ],
            [
                "name" => "Braço do Trombudo, Santa Catarina",
                "latitude" => -27.3586,
                "longitude" => -49.8821
            ],
            [
                "name" => "Brunópolis, Santa Catarina",
                "latitude" => -27.3058,
                "longitude" => -50.8684
            ],
            [
                "name" => "Brusque, Santa Catarina",
                "latitude" => -27.0977,
                "longitude" => -48.9107
            ],
            [
                "name" => "Caçador, Santa Catarina",
                "latitude" => -26.7757,
                "longitude" => -51.012
            ],
            [
                "name" => "Caibi, Santa Catarina",
                "latitude" => -27.0741,
                "longitude" => -53.2458
            ],
            [
                "name" => "Calmon, Santa Catarina",
                "latitude" => -26.5942,
                "longitude" => -51.095
            ],
            [
                "name" => "Camboriú, Santa Catarina",
                "latitude" => -27.0241,
                "longitude" => -48.6503
            ],
            [
                "name" => "Capão Alto, Santa Catarina",
                "latitude" => -27.9389,
                "longitude" => -50.5098
            ],
            [
                "name" => "Campo Alegre, Santa Catarina",
                "latitude" => -26.195,
                "longitude" => -49.2676
            ],
            [
                "name" => "Campo Belo do Sul, Santa Catarina",
                "latitude" => -27.8975,
                "longitude" => -50.7595
            ],
            [
                "name" => "Campo Erê, Santa Catarina",
                "latitude" => -26.3931,
                "longitude" => -53.0856
            ],
            [
                "name" => "Campos Novos, Santa Catarina",
                "latitude" => -27.4002,
                "longitude" => -51.2276
            ],
            [
                "name" => "Canelinha, Santa Catarina",
                "latitude" => -27.2616,
                "longitude" => -48.7658
            ],
            [
                "name" => "Canoinhas, Santa Catarina",
                "latitude" => -26.1766,
                "longitude" => -50.395
            ],
            [
                "name" => "Capinzal, Santa Catarina",
                "latitude" => -27.3473,
                "longitude" => -51.6057
            ],
            [
                "name" => "Capivari de Baixo, Santa Catarina",
                "latitude" => -28.4498,
                "longitude" => -48.9631
            ],
            [
                "name" => "Catanduvas, Santa Catarina",
                "latitude" => -27.069,
                "longitude" => -51.6602
            ],
            [
                "name" => "Caxambu do Sul, Santa Catarina",
                "latitude" => -27.1624,
                "longitude" => -52.8807
            ],
            [
                "name" => "Celso Ramos, Santa Catarina",
                "latitude" => -27.6327,
                "longitude" => -51.335
            ],
            [
                "name" => "Cerro Negro, Santa Catarina",
                "latitude" => -27.7942,
                "longitude" => -50.8673
            ],
            [
                "name" => "Chapadão do Lageado, Santa Catarina",
                "latitude" => -27.5905,
                "longitude" => -49.5539
            ],
            [
                "name" => "Chapecó, Santa Catarina",
                "latitude" => -27.1004,
                "longitude" => -52.6152
            ],
            [
                "name" => "Cocal do Sul, Santa Catarina",
                "latitude" => -28.5986,
                "longitude" => -49.3335
            ],
            [
                "name" => "Concórdia, Santa Catarina",
                "latitude" => -27.2335,
                "longitude" => -52.026
            ],
            [
                "name" => "Cordilheira Alta, Santa Catarina",
                "latitude" => -26.9844,
                "longitude" => -52.6056
            ],
            [
                "name" => "Coronel Freitas, Santa Catarina",
                "latitude" => -26.9057,
                "longitude" => -52.7011
            ],
            [
                "name" => "Coronel Martins, Santa Catarina",
                "latitude" => -26.511,
                "longitude" => -52.6694
            ],
            [
                "name" => "Corupá, Santa Catarina",
                "latitude" => -26.4246,
                "longitude" => -49.246
            ],
            [
                "name" => "Correia Pinto, Santa Catarina",
                "latitude" => -27.5877,
                "longitude" => -50.3614
            ],
            [
                "name" => "Criciúma, Santa Catarina",
                "latitude" => -28.6723,
                "longitude" => -49.3729
            ],
            [
                "name" => "Cunha Porã, Santa Catarina",
                "latitude" => -26.895,
                "longitude" => -53.1662
            ],
            [
                "name" => "Cunhataí, Santa Catarina",
                "latitude" => -26.9709,
                "longitude" => -53.0895
            ],
            [
                "name" => "Curitibanos, Santa Catarina",
                "latitude" => -27.2824,
                "longitude" => -50.5816
            ],
            [
                "name" => "Descanso, Santa Catarina",
                "latitude" => -26.827,
                "longitude" => -53.5034
            ],
            [
                "name" => "Dionísio Cerqueira, Santa Catarina",
                "latitude" => -26.2648,
                "longitude" => -53.6351
            ],
            [
                "name" => "Dona Emma, Santa Catarina",
                "latitude" => -26.981,
                "longitude" => -49.7261
            ],
            [
                "name" => "Doutor Pedrinho, Santa Catarina",
                "latitude" => -26.7174,
                "longitude" => -49.4795
            ],
            [
                "name" => "Entre Rios, Santa Catarina",
                "latitude" => -26.7225,
                "longitude" => -52.5585
            ],
            [
                "name" => "Ermo, Santa Catarina",
                "latitude" => -28.9869,
                "longitude" => -49.643
            ],
            [
                "name" => "Erval Velho, Santa Catarina",
                "latitude" => -27.2743,
                "longitude" => -51.443
            ],
            [
                "name" => "Faxinal dos Guedes, Santa Catarina",
                "latitude" => -26.8451,
                "longitude" => -52.2596
            ],
            [
                "name" => "Flor do Sertão, Santa Catarina",
                "latitude" => -26.7811,
                "longitude" => -53.3505
            ],
            [
                "name" => "Florianópolis, Santa Catarina",
                "latitude" => -27.5945,
                "longitude" => -48.5477
            ],
            [
                "name" => "Formosa do Sul, Santa Catarina",
                "latitude" => -26.6453,
                "longitude" => -52.7946
            ],
            [
                "name" => "Forquilhinha, Santa Catarina",
                "latitude" => -28.7454,
                "longitude" => -49.4785
            ],
            [
                "name" => "Fraiburgo, Santa Catarina",
                "latitude" => -27.0233,
                "longitude" => -50.92
            ],
            [
                "name" => "Frei Rogério, Santa Catarina",
                "latitude" => -27.175,
                "longitude" => -50.8076
            ],
            [
                "name" => "Galvão, Santa Catarina",
                "latitude" => -26.4549,
                "longitude" => -52.6875
            ],
            [
                "name" => "Garopaba, Santa Catarina",
                "latitude" => -28.0275,
                "longitude" => -48.6192
            ],
            [
                "name" => "Garuva, Santa Catarina",
                "latitude" => -26.0292,
                "longitude" => -48.852
            ],
            [
                "name" => "Gaspar, Santa Catarina",
                "latitude" => -26.9336,
                "longitude" => -48.9534
            ],
            [
                "name" => "Governador Celso Ramos, Santa Catarina",
                "latitude" => -27.3172,
                "longitude" => -48.5576
            ],
            [
                "name" => "Grão Pará, Santa Catarina",
                "latitude" => -28.1809,
                "longitude" => -49.2252
            ],
            [
                "name" => "Gravatal, Santa Catarina",
                "latitude" => -28.3208,
                "longitude" => -49.0427
            ],
            [
                "name" => "Guabiruba, Santa Catarina",
                "latitude" => -27.0808,
                "longitude" => -48.9804
            ],
            [
                "name" => "Guaraciaba, Santa Catarina",
                "latitude" => -26.6042,
                "longitude" => -53.5243
            ],
            [
                "name" => "Guaramirim, Santa Catarina",
                "latitude" => -26.4688,
                "longitude" => -49.0026
            ],
            [
                "name" => "Guarujá do Sul, Santa Catarina",
                "latitude" => -26.3858,
                "longitude" => -53.5296
            ],
            [
                "name" => "Guatambú, Santa Catarina",
                "latitude" => -27.1341,
                "longitude" => -52.7887
            ],
            [
                "name" => "Herval d'Oeste, Santa Catarina",
                "latitude" => -27.1903,
                "longitude" => -51.4917
            ],
            [
                "name" => "Ibiam, Santa Catarina",
                "latitude" => -27.1847,
                "longitude" => -51.2352
            ],
            [
                "name" => "Ibicaré, Santa Catarina",
                "latitude" => -27.0881,
                "longitude" => -51.3681
            ],
            [
                "name" => "Ibirama, Santa Catarina",
                "latitude" => -27.0547,
                "longitude" => -49.5193
            ],
            [
                "name" => "Içara, Santa Catarina",
                "latitude" => -28.7132,
                "longitude" => -49.3087
            ],
            [
                "name" => "Ilhota, Santa Catarina",
                "latitude" => -26.9023,
                "longitude" => -48.8251
            ],
            [
                "name" => "Imaruí, Santa Catarina",
                "latitude" => -28.3339,
                "longitude" => -48.817
            ],
            [
                "name" => "Imbituba, Santa Catarina",
                "latitude" => -28.2284,
                "longitude" => -48.6659
            ],
            [
                "name" => "Imbuia, Santa Catarina",
                "latitude" => -27.4908,
                "longitude" => -49.4218
            ],
            [
                "name" => "Indaial, Santa Catarina",
                "latitude" => -26.8992,
                "longitude" => -49.2354
            ],
            [
                "name" => "Iomerê, Santa Catarina",
                "latitude" => -27.0019,
                "longitude" => -51.2442
            ],
            [
                "name" => "Ipira, Santa Catarina",
                "latitude" => -27.4038,
                "longitude" => -51.7758
            ],
            [
                "name" => "Iporã do Oeste, Santa Catarina",
                "latitude" => -26.9854,
                "longitude" => -53.5355
            ],
            [
                "name" => "Ipuaçu, Santa Catarina",
                "latitude" => -26.635,
                "longitude" => -52.4556
            ],
            [
                "name" => "Ipumirim, Santa Catarina",
                "latitude" => -27.0772,
                "longitude" => -52.1289
            ],
            [
                "name" => "Iraceminha, Santa Catarina",
                "latitude" => -26.8215,
                "longitude" => -53.2767
            ],
            [
                "name" => "Irani, Santa Catarina",
                "latitude" => -27.0287,
                "longitude" => -51.9012
            ],
            [
                "name" => "Irati, Santa Catarina",
                "latitude" => -26.6539,
                "longitude" => -52.8955
            ],
            [
                "name" => "Irineópolis, Santa Catarina",
                "latitude" => -26.242,
                "longitude" => -50.7957
            ],
            [
                "name" => "Itá, Santa Catarina",
                "latitude" => -27.2907,
                "longitude" => -52.3212
            ],
            [
                "name" => "Itaiópolis, Santa Catarina",
                "latitude" => -26.339,
                "longitude" => -49.9092
            ],
            [
                "name" => "Itajaí, Santa Catarina",
                "latitude" => -26.9101,
                "longitude" => -48.6705
            ],
            [
                "name" => "Itapema, Santa Catarina",
                "latitude" => -27.0861,
                "longitude" => -48.616
            ],
            [
                "name" => "Itapiranga, Santa Catarina",
                "latitude" => -27.1659,
                "longitude" => -53.7166
            ],
            [
                "name" => "Itapoá, Santa Catarina",
                "latitude" => -26.1158,
                "longitude" => -48.6182
            ],
            [
                "name" => "Ituporanga, Santa Catarina",
                "latitude" => -27.4101,
                "longitude" => -49.5963
            ],
            [
                "name" => "Jaborá, Santa Catarina",
                "latitude" => -27.1782,
                "longitude" => -51.7279
            ],
            [
                "name" => "Jacinto Machado, Santa Catarina",
                "latitude" => -28.9961,
                "longitude" => -49.7623
            ],
            [
                "name" => "Jaguaruna, Santa Catarina",
                "latitude" => -28.6146,
                "longitude" => -49.0296
            ],
            [
                "name" => "Jaraguá do Sul, Santa Catarina",
                "latitude" => -26.4851,
                "longitude" => -49.0713
            ],
            [
                "name" => "Jardinópolis, Santa Catarina",
                "latitude" => -26.7191,
                "longitude" => -52.8625
            ],
            [
                "name" => "Joaçaba, Santa Catarina",
                "latitude" => -27.1721,
                "longitude" => -51.5108
            ],
            [
                "name" => "Joinville, Santa Catarina",
                "latitude" => -26.3045,
                "longitude" => -48.8487
            ],
            [
                "name" => "José Boiteux, Santa Catarina",
                "latitude" => -26.9566,
                "longitude" => -49.6286
            ],
            [
                "name" => "Jupiá, Santa Catarina",
                "latitude" => -26.395,
                "longitude" => -52.7298
            ],
            [
                "name" => "Lacerdópolis, Santa Catarina",
                "latitude" => -27.2579,
                "longitude" => -51.5577
            ],
            [
                "name" => "Lages, Santa Catarina",
                "latitude" => -27.815,
                "longitude" => -50.3259
            ],
            [
                "name" => "Laguna, Santa Catarina",
                "latitude" => -28.4843,
                "longitude" => -48.7772
            ],
            [
                "name" => "Lajeado Grande, Santa Catarina",
                "latitude" => -26.8576,
                "longitude" => -52.5648
            ],
            [
                "name" => "Laurentino, Santa Catarina",
                "latitude" => -27.2173,
                "longitude" => -49.7331
            ],
            [
                "name" => "Lauro Muller, Santa Catarina",
                "latitude" => -28.3859,
                "longitude" => -49.4035
            ],
            [
                "name" => "Lebon Régis, Santa Catarina",
                "latitude" => -26.928,
                "longitude" => -50.6921
            ],
            [
                "name" => "Leoberto Leal, Santa Catarina",
                "latitude" => -27.5081,
                "longitude" => -49.2789
            ],
            [
                "name" => "Lindóia do Sul, Santa Catarina",
                "latitude" => -27.0545,
                "longitude" => -52.069
            ],
            [
                "name" => "Lontras, Santa Catarina",
                "latitude" => -27.1684,
                "longitude" => -49.535
            ],
            [
                "name" => "Luiz Alves, Santa Catarina",
                "latitude" => -26.7151,
                "longitude" => -48.9322
            ],
            [
                "name" => "Luzerna, Santa Catarina",
                "latitude" => -27.1304,
                "longitude" => -51.4682
            ],
            [
                "name" => "Macieira, Santa Catarina",
                "latitude" => -26.8552,
                "longitude" => -51.3705
            ],
            [
                "name" => "Mafra, Santa Catarina",
                "latitude" => -26.1159,
                "longitude" => -49.8086
            ],
            [
                "name" => "Major Gercino, Santa Catarina",
                "latitude" => -27.4192,
                "longitude" => -48.9488
            ],
            [
                "name" => "Major Vieira, Santa Catarina",
                "latitude" => -26.3709,
                "longitude" => -50.3266
            ],
            [
                "name" => "Maracajá, Santa Catarina",
                "latitude" => -28.8463,
                "longitude" => -49.4605
            ],
            [
                "name" => "Maravilha, Santa Catarina",
                "latitude" => -26.7665,
                "longitude" => -53.1737
            ],
            [
                "name" => "Marema, Santa Catarina",
                "latitude" => -26.8024,
                "longitude" => -52.6264
            ],
            [
                "name" => "Massaranduba, Santa Catarina",
                "latitude" => -26.6109,
                "longitude" => -49.0054
            ],
            [
                "name" => "Matos Costa, Santa Catarina",
                "latitude" => -26.4709,
                "longitude" => -51.1501
            ],
            [
                "name" => "Meleiro, Santa Catarina",
                "latitude" => -28.8244,
                "longitude" => -49.6378
            ],
            [
                "name" => "Mirim Doce, Santa Catarina",
                "latitude" => -27.197,
                "longitude" => -50.0786
            ],
            [
                "name" => "Modelo, Santa Catarina",
                "latitude" => -26.7729,
                "longitude" => -53.04
            ],
            [
                "name" => "Mondaí, Santa Catarina",
                "latitude" => -27.1008,
                "longitude" => -53.4032
            ],
            [
                "name" => "Monte Carlo, Santa Catarina",
                "latitude" => -27.2239,
                "longitude" => -50.9808
            ],
            [
                "name" => "Monte Castelo, Santa Catarina",
                "latitude" => -26.461,
                "longitude" => -50.2327
            ],
            [
                "name" => "Morro da Fumaça, Santa Catarina",
                "latitude" => -28.6511,
                "longitude" => -49.2169
            ],
            [
                "name" => "Morro Grande, Santa Catarina",
                "latitude" => -28.8006,
                "longitude" => -49.7214
            ],
            [
                "name" => "Navegantes, Santa Catarina",
                "latitude" => -26.8943,
                "longitude" => -48.6546
            ],
            [
                "name" => "Nova Erechim, Santa Catarina",
                "latitude" => -26.8982,
                "longitude" => -52.9066
            ],
            [
                "name" => "Nova Itaberaba, Santa Catarina",
                "latitude" => -26.9428,
                "longitude" => -52.8141
            ],
            [
                "name" => "Nova Trento, Santa Catarina",
                "latitude" => -27.278,
                "longitude" => -48.9298
            ],
            [
                "name" => "Nova Veneza, Santa Catarina",
                "latitude" => -28.6338,
                "longitude" => -49.5055
            ],
            [
                "name" => "Novo Horizonte, Santa Catarina",
                "latitude" => -26.4442,
                "longitude" => -52.8281
            ],
            [
                "name" => "Orleans, Santa Catarina",
                "latitude" => -28.3487,
                "longitude" => -49.2986
            ],
            [
                "name" => "Otacílio Costa, Santa Catarina",
                "latitude" => -27.4789,
                "longitude" => -50.1231
            ],
            [
                "name" => "Ouro, Santa Catarina",
                "latitude" => -27.3379,
                "longitude" => -51.6194
            ],
            [
                "name" => "Ouro Verde, Santa Catarina",
                "latitude" => -26.692,
                "longitude" => -52.3108
            ],
            [
                "name" => "Paial, Santa Catarina",
                "latitude" => -27.2541,
                "longitude" => -52.4975
            ],
            [
                "name" => "Painel, Santa Catarina",
                "latitude" => -27.9234,
                "longitude" => -50.0972
            ],
            [
                "name" => "Palhoça, Santa Catarina",
                "latitude" => -27.6455,
                "longitude" => -48.6697
            ],
            [
                "name" => "Palma Sola, Santa Catarina",
                "latitude" => -26.3471,
                "longitude" => -53.2771
            ],
            [
                "name" => "Palmeira, Santa Catarina",
                "latitude" => -27.583,
                "longitude" => -50.1577
            ],
            [
                "name" => "Palmitos, Santa Catarina",
                "latitude" => -27.0702,
                "longitude" => -53.1586
            ],
            [
                "name" => "Papanduva, Santa Catarina",
                "latitude" => -26.3777,
                "longitude" => -50.1419
            ],
            [
                "name" => "Paraíso, Santa Catarina",
                "latitude" => -26.62,
                "longitude" => -53.6716
            ],
            [
                "name" => "Passo de Torres, Santa Catarina",
                "latitude" => -29.3099,
                "longitude" => -49.722
            ],
            [
                "name" => "Passos Maia, Santa Catarina",
                "latitude" => -26.7829,
                "longitude" => -52.0568
            ],
            [
                "name" => "Paulo Lopes, Santa Catarina",
                "latitude" => -27.9607,
                "longitude" => -48.6864
            ],
            [
                "name" => "Pedras Grandes, Santa Catarina",
                "latitude" => -28.4339,
                "longitude" => -49.1949
            ],
            [
                "name" => "Penha, Santa Catarina",
                "latitude" => -26.7754,
                "longitude" => -48.6465
            ],
            [
                "name" => "Peritiba, Santa Catarina",
                "latitude" => -27.3754,
                "longitude" => -51.9018
            ],
            [
                "name" => "Pescaria Brava, Santa Catarina",
                "latitude" => -28.3966,
                "longitude" => -48.8864
            ],
            [
                "name" => "Petrolândia, Santa Catarina",
                "latitude" => -27.5346,
                "longitude" => -49.6937
            ],
            [
                "name" => "Balneário Piçarras, Santa Catarina",
                "latitude" => -26.7639,
                "longitude" => -48.6717
            ],
            [
                "name" => "Pinhalzinho, Santa Catarina",
                "latitude" => -26.8495,
                "longitude" => -52.9913
            ],
            [
                "name" => "Pinheiro Preto, Santa Catarina",
                "latitude" => -27.0483,
                "longitude" => -51.2243
            ],
            [
                "name" => "Piratuba, Santa Catarina",
                "latitude" => -27.4242,
                "longitude" => -51.7668
            ],
            [
                "name" => "Planalto Alegre, Santa Catarina",
                "latitude" => -27.0704,
                "longitude" => -52.867
            ],
            [
                "name" => "Pomerode, Santa Catarina",
                "latitude" => -26.7384,
                "longitude" => -49.1785
            ],
            [
                "name" => "Ponte Alta, Santa Catarina",
                "latitude" => -27.4835,
                "longitude" => -50.3764
            ],
            [
                "name" => "Ponte Alta do Norte, Santa Catarina",
                "latitude" => -27.1591,
                "longitude" => -50.4659
            ],
            [
                "name" => "Ponte Serrada, Santa Catarina",
                "latitude" => -26.8733,
                "longitude" => -52.0112
            ],
            [
                "name" => "Porto Belo, Santa Catarina",
                "latitude" => -27.1586,
                "longitude" => -48.5469
            ],
            [
                "name" => "Porto União, Santa Catarina",
                "latitude" => -26.2451,
                "longitude" => -51.0759
            ],
            [
                "name" => "Pouso Redondo, Santa Catarina",
                "latitude" => -27.2567,
                "longitude" => -49.9301
            ],
            [
                "name" => "Praia Grande, Santa Catarina",
                "latitude" => -29.1918,
                "longitude" => -49.9525
            ],
            [
                "name" => "Presidente Castello Branco, Santa Catarina",
                "latitude" => -27.2218,
                "longitude" => -51.8089
            ],
            [
                "name" => "Presidente Getúlio, Santa Catarina",
                "latitude" => -27.0474,
                "longitude" => -49.6246
            ],
            [
                "name" => "Presidente Nereu, Santa Catarina",
                "latitude" => -27.2768,
                "longitude" => -49.3889
            ],
            [
                "name" => "Princesa, Santa Catarina",
                "latitude" => -26.4441,
                "longitude" => -53.5994
            ],
            [
                "name" => "Quilombo, Santa Catarina",
                "latitude" => -26.7264,
                "longitude" => -52.724
            ],
            [
                "name" => "Rancho Queimado, Santa Catarina",
                "latitude" => -27.6727,
                "longitude" => -49.0191
            ],
            [
                "name" => "Rio das Antas, Santa Catarina",
                "latitude" => -26.8946,
                "longitude" => -51.0674
            ],
            [
                "name" => "Rio do Campo, Santa Catarina",
                "latitude" => -26.9452,
                "longitude" => -50.136
            ],
            [
                "name" => "Rio do Oeste, Santa Catarina",
                "latitude" => -27.1952,
                "longitude" => -49.7989
            ],
            [
                "name" => "Rio dos Cedros, Santa Catarina",
                "latitude" => -26.7398,
                "longitude" => -49.2718
            ],
            [
                "name" => "Rio do Sul, Santa Catarina",
                "latitude" => -27.2156,
                "longitude" => -49.643
            ],
            [
                "name" => "Rio Fortuna, Santa Catarina",
                "latitude" => -28.1244,
                "longitude" => -49.1068
            ],
            [
                "name" => "Rio Negrinho, Santa Catarina",
                "latitude" => -26.2591,
                "longitude" => -49.5177
            ],
            [
                "name" => "Rio Rufino, Santa Catarina",
                "latitude" => -27.8592,
                "longitude" => -49.7754
            ],
            [
                "name" => "Riqueza, Santa Catarina",
                "latitude" => -27.0653,
                "longitude" => -53.3265
            ],
            [
                "name" => "Rodeio, Santa Catarina",
                "latitude" => -26.9243,
                "longitude" => -49.3649
            ],
            [
                "name" => "Romelândia, Santa Catarina",
                "latitude" => -26.6809,
                "longitude" => -53.3172
            ],
            [
                "name" => "Salete, Santa Catarina",
                "latitude" => -26.9798,
                "longitude" => -49.9988
            ],
            [
                "name" => "Saltinho, Santa Catarina",
                "latitude" => -26.6049,
                "longitude" => -53.0578
            ],
            [
                "name" => "Salto Veloso, Santa Catarina",
                "latitude" => -26.903,
                "longitude" => -51.4043
            ],
            [
                "name" => "Sangão, Santa Catarina",
                "latitude" => -28.6326,
                "longitude" => -49.1322
            ],
            [
                "name" => "Santa Cecília, Santa Catarina",
                "latitude" => -26.9592,
                "longitude" => -50.4252
            ],
            [
                "name" => "Santa Helena, Santa Catarina",
                "latitude" => -26.937,
                "longitude" => -53.6214
            ],
            [
                "name" => "Santa Rosa de Lima, Santa Catarina",
                "latitude" => -28.0331,
                "longitude" => -49.133
            ],
            [
                "name" => "Santa Rosa do Sul, Santa Catarina",
                "latitude" => -29.1313,
                "longitude" => -49.7109
            ],
            [
                "name" => "Santa Terezinha, Santa Catarina",
                "latitude" => -26.7813,
                "longitude" => -50.009
            ],
            [
                "name" => "Santa Terezinha do Progresso, Santa Catarina",
                "latitude" => -26.624,
                "longitude" => -53.1997
            ],
            [
                "name" => "Santiago do Sul, Santa Catarina",
                "latitude" => -26.6388,
                "longitude" => -52.6799
            ],
            [
                "name" => "Santo Amaro da Imperatriz, Santa Catarina",
                "latitude" => -27.6852,
                "longitude" => -48.7813
            ],
            [
                "name" => "São Bernardino, Santa Catarina",
                "latitude" => -26.4739,
                "longitude" => -52.9687
            ],
            [
                "name" => "São Bento do Sul, Santa Catarina",
                "latitude" => -26.2495,
                "longitude" => -49.3831
            ],
            [
                "name" => "São Bonifácio, Santa Catarina",
                "latitude" => -27.9009,
                "longitude" => -48.9326
            ],
            [
                "name" => "São Carlos, Santa Catarina",
                "latitude" => -27.0798,
                "longitude" => -53.0037
            ],
            [
                "name" => "São Cristovão do Sul, Santa Catarina",
                "latitude" => -27.2666,
                "longitude" => -50.4388
            ],
            [
                "name" => "São Domingos, Santa Catarina",
                "latitude" => -26.5548,
                "longitude" => -52.5313
            ],
            [
                "name" => "São Francisco do Sul, Santa Catarina",
                "latitude" => -26.2579,
                "longitude" => -48.6344
            ],
            [
                "name" => "São João do Oeste, Santa Catarina",
                "latitude" => -27.0984,
                "longitude" => -53.5977
            ],
            [
                "name" => "São João Batista, Santa Catarina",
                "latitude" => -27.2772,
                "longitude" => -48.8474
            ],
            [
                "name" => "São João do Itaperiú, Santa Catarina",
                "latitude" => -26.6213,
                "longitude" => -48.7683
            ],
            [
                "name" => "São João do Sul, Santa Catarina",
                "latitude" => -29.2154,
                "longitude" => -49.8094
            ],
            [
                "name" => "São Joaquim, Santa Catarina",
                "latitude" => -28.2887,
                "longitude" => -49.9457
            ],
            [
                "name" => "São José, Santa Catarina",
                "latitude" => -27.6136,
                "longitude" => -48.6366
            ],
            [
                "name" => "São José do Cedro, Santa Catarina",
                "latitude" => -26.4561,
                "longitude" => -53.4955
            ],
            [
                "name" => "São José do Cerrito, Santa Catarina",
                "latitude" => -27.6602,
                "longitude" => -50.5733
            ],
            [
                "name" => "São Lourenço do Oeste, Santa Catarina",
                "latitude" => -26.3557,
                "longitude" => -52.8498
            ],
            [
                "name" => "São Ludgero, Santa Catarina",
                "latitude" => -28.3144,
                "longitude" => -49.1806
            ],
            [
                "name" => "São Martinho, Santa Catarina",
                "latitude" => -28.1609,
                "longitude" => -48.9867
            ],
            [
                "name" => "São Miguel da Boa Vista, Santa Catarina",
                "latitude" => -26.687,
                "longitude" => -53.2511
            ],
            [
                "name" => "São Miguel do Oeste, Santa Catarina",
                "latitude" => -26.7242,
                "longitude" => -53.5163
            ],
            [
                "name" => "São Pedro de Alcântara, Santa Catarina",
                "latitude" => -27.5665,
                "longitude" => -48.8048
            ],
            [
                "name" => "Saudades, Santa Catarina",
                "latitude" => -26.9317,
                "longitude" => -53.0021
            ],
            [
                "name" => "Schroeder, Santa Catarina",
                "latitude" => -26.4116,
                "longitude" => -49.074
            ],
            [
                "name" => "Seara, Santa Catarina",
                "latitude" => -27.1564,
                "longitude" => -52.299
            ],
            [
                "name" => "Serra Alta, Santa Catarina",
                "latitude" => -26.7229,
                "longitude" => -53.0409
            ],
            [
                "name" => "Siderópolis, Santa Catarina",
                "latitude" => -28.5955,
                "longitude" => -49.4314
            ],
            [
                "name" => "Sombrio, Santa Catarina",
                "latitude" => -29.108,
                "longitude" => -49.6328
            ],
            [
                "name" => "Sul Brasil, Santa Catarina",
                "latitude" => -26.7351,
                "longitude" => -52.964
            ],
            [
                "name" => "Taió, Santa Catarina",
                "latitude" => -27.121,
                "longitude" => -49.9942
            ],
            [
                "name" => "Tangará, Santa Catarina",
                "latitude" => -27.0996,
                "longitude" => -51.2473
            ],
            [
                "name" => "Tigrinhos, Santa Catarina",
                "latitude" => -26.6876,
                "longitude" => -53.1545
            ],
            [
                "name" => "Tijucas, Santa Catarina",
                "latitude" => -27.2354,
                "longitude" => -48.6322
            ],
            [
                "name" => "Timbé do Sul, Santa Catarina",
                "latitude" => -28.8287,
                "longitude" => -49.842
            ],
            [
                "name" => "Timbó, Santa Catarina",
                "latitude" => -26.8246,
                "longitude" => -49.269
            ],
            [
                "name" => "Timbó Grande, Santa Catarina",
                "latitude" => -26.6127,
                "longitude" => -50.6607
            ],
            [
                "name" => "Três Barras, Santa Catarina",
                "latitude" => -26.1056,
                "longitude" => -50.3197
            ],
            [
                "name" => "Treviso, Santa Catarina",
                "latitude" => -28.5097,
                "longitude" => -49.4634
            ],
            [
                "name" => "Treze de Maio, Santa Catarina",
                "latitude" => -28.5537,
                "longitude" => -49.1565
            ],
            [
                "name" => "Treze Tílias, Santa Catarina",
                "latitude" => -27.0026,
                "longitude" => -51.4084
            ],
            [
                "name" => "Trombudo Central, Santa Catarina",
                "latitude" => -27.3033,
                "longitude" => -49.793
            ],
            [
                "name" => "Tubarão, Santa Catarina",
                "latitude" => -28.4713,
                "longitude" => -49.0144
            ],
            [
                "name" => "Tunápolis, Santa Catarina",
                "latitude" => -26.9681,
                "longitude" => -53.6417
            ],
            [
                "name" => "Turvo, Santa Catarina",
                "latitude" => -28.9272,
                "longitude" => -49.6831
            ],
            [
                "name" => "União do Oeste, Santa Catarina",
                "latitude" => -26.762,
                "longitude" => -52.8541
            ],
            [
                "name" => "Urubici, Santa Catarina",
                "latitude" => -28.0157,
                "longitude" => -49.5925
            ],
            [
                "name" => "Urupema, Santa Catarina",
                "latitude" => -27.9557,
                "longitude" => -49.8729
            ],
            [
                "name" => "Urussanga, Santa Catarina",
                "latitude" => -28.518,
                "longitude" => -49.3238
            ],
            [
                "name" => "Vargeão, Santa Catarina",
                "latitude" => -26.8621,
                "longitude" => -52.1549
            ],
            [
                "name" => "Vargem, Santa Catarina",
                "latitude" => -27.4867,
                "longitude" => -50.9724
            ],
            [
                "name" => "Vargem Bonita, Santa Catarina",
                "latitude" => -27.0055,
                "longitude" => -51.7402
            ],
            [
                "name" => "Vidal Ramos, Santa Catarina",
                "latitude" => -27.3886,
                "longitude" => -49.3593
            ],
            [
                "name" => "Videira, Santa Catarina",
                "latitude" => -27.0086,
                "longitude" => -51.1543
            ],
            [
                "name" => "Vitor Meireles, Santa Catarina",
                "latitude" => -26.8782,
                "longitude" => -49.8328
            ],
            [
                "name" => "Witmarsum, Santa Catarina",
                "latitude" => -26.9275,
                "longitude" => -49.7947
            ],
            [
                "name" => "Xanxerê, Santa Catarina",
                "latitude" => -26.8747,
                "longitude" => -52.4036
            ],
            [
                "name" => "Xavantina, Santa Catarina",
                "latitude" => -27.0667,
                "longitude" => -52.343
            ],
            [
                "name" => "Xaxim, Santa Catarina",
                "latitude" => -26.9596,
                "longitude" => -52.5374
            ],
            [
                "name" => "Zortéa, Santa Catarina",
                "latitude" => -27.4521,
                "longitude" => -51.552
            ],
            [
                "name" => "Balneário Rincão, Santa Catarina",
                "latitude" => -28.8314,
                "longitude" => -49.2352
            ],
            [
                "name" => "Aceguá, Rio Grande do Sul",
                "latitude" => -31.8665,
                "longitude" => -54.1615
            ],
            [
                "name" => "Água Santa, Rio Grande do Sul",
                "latitude" => -28.1672,
                "longitude" => -52.031
            ],
            [
                "name" => "Agudo, Rio Grande do Sul",
                "latitude" => -29.6447,
                "longitude" => -53.2515
            ],
            [
                "name" => "Ajuricaba, Rio Grande do Sul",
                "latitude" => -28.2342,
                "longitude" => -53.7757
            ],
            [
                "name" => "Alecrim, Rio Grande do Sul",
                "latitude" => -27.6579,
                "longitude" => -54.7649
            ],
            [
                "name" => "Alegrete, Rio Grande do Sul",
                "latitude" => -29.7902,
                "longitude" => -55.7949
            ],
            [
                "name" => "Alegria, Rio Grande do Sul",
                "latitude" => -27.8345,
                "longitude" => -54.0557
            ],
            [
                "name" => "Almirante Tamandaré do Sul, Rio Grande do Sul",
                "latitude" => -28.1149,
                "longitude" => -52.9142
            ],
            [
                "name" => "Alpestre, Rio Grande do Sul",
                "latitude" => -27.2502,
                "longitude" => -53.0341
            ],
            [
                "name" => "Alto Alegre, Rio Grande do Sul",
                "latitude" => -28.7769,
                "longitude" => -52.9893
            ],
            [
                "name" => "Alto Feliz, Rio Grande do Sul",
                "latitude" => -29.3919,
                "longitude" => -51.3123
            ],
            [
                "name" => "Alvorada, Rio Grande do Sul",
                "latitude" => -29.9914,
                "longitude" => -51.0809
            ],
            [
                "name" => "Amaral Ferrador, Rio Grande do Sul",
                "latitude" => -30.8756,
                "longitude" => -52.2509
            ],
            [
                "name" => "Ametista do Sul, Rio Grande do Sul",
                "latitude" => -27.3607,
                "longitude" => -53.183
            ],
            [
                "name" => "André da Rocha, Rio Grande do Sul",
                "latitude" => -28.6283,
                "longitude" => -51.5797
            ],
            [
                "name" => "Anta Gorda, Rio Grande do Sul",
                "latitude" => -28.9698,
                "longitude" => -52.0102
            ],
            [
                "name" => "Antônio Prado, Rio Grande do Sul",
                "latitude" => -28.8565,
                "longitude" => -51.2883
            ],
            [
                "name" => "Arambaré, Rio Grande do Sul",
                "latitude" => -30.9092,
                "longitude" => -51.5046
            ],
            [
                "name" => "Araricá, Rio Grande do Sul",
                "latitude" => -29.6168,
                "longitude" => -50.9291
            ],
            [
                "name" => "Aratiba, Rio Grande do Sul",
                "latitude" => -27.3978,
                "longitude" => -52.2975
            ],
            [
                "name" => "Arroio do Meio, Rio Grande do Sul",
                "latitude" => -29.4014,
                "longitude" => -51.9557
            ],
            [
                "name" => "Arroio do Sal, Rio Grande do Sul",
                "latitude" => -29.5439,
                "longitude" => -49.8895
            ],
            [
                "name" => "Arroio do Padre, Rio Grande do Sul",
                "latitude" => -31.4389,
                "longitude" => -52.4246
            ],
            [
                "name" => "Arroio dos Ratos, Rio Grande do Sul",
                "latitude" => -30.0875,
                "longitude" => -51.7275
            ],
            [
                "name" => "Arroio do Tigre, Rio Grande do Sul",
                "latitude" => -29.3348,
                "longitude" => -53.0966
            ],
            [
                "name" => "Arroio Grande, Rio Grande do Sul",
                "latitude" => -32.2327,
                "longitude" => -53.0862
            ],
            [
                "name" => "Arvorezinha, Rio Grande do Sul",
                "latitude" => -28.8737,
                "longitude" => -52.1781
            ],
            [
                "name" => "Augusto Pestana, Rio Grande do Sul",
                "latitude" => -28.5172,
                "longitude" => -53.9883
            ],
            [
                "name" => "Áurea, Rio Grande do Sul",
                "latitude" => -27.6936,
                "longitude" => -52.0505
            ],
            [
                "name" => "Bagé, Rio Grande do Sul",
                "latitude" => -31.3297,
                "longitude" => -54.0999
            ],
            [
                "name" => "Balneário Pinhal, Rio Grande do Sul",
                "latitude" => -30.2419,
                "longitude" => -50.2337
            ],
            [
                "name" => "Barão, Rio Grande do Sul",
                "latitude" => -29.3725,
                "longitude" => -51.4949
            ],
            [
                "name" => "Barão de Cotegipe, Rio Grande do Sul",
                "latitude" => -27.6208,
                "longitude" => -52.3798
            ],
            [
                "name" => "Barão do Triunfo, Rio Grande do Sul",
                "latitude" => -30.3891,
                "longitude" => -51.7384
            ],
            [
                "name" => "Barracão, Rio Grande do Sul",
                "latitude" => -27.6739,
                "longitude" => -51.4585
            ],
            [
                "name" => "Barra do Guarita, Rio Grande do Sul",
                "latitude" => -27.1927,
                "longitude" => -53.7109
            ],
            [
                "name" => "Barra do Quaraí, Rio Grande do Sul",
                "latitude" => -30.2029,
                "longitude" => -57.5497
            ],
            [
                "name" => "Barra do Ribeiro, Rio Grande do Sul",
                "latitude" => -30.2939,
                "longitude" => -51.3014
            ],
            [
                "name" => "Barra do Rio Azul, Rio Grande do Sul",
                "latitude" => -27.4069,
                "longitude" => -52.4084
            ],
            [
                "name" => "Barra Funda, Rio Grande do Sul",
                "latitude" => -27.9205,
                "longitude" => -53.0391
            ],
            [
                "name" => "Barros Cassal, Rio Grande do Sul",
                "latitude" => -29.0947,
                "longitude" => -52.5836
            ],
            [
                "name" => "Benjamin Constant do Sul, Rio Grande do Sul",
                "latitude" => -27.5086,
                "longitude" => -52.5995
            ],
            [
                "name" => "Bento Gonçalves, Rio Grande do Sul",
                "latitude" => -29.1662,
                "longitude" => -51.5165
            ],
            [
                "name" => "Boa Vista das Missões, Rio Grande do Sul",
                "latitude" => -27.6671,
                "longitude" => -53.3102
            ],
            [
                "name" => "Boa Vista do Buricá, Rio Grande do Sul",
                "latitude" => -27.6693,
                "longitude" => -54.1082
            ],
            [
                "name" => "Boa Vista do Cadeado, Rio Grande do Sul",
                "latitude" => -28.5791,
                "longitude" => -53.8108
            ],
            [
                "name" => "Boa Vista do Incra, Rio Grande do Sul",
                "latitude" => -28.8185,
                "longitude" => -53.391
            ],
            [
                "name" => "Boa Vista do Sul, Rio Grande do Sul",
                "latitude" => -29.3544,
                "longitude" => -51.6687
            ],
            [
                "name" => "Bom Jesus, Rio Grande do Sul",
                "latitude" => -28.6697,
                "longitude" => -50.4295
            ],
            [
                "name" => "Bom Princípio, Rio Grande do Sul",
                "latitude" => -29.4856,
                "longitude" => -51.3548
            ],
            [
                "name" => "Bom Progresso, Rio Grande do Sul",
                "latitude" => -27.5399,
                "longitude" => -53.8716
            ],
            [
                "name" => "Bom Retiro do Sul, Rio Grande do Sul",
                "latitude" => -29.6071,
                "longitude" => -51.9456
            ],
            [
                "name" => "Boqueirão do Leão, Rio Grande do Sul",
                "latitude" => -29.3046,
                "longitude" => -52.4284
            ],
            [
                "name" => "Bossoroca, Rio Grande do Sul",
                "latitude" => -28.7291,
                "longitude" => -54.9035
            ],
            [
                "name" => "Bozano, Rio Grande do Sul",
                "latitude" => -28.3659,
                "longitude" => -53.772
            ],
            [
                "name" => "Braga, Rio Grande do Sul",
                "latitude" => -27.6173,
                "longitude" => -53.7405
            ],
            [
                "name" => "Brochier, Rio Grande do Sul",
                "latitude" => -29.5501,
                "longitude" => -51.5945
            ],
            [
                "name" => "Butiá, Rio Grande do Sul",
                "latitude" => -30.1179,
                "longitude" => -51.9601
            ],
            [
                "name" => "Caçapava do Sul, Rio Grande do Sul",
                "latitude" => -30.5144,
                "longitude" => -53.4827
            ],
            [
                "name" => "Cacequi, Rio Grande do Sul",
                "latitude" => -29.8883,
                "longitude" => -54.822
            ],
            [
                "name" => "Cachoeira do Sul, Rio Grande do Sul",
                "latitude" => -30.033,
                "longitude" => -52.8928
            ],
            [
                "name" => "Cachoeirinha, Rio Grande do Sul",
                "latitude" => -29.9472,
                "longitude" => -51.1016
            ],
            [
                "name" => "Cacique Doble, Rio Grande do Sul",
                "latitude" => -27.767,
                "longitude" => -51.6597
            ],
            [
                "name" => "Caibaté, Rio Grande do Sul",
                "latitude" => -28.2905,
                "longitude" => -54.6454
            ],
            [
                "name" => "Caiçara, Rio Grande do Sul",
                "latitude" => -27.2791,
                "longitude" => -53.4257
            ],
            [
                "name" => "Camaquã, Rio Grande do Sul",
                "latitude" => -30.8489,
                "longitude" => -51.8043
            ],
            [
                "name" => "Camargo, Rio Grande do Sul",
                "latitude" => -28.588,
                "longitude" => -52.2003
            ],
            [
                "name" => "Cambará do Sul, Rio Grande do Sul",
                "latitude" => -29.0474,
                "longitude" => -50.1465
            ],
            [
                "name" => "Campestre da Serra, Rio Grande do Sul",
                "latitude" => -28.7926,
                "longitude" => -51.0941
            ],
            [
                "name" => "Campina das Missões, Rio Grande do Sul",
                "latitude" => -27.9888,
                "longitude" => -54.8416
            ],
            [
                "name" => "Campinas do Sul, Rio Grande do Sul",
                "latitude" => -27.7174,
                "longitude" => -52.6248
            ],
            [
                "name" => "Campo Bom, Rio Grande do Sul",
                "latitude" => -29.6747,
                "longitude" => -51.0606
            ],
            [
                "name" => "Campo Novo, Rio Grande do Sul",
                "latitude" => -27.6792,
                "longitude" => -53.8052
            ],
            [
                "name" => "Campos Borges, Rio Grande do Sul",
                "latitude" => -28.8871,
                "longitude" => -53.0008
            ],
            [
                "name" => "Candelária, Rio Grande do Sul",
                "latitude" => -29.6684,
                "longitude" => -52.7895
            ],
            [
                "name" => "Cândido Godói, Rio Grande do Sul",
                "latitude" => -27.9515,
                "longitude" => -54.7517
            ],
            [
                "name" => "Candiota, Rio Grande do Sul",
                "latitude" => -31.5516,
                "longitude" => -53.6773
            ],
            [
                "name" => "Canela, Rio Grande do Sul",
                "latitude" => -29.356,
                "longitude" => -50.8119
            ],
            [
                "name" => "Canguçu, Rio Grande do Sul",
                "latitude" => -31.396,
                "longitude" => -52.6783
            ],
            [
                "name" => "Canoas, Rio Grande do Sul",
                "latitude" => -29.9128,
                "longitude" => -51.1857
            ],
            [
                "name" => "Canudos do Vale, Rio Grande do Sul",
                "latitude" => -29.3271,
                "longitude" => -52.2374
            ],
            [
                "name" => "Capão Bonito do Sul, Rio Grande do Sul",
                "latitude" => -28.1254,
                "longitude" => -51.3961
            ],
            [
                "name" => "Capão da Canoa, Rio Grande do Sul",
                "latitude" => -29.7642,
                "longitude" => -50.0282
            ],
            [
                "name" => "Capão do Cipó, Rio Grande do Sul",
                "latitude" => -28.9312,
                "longitude" => -54.5558
            ],
            [
                "name" => "Capão do Leão, Rio Grande do Sul",
                "latitude" => -31.7565,
                "longitude" => -52.4889
            ],
            [
                "name" => "Capivari do Sul, Rio Grande do Sul",
                "latitude" => -30.1383,
                "longitude" => -50.5152
            ],
            [
                "name" => "Capela de Santana, Rio Grande do Sul",
                "latitude" => -29.6961,
                "longitude" => -51.328
            ],
            [
                "name" => "Capitão, Rio Grande do Sul",
                "latitude" => -29.2674,
                "longitude" => -51.9853
            ],
            [
                "name" => "Carazinho, Rio Grande do Sul",
                "latitude" => -28.2958,
                "longitude" => -52.7933
            ],
            [
                "name" => "Caraá, Rio Grande do Sul",
                "latitude" => -29.7869,
                "longitude" => -50.4316
            ],
            [
                "name" => "Carlos Barbosa, Rio Grande do Sul",
                "latitude" => -29.2969,
                "longitude" => -51.5028
            ],
            [
                "name" => "Carlos Gomes, Rio Grande do Sul",
                "latitude" => -27.7167,
                "longitude" => -51.9121
            ],
            [
                "name" => "Casca, Rio Grande do Sul",
                "latitude" => -28.5605,
                "longitude" => -51.9815
            ],
            [
                "name" => "Caseiros, Rio Grande do Sul",
                "latitude" => -28.2582,
                "longitude" => -51.6861
            ],
            [
                "name" => "Catuípe, Rio Grande do Sul",
                "latitude" => -28.2554,
                "longitude" => -54.0132
            ],
            [
                "name" => "Caxias do Sul, Rio Grande do Sul",
                "latitude" => -29.1629,
                "longitude" => -51.1792
            ],
            [
                "name" => "Centenário, Rio Grande do Sul",
                "latitude" => -27.7615,
                "longitude" => -51.9984
            ],
            [
                "name" => "Cerrito, Rio Grande do Sul",
                "latitude" => -31.8419,
                "longitude" => -52.8004
            ],
            [
                "name" => "Cerro Branco, Rio Grande do Sul",
                "latitude" => -29.657,
                "longitude" => -52.9406
            ],
            [
                "name" => "Cerro Grande, Rio Grande do Sul",
                "latitude" => -27.6106,
                "longitude" => -53.1672
            ],
            [
                "name" => "Cerro Grande do Sul, Rio Grande do Sul",
                "latitude" => -30.5905,
                "longitude" => -51.7418
            ],
            [
                "name" => "Cerro Largo, Rio Grande do Sul",
                "latitude" => -28.1463,
                "longitude" => -54.7428
            ],
            [
                "name" => "Chapada, Rio Grande do Sul",
                "latitude" => -28.0559,
                "longitude" => -53.0665
            ],
            [
                "name" => "Charqueadas, Rio Grande do Sul",
                "latitude" => -29.9625,
                "longitude" => -51.6289
            ],
            [
                "name" => "Charrua, Rio Grande do Sul",
                "latitude" => -27.9493,
                "longitude" => -52.015
            ],
            [
                "name" => "Chiapetta, Rio Grande do Sul",
                "latitude" => -27.923,
                "longitude" => -53.9419
            ],
            [
                "name" => "Chuí, Rio Grande do Sul",
                "latitude" => -33.6866,
                "longitude" => -53.4594
            ],
            [
                "name" => "Chuvisca, Rio Grande do Sul",
                "latitude" => -30.7504,
                "longitude" => -51.9737
            ],
            [
                "name" => "Cidreira, Rio Grande do Sul",
                "latitude" => -30.1604,
                "longitude" => -50.2337
            ],
            [
                "name" => "Ciríaco, Rio Grande do Sul",
                "latitude" => -28.3419,
                "longitude" => -51.8741
            ],
            [
                "name" => "Colinas, Rio Grande do Sul",
                "latitude" => -29.3948,
                "longitude" => -51.8556
            ],
            [
                "name" => "Colorado, Rio Grande do Sul",
                "latitude" => -28.5258,
                "longitude" => -52.9928
            ],
            [
                "name" => "Condor, Rio Grande do Sul",
                "latitude" => -28.2075,
                "longitude" => -53.4905
            ],
            [
                "name" => "Constantina, Rio Grande do Sul",
                "latitude" => -27.732,
                "longitude" => -52.9938
            ],
            [
                "name" => "Coqueiro Baixo, Rio Grande do Sul",
                "latitude" => -29.1802,
                "longitude" => -52.0942
            ],
            [
                "name" => "Coqueiros do Sul, Rio Grande do Sul",
                "latitude" => -28.1194,
                "longitude" => -52.7842
            ],
            [
                "name" => "Coronel Barros, Rio Grande do Sul",
                "latitude" => -28.3921,
                "longitude" => -54.0686
            ],
            [
                "name" => "Coronel Bicaco, Rio Grande do Sul",
                "latitude" => -27.7197,
                "longitude" => -53.7022
            ],
            [
                "name" => "Coronel Pilar, Rio Grande do Sul",
                "latitude" => -29.2695,
                "longitude" => -51.6847
            ],
            [
                "name" => "Cotiporã, Rio Grande do Sul",
                "latitude" => -28.9891,
                "longitude" => -51.6971
            ],
            [
                "name" => "Coxilha, Rio Grande do Sul",
                "latitude" => -28.128,
                "longitude" => -52.3023
            ],
            [
                "name" => "Crissiumal, Rio Grande do Sul",
                "latitude" => -27.4999,
                "longitude" => -54.0994
            ],
            [
                "name" => "Cristal, Rio Grande do Sul",
                "latitude" => -31.0046,
                "longitude" => -52.0436
            ],
            [
                "name" => "Cristal do Sul, Rio Grande do Sul",
                "latitude" => -27.452,
                "longitude" => -53.2422
            ],
            [
                "name" => "Cruz Alta, Rio Grande do Sul",
                "latitude" => -28.645,
                "longitude" => -53.6048
            ],
            [
                "name" => "Cruzaltense, Rio Grande do Sul",
                "latitude" => -27.6672,
                "longitude" => -52.6522
            ],
            [
                "name" => "Cruzeiro do Sul, Rio Grande do Sul",
                "latitude" => -29.5148,
                "longitude" => -51.9928
            ],
            [
                "name" => "David Canabarro, Rio Grande do Sul",
                "latitude" => -28.3849,
                "longitude" => -51.8482
            ],
            [
                "name" => "Derrubadas, Rio Grande do Sul",
                "latitude" => -27.2642,
                "longitude" => -53.8645
            ],
            [
                "name" => "Dezesseis de Novembro, Rio Grande do Sul",
                "latitude" => -28.219,
                "longitude" => -55.0617
            ],
            [
                "name" => "Dilermando de Aguiar, Rio Grande do Sul",
                "latitude" => -29.7054,
                "longitude" => -54.2122
            ],
            [
                "name" => "Dois Irmãos, Rio Grande do Sul",
                "latitude" => -29.5836,
                "longitude" => -51.0898
            ],
            [
                "name" => "Dois Irmãos das Missões, Rio Grande do Sul",
                "latitude" => -27.6621,
                "longitude" => -53.5304
            ],
            [
                "name" => "Dois Lajeados, Rio Grande do Sul",
                "latitude" => -28.983,
                "longitude" => -51.8396
            ],
            [
                "name" => "Dom Feliciano, Rio Grande do Sul",
                "latitude" => -30.7004,
                "longitude" => -52.1026
            ],
            [
                "name" => "Dom Pedro de Alcântara, Rio Grande do Sul",
                "latitude" => -29.3639,
                "longitude" => -49.853
            ],
            [
                "name" => "Dom Pedrito, Rio Grande do Sul",
                "latitude" => -30.9756,
                "longitude" => -54.6694
            ],
            [
                "name" => "Dona Francisca, Rio Grande do Sul",
                "latitude" => -29.6195,
                "longitude" => -53.3617
            ],
            [
                "name" => "Doutor Maurício Cardoso, Rio Grande do Sul",
                "latitude" => -27.5103,
                "longitude" => -54.3577
            ],
            [
                "name" => "Doutor Ricardo, Rio Grande do Sul",
                "latitude" => -29.084,
                "longitude" => -51.9972
            ],
            [
                "name" => "Eldorado do Sul, Rio Grande do Sul",
                "latitude" => -30.0847,
                "longitude" => -51.6187
            ],
            [
                "name" => "Encantado, Rio Grande do Sul",
                "latitude" => -29.2351,
                "longitude" => -51.8703
            ],
            [
                "name" => "Encruzilhada do Sul, Rio Grande do Sul",
                "latitude" => -30.543,
                "longitude" => -52.5204
            ],
            [
                "name" => "Engenho Velho, Rio Grande do Sul",
                "latitude" => -27.706,
                "longitude" => -52.9145
            ],
            [
                "name" => "Entre-Ijuís, Rio Grande do Sul",
                "latitude" => -28.3686,
                "longitude" => -54.2686
            ],
            [
                "name" => "Entre Rios do Sul, Rio Grande do Sul",
                "latitude" => -27.5298,
                "longitude" => -52.7347
            ],
            [
                "name" => "Erebango, Rio Grande do Sul",
                "latitude" => -27.8544,
                "longitude" => -52.3005
            ],
            [
                "name" => "Erechim, Rio Grande do Sul",
                "latitude" => -27.6364,
                "longitude" => -52.2697
            ],
            [
                "name" => "Ernestina, Rio Grande do Sul",
                "latitude" => -28.4977,
                "longitude" => -52.5836
            ],
            [
                "name" => "Herval, Rio Grande do Sul",
                "latitude" => -32.024,
                "longitude" => -53.3944
            ],
            [
                "name" => "Erval Grande, Rio Grande do Sul",
                "latitude" => -27.3926,
                "longitude" => -52.574
            ],
            [
                "name" => "Erval Seco, Rio Grande do Sul",
                "latitude" => -27.5443,
                "longitude" => -53.5005
            ],
            [
                "name" => "Esmeralda, Rio Grande do Sul",
                "latitude" => -28.0518,
                "longitude" => -51.1933
            ],
            [
                "name" => "Esperança do Sul, Rio Grande do Sul",
                "latitude" => -27.3603,
                "longitude" => -53.9891
            ],
            [
                "name" => "Espumoso, Rio Grande do Sul",
                "latitude" => -28.7286,
                "longitude" => -52.8461
            ],
            [
                "name" => "Estação, Rio Grande do Sul",
                "latitude" => -27.9135,
                "longitude" => -52.2635
            ],
            [
                "name" => "Estância Velha, Rio Grande do Sul",
                "latitude" => -29.6535,
                "longitude" => -51.1843
            ],
            [
                "name" => "Esteio, Rio Grande do Sul",
                "latitude" => -29.852,
                "longitude" => -51.1841
            ],
            [
                "name" => "Estrela, Rio Grande do Sul",
                "latitude" => -29.5002,
                "longitude" => -51.9495
            ],
            [
                "name" => "Estrela Velha, Rio Grande do Sul",
                "latitude" => -29.1713,
                "longitude" => -53.1639
            ],
            [
                "name" => "Eugênio de Castro, Rio Grande do Sul",
                "latitude" => -28.5315,
                "longitude" => -54.1506
            ],
            [
                "name" => "Fagundes Varela, Rio Grande do Sul",
                "latitude" => -28.8794,
                "longitude" => -51.7014
            ],
            [
                "name" => "Farroupilha, Rio Grande do Sul",
                "latitude" => -29.2227,
                "longitude" => -51.3419
            ],
            [
                "name" => "Faxinal do Soturno, Rio Grande do Sul",
                "latitude" => -29.5788,
                "longitude" => -53.4484
            ],
            [
                "name" => "Faxinalzinho, Rio Grande do Sul",
                "latitude" => -27.4238,
                "longitude" => -52.6789
            ],
            [
                "name" => "Fazenda Vilanova, Rio Grande do Sul",
                "latitude" => -29.5885,
                "longitude" => -51.8217
            ],
            [
                "name" => "Feliz, Rio Grande do Sul",
                "latitude" => -29.4527,
                "longitude" => -51.3032
            ],
            [
                "name" => "Flores da Cunha, Rio Grande do Sul",
                "latitude" => -29.0261,
                "longitude" => -51.1875
            ],
            [
                "name" => "Floriano Peixoto, Rio Grande do Sul",
                "latitude" => -27.8614,
                "longitude" => -52.0838
            ],
            [
                "name" => "Fontoura Xavier, Rio Grande do Sul",
                "latitude" => -28.9817,
                "longitude" => -52.3445
            ],
            [
                "name" => "Formigueiro, Rio Grande do Sul",
                "latitude" => -30.0035,
                "longitude" => -53.4959
            ],
            [
                "name" => "Forquetinha, Rio Grande do Sul",
                "latitude" => -29.3828,
                "longitude" => -52.0981
            ],
            [
                "name" => "Fortaleza dos Valos, Rio Grande do Sul",
                "latitude" => -28.7986,
                "longitude" => -53.2249
            ],
            [
                "name" => "Frederico Westphalen, Rio Grande do Sul",
                "latitude" => -27.3586,
                "longitude" => -53.3958
            ],
            [
                "name" => "Garibaldi, Rio Grande do Sul",
                "latitude" => -29.259,
                "longitude" => -51.5352
            ],
            [
                "name" => "Garruchos, Rio Grande do Sul",
                "latitude" => -28.1944,
                "longitude" => -55.6383
            ],
            [
                "name" => "Gaurama, Rio Grande do Sul",
                "latitude" => -27.5856,
                "longitude" => -52.0915
            ],
            [
                "name" => "General Câmara, Rio Grande do Sul",
                "latitude" => -29.9032,
                "longitude" => -51.7612
            ],
            [
                "name" => "Gentil, Rio Grande do Sul",
                "latitude" => -28.4316,
                "longitude" => -52.0337
            ],
            [
                "name" => "Getúlio Vargas, Rio Grande do Sul",
                "latitude" => -27.8911,
                "longitude" => -52.2294
            ],
            [
                "name" => "Giruá, Rio Grande do Sul",
                "latitude" => -28.0297,
                "longitude" => -54.3517
            ],
            [
                "name" => "Glorinha, Rio Grande do Sul",
                "latitude" => -29.8798,
                "longitude" => -50.7734
            ],
            [
                "name" => "Gramado, Rio Grande do Sul",
                "latitude" => -29.3734,
                "longitude" => -50.8762
            ],
            [
                "name" => "Gramado dos Loureiros, Rio Grande do Sul",
                "latitude" => -27.4429,
                "longitude" => -52.9149
            ],
            [
                "name" => "Gramado Xavier, Rio Grande do Sul",
                "latitude" => -29.2706,
                "longitude" => -52.5795
            ],
            [
                "name" => "Gravataí, Rio Grande do Sul",
                "latitude" => -29.9413,
                "longitude" => -50.9869
            ],
            [
                "name" => "Guabiju, Rio Grande do Sul",
                "latitude" => -28.5421,
                "longitude" => -51.6948
            ],
            [
                "name" => "Guaíba, Rio Grande do Sul",
                "latitude" => -30.1086,
                "longitude" => -51.3233
            ],
            [
                "name" => "Guaporé, Rio Grande do Sul",
                "latitude" => -28.8399,
                "longitude" => -51.8895
            ],
            [
                "name" => "Guarani das Missões, Rio Grande do Sul",
                "latitude" => -28.1491,
                "longitude" => -54.5629
            ],
            [
                "name" => "Harmonia, Rio Grande do Sul",
                "latitude" => -29.5456,
                "longitude" => -51.4185
            ],
            [
                "name" => "Herveiras, Rio Grande do Sul",
                "latitude" => -29.4552,
                "longitude" => -52.6553
            ],
            [
                "name" => "Horizontina, Rio Grande do Sul",
                "latitude" => -27.6282,
                "longitude" => -54.3053
            ],
            [
                "name" => "Hulha Negra, Rio Grande do Sul",
                "latitude" => -31.4067,
                "longitude" => -53.8667
            ],
            [
                "name" => "Humaitá, Rio Grande do Sul",
                "latitude" => -27.5691,
                "longitude" => -53.9695
            ],
            [
                "name" => "Ibarama, Rio Grande do Sul",
                "latitude" => -29.4203,
                "longitude" => -53.1295
            ],
            [
                "name" => "Ibiaçá, Rio Grande do Sul",
                "latitude" => -28.0566,
                "longitude" => -51.8599
            ],
            [
                "name" => "Ibiraiaras, Rio Grande do Sul",
                "latitude" => -28.3741,
                "longitude" => -51.6377
            ],
            [
                "name" => "Ibirapuitã, Rio Grande do Sul",
                "latitude" => -28.6247,
                "longitude" => -52.5158
            ],
            [
                "name" => "Ibirubá, Rio Grande do Sul",
                "latitude" => -28.6302,
                "longitude" => -53.0961
            ],
            [
                "name" => "Igrejinha, Rio Grande do Sul",
                "latitude" => -29.5693,
                "longitude" => -50.7919
            ],
            [
                "name" => "Ijuí, Rio Grande do Sul",
                "latitude" => -28.388,
                "longitude" => -53.92
            ],
            [
                "name" => "Ilópolis, Rio Grande do Sul",
                "latitude" => -28.9282,
                "longitude" => -52.1258
            ],
            [
                "name" => "Imbé, Rio Grande do Sul",
                "latitude" => -29.9753,
                "longitude" => -50.1281
            ],
            [
                "name" => "Imigrante, Rio Grande do Sul",
                "latitude" => -29.3508,
                "longitude" => -51.7748
            ],
            [
                "name" => "Independência, Rio Grande do Sul",
                "latitude" => -27.8354,
                "longitude" => -54.1886
            ],
            [
                "name" => "Inhacorá, Rio Grande do Sul",
                "latitude" => -27.8752,
                "longitude" => -54.015
            ],
            [
                "name" => "Ipê, Rio Grande do Sul",
                "latitude" => -28.8171,
                "longitude" => -51.2859
            ],
            [
                "name" => "Ipiranga do Sul, Rio Grande do Sul",
                "latitude" => -27.9404,
                "longitude" => -52.4271
            ],
            [
                "name" => "Iraí, Rio Grande do Sul",
                "latitude" => -27.1951,
                "longitude" => -53.2543
            ],
            [
                "name" => "Itaara, Rio Grande do Sul",
                "latitude" => -29.6013,
                "longitude" => -53.7725
            ],
            [
                "name" => "Itacurubi, Rio Grande do Sul",
                "latitude" => -28.7913,
                "longitude" => -55.2447
            ],
            [
                "name" => "Itapuca, Rio Grande do Sul",
                "latitude" => -28.7768,
                "longitude" => -52.1693
            ],
            [
                "name" => "Itaqui, Rio Grande do Sul",
                "latitude" => -29.1311,
                "longitude" => -56.5515
            ],
            [
                "name" => "Itati, Rio Grande do Sul",
                "latitude" => -29.4974,
                "longitude" => -50.1016
            ],
            [
                "name" => "Itatiba do Sul, Rio Grande do Sul",
                "latitude" => -27.3846,
                "longitude" => -52.4538
            ],
            [
                "name" => "Ivorá, Rio Grande do Sul",
                "latitude" => -29.5232,
                "longitude" => -53.5842
            ],
            [
                "name" => "Ivoti, Rio Grande do Sul",
                "latitude" => -29.5995,
                "longitude" => -51.1533
            ],
            [
                "name" => "Jaboticaba, Rio Grande do Sul",
                "latitude" => -27.6347,
                "longitude" => -53.2762
            ],
            [
                "name" => "Jacuizinho, Rio Grande do Sul",
                "latitude" => -29.0401,
                "longitude" => -53.0657
            ],
            [
                "name" => "Jacutinga, Rio Grande do Sul",
                "latitude" => -27.7291,
                "longitude" => -52.5372
            ],
            [
                "name" => "Jaguarão, Rio Grande do Sul",
                "latitude" => -32.5604,
                "longitude" => -53.377
            ],
            [
                "name" => "Jaguari, Rio Grande do Sul",
                "latitude" => -29.4936,
                "longitude" => -54.703
            ],
            [
                "name" => "Jaquirana, Rio Grande do Sul",
                "latitude" => -28.8811,
                "longitude" => -50.3637
            ],
            [
                "name" => "Jari, Rio Grande do Sul",
                "latitude" => -29.2922,
                "longitude" => -54.2237
            ],
            [
                "name" => "Jóia, Rio Grande do Sul",
                "latitude" => -28.6435,
                "longitude" => -54.1141
            ],
            [
                "name" => "Júlio de Castilhos, Rio Grande do Sul",
                "latitude" => -29.2299,
                "longitude" => -53.6772
            ],
            [
                "name" => "Lagoa Bonita do Sul, Rio Grande do Sul",
                "latitude" => -29.4939,
                "longitude" => -53.017
            ],
            [
                "name" => "Lagoão, Rio Grande do Sul",
                "latitude" => -29.2348,
                "longitude" => -52.7997
            ],
            [
                "name" => "Lagoa dos Três Cantos, Rio Grande do Sul",
                "latitude" => -28.5676,
                "longitude" => -52.8618
            ],
            [
                "name" => "Lagoa Vermelha, Rio Grande do Sul",
                "latitude" => -28.2093,
                "longitude" => -51.5248
            ],
            [
                "name" => "Lajeado, Rio Grande do Sul",
                "latitude" => -29.4591,
                "longitude" => -51.9644
            ],
            [
                "name" => "Lajeado do Bugre, Rio Grande do Sul",
                "latitude" => -27.6913,
                "longitude" => -53.1818
            ],
            [
                "name" => "Lavras do Sul, Rio Grande do Sul",
                "latitude" => -30.8071,
                "longitude" => -53.8931
            ],
            [
                "name" => "Liberato Salzano, Rio Grande do Sul",
                "latitude" => -27.601,
                "longitude" => -53.0753
            ],
            [
                "name" => "Lindolfo Collor, Rio Grande do Sul",
                "latitude" => -29.5859,
                "longitude" => -51.2141
            ],
            [
                "name" => "Linha Nova, Rio Grande do Sul",
                "latitude" => -29.4679,
                "longitude" => -51.2003
            ],
            [
                "name" => "Machadinho, Rio Grande do Sul",
                "latitude" => -27.5667,
                "longitude" => -51.6668
            ],
            [
                "name" => "Maçambará, Rio Grande do Sul",
                "latitude" => -29.1445,
                "longitude" => -56.0674
            ],
            [
                "name" => "Mampituba, Rio Grande do Sul",
                "latitude" => -29.2136,
                "longitude" => -49.9311
            ],
            [
                "name" => "Manoel Viana, Rio Grande do Sul",
                "latitude" => -29.5859,
                "longitude" => -55.4841
            ],
            [
                "name" => "Maquiné, Rio Grande do Sul",
                "latitude" => -29.6798,
                "longitude" => -50.2079
            ],
            [
                "name" => "Maratá, Rio Grande do Sul",
                "latitude" => -29.5457,
                "longitude" => -51.5573
            ],
            [
                "name" => "Marau, Rio Grande do Sul",
                "latitude" => -28.4498,
                "longitude" => -52.1986
            ],
            [
                "name" => "Marcelino Ramos, Rio Grande do Sul",
                "latitude" => -27.4676,
                "longitude" => -51.9095
            ],
            [
                "name" => "Mariana Pimentel, Rio Grande do Sul",
                "latitude" => -30.353,
                "longitude" => -51.5803
            ],
            [
                "name" => "Mariano Moro, Rio Grande do Sul",
                "latitude" => -27.3568,
                "longitude" => -52.1467
            ],
            [
                "name" => "Marques de Souza, Rio Grande do Sul",
                "latitude" => -29.3311,
                "longitude" => -52.0973
            ],
            [
                "name" => "Mata, Rio Grande do Sul",
                "latitude" => -29.5649,
                "longitude" => -54.4641
            ],
            [
                "name" => "Mato Castelhano, Rio Grande do Sul",
                "latitude" => -28.28,
                "longitude" => -52.1932
            ],
            [
                "name" => "Mato Leitão, Rio Grande do Sul",
                "latitude" => -29.5285,
                "longitude" => -52.1278
            ],
            [
                "name" => "Mato Queimado, Rio Grande do Sul",
                "latitude" => -28.252,
                "longitude" => -54.6159
            ],
            [
                "name" => "Maximiliano de Almeida, Rio Grande do Sul",
                "latitude" => -27.6325,
                "longitude" => -51.802
            ],
            [
                "name" => "Minas do Leão, Rio Grande do Sul",
                "latitude" => -30.1346,
                "longitude" => -52.0423
            ],
            [
                "name" => "Miraguaí, Rio Grande do Sul",
                "latitude" => -27.497,
                "longitude" => -53.6891
            ],
            [
                "name" => "Montauri, Rio Grande do Sul",
                "latitude" => -28.6462,
                "longitude" => -52.0767
            ],
            [
                "name" => "Monte Alegre dos Campos, Rio Grande do Sul",
                "latitude" => -28.6805,
                "longitude" => -50.7834
            ],
            [
                "name" => "Monte Belo do Sul, Rio Grande do Sul",
                "latitude" => -29.1607,
                "longitude" => -51.6333
            ],
            [
                "name" => "Montenegro, Rio Grande do Sul",
                "latitude" => -29.6824,
                "longitude" => -51.4679
            ],
            [
                "name" => "Mormaço, Rio Grande do Sul",
                "latitude" => -28.6968,
                "longitude" => -52.6999
            ],
            [
                "name" => "Morrinhos do Sul, Rio Grande do Sul",
                "latitude" => -29.3578,
                "longitude" => -49.9328
            ],
            [
                "name" => "Morro Redondo, Rio Grande do Sul",
                "latitude" => -31.5887,
                "longitude" => -52.6261
            ],
            [
                "name" => "Morro Reuter, Rio Grande do Sul",
                "latitude" => -29.5379,
                "longitude" => -51.0811
            ],
            [
                "name" => "Mostardas, Rio Grande do Sul",
                "latitude" => -31.1054,
                "longitude" => -50.9167
            ],
            [
                "name" => "Muçum, Rio Grande do Sul",
                "latitude" => -29.163,
                "longitude" => -51.8714
            ],
            [
                "name" => "Muitos Capões, Rio Grande do Sul",
                "latitude" => -28.3132,
                "longitude" => -51.1836
            ],
            [
                "name" => "Muliterno, Rio Grande do Sul",
                "latitude" => -28.3253,
                "longitude" => -51.7697
            ],
            [
                "name" => "Não-Me-Toque, Rio Grande do Sul",
                "latitude" => -28.4548,
                "longitude" => -52.8182
            ],
            [
                "name" => "Nicolau Vergueiro, Rio Grande do Sul",
                "latitude" => -28.5298,
                "longitude" => -52.4676
            ],
            [
                "name" => "Nonoai, Rio Grande do Sul",
                "latitude" => -27.3689,
                "longitude" => -52.7756
            ],
            [
                "name" => "Nova Alvorada, Rio Grande do Sul",
                "latitude" => -28.6822,
                "longitude" => -52.1631
            ],
            [
                "name" => "Nova Araçá, Rio Grande do Sul",
                "latitude" => -28.6537,
                "longitude" => -51.7458
            ],
            [
                "name" => "Nova Bassano, Rio Grande do Sul",
                "latitude" => -28.7291,
                "longitude" => -51.7072
            ],
            [
                "name" => "Nova Boa Vista, Rio Grande do Sul",
                "latitude" => -27.9926,
                "longitude" => -52.9784
            ],
            [
                "name" => "Nova Bréscia, Rio Grande do Sul",
                "latitude" => -29.2182,
                "longitude" => -52.0319
            ],
            [
                "name" => "Nova Candelária, Rio Grande do Sul",
                "latitude" => -27.6137,
                "longitude" => -54.1074
            ],
            [
                "name" => "Nova Esperança do Sul, Rio Grande do Sul",
                "latitude" => -29.4066,
                "longitude" => -54.8293
            ],
            [
                "name" => "Nova Hartz, Rio Grande do Sul",
                "latitude" => -29.5808,
                "longitude" => -50.9051
            ],
            [
                "name" => "Nova Pádua, Rio Grande do Sul",
                "latitude" => -29.0275,
                "longitude" => -51.3098
            ],
            [
                "name" => "Nova Palma, Rio Grande do Sul",
                "latitude" => -29.471,
                "longitude" => -53.4689
            ],
            [
                "name" => "Nova Petrópolis, Rio Grande do Sul",
                "latitude" => -29.3741,
                "longitude" => -51.1136
            ],
            [
                "name" => "Nova Prata, Rio Grande do Sul",
                "latitude" => -28.7799,
                "longitude" => -51.6113
            ],
            [
                "name" => "Nova Ramada, Rio Grande do Sul",
                "latitude" => -28.0667,
                "longitude" => -53.6992
            ],
            [
                "name" => "Nova Roma do Sul, Rio Grande do Sul",
                "latitude" => -28.9882,
                "longitude" => -51.4095
            ],
            [
                "name" => "Nova Santa Rita, Rio Grande do Sul",
                "latitude" => -29.8525,
                "longitude" => -51.2837
            ],
            [
                "name" => "Novo Cabrais, Rio Grande do Sul",
                "latitude" => -29.7338,
                "longitude" => -52.9489
            ],
            [
                "name" => "Novo Hamburgo, Rio Grande do Sul",
                "latitude" => -29.6875,
                "longitude" => -51.1328
            ],
            [
                "name" => "Novo Machado, Rio Grande do Sul",
                "latitude" => -27.5765,
                "longitude" => -54.5036
            ],
            [
                "name" => "Novo Tiradentes, Rio Grande do Sul",
                "latitude" => -27.5649,
                "longitude" => -53.1837
            ],
            [
                "name" => "Novo Xingu, Rio Grande do Sul",
                "latitude" => -27.749,
                "longitude" => -53.0639
            ],
            [
                "name" => "Novo Barreiro, Rio Grande do Sul",
                "latitude" => -27.9077,
                "longitude" => -53.1103
            ],
            [
                "name" => "Osório, Rio Grande do Sul",
                "latitude" => -29.8881,
                "longitude" => -50.2667
            ],
            [
                "name" => "Paim Filho, Rio Grande do Sul",
                "latitude" => -27.7075,
                "longitude" => -51.763
            ],
            [
                "name" => "Palmares do Sul, Rio Grande do Sul",
                "latitude" => -30.2535,
                "longitude" => -50.5103
            ],
            [
                "name" => "Palmeira das Missões, Rio Grande do Sul",
                "latitude" => -27.9007,
                "longitude" => -53.3134
            ],
            [
                "name" => "Palmitinho, Rio Grande do Sul",
                "latitude" => -27.3596,
                "longitude" => -53.558
            ],
            [
                "name" => "Panambi, Rio Grande do Sul",
                "latitude" => -28.2833,
                "longitude" => -53.5023
            ],
            [
                "name" => "Pantano Grande, Rio Grande do Sul",
                "latitude" => -30.1902,
                "longitude" => -52.3729
            ],
            [
                "name" => "Paraí, Rio Grande do Sul",
                "latitude" => -28.5964,
                "longitude" => -51.7896
            ],
            [
                "name" => "Paraíso do Sul, Rio Grande do Sul",
                "latitude" => -29.6717,
                "longitude" => -53.144
            ],
            [
                "name" => "Pareci Novo, Rio Grande do Sul",
                "latitude" => -29.6365,
                "longitude" => -51.3974
            ],
            [
                "name" => "Parobé, Rio Grande do Sul",
                "latitude" => -29.6243,
                "longitude" => -50.8312
            ],
            [
                "name" => "Passa Sete, Rio Grande do Sul",
                "latitude" => -29.4577,
                "longitude" => -52.9599
            ],
            [
                "name" => "Passo do Sobrado, Rio Grande do Sul",
                "latitude" => -29.748,
                "longitude" => -52.2748
            ],
            [
                "name" => "Passo Fundo, Rio Grande do Sul",
                "latitude" => -28.2576,
                "longitude" => -52.4091
            ],
            [
                "name" => "Paulo Bento, Rio Grande do Sul",
                "latitude" => -27.7051,
                "longitude" => -52.4169
            ],
            [
                "name" => "Paverama, Rio Grande do Sul",
                "latitude" => -29.5486,
                "longitude" => -51.7339
            ],
            [
                "name" => "Pedras Altas, Rio Grande do Sul",
                "latitude" => -31.7365,
                "longitude" => -53.5814
            ],
            [
                "name" => "Pedro Osório, Rio Grande do Sul",
                "latitude" => -31.8642,
                "longitude" => -52.8184
            ],
            [
                "name" => "Pejuçara, Rio Grande do Sul",
                "latitude" => -28.4283,
                "longitude" => -53.6579
            ],
            [
                "name" => "Pelotas, Rio Grande do Sul",
                "latitude" => -31.7649,
                "longitude" => -52.3371
            ],
            [
                "name" => "Picada Café, Rio Grande do Sul",
                "latitude" => -29.4464,
                "longitude" => -51.1367
            ],
            [
                "name" => "Pinhal, Rio Grande do Sul",
                "latitude" => -27.508,
                "longitude" => -53.2082
            ],
            [
                "name" => "Pinhal da Serra, Rio Grande do Sul",
                "latitude" => -27.8751,
                "longitude" => -51.1673
            ],
            [
                "name" => "Pinhal Grande, Rio Grande do Sul",
                "latitude" => -29.345,
                "longitude" => -53.3206
            ],
            [
                "name" => "Pinheirinho do Vale, Rio Grande do Sul",
                "latitude" => -27.2109,
                "longitude" => -53.608
            ],
            [
                "name" => "Pinheiro Machado, Rio Grande do Sul",
                "latitude" => -31.5794,
                "longitude" => -53.3798
            ],
            [
                "name" => "Pinto Bandeira, Rio Grande do Sul",
                "latitude" => -29.0975,
                "longitude" => -51.4503
            ],
            [
                "name" => "Pirapó, Rio Grande do Sul",
                "latitude" => -28.0439,
                "longitude" => -55.2001
            ],
            [
                "name" => "Piratini, Rio Grande do Sul",
                "latitude" => -31.4473,
                "longitude" => -53.0973
            ],
            [
                "name" => "Planalto, Rio Grande do Sul",
                "latitude" => -27.3297,
                "longitude" => -53.0575
            ],
            [
                "name" => "Poço das Antas, Rio Grande do Sul",
                "latitude" => -29.4481,
                "longitude" => -51.6719
            ],
            [
                "name" => "Pontão, Rio Grande do Sul",
                "latitude" => -28.0585,
                "longitude" => -52.6791
            ],
            [
                "name" => "Ponte Preta, Rio Grande do Sul",
                "latitude" => -27.6587,
                "longitude" => -52.4848
            ],
            [
                "name" => "Portão, Rio Grande do Sul",
                "latitude" => -29.7015,
                "longitude" => -51.2429
            ],
            [
                "name" => "Porto Alegre, Rio Grande do Sul",
                "latitude" => -30.0318,
                "longitude" => -51.2065
            ],
            [
                "name" => "Porto Lucena, Rio Grande do Sul",
                "latitude" => -27.8569,
                "longitude" => -55.01
            ],
            [
                "name" => "Porto Mauá, Rio Grande do Sul",
                "latitude" => -27.5796,
                "longitude" => -54.6657
            ],
            [
                "name" => "Porto Vera Cruz, Rio Grande do Sul",
                "latitude" => -27.7405,
                "longitude" => -54.8994
            ],
            [
                "name" => "Porto Xavier, Rio Grande do Sul",
                "latitude" => -27.9082,
                "longitude" => -55.1379
            ],
            [
                "name" => "Pouso Novo, Rio Grande do Sul",
                "latitude" => -29.1738,
                "longitude" => -52.2136
            ],
            [
                "name" => "Presidente Lucena, Rio Grande do Sul",
                "latitude" => -29.5175,
                "longitude" => -51.1798
            ],
            [
                "name" => "Progresso, Rio Grande do Sul",
                "latitude" => -29.2441,
                "longitude" => -52.3197
            ],
            [
                "name" => "Protásio Alves, Rio Grande do Sul",
                "latitude" => -28.7572,
                "longitude" => -51.4757
            ],
            [
                "name" => "Putinga, Rio Grande do Sul",
                "latitude" => -29.0045,
                "longitude" => -52.1569
            ],
            [
                "name" => "Quaraí, Rio Grande do Sul",
                "latitude" => -30.384,
                "longitude" => -56.4483
            ],
            [
                "name" => "Quatro Irmãos, Rio Grande do Sul",
                "latitude" => -27.8257,
                "longitude" => -52.4424
            ],
            [
                "name" => "Quevedos, Rio Grande do Sul",
                "latitude" => -29.3504,
                "longitude" => -54.0789
            ],
            [
                "name" => "Quinze de Novembro, Rio Grande do Sul",
                "latitude" => -28.7466,
                "longitude" => -53.1011
            ],
            [
                "name" => "Redentora, Rio Grande do Sul",
                "latitude" => -27.664,
                "longitude" => -53.6407
            ],
            [
                "name" => "Relvado, Rio Grande do Sul",
                "latitude" => -29.1164,
                "longitude" => -52.0778
            ],
            [
                "name" => "Restinga Sêca, Rio Grande do Sul",
                "latitude" => -29.8188,
                "longitude" => -53.3807
            ],
            [
                "name" => "Rio dos Índios, Rio Grande do Sul",
                "latitude" => -27.2973,
                "longitude" => -52.8417
            ],
            [
                "name" => "Rio Grande, Rio Grande do Sul",
                "latitude" => -32.0349,
                "longitude" => -52.1071
            ],
            [
                "name" => "Rio Pardo, Rio Grande do Sul",
                "latitude" => -29.988,
                "longitude" => -52.3711
            ],
            [
                "name" => "Riozinho, Rio Grande do Sul",
                "latitude" => -29.639,
                "longitude" => -50.4488
            ],
            [
                "name" => "Roca Sales, Rio Grande do Sul",
                "latitude" => -29.2884,
                "longitude" => -51.8658
            ],
            [
                "name" => "Rodeio Bonito, Rio Grande do Sul",
                "latitude" => -27.4742,
                "longitude" => -53.1706
            ],
            [
                "name" => "Rolador, Rio Grande do Sul",
                "latitude" => -28.2566,
                "longitude" => -54.8186
            ],
            [
                "name" => "Rolante, Rio Grande do Sul",
                "latitude" => -29.6462,
                "longitude" => -50.5819
            ],
            [
                "name" => "Ronda Alta, Rio Grande do Sul",
                "latitude" => -27.7758,
                "longitude" => -52.8056
            ],
            [
                "name" => "Rondinha, Rio Grande do Sul",
                "latitude" => -27.8315,
                "longitude" => -52.9081
            ],
            [
                "name" => "Roque Gonzales, Rio Grande do Sul",
                "latitude" => -28.1297,
                "longitude" => -55.0266
            ],
            [
                "name" => "Rosário do Sul, Rio Grande do Sul",
                "latitude" => -30.2515,
                "longitude" => -54.9221
            ],
            [
                "name" => "Sagrada Família, Rio Grande do Sul",
                "latitude" => -27.7085,
                "longitude" => -53.1351
            ],
            [
                "name" => "Saldanha Marinho, Rio Grande do Sul",
                "latitude" => -28.3941,
                "longitude" => -53.097
            ],
            [
                "name" => "Salto do Jacuí, Rio Grande do Sul",
                "latitude" => -29.0951,
                "longitude" => -53.2133
            ],
            [
                "name" => "Salvador das Missões, Rio Grande do Sul",
                "latitude" => -28.1233,
                "longitude" => -54.8373
            ],
            [
                "name" => "Salvador do Sul, Rio Grande do Sul",
                "latitude" => -29.4386,
                "longitude" => -51.5077
            ],
            [
                "name" => "Sananduva, Rio Grande do Sul",
                "latitude" => -27.947,
                "longitude" => -51.8079
            ],
            [
                "name" => "Santa Bárbara do Sul, Rio Grande do Sul",
                "latitude" => -28.3653,
                "longitude" => -53.251
            ],
            [
                "name" => "Santa Cecília do Sul, Rio Grande do Sul",
                "latitude" => -28.1609,
                "longitude" => -51.9279
            ],
            [
                "name" => "Santa Clara do Sul, Rio Grande do Sul",
                "latitude" => -29.4747,
                "longitude" => -52.0843
            ],
            [
                "name" => "Santa Cruz do Sul, Rio Grande do Sul",
                "latitude" => -29.722,
                "longitude" => -52.4343
            ],
            [
                "name" => "Santa Maria, Rio Grande do Sul",
                "latitude" => -29.6868,
                "longitude" => -53.8149
            ],
            [
                "name" => "Santa Maria do Herval, Rio Grande do Sul",
                "latitude" => -29.4902,
                "longitude" => -50.9919
            ],
            [
                "name" => "Santa Margarida do Sul, Rio Grande do Sul",
                "latitude" => -30.3393,
                "longitude" => -54.0817
            ],
            [
                "name" => "Santana da Boa Vista, Rio Grande do Sul",
                "latitude" => -30.8697,
                "longitude" => -53.11
            ],
            [
                "name" => "Sant'Ana do Livramento, Rio Grande do Sul",
                "latitude" => -30.8773,
                "longitude" => -55.5392
            ],
            [
                "name" => "Santa Rosa, Rio Grande do Sul",
                "latitude" => -27.8702,
                "longitude" => -54.4796
            ],
            [
                "name" => "Santa Tereza, Rio Grande do Sul",
                "latitude" => -29.1655,
                "longitude" => -51.7351
            ],
            [
                "name" => "Santa Vitória do Palmar, Rio Grande do Sul",
                "latitude" => -33.525,
                "longitude" => -53.3717
            ],
            [
                "name" => "Santiago, Rio Grande do Sul",
                "latitude" => -29.1897,
                "longitude" => -54.8666
            ],
            [
                "name" => "Santo Ângelo, Rio Grande do Sul",
                "latitude" => -28.3001,
                "longitude" => -54.2668
            ],
            [
                "name" => "Santo Antônio do Palma, Rio Grande do Sul",
                "latitude" => -28.4956,
                "longitude" => -52.0267
            ],
            [
                "name" => "Santo Antônio da Patrulha, Rio Grande do Sul",
                "latitude" => -29.8268,
                "longitude" => -50.5175
            ],
            [
                "name" => "Santo Antônio das Missões, Rio Grande do Sul",
                "latitude" => -28.514,
                "longitude" => -55.2251
            ],
            [
                "name" => "Santo Antônio do Planalto, Rio Grande do Sul",
                "latitude" => -28.403,
                "longitude" => -52.6992
            ],
            [
                "name" => "Santo Augusto, Rio Grande do Sul",
                "latitude" => -27.8526,
                "longitude" => -53.7776
            ],
            [
                "name" => "Santo Cristo, Rio Grande do Sul",
                "latitude" => -27.8263,
                "longitude" => -54.662
            ],
            [
                "name" => "Santo Expedito do Sul, Rio Grande do Sul",
                "latitude" => -27.9074,
                "longitude" => -51.6434
            ],
            [
                "name" => "São Borja, Rio Grande do Sul",
                "latitude" => -28.6578,
                "longitude" => -56.0036
            ],
            [
                "name" => "São Domingos do Sul, Rio Grande do Sul",
                "latitude" => -28.5312,
                "longitude" => -51.886
            ],
            [
                "name" => "São Francisco de Assis, Rio Grande do Sul",
                "latitude" => -29.5547,
                "longitude" => -55.1253
            ],
            [
                "name" => "São Francisco de Paula, Rio Grande do Sul",
                "latitude" => -29.4404,
                "longitude" => -50.5828
            ],
            [
                "name" => "São Gabriel, Rio Grande do Sul",
                "latitude" => -30.3337,
                "longitude" => -54.3217
            ],
            [
                "name" => "São Jerônimo, Rio Grande do Sul",
                "latitude" => -29.9716,
                "longitude" => -51.7251
            ],
            [
                "name" => "São João da Urtiga, Rio Grande do Sul",
                "latitude" => -27.8195,
                "longitude" => -51.8257
            ],
            [
                "name" => "São João do Polêsine, Rio Grande do Sul",
                "latitude" => -29.6194,
                "longitude" => -53.4439
            ],
            [
                "name" => "São Jorge, Rio Grande do Sul",
                "latitude" => -28.4984,
                "longitude" => -51.7064
            ],
            [
                "name" => "São José das Missões, Rio Grande do Sul",
                "latitude" => -27.7789,
                "longitude" => -53.1226
            ],
            [
                "name" => "São José do Herval, Rio Grande do Sul",
                "latitude" => -29.052,
                "longitude" => -52.295
            ],
            [
                "name" => "São José do Hortêncio, Rio Grande do Sul",
                "latitude" => -29.528,
                "longitude" => -51.245
            ],
            [
                "name" => "São José do Inhacorá, Rio Grande do Sul",
                "latitude" => -27.7251,
                "longitude" => -54.1275
            ],
            [
                "name" => "São José do Norte, Rio Grande do Sul",
                "latitude" => -32.0151,
                "longitude" => -52.0331
            ],
            [
                "name" => "São José do Ouro, Rio Grande do Sul",
                "latitude" => -27.7707,
                "longitude" => -51.5966
            ],
            [
                "name" => "São José do Sul, Rio Grande do Sul",
                "latitude" => -29.5448,
                "longitude" => -51.4821
            ],
            [
                "name" => "São José dos Ausentes, Rio Grande do Sul",
                "latitude" => -28.7476,
                "longitude" => -50.0677
            ],
            [
                "name" => "São Leopoldo, Rio Grande do Sul",
                "latitude" => -29.7545,
                "longitude" => -51.1498
            ],
            [
                "name" => "São Lourenço do Sul, Rio Grande do Sul",
                "latitude" => -31.3564,
                "longitude" => -51.9715
            ],
            [
                "name" => "São Luiz Gonzaga, Rio Grande do Sul",
                "latitude" => -28.412,
                "longitude" => -54.9559
            ],
            [
                "name" => "São Marcos, Rio Grande do Sul",
                "latitude" => -28.9677,
                "longitude" => -51.0696
            ],
            [
                "name" => "São Martinho, Rio Grande do Sul",
                "latitude" => -27.7112,
                "longitude" => -53.9699
            ],
            [
                "name" => "São Martinho da Serra, Rio Grande do Sul",
                "latitude" => -29.5397,
                "longitude" => -53.859
            ],
            [
                "name" => "São Miguel das Missões, Rio Grande do Sul",
                "latitude" => -28.556,
                "longitude" => -54.5559
            ],
            [
                "name" => "São Nicolau, Rio Grande do Sul",
                "latitude" => -28.1834,
                "longitude" => -55.2654
            ],
            [
                "name" => "São Paulo das Missões, Rio Grande do Sul",
                "latitude" => -28.0195,
                "longitude" => -54.9404
            ],
            [
                "name" => "São Pedro da Serra, Rio Grande do Sul",
                "latitude" => -29.4193,
                "longitude" => -51.5134
            ],
            [
                "name" => "São Pedro das Missões, Rio Grande do Sul",
                "latitude" => -27.7706,
                "longitude" => -53.2513
            ],
            [
                "name" => "São Pedro do Butiá, Rio Grande do Sul",
                "latitude" => -28.1243,
                "longitude" => -54.8926
            ],
            [
                "name" => "São Pedro do Sul, Rio Grande do Sul",
                "latitude" => -29.6202,
                "longitude" => -54.1855
            ],
            [
                "name" => "São Sebastião do Caí, Rio Grande do Sul",
                "latitude" => -29.5885,
                "longitude" => -51.3749
            ],
            [
                "name" => "São Sepé, Rio Grande do Sul",
                "latitude" => -30.1643,
                "longitude" => -53.5603
            ],
            [
                "name" => "São Valentim, Rio Grande do Sul",
                "latitude" => -27.5583,
                "longitude" => -52.5237
            ],
            [
                "name" => "São Valentim do Sul, Rio Grande do Sul",
                "latitude" => -29.0451,
                "longitude" => -51.7684
            ],
            [
                "name" => "São Valério do Sul, Rio Grande do Sul",
                "latitude" => -27.7906,
                "longitude" => -53.9368
            ],
            [
                "name" => "São Vendelino, Rio Grande do Sul",
                "latitude" => -29.3729,
                "longitude" => -51.3675
            ],
            [
                "name" => "São Vicente do Sul, Rio Grande do Sul",
                "latitude" => -29.6882,
                "longitude" => -54.6826
            ],
            [
                "name" => "Sapiranga, Rio Grande do Sul",
                "latitude" => -29.6349,
                "longitude" => -51.0064
            ],
            [
                "name" => "Sapucaia do Sul, Rio Grande do Sul",
                "latitude" => -29.8276,
                "longitude" => -51.145
            ],
            [
                "name" => "Sarandi, Rio Grande do Sul",
                "latitude" => -27.942,
                "longitude" => -52.9231
            ],
            [
                "name" => "Seberi, Rio Grande do Sul",
                "latitude" => -27.4829,
                "longitude" => -53.4026
            ],
            [
                "name" => "Sede Nova, Rio Grande do Sul",
                "latitude" => -27.6367,
                "longitude" => -53.9493
            ],
            [
                "name" => "Segredo, Rio Grande do Sul",
                "latitude" => -29.3523,
                "longitude" => -52.9767
            ],
            [
                "name" => "Selbach, Rio Grande do Sul",
                "latitude" => -28.6294,
                "longitude" => -52.9498
            ],
            [
                "name" => "Senador Salgado Filho, Rio Grande do Sul",
                "latitude" => -28.025,
                "longitude" => -54.5507
            ],
            [
                "name" => "Sentinela do Sul, Rio Grande do Sul",
                "latitude" => -30.6107,
                "longitude" => -51.5862
            ],
            [
                "name" => "Serafina Corrêa, Rio Grande do Sul",
                "latitude" => -28.7126,
                "longitude" => -51.9352
            ],
            [
                "name" => "Sério, Rio Grande do Sul",
                "latitude" => -29.3904,
                "longitude" => -52.2685
            ],
            [
                "name" => "Sertão, Rio Grande do Sul",
                "latitude" => -27.9798,
                "longitude" => -52.2588
            ],
            [
                "name" => "Sertão Santana, Rio Grande do Sul",
                "latitude" => -30.4562,
                "longitude" => -51.6017
            ],
            [
                "name" => "Sete de Setembro, Rio Grande do Sul",
                "latitude" => -28.1362,
                "longitude" => -54.4637
            ],
            [
                "name" => "Severiano de Almeida, Rio Grande do Sul",
                "latitude" => -27.4362,
                "longitude" => -52.1217
            ],
            [
                "name" => "Silveira Martins, Rio Grande do Sul",
                "latitude" => -29.6467,
                "longitude" => -53.591
            ],
            [
                "name" => "Sinimbu, Rio Grande do Sul",
                "latitude" => -29.5357,
                "longitude" => -52.5304
            ],
            [
                "name" => "Sobradinho, Rio Grande do Sul",
                "latitude" => -29.4194,
                "longitude" => -53.0326
            ],
            [
                "name" => "Soledade, Rio Grande do Sul",
                "latitude" => -28.8306,
                "longitude" => -52.5131
            ],
            [
                "name" => "Tabaí, Rio Grande do Sul",
                "latitude" => -29.643,
                "longitude" => -51.6823
            ],
            [
                "name" => "Tapejara, Rio Grande do Sul",
                "latitude" => -28.0652,
                "longitude" => -52.0097
            ],
            [
                "name" => "Tapera, Rio Grande do Sul",
                "latitude" => -28.6277,
                "longitude" => -52.8613
            ],
            [
                "name" => "Tapes, Rio Grande do Sul",
                "latitude" => -30.6683,
                "longitude" => -51.3991
            ],
            [
                "name" => "Taquara, Rio Grande do Sul",
                "latitude" => -29.6505,
                "longitude" => -50.7753
            ],
            [
                "name" => "Taquari, Rio Grande do Sul",
                "latitude" => -29.7943,
                "longitude" => -51.8653
            ],
            [
                "name" => "Taquaruçu do Sul, Rio Grande do Sul",
                "latitude" => -27.4005,
                "longitude" => -53.4702
            ],
            [
                "name" => "Tavares, Rio Grande do Sul",
                "latitude" => -31.2843,
                "longitude" => -51.088
            ],
            [
                "name" => "Tenente Portela, Rio Grande do Sul",
                "latitude" => -27.3711,
                "longitude" => -53.7585
            ],
            [
                "name" => "Terra de Areia, Rio Grande do Sul",
                "latitude" => -29.5782,
                "longitude" => -50.0644
            ],
            [
                "name" => "Teutônia, Rio Grande do Sul",
                "latitude" => -29.4482,
                "longitude" => -51.8044
            ],
            [
                "name" => "Tio Hugo, Rio Grande do Sul",
                "latitude" => -28.5712,
                "longitude" => -52.5955
            ],
            [
                "name" => "Tiradentes do Sul, Rio Grande do Sul",
                "latitude" => -27.4022,
                "longitude" => -54.0814
            ],
            [
                "name" => "Toropi, Rio Grande do Sul",
                "latitude" => -29.4782,
                "longitude" => -54.2244
            ],
            [
                "name" => "Torres, Rio Grande do Sul",
                "latitude" => -29.3334,
                "longitude" => -49.7333
            ],
            [
                "name" => "Tramandaí, Rio Grande do Sul",
                "latitude" => -29.9841,
                "longitude" => -50.1322
            ],
            [
                "name" => "Travesseiro, Rio Grande do Sul",
                "latitude" => -29.2977,
                "longitude" => -52.0532
            ],
            [
                "name" => "Três Arroios, Rio Grande do Sul",
                "latitude" => -27.5003,
                "longitude" => -52.1448
            ],
            [
                "name" => "Três Cachoeiras, Rio Grande do Sul",
                "latitude" => -29.4487,
                "longitude" => -49.9275
            ],
            [
                "name" => "Três Coroas, Rio Grande do Sul",
                "latitude" => -29.5137,
                "longitude" => -50.7739
            ],
            [
                "name" => "Três de Maio, Rio Grande do Sul",
                "latitude" => -27.78,
                "longitude" => -54.2357
            ],
            [
                "name" => "Três Forquilhas, Rio Grande do Sul",
                "latitude" => -29.5384,
                "longitude" => -50.0708
            ],
            [
                "name" => "Três Palmeiras, Rio Grande do Sul",
                "latitude" => -27.6139,
                "longitude" => -52.8437
            ],
            [
                "name" => "Três Passos, Rio Grande do Sul",
                "latitude" => -27.4555,
                "longitude" => -53.9296
            ],
            [
                "name" => "Trindade do Sul, Rio Grande do Sul",
                "latitude" => -27.5239,
                "longitude" => -52.8956
            ],
            [
                "name" => "Triunfo, Rio Grande do Sul",
                "latitude" => -29.9291,
                "longitude" => -51.7075
            ],
            [
                "name" => "Tucunduva, Rio Grande do Sul",
                "latitude" => -27.6573,
                "longitude" => -54.4439
            ],
            [
                "name" => "Tunas, Rio Grande do Sul",
                "latitude" => -29.1039,
                "longitude" => -52.9538
            ],
            [
                "name" => "Tupanci do Sul, Rio Grande do Sul",
                "latitude" => -27.9241,
                "longitude" => -51.5383
            ],
            [
                "name" => "Tupanciretã, Rio Grande do Sul",
                "latitude" => -29.0858,
                "longitude" => -53.8445
            ],
            [
                "name" => "Tupandi, Rio Grande do Sul",
                "latitude" => -29.4772,
                "longitude" => -51.4174
            ],
            [
                "name" => "Tuparendi, Rio Grande do Sul",
                "latitude" => -27.7598,
                "longitude" => -54.4814
            ],
            [
                "name" => "Turuçu, Rio Grande do Sul",
                "latitude" => -31.4173,
                "longitude" => -52.1706
            ],
            [
                "name" => "Ubiretama, Rio Grande do Sul",
                "latitude" => -28.0404,
                "longitude" => -54.686
            ],
            [
                "name" => "União da Serra, Rio Grande do Sul",
                "latitude" => -28.7833,
                "longitude" => -52.0238
            ],
            [
                "name" => "Unistalda, Rio Grande do Sul",
                "latitude" => -29.04,
                "longitude" => -55.1517
            ],
            [
                "name" => "Uruguaiana, Rio Grande do Sul",
                "latitude" => -29.7614,
                "longitude" => -57.0853
            ],
            [
                "name" => "Vacaria, Rio Grande do Sul",
                "latitude" => -28.5079,
                "longitude" => -50.9418
            ],
            [
                "name" => "Vale Verde, Rio Grande do Sul",
                "latitude" => -29.7864,
                "longitude" => -52.1857
            ],
            [
                "name" => "Vale do Sol, Rio Grande do Sul",
                "latitude" => -29.5967,
                "longitude" => -52.6839
            ],
            [
                "name" => "Vale Real, Rio Grande do Sul",
                "latitude" => -29.3919,
                "longitude" => -51.2559
            ],
            [
                "name" => "Vanini, Rio Grande do Sul",
                "latitude" => -28.4758,
                "longitude" => -51.8447
            ],
            [
                "name" => "Venâncio Aires, Rio Grande do Sul",
                "latitude" => -29.6143,
                "longitude" => -52.1932
            ],
            [
                "name" => "Vera Cruz, Rio Grande do Sul",
                "latitude" => -29.7184,
                "longitude" => -52.5152
            ],
            [
                "name" => "Veranópolis, Rio Grande do Sul",
                "latitude" => -28.9312,
                "longitude" => -51.5516
            ],
            [
                "name" => "Vespasiano Corrêa, Rio Grande do Sul",
                "latitude" => -29.0655,
                "longitude" => -51.8625
            ],
            [
                "name" => "Viadutos, Rio Grande do Sul",
                "latitude" => -27.5716,
                "longitude" => -52.0211
            ],
            [
                "name" => "Viamão, Rio Grande do Sul",
                "latitude" => -30.0819,
                "longitude" => -51.0194
            ],
            [
                "name" => "Vicente Dutra, Rio Grande do Sul",
                "latitude" => -27.1607,
                "longitude" => -53.4022
            ],
            [
                "name" => "Victor Graeff, Rio Grande do Sul",
                "latitude" => -28.5632,
                "longitude" => -52.7495
            ],
            [
                "name" => "Vila Flores, Rio Grande do Sul",
                "latitude" => -28.8598,
                "longitude" => -51.5504
            ],
            [
                "name" => "Vila Lângaro, Rio Grande do Sul",
                "latitude" => -28.1062,
                "longitude" => -52.1438
            ],
            [
                "name" => "Vila Maria, Rio Grande do Sul",
                "latitude" => -28.5359,
                "longitude" => -52.1486
            ],
            [
                "name" => "Vila Nova do Sul, Rio Grande do Sul",
                "latitude" => -30.3461,
                "longitude" => -53.876
            ],
            [
                "name" => "Vista Alegre, Rio Grande do Sul",
                "latitude" => -27.3686,
                "longitude" => -53.4919
            ],
            [
                "name" => "Vista Alegre do Prata, Rio Grande do Sul",
                "latitude" => -28.8052,
                "longitude" => -51.7947
            ],
            [
                "name" => "Vista Gaúcha, Rio Grande do Sul",
                "latitude" => -27.2902,
                "longitude" => -53.6974
            ],
            [
                "name" => "Vitória das Missões, Rio Grande do Sul",
                "latitude" => -28.3516,
                "longitude" => -54.504
            ],
            [
                "name" => "Westfália, Rio Grande do Sul",
                "latitude" => -29.4263,
                "longitude" => -51.7645
            ],
            [
                "name" => "Xangri-lá, Rio Grande do Sul",
                "latitude" => -29.8065,
                "longitude" => -50.0519
            ],
            [
                "name" => "Água Clara, Mato Grosso do Sul",
                "latitude" => -20.4452,
                "longitude" => -52.879
            ],
            [
                "name" => "Alcinópolis, Mato Grosso do Sul",
                "latitude" => -18.3255,
                "longitude" => -53.7042
            ],
            [
                "name" => "Amambai, Mato Grosso do Sul",
                "latitude" => -23.1058,
                "longitude" => -55.2253
            ],
            [
                "name" => "Anastácio, Mato Grosso do Sul",
                "latitude" => -20.4823,
                "longitude" => -55.8104
            ],
            [
                "name" => "Anaurilândia, Mato Grosso do Sul",
                "latitude" => -22.1852,
                "longitude" => -52.7191
            ],
            [
                "name" => "Angélica, Mato Grosso do Sul",
                "latitude" => -22.1527,
                "longitude" => -53.7708
            ],
            [
                "name" => "Antônio João, Mato Grosso do Sul",
                "latitude" => -22.1927,
                "longitude" => -55.9517
            ],
            [
                "name" => "Aparecida do Taboado, Mato Grosso do Sul",
                "latitude" => -20.0873,
                "longitude" => -51.0961
            ],
            [
                "name" => "Aquidauana, Mato Grosso do Sul",
                "latitude" => -20.4666,
                "longitude" => -55.7868
            ],
            [
                "name" => "Aral Moreira, Mato Grosso do Sul",
                "latitude" => -22.9385,
                "longitude" => -55.6334
            ],
            [
                "name" => "Bandeirantes, Mato Grosso do Sul",
                "latitude" => -19.9275,
                "longitude" => -54.3585
            ],
            [
                "name" => "Bataguassu, Mato Grosso do Sul",
                "latitude" => -21.7159,
                "longitude" => -52.4221
            ],
            [
                "name" => "Batayporã, Mato Grosso do Sul",
                "latitude" => -22.2944,
                "longitude" => -53.2705
            ],
            [
                "name" => "Bela Vista, Mato Grosso do Sul",
                "latitude" => -22.1073,
                "longitude" => -56.5263
            ],
            [
                "name" => "Bodoquena, Mato Grosso do Sul",
                "latitude" => -20.537,
                "longitude" => -56.7127
            ],
            [
                "name" => "Bonito, Mato Grosso do Sul",
                "latitude" => -21.1261,
                "longitude" => -56.4836
            ],
            [
                "name" => "Brasilândia, Mato Grosso do Sul",
                "latitude" => -21.2544,
                "longitude" => -52.0365
            ],
            [
                "name" => "Caarapó, Mato Grosso do Sul",
                "latitude" => -22.6368,
                "longitude" => -54.8209
            ],
            [
                "name" => "Camapuã, Mato Grosso do Sul",
                "latitude" => -19.5347,
                "longitude" => -54.0431
            ],
            [
                "name" => "Campo Grande, Mato Grosso do Sul",
                "latitude" => -20.4486,
                "longitude" => -54.6295
            ],
            [
                "name" => "Caracol, Mato Grosso do Sul",
                "latitude" => -22.011,
                "longitude" => -57.0277
            ],
            [
                "name" => "Cassilândia, Mato Grosso do Sul",
                "latitude" => -19.1179,
                "longitude" => -51.7313
            ],
            [
                "name" => "Chapadão do Sul, Mato Grosso do Sul",
                "latitude" => -18.788,
                "longitude" => -52.6263
            ],
            [
                "name" => "Corguinho, Mato Grosso do Sul",
                "latitude" => -19.8243,
                "longitude" => -54.8281
            ],
            [
                "name" => "Coronel Sapucaia, Mato Grosso do Sul",
                "latitude" => -23.2724,
                "longitude" => -55.5278
            ],
            [
                "name" => "Corumbá, Mato Grosso do Sul",
                "latitude" => -19.0077,
                "longitude" => -57.651
            ],
            [
                "name" => "Costa Rica, Mato Grosso do Sul",
                "latitude" => -18.5432,
                "longitude" => -53.1287
            ],
            [
                "name" => "Coxim, Mato Grosso do Sul",
                "latitude" => -18.5013,
                "longitude" => -54.751
            ],
            [
                "name" => "Deodápolis, Mato Grosso do Sul",
                "latitude" => -22.2763,
                "longitude" => -54.1682
            ],
            [
                "name" => "Dois Irmãos do Buriti, Mato Grosso do Sul",
                "latitude" => -20.6848,
                "longitude" => -55.2915
            ],
            [
                "name" => "Douradina, Mato Grosso do Sul",
                "latitude" => -22.0405,
                "longitude" => -54.6158
            ],
            [
                "name" => "Dourados, Mato Grosso do Sul",
                "latitude" => -22.2231,
                "longitude" => -54.812
            ],
            [
                "name" => "Eldorado, Mato Grosso do Sul",
                "latitude" => -23.7868,
                "longitude" => -54.2838
            ],
            [
                "name" => "Fátima do Sul, Mato Grosso do Sul",
                "latitude" => -22.3789,
                "longitude" => -54.5131
            ],
            [
                "name" => "Figueirão, Mato Grosso do Sul",
                "latitude" => -18.6782,
                "longitude" => -53.638
            ],
            [
                "name" => "Glória de Dourados, Mato Grosso do Sul",
                "latitude" => -22.4136,
                "longitude" => -54.2335
            ],
            [
                "name" => "Guia Lopes da Laguna, Mato Grosso do Sul",
                "latitude" => -21.4583,
                "longitude" => -56.1117
            ],
            [
                "name" => "Iguatemi, Mato Grosso do Sul",
                "latitude" => -23.6736,
                "longitude" => -54.5637
            ],
            [
                "name" => "Inocência, Mato Grosso do Sul",
                "latitude" => -19.7277,
                "longitude" => -51.9281
            ],
            [
                "name" => "Itaporã, Mato Grosso do Sul",
                "latitude" => -22.08,
                "longitude" => -54.7934
            ],
            [
                "name" => "Itaquiraí, Mato Grosso do Sul",
                "latitude" => -23.4779,
                "longitude" => -54.187
            ],
            [
                "name" => "Ivinhema, Mato Grosso do Sul",
                "latitude" => -22.3046,
                "longitude" => -53.8184
            ],
            [
                "name" => "Japorã, Mato Grosso do Sul",
                "latitude" => -23.8903,
                "longitude" => -54.4059
            ],
            [
                "name" => "Jaraguari, Mato Grosso do Sul",
                "latitude" => -20.1386,
                "longitude" => -54.3996
            ],
            [
                "name" => "Jardim, Mato Grosso do Sul",
                "latitude" => -21.4799,
                "longitude" => -56.1489
            ],
            [
                "name" => "Jateí, Mato Grosso do Sul",
                "latitude" => -22.4806,
                "longitude" => -54.3079
            ],
            [
                "name" => "Juti, Mato Grosso do Sul",
                "latitude" => -22.8596,
                "longitude" => -54.6061
            ],
            [
                "name" => "Ladário, Mato Grosso do Sul",
                "latitude" => -19.0089,
                "longitude" => -57.5973
            ],
            [
                "name" => "Laguna Carapã, Mato Grosso do Sul",
                "latitude" => -22.5448,
                "longitude" => -55.1502
            ],
            [
                "name" => "Maracaju, Mato Grosso do Sul",
                "latitude" => -21.6105,
                "longitude" => -55.1678
            ],
            [
                "name" => "Miranda, Mato Grosso do Sul",
                "latitude" => -20.2355,
                "longitude" => -56.3746
            ],
            [
                "name" => "Mundo Novo, Mato Grosso do Sul",
                "latitude" => -23.9355,
                "longitude" => -54.281
            ],
            [
                "name" => "Naviraí, Mato Grosso do Sul",
                "latitude" => -23.0618,
                "longitude" => -54.1995
            ],
            [
                "name" => "Nioaque, Mato Grosso do Sul",
                "latitude" => -21.1419,
                "longitude" => -55.8296
            ],
            [
                "name" => "Nova Alvorada do Sul, Mato Grosso do Sul",
                "latitude" => -21.4657,
                "longitude" => -54.3825
            ],
            [
                "name" => "Nova Andradina, Mato Grosso do Sul",
                "latitude" => -22.238,
                "longitude" => -53.3437
            ],
            [
                "name" => "Novo Horizonte do Sul, Mato Grosso do Sul",
                "latitude" => -22.6693,
                "longitude" => -53.8601
            ],
            [
                "name" => "Paraíso das Águas, Mato Grosso do Sul",
                "latitude" => -19.0216,
                "longitude" => -53.0116
            ],
            [
                "name" => "Paranaíba, Mato Grosso do Sul",
                "latitude" => -19.6746,
                "longitude" => -51.1909
            ],
            [
                "name" => "Paranhos, Mato Grosso do Sul",
                "latitude" => -23.8911,
                "longitude" => -55.429
            ],
            [
                "name" => "Pedro Gomes, Mato Grosso do Sul",
                "latitude" => -18.0996,
                "longitude" => -54.5507
            ],
            [
                "name" => "Ponta Porã, Mato Grosso do Sul",
                "latitude" => -22.5296,
                "longitude" => -55.7203
            ],
            [
                "name" => "Porto Murtinho, Mato Grosso do Sul",
                "latitude" => -21.6981,
                "longitude" => -57.8836
            ],
            [
                "name" => "Ribas do Rio Pardo, Mato Grosso do Sul",
                "latitude" => -20.4445,
                "longitude" => -53.7588
            ],
            [
                "name" => "Rio Brilhante, Mato Grosso do Sul",
                "latitude" => -21.8033,
                "longitude" => -54.5427
            ],
            [
                "name" => "Rio Negro, Mato Grosso do Sul",
                "latitude" => -19.447,
                "longitude" => -54.9859
            ],
            [
                "name" => "Rio Verde de Mato Grosso, Mato Grosso do Sul",
                "latitude" => -18.9249,
                "longitude" => -54.8434
            ],
            [
                "name" => "Rochedo, Mato Grosso do Sul",
                "latitude" => -19.9565,
                "longitude" => -54.8848
            ],
            [
                "name" => "Santa Rita do Pardo, Mato Grosso do Sul",
                "latitude" => -21.3016,
                "longitude" => -52.8333
            ],
            [
                "name" => "São Gabriel do Oeste, Mato Grosso do Sul",
                "latitude" => -19.3889,
                "longitude" => -54.5507
            ],
            [
                "name" => "Sete Quedas, Mato Grosso do Sul",
                "latitude" => -23.9705,
                "longitude" => -55.0398
            ],
            [
                "name" => "Selvíria, Mato Grosso do Sul",
                "latitude" => -20.3637,
                "longitude" => -51.4192
            ],
            [
                "name" => "Sidrolândia, Mato Grosso do Sul",
                "latitude" => -20.9302,
                "longitude" => -54.9692
            ],
            [
                "name" => "Sonora, Mato Grosso do Sul",
                "latitude" => -17.5698,
                "longitude" => -54.7551
            ],
            [
                "name" => "Tacuru, Mato Grosso do Sul",
                "latitude" => -23.636,
                "longitude" => -55.0141
            ],
            [
                "name" => "Taquarussu, Mato Grosso do Sul",
                "latitude" => -22.4898,
                "longitude" => -53.3519
            ],
            [
                "name" => "Terenos, Mato Grosso do Sul",
                "latitude" => -20.4378,
                "longitude" => -54.8647
            ],
            [
                "name" => "Três Lagoas, Mato Grosso do Sul",
                "latitude" => -20.7849,
                "longitude" => -51.7007
            ],
            [
                "name" => "Vicentina, Mato Grosso do Sul",
                "latitude" => -22.4098,
                "longitude" => -54.4415
            ],
            [
                "name" => "Acorizal, Mato Grosso",
                "latitude" => -15.194,
                "longitude" => -56.3632
            ],
            [
                "name" => "Água Boa, Mato Grosso",
                "latitude" => -14.051,
                "longitude" => -52.1601
            ],
            [
                "name" => "Alta Floresta, Mato Grosso",
                "latitude" => -9.86674,
                "longitude" => -56.0867
            ],
            [
                "name" => "Alto Araguaia, Mato Grosso",
                "latitude" => -17.3153,
                "longitude" => -53.2181
            ],
            [
                "name" => "Alto Boa Vista, Mato Grosso",
                "latitude" => -11.6732,
                "longitude" => -51.3883
            ],
            [
                "name" => "Alto Garças, Mato Grosso",
                "latitude" => -16.9462,
                "longitude" => -53.5272
            ],
            [
                "name" => "Alto Paraguai, Mato Grosso",
                "latitude" => -14.5137,
                "longitude" => -56.4776
            ],
            [
                "name" => "Alto Taquari, Mato Grosso",
                "latitude" => -17.8241,
                "longitude" => -53.2792
            ],
            [
                "name" => "Apiacás, Mato Grosso",
                "latitude" => -9.53981,
                "longitude" => -57.4587
            ],
            [
                "name" => "Araguaiana, Mato Grosso",
                "latitude" => -15.7291,
                "longitude" => -51.8341
            ],
            [
                "name" => "Araguainha, Mato Grosso",
                "latitude" => -16.857,
                "longitude" => -53.0318
            ],
            [
                "name" => "Araputanga, Mato Grosso",
                "latitude" => -15.4641,
                "longitude" => -58.3425
            ],
            [
                "name" => "Arenápolis, Mato Grosso",
                "latitude" => -14.4472,
                "longitude" => -56.8437
            ],
            [
                "name" => "Aripuanã, Mato Grosso",
                "latitude" => -10.1723,
                "longitude" => -59.4568
            ],
            [
                "name" => "Barão de Melgaço, Mato Grosso",
                "latitude" => -16.2067,
                "longitude" => -55.9623
            ],
            [
                "name" => "Barra do Bugres, Mato Grosso",
                "latitude" => -15.0702,
                "longitude" => -57.1878
            ],
            [
                "name" => "Barra do Garças, Mato Grosso",
                "latitude" => -15.8804,
                "longitude" => -52.264
            ],
            [
                "name" => "Bom Jesus do Araguaia, Mato Grosso",
                "latitude" => -12.1706,
                "longitude" => -51.5032
            ],
            [
                "name" => "Brasnorte, Mato Grosso",
                "latitude" => -12.1474,
                "longitude" => -57.9833
            ],
            [
                "name" => "Cáceres, Mato Grosso",
                "latitude" => -16.0764,
                "longitude" => -57.6818
            ],
            [
                "name" => "Campinápolis, Mato Grosso",
                "latitude" => -14.5162,
                "longitude" => -52.893
            ],
            [
                "name" => "Campo Novo do Parecis, Mato Grosso",
                "latitude" => -13.6587,
                "longitude" => -57.8907
            ],
            [
                "name" => "Campo Verde, Mato Grosso",
                "latitude" => -15.545,
                "longitude" => -55.1626
            ],
            [
                "name" => "Campos de Júlio, Mato Grosso",
                "latitude" => -13.7242,
                "longitude" => -59.2858
            ],
            [
                "name" => "Canabrava do Norte, Mato Grosso",
                "latitude" => -11.0556,
                "longitude" => -51.8209
            ],
            [
                "name" => "Canarana, Mato Grosso",
                "latitude" => -13.5515,
                "longitude" => -52.2705
            ],
            [
                "name" => "Carlinda, Mato Grosso",
                "latitude" => -9.94912,
                "longitude" => -55.8417
            ],
            [
                "name" => "Castanheira, Mato Grosso",
                "latitude" => -11.1251,
                "longitude" => -58.6081
            ],
            [
                "name" => "Chapada dos Guimarães, Mato Grosso",
                "latitude" => -15.4643,
                "longitude" => -55.7499
            ],
            [
                "name" => "Cláudia, Mato Grosso",
                "latitude" => -11.5075,
                "longitude" => -54.8835
            ],
            [
                "name" => "Cocalinho, Mato Grosso",
                "latitude" => -14.3903,
                "longitude" => -51.0001
            ],
            [
                "name" => "Colíder, Mato Grosso",
                "latitude" => -10.8135,
                "longitude" => -55.461
            ],
            [
                "name" => "Colniza, Mato Grosso",
                "latitude" => -9.46121,
                "longitude" => -59.2252
            ],
            [
                "name" => "Comodoro, Mato Grosso",
                "latitude" => -13.6614,
                "longitude" => -59.7848
            ],
            [
                "name" => "Confresa, Mato Grosso",
                "latitude" => -10.6437,
                "longitude" => -51.5699
            ],
            [
                "name" => "Conquista D'Oeste, Mato Grosso",
                "latitude" => -14.5381,
                "longitude" => -59.5444
            ],
            [
                "name" => "Cotriguaçu, Mato Grosso",
                "latitude" => -9.85656,
                "longitude" => -58.4192
            ],
            [
                "name" => "Cuiabá, Mato Grosso",
                "latitude" => -15.601,
                "longitude" => -56.0974
            ],
            [
                "name" => "Curvelândia, Mato Grosso",
                "latitude" => -15.6084,
                "longitude" => -57.9133
            ],
            [
                "name" => "Denise, Mato Grosso",
                "latitude" => -14.7324,
                "longitude" => -57.0583
            ],
            [
                "name" => "Diamantino, Mato Grosso",
                "latitude" => -14.4037,
                "longitude" => -56.4366
            ],
            [
                "name" => "Dom Aquino, Mato Grosso",
                "latitude" => -15.8099,
                "longitude" => -54.9223
            ],
            [
                "name" => "Feliz Natal, Mato Grosso",
                "latitude" => -12.385,
                "longitude" => -54.9227
            ],
            [
                "name" => "Figueirópolis D'Oeste, Mato Grosso",
                "latitude" => -15.4439,
                "longitude" => -58.7391
            ],
            [
                "name" => "Gaúcha do Norte, Mato Grosso",
                "latitude" => -13.2443,
                "longitude" => -53.0809
            ],
            [
                "name" => "General Carneiro, Mato Grosso",
                "latitude" => -15.7094,
                "longitude" => -52.7574
            ],
            [
                "name" => "Glória D'Oeste, Mato Grosso",
                "latitude" => -15.768,
                "longitude" => -58.3108
            ],
            [
                "name" => "Guarantã do Norte, Mato Grosso",
                "latitude" => -9.96218,
                "longitude" => -54.9121
            ],
            [
                "name" => "Guiratinga, Mato Grosso",
                "latitude" => -16.346,
                "longitude" => -53.7575
            ],
            [
                "name" => "Indiavaí, Mato Grosso",
                "latitude" => -15.4921,
                "longitude" => -58.5802
            ],
            [
                "name" => "Ipiranga do Norte, Mato Grosso",
                "latitude" => -12.2408,
                "longitude" => -56.1531
            ],
            [
                "name" => "Itanhangá, Mato Grosso",
                "latitude" => -12.2259,
                "longitude" => -56.6463
            ],
            [
                "name" => "Itaúba, Mato Grosso",
                "latitude" => -11.0614,
                "longitude" => -55.2766
            ],
            [
                "name" => "Itiquira, Mato Grosso",
                "latitude" => -17.2147,
                "longitude" => -54.1422
            ],
            [
                "name" => "Jaciara, Mato Grosso",
                "latitude" => -15.9548,
                "longitude" => -54.9733
            ],
            [
                "name" => "Jangada, Mato Grosso",
                "latitude" => -15.235,
                "longitude" => -56.4917
            ],
            [
                "name" => "Jauru, Mato Grosso",
                "latitude" => -15.3342,
                "longitude" => -58.8723
            ],
            [
                "name" => "Juara, Mato Grosso",
                "latitude" => -11.2639,
                "longitude" => -57.5244
            ],
            [
                "name" => "Juína, Mato Grosso",
                "latitude" => -11.3728,
                "longitude" => -58.7483
            ],
            [
                "name" => "Juruena, Mato Grosso",
                "latitude" => -10.3178,
                "longitude" => -58.3592
            ],
            [
                "name" => "Juscimeira, Mato Grosso",
                "latitude" => -16.0633,
                "longitude" => -54.8859
            ],
            [
                "name" => "Lambari D'Oeste, Mato Grosso",
                "latitude" => -15.3188,
                "longitude" => -58.0046
            ],
            [
                "name" => "Lucas do Rio Verde, Mato Grosso",
                "latitude" => -13.0588,
                "longitude" => -55.9042
            ],
            [
                "name" => "Luciara, Mato Grosso",
                "latitude" => -11.2219,
                "longitude" => -50.6676
            ],
            [
                "name" => "Vila Bela da Santíssima Trindade, Mato Grosso",
                "latitude" => -15.0068,
                "longitude" => -59.9504
            ],
            [
                "name" => "Marcelândia, Mato Grosso",
                "latitude" => -11.0463,
                "longitude" => -54.4377
            ],
            [
                "name" => "Matupá, Mato Grosso",
                "latitude" => -10.1821,
                "longitude" => -54.9467
            ],
            [
                "name" => "Mirassol d'Oeste, Mato Grosso",
                "latitude" => -15.6759,
                "longitude" => -58.0951
            ],
            [
                "name" => "Nobres, Mato Grosso",
                "latitude" => -14.7192,
                "longitude" => -56.3284
            ],
            [
                "name" => "Nortelândia, Mato Grosso",
                "latitude" => -14.454,
                "longitude" => -56.7945
            ],
            [
                "name" => "Nossa Senhora do Livramento, Mato Grosso",
                "latitude" => -15.772,
                "longitude" => -56.3432
            ],
            [
                "name" => "Nova Bandeirantes, Mato Grosso",
                "latitude" => -9.84977,
                "longitude" => -57.8139
            ],
            [
                "name" => "Nova Nazaré, Mato Grosso",
                "latitude" => -13.9486,
                "longitude" => -51.8002
            ],
            [
                "name" => "Nova Lacerda, Mato Grosso",
                "latitude" => -14.4727,
                "longitude" => -59.6001
            ],
            [
                "name" => "Nova Santa Helena, Mato Grosso",
                "latitude" => -10.8651,
                "longitude" => -55.1872
            ],
            [
                "name" => "Nova Brasilândia, Mato Grosso",
                "latitude" => -14.9612,
                "longitude" => -54.9685
            ],
            [
                "name" => "Nova Canaã do Norte, Mato Grosso",
                "latitude" => -10.558,
                "longitude" => -55.953
            ],
            [
                "name" => "Nova Mutum, Mato Grosso",
                "latitude" => -13.8374,
                "longitude" => -56.0743
            ],
            [
                "name" => "Nova Olímpia, Mato Grosso",
                "latitude" => -14.7889,
                "longitude" => -57.2886
            ],
            [
                "name" => "Nova Ubiratã, Mato Grosso",
                "latitude" => -12.9834,
                "longitude" => -55.2556
            ],
            [
                "name" => "Nova Xavantina, Mato Grosso",
                "latitude" => -14.6771,
                "longitude" => -52.3502
            ],
            [
                "name" => "Novo Mundo, Mato Grosso",
                "latitude" => -9.95616,
                "longitude" => -55.2029
            ],
            [
                "name" => "Novo Horizonte do Norte, Mato Grosso",
                "latitude" => -11.4089,
                "longitude" => -57.3488
            ],
            [
                "name" => "Novo São Joaquim, Mato Grosso",
                "latitude" => -14.9054,
                "longitude" => -53.0194
            ],
            [
                "name" => "Paranaíta, Mato Grosso",
                "latitude" => -9.65835,
                "longitude" => -56.4786
            ],
            [
                "name" => "Paranatinga, Mato Grosso",
                "latitude" => -14.4265,
                "longitude" => -54.0524
            ],
            [
                "name" => "Novo Santo Antônio, Mato Grosso",
                "latitude" => -12.2875,
                "longitude" => -50.9686
            ],
            [
                "name" => "Pedra Preta, Mato Grosso",
                "latitude" => -16.6245,
                "longitude" => -54.4722
            ],
            [
                "name" => "Peixoto de Azevedo, Mato Grosso",
                "latitude" => -10.2262,
                "longitude" => -54.9794
            ],
            [
                "name" => "Planalto da Serra, Mato Grosso",
                "latitude" => -14.6518,
                "longitude" => -54.7819
            ],
            [
                "name" => "Poconé, Mato Grosso",
                "latitude" => -16.266,
                "longitude" => -56.6261
            ],
            [
                "name" => "Pontal do Araguaia, Mato Grosso",
                "latitude" => -15.9274,
                "longitude" => -52.3273
            ],
            [
                "name" => "Ponte Branca, Mato Grosso",
                "latitude" => -16.7584,
                "longitude" => -52.8369
            ],
            [
                "name" => "Pontes e Lacerda, Mato Grosso",
                "latitude" => -15.2219,
                "longitude" => -59.3435
            ],
            [
                "name" => "Porto Alegre do Norte, Mato Grosso",
                "latitude" => -10.8761,
                "longitude" => -51.6357
            ],
            [
                "name" => "Porto dos Gaúchos, Mato Grosso",
                "latitude" => -11.533,
                "longitude" => -57.4132
            ],
            [
                "name" => "Porto Esperidião, Mato Grosso",
                "latitude" => -15.857,
                "longitude" => -58.4619
            ],
            [
                "name" => "Porto Estrela, Mato Grosso",
                "latitude" => -15.3235,
                "longitude" => -57.2204
            ],
            [
                "name" => "Poxoréu, Mato Grosso",
                "latitude" => -15.8299,
                "longitude" => -54.4208
            ],
            [
                "name" => "Primavera do Leste, Mato Grosso",
                "latitude" => -15.544,
                "longitude" => -54.2811
            ],
            [
                "name" => "Querência, Mato Grosso",
                "latitude" => -12.6093,
                "longitude" => -52.1821
            ],
            [
                "name" => "São José dos Quatro Marcos, Mato Grosso",
                "latitude" => -15.6276,
                "longitude" => -58.1772
            ],
            [
                "name" => "Reserva do Cabaçal, Mato Grosso",
                "latitude" => -15.0743,
                "longitude" => -58.4585
            ],
            [
                "name" => "Ribeirão Cascalheira, Mato Grosso",
                "latitude" => -12.9367,
                "longitude" => -51.8244
            ],
            [
                "name" => "Ribeirãozinho, Mato Grosso",
                "latitude" => -16.4856,
                "longitude" => -52.6924
            ],
            [
                "name" => "Rio Branco, Mato Grosso",
                "latitude" => -15.2483,
                "longitude" => -58.1259
            ],
            [
                "name" => "Santa Carmem, Mato Grosso",
                "latitude" => -11.9125,
                "longitude" => -55.2263
            ],
            [
                "name" => "Santo Afonso, Mato Grosso",
                "latitude" => -14.4945,
                "longitude" => -57.0091
            ],
            [
                "name" => "São José do Povo, Mato Grosso",
                "latitude" => -16.4549,
                "longitude" => -54.2487
            ],
            [
                "name" => "São José do Rio Claro, Mato Grosso",
                "latitude" => -13.4398,
                "longitude" => -56.7218
            ],
            [
                "name" => "São José do Xingu, Mato Grosso",
                "latitude" => -10.7982,
                "longitude" => -52.7486
            ],
            [
                "name" => "São Pedro da Cipa, Mato Grosso",
                "latitude" => -16.0109,
                "longitude" => -54.9176
            ],
            [
                "name" => "Rondolândia, Mato Grosso",
                "latitude" => -10.8376,
                "longitude" => -61.4697
            ],
            [
                "name" => "Rondonópolis, Mato Grosso",
                "latitude" => -16.4673,
                "longitude" => -54.6372
            ],
            [
                "name" => "Rosário Oeste, Mato Grosso",
                "latitude" => -14.8259,
                "longitude" => -56.4236
            ],
            [
                "name" => "Santa Cruz do Xingu, Mato Grosso",
                "latitude" => -10.1532,
                "longitude" => -52.3953
            ],
            [
                "name" => "Salto do Céu, Mato Grosso",
                "latitude" => -15.1303,
                "longitude" => -58.1317
            ],
            [
                "name" => "Santa Rita do Trivelato, Mato Grosso",
                "latitude" => -13.8146,
                "longitude" => -55.2706
            ],
            [
                "name" => "Santa Terezinha, Mato Grosso",
                "latitude" => -10.4704,
                "longitude" => -50.514
            ],
            [
                "name" => "Santo Antônio do Leste, Mato Grosso",
                "latitude" => -14.805,
                "longitude" => -53.6075
            ],
            [
                "name" => "Santo Antônio do Leverger, Mato Grosso",
                "latitude" => -15.8632,
                "longitude" => -56.0788
            ],
            [
                "name" => "São Félix do Araguaia, Mato Grosso",
                "latitude" => -11.615,
                "longitude" => -50.6706
            ],
            [
                "name" => "Sapezal, Mato Grosso",
                "latitude" => -12.9892,
                "longitude" => -58.7645
            ],
            [
                "name" => "Serra Nova Dourada, Mato Grosso",
                "latitude" => -12.0896,
                "longitude" => -51.4025
            ],
            [
                "name" => "Sinop, Mato Grosso",
                "latitude" => -11.8604,
                "longitude" => -55.5091
            ],
            [
                "name" => "Sorriso, Mato Grosso",
                "latitude" => -12.5425,
                "longitude" => -55.7211
            ],
            [
                "name" => "Tabaporã, Mato Grosso",
                "latitude" => -11.3007,
                "longitude" => -56.8312
            ],
            [
                "name" => "Tangará da Serra, Mato Grosso",
                "latitude" => -14.6229,
                "longitude" => -57.4933
            ],
            [
                "name" => "Tapurah, Mato Grosso",
                "latitude" => -12.695,
                "longitude" => -56.5178
            ],
            [
                "name" => "Terra Nova do Norte, Mato Grosso",
                "latitude" => -10.517,
                "longitude" => -55.231
            ],
            [
                "name" => "Tesouro, Mato Grosso",
                "latitude" => -16.0809,
                "longitude" => -53.559
            ],
            [
                "name" => "Torixoréu, Mato Grosso",
                "latitude" => -16.2006,
                "longitude" => -52.5571
            ],
            [
                "name" => "União do Sul, Mato Grosso",
                "latitude" => -11.5308,
                "longitude" => -54.3616
            ],
            [
                "name" => "Vale de São Domingos, Mato Grosso",
                "latitude" => -15.286,
                "longitude" => -59.0683
            ],
            [
                "name" => "Várzea Grande, Mato Grosso",
                "latitude" => -15.6458,
                "longitude" => -56.1322
            ],
            [
                "name" => "Vera, Mato Grosso",
                "latitude" => -12.3017,
                "longitude" => -55.3045
            ],
            [
                "name" => "Vila Rica, Mato Grosso",
                "latitude" => -10.0137,
                "longitude" => -51.1186
            ],
            [
                "name" => "Nova Guarita, Mato Grosso",
                "latitude" => -10.312,
                "longitude" => -55.4061
            ],
            [
                "name" => "Nova Marilândia, Mato Grosso",
                "latitude" => -14.3568,
                "longitude" => -56.9696
            ],
            [
                "name" => "Nova Maringá, Mato Grosso",
                "latitude" => -13.0136,
                "longitude" => -57.0908
            ],
            [
                "name" => "Nova Monte Verde, Mato Grosso",
                "latitude" => -9.99998,
                "longitude" => -57.5261
            ],
            [
                "name" => "Abadia de Goiás, Goiás",
                "latitude" => -16.7573,
                "longitude" => -49.4412
            ],
            [
                "name" => "Abadiânia, Goiás",
                "latitude" => -16.197,
                "longitude" => -48.7057
            ],
            [
                "name" => "Acreúna, Goiás",
                "latitude" => -17.396,
                "longitude" => -50.3749
            ],
            [
                "name" => "Adelândia, Goiás",
                "latitude" => -16.4127,
                "longitude" => -50.1657
            ],
            [
                "name" => "Água Fria de Goiás, Goiás",
                "latitude" => -14.9778,
                "longitude" => -47.7823
            ],
            [
                "name" => "Água Limpa, Goiás",
                "latitude" => -18.0771,
                "longitude" => -48.7603
            ],
            [
                "name" => "Águas Lindas de Goiás, Goiás",
                "latitude" => -15.7617,
                "longitude" => -48.2816
            ],
            [
                "name" => "Alexânia, Goiás",
                "latitude" => -16.0834,
                "longitude" => -48.5076
            ],
            [
                "name" => "Aloândia, Goiás",
                "latitude" => -17.7292,
                "longitude" => -49.4769
            ],
            [
                "name" => "Alto Horizonte, Goiás",
                "latitude" => -14.1978,
                "longitude" => -49.3378
            ],
            [
                "name" => "Alto Paraíso de Goiás, Goiás",
                "latitude" => -14.1305,
                "longitude" => -47.51
            ],
            [
                "name" => "Alvorada do Norte, Goiás",
                "latitude" => -14.4797,
                "longitude" => -46.491
            ],
            [
                "name" => "Amaralina, Goiás",
                "latitude" => -13.9236,
                "longitude" => -49.2962
            ],
            [
                "name" => "Americano do Brasil, Goiás",
                "latitude" => -16.2514,
                "longitude" => -49.9831
            ],
            [
                "name" => "Amorinópolis, Goiás",
                "latitude" => -16.6151,
                "longitude" => -51.0919
            ],
            [
                "name" => "Anápolis, Goiás",
                "latitude" => -16.3281,
                "longitude" => -48.953
            ],
            [
                "name" => "Anhanguera, Goiás",
                "latitude" => -18.3339,
                "longitude" => -48.2204
            ],
            [
                "name" => "Anicuns, Goiás",
                "latitude" => -16.4642,
                "longitude" => -49.9617
            ],
            [
                "name" => "Aparecida de Goiânia, Goiás",
                "latitude" => -16.8198,
                "longitude" => -49.2469
            ],
            [
                "name" => "Aparecida do Rio Doce, Goiás",
                "latitude" => -18.2941,
                "longitude" => -51.1516
            ],
            [
                "name" => "Aporé, Goiás",
                "latitude" => -18.9607,
                "longitude" => -51.9232
            ],
            [
                "name" => "Araçu, Goiás",
                "latitude" => -16.3563,
                "longitude" => -49.6804
            ],
            [
                "name" => "Aragarças, Goiás",
                "latitude" => -15.8955,
                "longitude" => -52.2372
            ],
            [
                "name" => "Aragoiânia, Goiás",
                "latitude" => -16.9087,
                "longitude" => -49.4476
            ],
            [
                "name" => "Araguapaz, Goiás",
                "latitude" => -15.0909,
                "longitude" => -50.6315
            ],
            [
                "name" => "Arenópolis, Goiás",
                "latitude" => -16.3837,
                "longitude" => -51.5563
            ],
            [
                "name" => "Aruanã, Goiás",
                "latitude" => -14.9166,
                "longitude" => -51.075
            ],
            [
                "name" => "Aurilândia, Goiás",
                "latitude" => -16.6773,
                "longitude" => -50.4641
            ],
            [
                "name" => "Avelinópolis, Goiás",
                "latitude" => -16.4672,
                "longitude" => -49.7579
            ],
            [
                "name" => "Baliza, Goiás",
                "latitude" => -16.1966,
                "longitude" => -52.5393
            ],
            [
                "name" => "Barro Alto, Goiás",
                "latitude" => -14.9658,
                "longitude" => -48.9086
            ],
            [
                "name" => "Bela Vista de Goiás, Goiás",
                "latitude" => -16.9693,
                "longitude" => -48.9513
            ],
            [
                "name" => "Bom Jardim de Goiás, Goiás",
                "latitude" => -16.2063,
                "longitude" => -52.1728
            ],
            [
                "name" => "Bom Jesus de Goiás, Goiás",
                "latitude" => -18.2173,
                "longitude" => -49.74
            ],
            [
                "name" => "Bonfinópolis, Goiás",
                "latitude" => -16.6173,
                "longitude" => -48.9616
            ],
            [
                "name" => "Bonópolis, Goiás",
                "latitude" => -13.6329,
                "longitude" => -49.8106
            ],
            [
                "name" => "Brazabrantes, Goiás",
                "latitude" => -16.4281,
                "longitude" => -49.3863
            ],
            [
                "name" => "Britânia, Goiás",
                "latitude" => -15.2428,
                "longitude" => -51.1602
            ],
            [
                "name" => "Buriti Alegre, Goiás",
                "latitude" => -18.1378,
                "longitude" => -49.0404
            ],
            [
                "name" => "Buriti de Goiás, Goiás",
                "latitude" => -16.1792,
                "longitude" => -50.4302
            ],
            [
                "name" => "Buritinópolis, Goiás",
                "latitude" => -14.4772,
                "longitude" => -46.4076
            ],
            [
                "name" => "Cabeceiras, Goiás",
                "latitude" => -15.7995,
                "longitude" => -46.9265
            ],
            [
                "name" => "Cachoeira Alta, Goiás",
                "latitude" => -18.7618,
                "longitude" => -50.9432
            ],
            [
                "name" => "Cachoeira de Goiás, Goiás",
                "latitude" => -16.6635,
                "longitude" => -50.646
            ],
            [
                "name" => "Cachoeira Dourada, Goiás",
                "latitude" => -18.4859,
                "longitude" => -49.4766
            ],
            [
                "name" => "Caçu, Goiás",
                "latitude" => -18.5594,
                "longitude" => -51.1328
            ],
            [
                "name" => "Caiapônia, Goiás",
                "latitude" => -16.9539,
                "longitude" => -51.8091
            ],
            [
                "name" => "Caldas Novas, Goiás",
                "latitude" => -17.7441,
                "longitude" => -48.6246
            ],
            [
                "name" => "Caldazinha, Goiás",
                "latitude" => -16.7117,
                "longitude" => -49.0013
            ],
            [
                "name" => "Campestre de Goiás, Goiás",
                "latitude" => -16.7624,
                "longitude" => -49.695
            ],
            [
                "name" => "Campinaçu, Goiás",
                "latitude" => -13.787,
                "longitude" => -48.5704
            ],
            [
                "name" => "Campinorte, Goiás",
                "latitude" => -14.3137,
                "longitude" => -49.1511
            ],
            [
                "name" => "Campo Alegre de Goiás, Goiás",
                "latitude" => -17.6363,
                "longitude" => -47.7768
            ],
            [
                "name" => "Campo Limpo de Goiás, Goiás",
                "latitude" => -16.2971,
                "longitude" => -49.0895
            ],
            [
                "name" => "Campos Belos, Goiás",
                "latitude" => -13.035,
                "longitude" => -46.7681
            ],
            [
                "name" => "Campos Verdes, Goiás",
                "latitude" => -14.2442,
                "longitude" => -49.6528
            ],
            [
                "name" => "Carmo do Rio Verde, Goiás",
                "latitude" => -15.3549,
                "longitude" => -49.708
            ],
            [
                "name" => "Castelândia, Goiás",
                "latitude" => -18.0921,
                "longitude" => -50.203
            ],
            [
                "name" => "Catalão, Goiás",
                "latitude" => -18.1656,
                "longitude" => -47.944
            ],
            [
                "name" => "Caturaí, Goiás",
                "latitude" => -16.4447,
                "longitude" => -49.4936
            ],
            [
                "name" => "Cavalcante, Goiás",
                "latitude" => -13.7976,
                "longitude" => -47.4566
            ],
            [
                "name" => "Ceres, Goiás",
                "latitude" => -15.3061,
                "longitude" => -49.6
            ],
            [
                "name" => "Cezarina, Goiás",
                "latitude" => -16.9718,
                "longitude" => -49.7758
            ],
            [
                "name" => "Chapadão do Céu, Goiás",
                "latitude" => -18.4073,
                "longitude" => -52.549
            ],
            [
                "name" => "Cidade Ocidental, Goiás",
                "latitude" => -16.0765,
                "longitude" => -47.9252
            ],
            [
                "name" => "Cocalzinho de Goiás, Goiás",
                "latitude" => -15.7914,
                "longitude" => -48.7747
            ],
            [
                "name" => "Colinas do Sul, Goiás",
                "latitude" => -14.1528,
                "longitude" => -48.076
            ],
            [
                "name" => "Córrego do Ouro, Goiás",
                "latitude" => -16.2918,
                "longitude" => -50.5503
            ],
            [
                "name" => "Corumbá de Goiás, Goiás",
                "latitude" => -15.9245,
                "longitude" => -48.8117
            ],
            [
                "name" => "Corumbaíba, Goiás",
                "latitude" => -18.1415,
                "longitude" => -48.5626
            ],
            [
                "name" => "Cristalina, Goiás",
                "latitude" => -16.7676,
                "longitude" => -47.6131
            ],
            [
                "name" => "Cristianópolis, Goiás",
                "latitude" => -17.1987,
                "longitude" => -48.7034
            ],
            [
                "name" => "Crixás, Goiás",
                "latitude" => -14.5412,
                "longitude" => -49.974
            ],
            [
                "name" => "Cromínia, Goiás",
                "latitude" => -17.2883,
                "longitude" => -49.3798
            ],
            [
                "name" => "Cumari, Goiás",
                "latitude" => -18.2644,
                "longitude" => -48.1511
            ],
            [
                "name" => "Damianópolis, Goiás",
                "latitude" => -14.5604,
                "longitude" => -46.178
            ],
            [
                "name" => "Damolândia, Goiás",
                "latitude" => -16.2544,
                "longitude" => -49.3631
            ],
            [
                "name" => "Davinópolis, Goiás",
                "latitude" => -18.1501,
                "longitude" => -47.5568
            ],
            [
                "name" => "Diorama, Goiás",
                "latitude" => -16.2329,
                "longitude" => -51.2543
            ],
            [
                "name" => "Doverlândia, Goiás",
                "latitude" => -16.7188,
                "longitude" => -52.3189
            ],
            [
                "name" => "Edealina, Goiás",
                "latitude" => -17.4239,
                "longitude" => -49.6644
            ],
            [
                "name" => "Edéia, Goiás",
                "latitude" => -17.3406,
                "longitude" => -49.9295
            ],
            [
                "name" => "Estrela do Norte, Goiás",
                "latitude" => -13.8665,
                "longitude" => -49.0716
            ],
            [
                "name" => "Faina, Goiás",
                "latitude" => -15.4473,
                "longitude" => -50.3622
            ],
            [
                "name" => "Fazenda Nova, Goiás",
                "latitude" => -16.1834,
                "longitude" => -50.7781
            ],
            [
                "name" => "Firminópolis, Goiás",
                "latitude" => -16.5778,
                "longitude" => -50.304
            ],
            [
                "name" => "Flores de Goiás, Goiás",
                "latitude" => -14.4451,
                "longitude" => -47.0417
            ],
            [
                "name" => "Formosa, Goiás",
                "latitude" => -15.54,
                "longitude" => -47.337
            ],
            [
                "name" => "Formoso, Goiás",
                "latitude" => -13.6499,
                "longitude" => -48.8775
            ],
            [
                "name" => "Gameleira de Goiás, Goiás",
                "latitude" => -16.4854,
                "longitude" => -48.6454
            ],
            [
                "name" => "Divinópolis de Goiás, Goiás",
                "latitude" => -13.2853,
                "longitude" => -46.3999
            ],
            [
                "name" => "Goianápolis, Goiás",
                "latitude" => -16.5098,
                "longitude" => -49.0234
            ],
            [
                "name" => "Goiandira, Goiás",
                "latitude" => -18.1352,
                "longitude" => -48.0875
            ],
            [
                "name" => "Goianésia, Goiás",
                "latitude" => -15.3118,
                "longitude" => -49.1162
            ],
            [
                "name" => "Goiânia, Goiás",
                "latitude" => -16.6864,
                "longitude" => -49.2643
            ],
            [
                "name" => "Goianira, Goiás",
                "latitude" => -16.4947,
                "longitude" => -49.427
            ],
            [
                "name" => "Goiás, Goiás",
                "latitude" => -15.9333,
                "longitude" => -50.14
            ],
            [
                "name" => "Goiatuba, Goiás",
                "latitude" => -18.0105,
                "longitude" => -49.3658
            ],
            [
                "name" => "Gouvelândia, Goiás",
                "latitude" => -18.6238,
                "longitude" => -50.0805
            ],
            [
                "name" => "Guapó, Goiás",
                "latitude" => -16.8297,
                "longitude" => -49.5345
            ],
            [
                "name" => "Guaraíta, Goiás",
                "latitude" => -15.6121,
                "longitude" => -50.0265
            ],
            [
                "name" => "Guarani de Goiás, Goiás",
                "latitude" => -13.9421,
                "longitude" => -46.4868
            ],
            [
                "name" => "Guarinos, Goiás",
                "latitude" => -14.7292,
                "longitude" => -49.7006
            ],
            [
                "name" => "Heitoraí, Goiás",
                "latitude" => -15.719,
                "longitude" => -49.8268
            ],
            [
                "name" => "Hidrolândia, Goiás",
                "latitude" => -16.9626,
                "longitude" => -49.2265
            ],
            [
                "name" => "Hidrolina, Goiás",
                "latitude" => -14.7261,
                "longitude" => -49.4634
            ],
            [
                "name" => "Iaciara, Goiás",
                "latitude" => -14.1011,
                "longitude" => -46.6335
            ],
            [
                "name" => "Inaciolândia, Goiás",
                "latitude" => -18.4869,
                "longitude" => -49.9888
            ],
            [
                "name" => "Indiara, Goiás",
                "latitude" => -17.1387,
                "longitude" => -49.9862
            ],
            [
                "name" => "Inhumas, Goiás",
                "latitude" => -16.3611,
                "longitude" => -49.5001
            ],
            [
                "name" => "Ipameri, Goiás",
                "latitude" => -17.7215,
                "longitude" => -48.1581
            ],
            [
                "name" => "Ipiranga de Goiás, Goiás",
                "latitude" => -15.1689,
                "longitude" => -49.6695
            ],
            [
                "name" => "Iporá, Goiás",
                "latitude" => -16.4398,
                "longitude" => -51.118
            ],
            [
                "name" => "Israelândia, Goiás",
                "latitude" => -16.3144,
                "longitude" => -50.9087
            ],
            [
                "name" => "Itaberaí, Goiás",
                "latitude" => -16.0206,
                "longitude" => -49.806
            ],
            [
                "name" => "Itaguari, Goiás",
                "latitude" => -15.918,
                "longitude" => -49.6071
            ],
            [
                "name" => "Itaguaru, Goiás",
                "latitude" => -15.7565,
                "longitude" => -49.6354
            ],
            [
                "name" => "Itajá, Goiás",
                "latitude" => -19.0673,
                "longitude" => -51.5495
            ],
            [
                "name" => "Itapaci, Goiás",
                "latitude" => -14.9522,
                "longitude" => -49.5511
            ],
            [
                "name" => "Itapirapuã, Goiás",
                "latitude" => -15.8205,
                "longitude" => -50.6094
            ],
            [
                "name" => "Itapuranga, Goiás",
                "latitude" => -15.5606,
                "longitude" => -49.949
            ],
            [
                "name" => "Itarumã, Goiás",
                "latitude" => -18.7646,
                "longitude" => -51.3485
            ],
            [
                "name" => "Itauçu, Goiás",
                "latitude" => -16.2029,
                "longitude" => -49.6109
            ],
            [
                "name" => "Itumbiara, Goiás",
                "latitude" => -18.4093,
                "longitude" => -49.2158
            ],
            [
                "name" => "Ivolândia, Goiás",
                "latitude" => -16.5995,
                "longitude" => -50.7921
            ],
            [
                "name" => "Jandaia, Goiás",
                "latitude" => -17.0481,
                "longitude" => -50.1453
            ],
            [
                "name" => "Jaraguá, Goiás",
                "latitude" => -15.7529,
                "longitude" => -49.3344
            ],
            [
                "name" => "Jataí, Goiás",
                "latitude" => -17.8784,
                "longitude" => -51.7204
            ],
            [
                "name" => "Jaupaci, Goiás",
                "latitude" => -16.1773,
                "longitude" => -50.9508
            ],
            [
                "name" => "Jesúpolis, Goiás",
                "latitude" => -15.9484,
                "longitude" => -49.3739
            ],
            [
                "name" => "Joviânia, Goiás",
                "latitude" => -17.802,
                "longitude" => -49.6197
            ],
            [
                "name" => "Jussara, Goiás",
                "latitude" => -15.8659,
                "longitude" => -50.8668
            ],
            [
                "name" => "Lagoa Santa, Goiás",
                "latitude" => -19.1832,
                "longitude" => -51.3998
            ],
            [
                "name" => "Leopoldo de Bulhões, Goiás",
                "latitude" => -16.619,
                "longitude" => -48.7428
            ],
            [
                "name" => "Luziânia, Goiás",
                "latitude" => -16.253,
                "longitude" => -47.95
            ],
            [
                "name" => "Mairipotaba, Goiás",
                "latitude" => -17.2975,
                "longitude" => -49.4898
            ],
            [
                "name" => "Mambaí, Goiás",
                "latitude" => -14.4823,
                "longitude" => -46.1165
            ],
            [
                "name" => "Mara Rosa, Goiás",
                "latitude" => -14.0148,
                "longitude" => -49.1777
            ],
            [
                "name" => "Marzagão, Goiás",
                "latitude" => -17.983,
                "longitude" => -48.6415
            ],
            [
                "name" => "Matrinchã, Goiás",
                "latitude" => -15.4342,
                "longitude" => -50.7456
            ],
            [
                "name" => "Maurilândia, Goiás",
                "latitude" => -17.9719,
                "longitude" => -50.3388
            ],
            [
                "name" => "Mimoso de Goiás, Goiás",
                "latitude" => -15.0515,
                "longitude" => -48.1611
            ],
            [
                "name" => "Minaçu, Goiás",
                "latitude" => -13.5304,
                "longitude" => -48.2206
            ],
            [
                "name" => "Mineiros, Goiás",
                "latitude" => -17.5654,
                "longitude" => -52.5537
            ],
            [
                "name" => "Moiporá, Goiás",
                "latitude" => -16.5434,
                "longitude" => -50.739
            ],
            [
                "name" => "Monte Alegre de Goiás, Goiás",
                "latitude" => -13.2552,
                "longitude" => -46.8928
            ],
            [
                "name" => "Montes Claros de Goiás, Goiás",
                "latitude" => -16.0059,
                "longitude" => -51.3979
            ],
            [
                "name" => "Montividiu, Goiás",
                "latitude" => -17.4439,
                "longitude" => -51.1728
            ],
            [
                "name" => "Montividiu do Norte, Goiás",
                "latitude" => -13.3485,
                "longitude" => -48.6853
            ],
            [
                "name" => "Morrinhos, Goiás",
                "latitude" => -17.7334,
                "longitude" => -49.1059
            ],
            [
                "name" => "Morro Agudo de Goiás, Goiás",
                "latitude" => -15.3184,
                "longitude" => -50.0553
            ],
            [
                "name" => "Mossâmedes, Goiás",
                "latitude" => -16.124,
                "longitude" => -50.2136
            ],
            [
                "name" => "Mozarlândia, Goiás",
                "latitude" => -14.7457,
                "longitude" => -50.5713
            ],
            [
                "name" => "Mundo Novo, Goiás",
                "latitude" => -13.7729,
                "longitude" => -50.2814
            ],
            [
                "name" => "Mutunópolis, Goiás",
                "latitude" => -13.7303,
                "longitude" => -49.2745
            ],
            [
                "name" => "Nazário, Goiás",
                "latitude" => -16.5808,
                "longitude" => -49.8817
            ],
            [
                "name" => "Nerópolis, Goiás",
                "latitude" => -16.4047,
                "longitude" => -49.2227
            ],
            [
                "name" => "Niquelândia, Goiás",
                "latitude" => -14.4662,
                "longitude" => -48.4599
            ],
            [
                "name" => "Nova América, Goiás",
                "latitude" => -15.0206,
                "longitude" => -49.8953
            ],
            [
                "name" => "Nova Aurora, Goiás",
                "latitude" => -18.0597,
                "longitude" => -48.2552
            ],
            [
                "name" => "Nova Crixás, Goiás",
                "latitude" => -14.0957,
                "longitude" => -50.33
            ],
            [
                "name" => "Nova Glória, Goiás",
                "latitude" => -15.145,
                "longitude" => -49.5737
            ],
            [
                "name" => "Nova Iguaçu de Goiás, Goiás",
                "latitude" => -14.2868,
                "longitude" => -49.3872
            ],
            [
                "name" => "Nova Roma, Goiás",
                "latitude" => -13.7388,
                "longitude" => -46.8734
            ],
            [
                "name" => "Nova Veneza, Goiás",
                "latitude" => -16.3695,
                "longitude" => -49.3168
            ],
            [
                "name" => "Novo Brasil, Goiás",
                "latitude" => -16.0313,
                "longitude" => -50.7113
            ],
            [
                "name" => "Novo Gama, Goiás",
                "latitude" => -16.0592,
                "longitude" => -48.0417
            ],
            [
                "name" => "Novo Planalto, Goiás",
                "latitude" => -13.2424,
                "longitude" => -49.506
            ],
            [
                "name" => "Orizona, Goiás",
                "latitude" => -17.0334,
                "longitude" => -48.2964
            ],
            [
                "name" => "Ouro Verde de Goiás, Goiás",
                "latitude" => -16.2181,
                "longitude" => -49.1942
            ],
            [
                "name" => "Ouvidor, Goiás",
                "latitude" => -18.2277,
                "longitude" => -47.8355
            ],
            [
                "name" => "Padre Bernardo, Goiás",
                "latitude" => -15.1605,
                "longitude" => -48.2833
            ],
            [
                "name" => "Palestina de Goiás, Goiás",
                "latitude" => -16.7392,
                "longitude" => -51.5309
            ],
            [
                "name" => "Palmeiras de Goiás, Goiás",
                "latitude" => -16.8044,
                "longitude" => -49.924
            ],
            [
                "name" => "Palmelo, Goiás",
                "latitude" => -17.3258,
                "longitude" => -48.426
            ],
            [
                "name" => "Palminópolis, Goiás",
                "latitude" => -16.7924,
                "longitude" => -50.1652
            ],
            [
                "name" => "Panamá, Goiás",
                "latitude" => -18.1783,
                "longitude" => -49.355
            ],
            [
                "name" => "Paranaiguara, Goiás",
                "latitude" => -18.9141,
                "longitude" => -50.6539
            ],
            [
                "name" => "Paraúna, Goiás",
                "latitude" => -16.9463,
                "longitude" => -50.4484
            ],
            [
                "name" => "Perolândia, Goiás",
                "latitude" => -17.5258,
                "longitude" => -52.065
            ],
            [
                "name" => "Petrolina de Goiás, Goiás",
                "latitude" => -16.0968,
                "longitude" => -49.3364
            ],
            [
                "name" => "Pilar de Goiás, Goiás",
                "latitude" => -14.7608,
                "longitude" => -49.5784
            ],
            [
                "name" => "Piracanjuba, Goiás",
                "latitude" => -17.302,
                "longitude" => -49.017
            ],
            [
                "name" => "Piranhas, Goiás",
                "latitude" => -16.4258,
                "longitude" => -51.8235
            ],
            [
                "name" => "Pirenópolis, Goiás",
                "latitude" => -15.8507,
                "longitude" => -48.9584
            ],
            [
                "name" => "Pires do Rio, Goiás",
                "latitude" => -17.3019,
                "longitude" => -48.2768
            ],
            [
                "name" => "Planaltina, Goiás",
                "latitude" => -15.452,
                "longitude" => -47.6089
            ],
            [
                "name" => "Pontalina, Goiás",
                "latitude" => -17.5225,
                "longitude" => -49.4489
            ],
            [
                "name" => "Porangatu, Goiás",
                "latitude" => -13.4391,
                "longitude" => -49.1503
            ],
            [
                "name" => "Porteirão, Goiás",
                "latitude" => -17.8143,
                "longitude" => -50.1653
            ],
            [
                "name" => "Portelândia, Goiás",
                "latitude" => -17.3554,
                "longitude" => -52.6799
            ],
            [
                "name" => "Posse, Goiás",
                "latitude" => -14.0859,
                "longitude" => -46.3704
            ],
            [
                "name" => "Professor Jamil, Goiás",
                "latitude" => -17.2497,
                "longitude" => -49.244
            ],
            [
                "name" => "Quirinópolis, Goiás",
                "latitude" => -18.4472,
                "longitude" => -50.4547
            ],
            [
                "name" => "Rialma, Goiás",
                "latitude" => -15.3145,
                "longitude" => -49.5814
            ],
            [
                "name" => "Rianápolis, Goiás",
                "latitude" => -15.4456,
                "longitude" => -49.5114
            ],
            [
                "name" => "Rio Quente, Goiás",
                "latitude" => -17.774,
                "longitude" => -48.7725
            ],
            [
                "name" => "Rio Verde, Goiás",
                "latitude" => -17.7923,
                "longitude" => -50.9192
            ],
            [
                "name" => "Rubiataba, Goiás",
                "latitude" => -15.1617,
                "longitude" => -49.8048
            ],
            [
                "name" => "Sanclerlândia, Goiás",
                "latitude" => -16.197,
                "longitude" => -50.3124
            ],
            [
                "name" => "Santa Bárbara de Goiás, Goiás",
                "latitude" => -16.5714,
                "longitude" => -49.6954
            ],
            [
                "name" => "Santa Cruz de Goiás, Goiás",
                "latitude" => -17.3155,
                "longitude" => -48.4809
            ],
            [
                "name" => "Santa Fé de Goiás, Goiás",
                "latitude" => -15.7664,
                "longitude" => -51.1037
            ],
            [
                "name" => "Santa Helena de Goiás, Goiás",
                "latitude" => -17.8115,
                "longitude" => -50.5977
            ],
            [
                "name" => "Santa Isabel, Goiás",
                "latitude" => -15.2958,
                "longitude" => -49.4259
            ],
            [
                "name" => "Santa Rita do Araguaia, Goiás",
                "latitude" => -17.3269,
                "longitude" => -53.2012
            ],
            [
                "name" => "Santa Rita do Novo Destino, Goiás",
                "latitude" => -15.1351,
                "longitude" => -49.1203
            ],
            [
                "name" => "Santa Rosa de Goiás, Goiás",
                "latitude" => -16.084,
                "longitude" => -49.4953
            ],
            [
                "name" => "Santa Tereza de Goiás, Goiás",
                "latitude" => -13.7138,
                "longitude" => -49.0144
            ],
            [
                "name" => "Santa Terezinha de Goiás, Goiás",
                "latitude" => -14.4326,
                "longitude" => -49.7091
            ],
            [
                "name" => "Santo Antônio da Barra, Goiás",
                "latitude" => -17.5585,
                "longitude" => -50.6345
            ],
            [
                "name" => "Santo Antônio de Goiás, Goiás",
                "latitude" => -16.4815,
                "longitude" => -49.3096
            ],
            [
                "name" => "Santo Antônio do Descoberto, Goiás",
                "latitude" => -15.9412,
                "longitude" => -48.2578
            ],
            [
                "name" => "São Domingos, Goiás",
                "latitude" => -13.621,
                "longitude" => -46.7415
            ],
            [
                "name" => "São Francisco de Goiás, Goiás",
                "latitude" => -15.9256,
                "longitude" => -49.2605
            ],
            [
                "name" => "São João d'Aliança, Goiás",
                "latitude" => -14.7048,
                "longitude" => -47.5228
            ],
            [
                "name" => "São João da Paraúna, Goiás",
                "latitude" => -16.8126,
                "longitude" => -50.4092
            ],
            [
                "name" => "São Luís de Montes Belos, Goiás",
                "latitude" => -16.5211,
                "longitude" => -50.3726
            ],
            [
                "name" => "São Luiz do Norte, Goiás",
                "latitude" => -14.8608,
                "longitude" => -49.3285
            ],
            [
                "name" => "São Miguel do Araguaia, Goiás",
                "latitude" => -13.2731,
                "longitude" => -50.1634
            ],
            [
                "name" => "São Miguel do Passa Quatro, Goiás",
                "latitude" => -17.0582,
                "longitude" => -48.662
            ],
            [
                "name" => "São Patrício, Goiás",
                "latitude" => -15.35,
                "longitude" => -49.818
            ],
            [
                "name" => "São Simão, Goiás",
                "latitude" => -18.996,
                "longitude" => -50.547
            ],
            [
                "name" => "Senador Canedo, Goiás",
                "latitude" => -16.7084,
                "longitude" => -49.0914
            ],
            [
                "name" => "Serranópolis, Goiás",
                "latitude" => -18.3067,
                "longitude" => -51.9586
            ],
            [
                "name" => "Silvânia, Goiás",
                "latitude" => -16.66,
                "longitude" => -48.6083
            ],
            [
                "name" => "Simolândia, Goiás",
                "latitude" => -14.4644,
                "longitude" => -46.4847
            ],
            [
                "name" => "Sítio d'Abadia, Goiás",
                "latitude" => -14.7992,
                "longitude" => -46.2506
            ],
            [
                "name" => "Taquaral de Goiás, Goiás",
                "latitude" => -16.0521,
                "longitude" => -49.6039
            ],
            [
                "name" => "Teresina de Goiás, Goiás",
                "latitude" => -13.7801,
                "longitude" => -47.2659
            ],
            [
                "name" => "Terezópolis de Goiás, Goiás",
                "latitude" => -16.3945,
                "longitude" => -49.0797
            ],
            [
                "name" => "Três Ranchos, Goiás",
                "latitude" => -18.3539,
                "longitude" => -47.776
            ],
            [
                "name" => "Trindade, Goiás",
                "latitude" => -16.6517,
                "longitude" => -49.4927
            ],
            [
                "name" => "Trombas, Goiás",
                "latitude" => -13.5079,
                "longitude" => -48.7417
            ],
            [
                "name" => "Turvânia, Goiás",
                "latitude" => -16.6125,
                "longitude" => -50.1369
            ],
            [
                "name" => "Turvelândia, Goiás",
                "latitude" => -17.8502,
                "longitude" => -50.3024
            ],
            [
                "name" => "Uirapuru, Goiás",
                "latitude" => -14.2835,
                "longitude" => -49.9201
            ],
            [
                "name" => "Uruaçu, Goiás",
                "latitude" => -14.5238,
                "longitude" => -49.1396
            ],
            [
                "name" => "Uruana, Goiás",
                "latitude" => -15.4993,
                "longitude" => -49.6861
            ],
            [
                "name" => "Urutaí, Goiás",
                "latitude" => -17.4651,
                "longitude" => -48.2015
            ],
            [
                "name" => "Valparaíso de Goiás, Goiás",
                "latitude" => -16.0651,
                "longitude" => -47.9757
            ],
            [
                "name" => "Varjão, Goiás",
                "latitude" => -17.0471,
                "longitude" => -49.6312
            ],
            [
                "name" => "Vianópolis, Goiás",
                "latitude" => -16.7405,
                "longitude" => -48.5159
            ],
            [
                "name" => "Vicentinópolis, Goiás",
                "latitude" => -17.7322,
                "longitude" => -49.8047
            ],
            [
                "name" => "Vila Boa, Goiás",
                "latitude" => -15.0387,
                "longitude" => -47.052
            ],
            [
                "name" => "Vila Propício, Goiás",
                "latitude" => -15.4542,
                "longitude" => -48.8819
            ],
            [
                "name" => "Brasília, Distrito Federal",
                "latitude" => -15.7795,
                "longitude" => -47.9297
            ]
        ];
                
    }
}
