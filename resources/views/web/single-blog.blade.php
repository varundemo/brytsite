
  @extends('layouts.web')
  @section('title','BRYTE')
  
  @section('details') 

    <section class="blog-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 marketing-box">
            <div class="visa-image">
              <img
                src="{{ asset('web/img/Singal-blog/singal-blog.png') }}"
                alt="visa"
                class="img-fluid"
              />
              <div class="blog-date d-flex">
                <p><i class="fa fa-calendar-o" aria-hidden="true"></i>June 24, 2021</p>
                <p><i class="fa fa-comment-o" aria-hidden="true"></i>0 Comments</p>
              </div>
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
        <div class="row">
          <div class="col-lg-8 marketing-box">
            <div class="visa-image">
              <h2>Marketing & Innovation Makes Business</h2>
              <p>
                when an unknown printer took a galley of type and scrambled when
                an unknown printer took a galley of type and scrambled when an
                unknown printer took a galley of type and scrambled when an
                unknown printer took a galley of type and scrambled when an
                unknown printer took a galley of type and scrambled when an
                unknown printer took a galley of type and scrambled
              </p>
              <h3>Good business leaders create a vision, articulate the vision, passionately own the 
                vision, relentlessly drive it to completion
              </h3>
              <p>
                when an unknown printer took a galley of type and scrambled when
                an unknown printer took a galley of type and scrambled when an
                unknown printer took a galley of type and scrambled
              </p>
              <p>
                when an unknown printer took a galley of type and scrambled when
                an unknown printer took a galley of type and scrambled when an
                unknown printer took a galley of type and scrambled when an
                unknown printer took a galley of type and scrambled
              </p>
              <div class="share d-flex">
                Share:
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-4 news-main news-recent">
            <div class="recent-news-box">
              <h3>Recent News</h3>
              <div class="stock-marketing d-flex">
                <img
                  src="{{ asset('web/img/Blog/recent-news.png') }}"
                  alt="visasss"
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
      </div>
    </section>

    <section class="comments">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h1>2 comments</h1>
            <div class="stock-marketing ">
              <div class="row">
                <div class="col-md-2">
                  <img
                src="{{ asset('web/img/Blog/recent-news.png') }}"
                alt="visa"
                class="img-fluid"
              />
                </div>
                <div class="col-md-10">
                  <div class="stock-marketing-box d-flex">
                <div class="comment-box">
                  <h5>Juli Cristiana</h5>
                  <h6>15 january 2015 At 10:30 pm</h6>
                </div>
                <div class="reply-box">
                  <h5>Reply</h5>
                </div>
              </div>
              <div class="comment-main-box">
                <p> when an unknown printer took a galley of type and scrambled when
                an unknown printer took a galley of type</p>
              </div>
                </div>
              </div>
              
            </div>
           <div class="stock-marketing ">
              <div class="row">
                <div class="col-md-2">
                  <img
                src="{{ asset('web/img/Blog/recent-news.png') }}"
                alt="visa"
                class="img-fluid"
              />
                </div>
                <div class="col-md-10">
                  <div class="stock-marketing-box d-flex">
                <div class="comment-box">
                  <h5>Juli Cristiana</h5>
                  <h6>15 january 2015 At 10:30 pm</h6>
                </div>
                <div class="reply-box">
                  <h5>Reply</h5>
                </div>
              </div>
              <div class="comment-main-box">
                <p> when an unknown printer took a galley of type and scrambled when
                an unknown printer took a galley of type</p>
              </div>
                </div>
              </div>
              
            </div>
              <div class="post-comment">
                <h2>post a comment</h2>
                <p>Your must sing-in to make a or comment a post</p>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="comment-box">
                            <input type="text" placeholder="Username*" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="comment-box">
                            <input type="email" placeholder="Email Address*" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="comment-box">
                            <input type="text" placeholder="Website" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="message-box">
                            <textarea placeholder="message"></textarea>
                        </div>
                    </div>
                </div>
                <button type="button" class="post-comment-btn">post comment</button>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    @endsection

    
