<?php

namespace App\Http\Controllers;

use App\ContactsRepository;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    private $repo;
    public function __construct(ContactsRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index() {
        $contacts = $this->repo->getAll();
        return view('welcome', ['contacts'=> $contacts]);
    }

    public function add(Request $request) {
        $request->validate([
            'fullname' => 'required|min:5|regex:/^[a-z ]+$/i',
            'email' => 'required|email:rfc',
            'categories' => 'array|required'
        ]);

        $this->repo->add(
            $request->input('fullname'),
            $request->input('email'),
            collect($request->input('categories')));

        return response()->redirectToRoute('index')->with('info', 'Added!');
    }

    public function delete($id) {
        $this->repo->delete($id);
        return response()->redirectToRoute('index')->with('info', 'Removed!');
    }

    public function addNote($id, Request $request) {
        $this->repo->addNote($id, $request->input('note'));
        return response()->redirectToRoute('index');
    }

    public function deleteNote($id, $noteId) {
        $this->repo->deleteNote($id, $noteId);
        return response()->redirectToRoute('index');
    }



}
