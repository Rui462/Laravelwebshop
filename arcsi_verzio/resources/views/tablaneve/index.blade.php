<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adatok Feltöltése</title>
</head>
<body>
    <h1>Adatok Feltöltése</h1>

    <!-- Sikeres mentés üzenet -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Űrlap új adatok feltöltéséhez -->
    <form action="{{ route('tablaneve.store') }}" method="POST">
        @csrf
        <label for="nev">Név:</label>
        <input type="text" id="nev" name="nev" required>
        
        <label for="kor">Kor:</label>
        <input type="number" id="kor" name="kor" required>

        <button type="submit">Hozzáadás</button>
    </form>

    <h2>Mentett adatok</h2>
    <ul>
        @foreach ($emberek as $ember)
            <li>{{ $ember->nev }} - {{ $ember->kor }} éves</li>
        @endforeach
    </ul>
</body>
</html>
