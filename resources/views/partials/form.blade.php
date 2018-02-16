<form action="/orders" method="POST">
    {{ csrf_field() }}
    
    <div class="form-group">
        <label for="firstname">Kiekis:</label>
        <input type="text" class="form-control" name="quantity" required id="quantity">
    </div>

    <div class="form-group">
        <label for="firstname">Spalva:</label>
        <select class="form-control" name="color" required>
            <option value="">Pasirinkite...</option>
            <option value="Auksinė">Auksinė</option>
            <option value="Kosminė pilka">Kosminė pilka</option>
            <option value="Rausvojo aukso">Rausvojo aukso</option>
            <option value="Sidabrinė">Sidabrinė</option>
        </select>
    </div>

    <div class="form-group">
        <label for="firstname">Baterija:</label>
        <select class="form-control" name="battery" required id="battery">
            <option value="">Pasirinkite...</option>
            <option value="32">32 GB</option>
            <option value="128">128 GB</option>
        </select>
    </div>

    <div class="form-group">
        <label for="firstname">Vardas:</label>
        <input type="text" class="form-control" name="firstname" required>
    </div>

    <div class="form-group">
        <label for="firstname">Pavardė:</label>
        <input type="text" class="form-control" name="lastname" required>
    </div>

    <div class="form-group">
        <label for="firstname">El. paštas:</label>
        <input type="email" class="form-control" name="email" required>
    </div>

    <div class="form-group">
        <label for="firstname">Miestas:</label>
        <input type="text" class="form-control" name="city" required>
    </div>
    
    <div class="form-group">
        <label for="firstname">Adresas:</label>
        <input type="text" class="form-control" name="address" required>
    </div>
    
    <div class="form-group">
        <label for="firstname">Pašto kodas:</label>
        <input type="text" class="form-control" name="postalcode" required>
    </div>

    <div class="form-group">
        <label for="firstname">Telefono numeris:</label>
        <input type="text" class="form-control" name="phonenumber" required>
    </div>

    <p id="price"></p>

    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Užsisakyti</button>
    </div>

    <div class="form-group">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</form>