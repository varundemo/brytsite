@extends('layouts.web')
@section('title','BRYTE')

@section('details')

    <section class="blog-main">
      <div class="container">
        <h1>Blog</h1>
        <p>Sed perspiciatis unde omnis natus error voluptatem accusan</p>
      </div>
    </section>

    <section class="blog-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="visa-image">
              <img
                src="{{ asset('web/img/Blog/singapore.jpg') }}"
                alt="visa"
                class="img-fluid"
              />
              <h5 class="Date-main">28 Apr, 2022</h5>
              <h3>What visa do you need to work legally in Singapore?</h3>
              <p>when an unknown printer took a galley of type and scrambled</p>
              <button type="button" class="more-details">
                <a href="{{ asset('blog/blog-name') }}">More Details</a>
              </button>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="visa-image">
              <img
                src="{{ asset('web/img/Blog/singapore.jpg') }}"
                alt="visa"
                class="img-fluid"
              />
              <h5 class="Date-main">28 Apr, 2022</h5>
              <h3>What visa do you need to work legally in Singapore?</h3>
              <p>when an unknown printer took a galley of type and scrambled</p>
              <button type="button" class="more-details">
                <a href="{{ asset('blog/blog-name') }}">More Details</a>
              </button>
            </div>
          </div>
          <div class="col-lg-4 news-main">
            <div class="search-bar">
              <input type="search" placeholder="search here..." />
              <i class="fa fa-search" aria-hidden="true"></i>
            </div>
            <div class="categories">
              <h3>Categories</h3>
              <p>Budget <small>(06)</small></p>
              <p>Account<small>(12)</small></p>
              <p>Invesment<small>(07)</small></p>
              <p>Stock<small>(23)</small></p>
              <p>Financial <small>(19)</small></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="recent-news">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="visa-image">
              <img
                src="{{ asset('web/img/Blog/singapore.jpg') }}"
                alt="visa"
                class="img-fluid"
              />
              <h5 class="Date-main">28 Apr, 2022</h5>
              <h3>What visa do you need to work legally in Singapore?</h3>
              <p>when an unknown printer took a galley of type and scrambled</p>
              <button type="button" class="more-details">
                <a href="{{ asset('blog/blog-name') }}">More Details</a>
              </button>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="visa-image">
              <img
                src="{{ asset('web/img/Blog/singapore.jpg') }}"
                alt="visa"
                class="img-fluid"
              />
              <h5 class="Date-main">28 Apr, 2022</h5>
              <h3>What visa do you need to work legally in Singapore?</h3>
              <p>when an unknown printer took a galley of type and scrambled</p>
              <button type="button" class="more-details">
                <a href="{{ asset('blog/blog-name') }}">More Details</a>
              </button>
            </div>
          </div>
          <div class="col-lg-4 news-main">
            <div class="recent-news-box">
              <h3>Recent News</h3>
              <div class="stock-marketing d-flex">
                <img
                  src="{{ asset('web/img/Blog/recent-news.png') }}"
                  alt="visa"
                  class="img-fluid"
                />
                <div class="stock-marketing-box">
                  <h5>What visa do you need to work legally in Singapore</h5>
                  <h6>13 june 2022</h6>
                </div>
              </div>
              <div class="stock-marketing d-flex">
                <img
                  src="{{ asset('web/img/Blog/recent-news-2.png') }}"
                  alt="visa"
                  class="img-fluid"
                />
                <div class="stock-marketing-box">
                  <h5>What visa do you need to work legally in Singapore</h5>
                  <h6>13 june 2022</h6>
                </div>
              </div>
              <div class="stock-marketing d-flex">
                <img
                  src="{{ asset('web/img/Blog/recent-news-3.png') }}"
                  alt="visa"
                  class="img-fluid"
                />
                <div class="stock-marketing-box">
                  <h5>What visa do you need to work legally in Singapore</h5>
                  <h6>13 june 2022</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pagenation">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link active" href="#">1</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#"
                  ><i class="fa fa-long-arrow-right" aria-hidden="true"></i
                ></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </section>

@endsection


    
