<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
    }

    body {
        margin: 2.45cm;
        font-size: 14;
        width: auto;
        height: auto;
    }

    p {
        line-height: 1.5;
        text-align: justify;
    }

    .kop-surat {
        text-align: center;
        padding-bottom: 1.5mm;
        border-bottom: 5px solid;
        margin-bottom: 1.5mm;
    }

    .heading-1 {
        font-size: 14;
        text-align: center;
        text-decoration: underline;
    }

    table {
        width: 100%;
        margin-left: 1cm;
    }

    ol {
        width: 100%;
        margin-left: 0;
        padding: 0;
    }

    .gejala {
        border-collapse: collapse;
        margin-left: 0;
        vertical-align: top;
    }

    .gejala tr td {
        padding: 1.5mm;
        border: 1pt solid;
    }
</style>

<body>
    <h3 class="kop-surat">Sistem Pakar Diagnosa Penyakit (TBC)</h3><br>
    <p class="heading-1"><strong>Surat Keterangan</strong></p><br>
    <p>Data pasien adalah sebagi berikut :</p><br>
    <table>
        @foreach ($data_pasien as $key => $value)
        <tr>
            <td width="4cm">{{ Str::of($key)->replace('_', ' ')->ucfirst() }}</td>
            <td width="0.2cm"> : </td>
            <td>{{ $value }}</td>
        </tr>
        @endforeach
    </table><br>
    <p>Berdasarkan hasil pemeriksaan yang telah dilakukan pada sistem, pasien tersebut di diagnosa memiliki penyakit
        <strong>{{ $data_persen['cf_persen'] }}% {{
            $data_penyakit['penyakit'] }}</strong> dengan gejala adalah sebagai berikut :
    </p><br>
    <table class="gejala">
        @foreach ($data_gejala as $value)
        <tr>
            <td>{{ $value }} </td>
            <td width="1cm" style="text-align:center"><strong>Ya</strong></td>
        </tr>
        @endforeach
    </table><br>
    <p>Berdasarkan hasil diagnosa tersebut, <strong>{{ Str::lcfirst($data_penyakit['solusi']) }}</strong></p>
</body>

</html>