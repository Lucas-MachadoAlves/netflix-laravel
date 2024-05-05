<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

/**
 * @psalm-suppress UndefinedClass
 */
class SearchNetflix extends Component
{
    public ?string $searchNetflix = '';

    /**
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        $searchNetflixResults = [];

        // @phpstan-ignore-next-line
        if (strlen($this->searchNetflix >= 3)) {
            $searchNetflixResults = Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie?query='.$this->searchNetflix)
                ->json()['results'];
        }

        return view('livewire.search-netflix', [
            // @phpstan-ignore-next-line
            'searchNetflixResults' => collect($searchNetflixResults)->take(7),
        ]);
    }
}
