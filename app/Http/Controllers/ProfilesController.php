<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ProfilesController extends Controller
{
    public function getIndex()
    {
      //get the pets
      $pets = \App\Pet::where('user_id', '=', \Auth::id())->orderBy('id', 'DESC')->get();
      return view('profile.index')->with('pets', $pets);
      //return 'here is the profile';
    }
    public function getAddPet()
       {
           $pet = new \App\Pet();
           return view('profile.addpet');
       }
       public function postPet(Request $request) {
         $this->validate(
           $request,
           [
               'petName' => 'required|min:5',
               'breed' => 'required',
             ]
           );
      $pets = new \App\Pet();
      $pets->petName = $request->petName;
      $pets->breed = $request->breed;
      $pets->photo = $request->photo;
      $pets->user_id = \Auth::id();
      $pets->save();
      return redirect('/profile');
      //echo 'posting new pet';
    }
    public function postProfile(Request $request)
    {
      //  \Session::flash('flash_message', 'Welcome!');
      //return view('profile.index');
    }
    public function getProfile()
    {
        //return view('profile.index');
    }
    public function getEdit($pets_id) {
           $pets = \App\Pet::find($pets_id);
           return view('profile.edit')->with('pets', $pets);
           //echo "what is wrong?";
       }
    public function postEdit(Request $request) {
           $pets = \App\Pet::find($request->id);
           $pets->petName = $request->petName;
           $pets->breed = $request->breed;
           $pets->photo = $request->photo;
           //$pets->user_id = \Auth::id();
           $pets->save();
           return redirect('/profile');
       }
        public function getConfirmDelete($pets_id) {
           $pets = \App\Pet::find($pets_id);
           return view('profile.delete')->with('pets', $pets);
       }
       public function getDoDelete($pets_id) {
              $pets = \App\Pet::find($pets_id);
              $pets->delete();
              \Session::flash('flash_message','Your Pet has been deleted.');
              return redirect('/profile');
          }
    public function destroy($id)
    {
        //
    }
}
