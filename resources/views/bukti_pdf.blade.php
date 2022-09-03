<!DOCTYPE html>
<head>
    <title>Contoh Surat Pernyataan</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto; 
            height: auto; 
            position: absolute; 
            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }

    </style>

</head>

<body>
    <div id=halaman>
        <h3 id=judul>SURAT PERNYATAAN</h3>

        <p>Saya yang bertanda tangan di bawah ini :</p>
        @foreach ($supporter as $supporters)
        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ strtoupper($supporters->name) }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">NIK</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $supporters->nik }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">No Hp</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$supporters->nohp }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">
                    {{ strtoupper($supporters->domisili) }}, 
                    DESA {{ $supporters->village->name }},  
                    KECAMATAN {{ $supporters->village->district->name }}, 
                    {{ $supporters->village->district->regency->name }}, 
                    PROVINSI {{ $supporters->village->district->regency->province->name }}
            </tr>
        </table>
        @endforeach
        <p>menyatakan dengan sebenarnya akan Memilih calon Legislatif Yang Bernama 
        <b>{{ strtoupper($supporters->candidate->name) }} </b>Pada Pemilu tahun 2024
        </p>

        <div style="width: 50%; text-align: left; float: right;">{{ $supporters->village->district->regency->name }}, {{ $supporters->created_at->toDateString()}}</div><br>
    </div>
</body>

</html>