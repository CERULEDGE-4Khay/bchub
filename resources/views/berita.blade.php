@extends('layouts.guest')
@section('content')

{{-- hero --}}
<section class="relative min-h-screen flex flex-col items-center justify-center text-center overflow-hidden bg-gradient-to-br from-green-200 via-blue-200 to-purple-200 animate-gradient">
  <!-- Animated particles background -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="w-3 h-3 bg-white rounded-full opacity-30 animate-bounce-slow absolute top-10 left-1/4"></div>
    <div class="w-2 h-2 bg-yellow-300 rounded-full opacity-40 animate-bounce-slow absolute bottom-20 right-1/3"></div>
  </div>

  <!-- Title -->
  <h2 class="text-4xl md:text-6xl font-bold mb-6 animate-fadeInUp">
    Seputar Informasi UPTD <br>
    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-green-500">
      Seni, Kreativitas, dan Kebudayaan
    </span>
  </h2>

  <!-- Search -->
  <div class="flex w-full max-w-lg bg-white rounded-full shadow-lg overflow-hidden mb-6 animate-fadeInUp delay-200">
    <span class="flex items-center px-3 text-gray-400"><i class="fas fa-search"></i></span>
    <input type="text" placeholder="Cari Berita..." class="flex-1 px-4 py-3 outline-none"/>
    <button class="bg-blue-500 text-white px-6 py-3 hover:bg-blue-600">Search</button>
  </div>

  <!-- Categories -->
  <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4 animate-fadeInUp delay-300">
    <div class="p-4 bg-white rounded-xl shadow hover:scale-105 hover:bg-gradient-to-r hover:from-blue-400 hover:to-green-400 transition transform duration-300 text-center">
      🎭 <p class="mt-2 font-semibold">Bandung Creative HUB</p>
    </div>
    <div class="p-4 bg-white rounded-xl shadow hover:scale-105 hover:bg-gradient-to-r hover:from-yellow-400 hover:to-red-400 transition transform duration-300 text-center">
      🎶 <p class="mt-2 font-semibold">Padepokan Seni Mayang Sunda</p>
    </div>
    <div class="p-4 bg-white rounded-xl shadow hover:scale-105 hover:bg-gradient-to-r hover:from-purple-400 hover:to-pink-400 transition transform duration-300 text-center">
      🏛 <p class="mt-2 font-semibold">Teras Sunda Cibiru</p>
    </div>
    <div class="p-4 bg-white rounded-xl shadow hover:scale-105 hover:bg-gradient-to-r hover:from-green-400 hover:to-teal-400 transition transform duration-300 text-center">
      🌿 <p class="mt-2 font-semibold">Kampung Wisata Pasir Kunci</p>
    </div>
  </div>
</section>


    {{-- Daftar Berita --}}
<section>
  <div class="container mx-auto px-6 py-12">
    <p
      class="tracking-widest uppercase text-gray-500 mb-10 text-center text-2xl"
    >
      Daftar Berita
    </p>
    <!-- Grid -->
    <div
      id="ruanganGrid"
      class="grid grid-cols-1 md:grid-cols-3 gap-5"
    ></div>

    <div class="mt-10 flex justify-center">
      <!-- Button -->
      <div class="mt-10 flex justify-center">
        <button
          id="loadMoreBtn"
          class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800 flex justify-center items-center gap-2"
        >
          Tampilkan lebih banyak
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-chevron-double-down"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"
            />
            <path
              fill-rule="evenodd"
              d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"
            />
          </svg>
        </button>
    </div>
  </div>
</section>

