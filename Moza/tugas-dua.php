
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio PKN: Demokrasi Interaktif</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Chosen Palette: Warm Harmony -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8F5F2; /* Warm Neutral Background */
            color: #403D39; /* Dark text for readability */
        }
        .nav-link {
            transition: color 0.3s ease, border-bottom-color 0.3s ease;
            border-bottom: 2px solid transparent;
        }
        .nav-link:hover, .nav-link.active {
            color: #C28B62; /* Subtle Accent */
            border-bottom-color: #C28B62;
        }
        .tab-btn {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .tab-btn.active {
            background-color: #C28B62;
            color: #FFFFFF;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .chart-container {
            position: relative;
            width: 100%;
            max-width: 350px;
            margin-left: auto;
            margin-right: auto;
            height: 350px;
            max-height: 400px;
        }
    </style>
</head>
<body class="antialiased">

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Chosen Palette: Tech Slate & Blue Accent -->
    <!-- Application Structure Plan: Single-page profile card layout. Structure focuses on hierarchical information: Identity (top), Skills Visualization (center-left), Core Competencies (center-right), and Interactive Footer. This structure prioritizes quick assessment of the student's technical focus and interests. -->
    <!-- Visualization & Content Choices: Skill Distribution -> Goal: Inform/Organize -> Method: Doughnut Chart (Chart.js) -> Interaction: Hover tooltip -> Justification: Quickly communicates technical focus areas relevant to PPLG. Competency List -> Goal: Organize/Inform -> Method: Styled Cards (HTML/Tailwind) -> Interaction: Hover effect -> Justification: Clean, modern presentation of key interests. Interactive Button -> Goal: Engage -> Method: JS toggle -> Justification: Simple demonstration of frontend interactivity. -->
    <!-- CONFIRMATION: NO SVG graphics used. NO Mermaid JS used. -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8F5F2;
        }
        .skill-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .skill-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.2), 0 4px 6px -2px rgba(37, 99, 235, 0.05);
        }
        .chart-container {
            position: relative;
            width: 100%;
            max-width: 250px;
            margin-left: auto;
            margin-right: auto;
            height: 250px;
            max-height: 280px;
        }
        .text-right img{
            border-radius: 100%;
        }
    </style>



   


    <header class="bg-white/80 backdrop-blur-lg sticky top-0 z-50 shadow-sm">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-[#403D39]">Portofolio Demokrasi</h1>
            <div class="hidden md:flex space-x-8">
                <a href="#perbandingan" class="nav-link font-medium pb-1">Perbandingan Demokrasi</a>
                <a href="#studikasus" class="nav-link font-medium pb-1">Studi Kasus: Pemilu OSIS</a>
                <a href="#peransiswa" class="nav-link font-medium pb-1">Peran Siswa</a>
                <a href="#refleksi" class="nav-link font-medium pb-1">Refleksi Pribadi</a>
            </div>
            <div class="md:hidden">
                <select id="mobile-nav" class="bg-white border border-gray-300 rounded-md py-2 px-3 text-sm">
                    <option value="#perbandingan">Perbandingan</option>
                    <option value="#studikasus">Studi Kasus</option>
                    <option value="#peransiswa">Peran Siswa</option>
                    <option value="#refleksi">Refleksi</option>
                </select>
            </div>
        </nav>
    </header>



    <main class="container mx-auto px-6 py-12">

            <div class="">
        
        <header class="p-8 bg-[#1f2937] text-white">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl font-extrabold tracking-tight">ALAN RAJA ZULKIFLI</h1>
                    <p class="text-xl font-medium text-gray-300 mt-1">Siswa Kelas 11 PPLG</p>
                </div>
                <div class="text-right">
                   <img src="aset/gambar/WhatsApp Image 2025-10-08 at 19.29.42_cd7145e8.jpg" width="80px">
                </div>
            </div>
        </header>

        <section id="perbandingan" class="mb-20 text-center">
            <h2 class="text-4xl font-bold mb-4">Perbandingan Sistem Demokrasi di Indonesia</h2>
            <p class="max-w-3xl mx-auto text-lg text-gray-600 mb-12">Setiap sistem demokrasi yang pernah diterapkan di Indonesia memiliki karakteristik, kelebihan, dan kelemahan yang unik. Bagian ini membedah tiga model utama—Liberal, Terpimpin, dan Pancasila—untuk memahami evolusi demokrasi bangsa. Klik setiap tab untuk melihat detailnya.</p>
            
            <div class="flex justify-center mb-8">
                <div class="flex space-x-2 bg-gray-200 p-1.5 rounded-lg">
                    <button class="tab-btn active text-sm md:text-base font-medium py-2 px-4 rounded-md" data-target="pancasila">Pancasila</button>
                    <button class="tab-btn text-sm md:text-base font-medium py-2 px-4 rounded-md" data-target="liberal">Liberal</button>
                    <button class="tab-btn text-sm md:text-base font-medium py-2 px-4 rounded-md" data-target="terpimpin">Terpimpin</button>
                </div>
            </div>

            <div class="max-w-4xl mx-auto">
                <div id="pancasila" class="tab-content text-left bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold mb-3 text-[#C28B62]">Demokrasi Pancasila</h3>
                    <p class="text-gray-700 leading-relaxed">Demokrasi Pancasila lahir sebagai jalan tengah yang memadukan kebebasan individu dengan stabilitas kolektif. Fondasinya adalah Sila Keempat, yang menekankan pengambilan keputusan melalui musyawarah untuk mencapai mufakat, bukan sekadar suara mayoritas atau dekrit pemimpin. Sistem ini berupaya menyeimbangkan hak dan kewajiban, memastikan bahwa demokrasi yang berjalan berketuhanan, berkemanusiaan, mempersatukan, dan berkeadilan sosial, sesuai dengan kepribadian bangsa Indonesia.</p>
                </div>
                <div id="liberal" class="tab-content hidden text-left bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold mb-3 text-[#C28B62]">Demokrasi Liberal (1950-1959)</h3>
                    <p class="text-gray-700 leading-relaxed">Model ini memberikan prioritas tertinggi pada kebebasan individu dan hak-hak politik dengan sistem multipartai yang ekstrem. Meskipun idealnya menjunjung tinggi hak asasi, praktiknya di Indonesia menyebabkan instabilitas politik yang kronis. Kabinet yang sering berganti membuat program pembangunan nasional terhambat, sementara kepentingan golongan kerap mengalahkan kepentingan bangsa. Prinsip mayoritas sering mengabaikan aspirasi minoritas.</p>
                </div>
                <div id="terpimpin" class="tab-content hidden text-left bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold mb-3 text-[#C28B62]">Demokrasi Terpimpin (1959-1965)</h3>
                    <p class="text-gray-700 leading-relaxed">Sebagai respons atas kekacauan era liberal, model ini memusatkan kekuasaan di tangan presiden untuk menciptakan stabilitas dan kesatuan nasional. Namun, hal ini mengorbankan partisipasi politik rakyat dan membuka jalan bagi otoritarianisme. Prinsip musyawarah digantikan oleh kepemimpinan terpusat, yang secara efektif meniadakan kebebasan berpendapat dan berorganisasi sebagai pilar utama demokrasi.</p>
                </div>
            </div>
        </section>

        <section id="studikasus" class="mb-20">
            <h2 class="text-4xl font-bold text-center mb-4">Studi Kasus: Musyawarah Pemilu OSIS</h2>
            <p class="max-w-3xl mx-auto text-center text-lg text-gray-600 mb-12">Teori demokrasi menjadi nyata dalam praktik sehari-hari, salah satunya melalui pemilihan ketua OSIS di sekolah. Studi kasus ini membedah proses, hasil, dan nilai-nilai demokrasi yang terkandung dalam sebuah musyawarah pemilihan yang bertujuan untuk regenerasi kepemimpinan secara adil dan transparan.</p>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <h3 class="text-2xl font-bold mb-4">Hasil Pemungutan Suara</h3>
                    <p class="text-gray-700 mb-6">Setelah melalui proses debat dan diskusi, pemungutan suara tertutup dilakukan untuk menentukan pimpinan baru. Berikut adalah distribusi suara yang menunjukkan partisipasi dan preferensi para siswa.</p>
                    <div class="chart-container">
                        <canvas id="osisChart"></canvas>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-4">Proses & Nilai Demokrasi</h3>
                    <ol class="relative border-l border-gray-300">
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-[#C28B62] rounded-full -left-3 ring-8 ring-white"></span>
                            <h4 class="font-semibold">Pengenalan Calon & Debat Publik</h4>
                            <p class="text-sm text-gray-600">Setiap paslon memaparkan visi-misi, diikuti sesi tanya jawab kritis dari siswa dan guru.</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-[#C28B62] rounded-full -left-3 ring-8 ring-white"></span>
                            <h4 class="font-semibold">Diskusi & Pemungutan Suara</h4>
                            <p class="text-sm text-gray-600">Diskusi informal dilakukan sebelum voting tertutup untuk memastikan kerahasiaan dan keadilan.</p>
                        </li>
                        <li class="mb-10 ml-6">
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-[#C28B62] rounded-full -left-3 ring-8 ring-white"></span>
                            <h4 class="font-semibold">Penetapan Hasil Terpilih</h4>
                            <p class="text-sm text-gray-600">Paslon dengan suara terbanyak ditetapkan sebagai pemenang secara transparan.</p>
                        </li>
                    </ol>
                    <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
                        <h4 class="font-bold text-lg mb-2">Nilai Demokrasi yang Teramati:</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-center"><span class="text-[#C28B62] mr-2">✔</span> Keterbukaan & Transparansi</li>
                            <li class="flex items-center"><span class="text-[#C28B62] mr-2">✔</span> Tanggung Jawab Para Calon</li>
                            <li class="flex items-center"><span class="text-[#C28B62] mr-2">✔</span> Penghargaan Terhadap Pendapat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="peransiswa" class="mb-20 text-center">
            <h2 class="text-4xl font-bold mb-4">Peran Siswa dalam Menjaga Demokrasi</h2>
            <p class="max-w-3xl mx-auto text-lg text-gray-600 mb-12">Demokrasi bukan hanya sistem pemerintahan, tetapi juga budaya yang harus dirawat oleh setiap warga negara, termasuk siswa. Berikut adalah empat peran kunci yang dapat diambil siswa untuk memperkuat nilai-nilai demokrasi di lingkungan terdekatnya.</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="card bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Mulai dari Kelas</h3>
                    <p class="text-gray-600">Berpartisipasi aktif dalam pemilihan ketua kelas atau OSIS adalah latihan demokrasi paling dasar dan penting.</p>
                </div>
                <div class="card bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Toleransi & Hormat</h3>
                    <p class="text-gray-600">Mendengarkan dan menghargai perbedaan pendapat teman adalah fondasi dari musyawarah yang sehat.</p>
                </div>
                <div class="card bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Kritis & Aktif</h3>
                    <p class="text-gray-600">Berani bertanya dan memberi masukan yang membangun terhadap kebijakan sekolah secara santun.</p>
                </div>
                <div class="card bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-2">Anti Hoax</h3>
                    <p class="text-gray-600">Tidak mudah percaya dan tidak menyebarkan informasi palsu yang dapat memecah belah persatuan.</p>
                </div>
            </div>
        </section>

        <section id="refleksi" class="text-center">
            <h2 class="text-4xl font-bold mb-4">Refleksi Diri dari Pengalaman Berorganisasi</h2>
            <p class="max-w-3xl mx-auto text-lg text-gray-600 mb-12">Pengalaman langsung dalam sebuah musyawarah memberikan pelajaran berharga yang tidak didapat dari buku teks. Berikut adalah refleksi pribadi dari partisipasi dalam rapat panitia bakti sosial, yang menyoroti tantangan, nilai yang dihayati, dan pertumbuhan personal.</p>
            <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-8 text-left">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-xl mb-2">Tantangan Terbesar</h3>
                    <p class="text-gray-700">Sulitnya menyatukan dua gagasan kuat: efisiensi anggaran dengan membeli barang dalam jumlah besar, versus keberpihakan pada UMKM lokal. Perdebatan ini menguji kesabaran dan kemampuan mencari jalan tengah.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-xl mb-2">Nilai yang Paling Dihayati</h3>
                    <p class="text-gray-700">Nilai Musyawarah untuk Mufakat menjadi sangat nyata. Solusi terbaik—alokasi 70% untuk efisiensi dan 30% untuk UMKM—tidak datang dari satu pihak, melainkan lahir dari proses dialog yang konstruktif.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-bold text-xl mb-2">Perubahan Diri</h3>
                    <p class="text-gray-700">Saya belajar bahwa peran penting dalam diskusi bukan hanya tentang memenangkan argumen, tetapi menjadi fasilitator yang sabar. Kemampuan menahan ego dan fokus pada solusi bersama adalah pelajaran kepemimpinan yang berharga.</p>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-white mt-20">
        <div class="container mx-auto px-6 py-6 text-center text-gray-500">
            <p>&copy; 2025 Portofolio PKN Interaktif. Dibuat berdasarkan tugas sekolah.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    tabs.forEach(item => item.classList.remove('active'));
                    tab.classList.add('active');

                    const target = tab.getAttribute('data-target');

                    tabContents.forEach(content => {
                        if (content.id === target) {
                            content.classList.remove('hidden');
                        } else {
                            content.classList.add('hidden');
                        }
                    });
                });
            });

            const osisChartCtx = document.getElementById('osisChart').getContext('2d');
            const osisChart = new Chart(osisChartCtx, {
                type: 'doughnut',
                data: {
                    labels: ['calon 01 (Alan )', 'calon 02 (jauza)', 'calon 03 (keilha)'],
                    datasets: [{
                        label: 'Hasil Suara',
                        data: [65, 30, 25],
                        backgroundColor: [
                            '#C28B62', 
                            '#8C7A6B',
                            '#D8C3A5'
                        ],
                        borderColor: '#F8F5F2',
                        borderWidth: 4,
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    if (context.parsed !== null) {
                                        label += context.parsed + '%';
                                    }
                                    return label;
                                }
                            }
                        }
                    },
                    cutout: '60%'
                }
            });

            const mobileNav = document.getElementById('mobile-nav');
            mobileNav.addEventListener('change', function() {
                window.location.hash = this.value;
            });
        });
    </script>
</body>
</html>
