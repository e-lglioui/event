<x-app-layout>
    <div class="bg-cover bg-center bg-fixed" style="background-image: url('https://as2.ftcdn.net/v2/jpg/00/02/02/57/1000_F_2025793_X7MVoTH4EOCzeobGZsWBUm5blQj12C.jpg')">
        <div class="h-screen flex justify-center items-center">
            <div class="bg-white mx-4 p-8 rounded shadow-md w-full md:w-1/2 lg:w-1/3">
                <h1 class="text-3xl font-bold mb-8 text-center">Create ticket</h1>
                @extends('layouts.app')

                @section('content')
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Create Ticket</div>
                
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('tickit.store') }}">
                                            @csrf
                
                                            <div class="form-group">
                                                <label for="type">Ticket Type</label>
                                                <select name="type" id="type" class="form-control">
                                                    <option value="VIP">VIP</option>
                                                    <option value="Standard">Standard</option>
                                                    <option value="Basic">Basic</option>
                                                </select>
                                            </div>
                
                                            <div class="form-group">
                                                <label for="validation_method">Validation Method</label>
                                                <select name="validation_method" id="validation_method" class="form-control">
                                                    <option value="Manual">Manual</option>
                                                    <option value="Automatic">Automatic</option>
                                                </select>
                                            </div>
                
                                            <div class="form-group">
                                                <label for="prix">Price</label>
                                                <input type="number" name="prix" id="prix" class="form-control" required>
                                            </div>
                
                                            <div class="form-group">
                                                <label for="quantite">Quantity</label>
                                                <input type="number" name="quantite" id="quantite" class="form-control" required>
                                            </div>
                
                                            <div class="form-group">
                                                <label for="valider">Validation</label>
                                                <input type="checkbox" name="valider" id="valider"> Validate automatically
                                            </div>
                
                                            <button type="submit" class="btn btn-primary">Create Ticket</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection
                
            </div>
        </div>
    </div>

</x-app-layout>    