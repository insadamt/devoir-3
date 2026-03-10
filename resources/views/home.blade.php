@extends('layouts.app')
@php $showHero = true; @endphp

@section('content')
<div class="text-center mb-4">
    <h2>Présentation de l'école la plume</h2>
    <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipiscing elit. Laboriosam nihil dicta vero atque ipsum, ut nam pariatur voluptatum hic opto error dolores aliquid, consectetur eius quidem, praesentium voluptate delectus earum!</p>
</div>
<div class="row g-4">
    <div class="col-md-4">
        <x-article
            image="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&q=80"
            title="Première activité"
            texte="Lorem ipsum dolor sit, amet consectetur adipiscing elit. Laboriosam nihil dicta vero atque ipsum, ut nam pariatur voluptatum hic opto error dolores aliquid, consectetur eius quidem, praesentium voluptate delectus earum!"
            url="#"
        />
    </div>
    <div class="col-md-4">
        <x-article
            image="https://images.unsplash.com/photo-1555009393-f20bdb245c4d?w=400&q=80"
            title="Deuxième activité"
            texte="Lorem ipsum dolor sit, amet consectetur adipiscing elit. Laboriosam nihil dicta vero atque ipsum, ut nam pariatur voluptatum hic opto error dolores aliquid, consectetur eius quidem, praesentium voluptate delectus earum!"
            url="#"
        />
    </div>
    <div class="col-md-4">
        <x-article
            image="https://images.unsplash.com/photo-1516321497487-e288fb19713f?w=400&q=80"
            title="Troisième activité"
            texte="Lorem ipsum dolor sit, amet consectetur adipiscing elit. Laboriosam nihil dicta vero atque ipsum, ut nam pariatur voluptatum hic opto error dolores aliquid, consectetur eius quidem, praesentium voluptate delectus earum!"
            url="#"
        />
    </div>
</div>
@endsection
