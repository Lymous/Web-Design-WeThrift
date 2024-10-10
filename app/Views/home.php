<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

        <!-- Main Content -->
        <div class="container">

            <!-- Featured Section -->
            <div class="section">
                <h2>Featured</h2>
                <div class="featured-wrapper">
                    <img src="fotohome/featured.png" alt="Featured Product">
                </div>
            </div>

            <!-- Popular Now Section -->
            <div class="section">
                <h2>Popular Now</h2>
                <div class="grid">
                    <div class="grid-popular-wrapper">
                        <img src="fotohome/popular1.png" alt="Popular Item 1">
                    </div>
                    <div class="grid-popular-wrapper">
                        <img src="fotohome/popular2.png" alt="Popular Item 2">
                    </div>
                    <div class="grid-popular-wrapper">
                        <img src="fotohome/popular3.png" alt="Popular Item 3">
                    </div>
                    <div class="grid-popular-wrapper">
                        <img src="fotohome/popular4.png" alt="Popular Item 4">
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="grid">
                    <div class="grid-best-wrapper">
                        <img src="fotohome/best1.png" alt="Best Find 1">
                    </div>
                    <div class="grid-best-wrapper">
                        <img src="fotohome/best2.png" alt="Best Find 2">
                    </div>
                    <div class="grid-best-wrapper">
                        <img src="fotohome/best3.png" alt="Best Find 3">
                    </div>
                    <div class="grid-best-wrapper">
                        <img src="fotohome/best4.png" alt="Best Find 4">
                    </div>
                    <div class="grid-best-wrapper">
                        <img src="fotohome/best5.png" alt="Best Find 5">
                    </div>
                </div>
            </div>

            <!-- Best Finds Section -->
            <div class="section">
                <h2>Best Finds</h2>
                <div class="grid">
                    <div class="grid-best-wrapper">
                        <img src="fotohome/best6.png" alt="Best Find 1">
                    </div>
                    <div class="grid-best-wrapper">
                        <img src="fotohome/best7.png" alt="Best Find 2">
                    </div>
                    <div class="grid-best-wrapper">
                        <img src="fotohome/best8.png" alt="Best Find 3">
                    </div>
                    <div class="grid-best-wrapper">
                        <img src="fotohome/best9.png" alt="Best Find 4">
                    </div>
                    <div class="grid-best-wrapper">
                        <img src="fotohome/best10.png" alt="Best Find 5">
                    </div>
                </div>
            </div>

             <!-- Hot News Section -->
            <div class="section">
                <h2>Hot News</h2>
                <div class="grid-news">
                    <!-- First News Item -->
                    <div class="news-item">
                        <img src="fotohome/news1.png" alt="Hot News 1">
                        <div class="news-description">
                            <p>10 - 17 Jan 2024</p>
                            <p>Thrifting area in Surabaya</p>
                        </div>
                    </div>
                    
                    <!-- Second News Item -->
                    <div class="news-item">
                        <img src="fotohome/news2.png" alt="Hot News 2">
                        <div class="news-description">
                            <p>10 - 17 Feb 2024</p>
                            <p>Thrifting area in Gresik</p>
                        </div>
                    </div>
                    
                    <!-- Third News Item -->
                    <div class="news-item">
                        <img src="fotohome/news3.png" alt="Hot News 3">
                        <div class="news-description">
                            <p>10 - 17 Mei 2024</p>
                            <p>Thrifting area in Sidoarjo</p>
                        </div>
                    </div>
                </div>
                <!-- "See More" Link -->
                <div class="see-more">
                    <a href="event">See More..</a>
                </div>
            </div>

        </div>

        <?= $this->endSection(); ?>
