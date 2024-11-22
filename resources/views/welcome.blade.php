<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .bg-transparent {
            background-color: transparent !important;
            transition: background-color 0.3s ease-in-out;
            /* Smooth transition */
        }

        /* White background for navbar */
        .bg-white-scroll {
            background-color: white !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Optional shadow for better contrast */
            transition: background-color 0.3s ease-in-out;
            /* Smooth transition */
        }

        /* Add some padding to avoid content being hidden under the fixed navbar */
        body {
            padding-top: 70px;
            /* Adjust according to your navbar height */
        }

        body {
            background-color: #007bb5;
            /* Adjust background color */
            color: white;
            font-family: Arial, sans-serif;
        }

        .content-wrapper {
            padding: 50px 15px;
            text-align: left;
        }

        .btn-apply {
            background-color: #ffcc00;
            color: #333;
            border-radius: 20px;
            padding: 10px 20px;
            font-weight: bold;
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        /* Card Section Styling */
        .card-section {
            padding: 50px 0;
        }

        .card-custom {
            background-color: white;
            color: #333;
            border-radius: 10px;
            padding: 20px;
            height: 270px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .icon {
            font-size: 2rem;
            color: #007bb5;
            margin-bottom: 15px;
        }

        .card-title {
            font-weight: bold;
            color: #333;
        }

        .card-text {
            color: #666;
        }

        .tahun {
            font-weight: 600;
        }

        .main-title {
            background-color: white;
            /* Warna latar belakang */
            color: #ffffff;
            /* Warna teks */
            padding: 20px;
            /* Ruang dalam */
            border-radius: 8px;
            /* Sudut bulat (pilihan) */
            text-align: center;
            /* Pusatkan teks */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Bayang untuk kesan 3D */
            /* Lebar maksimum */
            margin: 20px auto;
            /* Pusatkan elemen secara automatik */
        }


        .main-title h1 {
            font-size: 2rem;
            color: black;
            /* Saiz teks */
            margin: 0;
            /* Buang margin lalai */
        }

        .main-title1 {
            background-color: white;
            /* Warna latar belakang */
            padding: 20px;
            /* Ruang dalam */
            text-align: center;
            /* Pusatkan teks */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Bayang untuk kesan 3D */
            /* Lebar maksimum */
            margin: 20px auto;
            /* Pusatkan elemen secara automatik */
        }

        .main-title1 h1 {
            font-size: 2rem;
            color: black;
            /* Saiz teks */
            margin: 0;
            /* Buang margin lalai */
        }

        .list p {
            text-align: center;
            color: white;
            font-size: 3ch;
        }

        .main-title2 {
            background-color: white;
            /* Warna latar belakang */
            color: #ffffff;
            /* Warna teks */
            padding: 20px;
            /* Ruang dalam */
            text-align: center;
            /* Pusatkan teks */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Bayang untuk kesan 3D */
            /* Lebar maksimum */
            margin: 20px auto;
            /* Pusatkan elemen secara automatik */
        }

        .main-title2 h1 {
            font-size: 2rem;
            color: black;
            /* Saiz teks */
            margin: 0;
            /* Buang margin lalai */
        }

        .main-title2 p {
            font-size: 1.5rem;
            color: black;
            /* Saiz teks */
            margin: 0;
            text-align: left;
        }

        .box-container {
            background-color: #f9f9f9;
            /* Light grey background */
            border: 2px solid #ccc;
            /* Light border */
            border-radius: 8px;
            /* Rounded corners */
            padding: 20px;
            width: 80%;
            /* Adjust width as needed */
            margin: 0 auto;
            /* Center the box */
        }

        /* Optional: Add a slight shadow to the box */
        .box-container {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            color: black;
            /* Medium grey */
            font-weight: 400;
            /* Normal font weight */
        }

        .form-label {
            color: black;
            /* Medium grey */
            font-weight: 400;
            /* Normal font weight */
        }

        ::placeholder {
            color: #555555;
            /* Medium grey */
            font-weight: 400;
            /* Normal font weight (if applicable) */
        }

        .info-text {
            color: black;
        }

        /* FAQ Section Styling */
        .faq-section {
            margin-top: 40px;
        }

        .faq-section h2 {
            font-size: 22px;
            margin-bottom: 20px;
            text-align: center;
        }

        .faq {
            background-color: #f1f1f1;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .faq-item {
            margin-bottom: 15px;
        }

        .faq-item .question {
            color: black;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .faq-item .answer {
            font-size: 16px;
            margin-left: 20px;
            color: #555;
        }

        /* Style for the footer */
        footer {
            background-color: #333;
            /* Dark background */
            color: #fff;
            /* White text */
            text-align: center;
            /* Center the text */
            padding: 10px 0;
            /* Padding around the text */
            font-size: 14px;
            /* Adjust the font size */
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 40px;
            /* Adds space between footer and content above */
        }

        footer p {
            margin: 0;
            /* Remove default margin */
        }


        #faq-new {
            background-color: transparent;

        }

        /* Accordion Header */
        #faqlist-new .accordion-header {
            background-color: #28a745;
            /* Green background for the header */
            border: none;
            /* Remove border */
            border-radius: 8px 8px 0 0;
            /* Rounded top corners */
        }

        #faqlist-new .accordion-header h3 {
            background-color: #28a745;
            /* Green background for the header */
            border: none;
            /* Remove border */
            border-radius: 8px 8px 0 0;
            /* Rounded top corners */
        }

        /* Button inside accordion header */
        #faqlist-new .accordion-button {
            font-size: 1.2rem;
            /* Increase font size */
            font-weight: bold;
            /* Make the text bold */
            color: #ffffff;
            /* White text */
            background-color: transparent;
            /* Transparent background */
            padding: 15px 20px;
            /* More padding */
            text-align: left;
            /* Left align the text */
            display: flex;
            /* Use flexbox for alignment */
            justify-content: space-between;
            /* Space between text and icon */
        }

        /* Add hover effect to accordion button */
        #faqlist-new .accordion-button:hover {
            background-color: #218838;
            /* Darker green on hover */
            color: #ffffff;
            /* Ensure text stays white on hover */
        }

        /* Style for the question icon */
        .question-icon {
            font-size: 1.5rem;
            /* Increase icon size */
            margin-right: 10px;
            /* Space between icon and text */
        }

        /* Accordion Collapse */
        #faqlist-new .accordion-collapse {
            border: none;
            /* Remove border */
            background-color: #ffffff;
            /* White background for the content */
        }

        /* Style for the body content of the accordion */
        #faqlist-new .accordion-body {
            padding: 20px;
            /* Padding around the content */
            background-color: #ffffff;
            /* White background for content */
            border: none;
            /* Remove border */
            border-radius: 0 0 8px 8px;
            /* Rounded bottom corners */
            font-weight: bold;
            /* Make the content text bold */
        }

        /* List styling inside the accordion */
        #faqlist-new .accordion-body ul {
            padding-left: 20px;
            /* Indentation for list items */
        }

        #faqlist-new .accordion-body li {
            font-size: 1rem;
            /* Slightly smaller text */
            color: #333333;
            /* Dark text for readability */
            margin-bottom: 10px;
            /* Space between list items */
            font-weight: bold;
            /* Make the list items bold */
        }

        /* Collapse icon style when opened */
        #faqlist-new .accordion-button:not(.collapsed) {
            background-color: #218838;
            /* Change background when open */
            color: #ffffff;
            /* White text when open */
        }

        * Ensure that FAQ items are side by side */ #faq-new {
            background-color: #f8f9fa;
            /* Light background color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: none;
        }

        .faq-column {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .faq-column .col-lg-6 {
            flex: 0 0 48%;
            /* Set each column to take up 48% of the space */
            margin-right: 1%;
            /* Adjust right margin */
            margin-bottom: 20px;
            /* Space between columns on smaller screens */
        }

        /* Adjust for smaller screens */
        @media (max-width: 991px) {
            .faq-column .col-lg-6 {
                flex: 0 0 100%;
                /* Stack them on top of each other on smaller screens */
                margin-right: 0;
                /* Remove margin on small screens */
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-light fixed-top bg-transparent">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo on the left -->
            <a class="navbar-brand" href="https://idsb.com.my">
                <img src="{{ asset('image/logo.png') }}" alt="Logo" width="50" height="auto">
            </a>

            <!-- "Mohon Sekarang!" button on the right -->
            <a class="btn btn-apply" href="#formsection">Mohon Sekarang!</a>
        </div>
    </nav>

    <script>
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                // Add white background if scrolled down 50px
                navbar.classList.remove('bg-transparent');
                navbar.classList.add('bg-white-scroll');
            } else {
                // Revert to transparent if at the top
                navbar.classList.remove('bg-white-scroll');
                navbar.classList.add('bg-transparent');
            }
        });
    </script>



    @if (session('success'))
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h6 class="modal-title text-white fw-bold" id="exampleModalLabel">PERMOHONAN ANDA DITERIMA</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-dark text-center">
                        <p>Proses Permohonan Adalah Selama <b>7</b> Hari Bekerja.
                            Sebarang Pertanyaan, Sila Hubungi I. DESTINASI SDN BHD di talian: 03-40232266</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                //var myModalEl = document.getElementById('exampleModal')
                //var modal = bootstrap.Modal.getInstance(myModalEl) // Returns a Bootstrap modal instance
                $("#exampleModal").modal('show');
            });
        </script>
    @elseif (session('error'))
        <div class="alert alert-danger" role="alert" style="max-width: 800px; margin: 0 auto;">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('file_error'))
        <div class="alert alert-warning" role="alert" style="max-width: 800px; margin: 0 auto;">
            {{ session('file_error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Main Content -->
    <div class="container content-wrapper">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white">
                <h4>Selamat bertugas cikgu!</h4>
                <h1>Pembiayaan Sehingga RM50,000 Untuk Anda</h1>
                <p>Kami tahu bahawa sebagai guru baru, anda mempunyai kuasa untuk memberi inspirasi dan membentuk masa
                    depan. Memulakan kerjaya baru juga sangat menggembirakan dan mencabar.</p>
                <p>Program ini didedikasikan untuk membantu anda memulakan perjalanan di dalam bidang pendidikan. Kami
                    berada di sini untuk memberikan anda bantuan kewangan yang anda perlukan melalui pembiayaan peribadi
                    yang direka khas untuk semua guru baru.</p>
                <p>Oh ya! Selamat datang ke I Destinasi Sdn Bhd (IDSB) - sebuah agensi yang menyediakan perkhidmatan
                    kewangan dan potongan gaji melalui majikan.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('image/woman.jpg') }}" alt="Image of a smiling teacher" class="img-fluid">
            </div>
        </div>
    </div>

    <div class = "main-title">
        <h1>Apakah yang ditawarkan melalui program ini ?</h1>
    </div>
    <!-- Scrollable Card Section -->
    <div class="container card-section">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card card-custom">
                    <div class="icon">⌛</div>
                    <h5 class="card-title">Tempoh Pembayaran Balik sehingga </h5>
                    <h5 class="tahun"><b>10 TAHUN</b></h5>
                    <p class="card-text">Anda mempunyai kebebasan untuk memilih amaun pinjaman yang sejalan dengan
                        keperluan dan keupayaan pembayaran balik anda.</p>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom">
                    <div class="icon">🏗️</div>
                    <h5 class="card-title">Kadar Keuntungan serendah</h5>
                    <h5 class="tahun"><b>4.5%</b></h5>
                    <p class="card-text">Kadar faedah kami yang serendah <b>4.5%</b> memastikan anda boleh menguruskan
                        kewangan anda dengan berkesan di peringkat awal kerjaya anda.</p>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom">
                    <div class="icon">✂️</div>
                    <h5 class="card-title">Bayaran Balik melalui potongan gaji</h5>
                    <p class="card-text">Pembayaran semula pinjaman secara automatik dengan memotong daripada gaji
                        peminjam pada setiap bulan</p>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom">
                    <div class="icon">🕌</div>
                    <h5 class="card-title">Menepati prinsip patuh Shariah</h5>
                    <p class="card-text">Pinjaman berlandaskan prinsip Shariah, bebas riba dan gharar. Semua urus niaga
                        dijalankan secara telus, adil, dan disahkan oleh panel Shariah.</p>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom">
                    <div class="icon">🚀</div>
                    <h5 class="card-title">Proses yang pantas</h5>
                    <p class="card-text">Kami menawarkan pinjaman dengan proses mudah dan pantas, diluluskan dalam
                        tempoh maksimum 7 hari.</p>
                </div>
            </div>
            <div class="col">
                <div class="card card-custom">
                    <div class="icon">😊</div>
                    <h5 class="card-title">Layanan Mesra</h5>
                    <p class="card-text">Pegawai kami yang mesra dan berpengetahuan sedia untuk membantu anda melalui
                        setiap langkah proses permohonan pinjaman.</p>
                </div>
            </div>
        </div>
    </div>
    <h2 class="fw-bold">Soalan & Jawapan</h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <b>Siapakah yang layak memohon ?</b>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <ul>
                        <li>Guru -guru yang mempunyai taraf jawatan Kontrak-Interim</li>
                        <li>Berkhidmat tidak kurang <b>SATU</b> (1) bulan dari tarikh daftar bertugas</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <b>Apakah dokumen yang diperlukan ?</b>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <ul>
                        <li>Borang permohonan</li>
                        <li>Borang Kebenaran penyelesaian awal</li>
                        <li>Borang Jual beli (Bursa)</li>
                        <li>Borang kebenaran semakan maklumat kredit</li>
                        <li>Borang kebenaran potongan AG (Ditandatangani oleh majikan/ketua jabatan)</li>
                        <li>Salinan Mykad (depan dan belakang)</li>
                        <li>Penyata gaji terkini yang mempunyai Kod QR (Disahkan oleh majikan/ketua jabatan)</li>
                        <li>Surat pengesahan jawatan atau laporan HRMIS (CV pegawai)</li>
                        <li>Salinan penyata akaun simpanan (mana-mana bank) yang aktif.</li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- FAQ Section -->
        <div class="faq-section">
            <h2><b>PENYELESAIAN PENUH PINJAMAN PERMULAAN RM10,000</b></h2>
            <div class="faq">
                <div class="faq-item">
                    <h3 class="question">1. Bagaimanakah cara saya meminta penyelesaian penuh untuk pembiayaan
                        awal
                        RM10,000?</h3>
                    <p class="answer">Sila hubungi IDSB di talian 03-40232266 atau e-mel kepada
                        info@idsb.com.my untuk
                        mendapatkan “Penyata Penyelesaian Penuh.”</p>
                </div>
                <div class="faq-item">
                    <h3 class="question">2. Bagaimanakah cara saya membuat pembayaran balik untuk pembiayaan
                        awal RM10,000?
                    </h3>
                    <p class="answer">i. Bayaran secara tunai sekaligus dengan mendapatkan “Penyata
                        Penyelesaian Penuh”
                        dengan menghubungi IDSB di talian 03-40232266 atau</p>
                    <p class="answer">ii. “Pembiayaan Semula IDSB” (Minimum RM 20K, Maksimum RM 50K) dengan
                        memasuki alamat
                        laman sesawang yang telah dihantar melalui SMS kedua kepada peminjam.</p>
                </div>
                <div class="faq-item">
                    <h3 class="question">3. Bagaimanakah cara saya mengetahui penbayaran balik saya telah
                        diterima?</h3>
                    <p class="answer">Surat penutupan akaun akan dihantar melalui e-mel dalam masa <b> (7)
                            HARI</b> bekerja
                        selepas pembayaran dilakukan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row">
            <!-- Left Side: Download Table -->
            <div class="col-md-6">
                <div class="p-4 border rounded bg-light">
                    <h4 class="mb-3" style="color: black; font-weight: 600;">Muat Turun Borang Permohonan
                    </h4>
                    <table class="table table-bordered text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>No.</th>
                                <th class="text-start">Nama File</th>
                                <th>Pautan Muat Turun</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $files = [
                                    ['name' => 'Borang Permohonan', 'file' => 'BORANG PERMOHONAN.pdf'],
                                    [
                                        'name' => 'Borang Kebenaran Penyelesaian Awal',
                                        'file' => 'BORANG KEBENARAN PENYELESAIAN AWAL.pdf',
                                    ],
                                    [
                                        'name' => 'Borang Jual Beli -Bursa',
                                        'file' => 'BORANG JUAL BELI -BURSA.pdf',
                                    ],
                                    [
                                        'name' => 'Borang Kebenaran Semakan Maklumat Kredit',
                                        'file' => 'BORANG KEBENARAN SEMAKAN MAKLUMAT KREDIT.pdf',
                                    ],
                                    [
                                        'name' => 'Contoh Pengisian Borang Lengkap',
                                        'file' => 'CONTOH PENGISIAN BORANG LENGKAP.pdf',
                                    ],
                                    [
                                        'name' => 'Jadual Pembayaran Balik',
                                        'file' => 'JADUAL PEMBAYARAN BALIK.pdf',
                                    ],
                                ];
                            @endphp

                            @foreach ($files as $index => $file)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td class="text-start">{{ $file['name'] }}</td>
                                    <td><a href="{{ asset('doc/' . $file['file']) }}" class="btn btn-link"
                                            download><b>Download</b></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>



            <!-- Right Side: Form -->
            <div class="col-md-6">
                <div id="formsection" class="p-4 border rounded bg-light">
                    <h4 class="mb-3" style="color: black; font-weight: 600;">Form</h4>

                    <form action="{{ route('formSubmit') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Name input field -->
                        <div class="mb-3">
                            <label for="exampleFormControlName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlName" name="name"
                                required>
                        </div>

                        <!-- IC Number input field -->
                        <div class="mb-3">
                            <label for="exampleFormControlIC" class="form-label">IC Number</label>
                            <input type="text" class="form-control" id="exampleFormControlIC" name="ic"
                                placeholder="123456789012" pattern="\d{12}"
                                title="IC Number must be exactly 12 digits" required>
                            <div id="icError" class="text-danger mt-1" style="display: none;">IC Number must be
                                exactly 12 digits.</div>
                        </div>


                        <!-- Email input field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                required>
                        </div>

                        <!-- Phone number input field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="exampleFormControlInput2" name="phone"
                                placeholder="0123456789" required>
                        </div>

                        <!-- File upload field -->
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Upload Files</label>
                            <input class="form-control" type="file" id="formFileMultiple" name="files[]"
                                multiple>
                            <div id="fileError" class="text-danger mt-1" style="display: none;">All files must be in
                                PDF format.</div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                </div>

            </div>
        </div>
    </div>
    </div>
    <style>
        a.custom-link {
            text-decoration: none;
            font-weight: bold;
            color: white; /* Default color */
            transition: color 0.3s ease; /* Smooth transition effect */
        }
        a.custom-link:hover {
            color: #cccccc; /* Slightly darker shade */
        }
    </style>
    <footer>
        <p>© Hak Cipta Terpelihara 2024 -
            <a href="https://idsb.com.my" class="custom-link">I.Destinasi Sdn. Bhd.</a>
        </p>
    </footer>

    <script>
        document.getElementById('exampleFormControlIC').addEventListener('input', function() {
            const inputField = this;
            const icError = document.getElementById('icError');

            // Check if the input length is not 12
            if (inputField.value.length > 0 && inputField.value.length !== 12) {
                icError.style.display = 'block'; // Show error message
            } else {
                icError.style.display = 'none'; // Hide error message
            }
        });

        document.querySelector('form').addEventListener('submit', function(event) {
            const inputField = document.getElementById('exampleFormControlIC');
            if (inputField.value.length !== 12) {
                alert('IC Number must be exactly 12 digits.');
                event.preventDefault(); // Prevent form submission
            }
        });


        document.getElementById('formFileMultiple').addEventListener('change', function() {
            const allowedExtensions = ['pdf'];
            const files = this.files;
            const fileError = document.getElementById('fileError');
            let allValid = true;

            // Check if the number of files is exactly 9
            if (files.length !== 9) {
                fileError.textContent = 'You must upload exactly 9 files.';
                fileError.style.display = 'block';
                alert('You must upload exactly 9 files.');
                this.value = ''; // Clear the input
                return;
            }

            // Validate file types
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const fileExtension = file.name.split('.').pop().toLowerCase();

                if (!allowedExtensions.includes(fileExtension)) {
                    allValid = false;
                    break;
                }
            }

            if (!allValid) {
                fileError.textContent = 'All uploaded files must be in PDF format.';
                fileError.style.display = 'block';
                alert('All uploaded files must be in PDF format.');
                this.value = ''; // Clear the input
            } else {
                fileError.style.display = 'none'; // Hide error message
            }
        });

        document.querySelector('form').addEventListener('submit', function(event) {
            const fileInput = document.getElementById('formFileMultiple');
            const fileError = document.getElementById('fileError');

            // Check if the input was cleared due to validation issues
            if (!fileInput.value) {
                event.preventDefault(); // Prevent form submission
                alert('Please upload 9 valid PDF files.');
                fileError.style.display = 'block';
            }
        });
    </script>


</body>

</html>
