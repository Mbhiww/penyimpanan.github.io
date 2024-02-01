<?php
    include "service/database.php";
?>
<!--by toby
ambil tanpa izin parah sih-->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madings - Platform Mading Online</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Madings</h1>
        <p>Platform Mading Online</p>
    </header>

    <div class="navbar">
        <a href="#home" onclick="scrollToSection('home')">Home</a>
        <a href="#fitur" onclick="scrollToSection('features')">Fitur</a>
        <a href="#tentang" onclick="scrollToSection('about')">Tentang</a>
        <a href="#contact" onclick="scrollToSection('contact')">Kontak</a>
    </div>

    <main id="home">
        <h2>Selamat datang di Madings</h2>
        <p>Jelajahi dunia kreativitas melalui platform mading interaktif kami. Bergabung sekarang dan ungkapkan potensi artistik Anda!</p>

         <?php
           $query ="SELECT * FROM crud";
         $result = mysqli_query($db, $query);
         while($row = mysqli_fetch_assoc($result))
     {
     ?>
        <!-- Konten Mading -->
        <div class="mading-container">
            <!-- Kartu-kartu Mading -->
            <div class="mading-card">
            <h3><?php echo $row['judul']; ?></h3>
            <p><?php echo $row['isi']; ?></p>
            </div>
        <?php
     }
        ?>
           
    </main>
   
    <main id="fitur">
        <h2>Temukan Fitur-Fitur Madings</h2>
        <p>Terokai berbagai fitur yang ditawarkan Madings untuk meningkatkan pengalaman kreatif Anda.</p>
    
        <!-- Konten Fitur -->
        <div class="feature-container">
            <div class="feature-card">
                <h3>Kursus Interaktif</h3>
                <p>Ikuti kursus interaktif kami dan pelajari teknik seni yang baru dari instruktur berpengalaman.</p>
            </div>
    
            <div class="feature-card">
                <h3>Kolaborasi Komunitas</h3>
                <p>Terhubung dengan sesama seniman, bagikan karya Anda, dan berkolaborasi dalam proyek-proyek menarik di dalam komunitas kreatif kami.</p>
            </div>
    
            <div class="feature-card">
                <h3>Workshop Virtual</h3>
                <p>Ikuti workshop virtual untuk meningkatkan keterampilan Anda. Berinteraksi dengan instruktur dan dapatkan pengalaman praktis.</p>
            </div>

            <div class="feature-card">
                <h3>fungsi</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore architecto unde a, ipsam ea in quidem animi aut numquam quibusdam autem illo voluptas velit et totam, cum ullam itaque commodi.</p>
            </div>
            <div class="feature-card">
                <h3>fungsi</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore architecto unde a, ipsam ea in quidem animi aut numquam quibusdam autem illo voluptas velit et totam, cum ullam itaque commodi.</p>
            </div>
            <div class="feature-card">
                <h3>fungsi</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore architecto unde a, ipsam ea in quidem animi aut numquam quibusdam autem illo voluptas velit et totam, cum ullam itaque commodi.</p>
            </div>
         
            <!-- Tambahkan kartu fitur lainnya sesuai kebutuhan -->
        </div>
    </main>

    <!-- Konten About -->
    <main id="tentang">
    <div class="about-container">
        <h2>Tentang Madings</h2>
        <p>Madings adalah platform online terkemuka yang didedikasikan untuk mengembangkan kreativitas dan ekspresi artistik. Misi kami adalah menyediakan ruang di mana para seniman, kreator, dan pembelajar dapat berkumpul untuk berbagi, berkolaborasi, dan saling menginspirasi.</p>

        <p>Dengan berbagai kursus interaktif, workshop virtual, dan komunitas yang bersemangat, Madings adalah tempat yang sempurna untuk meningkatkan keterampilan Anda, terhubung dengan individu sejenis, dan menjelajahi kemungkinan kreativitas tanpa batas.</p>

        <p>Bergabunglah dengan kami dalam perjalanan ini dan biarkan Madings menjadi pintu gerbang Anda ke dunia penemuan artistik. Ungkapkan imajinasi Anda, bagikan hasrat Anda, dan menjadi bagian dari komunitas yang merayakan keindahan kreativitas.</p>
    </div>
</main> 
     <main id="contact">
    <!-- Konten Contact -->
    <div class="contact-container">
        <h2>Hubungi Madings</h2>
            <p>Jika Anda memiliki pertanyaan atau ingin berkomunikasi dengan kami, jangan ragu untuk menghubungi kami. Kami senang mendengar dari Anda!</p>
    
            <!-- Informasi Kontak -->
            <div class="contact-info">
                <p>Email: KelasXi-k4@gmail.com</p>
                <p>Telepon: 08531597****</p>
                <p>Alamat:Smk Al falah bandung</p>
           
            <form>
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required></textarea>
    
                <input type="submit" value="Kirim">
            </form>
        </div>
    </main>
        <!-- Footer -->
        <footer>
            <p>&copy; 2022 Madings. Semua hak dilindungi.</p>
        </footer>
    
        <!-- JavaScript untuk animasi scroll -->
        <script>
            function scrollToSection(sectionId) {
                const section = document.getElementById(sectionId);
                if (section) {
                    window.scrollTo({
                        top: section.offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        </script>
    </body>
    </html>
    
