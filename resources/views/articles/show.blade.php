@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="panel-body">
                        <div class="list-group">
                            @foreach($articles as $article)
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        {{ $article->title }}
                                    </h4>

                                    <p class="list-group-item-text">
                                        {{ $article->body }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
