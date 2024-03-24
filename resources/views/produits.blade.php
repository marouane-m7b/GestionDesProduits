@include('includes.nav')

<ul>
    @foreach ($produits as $item)
        <li><a href="{{ route('produits.show', ['id' => $item['id']]) }}">{{ $item['nom'] }}</a></li>
    @endforeach
</ul>
