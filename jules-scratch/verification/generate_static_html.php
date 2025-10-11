<?php
// jules-scratch/verification/generate_static_html.php

// Mock WordPress functions that are used in the template
function get_option($key, $default = false) {
    if ($key === 'qp_product_mapping') {
        // Return a realistic, complex mock of the data structure
        return [
            123 => [
                'enabled' => true,
                'internal_id' => '1',
                'payment_plans' => [
                    ['label' => 'Paid monthly', 'discount' => '0'],
                    ['label' => 'Paid upfront', 'discount' => '0.1']
                ],
                'protocol_lengths' => [
                    ['value' => '90-day', 'label' => '90-Day Supply', 'discount' => '0', 'months' => '3', 'benefit' => '90-day benefit text.', 'labels' => 'green:Best Value'],
                    ['value' => '180-day', 'label' => '180-Day Supply', 'discount' => '25', 'months' => '6', 'benefit' => '180-day benefit text.', 'labels' => 'orange:More Savings'],
                ],
                'dosages' => [
                    ['sku' => 'SKU001', 'name' => 'Standard Dosage', 'price' => '297'],
                    ['sku' => 'SKU002', 'name' => 'Higher Dosage', 'price' => '347'],
                ],
                'coupon' => ['discount' => '100', 'type' => 'one-time'],
            ],
            456 => [
                'enabled' => true,
                'internal_id' => '2',
                'payment_plans' => [
                    ['label' => 'Monthly', 'discount' => '0']
                ],
                'protocol_lengths' => [
                    ['value' => 'month-to-month', 'label' => 'Month-to-Month', 'discount' => '-50', 'months' => '1', 'benefit' => 'Monthly benefit.', 'labels' => 'blue:Flexible'],
                ],
                'dosages' => [
                    ['sku' => 'SKU003', 'name' => 'Default Dose', 'price' => '497'],
                ],
                'coupon' => ['discount' => '50', 'type' => 'lifetime'],
            ],
        ];
    }
    return $default;
}

function wc_get_products($args) {
    // Mock product objects based on the IDs from our mocked option
    $mock_products = [];
    $product_ids = $args['include'] ?? [];

    foreach ($product_ids as $id) {
        $mock_product = new stdClass();
        $mock_product->id = $id;
        $mock_product->name = "WooCommerce Product {$id}";
        $mock_product->description = "This is the description for product {$id}.";
        $mock_product->image_id = 987; // A mock image ID

        // Add a get_id() method to the mock object
        $mock_product->get_id = function() use ($id) {
            return $id;
        };
        // Add other methods if needed by the template
        $mock_product->get_name = function() use ($mock_product) {
            return $mock_product->name;
        };
        $mock_product->get_description = function() use ($mock_product) {
            return $mock_product->description;
        };
        $mock_product->get_image_id = function() use ($mock_product) {
            return $mock_product->image_id;
        };

        $mock_products[] = $mock_product;
    }
    return $mock_products;
}

function esc_url($url) { return $url; }
function admin_url($path) { return "http://mock-admin/{$path}"; }
function wp_get_attachment_image_url($id, $size) { return "https://via.placeholder.com/400x300.png?text=Product+Image"; }
function wp_kses_post($string) { return $string; }
function current($array) { return reset($array); }
function json_encode($data) { return json_encode($data, JSON_PRETTY_PRINT); }


// Capture the output of the template file
ob_start();
include __DIR__ . '/../../../templates/select.php';
$html = ob_get_clean();

// Save the captured HTML to a static file
file_put_contents(__DIR__ . '/verification.html', $html);

echo "Static HTML generated successfully at jules-scratch/verification/verification.html\n";

// Dummy stdClass to prevent errors if wc_get_products returns objects
if (!class_exists('stdClass')) {
   class stdClass {}
}