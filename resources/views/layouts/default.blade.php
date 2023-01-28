<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.frontsite.meta')
    <title>Raverse.dev</title>
    @include('includes.frontsite.style')
</head>

<body>
    @include('components.frontsite.header')
    @yield('content')
    @include('components.frontsite.footer')
    @include('includes.frontsite.script')
</body>

</html>
