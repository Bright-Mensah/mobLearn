<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOBLearn</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body >

<!-- first section -->
    <section class="bg-slate-900 pb-28">
  
   <div class="flex justify-between ">
   <div class="my-7">

       <p class="mx-10 logo text-white">logo</p>
   </div>
   
  <ul class="flex my-7">
    <li class="mx-6 text-white">Catalog</li>
    <li class="mx-6 text-white">Discuss</li>
    <li class="mx-6 text-white">Get pro</li>
    <li class="mx-6"><a class="bg-cyan-900 rounded-md px-3 text-white py-3 hover:bg-cyan-700 cursor-pointer" id="btnLogin" >Log in </a></li>
    <li class="mx-6"><a class="bg-rose-900 rounded-md px-3 text-white py-3 hover:bg-rose-700 cursor-pointer" id="btnSignUp" >Register </a></li>
   
  </ul>
</div>

<!-- heading -->

<div class="text-center">
    <h1 class=" text-white text-4xl font-bold mt-16">The best way to learn to code</h1>
    <p class="text-white mx-48 mt-5 px-28">Courses designed by experts with real-world practice. Join our global community. It's free.</p>

    <button id="btnStartLearning" class="bg-rose-900 text-white px-28 rounded-md text-center py-3 mt-8 hover:bg-rose-700 ">Start learning now!</button>

    
</div>

<!-- in demand courses -->
<p class="text-white font-bold mx-10 mt-28">Most in-demand coding courses</p>
<div class="flex mt-5">

    <!-- JAVASCRIPT -->
    <div class="bg-white rounded-md mx-10 py-1 px-6 flex shadow-lg shadow-cyan-500/50 hover:bg-yellow-500 hover:text-white">
        <img src="images/js.webp" class="w-12 rounded-full object-contain mr-5" alt="image of javascript">
        <h1 class="font-bold py-6">Introduction to JavaScript</h1>
    </div>

    <!-- JAVA -->
    <div class="bg-white rounded-md mx-10 py-1 px-6 flex shadow-lg shadow-cyan-500/50 hover:bg-red-500 hover:text-white">
        <img src="images/java.webp" class="w-12 rounded-full object-contain mr-5" alt="image of javascript">
        <h1 class="font-bold py-6">Introduction to Java</h1>
    </div>

    <!-- HTML -->
    <div class="bg-white rounded-md mx-10 py-1 px-6 flex shadow-lg shadow-cyan-500/50 hover:bg-orange-600 hover:text-white">
        <img src="images/html image.png" class="w-12 rounded-full object-contain mr-5" alt="image of javascript">
        <h1 class="font-bold py-6">Introduction to HTML</h1>
    </div>

    <!-- CSS -->

    <div class="bg-white rounded-md mx-10 py-1 px-6 flex shadow-lg shadow-cyan-500/50 hover:bg-blue-600 hover:text-white">
        <img src="images/css.png" class="w-12 rounded-full object-contain mr-5" alt="image of javascript">
        <h1 class="font-bold py-6">Introduction to css</h1>
    </div>

</div>

</section>

<!-- second section -->
<section class="bg-slate-200">



<div class="flex">



<div class="bg-white rounded-md mx-5 py-1 px-2 my-10 shadow-lg shadow-cyan-500/50 drop-shadow-2xl hover:shadow-black hover:bg-rose-900 hover:text-white group">
        <img src="images/home-why-solo-1.svg" class=" rounded-full object-contain " alt="image of javascript">
        <h1 class="font-bold py-3 text-center text-4xl">Tailored to you</h1>
        <p class="text-center text-xl text-slate-500 font-serif hover:text-white group-hover:text-white">No matter your experience level, you'll be <br> writing real, functional code within minutes <br> of starting your first course.</p>
    </div>

