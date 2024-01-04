<html>
    <body>
        {{-- output (echo) dados escaped --}}
        {{ $message }}
        {{-- output (echo) dados unescaped --}}
        {!! $message !!}
    </body>
</html>