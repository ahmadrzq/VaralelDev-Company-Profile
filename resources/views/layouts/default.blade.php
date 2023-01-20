<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.frontsite.meta')
    <title>VaralelDev</title>
    @include('includes.frontsite.style')
</head>

<body>
    @include('components.frontsite.header')
    @include('sections.frontsite.intro')
    @yield('content')
    @include('components.frontsite.footer')
    @include('components.frontsite.script')
</body>

</html>
