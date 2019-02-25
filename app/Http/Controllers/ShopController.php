<?php namespace App\Http\Controllers;

class ShopController extends Controller
{
    public function index()
    {
        $viewData = [
            'products' => [
                [
                    'img' => asset('img/waechter1.jpg'),
                    'alt' => 'Kabinenwaechter kaufen bei Amazon',
                    'brutto' => 29.99,
                    'name' => 'Kabinenwächter',
                    'url' => 'https://www.amazon.de/Original-Maxi-Singles-Collection-Boytronic/dp/B00KIMHES6/ref=sr_1_2?ie=UTF8&qid=1512296958&sr=8-2&keywords=boytronic',
                    'desc' => 'Der Kabinenwächter, die sicherste Produktbeschreibung.'
                ],
                [
                    'img' => asset('img/waechter1.jpg'),
                    'alt' => 'Kabinenwaechter kaufen bei Amazon',
                    'brutto' => 29.99,
                    'name' => 'Kabinenwächter',
                    'url' => 'https://www.amazon.de/Original-Maxi-Singles-Collection-Boytronic/dp/B00KIMHES6/ref=sr_1_2?ie=UTF8&qid=1512296958&sr=8-2&keywords=boytronic',
                    'desc' => 'Der Kabinenwächter, die sicherste Produktbeschreibung.'
                ],
                [
                    'img' => asset('img/waechter1.jpg'),
                    'alt' => 'Kabinenwaechter kaufen bei Amazon',
                    'brutto' => 29.99,
                    'name' => 'Kabinenwächter',
                    'url' => 'https://www.amazon.de/Original-Maxi-Singles-Collection-Boytronic/dp/B00KIMHES6/ref=sr_1_2?ie=UTF8&qid=1512296958&sr=8-2&keywords=boytronic',
                    'desc' => 'Der Kabinenwächter, die sicherste Produktbeschreibung.'
                ]
            ]
        ];
        return view('shop', $viewData);
    }
}