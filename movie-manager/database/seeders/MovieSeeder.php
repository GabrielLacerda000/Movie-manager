<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'title' => 'Orgulho e Preconceito',
                'original_title' => 'Pride and Prejudice',
                'description' => 'Uma adaptação do romance de Jane Austen, onde Elizabeth Bennet lida com questões de moralidade, educação, e casamento.',
                'genre' => 'Drama/Romance',
                'year' => 2005,
                'watched' => false,
            ],
            [
                'title' => 'About Time',
                'original_title' => 'About Time',
                'description' => 'Um jovem descobre que pode viajar no tempo e usa essa habilidade para conquistar o amor da sua vida.',
                'genre' => 'Drama/Comédia Romântica',
                'year' => 2013,
                'watched' => false,
            ],
            [
                'title' => 'O Primeiro Amor',
                'original_title' => 'Flipped',
                'description' => 'Dois adolescentes descobrem o primeiro amor e as dificuldades que o acompanham.',
                'genre' => 'Drama/Romance',
                'year' => 2010,
                'watched' => false,
            ],
            [
                'title' => 'Brilho Eterno de uma Mente sem Lembranças',
                'original_title' => 'Eternal Sunshine of the Spotless Mind',
                'description' => 'Um casal passa por um procedimento para apagar as memórias do seu relacionamento.',
                'genre' => 'Drama/Romance/Ficção Científica',
                'year' => 2004,
                'watched' => false,
            ],
            [
                'title' => '10 Coisas que Odeio em Você',
                'original_title' => '10 Things I Hate About You',
                'description' => 'Uma adaptação moderna da peça "A Megera Domada" de Shakespeare, centrada em um romance no ensino médio.',
                'genre' => 'Comédia Romântica',
                'year' => 1999,
                'watched' => false,
            ],
            [
                'title' => 'Um Amor para Recordar',
                'original_title' => 'A Walk to Remember',
                'description' => 'Dois adolescentes com caminhos diferentes na vida se apaixonam, mas enfrentam desafios inesperados.',
                'genre' => 'Drama/Romance',
                'year' => 2002,
                'watched' => false,
            ],
            [
                'title' => 'Clube dos Cinco',
                'original_title' => 'The Breakfast Club',
                'description' => 'Cinco estudantes de diferentes grupos sociais são forçados a passar um sábado juntos em detenção.',
                'genre' => 'Drama/Comédia',
                'year' => 1985,
                'watched' => false,
            ],
            [
                'title' => 'Before Sunrise',
                'original_title' => 'Before Sunrise',
                'description' => 'Dois jovens se encontram em um trem e passam a noite juntos em Viena, desenvolvendo uma conexão profunda.',
                'genre' => 'Drama/Romance',
                'year' => 1995,
                'watched' => false,
            ],
            [
                'title' => 'Simplesmente Acontece',
                'original_title' => 'Love, Rosie',
                'description' => 'Amigos de infância lutam contra os desafios de crescer e seus sentimentos um pelo outro.',
                'genre' => 'Drama/Comédia Romântica',
                'year' => 2014,
                'watched' => false,
            ],
            [
                'title' => 'Meu Primeiro Amor',
                'original_title' => 'My Girl',
                'description' => 'Uma jovem enfrenta os desafios de crescer e perde seu melhor amigo no processo.',
                'genre' => 'Drama/Família',
                'year' => 1991,
                'watched' => false,
            ],
            [
                'title' => 'Um Dia',
                'original_title' => 'One Day',
                'description' => 'A história de duas pessoas que se encontram no mesmo dia todos os anos, e suas vidas se entrelaçam ao longo do tempo.',
                'genre' => 'Drama/Romance',
                'year' => 2011,
                'watched' => false,
            ],
            [
                'title' => 'Como Eu Era Antes de Você',
                'original_title' => 'Me Before You',
                'description' => 'Uma jovem cuida de um homem rico que ficou tetraplégico após um acidente, e os dois desenvolvem um relacionamento profundo.',
                'genre' => 'Drama/Romance',
                'year' => 2016,
                'watched' => false,
            ],
            [
                'title' => 'As Vantagens de Ser Invisível',
                'original_title' => 'The Perks of Being a Wallflower',
                'description' => 'Um adolescente introvertido encontra amigos e enfrenta traumas do passado ao longo de um ano escolar.',
                'genre' => 'Drama/Romance',
                'year' => 2012,
                'watched' => false,
            ],
            [
                'title' => 'Uma Linda Mulher',
                'original_title' => 'Pretty Woman',
                'description' => 'Um empresário rico contrata uma prostituta para acompanhá-lo a eventos sociais, e os dois se apaixonam.',
                'genre' => 'Comédia Romântica',
                'year' => 1990,
                'watched' => false,
            ],
            [
                'title' => 'Diário de uma Paixão',
                'original_title' => 'The Notebook',
                'description' => 'Um casal de jovens de diferentes classes sociais se apaixona na década de 1940, enfrentando vários obstáculos ao longo da vida.',
                'genre' => 'Drama/Romance',
                'year' => 2004,
                'watched' => false,
            ],
            [
                'title' => 'A Cinco Passos de Você',
                'original_title' => 'Five Feet Apart',
                'description' => 'Dois adolescentes com fibrose cística desenvolvem um relacionamento, apesar da necessidade de manter distância por questões de saúde.',
                'genre' => 'Drama/Romance',
                'year' => 2019,
                'watched' => false,
            ],
            [
                'title' => 'Querido John',
                'original_title' => 'Dear John',
                'description' => 'Um soldado e uma jovem mantêm um relacionamento à distância por meio de cartas durante a guerra.',
                'genre' => 'Drama/Romance',
                'year' => 2010,
                'watched' => false,
            ],
            [
                'title' => 'Se Eu Ficar',
                'original_title' => 'If I Stay',
                'description' => 'Uma jovem prodígio musical tem uma experiência extracorpórea após um acidente de carro que coloca sua vida em risco.',
                'genre' => 'Drama/Fantasia/Romance',
                'year' => 2014,
                'watched' => false,
            ],
            [
                'title' => 'Amor e Outras Drogas',
                'original_title' => 'Love & Other Drugs',
                'description' => 'Um representante de vendas de medicamentos e uma mulher com doença de Parkinson desenvolvem um relacionamento complexo.',
                'genre' => 'Comédia Romântica/Drama',
                'year' => 2010,
                'watched' => false,
            ],
            [
                'title' => 'A Incrível História de Adaline',
                'original_title' => 'The Age of Adaline',
                'description' => 'Uma mulher que para de envelhecer após um acidente lida com os desafios de uma vida eterna.',
                'genre' => 'Drama/Fantasia/Romance',
                'year' => 2015,
                'watched' => false,
            ],
            [
                'title' => 'Para Sempre',
                'original_title' => 'The Vow',
                'description' => 'Um marido tenta reconquistar o amor de sua esposa após ela perder a memória em um acidente de carro.',
                'genre' => 'Drama/Romance',
                'year' => 2012,
                'watched' => false,
            ],
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}