<div class="bg-white rounded-md mx-2 py-1 px-2 my-10 shadow-lg shadow-cyan-500/50 hover:bg-purple-900 hover:shadow-yellow-900 hover:text-white group">
        <img src="images/home-why-solo-2.svg" class=" rounded-full object-contain" alt="image of javascript">
        <h1 class="font-bold py-3 text-center text-4xl">Bite-sized</h1>
        <p class="text-center text-xl text-slate-500 font-serif group-hover:text-white">Go step-by-step through our unique <br> courses. Assess what you’ve learned with <br> in-lesson quizzes, and gradually advance your <br> skills with practice.</p>
    </div>

<div class="bg-white rounded-md mx-5 py-1 px-2 my-10 shadow-lg shadow-cyan-500/50 hover:shadow-teal-200 hover:bg-green-900 hover:text-white group">
        <img src="images/home-why-solo-3.svg" class=" rounded-full object-contain " alt="image of javascript">
        <h1 class="font-bold py-3 text-center text-4xl">Get Proof</h1>
        <p class="text-center text-xl text-slate-500 font-serif group-hover:text-white">Earn a certificate to validate your newly <br> acquired skills. Post it on social for others <br> to see.</p>
    </div>



    
    </div>
    </section>

    <!-- third section -->
    <section>
        <!-- heading -->
        <h1 class="text-center text-6xl font-bold my-28 tracking-wide">The perfect platform to boost <br> your technical skills</h1>

        <!-- details -->
        <div class="flex justify-evenly">
            <div>
                <img src="images/home-perfect-platform-1-rebranding.svg" alt="">
                <h2 class="text-center font-bold text-4xl mb-5">Students</h2>
                <p class="text-xl text-center text-slate-500 tracking-wide">Prepping for the big test or want to ace your  first <br> interview? Use mobLearn's real-world practice to <br> reinforce what you've learned and get you ready for <br> that big moment.</p>
            </div>
            <div>
                <img src="images/home-perfect-platform-2.svg" alt="">
                <h2 class="text-center font-bold text-4xl mb-5">Professionals</h2>
                <p class="text-xl text-center text-slate-500  tracking-wide">You can learn something totally new to advance your <br> career. Or maybe you just want to knock off the rust.<br> Try Moblearn to get access to a variety of courses, <br> from machine learning to web development.</p>
            </div>
        </div>
    </section>

    <!-- fourth section -->

    <section class="bg-slate-900 mt-10">
        <div class="flex justify-between">
            <!-- desc -->
            <div>
                <h1 class="text-5xl font-bold text-white my-72 px-10">
                Coding has never been easier. <br> Start learning now!
                </h1>

            </div>

            <!-- form -->
            <div class="mt-12 mr-10">
                <h1 class="text-center text-white mb-10 font-bold text-3xl">SIGN UP</h1>
            <form class="w-full max-w-lg" method="post">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        First Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
      <p class="text-red-500 text-xs italic">Please fill out this field.</p>
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Last Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Password
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
      <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Confirm Password
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
      <p class="text-gray-600 text-xs italic">confirm Password should be the same as password</p>
    </div>
  </div>


<button class="bg-blue-600 text-white rounded-md px-8 py-2 hover:bg-blue-900">Sign up</button>
</form>
            </div>

        </div>

    </section>
    <!-- footer -->
    <footer class="bg-slate-950 h-20">
      <div class="flex justify-between">
        <div>

          <ul class="flex mt-7">
            <li class="mx-6"><a  class="text-gray-400" >Home</a></li>
            <li class="mx-6"><a  class="text-gray-400">FAQ</a></li>
            <li class="mx-6"><a  class="text-gray-400">Contact</a></li>
            <li class="mx-6"><a  class="text-gray-400">Terms of Use</a></li>
            <li class="mx-6"><a  class="text-gray-400">Privacy policy</a></li>
            <li></li>
          </ul>
        </div>
        <!-- made with love -->
        <div class="mt-7">
          <p  class="text-gray-400 mr-10">made with ❤️ by mobLearn | &copy; <?php echo date('Y') ?></p>
        </div>
      </div>

    </footer>
    <script src="script.js"></script>
</body>
</html>