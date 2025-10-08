from playwright.sync_api import sync_playwright, expect
import subprocess
import time

def run(playwright):
    # Start a simple HTTP server to serve the template files
    server = subprocess.Popen(['python3', '-m', 'http.server', '8000'])
    time.sleep(3)  # Give the server a moment to start

    browser = playwright.chromium.launch(headless=True)
    context = browser.new_context()
    page = context.new_page()

    try:
        # Verify shipping page
        page.goto("http://localhost:8000/templates/shipping.php")
        # Take a screenshot of the address input fields
        address_section = page.locator('input[name="shipping_address1"]')
        address_section.screenshot(path="jules-scratch/verification/shipping_page_address_input.png")

        # Fill in a partial address to check for autocomplete (visual check)
        page.fill('input[name="shipping_address1"]', '1600 Amphitheatre Parkway')
        page.screenshot(path="jules-scratch/verification/shipping_page_autocomplete.png")

    finally:
        browser.close()
        server.kill()

with sync_playwright() as playwright:
    run(playwright)