@extends('layouts.web')
@section('title','BRYTE')

@section('details')

<section class="banner">
  <div class="container">
    <div class="banner-text">
      {{-- <h1>
        immigration <br />
        consultants <br /><span class="color-text"
          >agency <br />
          worldwide</span
        >
      </h1> --}}
      {!! $header->section_desc !!}

    </div>
  </div>
</section>

<section class="banner-card">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 banner-box">
      <div class="col">
        <div class="card h-100">
          <div class="banner-card-icon">
            <img src="{{ asset('web/img/abroad1.png') }}" class="img-fluid" alt="card" />
          </div>
          <div class="card-body">
            <h5 class="card-title">australia</h5>
            <p class="card-text">
              one of the best international eduction destination throughout
              the world canada has much to boost of thanks to its top
              colleges and world-class universities.
            </p>
            <button type="button" class="btn btn-primary">read more</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="banner-card-icon">
            <img src="{{ asset('web/img/abroad2.png') }}" class="img-fluid" alt="card" />
          </div>
          <div class="card-body">
            <h5 class="card-title">united kingdom</h5>
            <p class="card-text">
              one of the best international eduction destination throughout
              the world canada has much to boost of thanks to its top
              colleges and world-class universities.
            </p>
            <button type="button" class="btn btn-primary">read more</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="banner-card-icon">
            <img src="{{ asset('web/img/abroad3.png') }}" class="img-fluid" alt="card" />
          </div>
          <div class="card-body">
            <h5 class="card-title">canada</h5>
            <p class="card-text">
              one of the best international eduction destination throughout
              the world canada has much to boost of thanks to its top
              colleges and world-class universities.
            </p>
            <button type="button" class="btn btn-primary">read more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="about-us-main">
          <img
            src="{{ asset('web/img/about-us.jpg') }}"
            alt="about1"
            class="img-fluid about-us-image"
          />
          <img
            src="{{ asset('web/img/about-us1.jpg') }}"
            alt="about1"
            class="img-fluid about-us-box"
          />
          <img
            src="{{ asset('web/img/about-shape.png') }}"
            alt="about-main"
            class="img-fluid about-us-shape"
          />
        </div>
      </div>
      <div class="col-lg-4">
        <div class="about-us">
          <div class="about-us-text">
            <h3>know more about</h3>
            <h2><span class="ielts">ielts</span> coaching</h2>
            <button type="button" class="btn btn-primary">
              register for free demo
            </button>
          </div>
          <div class="about-us-text">
            <h3>know more about</h3>
            <h2><span class="ielts">pte</span> coaching</h2>
            <button type="button" class="btn btn-primary">
              register for free demo
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="why-choose-us">
  <div class="row g-0">
    <div class="col-lg-6">
      <div class="why-choose-image">
        <img src="{{ asset('web/img/why-choose.jpg') }}" alt="why-choose" class="img-fluid" />
      </div>
    </div>
    <div class="col-lg-6">
      <div class="choose-us-text">
        
        <h3>why choose us</h3>
        <h2>
          we build the
          <span class="color-text">dream with passion</span> for you
        </h2>
        <p>
          one of the best international eduction destination throughout the
          world canada has much to boost of thanks
        </p>

        <div class="choose-text-body d-flex">
          <div class="choose-us-icon">
            <img
              src="{{ asset('web/img/why-choose-icon.png') }}"
              alt="icon"
              class="img-fluid"
            />
          </div>
          <div class="choose-us-card-text">
            <h5>accurate guidance</h5>
            <p>
              one of the best international eduction destination throughout
              the world canada has much to boost of thanks
            </p>
          </div>
        </div>
        <div class="choose-text-body d-flex">
          <div class="choose-us-icon">
            <img
              src="{{ asset('web/img/why-choose-icon.png') }}"
              alt="icon"
              class="img-fluid"
            />
          </div>
          <div class="choose-us-card-text">
            <h5>accurate guidance</h5>
            <p>
              one of the best international eduction destination throughout
              the world canada has much to boost of thanks
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonials">
  <div
    id="carouselExampleDark"
    class="carousel carousel-dark slide"
    data-bs-ride="carousel"
  >
    <div class="carousel-indicators">
      <button
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide-to="0"
        class="active"
        aria-current="true"
        aria-label="Slide 1"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide-to="1"
        aria-label="Slide 2"
      ></button>
      <button
        type="button"
        data-bs-target="#carouselExampleDark"
        data-bs-slide-to="2"
        aria-label="Slide 3"
      ></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <div class="row g-0">
          <div class="col-lg-6">
            <div class="row testimonials-box">
              <div class="col-lg-7">
                <div class="testimonials-main-box"></div>
              </div>
              <div class="col-lg-5">
                <div class="testimonials-main-image">
                  <div class="testimonials-box-image"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="textimonials-box-text">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="testimonials-text">
                    <h3>testimonials</h3>
                    <h2>our client's feedback</h2>
                    <p>
                      <span
                        ><img
                          src="{{ asset('web/img/arrow.png') }}"
                          alt="arrow"
                          class="img-fluid" /></span
                      >one of the best international eduction destination
                      throughout the world canada has much to boost of
                      thanks to its top colleges and world-class
                      universities.<span
                        ><img
                          src="{{ asset('web/img/arrow1.png') }}"
                          alt="arrow"
                          class="img-fluid"
                      /></span>
                    </p>
                    <div class="client-box d-flex">
                      <div class="client-icon">
                        <img
                          src="{{ asset('web/img/client.png') }}"
                          alt="testimonials"
                          class="img-fluid"
                        />
                      </div>
                      <div class="client-box">
                        <h3>david m. bard</h3>
                        <p class="client-text">digital marketer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <div class="row g-0">
          <div class="col-lg-6">
            <div class="row testimonials-box">
              <div class="col-lg-7">
                <div class="testimonials-main-box"></div>
              </div>
              <div class="col-lg-5">
                <div class="testimonials-main-image">
                  <div class="testimonials-box-image"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="textimonials-box-text">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="testimonials-text">
                    <h3>testimonials</h3>
                    <h2>our client's feedback</h2>
                    <p>
                      <span
                        ><img
                          src="{{ asset('web/img/arrow.png') }}"
                          alt="arrow"
                          class="img-fluid" /></span
                      >one of the best international eduction destination
                      throughout the world canada has much to boost of
                      thanks to its top colleges and world-class
                      universities.<span
                        ><img
                          src="{{ asset('web/img/arrow1.png') }}"
                          alt="arrow"
                          class="img-fluid"
                      /></span>
                    </p>
                    <div class="client-box d-flex">
                      <div class="client-icon">
                        <img
                          src="{{ asset('web/img/client.png') }}"
                          alt="testimonials"
                          class="img-fluid"
                        />
                      </div>
                      <div class="client-box">
                        <h3>david m. bard</h3>
                        <p class="client-text">digital marketer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row g-0">
          <div class="col-lg-6">
            <div class="row testimonials-box">
              <div class="col-lg-7">
                <div class="testimonials-main-box"></div>
              </div>
              <div class="col-lg-5">
                <div class="testimonials-main-image">
                  <div class="testimonials-box-image"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="textimonials-box-text">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="testimonials-text">
                    <h3>testimonials</h3>
                    <h2>our client's feedback</h2>
                    <p>
                      <span
                        ><img
                          src="{{ asset('web/img/arrow.png') }}"
                          alt="arrow"
                          class="img-fluid" /></span
                      >one of the best international eduction destination
                      throughout the world canada has much to boost of
                      thanks to its top colleges and world-class
                      universities.<span
                        ><img
                          src="{{ asset('web/img/arrow1.png') }}"
                          alt="arrow"
                          class="img-fluid"
                      /></span>
                    </p>
                    <div class="client-box d-flex">
                      <div class="client-icon">
                        <img
                          src="{{ asset('web/img/client.png') }}"
                          alt="testimonials"
                          class="img-fluid"
                        />
                      </div>
                      <div class="client-box">
                        <h3>david m. bard</h3>
                        <p class="client-text">digital marketer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="enquire">
  <div class="container">
    <div class="row">
      <div class="col-lg-8"></div>
      <div class="col-lg-4 enquire-box-main">
        <div class="enquire-box">
          <h3>feel free to enquire about any question you got</h3>
          <input type="text" placeholder="first Name" />
          <input type="text" placeholder="last Name" />
          <input type="text" placeholder="E-mail address" />
          <input type="text" placeholder="subject" />
          <input
            type="number"
            placeholder="phone number"
            class="phone-number"
          />
          <textarea type="text" placeholder="Message"></textarea>
          <button type="button" class="btn btn-primary">send</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="blog">
  <div class="container">
    <h3>blog & news</h3>
    <h2>our latest news feed</h2>
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="news-feed-image">
          <div class="news-feed-text">
            <h3>A digital prescription for the pharma</h3>
            <p>
              <i class="fa fa-calendar" aria-hidden="true"></i>22 nov 2022
              <small
                ><i class="fa fa-comments" aria-hidden="true"></i>232
                views</small
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-6">
            <div class="card-box">
              <div class="card h-100">
                <img src="{{ asset('web/img/news1.jpg') }}" class="img-fluid" alt="news" />
                <div class="card-body">
                  <h5 class="card-title">
                    A digital prescription for the pharma
                  </h5>
                </div>
                <div class="card-footer">
                  <small class="text-muted">
                    <p>
                      <i class="fa fa-calendar" aria-hidden="true"></i>22
                      nov 2022
                      <small
                        ><i class="fa fa-comments" aria-hidden="true"></i
                        >232 views</small
                      >
                    </p>
                  </small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card-box">
              <div class="card h-100">
                <img src="{{ asset('web/img/news2.jpg') }}" class="img-fluid" alt="news" />
                <div class="card-body">
                  <h5 class="card-title">
                    A digital prescription for the pharma
                  </h5>
                </div>
                <div class="card-footer">
                  <small class="text-muted">
                    <p>
                      <i class="fa fa-calendar" aria-hidden="true"></i>22
                      nov 2022
                      <small
                        ><i class="fa fa-comments" aria-hidden="true"></i
                        >232 views</small
                      >
                    </p>
                  </small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row blog-box">
          <div class="col-lg-6">
            <div class="card-box">
              <div class="card h-100">
                <img src="{{ asset('web/img/news3.jpg') }}" class="img-fluid" alt="news" />
                <div class="card-body">
                  <h5 class="card-title">
                    A digital prescription for the pharma
                  </h5>
                </div>
                <div class="card-footer">
                  <small class="text-muted">
                    <p>
                      <i class="fa fa-calendar" aria-hidden="true"></i>22
                      nov 2022
                      <small
                        ><i class="fa fa-comments" aria-hidden="true"></i
                        >232 views</small
                      >
                    </p>
                  </small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card-box">
              <div class="card h-100">
                <img src="{{ asset('web/img/news4.jpg') }}" class="img-fluid" alt="news" />
                <div class="card-body">
                  <h5 class="card-title">
                    A digital prescription for the pharma
                  </h5>
                </div>
                <div class="card-footer">
                  <small class="text-muted">
                    <p>
                      <i class="fa fa-calendar" aria-hidden="true"></i>22
                      nov 2022
                      <small
                        ><i class="fa fa-comments" aria-hidden="true"></i
                        >232 views</small
                      >
                    </p>
                  </small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection