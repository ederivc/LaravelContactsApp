@extends('layout.app')

@section('content')
<div class="home__wrapper">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img
          src="https://images.pexels.com/photos/624015/pexels-photo-624015.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
          class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="https://images.pexels.com/photos/15286/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
          class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img
          src="https://images.pexels.com/photos/4101555/pexels-photo-4101555.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
          class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <h1 class="text-center my-5">IMÁGENES</h1>
  <section class="cards">
    <div class="container-fluid cards__container">
      <div class="row p-0 p-lg-3">
        @foreach ($address as $address)
        <div class="
        col col-sm-6 col-lg-3
        mb-3 mb-lg-0
        d-flex
        justify-content-center
      ">
          <div class="card" style="width: 20rem">
            <img src="https://naranti.mx/wp-content/uploads/2021/06/Telcel-corta.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Direccion - {{ $address->id }}</h5>
              <div class="orangeBtn">
                <button data-bs-toggle="modal" data-bs-target="#modalCard1">
                  Conocer más
                </button>
              </div>
            </div>
            <div class="modal fade" id="modalCard1" tabindex="-1" aria-labelledby="modalCard1Label" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header d-flex justify-content-between">
                    <h5 class="modal-title" id="modalCard1Label">
                      Espectacular #UOP99A | <strong>Naranti</strong>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    {{ $address->description }}
                  </div>
                  <div class="container">
                    <div class="
                    row
                    p-2
                    d-flex
                    flex-column flex-lg-row
                    align-items-center
                  ">
                      <div class="col pb-2 pt-0 pr-lg-1 pb-lg-0">
                        <img src="https://naranti.mx/wp-content/uploads/2021/06/Telcel-corta.jpg" class="card-img-top"
                          alt="..." />
                      </div>
                      <div class="col d-flex flex-column py-2 pl-lg-1">
                        <strong class="especificacionesTitle">Especificaciones</strong>
                        <div class="especificacionesDetail py-1">
                          <strong>Dirección: </strong><span>Carretera Internacional al Sur, Rancho los
                            Gavilanes, C.P. 00000</span>
                        </div>
                        <div class="especificacionesDetail py-1">
                          <strong>Medidas: </strong><span>12.20 x 6.00 mts</span>
                        </div>
                        <div class="especificacionesDetail py-1">
                          <strong>Cardinalidad: </strong><span>Norte</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <div class="orangeBtn">
                      <button>
                        <a href="espectacular.html">Conocer más</a>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</div>
@endsection