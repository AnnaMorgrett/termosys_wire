<!DOCTYPE html>
`<head>
    <title>Document</title>
</head>

<body>
    <select>
        @foreach ($tables As $key => $value)
            <option value="{{ $value->id }}">{{ $value->ph_1 }}</option>
        @endforeach
    </select>
</body>

</html>
