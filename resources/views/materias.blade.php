@extends('layouts.app')
@section('titulo', 'Mis Materias')

@section('contenido')
    <h3>Mis materias</h3>
    <table border="3">
        <tr>
            <th>Materia</th>
            <th>Código</th>
            <th>Créditos</th>
            <th>Nota</th>
            <th>Estados</th>
        </tr>
         <tr>
            <td>Prog. Avanzada</td>
            <td>SIS-500</td>
            <td>5</td>
            <td>82</td>
            <td>Muy Bueno</td>
        </tr>
        <tr>
            <td>Fisica aplicada</td>
            <td>SIS-300</td>
            <td>4</td>
            <td>61</td>
            <td>Regular</td>
        </tr>
        <tr>
            <td>Sistemas opertivos</td>
            <td>SIS-600</td>
            <td>6</td>
            <td>92</td>
            <td>Excelente</td>
        </tr>
        <tr>
            <td>Ecuaciones diferenciales</td>
            <td>SIS-100</td>
            <td>4</td>
            <td>75</td>
            <td>Bueno</td>
        </tr>
        <tr>
            <td>Base de datos</td>
            <td>SIS-500</td>
            <td>5</td>
            <td>82</td>
            <td>Muy Bueno</td>
        </tr>
        <tr>
            <td>Lenguaje</td>
            <td>SIS-501</td>
            <td>8</td>
            <td>90</td>
            <td>Muy Bueno</td>
        </tr>
    </table>
@endsection