<div class="card">
    <img src="{{ Storage::url($image) }}" class="card-img-top">
        
<div class="card-body">
    <h5 class="card-title">{{ $title }}</h5>
    <p class="card-subtitle">{{ $subtitle }}</p>
    @if ($category)
    <a href="{{$urlCategory}}" class="small text-muted d-flex justify-content-center aling-items-center ">{{$category}}</a>
    @else
    <p class="samll-text-muted fst-italic text-capitalize">Non categorizzato</p>
    @endif
    @if ($tags)
    <p class="small fst-italic text-capitalize">
        @foreach ($tags as $tag)
            #{{$tag->name}}
        @endforeach
    </p>
    @endif
    <span class="text-muted small fst-italic">Tempo di lettura {{$readDuration}} min</span>
</div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        <p>Redatto il {{$data}} creato da <a href="{{$urlUser}}">{{$user}}</a></p>
        
            <a href="{{$url}}" class="btn btn-outline-secondary">Leggi</a>
    </div>
</div>