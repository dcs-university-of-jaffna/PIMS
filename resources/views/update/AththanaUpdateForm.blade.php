<html>
<head>
    <style>
        .round3 {
            border: 2px solid red;
            border-radius: 12px;
        }
    </style>
</head>
<body>
<div class="round3">
    <form action="/update/{{$incident->id}}"  enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        phnNo:
        <input id="phn" type="text" name="phn" value="{{old('phn') ?? $incident->Patient->phn}}">
        <br>
    </form>
    <form action="/update/{{$incident->id}}"  enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        Date of ingestion:
        <input id="date" type="date" name="date" value="{{old('date') ?? $incident->date}}">
        <br>
        <br>
        Time of ingestion:
        <input id=" Time of ingestion" type="time" name=" Time of ingestion" value="{{old('date') ?? $incident->time}}">
        <br>
        <br>
        Region of ingestion:
        <input id=" Region of ingestion" type="text" name="Region of ingestion" value="{{old('area') ?? $incident->area}}">
        <br>
        <br>
        Part of plant :
        <input id=" Part of plant " type="text" name=" Part of plant " value="{{old('plant_part') ?? $natural->Flora->plant_part}}">
        <br>
        <br>
        <input id=" Time of ingestion" type="time" name=" Time of ingestion" value="{{old('date') ?? $incident->time}}">
        <br>
        <br>
        <input id=" Time of ingestion" type="time" name=" Time of ingestion" value="{{old('date') ?? $incident->time}}">
        <br>
        <br>
                <input id=" Time of ingestion" type="time" name=" Time of ingestion" value="{{old('date') ?? $incident->time}}">
        <br>
        <br>

    </form>
    
</div>