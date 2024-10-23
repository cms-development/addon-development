<?php 

namespace RogerthatBe\Like\Http;

use Illuminate\Http\Request;
use Statamic\Facades\Collection;
use Statamic\Http\Controllers\Controller;

class LikeCPController extends Controller {
    public function index() {
        return view('like::cp.index');
    }
    public function settings() {

        $allCollections = Collection::all();

        return view('like::cp.settings', [
            'collections' => $allCollections
        ]);
    }   

    public function addFieldsToCollection(Request $request) {
        $collectionHandle = $request->collection;

        // get the collection
        $collection = Collection::find($collectionHandle);
        
        // get the default blueprint
        $defaultBP = $collection->entryBlueprints()->first();

        $defaultBP->ensureField('like', [
            'type' => 'integer',
            'display' => 'Like',
            'instructions' => 'Enable likes for this entry',
        ]);

        $defaultBP->save();

        return redirect()->back()->with('succes', 'Greaaaat succes!');
    }
}