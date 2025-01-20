<!DOCTYPE html>
<html>

<head>
    <title>Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .table-container {
            margin-top: 20px;
            border: 1px solid #ddd;
            width: 100%;
            border-collapse: collapse;
        }

        .table-container th,
        .table-container td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table-container th {
            background-color: #f4f4f4;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            text-align: center;
        }

        .logo {
            display: block;
            margin: 0 auto 20px auto;
            max-width: 150px;
        }
    </style>
</head>

<body>
    

    <!-- Logo -->
    <img src="{{asset('image/logo.png')}}" alt="Company Logo" class="logo">

    <p>Berikut ialah maklumat dan dokumen untuk pendaftar baru:</p>
    <!-- Table -->
    <table class="table-container">
        <tr>
            <th>Nama</th>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <th>Nombor IC</th>
            <td>{{$ic}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$email}}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{$phone}}</td>
        </tr>
    </table>

    <!-- Footer -->
    <div class="footer">
        <p><strong>I Destinasi Sdn. Bhd.</strong></p>
        <p>6 Pekeliling Business Centre, Persiaran 65C, Jalan Pahang Barat, Pekeliling,</p>
        <p>53000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p>
    </div>
</body>

</html>
