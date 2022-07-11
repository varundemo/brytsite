@extends('layouts.web')
@section('title','BRYTE')

@section('details')

    <section class="service-banner">
      <div class="container">
        <div class="service-banner-text">
          <h1>student Visa</h1>
          <p>
            Sed perspiciatis unde omnis natus error voluptatem accusan. sed
            perspiciatis unde omnis errorvo luptatem accusan
          </p>
        </div>
      </div>
    </section>

    <section class="best-visa">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="best-visa-consultent-image">
              <img
                src="{{ asset('web/img/service/best-study.png') }}"
                alt="service"
                class="img-fluid"
              />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="best-visa-consultent-text">
              <h1>
                <span class="bryte-color-text">bryte</span>-best study visa
                consultant
              </h1>
              <h3>Studying abroad is an investment for your future</h3>
              <p>
                Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type
                and scrambled.<br />
                Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type
                and scrambled.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="career-counselling">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="career-counselling-text">
              <h1>career counselling, university and course selection</h1>
              <h6>
                Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type
                and scrambled.
              </h6>
              <p>
                Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type
                and scrambled.
              </p>
              <p>
                Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type
                and scrambled.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="career-counselling-image">
              <img
                src="{{ asset('web/img/service/visa-ticket.png') }}"
                alt="service"
                class="img-fluid"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="procedure">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="admission-procudure">
              <h1>application procedure and admission process</h1>
              <p>
                Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type
                and scrambled.Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled.
              </p>
              <p>
                Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type
                and scrambled.Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="landing-service">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="landing-service-text">
              <h1>immigration & study abroad post-landing services</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor
              </p>
              <ul>
                <li>
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>Airport
                  pick-up
                </li>
                <li>
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>Finding
                  the right accommodation
                </li>
                <li>
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>resume
                  editing
                </li>
                <li>
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>looking
                  for best internship
                </li>
                <li>
                  <i class="fa fa-check-square-o" aria-hidden="true"></i
                  >guidance on work permits and other regulations
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4"></div>
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

   @endsection