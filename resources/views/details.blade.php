{{-- @isset($produit) --}}
    <h1>Details</h1>
    <p>id: {{ $produit['id'] }}</p>
    <p>nom: {{ $produit['nom'] }}</p>
    <p>prix: {{ $produit['prix'] }}</p>
    <p>quantité: {{ $produit['quantité'] }}</p>
    <p>categorie: {{ $produit['categorie'] }}</p>
{{-- @endisset --}}
