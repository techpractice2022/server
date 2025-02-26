<?php

namespace App\Services;

use App\Models\Customer;

class CustomerService {

    // Fetches all customers, in desc order
    public function getAllCustomers() {
        return Customer::orderBy('id', 'desc')->get(); 
    }

    // Saves customer to database
    public function createCustomer(array $data) {
        return Customer::create($data);  
    }
}