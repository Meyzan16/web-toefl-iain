<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <!-- jika mau bikin header yang tekunci ke element maka gunakan relative dan di ielement nya absolute -->
        <!-- justify beetween digunakan untuk menjejerkan -->
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="#home" class="font-bold text-lg text-primary block py-6">IAIN FATMAWATI</a>
            </div>

            <!-- element sebelah kanan -->
            <!-- ketika mobile -->
            <div class="flex items-center px-4 ">
                <button id="hamburger" name="hamburger" type="button" 
                class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line rounded-lg origin-top-left transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line rounded-lg duration-300 ease-in-out"></span>
                    <span class="hamburger-line rounded-lg  origin-bottom-left duration-300 ease-in-out"></span>
                </button>

                <nav id="navbar" class="hidden absolute py-5 
                bg-white shadow-lg rounded-lg max-w-[250px] w-full
                    right-6 top-full 
                    lg:block lg:static 
                    lg:bg-transparent 
                    lg:max-w-full lg:shadow-none lg:rounded-none">
                    <!-- ketika di mobila diplay blcok tapi ketika di layar besar display jadi flex -->
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="#home"  class="text-base text-dark py-2 px-8 flex lg:inline-flex hover:text-primary">Beranda</a>
                            <a href="#pengumuman"  class="text-base text-dark py-2 px-8  flex lg:inline-flex hover:text-primary">Pengumuman</a>

                            <!-- <a href="#blog"  class="text-base text-dark py-2 px-8  flex lg:inline-flex hover:text-primary">Blog</a>
                            <a href="#contact"  class="text-base text-dark py-2 px-8 flex lg:inline-flex hover:text-primary">Contact</a> -->
                            <!-- <a href="#contact"  class="text-base text-dark py-2 px-8  inline-flex  hover:text-primary">Contact</a> -->
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<section id="home" class="py-[18rem] mx-auto">
    <div class="container">
      <div class="flex flex-wrap">
          <div class="w-full px-4 text-center mx-auto">
            <h1 class="text-xs sm:text-lg font-semibold text-primary mb-4">SELAMAT DATANG DI WEBSITE</h1>
            <h1 class="font-serif font-bold text-slate-600 text-2xl sm:text-4xl lg:text-5xl">
              IAIN 
              <span class="font-serif text-primary font-semibold bg-gradient-to-r
              from-primary to-teal-900 bg-clip-text text-transparent ">
                FATMAWATI
              </span> 
              <span>
                BENGKULU
              </span> 
              <p class=" text-sm sm:text-lg  font-medium text-dark mt-4 mb-10 leading-relaxed">
                Website ini merupakan pengumuman hasil tes
                <span class="text-primary">TOEFL</span> yang di selenggarkan oleh IAIN fatmawati bengkulu
            </p>
            </h1>
          </div>
      </div>

    </div>
</section>