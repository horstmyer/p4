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
    public function getCreate()
       {
           return view('auth.register');
           //return 'sign up form';
       }
    public function postCreate()
    {
        return view('auth.register');
        //return 'sign up form';
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
        }
     public function postEdit(Request $request) {
            $pets = \App\Pet::find($request->id);
            $pets->petName = $request->petName;
            $pets->breed = $request->breed;
            $pets->photo = $request->photo;
            $pets->save();
            return redirect('/profile'.$request->id);
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
