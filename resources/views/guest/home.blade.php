@extends('layouts.homeapp')
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
@endsection

@section('content')
    <div id="root">
        <section id="last-news">
            <div class="container-fluid">

                <h2>Novità</h2>
                <div class="wrapper">
                    <div v-for="item in 10 " class="post">
                        <h3>
                            @{{ hello + item }}
                        </h3>
                        <figure>
                            <img src="" alt="immagine mancante">
                        </figure>
                        <div>
                            <p>
                                lorem ipsum doloret sin amet
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="search">
            <div class="container-fluid">

                <h2>Cerca quello che ti interessa</h2>
                <div class="wrapper">
                    <div v-for="item in 10 " class="post">
                        <h3>
                            @{{ hello + item }}
                        </h3>
                        <figure>
                            <img src="" alt="immagine mancante">
                        </figure>
                        <div>
                            <p>
                                lorem ipsum doloret sin amet
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
