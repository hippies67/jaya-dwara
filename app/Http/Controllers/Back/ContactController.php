<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Web;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function index()
    {
        $data['web'] = Web::all();
        $data['list'] = Contact::orderBy('created_at','desc')->get();

        return view('back.contact.index', $data);
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
       
        $contact->delete()
            ? Alert::success('Berhasil', "Data telah berhasil dihapus.")
            : Alert::error('Error', "Data gagal dihapus!");

        return redirect()->back();
    }
}
