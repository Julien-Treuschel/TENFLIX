@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
      <div class="row" wfd-id="3">
        <h2> MUSIQUE </h2>
        <div id="myCarousel" class="carousel slide">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
            <!-- Boucle video -->
            <div class="col-md-3" wfd-id="44">                       
                <div class="card mb-3 shadow-sm" wfd-id="45">                         
                <!-- <a href="http://tenflix/video/ID video"> -->
                    <a href="http://tenflix/video/0">
                                              <!-- src="http://i1.ytimg.com/vi/Url video/maxresdefault.jpg" -->
                        <!-- foreach ($urls as $url) {
                        echo $url;
                        } -->
                    <img width="100%" height="225" src="http://i1.ytimg.com/vi/YQWA0kkT3lY/maxresdefault.jpg" alt="miniature" />
                    </a>
                    <div class="carousel-caption">
                        <h3>Titre video !</h3>                        
                    </div>                     
                    <div class="card-body" wfd-id="46">
                       <!-- class="card-text"> Titre video </p> -->
                    <p class="card-text"> courte description !</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="47"> 
                        <!-- class="text-muted">Minutes video</small>                   -->
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>            
                </div>
                </div>
                <div class="col-md-3" wfd-id="39">
                <div class="card mb-3 shadow-sm" wfd-id="40">                         
                <iframe width="100%" height="225" src="https://www.youtube.com/embed/oFlTD4kIqNM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>         
                    <div class="card-body" wfd-id="41">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="42">
                        <div class="btn-group" wfd-id="43">
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="70">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="69">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-3" wfd-id="34">
                <div class="card mb-3 shadow-sm" wfd-id="35">
                <iframe width="100%" height="225" src="https://www.youtube.com/embed/msUdwFjIBQk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body" wfd-id="36">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="37">
                        <div class="btn-group" wfd-id="38">
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="68">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="67">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>  
                <div class="col-md-3" wfd-id="34">
                <div class="card mb-3 shadow-sm" wfd-id="35">
                <iframe width="100%" height="225" src="https://www.youtube.com/embed/kaMeEfffXL0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body" wfd-id="36">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="37">
                        <div class="btn-group" wfd-id="38">
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="68">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="67">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="item">
            <div class="col-md-3" wfd-id="44">
                <div class="card mb-3 shadow-sm" wfd-id="45">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body" wfd-id="46">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="47">
                        <div class="btn-group" wfd-id="48">
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="72">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="71">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-3" wfd-id="39">
                <div class="card mb-3 shadow-sm" wfd-id="40">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body" wfd-id="41">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="42">
                        <div class="btn-group" wfd-id="43">
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="70">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="69">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-3" wfd-id="34">
                <div class="card mb-3 shadow-sm" wfd-id="35">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body" wfd-id="36">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="37">
                        <div class="btn-group" wfd-id="38">
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="68">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="67">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>  
                <div class="col-md-3" wfd-id="34">
                <div class="card mb-3 shadow-sm" wfd-id="35">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body" wfd-id="36">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="37">
                        <div class="btn-group" wfd-id="38">
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="68">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="67">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="item">
            <div class="col-md-3" wfd-id="44">
                <div class="card mb-3 shadow-sm" wfd-id="45">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body" wfd-id="46">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="47">
                        <div class="btn-group" wfd-id="48">
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="72">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="71">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-3" wfd-id="39">
                <div class="card mb-3 shadow-sm" wfd-id="40">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body" wfd-id="41">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="42">
                        <div class="btn-group" wfd-id="43">
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="70">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="69">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-3" wfd-id="34">
                <div class="card mb-3 shadow-sm" wfd-id="35">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body" wfd-id="36">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="37">
                        <div class="btn-group" wfd-id="38">
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="68">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="67">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>  
                <div class="col-md-3" wfd-id="34">
                <div class="card mb-3 shadow-sm" wfd-id="35">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body" wfd-id="36">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center" wfd-id="37">
                        <div class="btn-group" wfd-id="38">
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="68">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" wfd-id="67">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>  
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        </div>                 
  
    </div>
</div>
@foreach($videos as $video)
<h1>{{ $video->urlVideo }}</h1>
@endforeach

@endsection
