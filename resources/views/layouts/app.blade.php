<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name')}}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

<header>

    @includeIf('layouts._menu-principal')

    @includeIf('layouts._menu-mobile')

</header>

<main>
    <div class="container">
        <h3>{{ config('app.name')}}</h3>
        <div class="divider"></div>

        @include('layouts._breadcrumb')

        @include('layouts._mensagem-erro')

        @yield('content')
    </div>
</main>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ asset('js/materialize.js') }}"></script>

<script>
    M.AutoInit();
    $(document).on('click', '.modal-trigger', function () {
        $('#id-edit').val($(this).data('id'));
        $('#name-edit').val($(this).data('name'));
        $('#cod-edit').val($(this).data('cod'));
        $('#price-edit').val($(this).data('price'));
        $('#id-delete').val($(this).data('id'));
        $('#name-delete').val($(this).data('name'));
    });
</script>

@yield('js')

</body>
</html>