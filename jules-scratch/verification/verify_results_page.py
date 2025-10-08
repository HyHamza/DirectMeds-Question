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
        # Verify results page
        page.goto("http://localhost:8000/templates/results.php")
        # Take a screenshot of the whole page
        page.screenshot(path="jules-scratch/verification/results_page.png")

    finally:
        browser.close()
        server.kill()

with sync_playwright() as playwright:
    run(playwright)