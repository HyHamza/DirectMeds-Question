from playwright.sync_api import sync_playwright

def run(playwright):
    browser = playwright.chromium.launch()
    page = browser.new_page()

    # Navigate to the questionnaire page
    page.goto("http://localhost/questionnaire-1")

    # Wait for the first question to load to ensure the page is ready
    page.wait_for_selector('h1:has-text("Are you a man or a woman?")')

    # Take a screenshot to verify the template changes
    page.screenshot(path="jules-scratch/verification/verification.png")

    browser.close()

with sync_playwright() as playwright:
    run(playwright)