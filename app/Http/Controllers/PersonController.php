<?php

namespace App\Http\Controllers;

use App\Enums\PersonGenderEnum;
use App\Http\Requests\PersonRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = PersonGenderEnum::cases();

        return view('person.create',compact('genders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        $validated = $request->validated();

        $person = Person::create([
            'name' => $validated['name'],
            'birthday' => $validated['birthday'],
            'gender' => $validated['gender'],
        ]);

        $person->address()->create([
            'person_id' => $person->id,
            'address' => $validated['address'],
            'post_code' => $validated['post_code'],
            'city_name' => $validated['city_name'],
            'country_name' => $validated['country_name'],
        ]);

        return redirect()->route('home', $person->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        $genders = PersonGenderEnum::cases();

        return view('person.edit',compact('person','genders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, Person $person)
    {
        $validated = $request->validated();

        $person->update([
            'name' => $validated['name'],
            'birthday' => $validated['birthday'],
            'gender' => $validated['gender'],
        ]);

        $person->address()->update([
            'address' => $validated['address'],
            'post_code' => $validated['post_code'],
            'city_name' => $validated['city_name'],
            'country_name' => $validated['country_name'],
        ]);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person->delete();

        return redirect()->route('home');
    }
}
