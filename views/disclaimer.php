<style>
.section-title {
    color: var(-text-emphasis);
    border-bottom: 2px solid var(--accent-color, #f39c12);
    padding-bottom: 0.5rem;
    margin-bottom: 1.5rem;
}



.highlight {
    color: var(--primary-color);
    font-weight: 600;
}

.sticky-sidebar {
    position: sticky;
    top: 100px;
    height: calc(100vh - 120px);
    overflow-y: auto;
    z-index: 99;
}

.list-group-item.active {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
    color: var(--custom-white);
}

@media (max-width: 991.98px) {
    .sticky-sidebar {
        position: relative;
        top: 0;
        height: auto;
        margin-bottom: 2rem;
    }
}
</style>


<main class="main">
    <!-- Page Title -->

    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1>Disclaimer</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Disclaimer</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Disclosure Section -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-5">

                <!-- Sidebar -->
                <div class="col-lg-4 sticky-sidebar">
                    <div class="service-box">
                        <h4>Navigation</h4>
                       <div class="services-list list-group">
                                <a href="#warning" class="list-group-item list-group-item-action active">
                                    <i class="bi bi-exclamation-triangle"></i> Standard Warning
                                </a>
                                <a href="#disclaimer" class="list-group-item list-group-item-action">
                                    <i class="bi bi-shield-exclamation"></i> Disclaimer
                                </a>
                                <a href="#terms" class="list-group-item list-group-item-action">
                                    <i class="bi bi-file-text"></i> Terms of Use
                                </a>
                                <a href="#liability" class="list-group-item list-group-item-action">
                                    <i class="bi bi-clipboard-x"></i> Limitation of Liability
                                </a>
                                <a href="#intellectual" class="list-group-item list-group-item-action">
                                    <i class="bi bi-c-circle"></i> Intellectual Property
                                </a>
                                <a href="#consent" class="list-group-item list-group-item-action">
                                    <i class="bi bi-check-circle"></i> User Consent
                                </a>
                            </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="col-lg-8 ps-lg-5">

                          <section id="warning"  style='padding:0px' class="mb-5">
                            <h3 class="section-title">
                              1. Standard Warning
                            </h3>
                            <div class="warning-box">
                                <p class="mb-0">
                                    "Investment in securities market are subject to market risks. Read all the related documents carefully before investing."
                                </p>
                            </div>
                        </section>

                        <!-- Disclaimer -->
                        <section id="disclaimer" style='padding:0px' class="mb-5" >
                            <h3 class="section-title">
                               2. Disclaimer
                            </h3>
                            <div class="disclaimer-box">
                                <p class="mb-3">
                                    "Registration granted by SEBI, Enlistment as RA with exchange and certification from NISM in no way guarantee performance of the Research Analyst or provide any assurance of returns to investors."
                                </p>
                                <p class="mb-0">
                                    "The securities quoted, if any are for illustration only and are not recommendatory."
                                </p>
                            </div>
                        </section>

                        <!-- Terms of Use -->
                        <section id="terms"   style='padding:0px' class="mb-5">
                            <h3 class="section-title">
                                3. Terms of Use
                            </h3>
                            <div class="terms-box">
                                <p>
                                    By accessing our website, you have read, understood & agree to be legally bound by the terms of the following disclaimer:
                                </p>
                                <ul>
                                    <li class="mb-2">Stock trading is inherently risky and you agree to assume complete and full responsibility for the outcomes of all trading decisions that you make, including but not limited to loss of capital.</li>
                                    <li class="mb-2">Under no circumstances should any person at this site make trading decisions based solely on the information discussed herein.</li>
                                    <li class="mb-2">Information and recommendations on the website are for general information only. Nothing contained herein is an advice to sell nor solicitation to buy any securities.</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Limitation of Liability -->
                        <section id="liability"  style='padding:0px' class="mb-5">
                            <h3 class="section-title">
                              4. Limitation of Liability
                            </h3>
                            <p>
                                Finarts Research, its directors, employees, or affiliates shall not be liable for any direct, indirect, incidental, special, consequential, or exemplary damages, including but not limited to damages for loss of profits, goodwill, use, data, or other intangible losses resulting from:
                            </p>
                            <ul>
                                <li class="mb-2">The use or inability to use our services</li>
                                <li class="mb-2">Unauthorized access to or alteration of your transmissions or data</li>
                                <li class="mb-2">Statements or conduct of any third party on the service</li>
                                <li class="mb-2">Any other matter relating to the service</li>
                            </ul>
                        </section>

                        <!-- Intellectual Property -->
                        <section id="intellectual"  style='padding:0px' class="mb-5">
                            <h3 class="section-title">
                               5. Intellectual Property
                            </h3>
                            <p>
                                All information, recommendations, advice and contents shared on the website is meant to be used for personal purpose only and must not be reproduced or copied in any form.
                            </p>
                            <p>
                                The content, organization, graphics, design, and other matters related to this site are protected under applicable copyrights, trademarks, and other proprietary rights. The copying, redistribution, use, or publication by you of any such matters or any part of the site is strictly prohibited.
                            </p>
                        </section>

                        <!-- User Consent -->
                        <section id="consent"  style='padding:0px' class="mb-5">
                            <h3 class="section-title">
                               6. User Consent
                            </h3>
                            <div class="alert alert-info">
                                <p class="mb-0">
                                    By continuing to use this website, you agree to all our terms and policies as outlined in this disclaimer.
                                </p>
                            </div>
                            <p>
                                We reserve the right to make changes to this disclaimer at any time. Your continued use of the website following the posting of changes to these terms will mean you accept those changes.
                            </p>
                        </section>

                        <div class="alert alert-info mt-4">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            Last updated: October 03, 2025
                        </div>
                </div>

            </div>
        </div>
    </section>
</main>