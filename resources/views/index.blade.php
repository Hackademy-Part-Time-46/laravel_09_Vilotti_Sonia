<x-layout>
    @foreach($articles as $article)
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$article->name}}</h5>
                    <p class="card-text">{{$article->text}}</p>
                    <a href="#" class="btn btn-primary">view</a>
                </div>
            </div>
            @endforeach
</x-layout>