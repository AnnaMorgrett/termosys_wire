<!DOCTYPE html>
`

<head>
    <title>Document</title>
</head>

<body>
    {{-- <select> --}}
        @foreach ($tables as $key => $value)
            <table>
                <tr>
                    <th>Temperature Kolam 1</th>
                    <th>Temperature Kolam 2</th>
                    <th>Temperature Kolam 3</th>
                </tr>
                <tr>
                    <td value="{{ $value->id }}">{{ $value->temp_1 }}</td>
                    <td value="{{ $value->id }}">{{ $value->temp_2 }}</td>
                    <td value="{{ $value->id }}">{{ $value->temp_3 }}</td>
                </tr>
            </table>
            {{-- <option value="{{ $value->id }}">{{ $value->ph_1 }}</option> --}}
        @endforeach
    {{-- </select> --}}
</body>

</html>