<script>
    const ruanganData = [
    {
        nama: "Basement dan Area Parkir",
        kapasitas: "200",
        deskripsi: "Area ini terletak di dasar Bandung Creative Hub yang berfungsi sebagai parkiran sepeda motor. Meski demikian, area yang dipenuhi mural ini tidak menutup kemungkinan....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_43181.jpeg",
    },
    {
        nama: "Studio Musik (Basement)",
        kapasitas: "8",
        deskripsi: "Studio musik yang terletak di lantai dasar ini, merupakan studio musik gratis pertama di Bandung. Fasilitas yang tersedia sesuai standar studio musik pada umumnya...",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_16074.jpeg",
    },
    {
        nama: "Exhibition Area (Lt.1)",
        kapasitas: "100",
        deskripsi: "Ruang khusus pameran di Bandung Creative Hub ini berada di lantai 1 gedung. Beragam jenis pameran mulai dari seni rupa, seni kriya, fotografi, DKV, dan pameran lainnya....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_77174.jpeg",
    },
    {
        nama: "Amphitheater (Lt.1)",
        kapasitas: "100",
        deskripsi: "Area ini merupakan pintu utama Bandung Creative Hub. Amphitheater dirancang sebagai public space dengan sirkulasi optimal.....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_36915.jpeg",
    },
    {
        nama: "Perpustakaan (Lt.2)",
        kapasitas: "30",
        deskripsi: "Perpustakaan Bandung Creative Hub memiliki koleksi 12.000 buku. Koleksi yang terhimpun terdiri dari buku fiksi, non-fiksi, komik, buku anak, majalah, serta buku di rumpun ekonomi kreatif....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_37067.jpeg",
    },
    {
        nama: "Coworking Space (Lt.2)",
        kapasitas: "14",
        deskripsi: "Ruangan yang terletak di lantai 2 Bandung Creative Hub ini merupakan coworking space dengan screen, projector, dan AC....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_33730.jpeg",
    },
    {
        nama: "Ruang Kaca (Lt.2)",
        kapasitas: "30",
        deskripsi: "Coworking Space lain yang terletak di dekat Amphitheater ini menyuguhkan suasana terbuka dengan kaca di sekelilingnya. Aktivitas seperti coworker serta mini workshop di rumpun ekonomi kreatif bisa sobat selenggarakan di Ruang Kaca....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_99695.jpg",
    },
    {
        nama: "Recording Studio (Lt.3)",
        kapasitas: "8",
        deskripsi: "Studio yang terletak di lantai 3 ini merupakan ruang produksi musik di Bandung Creative Hub. Beragam aktivitas rekaman musik baik project solo, duo, band, tapping voice over, dan rekaman berbasis suara bisa diselenggarakan di studio ini....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_56018.jpg",
    },
    {
        nama: "Auditorium (Lt.3)",
        kapasitas: "150",
        deskripsi: "Ruangan yang terletak di lantai 3 ini merupakan ruang pertemuan dengan kapasitas paling besar (120) di Bandung Creative Hub. Pemanfaatan Auditorium sepaket dengan screen, projector, speaker, dan amplifier standar bioskop untuk memberi experience terbaik....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_41893.jpeg",
    },
    {
        nama: "Digital Content Studio (Lt.3)",
        kapasitas: "15",
        deskripsi: "Studio yang terletak di pojok lantai 3 ini berfungsi sebagai ruang produksi konten digital. Fasilitas yang tersedia di sini berupa perangkat lampu dan white space yang bisa dieksplorasi oleh para kreator konten digital....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_31262.jpg",
    },
    {
        nama: "Studio Tari (Lt.3)",
        kapasitas: "30",
        deskripsi: "Studio yang terletak di sebelah Auditorium ini merupakan studio latihan tari tradisional, modern, dan kontemporer. Studio Tari telah dilengkapi dengan kaca dinding....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_15415.jpg",
    },
    {
        nama: "Taman (Lt.4)",
        kapasitas: "25",
        deskripsi: "Taman yang terletak di lantai 4 ini merupakan salah satu public space dari Bandung Creative Hub. Area taman merupakan ruang terbuka dengan sirkulasi udara maksimal....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_32571.jpg",
    },
    {
        nama: "Teleconference Room (Lt.4)",
        kapasitas: "10",
        deskripsi: "Ruang teleconference merupakan area khusus aktivitas virtual. Aktivitas seperti konferensi pers, virtual meeting, virtual workshop, virtual class, dan beragam aktivitas daring lainnya bisa terselenggara di ruangan yang dilengkapi perangkat webcam & virtual hub ini....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_97529.jpg",
    },
    {
        nama: "Studio Jahit (Lt.4)",
        kapasitas: "8",
        deskripsi: "Studio Jahit terletak di dekat taman lantai 4. Studio ini berfungsi sebagai sarana penciptaan olahan kriya dan fesyen jahit. Fasilitas yang tersedia di studio ini....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_78465.jpg",
    },
    {
        nama: "Studio Animasi & Editing (Lt.4)",
        kapasitas: "10",
        deskripsi: "Studio Animasi dan Editing berada di dekat taman lantai 4. Studio ini memiliki berfungsi untuk penciptaan animasi, desain grafis, serta editing video....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_81700.jpg",
    },
    {
        nama: "Studio Fesyen (Lt.5)",
        kapasitas: "30",
        deskripsi: "Studio yang terletak di lantai 5 ini merupakan ruang khusus aktivitas fesyen. Berbagai aktivitas berkaitan fesyen seperti modeling class, makeup class....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_47114.jpg",
    },
    {
        nama: "Aula (Lt.5)",
        kapasitas: "80",
        deskripsi: "Aula yang terletak di lantai 5 Bandung Creative Hub ini merupakan ruang pertemuan berkapasitas maksimal 60 orang. Berbagai aktivitas mulai dari seminar....",
        imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_62113.jpg",
    },
    ];

    const grid = document.getElementById("ruanganGrid");
    const loadMoreBtn = document.getElementById("loadMoreBtn");
    let itemsPerPage = 3;
    let currentIndex = 0;

    function renderItem() {
    const nextItem = ruanganData.slice(currentIndex, currentIndex + itemsPerPage);
    nextItem.forEach((item) => {
        const card = document.createElement("div");

        card.className = "bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700";

        card.innerHTML = `
                <a href="#">
                <img
                    class="rounded-t-lg"
                    src="${item.imgUrl}"
                    alt=""
                />
                </a>
                
                <div class="p-5">
                <a href="#">
                    <h5
                    class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                    ${item.nama}
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    ${item.deskripsi}
                </p>
                <div class="flex">
                    <span
                    type="button"
                    class="flex items-center justify-center gap-1 flex-1 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600"
                    ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-people-fill"
                        viewBox="0 0 16 16"
                    >
                        <path
                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"
                        />
                    </svg>
                    ${item.kapasitas} Orang</span
                    >
                    <span
                    type="button"
                    class="flex items-center justify-center gap-1 flex-1 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600"
                    >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-star-fill text-yellow-300"
                        viewBox="0 0 16 16"
                    >
                        <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                        />
                    </svg>
                    4/5</span
                    >
                </div>
                <a
                    href="#"
                    class="block text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-clifford focus:outline-none dark:focus:ring-blue-800 text-center"
                >
                    Lihat Detail
                </a>
                </div>
            `;
        grid.appendChild(card);
    });

    currentIndex += itemsPerPage;
    if (currentIndex >= ruanganData.length) {
        loadMoreBtn.style.display = "none";
    }
    }

    loadMoreBtn.addEventListener("click", renderItem);
    renderItem();

</script>
@endsection