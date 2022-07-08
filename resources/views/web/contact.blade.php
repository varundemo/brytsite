
 @extends('layouts.web')
 @section('title','BRYTE')
 
 @section('details')   

    <section class="blog-main">
      <div class="container">
        <h1>Contact</h1>
        <p>Sed perspiciatis unde omnis natus error voluptatem accusan</p>
      </div>
    </section>

    <section class="help-clients">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="clients-box">
              <p>how we help clients</p>
              <h4>Got immigration or Visa Problems?</h4>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="clients-box-main">
              <p>
                how we help clients Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="map-main">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9633464057442!2d-73.3358606854946!3d40.740832043789744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e82c57ebc11be3%3A0xdf70f5275718ec82!2sVictoria%20Rd%2C%20North%20Babylon%2C%20NY%2011703%2C%20USA!5e0!3m2!1sen!2sin!4v1655965519916!5m2!1sen!2sin"
              width="100%"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="col-lg-8"></div>
          <div class="col-lg-4">
            <div class="getin-touch-form">
              <div class="getin-touch-text">
                <h3>Need to get A Hold of us?</h3>
                <h5>Where does your digital marketing need help</h5>
                <h1>619.752.1955</h1>
                <a href="#">hello@gmail.com</a>
                <button type="button" class="getin-touch-button">
                  Get In Touch
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="get-in-touch-form">
      <div class="container">
        <h3>Get in Touch</h3>
        <p>Please fill the form below.required field are Marked*</p>
        <form>
          <input type="text" placeholder="Full Name*" required />
          <input type="email" placeholder="Email Address*" required />
          <input type="phone" placeholder="Phone Number" />
          <input type="text" placeholder="subject*" required />
          <input type="text" placeholder="State" />
          <input type="text" placeholder="Company Name" />
          <textarea type="text" placeholder="Comment"></textarea>
          <button type="button" class="submit-now">Submit Now</button>
        </form>
      </div>
    </section>

    <section class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="contact-details">
              <div class="contact-box-icon">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </div>
              <h5>Our Location</h5>
              <p>275 Quadra Street Victoria Road, New York</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="contact-details">
              <div class="contact-box-icon">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
              <h5>Call Us</h5>
              <p>Mobile : +62-864-349-1 Hotline: 1900-6644</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="contact-details">
              <div class="contact-box-icon">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
              </div>
              <h5>Email Us</h5>
              <p>travisa@domain.com info@bryte.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="visa-application">
      <div class="container">
        <div class="visa-main-box">
          <div class="row">
            <div class="col-lg-8">
              <div class="about-us-visa">
                <h3>
                  Are you looking for <br />
                  <b class="color-text-box">visa application</b> just call us
                </h3>
                <p>
                  Need a Consultation ? Call us today +62-202-555-0133 or<br />
                  email us :travisa@domain.com
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="visa-button">
                <button type="button" class="contact-button">Contact us</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection
   
