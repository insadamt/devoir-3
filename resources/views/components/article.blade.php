@props(['image', 'title', 'texte', 'url'])
<div class="card h-100 shadow-sm">
    <img src="{{ $image }}" class="card-img-top" alt="{{ $title }}" style="height:180px;object-fit:cover;">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $texte }}</p>
        <a href="{{ $url }}" class="btn btn-outline-success btn-sm">Lire la suite</a>
    </div>
</div>
