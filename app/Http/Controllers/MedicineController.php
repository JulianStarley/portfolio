<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        // Logic to retrieve all medicines
    }

    public function store(Request $request)
    {
        // Logic to create a new medicine
    }

    public function show(Medicine $medicine)
    {
        // Logic to retrieve a specific medicine
    }

    public function update(Request $request, Medicine $medicine)
    {
        // Logic to update a specific medicine
    }

    public function destroy(Medicine $medicine)
    {
        // Logic to delete a specific medicine
    }
}
