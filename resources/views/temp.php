$livres= Livre::orderBy('id', 'desc')->take(10)->get();
