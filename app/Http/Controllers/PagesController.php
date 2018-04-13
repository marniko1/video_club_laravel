<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function allRentals() {
		// $this->data['title'] = 'Rentals';
		// $this->data['rentals'] = DBRentals::getAllRentals();
		$rentals = DB::table('rentals as r')
					->join('clients as c', 'r.id_client', '=', 'c.id')
					->select('r.id', 
							DB::raw("concat(c.first_name, ' ', c.last_name) as client"),
							'r.totals',
							'r.created', 
							'r.due', 
							'r.opened'
						)
					->get();
		return view('rentals', compact('rentals'));
	}
	// public function singleRental($id) {
	public function singleRental ($id) {
		// $this->data['title'] = 'Single Rental';
		// $this->data['rental'] = DBRentals::getSingleRental($id);
		$rental = DB::table('rentals as r')
					->join('rentals_films as rf', 'r.id', '=', 'rf.id_rental')
					->join('films as f', 'f.id', '=', 'rf.id_film')
					->join('clients as c', 'r.id_client', '=', 'c.id')
					->select('f.title', 
							'f.price',
							'r.totals', 
							'r.created', 
							'r.due', 
							'r.opened',
							DB::raw("concat(c.first_name, ' ', c.last_name) as client")
						)
					->where('r.id', $id)
					->get();
		return view('rental', compact('rental'));
	}
}



// $users = DB::table('users')
//             ->join('contacts', 'users.id', '=', 'contacts.user_id')
//             ->join('orders', 'users.id', '=', 'orders.user_id')
//             ->select('users.*', 'contacts.phone', 'orders.price')
//             ->get();

// $sql = "select f.title, f.price, r.totals, r.created, r.due, r.opened, concat(c.first_name, \" \", c.last_name) as 		client from rentals as r 
// 				join rentals_films as rf 
// 				on r.id = rf.id_rental 
// 				join films as f 
// 				on f.id = rf.id_film 
// 				join clients as c 
// 				on r.id_client = c.id 
// 				where r.id=".$id;