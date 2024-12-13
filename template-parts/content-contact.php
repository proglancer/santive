<section class="map-background-section min-vh-100" id="contact_section">
    <!-- Map Background -->
    <div class="map-container">
        <div id="map" style="width: 100%; height: 100%;"></div>
    </div>

    <!-- Address Information -->
    <?php if (have_rows('contact_info')) : ?>
        <?php while (have_rows('contact_info')) : the_row(); 
            $address = get_sub_field('address');
        ?>
        <div class="address-overlay text-center">
            <h3>Contact Us</h3>
            <p><i class="fa-solid fa-map"></i> <?php echo esc_html($address); ?></p>
            <p><i class="fa-solid fa-tty"></i> <?php echo esc_html(get_sub_field('phone')); ?></p>
            <p><i class="fa-regular fa-envelope"></i> <a href="mailto:<?php echo esc_attr(get_sub_field('email')); ?>" class="text-white"><?php echo esc_html(get_sub_field('email')); ?></a></p>
        </div>

        <!-- Add OpenStreetMap CSS and JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        
        <script>
            // Initialize the map
            var map = L.map('map').setView([51.505, -0.09], 13);
            
            // Add OpenStreetMap tiles
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Function to geocode address using Nominatim
            function geocodeAddress() {
                var address = <?php echo json_encode($address); ?>;
                
                fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(address)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.length > 0) {
                            var lat = parseFloat(data[0].lat);
                            var lon = parseFloat(data[0].lon);
                            
                            // Center map on address
                            map.setView([lat, lon], 16);
                            
                            // Add marker
                            L.marker([lat, lon]).addTo(map)
                                .bindPopup(address)
                                .openPopup();
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            // Call geocode function when page loads
            geocodeAddress();
        </script>
        <?php endwhile; ?>
    <?php endif; ?>
</section>