<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<header  class=" p-4  bg-black">
       
  <div class="flex justify-between items-center" >
    <img src="{{ asset('storage/logo.jpg') }}" alt="logo">
    <a href="{{ route('register') }}" style="text-decoration: none"><h3 style="color: #F8981D">Register</h3></a>
    <a href="{{ route('login') }}"style="text-decoration: none" ><h3 style="color: #F8981D">Login</h3></a>
    
    <i class="fa-solid fa-user fa-2x" style="color: #F8981D" ></i>
     {{$slot}}
</header>