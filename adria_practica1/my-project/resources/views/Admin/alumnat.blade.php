<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnat</title>
</head>
    <!-- Vista que llista el nostre alumnat -->
    <body>
        <h1>LLISTA ALUMNAT</h1>
        <!-- Taula per mostrar els resultats -->
        <table> 
            <!-- Capceleres de les columnes -->
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>SURNAME</th>
                <th>ROL</th>
                <th>EMAIL</th>
            </tr>
            <!-- ------------------------------------------------ -->
            <!-- --  Lògica per mostrar les dades dels alumnes -- -->
            <!-- Doble @foreach aniuat per recorrer ambdós arrays -->
            <!-- ------------------------------------------------ -->
            <!-- Explicació:                                      -->
            <!-- El primer loop ens permet accedir al valor que   -->
            <!-- conté l'array $alumnes (arrays associatius).     -->
            <!-- El segon loop ens permet accedir als atributs de -->
            <!-- cada array associatiu. Obtem per un altre ús de  -->
            <!-- foreach, ja què mostrarem tots els atributs i em -->
            <!-- sembla una forma més pràctica d'executar-ho.     -->
            <!-- Alternativa:                                     -->
            <!-- Podem accedir a l'array associatiu ($alumne) per -->
            <!-- mitjà de la seva clau amb $alumne['clau']. Com   -->
            <!-- he dit, però, al voler mostrar totes les propie- -->
            <!-- tats, considero més eficient aquest mètode.      -->
            @foreach($alumnes as $alumne)
                <tr>
                @foreach($alumne as $atribut)
                <!-- $atribut equival a cada propietat de l'array -->
                <td>{{ $atribut }}</td>
                @endforeach
                </tr>
            @endforeach
        </table>
        <!-- Ruta que redirigeix a 'signin' el qual hem declarat -->
        <!-- amb name->('back'). Aquesta ruta està declarada en  -->
        <!-- admin.php                                           -->
        <a href="{{ route('back') }}">ADMIN VISTA</a>
    </body>
</html>