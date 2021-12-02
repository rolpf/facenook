@section('recherche')

        <form id='formrecherche' action='index.php' method='GET'>
            <input type='hidden' name='action' value='recherche'>
            <input name='texterecherche' type='text' placeholder='Rechercher...' required>
            <input type='submit' value='Rechercher'>
        </form>
    </div>

@endsection