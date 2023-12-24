<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Init Your Web Site</title>

    <!--
      - favicon
    -->
    <link rel="shortcut icon" href="{{asset('./assets/images/logo.ico')}}" type="image/x-icon">

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="{{asset('./assets/css/style.css')}}">

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>


<!--
  - #MAIN
-->

<main>


    <article class="contact active">

        <header>
            <h2 class="h2 article-title">Enter Your Info </h2>
        </header>

        <section class="mapbox" data-mapbox>
            <figure>
                <img src="/assets/images/laravel.png" width="100%" height="100%">
            </figure>
        </section>

        <section class="contact-form">

            <h3 class="h3 form-title">Info Form</h3>

            <form action="{{route('Init.save')}}" method="post" enctype="multipart/form-data" class="form" data-form>
                {{csrf_field()}}

                <div class="input-wrapper">
                    <input type="text" name="firstName" class="form-input" placeholder="Fist name" required
                           data-form-input>
                    <input type="text" name="lastName" class="form-input" placeholder="Last name" required
                           data-form-input>

                </div>
                <div class="input-wrapper">
                    <input type="text" name="phone" class="form-input" placeholder="phone" required
                           data-form-input>

                    <input type="email" name="email" class="form-input" placeholder="Email address" required
                           data-form-input>
                </div>
                <div class="input-wrapper" style="grid-template-columns: 1fr">
                    <input type="password" name="password" class="form-input" placeholder="password To Panel" required
                           data-form-input>

                </div>


                <div class="input-wrapper"  style="grid-template-columns: 1fr 1fr;text-align: center" >
                    <label class="timeline-text">Your Image</label>
                    <label class="timeline-text">Site Logo</label>
                </div>

                <div class="input-wrapper"  style="grid-template-columns: 1fr 1fr" >
                    <input type="file" name="image" class="form-input" placeholder="image" required
                           data-form-input>

                    <input type="file" name="logo" class="form-input" placeholder="image" required
                           data-form-input>

                </div>

                <button class="form-btn" type="submit" style="width: 100%" data-form-btn>
                    <ion-icon name="paper-plane"></ion-icon>
                    <span>Send </span>
                </button>

            </form>

        </section>

    </article>


</main>


<!--
  - custom js link
-->
<script src="{{asset('/assets/js/script.js')}}"></script>

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
