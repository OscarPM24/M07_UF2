<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centres</title>
    <style>
        body {
            font-family: Verdana;
        }
        h1 {
            text-decoration: underline;
        }
        table, th, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        table {
            margin-bottom: 10px;
        }
        a {
            text-decoration: none;
            font-size: 20px;
        }
        a:hover {
            color: red;
        }
    </style>
</head>
    <!-- Vista que llista els nostres centres -->
    <body>
        <h1>LLISTA CENTRES</h1>
        <!-- Taula per mostrar els resultats -->
        <table> 
            <!-- Capceleres de les columnes -->
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ADRESS</th>
                <th>CP</th>
                <th>CITY</th>
            </tr>
            <!-- ------------------------------------------------ -->
            <!-- --  Lògica per mostrar les dades dels centres -- -->
            <!-- Doble foreach aniuat per recorrer ambdós arrays  -->
            <!-- ------------------------------------------------ -->
            <!-- Explicació:                                      -->
            <!-- El primer loop ens permet accedir al valor que   -->
            <!-- conté l'array $centres (arrays associatius).     -->
            <!-- El segon loop ens permet accedir als atributs de -->
            <!-- cada array associatiu. Obtem per un altre ús de  -->
            <!-- foreach, ja què mostrarem tots els atributs i em -->
            <!-- sembla una forma més pràctica d'executar-ho.     -->
            <!-- ------------------------------------------------ -->
            <!-- Alternativa:                                     -->
            <!-- Podem accedir a l'array associatiu ($centre) per -->
            <!-- mitjà de la seva clau amb $centre['clau']. Com   -->
            <!-- he dit, però, al voler mostrar totes les propie- -->
            <!-- tats, considero més eficient aquest mètode.      -->
            <!-- ------------------------------------------------ -->
            <!-- Consideració:                                    -->
            <!-- La manera proposa per l'exercici era accedir de  -->
            <!-- següent forma a l'array associativa:             -->
            <!--    - $array(és la variable que li pasem)         -->
            <!--    - ->id(és la clau del valor que volem mostrar)-->
            <!--    - $array->id hauria de mostrar "1"            -->
            <!--      pero retorna undefined                      -->
            <!-- ------------------------------------------------ -->
            @foreach($centres as $centre)
                <tr>
                @foreach($centre as $atribut)
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