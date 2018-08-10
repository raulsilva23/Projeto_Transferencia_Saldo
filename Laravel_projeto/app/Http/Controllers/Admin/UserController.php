<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileFormRequest;



class UserController extends Controller
{
    public function profile()
    {
    	return view('site.profile.profile');
    }

    public function profileUpdate(UpdateProfileFormRequest  $request)
    {

        $data = $request->all();

        

        // $user = auth()->user();

    	

    	if($data['password'] != null)
    		$data['password'] = bcrypt($data['password']);
    	else
    		unset($data['password']);

          //$data['image'] = $user->image;

        $update = auth()->user()->update($data);


      /*  if ($request->hasFile('image') && $request->file('image')->isValid()) {
                if($user->image)
                    $name = $user->image;
                else
                    $name = $user->id.kebab_case($user->name);

                $extenstion = $request->image->extension();
                $nameFile = "{$name}.{$extenstion}";
                $data['image'] = $nameFile;
                  
                $upload = $request->image->storeAs('users', $nameFile);



                if(!$upload)
                    return redirect()
                                   ->back()
                                   ->with('error', 'Falha ao fazer o upload da imagem');
 
        } 


*/

    	//$update = $UserController->update($data);

    	if($update)
    		return redirect()
    	                   ->route('profile')
    	                   ->with('success', 'sucesso ao atualizar o perfil');
    	     return redirect()
    	                   ->back()
    	                   ->with('error', 'falha ao atualizar o perfil');  
                                         

    }

}

