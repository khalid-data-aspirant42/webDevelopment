<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css.css">
    <style>
        body {
            background-color: rgb(198, 231, 204);
        }
        .px-3 {
            padding-left: 0.75rem;
            padding-right: -0.25rem;
            padding-top: 0.25rem
        }
    </style>
    <link rel="icon" href="logo2.jpg" type="image/x-icon">

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
                <span class="ml-3 text-xl">Cognito Classes</span>
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
     <!-- login -->
     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>

     </form>

</body>

</html>

