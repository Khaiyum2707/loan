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
    <link rel="stylesheet" href="{{ asset('landing.css') }}">
    <script src="{{ asset('animation.js') }}"></script>




    <div class="loader"></div> 
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


    <div class="container" style="max-width: 1500px; margin: 0 auto;"> <!-- Parent container -->
        <h2 class="fw-bold text-center mb-4">Soalan & Jawapan</h2>
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

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <b>Bagaimanakah cara saya meminta penyelesaian penuh untuk pembiayaan ?</b>
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <li>
                        Sila hubungi IDSB di talian <b>03-40232266</b> atau e-mel kepada 
                        <a href="mailto:info@idsb.com.my">info@idsb.com.my</a> untuk mendapatkan 
                        <b>“Penyata Penyelesaian Penuh.”</b>
                    </li>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    <b>Bagaimanakah cara saya membuat pembayaran balik untuk pembiayaan awal RM10,000?</b>
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <ul>
                        <li> Bayaran secara tunai sekaligus dengan mendapatkan “PenyataPenyelesaian Penuh” dengan menghubungi IDSB di talian 03-40232266 atau</li>
                    <li>“Pembiayaan Semula IDSB” (Minimum RM 20K, Maksimum RM 50K) dengan
                        memasuki alamat
                        laman sesawang yang telah dihantar melalui SMS kedua kepada peminjam

                    </li>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    <b>Bagaimanakah cara saya mengetahui penbayaran balik saya telah diterima?</b>
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <li> Surat penutupan akaun akan dihantar melalui e-mel dalam masa <b> (7)
                        HARI</b> bekerja
                    selepas pembayaran dilakukan.

                    </li>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row d-flex align-items-stretch"> <!-- Flexbox row -->
            <!-- Left Side: Download Table -->
            <div class="col-md-6 d-flex"> <!-- Ensure it stretches -->
                <div class="p-4 border rounded bg-light h-100">
                    <h4 class="mb-3" style="color: black; font-weight: 600;">Muat Turun Borang Permohonan
                    </h4>
                    <table class="table table-bordered text-center flex-grow-1">
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
                                            download><b>Muat Turun</b></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>



            <!-- Right Side: Form -->
            <div class="col-md-6 d-flex"> <!-- Add d-flex to ensure the div stretches -->
                <div id="formsection" class="p-4 border rounded bg-light w-100"> 
                    <h3 class="mb-3" style="color: black; font-weight: 700;">Borang Maklumat Anda</h3>
                    <p class="info-text">Sila isi borang dengan maklumat yang tepat. Semua medan bertanda * adalah wajib. Digalakkan muat naik file anda dalam bentuk zip atau rar.</p>

                    <form action="{{ route('formSubmit') }}" method="POST" enctype="multipart/form-data" style="margin-top:-1.0rem">
                        @csrf

                        <!-- Name input field -->
                        <div class="mb-3">
                            <label for="exampleFormControlName" class="form-label">Nama<b>*</b></label>
                            <input type="text" class="form-control" id="exampleFormControlName" name="name"
                                required placeholder="Nama Penuh">
                        </div>

                        <!-- IC Number input field -->
                        <div class="mb-3">
                            <label for="exampleFormControlIC" class="form-label">Nombor IC<b>*</b></label>
                            <input type="text" class="form-control" id="exampleFormControlIC" name="ic"
                                placeholder="tanpa (-)" pattern="\d{12}"
                                title="IC Number must be exactly 12 digits" required>
                            <div id="icError" class="text-danger mt-1" style="display: none;">IC Number must be
                                exactly 12 digits.</div>
                        </div>


                        <!-- Email input field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Alamat Emel<b>*</b></label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                required>
                        </div>

                        <!-- Phone number input field -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Nombor Telefon Bimbit<b>*</b></label>
                            <input type="tel" class="form-control" id="exampleFormControlInput2" name="phone"
                                placeholder="tanpa (-). Eg: 0123456789" required>
                        </div>

                        <!-- File upload field -->

                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Muat Naik fail di sini<b>*</b></label>
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFileMultiple" name="files[]"
                                multiple>
                            <div id="fileError" class="text-danger mt-1" style="display: none;">All files must be in
                                PDF, ZIP or RAR format.</div>
                        </div> 
                          



                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary">Hantar</button>
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
            color: white;
            /* Default color */
            transition: color 0.3s ease;
            /* Smooth transition effect */
        }

        a.custom-link:hover {
            color: #cccccc;
            /* Slightly darker shade */
        }
    </style>

    <footer>
        <p>© Hak Cipta Terpelihara 2024 -<a href="https://idsb.com.my" class="custom-link">I.Destinasi Sdn. Bhd.</a></p>
    </footer>

    


</body>

</html>
