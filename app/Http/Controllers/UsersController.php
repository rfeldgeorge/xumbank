<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\JsonResponse;
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
            'username' => ['required', 'string', 'username', 'max:255', 'unique:users'],
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
                'username' => $request->username,
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
                    'username' => $request->username,
                    'password' => $request->password,
                    'accNumber' => $transaction->account_number
                ];
                // Mail::to([$request->email])->send(new WelcomeMail($user));
            }
        });
        return new JsonResponse(['message' => trans('Account Created Successfully')], 200);
    }

    public function Users()
    {
        if(Gate::denies('dashboardPermission')){
            return new JsonResponse(['message' => trans('Access denied')], 404);
        }
        $user = User::where('id', auth::user()->id)->first();
        if($user->hasRole('admin')){
            $users = User::where('creator_id', auth::user()->id)->get();
        }
        else
        {
            if($user->hasRole('superadmin')){
                $users = User::all();
            }
        }
        return new JsonResponse(['message' => trans($users)], 200);
    }

    public function EditUser(User $user)
    {
        if(Gate::denies('edit-user')){
            return new JsonResponse(['message' => trans('Access denied')], 404);
        }
        $user = Auth::user();
        if($user->hasRole('admin')){
            $roles = Role::where('name', '!=', 'superadmin')->get();
        }
        else
        {
            if($user->hasRole('superadmin')){
                $roles = Role::all();
            }
        }
        return new JsonResponse(['message' => trans([$roles, $users])], 200);
    }

    public function UpdateUser(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'lname' => $request->lname,
            'phone' => $request->phone,
            'email' => $request->email,
            'username' => $request->username,
        ]);
        $user->roles()->sync($request->roles);
        return new JsonResponse(['message' => trans('You\'ve Succesfffully Updated user')], 200);
    }

    public function destroy(User $user)
    {
        if(Gate::denies('delete-user')){
            return new JsonResponse(['message' => trans('Access denied')], 404);
        }
       $user->roles()->detach();
       $user->account()->delete();
       $user->delete();
       return new JsonResponse(['message' => trans('You\'ve Succesfffully deleted user')], 204);
    }
}
