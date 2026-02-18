@extends('layouts.app')

@section('title', 'Contact | Fortune Tech')

@section('content')

<main class="form-area-contact-page" style="position:relative;" x-data="loader()">

  <!-- page title area start  -->
  <section class="page-title-area form-area-contact-page">
    <div class="container large">
      <div class="page-title-area-inner section-spacing-top">
        <div class="page-title-wrapper">
          <h2 class="page-title fade-anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">FREE AUDIT</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- page title area end  -->

  <!-- contact area start  -->
  <section class="contact-area-contact-page contact-area-form-page">
    <div class="container large">
      <div class="contact-area-contact-page-inner">
        <div class="section-header fade-anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
          <div class="section-title-wrapper" style="grid-template-columns: 1fr 667px;">
            <div class="subtitle-wrapper">
              <span class="title">Get Your Audit Report Today</span>
            </div>
            <div class="title-wrapper">
              <h2 class="section-title font-sequelsans-romanbody" style="
    font-size: 38px;
    font-weight: 400;
    line-height: 1.5;
">Architecting the operational <br>core of global brands
                through<br> precision strategy and tech.</h2>
            </div>
          </div>
        </div>
        <!-- <div class="section-content-wrapper fade-anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
          <div class="section-content">
            <div class="contact-mail">
              <p class="title">Fill out all the details <br>
                to the best of your<br> abilities.</p>
              </p>
            </div>
          </div>
          <div class="contact-wrap">
            <form id="contact__form" method="POST" action="./mail.php">
              <div class="contact-formwrap">
                <div class="contact-formfield">
                  <input type="text" name="name" id="name" placeholder="Name*" fdprocessedid="ibj78g">
                </div>
                <div class="contact-formfield">
                  <input type="text" name="email" id="email" placeholder="Email*" fdprocessedid="3uxi0u">
                </div>
                <div class="contact-formfield">
                  <input type="text" name="phone" id="phone" placeholder="Phone*" fdprocessedid="a7uegh">
                </div>
                <div class="contact-formfield">
                  <input type="text" name="company" id="company" placeholder="Company" fdprocessedid="3364rm">
                </div>
                <div class="contact-formfield">
                  <select name="Budget" id="Budget" fdprocessedid="9ayn1i">
                    <option value="0" disabled="" selected="">Budget*</option>
                    <option value="1">5,000 - 10,000</option>
                    <option value="2">10,000 - 15,000</option>
                    <option value="3">15,000 - 20,000</option>
                    <option value="4">20,000 - 25,000</option>
                    <option value="5">25,000 - Above</option>
                  </select>
                </div>
                <div class="contact-formfield">
                  <input type="text" name="solution" id="solution" placeholder="Solution*" fdprocessedid="h8s9te">
                </div>
                <div class="contact-formfield message">
                  <input type="text" name="message" id="message" placeholder="Message*" fdprocessedid="x6kc0te">
                </div>
              </div>
              <div class="submit-btn">
                <button type="submit" class="rr-btn" fdprocessedid="jxua51">
                  <span class="btn-wrap">
                    <span class="text-one">Send Message</span>
                    <span class="text-two">Send Message</span>
                  </span>
                </button>
              </div>
              <div id="response-message"></div>
            </form>
          </div>
        </div> -->
        <!-- <div class="section-content-wrapper fade-anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;"> -->
          @livewire('assessment-wizard')
        <!-- </div> -->

      </div>
    </div>
  </section>
  <!-- contact area end  -->

</main>

@endsection