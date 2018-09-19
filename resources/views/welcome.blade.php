@extends('style')
@section('content')
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <a href="https://bootstrapcreative.com/">
                     <picture>
                        
                         <img srcset="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-blue-solid-color-background.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>
                    <div class="carousel-caption">
                        <div>
                            <h2>Solito</h2>
                            <p>pequena descrição</p>
                            <span class="btn btn-sm btn-outline-secondary">Saiba Mais</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">
                     <picture>
                      
                         <img srcset="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-blue-solid-color-background.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2 class="font-chac titulo">Chacarereando</h2>
                            <p>descrição</p>
                            <span class="btn btn-lg btn-outline-light">Saiba Mais</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">
                     <picture>
                      
                         <img srcset="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-blue-solid-color-background.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Folkloreando</h2>
                            <p>We monitor and optimize your site's long-term performance</p>
                            <span class="btn btn-sm btn-secondary">Learn How</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">
                     <picture>
                      <img srcset="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-blue-solid-color-background.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>teste</h2>
                            <p>We monitor and optimize your site's long-term performance</p>
                            <span class="btn btn-sm btn-secondary">Learn How</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
        </div>
        <!-- /.carousel-inner -->
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->
    @endsection