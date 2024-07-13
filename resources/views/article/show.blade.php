<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Titolo: {{$article->title}}
            </h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
             <div class="clo-12 col-md-8">
                    <img src="{{Storage::url($article->image)}}" alt="" class="img-fluid my-3">
                    <div class="text-center">
                        <h2>{{ $article->subtitle }}</h2>
                        <div class="my-3 text-muted fst-italic">
                            <p>Redatto il {{$article->created_at->format('d/m/Y')}} da 
                                <a href="{{route('article.byUser', ['user'=>$article->user->id])}}" class="text-capitalize fw-bold text-muted"> {{$article->user->name}}</a>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <p>{{$article->body}}</p>
                    <p>{{$article->body}}</p>
                    @if (Auth::user() && Auth::user()->is_revisor)
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-evenly">
                              <form action="{{route('revisor.acceptArticle', $article)}}" method="POST">
                                 @csrf
                                     <button type="submit" class="btn btn-success text-white">Accetta articolo</button>
                             </form>
                             <form action="{{route('revisor.rejectArticle', $article)}}" method="POST">
                                @csrf
                                     <button type="submit" class="btn btn-danger text-white">Rifiuta articolo</button>
                             </form>
                            </div>
                        </div>
                    </div>
                    @endif 
            </div>
        </div>
    </div>        
</x-layout>