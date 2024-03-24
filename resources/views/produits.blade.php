@include('includes.nav')

<ul>
    @foreach ($produits as $item)
        <li>{{ $item['nom'] }}</li>
    @endforeach
</ul>
