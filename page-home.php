<?php get_header() ?>

<main>
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
            <a id='bloomsbury' aria-label='Bloomsbury Conservation Area' class='pagePreview bordered conservationAreaCard' href=<?=get_permalink(1061)?>>
                <div class='pageThumbnailContainer'>
                <?=get_the_post_thumbnail(1061, 'full')?>
                </div>
                <div class='padded grow verticalFlex'>
                    <header>
                        <h3>Bloomsbury</h3>
                        <span>One of the country's most significant conservation areas</span>
                    </header>
                    <div class='grow'>
                        <p>The Bloomsbury Conservation Area was designated in 1968, just a year after conservation areas were created with the Civic Amenities Act 1967. It is often referred to as an <em>internationally significant example of town planning</em>, with its garden squares, Georgian terraces, and grand buildings being world-famous.</p>
                        <p>Despite being a heritage asset of international importance, the Bloomsbury Conservation Area is under immense threat from irreperable harm due to overdevelopment, and is one of our most at-risk conservation areas.</p>
                    </div>
                    <div class='conservationAreaDetails padded'>
                        <ul class='spaced'>
                            <li>Designated: 1968</li>
                            <li>Significance: Exceptional</li>
                            <li>Threat Level: High</li>
                        </ul>
                    </div>
                </div>
            </a>
            <a id='charlotteStreet' aria-label='Charlotte Street Conservation Area' class='pagePreview bordered conservationAreaCard' href=<?=get_permalink(1090)?>>
                <div class='pageThumbnailContainer'>
                <?=get_the_post_thumbnail(1090, 'large')?>
                </div>
                <div class='padded grow verticalFlex'>
                    <header>
                        <h3>Charlotte Street</h3>
                        <span>A dynamic and densely packed conservation area in the heart of Fitzrovia</span>
                    </header>
                    <div class='grow'>
                        <p>The Charlotte Street Conservation Area makes Fitzrovia what it's famous for. Packed with Georgian terraces with varied independent businesses trading on the ground floors, it is an interesting place to be and to live. It unfortunately has suffered in recent years from a lack of investment in the public realm.</p>
                    </div>
                    <div class='conservationAreaDetails padded'>
                        <ul class='spaced'>
                            <li>Designated: 1972</li>
                            <li>Significance: High</li>
                            <li>Threat Level: Medium</li>
                        </ul>
                    </div>
                </div>
            </a>
            <a id='denmarkStreet' aria-label='Denmark Street Conservation Area' class='pagePreview bordered conservationAreaCard' href=<?=get_permalink(1092)?>>
                <div class='pageThumbnailContainer'>
                <?=get_the_post_thumbnail(1092, 'large')?>
                </div>
                <div class='padded grow verticalFlex'>
                    <header>
                        <h3>Denmark Street</h3>
                        <span>Seven centuries of historic London</span>
                    </header>
                    <div class='grow'>
                        <p>The Denmark Street Conservation Area is home to London's only street with Stuart terraces on both sides. Its winding alleys and streets are an important remnant of medieval London. Thanks to Crossrail and subsequent overdevelopment, it has suffered an immense decline in the quality of the urban fabric, and is our most at-risk conservation area.</p>
                    </div>
                    <div class='conservationAreaDetails padded'>
                        <ul class='spaced'>
                            <li>Designated: 1984</li>
                            <li>Significance: Medium</li>
                            <li>Threat Level: High</li>
                        </ul>
                    </div>
                </div>
            </a>
            <a id='fitzroySquare' aria-label='Fitzroy Square Conservation Area' class='pagePreview bordered conservationAreaCard' href=<?=get_permalink(1094)?>>
                <div class='pageThumbnailContainer'>
                <?=get_the_post_thumbnail(1094, 'large')?>
                </div>
                <div class='padded grow verticalFlex'>
                    <header>
                        <h3>Fitzroy Square</h3>
                        <span>A stately Georgian square in Fitzrovia</span>
                    </header>
                    <div class='grow'>
                        <p>The Fitzroy Square Conservation Area is home to a marvellous Georgian square designed by the renowned Adam Brothers. It retains some of the most consistent and well-preserved Georgian streets to be found in Central London.</p>
                    </div>
                    <div class='conservationAreaDetails padded'>
                        <ul class='spaced'>
                            <li>Designated: 1968</li>
                            <li>Significance: High</li>
                            <li>Threat Level: Low</li>
                        </ul>
                    </div>
                </div>
            </a>
            <a id='hanwayStreet' aria-label='Hanway Street Conservation Area' class='pagePreview bordered conservationAreaCard' href=<?=get_permalink(1096)?>>
                <div class='pageThumbnailContainer'>
                <?=get_the_post_thumbnail(1096, 'large')?>
                </div>
                <div class='padded grow verticalFlex'>
                    <header>
                        <h3>Hanway Street</h3>
                        <span>A curious backwater</span>
                    </header>
                    <div class='grow'>
                        <p>The Hanway Street Conservation Area is possibly London's smallest conservation area comprising just two streets. Its curious winding street-pattern is an important remnant of London's pre-Georgian development.</p>
                    </div>
                    <div class='conservationAreaDetails padded'>
                        <ul class='spaced'>
                            <li>Designated: 1989</li>
                            <li>Significance: Low</li>
                            <li>Threat Level: High</li>
                        </ul>
                    </div>
                </div>
            </a>
            <a id='kingsway' aria-label='Kingsway Conservation Area' class='pagePreview bordered conservationAreaCard' href=<?=get_permalink(1098)?>>
                <div class='pageThumbnailContainer verticalFlex'>
                <?=get_the_post_thumbnail(1098, 'large')?>
                </div>
                <div class='padded grow'>
                    <header>
                        <h3>Kingsway</h3>
                        <span>Edwardian commercial magnificence</span>
                    <header>
                    <div class='grow'>
                        <p>The Kingsway represents one of the most ambitious commercial building projects in London's history. It retains its Edwardian character remarkably well, although is blighted by traffic and has suffered from poor investment in the public realm.</p>
                    </div>
                    <div class='conservationAreaDetails padded'>
                        <ul class='spaced'>
                            <li>Designated: 1981</li>
                            <li>Significance: High</li>
                            <li>Threat Level: Low</li>
                        </ul>
                    </div>
                </div>
            </a>
            <a id='sevenDials' aria-label='Seven Dials Conservation Area' class='pagePreview bordered conservationAreaCard' href=<?=get_permalink(1100)?>>
                <div class='pageThumbnailContainer'>
                <?=get_the_post_thumbnail(1100, 'large')?>
                </div>
                <div class='padded grow verticalFlex'>
                    <header>
                        <h3>Seven Dials</h3>
                        <span>An icon of heritage-led regeneration</span>
                    </header>
                    <div class='grow'>
                        <p>The Seven Dials Conservation Area is an exemplar of heritage-led regeneration. After being threatened with demolition in the late sixties, the Seven Dials Trust saved the area and restored it to its former glory, and continue to curate and care for the area</p>
                    </div>
                    <div class='conservationAreaDetails padded'>
                        <ul class='spaced'>
                            <li>Designated: 1974</li>
                            <li>Significance: High</li>
                            <li>Threat Level: Low</li>
                        </ul>
                    </div>
                </div>
            </a>
            
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
        <a class='pagePreview'>
            <h2>Residents -</h2>
            <span>Contact us if you think we should be making an objection to an application in your neighbourhood. You can also learn about our conservation areas, and how you can help us in safeguarding their heritage.</span>
        </a>
        <a class='pagePreview'>
            <h2>Businesses -</h2>
            <span>Putting in an application for a change of use or a new shopfront? Use our resources to learn about what is and is not acceptable, and how you can enhance our conservation areas.</span>
        </a>
        <a class='pagePreview'>
            <h2>Developers -</h2>
            <span>Get in touch at an early stage of proposals to receive feedback from the advisory committee. We can also attend meetings and conduct site visits. You can use our resources to learn about our conservation areas, and how to enhance them.</span>
        </a>
    </section>
</main>

<?php get_footer() ?>