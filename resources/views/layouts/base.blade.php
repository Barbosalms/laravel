<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--CSS--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--JS--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div class="container">
        <h1>T94 - Olá Mundo!</h1>
        <hr>
        @yield('content')
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quaerat expedita cumque perspiciatis, commodi necessitatibus pariatur tempora cum at odit eum deserunt quas, laboriosam odio assumenda inventore beatae vitae. Cumque.</p>
        <p>Placeat, expedita odio soluta, asperiores omnis recusandae voluptates sed totam quisquam autem, voluptate accusantium animi. Reiciendis nesciunt molestiae assumenda! Ipsam, delectus amet! Laborum atque voluptatem, facere rerum accusantium velit. Atque?</p>
        <p>Nobis similique officiis voluptatum nemo autem explicabo doloremque aperiam, provident voluptatibus, tenetur, laborum incidunt soluta voluptatem tempore quos eaque quisquam voluptate eos a rem iusto ad modi sit? At, corrupti.</p>
        <p>Ut nemo consequuntur animi ex at, accusamus vel, autem cupiditate nesciunt, eaque obcaecati tenetur debitis. Neque maxime temporibus tenetur quam veniam ea ab at veritatis architecto, amet esse libero reprehenderit?</p>
        <p>Accusantium molestiae error reprehenderit distinctio. Nobis rem ut itaque quod unde, sit eveniet at eligendi, hic excepturi modi, est expedita blanditiis? Quod facilis repellendus, mollitia numquam maxime sit ratione dolor.</p>
    </div>
    <footer>
        <p class="fs-1 text-center"> T94 </p>
    </footer>
</body>
</html>