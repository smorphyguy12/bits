<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }} | BITS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    @include('partials.head-css')

    @stack('styles')
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="78">
    @include('partials.chatbot')

    @include('partials.topbar')

    <!-- Main Content -->
    @yield('content')

    @include('partials.footer')

    <!-- Chatbot -->
    <!-- Back to top -->
    <a href="#" onclick="topFunction()" class="back-to-top-btn btn btn-blue mb-3 mx-5" id="back-to-top-btn"><i
        class="mdi mdi-chevron-up"></i></a>

    @include('partials.footer-scripts')

    @stack('scripts')
</body>

</html>
