<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = [
            ['id' => 1, 'nom' => 'Téléviseur Samsung 4K', 'prix' => 999.99, 'quantité' => 25, 'categorie' => 'tech'],
            ['id' => 2, 'nom' => 'Smartphone iPhone 13 Pro', 'prix' => 1299.99, 'quantité' => 50, 'categorie' => 'tech'],
            ['id' => 3, 'nom' => 'Ordinateur portable MacBook Air', 'prix' => 1299.99, 'quantité' => 30, 'categorie' => 'tech'],
            ['id' => 4, 'nom' => 'Montre connectée Apple Watch Series 7', 'prix' => 399.99, 'quantité' => 40, 'categorie' => 'tech'],
            ['id' => 5, 'nom' => 'Console de jeux vidéo PlayStation 5', 'prix' => 499.99, 'quantité' => 20, 'categorie' => 'tech'],
            ['id' => 6, 'nom' => 'Ensemble de meubles de salon', 'prix' => 1499.99, 'quantité' => 15, 'categorie' => 'meubles'],
            ['id' => 7, 'nom' => 'Aspirateur robot Roomba', 'prix' => 299.99, 'quantité' => 35, 'categorie' => 'maison'],
            ['id' => 8, 'nom' => 'Machine à café automatique', 'prix' => 799.99, 'quantité' => 10, 'categorie' => 'maison'],
            ['id' => 9, 'nom' => 'Ensemble de bagages Samsonite', 'prix' => 399.99, 'quantité' => 25, 'categorie' => 'voyage'],
            ['id' => 10, 'nom' => 'Tondeuse à gazon électrique', 'prix' => 199.99, 'quantité' => 30, 'categorie' => 'jardin']
        ];
        return view('produits', compact('produits'));
    }

    public function show($id)
    {
        $produit = collect([
            ['id' => 1, 'nom' => 'Téléviseur Samsung 4K', 'prix' => 999.99, 'quantité' => 25, 'categorie' => 'tech'],
            ['id' => 2, 'nom' => 'Smartphone iPhone 13 Pro', 'prix' => 1299.99, 'quantité' => 50, 'categorie' => 'tech'],
            ['id' => 3, 'nom' => 'Ordinateur portable MacBook Air', 'prix' => 1299.99, 'quantité' => 30, 'categorie' => 'tech'],
            ['id' => 4, 'nom' => 'Montre connectée Apple Watch Series 7', 'prix' => 399.99, 'quantité' => 40, 'categorie' => 'tech'],
            ['id' => 5, 'nom' => 'Console de jeux vidéo PlayStation 5', 'prix' => 499.99, 'quantité' => 20, 'categorie' => 'tech'],
            ['id' => 6, 'nom' => 'Ensemble de meubles de salon', 'prix' => 1499.99, 'quantité' => 15, 'categorie' => 'meubles'],
            ['id' => 7, 'nom' => 'Aspirateur robot Roomba', 'prix' => 299.99, 'quantité' => 35, 'categorie' => 'maison'],
            ['id' => 8, 'nom' => 'Machine à café automatique', 'prix' => 799.99, 'quantité' => 10, 'categorie' => 'maison'],
            ['id' => 9, 'nom' => 'Ensemble de bagages Samsonite', 'prix' => 399.99, 'quantité' => 25, 'categorie' => 'voyage'],
            ['id' => 10, 'nom' => 'Tondeuse à gazon électrique', 'prix' => 199.99, 'quantité' => 30, 'categorie' => 'jardin']
        ])->firstWhere('id', $id);

        if (!$produit) {
            return to_route('produits.index');
        }

        return view('details', compact('produit'));
    }
}
