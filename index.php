<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognito Classes</title>
    <style>
        body {
            background-color: rgb(198, 231, 204);
            background-image: url(bgpic);
            background-repeat: no-repeat;
        }
        .px-3 {
            padding-left: 0.75rem;
            padding-right: -0.25rem;
            padding-top: 0.25rem
        }
    </style>
    <link rel="icon" href="logo2.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-red-200 p-2 bg-green-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl" style="color: aliceblue;">Cognito Classes</span>
            </a>
            <nav
                class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-900" href="index.php">Home</a>
                <a class="mr-5 hover:text-gray-900" href="about.html">About</a>
                <a class="mr-5 hover:text-gray-900" href="courses.html">Courses</a>
                <a class="mr-5 hover:text-gray-900" href="team.html">Our Team</a>
                <a class="mr-5 hover:text-gray-900" href="gallery.html">Gallery</a>
                <a class="mr-5 hover:text-gray-900" href="contact.html">Contact Us</a>
            </nav>
            <button type="button"
                class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="register.php">Register</a>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <!-- <path d="M5 12h14M12 5l7 7-7 7"></path> -->
                </svg>
            </button>
            <button
                class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="index2.php">Sign in</a>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <!-- <path d="M5 12h14M12 5l7 7-7 7"></path> -->
                </svg>
            </button>
        </div>
    </header>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900" style="color: aliceblue;">Let's grow with Cognito Classes</h1>
                <p class="mb-8 leading-relaxed" style="color: aliceblue;">We @Cognito Classes provide guaranted placement after course completion</p>
                
                <p class="text-sm mt-2 text-gray-500 mb-8 w-full"></p>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <!-- lottie files -->
                <script src="js.js"></script>
                <lottie-player src="json.json"  background="transparent"  speed="1.2"  style="width: 500px; height: 500px;"  loop  autoplay></lottie-player>
            </div>
        </div>    
        <!-- ------  -->
          </head>
          <body>
          <div class="slideshow-container">
          
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img_nature_wide.jpg" style="width:100%">
            <div class="text">Caption Text</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img_snow_wide.jpg" style="width:100%">
            <div class="text">Caption Two</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img_mountains_wide.jpg" style="width:100%">
            <div class="text">Caption Three</div>
          </div>
          
          </div>
          <br>
          
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>
          
          <script>
          let slideIndex = 0;
          showSlides();
          
          function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }
          </script>
          <!-- ------  -->

    </section>
    <!-- Footer -->
    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="None" stroke="currentColor" stroke-linecap="square" stroke-linejoin="square" stroke-width="2" class="w-10 h-10 text-red-200 p-2 bg-green-500 rounded-full" viewBox="0 0 24 24" style="width: 6.5rem;">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <a class="ml-3 text-xl" href="https://www.cogtech.in/"><span style="color: aliceblue;">Cognito Softech</span></a>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 Cognito Softech —
            <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@cogtech.in</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
            
          </span>
          <div class="p-2 w2-full pt-8 mt-8 border-t border-gray-200 text-center">
            <a class="text-indigo-500" href="mailto:helpdesk@cogtech.in">helpdesk@cogtech.in</a>
            <p class="leading-normal my-5" style="color: aliceblue;">MJ Complex, Devangna Chowk,
              <br>Hazaribagh, Jharkhand-825301
            </p>
          </div>
        </div>
      </footer>
</body>

</html>