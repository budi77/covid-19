<?php

namespace App\Http\Livewire;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;


use Livewire\Component;

class WorldStats extends Component
{

    public $totalpositif,$totalsembuh,$totalmeninggal,$stats;

    public function updateData(){

            
            $data=Http::get('https://corona-virus-stats.herokuapp.com/api/v1/cases/general-stats')->json();
            $data=$data['data'];

            // dd($data);
            $this->stats=$data;



            $totalpositif = Http::get('https://api.kawalcorona.com/positif')->json();        
            $this->totalpositif = $totalpositif['value'];
                
    
            $totalsembuh = Http::get('https://api.kawalcorona.com/sembuh')->json();
            $this->totalsembuh = $totalsembuh['value'];
    
            $totalmeninggal = Http::get('https://api.kawalcorona.com/meninggal')->json();
            $this->totalmeninggal = $totalmeninggal['value'];


    }


    public function mount()

    {

        $this->updateData();

       
    }


    public function render()

    {
        return view('livewire.world-stats');
    }
}
