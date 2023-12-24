
<!--
          - #CONTACT
        -->

<article class="contact" data-page="contact">

    <header>
        <h2 class="h2 article-title">Contact</h2>
    </header>

    <section class="mapbox" data-mapbox>
        <figure>
            <iframe width="100%" height="600" src="https://map.ir/iframe/lat/34.390263/lng/47.113296/z/17/p/اینجا هستم              "></iframe>
        </figure>
    </section>

    <section class="contact-form">

        <h3 class="h3 form-title">Contact Form</h3>

        <form action="{{route('contactMe')}}"  method="post" class="form" data-form>
            {{csrf_field()}}

            <div class="input-wrapper" style="grid-template-columns: 1fr">
                <input type="text" name="fullName" class="form-input" placeholder="Full name" required
                       data-form-input>

            </div>
            <div class="input-wrapper">
                <input type="text" name="phone" class="form-input" placeholder="phone" required
                       data-form-input>

                <input type="email" name="email" class="form-input" placeholder="Email address" required
                       data-form-input>
            </div>

            <textarea name="text" class="form-input" placeholder="Your Message" required
                      data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
                <ion-icon name="paper-plane"></ion-icon>
                <span>Send Message</span>
            </button>

        </form>

    </section>

</article>
