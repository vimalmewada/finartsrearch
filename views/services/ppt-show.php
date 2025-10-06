<?php
$jsonFilePath = 'public/data/portfolios.json';
$jsonData = file_get_contents($jsonFilePath);
$data = json_decode($jsonData, true);

// Decode JSON to PHP array
$data = json_decode($jsonData, true);

// Retrieve the 'name' from the URL query parameter
$name = isset($_GET['name']) ? $_GET['name'] : '';

// Search for the corresponding URL based on the 'name' query parameter
$url = '';
foreach ($data['data'] as $item) {
    if (strtolower($item['name']) == strtolower($name)) {
        $url = $item['url'];
        break;
    }
}

// If no match, use a default URL
if (!$url) {
    $url = 'https://example.com/no-content-found'; // Default URL if no match is found
}
?>

<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1><?php echo $name; ?></h1>
            <p></p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current"><?php echo $name; ?></li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">
         
            <div class="row gy-5">
                <!-- Embed Google Drive file using iframe -->
                <iframe src="<?php echo $url; ?>" width="640" height="480" frameborder="0" allowfullscreen="true"></iframe>
            </div>
        </div>

    </section><!-- /Service Details Section -->

</main>