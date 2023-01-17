<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'vettore' => 'italo',
                'treno' => '2507',
                'partenza' => 'Milano Centrale',
                'destinazione' => 'Roma Termini',
                'orario' => '14:12',
                'binario' => 14,
                'informazioni' => 'in orario',
                'ritardo' => '0',
            ],
            [
                'vettore' => 'freccia',
                'treno' => '2678',
                'partenza' => 'Milano Centrale',
                'destinazione' => 'Torino',
                'orario' => '16:14',
                'binario' => 18,
                'informazioni' => 'in orario',
                'ritardo' => '0',
            ],
            [
                'vettore' => 'italo',
                'treno' => '2802',
                'partenza' => 'Milano Centrale',
                'destinazione' => 'Napoli',
                'orario' => '15:15',
                'binario' => 4,
                'informazioni' => 'in Ritardo',
                'ritardo' => '10 min',
            ],
        ];

        foreach($trains as $elem){
            $newTrain = new Train();
            $newTrain->vettore = $elem['vettore'];
            $newTrain->treno = $elem['treno'];
            $newTrain->partenza = $elem['partenza'];
            $newTrain->destinazione = $elem['destinazione'];
            $newTrain->orario = $elem['orario'];
            $newTrain->binario = $elem['binario'];
            $newTrain->informazioni = $elem['informazioni'];
            $newTrain->ritardo = $elem['ritardo'];
            $newTrain->save();
        }
    }
}
