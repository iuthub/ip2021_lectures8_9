<?php


namespace App;


use App\Models\Category;
use App\Models\Contact;
use App\Models\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Session\Store;

class ContactsRepository
{
//    private $session;

    public function __construct(Store $session) {
//        $this->session = $session;
//        $this->session->put('contacts', collect([]));
//        $this->session->put('maxContactId', 0);
//        $this->session->put('maxNoteId', 0);
    }

    public function getAll() {
        return Contact::all();
    }

    public function get($id) {
//        $contacts = $this->getAll();
//        return $contacts->firstWhere('id', $id);
        return Contact::find($id);
    }

    public function add($fullname, $email, $categories)
    {
//        $contacts = $this->session->get('contacts');
//
//        // create new contact
//        $newId = $this->session->increment('maxContactId');
//        $contact['id'] = $newId;
//        $contacts->push($contact);
//
//        // save it in session
//        $this->session->put('contacts', $contacts);

        $c = new Contact([
            'fullname' => $fullname,
            'email' => $email
        ]);
        $c->save();

        foreach($categories as $cat) {
            $catId = Category::where('name', $cat)->first()->id;
            $c->categories()->attach($catId);
        }
    }

    public function delete($id)
    {
//        $contacts = $this->session->get('contacts');
//
//        // contacts without given id
//        $contacts = $contacts->where('id', '!=', $id);
//
//        // save it back to session
//        $this->session->put('contacts', $contacts);
        Contact::find($id)->delete();
    }

    public function addNote($id, $note)
    {
//        $contacts = $this->session->get('contacts');
//        $contact = $contacts->firstWhere('id', $id);
//
//        $notes = $contact['notes'];
//        $newNoteId = $this->session->increment('maxNoteId');
//
//        $note['id'] = $newNoteId;
//        $notes->push($note);
//
//        // save it back to session
//        $this->session->put('contacts', $contacts);
        $c = $this->get($id);
        $c->notes()->save(new Note(['note'=>$note]));
    }

    public function deleteNote($id, $noteId)
    {
//        $contacts = $this->session->get('contacts');
//        $contact = $contacts->firstWhere('id', $id);
//
//        // remove notes
//        $contact['notes'] = $contact['notes']->where('id', '!=', $noteId);
//
//        $contacts->transform(function($c) use ($id, $contact) {
//            if ($c['id']==$id) {
//                return $contact;
//            } else {
//                return $c;
//            }
//        });
//
//        // save it back to session
//        $this->session->put('contacts', $contacts);
        $c = $this->get($id);
        $c->notes()->find($noteId)->delete();
    }


}
