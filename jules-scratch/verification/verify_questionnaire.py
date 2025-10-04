from playwright.sync_api import sync_playwright, expect
import os
import subprocess
import time

def run_verification(playwright):
    # Start a simple HTTP server in the 'cloned_site' directory
    server_process = subprocess.Popen(["python", "-m", "http.server", "8000"], cwd="cloned_site")
    time.sleep(2)  # Give the server a moment to start

    browser = playwright.chromium.launch(headless=True)
    page = browser.new_page()

    # Navigate to the first page on the local server
    page.goto("http://localhost:8000/questionnaire-1/")

    # Take a screenshot of the first page
    page.screenshot(path="jules-scratch/verification/questionnaire-1.png")

    # Click the male radio button to navigate to the next page
    male_button = page.locator("#male")
    male_button.click()

    # Wait for navigation to complete
    page.wait_for_load_state("load")

    # Take a screenshot of the second page
    page.screenshot(path="jules-scratch/verification/questionnaire-1b.png")

    browser.close()
    server_process.kill()

with sync_playwright() as playwright:
    run_verification(playwright)