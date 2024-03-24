<!DOCTYPE html>
<html>

<head> </head>

<body>
    @for ($i = 0; $i < 3; $i++)
        @include('includes.nav')
    @endfor
    @isset($testId)
        <h1>Hello {{ $testId }}</h1>
    @endisset
    @empty($testId)
        <h1>No testId</h1>
    @endempty
    <h1>Produits</h1>
    {{-- @if (count($produits) > 0)
        @foreach ($produits as $item)
            <li>{{ $item }}</li>
        @endforeach
    @else
        <p>No Products</p>
    @endif --}}

    @isset($produits)
        @forelse ($produits as $item)
            <li>{{ $item }}</li>
        @empty
            <p>No Products</p>
        @endforelse
    @endisset

    @isset($testId)
        @switch($testId)
            @case(1)
                Id is 1
            @break

            @case(2)
                Id Is 2
            @break

            @default
                Not 1 or 2
        @endswitch
    @endisset

    {{-- @foreach ($collection as $item)
    @endforeach --}}
</body>

</html>
