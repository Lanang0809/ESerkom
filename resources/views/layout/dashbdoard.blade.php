<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/img/logopnj.png" type="image/x-icon">
  <title>Dashboard Admin</title>
  
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Trix Editor -->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
  </style>
</head>

<body class="bg-gray-100">
  <!-- Navbar -->
  @include('partials.navbar-dashboard')
  <!-- End Navbar -->

  <div class="flex">
    <!-- Sidebar -->
    @include('partials.sidebar')
    <!-- End Sidebar -->

    <!-- Main Content -->
    <main class="flex-1 relative bg-white border-gray-300 shadow-lg rounded-lg mt-16"> <!-- Adjust mt-16 based on navbar height -->
      <div class="container mx-auto py-6 px-4">
        @yield('container')
      </div>
    </main>
  </div>

  <!-- Core JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    // Custom JavaScript (if necessary)
  </script>
</body>

</html>
