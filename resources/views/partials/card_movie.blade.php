<div class="card mb-4">
    <img src="{{ asset($movie['image']) }}" class="card-img-top" alt="{{ $movie['title'] }}">
    <div class="card-body">
        <p class="card-text">
            Titolo: {{ $movie['title'] }}
        </p>
        <p class="card-text">
            Titolo originale: {{ $movie['original_title'] }}
        </p>
        <p class="card-text">
            Nazionalità: {{ $movie['nationality'] }}
        </p>
        <p class="card-text">
            Data d'uscita: {{ $movie['date'] }}
        </p>
        <p class="card-text">
            Rating: {{ $movie['vote'] }}
        </p>
    </div>
</div>
