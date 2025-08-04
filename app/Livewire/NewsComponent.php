<?php

namespace App\Livewire;
use App\Models\News;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Newsletter erstellen')]

class NewsComponent extends Component
{

    public $title;
    public $content;
    public $image;
    public $currentNews;

    public function saveNews(){
        $this->validate([
            'title' => 'nullable',
            'content' => 'nullable',
            'image' => 'nullable',
        ]);

        News::create(
            [
                'title' => $this->title,
                'content' => $this->content,
            ]
        );

        session()->flash('message', 'Neuigkeit wurde erfolgreich hinzugefügt');
        $this->reset();
    }

    public function deleteNews($id){
        News::destroy($id);
        session()->flash('message', 'Neuigkeit wurde erfolgreich gelöscht');
    }

    public function render()
    {
        $this->currentNews = News::all();
        return view('livewire.news', [
            'currentNews' => $this->currentNews,
        ]);
    }
}
