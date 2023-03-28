<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])

  {{-- datatables --}}
<!--Regular Datatables CSS-->
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<!--Responsive Extension Datatables CSS-->
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
  {{-- end data tables --}}
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <style type="text/tailwindcss">
    @layer base {
      body {
          font-family:'Inter', sans-serif;
      }
     
    }
    @layer utilities {
      .body {
        @apply bg-gradient-to-r from-teal-100 via-white to-teal-100 
        /* bg-gradient-to-r
                  from-white to-teal-100 bg-clip-text */
      }

      .navbar-fixed {
          @apply fixed z-[9999] bg-white bg-opacity-60;
          backdrop-filter: blur(5px);
          box-shadow: inset 0 -1px 0 0 rgba(0,0,0,0.2)
      }

      .hamburger-line {
              @apply w-[25px] h-[4px] my-1 block bg-dark;
      }

      /* direct persis anak ke 1 */
      .hamburger-active > span:nth-child(1) {
          @apply   rotate-45;
      }
      .hamburger-active > span:nth-child(3) {
          @apply  -rotate-45;
      }
      .hamburger-active > span:nth-child(2) {
          @apply scale-0;
      }
    }
  </style>
  <script>
    tailwind.config = {
      theme: {
        container: {
          center:true,
          padding:'16px',
        },
        extend: {
          fontFamily: {
            inter:['Inter'],
            poppins:['Poppins'],
          },
          colors: {
            primary: '#14b8a6',
            dark: '#0f172a',
            secondary: '#64748b',
          },
          screens:{
            '2xl':'1320px',
          },
        },
      }
    }
  </script>
</head>
<body class="body">
    
    @include('user.partials.header')

    @yield('content')
    

    @include('user.partials.footer')
  
    <script src="{{asset('js/script.js')}}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
      $(document).ready(function() {

        var table = $('#example').DataTable({
            responsive: true
          })
          .columns.adjust()
          .responsive.recalc();
      });
    </script>
    <script>
        AOS.init();
      </script>
</body>
</html>