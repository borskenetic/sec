<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEC Library</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/sec_logo.png') }}">
    <link href="{{ asset('vendor/fontsource/poppins/latin-400.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontsource/poppins/latin-600.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontsource/poppins/latin-700.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(config('branding.css_path')) }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}?v={{ filemtime(public_path('style.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/auth-modal.css') }}?v=6">
</head>
<body>

    <header class="navbar navbar--hero">
        <div class="navbar-content">
            <div class="logo-section">
                <img src="{{ asset('img/sec_logo.png') }}" alt="Surigao Education Center Logo" class="logo">
                <span class="university-name">
                    SURIGAO EDUCATION CENTER
                </span>
            </div>
            <button type="button" class="nav-menu-toggle" id="navMenuToggle" aria-expanded="false" aria-controls="primaryNav" aria-label="Open menu">
                <span class="nav-menu-toggle-bar" aria-hidden="true"></span>
                <span class="nav-menu-toggle-bar" aria-hidden="true"></span>
                <span class="nav-menu-toggle-bar" aria-hidden="true"></span>
            </button>
            <nav class="nav-links" id="primaryNav">
                <a href="{{ url('/') }}">HOME</a>
                <a href="{{ asset('about.html') }}">ABOUT</a>
                <a href="{{ route('landing') }}">OPAC</a>
                <a href="https://zendy.io/">ZENDY</a>
                <a href="{{ asset('contact.html') }}">CONTACT US</a>
                <a href="{{ url('/rooms/book') }}">ROOM RESERVATIONS</a>
                <a href="{{ route('feedback.create') }}" class="feedback-link">FEEDBACK</a>
                <a href="{{ route('login') }}" class="login-button" data-auth-open="login">LOGIN</a>
            </nav>
        </div>
    </header>

    <main class="hero-section">
        <section class="hero-video-feature" aria-label="Surigao Education Center campus">
            <video autoplay muted loop playsinline class="bg-video" poster="{{ asset('images/sec_banner.jpg') }}">
                <source src="{{ asset('videos/hbanner.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </section>

        <section class="overlay hero-search-feature" aria-label="OPAC book search">
            <h1 class="welcome-text" hidden>WELCOME TO SEC LIBRARY</h1>
            <div class="home-search-react-root">
                <section class="home-search-panel" aria-labelledby="home-search-title">
                    <p class="home-search-kicker">Online Public Access Catalog</p>
                    <h1 id="home-search-title" class="home-search-title">
                        Search the SEC Library collection
                    </h1>
                    <p class="home-search-copy">
                        Find books by title, author, subject, ISBN, or keyword.
                    </p>

                    <form action="{{ route('landing') }}" method="GET" class="home-opac-search" role="search">
                        <input type="hidden" name="view" value="books">
                        <svg class="home-opac-search__icon" aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                        <input
                            type="search"
                            name="search"
                            placeholder="Search books, authors, titles..."
                            class="home-opac-search__input"
                            aria-label="Search library catalog"
                            required
                        >
                        <button type="submit" class="home-opac-search__button">Search OPAC</button>
                    </form>
                </section>
            </div>
        </section>
    </main>

    <section class="image-gallery-section">
        <div class="zendy-banner">
            <video autoplay muted loop playsinline class="bg-video" poster="{{ asset('images/sec_welcome.png') }}">
                <source src="{{ asset('videos/library-bg.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="gallery-header">
            <h2>Surigao Education Center — Campus Life</h2>
        </div>

        <div class="gallery-container">
            <div class="image-card">
                <img src="{{ asset('img/sec_gallery_1.jpg') }}" alt="SEC campus highlight" class="gallery-image">
                <p class="caption">Campus</p>
            </div>
            <div class="image-card">
                <img src="{{ asset('img/sec_gallery_2.jpg') }}" alt="SEC campus highlight" class="gallery-image">
                <p class="caption">Campus</p>
            </div>
            <div class="image-card">
                <img src="{{ asset('img/sec_gallery_3.png') }}" alt="SEC academic programs" class="gallery-image">
                <p class="caption">Academics</p>
            </div>
            <div class="image-card">
                <img src="{{ asset('img/sec_gallery_4.png') }}" alt="SEC student life" class="gallery-image">
                <p class="caption">Student Life</p>
            </div>
            <div class="image-card">
                <img src="{{ asset('img/sec_gallery_5.png') }}" alt="SEC Montessori" class="gallery-image">
                <p class="caption">Montessori</p>
            </div>
            <div class="image-card">
                <img src="{{ asset('img/sec_gallery_6.png') }}" alt="SEC Grade School" class="gallery-image">
                <p class="caption">Grade School</p>
            </div>
        </div>
    </section>

    <section class="vm-section">
        <div class="vm-container">
            <div class="vm-item vision-item">
                <h2 class="vm-title">VISION</h2>
                <p>Surigao Education Center envisions to be a dynamic educational institution producing globally competitive professionals through quality education.</p>
            </div>
            <div class="vm-item mission-item">
                <h2 class="vm-title">MISSION</h2>
                <p>Surigao Education Center is committed to provide an excellent quality education, appropriate, relevant, and responsive to the needs of our stakeholders through a dynamic educational system anchored on the institutional core values with competent human resources, facilities, research, and development.</p>
            </div>
        </div>

        <div class="keplrc-description">
            <p>Surigao Education Center is a non-sectarian, non-stock educational institution established in 1978. Strategically located at Kilometer 2, National Highway, Surigao City, Philippines, SEC has evolved into a respected Higher Education Institution in the Caraga Region. Through its commitment to academic excellence and holistic development, the institution offers programs spanning basic to tertiary education, duly recognized by CHED, TESDA, MARINA, and DepEd.</p>
        </div>
    </section>

    <div class="philosophy-container">
        <h2 class="philosophy-title">Philosophy</h2>
        <p class="philosophy-intro">The main philosophy of the library is efficiency of service. Its primary function is to transmit into action its institutional objectives. As a service agency, it is considered the brain of the institution and acts as the teaching agency in terms of giving assistance in the location of information from all available library resources. To achieve the full expression of service to its clientele, the library must be:</p>

        <ol class="philosophy-list">
            <li>An active and even aggressive participant in the whole program of education as it strives to meet the needs of the students, teachers and administration as well;</li>
            <li>A living repository of well-distributed and up-dated collections which readily support the course curriculum offerings and enhances the education’s learning processes and teaching competence;</li>
            <li>A resourceful facilitation of materials appropriate and most meaningful in the clientele’s growth and development as individuals;</li>
            <li>An efficient teaching instrument in the formation of a genuine citizen through the development of moral and spiritual values as designed in the curriculum; and</li>
            <li>It must be an efficient service agency that could readily answers the needs of every library clientele and whole objectives are adequately met by providing reference materials in all the subjects in the curriculum.</li>
        </ol>
    </div>

    <section class="goals-objectives-section">
        <div class="goals-container">
            <h2 class="goals-main-title">Goals and Objectives of the Library</h2>
            <p class="goals-subtitle">In line with the Vision and Mission of Surigao Education Center, the library shall achieve the following goals and objectives.</p>

            <h3 class="goals-heading">Goals</h3>
            <ol class="goals-list">
                <li>The foremost provider of information resources to support the academic requirements of our students and professional development for faculty, staff and researchers.</li>
                <li>The foremost provider of information resources to support the teaching and research functions of our students, faculty, staff and researchers.</li>
                <li>A teaching library engaged in the development of the information research skills of students, faculty, staff and researchers.</li>
                <li>A preserver and developer of collection and archives essential to faculty and student researches.</li>
            </ol>
        </div>
    </section>

    <section class="objectives-section">
        <div class="goals-container">
            <h2 class="goals-main-title">Library Hours</h2>
            <p class="goals-subtitle">The Library is open from
                <strong>Monday to Friday at 8:00 AM to 5:00 PM. </strong>
                Saturday hours are <strong>8:00 AM to 12:00 NN.</strong>
                During midterm and final examination periods, extended hours may be announced by the library.</p>

            <h3 class="goals-heading">Objectives</h3>
            <ol class="goals-list">
                <li>To acquire printed, non-printed, electronic resources and
                    other instructional materials in line with the demands of the curriculum and the needs of the clientele and to organize these materials for effective use.</li>
                <li>To guide the clientele on the choice of resources and other learning materials for personal and curricular purposes.</li>
                <li>To develop clientele’s skill and resourcefulness on the use of printed, non-printed and electronic resources in the library and
                    to encourage the habit of personal investigation.</li>
                <li>To help every library clientele establish a wide range of significant interests.</li>
                <li>To provide aesthetic experience and develop appreciation of the arts.</li>
                <li>To encourage lifelong education through the use of library resources.</li>
                <li>To encourage social attitudes and provide experience in a social and democratic living.</li>
                <li>To include provisions for physical, social aspects and professional development of staff.</li>
                <li>To work cooperatively and constructively with the entire SEC community.</li>
            </ol>
        </div>
    </section>

    <footer class="site-footer">
        <div class="footer-content">
            <img src="{{ asset('img/sec_logo.png') }}" alt="SEC Logo" class="footer-logo">
            <h2 class="footer-university-name">SURIGAO EDUCATION CENTER</h2>
            <p class="footer-tagline">"Producing Globally Competitive Professionals Through Quality Education."</p>
            <p class="footer-tagline">Km. 2, National Highway, Surigao City | admin@sec.edu.ph | 083-221-332</p>
            <p class="footer-copyright">Pantas &copy; {{ date('Y') }}. All Rights Reserved.</p>
        </div>
    </footer>

    @include('partials.auth-modal')

    <script src="{{ asset('script.js') }}?v={{ filemtime(public_path('script.js')) }}"></script>
    <script src="{{ asset('js/auth-modal.js') }}?v=4"></script>
</body>
</html>
