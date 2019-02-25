<?php namespace App\Http\Controllers;

use Mapper;

use Illuminate\Http\Request;
use App\ContactMessage;

class ContactMessageController extends Controller
{
    public $latitude = 9.407950;
    public $longtitude = 53.164447;

    public function index()
    {
        Mapper::map($this->longtitude, $this->latitude, [
            'zoom' => 10,
            'markers' => [
                'title' => 'OHLAND-Warensicherungs-Technologie',
                'animation' => 'DROP'
            ],
            'clusters' => [
                'size' => 10,
                'center' => true,
                'zoom' => 20
            ]
        ])->informationWindow($this->longtitude, $this->latitude, 'OHLAND Warensicherungs-Technologie<br>Inhaber Bernd Ohland<br>Zum Heidhorst 6<br>27383 Scheeßel / Westerholz<br>fon +49 (4263) 98 35 83 - 0<br>fax +49 (4263) 98 35 83 - 1<br><a href="mailto:info@ohland-gmbh.de" title="info@ohland-gmbh.de">info@ohland-gmbh.de</a>', [
            'markers' => [
                'animation' => 'DROP'
            ]
        ]);
        return view('kontakt');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'name' => 'string',
            'email' => 'email',
            'message' => 'string|required'
        ]);
        ContactMessage::create($request->all());
        return back()->with('success', 'Danke!');
    }
}