<!DOCTYPE html>
<html lang="en">
<head>
    @include('User..head')
</head>

<body > <!--class="animsition" -->

<!-- Header -->
@include('User.header')

<!-- Cart -->


@yield('content')

@include('User.footer')

</body>
</html>