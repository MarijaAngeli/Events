@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="panel-body">
                        <div class="list-group">
                            @foreach($websites as $website)
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <p>
                                            The below articles came from this website:
                                            <a href=" {{ $website->url }}">
                                                {{ $website->url }}
                                            </a>
                                        </p>
                                        <p>
                                            @foreach($website->articles as $article)
                                            <p>
                                                {{ $article->title }}
                                            </p>
                                        <br>
                                            @endforeach
                                        </p>
                                    </h4>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
