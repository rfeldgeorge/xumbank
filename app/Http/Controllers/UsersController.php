<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function CreateUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $creator = auth::user()->id;
        DB::transaction(function () use ($request, $creator){
            $user = User::create([
                'name' => $request->name,
                'lname' => $request->lname,
                'creator_id' => $creator,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            $role = Role::select('id')->where('name', 'Retail Customer')->first();
            $user->roles()->attach($role);
            $accountNumber = rand(10000000,99999999);
            $rand = rand(0,9); 
            $transaction = Account::create([
                'user_id' => $user->id,
                'account_number' => $accountNumber.$rand,
                'status' => false,
            ]);

            Profile::create(['user_id' => $user->id]);

            if (Hash::check($request->password, $user->password)) {
                $user = [
                    'name' => $request->lname,
                    'email' => $request->email,
                    'password' => $request->password,
                    'accNumber' => $transaction->account_number
                ];
                // Mail::to([$request->email])->send(new WelcomeMail($user));
            }
        });
        return response('Account Created Successfully', 200);
    }

    public function Users()
    {
        $users = User::all();
        return response($users, 200);
    }

    public function EditUser(User $user)
    {
        // $roles = Role::where('name', '!=', 'superadmin')->get();
        // return response($role, 200)
    }

    public function UpdateUser(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'lname' => $request->lname,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        $user->roles()->sync($request->roles);
        return response('You\'ve Succesfffully Updated user', 200);
    }

    public function destroy(User $user)
    {
       $user->roles()->detach();
       $user->account()->delete();
       $user->delete();
       return response('You\'ve Succesfffully deleted user', 204);
    }
}
