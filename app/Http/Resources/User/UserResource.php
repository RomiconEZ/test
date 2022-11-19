<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;

/**
 * Transform the resource into an array.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array
 */

class UserResource extends JsonResource
{

    public function toArray($request)
    {
        $user = $this->resource;
        //$clinic = Clinic();
        return [
            'id'            => $user->id,
            'email'         => $user->email,
            'name'          => $user->Name,
            'surname'       => $user->Surname,
            'patronymic'    => $user->Patronymic,
            'birthdate'     => $user->BirthDate,
            'sex'           => $user->Sex,
            //'ClinicID'      => $user->ClinicID,
            'region'        => "Северо-западный регион",
            'city'        => "Санкт-Петербург'",
            'placeOfWork'        => "СПБГУ",

            //'RoleID'        => $user->RoleID,
            'role'        => $user->RoleID,

            //'OccupationID'  => $user->OccupationID,
            'occupation'  => "главный врач",

            'workExperience'=> $user->WorkExperience,
        ];
    }
}
