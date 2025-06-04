<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Berita</title>
</head>
<body>
  @include('section.navbar')
  <section id="berita" class="py-20 bg-white">
        @include('section.berita')
  </section>
</body>
</html>