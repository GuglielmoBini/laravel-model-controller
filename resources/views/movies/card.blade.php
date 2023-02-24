<div class="card m-3" style="width: 18rem;">
    <div class="card-body">
      <h4 class="card-title">{{ $movie->title }}</h4>
      <h5 class="card-text">{{ $movie->original_title }}</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $movie->nationality }}</li>
      <li class="list-group-item">{{ $movie->date }}</li>
      <li class="list-group-item">{{ $movie->vote }}</li>
    </ul>
  </div>