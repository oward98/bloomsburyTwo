<?php get_header() ?>

<main id='homepageMain'>
    <section id='featured'>
        <?php require 'homepage_slideshow/slideshow.php'; ?>
    </section>
    <section id='latestPosts'>
        <h2>News</h2>
        <div class='pageBanner'>
            <?php require 'latest_posts/latest_posts.php' ?>
        </div>
    </section>
    <section id='conservationAreaSection'>
        <h2>Our Conservation Areas</h2>
        <p>We cover seven conservation areas in the heart of historic London as an advisory committee, comprising all of Camden's Central London area, with the exception of Hatton Garden. Many of our conservation areas are children of the Bloomsbury Conservation Area or are in some way related to it.</p> 
        <p>We are consulted with on all changes to our conservation areas, and report on planning breaches in the area, while also supporting residents in heritage-based objections to applications in their neighbourhood.</p>
        <div class='pageBanner'>
            <?php
                require('conservationAreas/conservationAreas.php');
                foreach($conservationAreas as $conservationArea) {
                    $conservationArea->returnCard();
                }
            ?>
        </div>
    </section>
    <section id='map'>
        <h2>Bloomsbury Map (In Development)</h2>
        <p>Use our interactive map to explore the Bloomsbury Conservation Areas. You can search addresses, see boundaries, subareas, designation histories, and read the appraisals and management plans which are synced with the map itself.</p>
        <p>This resource is in development meaning it is not yet complete and you could enounter errors.</p>
        <div class='pageBanner'>
            <a id='map' aria-label='Interactive map of the Bloomsbury Conservation Areas' class='pagePreview bordered' href='https://map.bloomsburylives.co.uk' target='_blank' rel='noopener'>
                <div class='pageThumbnailContainer'>
                    <img alt='Screenshot of the interactive map of the Bloomsbury Conservation Areas' id='mapImage' src=<?= get_template_directory_uri() . '/images/mapImage.png' ?>>
                </div>
            </a>
        </div>
    </section>
    <section id='clientSection' class='pageBanner'>
        <a class='pagePreview' href=<?=get_permalink(955)?>>
            <h2>Residents -</h2>
            <span>Contact us if you think we should be making an objection to an application in your neighbourhood. You can also learn about our conservation areas, and how you can help us in safeguarding their heritage.</span>
        </a>
        <a class='pagePreview' href=<?=get_permalink(994)?>>
            <h2>Businesses -</h2>
            <span>Putting in an application for a change of use or a new shopfront? Use our resources to learn about what is and is not acceptable, and how you can enhance our conservation areas.</span>
        </a>
        <a class='pagePreview' href=<?=get_permalink(194)?>>
            <h2>Developers -</h2>
            <span>Get in touch at an early stage of proposals to receive feedback from the advisory committee. We can also attend meetings and conduct site visits. You can use our resources to learn about our conservation areas, and how to enhance them.</span>
        </a>
    </section>
</main>

<?php get_footer() ?>